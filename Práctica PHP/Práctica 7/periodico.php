<?php
if (isset($_POST["titular"])) {
    $titular = $_POST["titular"];

    setcookie("titular", $titular, time() + (60 * 60 * 24 * 30));

    $mensaje = "Preferencia guardada correctamente.";
} else {
    $mensaje = "No se seleccionó ningún titular.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guardar preferencia</title>
</head>
<body>
    <h1>Preferencia del periódico</h1>

    <p><?php echo $mensaje; ?></p>

    <a href="ejercicio4.php">Volver al periódico</a>
</body>
</html>