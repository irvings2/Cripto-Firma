<?php

$enlace = mysqli_connect("localhost", "root", NULL, "cyberarmor");

if (!$enlace) {
    die("No se pudo conectar a la bd.");
}

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $usuario = $_POST['username'];
    $contra = $_POST['password'];

    $sql1 = "SELECT contrasena FROM usuarios WHERE Usuario = '$usuario'";

    $result = mysqli_query($enlace, $sql1);

    if ($result) {

        $array = mysqli_fetch_array($result);

        if (hash("sha512",$contra) == $array [0]) {
            header("Location:welcome.php?username=$usuario");
        }
        else {
            echo '<script> window.location.href = "index.php"
            alert("Error al iniciar sesión. Usuario o contraseña incorrectos.")
            </script>';
        }

        $result->free();
    }
}

mysqli_close($enlace);

?>