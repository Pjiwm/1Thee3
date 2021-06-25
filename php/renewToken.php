<?php

echo "This CronJob script renews the Instagram token" . "\n";

//Read existing token from token.txt
$token_file = fopen("token.txt", "r") or die("Unable to open token file (r)!");
$current_token = fread($token_file ,filesize("token.txt"));
fclose($token_file);
echo "old token: " . $current_token . "\n \n";
//Opens the file again, this time overwriting its contents
$token_file = fopen("token.txt", "w+") or die("Unable to open token file (w+)!");

//Requests a new token
$response = curlRequest("https://graph.instagram.com/refresh_access_token?grant_type=ig_refresh_token&access_token=" . $current_token);
$new_token = $response['access_token'];
echo "new token: " . $new_token;
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