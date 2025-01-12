<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'lucaslopez@ludnr.com';
    $subject = 'Formulario de Contacto';
    $message = 'Nombre: ' . $_POST['name'] . "\n" .
               'Correo: ' . $_POST['email'] . "\n" .
               'Mensaje: ' . $_POST['help'];
    $headers = 'From: no-reply@ludnr.com';

    if (mail($to, $subject, $message, $headers)) {
        echo 'Correo enviado con éxito';
    } else {
        echo 'Error al enviar el correo';
    }
}
?>
