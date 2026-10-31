<?php
$destinatario = "destinatario@ejemplo.com";
$asunto = "Correo de prueba";

$mensaje = '
<html>
    <body>
        <h1>Hola!</h1>
        <p>Este es mi primer correo enviado con PHP.</p>
        <p><b>Saludos desde Entornos Gráficos.</b></p>
    </body>
</html>
';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: remitente@ejemplo.com\r\n";

if (mail($destinatario, $asunto, $mensaje, $headers)) {
    echo "Correo aceptado para su envío.";
} else {
    echo "No se pudo enviar el correo.";
}
?>