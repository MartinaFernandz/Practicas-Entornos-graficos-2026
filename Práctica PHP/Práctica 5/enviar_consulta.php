<?php
if (isset($_POST["nombre"]) &&
    isset($_POST["email"]) &&
    isset($_POST["consulta"])) {

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $consulta = $_POST["consulta"];

    $destinatario = "webmaster@ejemplo.com";
    $asunto = "Nueva consulta";

    $mensaje = "Nombre: " . $nombre . "\n";
    $mensaje .= "Email: " . $email . "\n";
    $mensaje .= "Consulta: " . $consulta . "\n";

    $headers = "From: remitente@ejemplo.com\r\n";

    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "Consulta enviada correctamente.";
    } else {
        echo "Error al enviar la consulta.";
    }

} else {
    echo "No se recibieron todos los datos.";
}
?>