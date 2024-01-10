<?php
if (!empty($_GET['username'])) {
    $usuario = $_GET['username'];
}

require 'vendor/autoload.php';

use phpseclib3\Crypt\PublicKeyLoader;
use phpseclib3\Crypt\AES;

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file1"]["name"]);

$target_dir = "uploads/";
$target_file1 = $target_dir . basename($_FILES["file2"]["name"]);

if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {
    echo "El archivo " . basename($_FILES["file1"]["name"]) . " ha sido subido." . PHP_EOL;
} else {
    echo "Lo sentimos, ha habido un error subiendo el archivo." . PHP_EOL;
}

if (move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file1)) {
    echo "El archivo " . basename($_FILES["file2"]["name"]) . " ha sido subido." . PHP_EOL;
} else {
    echo "Lo sentimos, ha habido un error subiendo el archivo." . PHP_EOL;
}

$publicA = PublicKeyLoader::loadPublicKey(file_get_contents($target_file1), $password = false);
$privateB = PublicKeyLoader::loadPrivateKey(file_get_contents('./'.$usuario.'/keypriv'.$usuario.'.pem'), $password = false);

$arc = fopen($target_file,"r");
$message = "";
$i=0;
while(! feof($arc))  {
    if ($i==0) {
        $ciphertext1 = fgets($arc);
        $i++;
    }
    else {
        $line = fgets($arc);
        $message = $message . $line;
    }
}

$plain = explode(',',$privateB->decrypt(base64_decode($ciphertext1)));

$iv = $plain[0];
$key = $plain[1];

$cipher = new AES('cbc');
$cipher->setIV($iv);
$cipher->setKey($key);

$signature = $line;

$message = str_replace($signature,"",$message);
$message = substr($message,0,-2);
fclose($arc);

$plainmsg = $cipher->decrypt(base64_decode($message));

$signature = base64_decode($signature);

echo $publicA->verify($plainmsg, $signature) ?
    '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verificación</title>
        <link rel="stylesheet" href="./output.css">
    </head>
    
    <body>
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <h1 class="text-4xl font-bold text-gray-500 dark:text-gray-400 mb-4">Firma valida :)</h1>
                <p class="text-4xl font-bold text-gray-500 dark:text-gray-400 mb-4">Mensaje:</p>
                <p class="text-4xl font-bold text-gray-500 dark:text-gray-400 mb-4">'.$plainmsg.'</p>
            </div>
        </section>
    </body>
    
    </html>' :
    '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verificación</title>
        <link rel="stylesheet" href="./output.css">
    </head>
    
    <body>
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <h1 class="text-4xl font-bold text-gray-500 dark:text-gray-400 mb-4">Firma invalida :(</h1>
            </div>
        </section>
    </body>
    
    </html>';
?>