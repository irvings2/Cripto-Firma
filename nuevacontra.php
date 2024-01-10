<?php

$enlace = mysqli_connect("localhost", "root", NULL, "cyberarmor");

if (!$enlace) {
    die("No se pudo conectar a la bd.");
}

if (!empty($_GET['username']) && !empty($_GET['email'])) {
    $usuario = $_GET['username'];
    $email = $_GET['email'];

    $sql1 = "SELECT * FROM usuarios WHERE Usuario = '$usuario' AND Email = '$email'";

    if (mysqli_query($enlace, $sql1)) {
        if (mysqli_affected_rows($enlace) == 1) {
            if (!empty($_POST['password']) && !empty($_POST['confirm-password'])) {
                $contra = $_POST['password'];
                $hash = hash("sha512", $contra);

                $sql2 = "UPDATE usuarios SET contrasena = '$hash' WHERE Usuario = '$usuario' AND Email = '$email'";
                
                if (mysqli_query($enlace, $sql2)) {
                    echo '<script> window.location.href = "index.php"
                    alert("Contraseña restablecida correctamente.")
                    </script>';
                }
            }
        }
    }
}
mysqli_close($enlace);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer contraseña</title>
    <link rel="stylesheet" href="./output.css">
    <script src="./validacionpsw.js"></script>
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                CyberArmor
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Restablece tu contraseña
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#" method="post">
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirma Password</label>
                            <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <p id="errorMessage" hidden class="text-red-600"></p>
                        <button type="submit" value="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Restablecer contraseña</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>