<?php
/*
if (!empty($_GET['username'])) {
    $usuario = $_GET['username'];
}

require 'vendor/autoload.php';

use phpseclib3\Crypt\PublicKeyLoader;

$private = PublicKeyLoader::loadPrivateKey(file_get_contents('./'.$usuario.'/keypriv'.$usuario.'.pem'), $password = false);

$message = "La criptografía moderna es el estudio y aplicación de técnicas matemáticas y computacionales para proteger la confidencialidad, integridad y autenticidad de la información en entornos digitales. A diferencia de la criptografía clásica, que se basa en métodos más simples y analógicos, la criptografía moderna utiliza algoritmos matemáticos avanzados y protocolos complejos para garantizar la seguridad de la información en el mundo digital.

Algunos conceptos clave de la criptografía moderna incluyen:

Criptografía de clave simétrica: En este tipo de criptografía, la misma clave se utiliza tanto para cifrar como para descifrar la información. Los algoritmos de cifrado simétrico son rápidos y eficientes, pero el desafío radica en la distribución segura de las claves.

Criptografía de clave asimétrica (o de clave pública): En lugar de utilizar una sola clave, se utilizan un par de claves: una pública y otra privada. La clave pública se comparte abiertamente, mientras que la clave privada se mantiene en secreto. Esta técnica permite funciones como la autenticación y la firma digital.

Funciones hash: Estas funciones transforman datos de cualquier longitud en una cadena de longitud fija, llamada hash. Se utilizan para verificar la integridad de los datos y son fundamentales en la creación de firmas digitales y en la protección contra la manipulación de datos.

Protocolos de seguridad: La criptografía moderna se implementa en una variedad de protocolos de seguridad que se utilizan en Internet, como SSL/TLS para la seguridad en las comunicaciones web, IPsec para la seguridad en las comunicaciones de red, y otros protocolos que aseguran la autenticación y confidencialidad de la información.

Criptografía cuántica: A medida que la computación cuántica avanza, la criptografía cuántica está emergiendo como un campo para desarrollar algoritmos y protocolos que serán seguros incluso contra ataques de computadoras cuánticas. Esto incluye la distribución cuántica de claves y algoritmos de criptografía cuántica.

Att: $usuario";

$signature = $private->sign($message);

$f = fopen("./$usuario/mensaje.txt","w") or die ("No se pudo crear el archivo");

fwrite($f,$message.PHP_EOL.base64_encode($signature));

fclose($f);
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografía moderna</title>
    <link rel="stylesheet" href="./output.css">
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <h1 class="text-4xl font-bold text-gray-500 dark:text-gray-400 mb-4">Criptografía moderna</h1>
            <p class="text-l font-bold text-gray-500 dark:text-gray-400 mb-4">
                La criptografía moderna es el estudio y aplicación de técnicas matemáticas y computacionales para proteger la confidencialidad, integridad y autenticidad de la información en entornos digitales. A diferencia de la criptografía clásica, que se basa en métodos más simples y analógicos, la criptografía moderna utiliza algoritmos matemáticos avanzados y protocolos complejos para garantizar la seguridad de la información en el mundo digital.

                Algunos conceptos clave de la criptografía moderna incluyen:<br>

                Criptografía de clave simétrica: En este tipo de criptografía, la misma clave se utiliza tanto para cifrar como para descifrar la información. Los algoritmos de cifrado simétrico son rápidos y eficientes, pero el desafío radica en la distribución segura de las claves.<br>

                Criptografía de clave asimétrica (o de clave pública): En lugar de utilizar una sola clave, se utilizan un par de claves: una pública y otra privada. La clave pública se comparte abiertamente, mientras que la clave privada se mantiene en secreto. Esta técnica permite funciones como la autenticación y la firma digital.<br>

                Funciones hash: Estas funciones transforman datos de cualquier longitud en una cadena de longitud fija, llamada "hash". Se utilizan para verificar la integridad de los datos y son fundamentales en la creación de firmas digitales y en la protección contra la manipulación de datos.<br>

                Protocolos de seguridad: La criptografía moderna se implementa en una variedad de protocolos de seguridad que se utilizan en Internet, como SSL/TLS para la seguridad en las comunicaciones web, IPsec para la seguridad en las comunicaciones de red, y otros protocolos que aseguran la autenticación y confidencialidad de la información.<br>

                Criptografía cuántica: A medida que la computación cuántica avanza, la criptografía cuántica está emergiendo como un campo para desarrollar algoritmos y protocolos que serán seguros incluso contra ataques de computadoras cuánticas. Esto incluye la distribución cuántica de claves y algoritmos de criptografía cuántica.
            </p>
        </div>
    </section>
</body>

</html>