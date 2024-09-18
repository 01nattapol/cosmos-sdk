<?php

require 'vendor/autoload.php'; // Use a cryptography library like "kornrunner/secp256k1"

use kornrunner\Secp256k1;
$secp256k1 = new Secp256k1();
$privateKey = $secp256k1->createPrivateKey();
$publicKey = $secp256k1->getPublicKey($privateKey);

// Convert to hex
$privateKeyHex = bin2hex($privateKey->get());
$publicKeyHex = bin2hex($publicKey->get());

echo "Private Key: $privateKeyHex\n";
echo "Public Key: $publicKeyHex\n";
