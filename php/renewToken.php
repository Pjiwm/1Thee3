<?php

//Read existing token from token.txt
$token_file = fopen("token.txt", "r") or die("Unable to open file!");
$current_token = fread($token_file ,filesize("token.txt"));
fclose($token_file);

//Opens the file again, this time overwriting its contents
$token_file = fopen("token.txt", "w+") or die("Unable to open file!");

//Requests a new token
$response = curlRequest("https://graph.instagram.com/refresh_access_token?grant_type=ig_refresh_token&access_token=" . $current_token);
$new_token = $response['access_token'];

//Writes the new token in the file
fwrite($token_file, $new_token);
fclose($token_file);


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
}
?>