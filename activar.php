<?php

require 'vendor/autoload.php';
use phpseclib3\Crypt\RSA;

$enlace = mysqli_connect("localhost", "root", NULL, "cyberarmor");

if (!$enlace) {
    die("No se pudo conectar a la bd.");
}

if (!empty($_GET['username']) && !empty($_GET['email']) && !empty($_GET['hash'])) {
    $usuario = $_GET['username'];
    $email = $_GET['email'];
    $hash = $_GET['hash'];

    if(!is_dir($_GET['username'])){ 
        @mkdir($_GET['username'], 0700); 
    }


    $sql1 = "SELECT * FROM usuarios WHERE Usuario = '$usuario' AND Email = '$email' AND contrasena = '$hash'";

    if (mysqli_query($enlace, $sql1)) {
        if (mysqli_affected_rows($enlace) == 0) {
            $sql = "INSERT INTO usuarios (Usuario,Email,contrasena) VALUES ('$usuario','$email','$hash ')";

            $private = RSA::createKey();
            $public = $private->getPublicKey();

            file_put_contents('./'.$usuario.'/keypriv'.$usuario.'.pem', $private);
            file_put_contents('./'.$usuario.'/keypub'.$usuario.'.pem', $public);

            if (mysqli_query($enlace, $sql)) {
                echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Confirmación cuenta</title>
                    <link rel="stylesheet" href="./output.css">
                </head>
                
                <body>
                    <section class="bg-gray-50 dark:bg-gray-900">
                        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                            <h1 class="text-4xl font-bold text-gray-500 dark:text-gray-400 mb-4">Tu cuenta ha sido confirmada exitosamente</h1>
                            <p class="text-xl font-bold text-gray-500 dark:text-gray-400 mb-4">Ahora puedes iniciar sesión</p>
                            <a href="./index.php" class="text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Iniciar sesión</a>
                        </div>
                    </section>
                </body>
                
                </html>';
            }
        }
        else {
            echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Confirmación cuenta</title>
                    <link rel="stylesheet" href="./output.css">
                </head>
                
                <body>
                    <section class="bg-gray-50 dark:bg-gray-900">
                        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                            <h1 class="text-4xl font-bold text-gray-500 dark:text-gray-400 mb-4">Tu cuenta ha sido confirmada exitosamente</h1>
                            <p class="text-xl font-bold text-gray-500 dark:text-gray-400 mb-4">Ahora puedes iniciar sesión</p>
                            <a href="#" class="text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Iniciar sesión</a>
                        </div>
                    </section>
                </body>
                
                </html>';
        }
    }
}
mysqli_close($enlace);

?>
