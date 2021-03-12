<?php
require 'vendor/autoload.php';
require_once 'config.php';

use GuzzleHttp\Client;

$headers = [
  'X-M2M-Origin' => API_KEY_ANTARES,
  'Content-Type' => 'application/json;ty=4',
  'Accept' => 'application/json'
];

$client = new Client();

$response = $client->get(URL_ANTARES, ['headers' => $headers])->getBody()->getContents();
$data = json_decode($response, TRUE);
$data1 = json_decode($data['m2m:cin']['con'], TRUE);
$basket = "";

foreach ($data1 as $d) {
  $basket .= $d . "-";
}
echo $basket;
// print_r($data1);