<?php
//include("./proxy.php");
//
////setup the Proxy with the right credentials
//$mySwapiProxy = new Proxy('https://swapi.dev/api');
////get the data
//$result = $mySwapiProxy->getData('people/1');
////print the data to the frontend.
//print_r($result);

// Initialize cURL.
$ch = curl_init();

$number = $_POST["phone"];

// Set the URL that you want to GET by using the CURLOPT_URL option.
curl_setopt($ch, CURLOPT_URL, 'https://phonevalidation.abstractapi.com/v1/?api_key=429215b4910a48649a4a9e4384d68a63&phone=' . $number);

// Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

// Execute the request.
$data = curl_exec($ch);

// Close the cURL handle.
curl_close($ch);

// Print the data out onto the page.
echo $data;
