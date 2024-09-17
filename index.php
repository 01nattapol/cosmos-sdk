<?php

require 'vendor/autoload.php';
use GuzzleHttp\Client;

$address = 'gea1zhl37fpn556f89fd43agnzmdj8wcs43h24e7mr';
// $address = 'gea12jan6lldlpzs0cykq5lvczw2yasp6zxzaqefw5';
$getBalanceUrl = 'https://gea.uatserver.biz:8387/cosmos/bank/v1beta1/balances/';
$brodcast_tx = 'https://gea.uatserver.biz/:8887/broadcast_tx_async?tx=';
$url = $getBalanceUrl.$address;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

if(curl_errno($ch)){
    echo 'clrl error: ' . curl_error($ch);
} else{
    $nodeInfo = json_decode($response, true);
    echo '<pre>';
    print_r($nodeInfo);
}







