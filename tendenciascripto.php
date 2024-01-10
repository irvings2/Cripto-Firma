<?php
/*
if (!empty($_GET['username'])) {
    $usuario = $_GET['username'];
}

require 'vendor/autoload.php';

use phpseclib3\Crypt\PublicKeyLoader;

$private = PublicKeyLoader::loadPrivateKey(file_get_contents('./'.$usuario.'/keypriv'.$usuario.'.pem'), $password = false);

$message = "Criptografía Cuántica: La computación cuántica tiene el potencial de romper muchos de los algoritmos criptográficos tradicionales. La criptografía cuántica busca desarrollar métodos que sean seguros incluso frente a ataques de computadoras cuánticas. Esto incluye la distribución cuántica de claves y la creación de algoritmos resistentes a la computación cuántica.

Criptografía Homomórfica: Permite realizar operaciones en datos cifrados sin necesidad de descifrarlos primero. Esto es crucial para garantizar la privacidad en entornos donde los datos deben permanecer encriptados durante el procesamiento, como en la computación en la nube.

Criptografía Post-Cuántica: Aunque la criptografía cuántica está en desarrollo, aún no se ha implementado a gran escala. Mientras tanto, se investiga la criptografía post-cuántica, que busca algoritmos resistentes a ataques cuánticos para proteger la información hasta que las soluciones cuánticas sean prácticas.

Privacidad Preservada por Diseño (Privacy by Design): La creciente preocupación por la privacidad ha llevado a un enfoque más proactivo en el diseño de sistemas y protocolos criptográficos que preserven la privacidad desde el principio, en lugar de añadir medidas de privacidad de manera reactiva.

Firmas Digitales Cuánticas: Se están explorando métodos de firmas digitales que utilizan principios de la física cuántica para proporcionar una seguridad aún mayor en comparación con las firmas digitales tradicionales.

Blockchain y Criptografía: La tecnología blockchain utiliza criptografía para garantizar la seguridad e integridad de las transacciones. Las investigaciones continúan en áreas como la mejora de algoritmos de consenso, la privacidad en las transacciones y la escalabilidad.

Criptografía de Inteligencia Artificial (AI): Con la proliferación de la inteligencia artificial, hay un interés creciente en cómo la criptografía puede contribuir a la seguridad en sistemas de aprendizaje automático, protegiendo modelos, datos y resultados de ataques maliciosos.

Seguridad en Dispositivos Cuánticos: Con el avance en la construcción de dispositivos cuánticos, se está trabajando en protocolos criptográficos específicos para garantizar la seguridad en estos entornos.

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
        <h1 class="text-4xl font-bold text-gray-500 dark:text-gray-400 mb-4">Tendencias criptograficas</h1>
            <p class="text-l font-bold text-gray-500 dark:text-gray-400 mb-4">
                Criptografía Cuántica: La computación cuántica tiene el potencial de romper muchos de los algoritmos criptográficos tradicionales. La criptografía cuántica busca desarrollar métodos que sean seguros incluso frente a ataques de computadoras cuánticas. Esto incluye la distribución cuántica de claves y la creación de algoritmos resistentes a la computación cuántica.<br>

                Criptografía Homomórfica: Permite realizar operaciones en datos cifrados sin necesidad de descifrarlos primero. Esto es crucial para garantizar la privacidad en entornos donde los datos deben permanecer encriptados durante el procesamiento, como en la computación en la nube.<br>

                Criptografía Post-Cuántica: Aunque la criptografía cuántica está en desarrollo, aún no se ha implementado a gran escala. Mientras tanto, se investiga la criptografía post-cuántica, que busca algoritmos resistentes a ataques cuánticos para proteger la información hasta que las soluciones cuánticas sean prácticas.<br>

                Privacidad Preservada por Diseño (Privacy by Design): La creciente preocupación por la privacidad ha llevado a un enfoque más proactivo en el diseño de sistemas y protocolos criptográficos que preserven la privacidad desde el principio, en lugar de añadir medidas de privacidad de manera reactiva.<br>

                Firmas Digitales Cuánticas: Se están explorando métodos de firmas digitales que utilizan principios de la física cuántica para proporcionar una seguridad aún mayor en comparación con las firmas digitales tradicionales.<br>

                Blockchain y Criptografía: La tecnología blockchain utiliza criptografía para garantizar la seguridad e integridad de las transacciones. Las investigaciones continúan en áreas como la mejora de algoritmos de consenso, la privacidad en las transacciones y la escalabilidad.<br>

                Criptografía de Inteligencia Artificial (AI): Con la proliferación de la inteligencia artificial, hay un interés creciente en cómo la criptografía puede contribuir a la seguridad en sistemas de aprendizaje automático, protegiendo modelos, datos y resultados de ataques maliciosos.<br>

                Seguridad en Dispositivos Cuánticos: Con el avance en la construcción de dispositivos cuánticos, se está trabajando en protocolos criptográficos específicos para garantizar la seguridad en estos entornos.
            </p>
        </div>
    </section>
</body>

</html>