<?php
if (isset($_COOKIE["contador"])) {
    $contador = $_COOKIE["contador"] + 1;
    $mensaje = "Has visitado esta página " . $contador . " veces.";
} else {
    $contador = 1;
    $mensaje = "¡Bienvenido! Es tu primera visita.";
}

setcookie("contador", $contador, time() + (60 * 60 * 24 * 30));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de visitas</title>
</head>
<body>
    <h1>Contador de visitas</h1>

    <p><?php echo $mensaje; ?></p>

    <a href="contador.php">Volver a visitar la página</a>
</body>
</html>