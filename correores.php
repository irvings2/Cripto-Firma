<?php
$msg = "";
if (!empty($_POST['email'])) {
    $email = $_POST['email'];

    $enlace = mysqli_connect("localhost", "root", NULL, "cyberarmor");

    if (!$enlace) {
        die("No se pudo conectar a la bd.");
    }

    $sql1 = "SELECT Usuario FROM usuarios WHERE Email = '$email'";

    $result = mysqli_query($enlace, $sql1);

    if ($result) {
        if (mysqli_affected_rows($enlace) == 1) {
            $subject = 'Restablecer contraseña';

            $array = mysqli_fetch_array($result);

            $usuario = $array[0];

            $msg = 'Estimad@ ' . $usuario . '
Para restablecer su contraseña por favor de click en el siguiente enlace:
https://d034-201-141-117-48.ngrok-free.app/nuevacontra.php?username=' . $usuario . '&email=' . $email . '';

            $header = 'From:irvings349@gmail.com' . "\r\n";

            if (mail($email, $subject, $msg, $header)) {
                echo '<script> alert("Correo enviado correctamente")
            </script>';
            } else {
                echo '<script> alert("Error al enviar el Correo")
            </script>';
            }
        }
        else {
            echo '<script> alert("El correo ingresado no esta registrado")
            </script>';
        }
    }

    mysqli_close($enlace);
}
