<?php
/*
if (!empty($_GET['username'])) {
    $usuario = $_GET['username'];
}

require 'vendor/autoload.php';

use phpseclib3\Crypt\PublicKeyLoader;
use phpseclib3\Crypt\AES;
use phpseclib3\Crypt\Random;

$cipher = new AES('cbc');
$iv = Random::string(16);
$key = Random::string(16);
$cipher->setIV($iv);
$cipher->setKey($key);

$text = $iv.','.$key;

$private = PublicKeyLoader::loadPrivateKey(file_get_contents('./'.$usuario.'/keypriv'.$usuario.'.pem'), $password = false);

$ciphertext1 = $private->getPublicKey()->encrypt($text);
/*$plain = explode(',',$private->decrypt($ciphertext1));
echo base64_encode($plain[0]);
echo base64_encode($plain[1]);

$message = "La criptografía clásica se refiere a los métodos de cifrado y descifrado de información que fueron utilizados antes de la llegada de las técnicas más avanzadas y modernas de criptografía. Estos métodos clásicos han sido utilizados a lo largo de la historia para proteger la confidencialidad de la información y comunicaciones.

Algunos de los métodos de criptografía clásica más conocidos incluyen:

Cifrado César: Este es un tipo de cifrado de sustitución en el que cada letra del mensaje es desplazada un cierto número de posiciones en el alfabeto. Por ejemplo, con un desplazamiento de 3, la letra A se convertiría en D.

Cifrado de Vigenère: Este método utiliza una tabla de alfabetos diferentes y un texto clave para cifrar el mensaje. El cifrado de Vigenère es más robusto que el cifrado César y ofrece una mayor seguridad.

Transposición: En lugar de sustituir letras, la criptografía de transposición reorganiza el orden de las letras en el mensaje. Un ejemplo es el cifrado de la columna, donde las letras se escriben en un cuadrado y luego se leen por columnas.

Escítalas Espartanas: Este es un método de criptografía utilizado en la antigua Grecia. Consiste en escribir un mensaje alrededor de una vara cilíndrica de cierto diámetro y luego desenrollarlo para obtener el mensaje cifrado.

Att: $usuario";

$signature = $private->sign($message);

$ciphertext = $cipher->encrypt($message);

$f = fopen("./$usuario/mensaje.txt","w") or die ("No se pudo crear el archivo");

fwrite($f,base64_encode($ciphertext1).PHP_EOL.base64_encode($ciphertext).PHP_EOL.base64_encode($signature));

fclose($f);*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografía clásica</title>
    <link rel="stylesheet" href="./output.css">
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <h1 class="text-4xl font-bold text-gray-500 dark:text-gray-400 mb-4">Criptografía clásica</h1>
            <p class="text-l font-bold text-gray-500 dark:text-gray-400 mb-4">
                La criptografía clásica se refiere a los métodos de cifrado y descifrado de información que fueron utilizados antes de la llegada de las técnicas más avanzadas y modernas de criptografía. Estos métodos clásicos han sido utilizados a lo largo de la historia para proteger la confidencialidad de la información y comunicaciones.

                Algunos de los métodos de criptografía clásica más conocidos incluyen:<br>

                Cifrado César: Este es un tipo de cifrado de sustitución en el que cada letra del mensaje es desplazada un cierto número de posiciones en el alfabeto. Por ejemplo, con un desplazamiento de 3, la letra A se convertiría en D.<br>

                Cifrado de Vigenère: Este método utiliza una tabla de alfabetos diferentes y un texto clave para cifrar el mensaje. El cifrado de Vigenère es más robusto que el cifrado César y ofrece una mayor seguridad.<br>

                Transposición: En lugar de sustituir letras, la criptografía de transposición reorganiza el orden de las letras en el mensaje. Un ejemplo es el cifrado de la columna, donde las letras se escriben en un cuadrado y luego se leen por columnas.<br>

                Escítalas Espartanas: Este es un método de criptografía utilizado en la antigua Grecia. Consiste en escribir un mensaje alrededor de una vara cilíndrica de cierto diámetro y luego desenrollarlo para obtener el mensaje cifrado.
            </p>
        </div>
    </section>
</body>

</html>