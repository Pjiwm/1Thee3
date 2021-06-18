<?php 
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
$tokenFile = fopen("token.txt", "r") or die("Unable to open file!");
$access_token = fread($tokenFile,filesize("token.txt"));
fclose($tokenFile);
echo $access_token;
//First request



// Get all media items from instagram account
$json_response = curlRequest('https://graph.instagram.com/me/media?fields=media_url,media_type&access_token=' . $access_token);

//Process results first, sort out albums and images
foreach($json_response['data'] as $mediaItem){
    if($mediaItem['media_type'] == "CAROUSEL_ALBUM"){
        // var_dump($mediaItem);
        $album_ids[] = $mediaItem['id'];
    } else if($mediaItem['media_type'] == "IMAGE") {
       $img_urls[] = $mediaItem['media_url'];
    }
}

// Add album images 
foreach($album_ids as $albumId) {
    $url = 'https://graph.instagram.com/' . $albumId . '/children?fields=media_url,media_type&access_token=' . $access_token;
    $albumData = curlRequest($url);
    foreach($albumData['data'] as $mediaItem){
        if($mediaItem['media_type'] == "IMAGE") {
            $img_urls[] = $mediaItem['media_url'];
        }
    }
}

$img_url = array_reverse($img_url);

for($i = 0; $i < 4; $i++){
    $img_url = $img_urls[$i];
    $source = \Tinify\fromUrl($img_url);
    $resized = $source->resize(array(
        "method" => "scale",
        "width" => 250
    )); 
    //TODO set relative path
    $resized->toFile($i . ".jpg");
echo '<img src=' . $i . '.jpg>';
}; 


//Functions
function curlRequest($url) {
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
    }?>

