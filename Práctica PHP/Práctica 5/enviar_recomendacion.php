<?php
if (isset($_POST["nombre"]) &&
    isset($_POST["nombre_amigo"]) &&
    isset($_POST["email_amigo"])) {

    $nombre = $_POST["nombre"];
    $nombre_amigo = $_POST["nombre_amigo"];
    $email_amigo = $_POST["email_amigo"];

    $destinatario = $email_amigo;
    $asunto = "Recomendacion de un sitio web";

    $mensaje = "Hola, " . $nombre_amigo . "!\n\n";
    $mensaje .= $nombre . " te recomienda visitar este sitio web:\n";
    $mensaje .= "https://ejemplo.com\n";

    $headers = "From: remitente@ejemplo.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "Recomendacion enviada correctamente.";
    } else {
        echo "Error al enviar la recomendacion.";
    }

} else {
    echo "No se recibieron todos los datos.";
}
?>