<?php
require 'vendor/autoload.php';
use phpseclib3\Crypt\AES;
use phpseclib3\Crypt\Random;

$cipher = new AES('cbc');
$cipher->setIV(Random::string(16));
$cipher->setKey(Random::string(16));

$ciphertext = $cipher->encrypt('Hola mundo XD');
echo $cipher->decrypt($ciphertext);
?>