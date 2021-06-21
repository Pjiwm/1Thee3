<?php
//IMPORTANT: this program needs a token and a checksum file (checksum file can be left empty)
//Imports for Tinify API
require_once("lib/Tinify/Exception.php");
require_once("lib/Tinify/ResultMeta.php");
require_once("lib/Tinify/Result.php");
require_once("lib/Tinify/Source.php");
require_once("lib/Tinify/Client.php");
require_once("lib/Tinify.php");
//API Key for TinyPNG:
\Tinify\setKey("lG1TMksZ6VFtrwVK5ZKlrQymYQxGqDxs");

//vars
$img_urls = [];
$album_ids = [];
$ids = [];

//Read token file
$tokenFile = fopen("token.txt", "r") or die("Unable to open file!");
$access_token = fread($tokenFile, filesize("token.txt"));
fclose($tokenFile);

// Get all media items from instagram account
$json_response = curlRequest('https://graph.instagram.com/me/media?fields=media_url,media_type&access_token=' . $access_token);

//Read all Ids, to check data with checksum
foreach ($json_response['data'] as $mediaItem) {
    $ids[] = $mediaItem['id'];
}

//Calculate checksum
$checksum = crc32(implode(",", $ids));
printf("checksum: %u ", $checksum);

//Read checksum file
$checksum_file = fopen("checksum.txt", "r") or die("Unable to open file!");
$stored_checksum = fread($checksum_file, filesize("checksum.txt"));
fclose($checksum_file);

//Compare checksums. If the checksums are not the same, there are new images and the download starts, otherwise the process stops
if ($stored_checksum != $checksum) {
    //Write new checksum into checksum.txt (w+ to overwrite the existing checksum)
    $checksum_file = fopen("checksum.txt", "w+") or die("Unable to open file!");
    fwrite($checksum_file, $checksum);
    fclose($checksum_file);

    //Process results first, sort out albums and images
    foreach ($json_response['data'] as $mediaItem) {
        //If the media_type is an album, read them in next foreach loop
        if ($mediaItem['media_type'] == "CAROUSEL_ALBUM") {
            $album_ids[] = $mediaItem['id'];
            //Else, store them in img_urls
        } else if ($mediaItem['media_type'] == "IMAGE") {
            $img_urls[] = $mediaItem['media_url'];
        }
    }
    
    $album_ids = array_reverse($album_ids);

    // Add album images 
    $album_limit = 4;
    if(sizeof($album_ids) < 5) {
        $album_limit = sizeof($album_ids);
    }
    for ($i = 0; $i < $album_limit; $i++) {
        $url = 'https://graph.instagram.com/' . $album_ids[$i] . '/children?fields=media_url,media_type&access_token=' . $access_token;
        $albumData = curlRequest($url);
        //Read all media_urls in the albums, put them in in img_urls as well
        foreach ($albumData['data'] as $mediaItem) {
            if ($mediaItem['media_type'] == "IMAGE") {
                $img_urls[] = $mediaItem['media_url'];
            }
        }
    }

    //The img_urls array is now filled with all images on the instagram feed
    
    //To make sure that the newest images are loaded first, the array is reversed
    $img_urls = array_reverse($img_urls);
    
    //The first 5 (0 to 5) img_urls is now uploaded to Tinify, to scale it to a width 350 and compress them.
    for ($i = 0; $i < 5; $i++) {
        $img_url = $img_urls[$i];
        $source = \Tinify\fromUrl($img_url);
        $resized = $source->resize(array(
            "method" => "scale",
            "width" => 350
        ));
        //Puts them in public_html to be read by the website, numbers them 0 to 4
        $resized->toFile("../public_html/instaCarousel/" . $i . ".jpg");
        //Test display
        echo '<img src=' . $i . '.jpg>';
    };
} else {
    printf("Checksum is the same as the last request, not executing program");
}

//Functions
function curlRequest($url)
{
    // Create cURL resource 
    $curl = curl_init();

    // Set client url options
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Run cURL (excecute http request)
    $result = curl_exec($curl);

    // Close cURL resource
    curl_close($curl);

    return json_decode($result, true);
}
