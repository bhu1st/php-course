<?php
//get the trends url with result as json format
$url = "http://api.twitter.com/1/trends/available.json";

//initialize the curl with trends url
$ch = curl_init($url);

//set option to return result as string to process it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//execute curl
$resp = curl_exec($ch);

//use json_decode of php to decode the json format response
$trends = json_decode($resp, true);

echo "<pre>";
print_r($trends);

?>