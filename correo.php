<?php
$enlace = mysqli_connect("localhost", "root", NULL, "cyberarmor");

if (!$enlace) {
    die("No se pudo conectar a la bd.");
}

$msg = "";
if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    
    $email = $_POST['email'];

    $sql1 = "SELECT * FROM usuarios WHERE Email = '$email'";

    if (mysqli_query($enlace, $sql1)) {
        if (mysqli_affected_rows($enlace) == 0) {
            $nombre = $_POST['name'];
            $usuario = $_POST['username'];
            $contra = $_POST['password'];
            $hash = hash("sha512", $contra);

            $subject = 'Confirmación de cuenta';
            $msg = 'Estimad@ ' . $nombre . '
Para concluir el registro de su cuenta por favor de click en el siguiente enlace:
https://d034-201-141-117-48.ngrok-free.app/activar.php?username=' . $usuario . '&email=' . $email . '&hash=' . $hash . '';

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
            echo '<script> alert("El correo ingresado ya esta registrado")
            </script>';
        }
    }
}
