<?php

if (!empty($_POST['msg']) && !empty($_GET['username'])) {
    $message = $_POST['msg'];
    $usuario = $_GET['username'];
}

require 'vendor/autoload.php';

use phpseclib3\Crypt\PublicKeyLoader;
use phpseclib3\Crypt\AES;
use phpseclib3\Crypt\Random;

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file1"]["name"]);

if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {
    echo "El archivo " . basename($_FILES["file1"]["name"]) . " ha sido subido." . PHP_EOL;
} else {
    echo "Lo sentimos, ha habido un error subiendo el archivo." . PHP_EOL;
}

$publicB = PublicKeyLoader::loadPublicKey(file_get_contents($target_file), $password = false);
$privateA = PublicKeyLoader::loadPrivateKey(file_get_contents('./'.$usuario.'/keypriv'.$usuario.'.pem'), $password = false);

$cipher = new AES('cbc');
$iv = Random::string(16);
$key = Random::string(16);
$cipher->setIV($iv);
$cipher->setKey($key);

$text = $iv.','.$key;

$ciphertext1 = $publicB->encrypt($text);

$signature = $privateA->sign($message);

$ciphertext = $cipher->encrypt($message);

$f = fopen("./$usuario/mensaje.txt","w") or die ("No se pudo crear el archivo");

fwrite($f,base64_encode($ciphertext1).PHP_EOL.base64_encode($ciphertext).PHP_EOL.base64_encode($signature));

fclose($f);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firma y cifrado</title>
    <link rel="stylesheet" href="./output.css">
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <h1 class="text-4xl font-bold text-gray-500 dark:text-gray-400 mb-4">Firma y cifrado</h1>
        <a href="./<?=$usuario?>/mensaje.txt" download="mensaje<?=$usuario?>.txt" class="text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-6">Descargar archivo firmado</a>
    </section>
</body>

</html>