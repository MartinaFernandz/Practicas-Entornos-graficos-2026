<?php
session_start();

if (isset($_POST["usuario"]) && isset($_POST["clave"])) {
    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["clave"] = $_POST["clave"];

    $mensaje = "Los datos se guardaron correctamente.";
} else {
    $mensaje = "No se recibieron los datos.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guardar Sesión</title>
</head>
<body>
    <h1>Datos de sesión</h1>

    <p><?php echo $mensaje; ?></p>

    <a href="ver_sesion.php">Ver datos guardados</a>

    <p><a href="ejercicio5.html">Volver al formulario</a></p>
</body>
</html>