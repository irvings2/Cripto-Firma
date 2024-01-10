<?php

if (!empty($_GET['username'])) {
    $usuario = $_GET['username'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenid@</title>
    <link rel="stylesheet" href="./output.css">
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <h1 class="text-4xl font-bold text-gray-500 dark:text-gray-400 mb-4"> Bienvenid@ <?php echo $usuario; ?></h1>
            <a href="./criptoclasica.php?username=<?=$usuario?>" class="text-4xl font-bold text-gray-500 dark:text-gray-400 mb-4">Criptografía clásica</a>
            <a href="./criptomoderna.php?username=<?=$usuario?>" class="text-4xl font-bold text-gray-500 dark:text-gray-400 mb-4">Criptografía moderna</a>
            <a href="./tendenciascripto.php?username=<?=$usuario?>" class="text-4xl font-bold text-gray-500 dark:text-gray-400 mb-4">Tendencias criptograficas</a>
            <a href="./firmar.php?username=<?=$usuario?>" class="text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-6">Firmar</a>
            <a href="./verificar.php?username=<?=$usuario?>" class="text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-6">Verificar</a>
            <!--<a href="./<?=$usuario?>/mensaje.txt" download="mensaje<?=$usuario?>.txt" class="text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-6">Descargar archivo firmado</a>-->
            <a href="./<?=$usuario?>/keypub<?=$usuario?>.pem" download="keypub<?=$usuario?>.pem" class="text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Descargar llave pública</a>
        </div>
    </section>
</body>

</html>