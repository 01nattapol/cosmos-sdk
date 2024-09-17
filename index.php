<?php

// require 'vendor/autoload.php';
// use GuzzleHttp\Client;

$address = 'gea1zhl37fpn556f89fd43agnzmdj8wcs43h24e7mr';
// $address = 'gea12jan6lldlpzs0cykq5lvczw2yasp6zxzaqefw5';
$getBalanceUrl = 'https://gea.uatserver.biz:8387/cosmos/bank/v1beta1/balances/';
$brodcast_tx = 'https://gea.uatserver.biz/:8887/broadcast_tx_async?tx=';
$url = $getBalanceUrl.$address;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_CAINFO, "C:/xampp/php/extras/ssl/cacert.pem");
$response = curl_exec($ch);

if(curl_errno($ch)){
    echo 'clrl error: ' . curl_error($ch);
} else{
    echo '<pre>';
    print_r($response);
}
exit;


$client = new Client();
$response = $client->request('GET', $url);

echo $response->getBody();
exit;



// $url = $brodcast_tx;
// $url = 'https://gea.uatserver.biz:8387/cosmos/auth/v1beta1/accounts';
// $url = 'https://gea.uatserver.biz:8387/cosmos/auth/v1beta1/accounts/'.$address;
// $url = 'https://gea.uatserver.biz:8387/cosmos/auth/v1beta1/params';
// $url = 'https://gea.uatserver.biz:8387/cosmos/authz/v1beta1/grants';
$response = file_get_contents($url);
$nodeInfo = json_decode($response, true);
echo '<pre>';
print_r($nodeInfo);


