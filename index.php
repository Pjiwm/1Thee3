<?php 
//vars
$img_urls = [];
$album_ids = [];

//First request

// Create cURL resource 
$curl = curl_init();
$url = 'https://graph.instagram.com/me/media?fields=media_url,media_type&access_token=IGQVJWZAFc5TldrR0JrSWZA5WHV4UU1FanM5U2VtNjhFNjAtaVUxbTMwb0xwUUoxR1J4WHc4blRmbEY4QWNrWjlLdGxMS3V5ZAjZAxUjdrejN1dGxDbmZAsZAGZAwMTkwZAGY2V2htdkt3aHFR';

// Set client url options
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Run cURL (excecute http request)
$result = curl_exec($curl);

// Close cURL resource
curl_close($curl);


$json_response = json_decode($result, true);
//End request


//Process results first, sort out albums and images
foreach($json_response['data'] as $mediaItem){
    if($mediaItem['media_type'] == "CAROUSEL_ALBUM"){
        $album_urls[] = $mediaItem['id'];
    } else {
       $img_urls[] = $mediaItem['media_url'];
    }
}

foreach($album_ids as $albumId){
    $albumData = albumRequest($albumId);
    mediaItemDataProcessing($albumData);
}

foreach($img_urls as $img_url): ?>
    <img src="<?php echo $img_url; ?>">
<?php endforeach; 
    

function albumRequest($albumId) {
    // Create cURL resource 
$curl = curl_init();
$url = 'https://graph.instagram.com/' . $albumId . '/children?fields=media_url&access_token=IGQVJWZAFc5TldrR0JrSWZA5WHV4UU1FanM5U2VtNjhFNjAtaVUxbTMwb0xwUUoxR1J4WHc4blRmbEY4QWNrWjlLdGxMS3V5ZAjZAxUjdrejN1dGxDbmZAsZAGZAwMTkwZAGY2V2htdkt3aHFR';

// Set client url options
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Run cURL (excecute http request)
 return curl_exec($curl);
}

function mediaItemDataProcessing($queryResponse){
foreach($queryResponse['data'] as $mediaItem){
        $img_urls[] = $mediaItem['media_url'];
    }
}

?>