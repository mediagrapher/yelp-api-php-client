<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.yelp.com/v3/businesses/search?location=Oberkampf,%20Paris,%20France&radius=1000&sort_by=rating&limit=30",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer [REPLACE WITH YOUR API KEY]"
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$jsonData = json_decode($response, TRUE);
?>
