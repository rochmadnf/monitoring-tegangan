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

$date = date("d", $data1["currTime"]);
$month = $months[date("n", $data1["currTime"]) - 1];
$timeStamp = date("Y H:i:s", $data1["currTime"]);

$data1["currTime"] = "$date $month $timeStamp";

echo join($data1, "-");

