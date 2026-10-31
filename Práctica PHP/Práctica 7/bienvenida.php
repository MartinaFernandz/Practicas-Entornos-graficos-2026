<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Página de bienvenida</h1>

    <?php
    if (isset($_SESSION["nombre"])) {
        echo "Bienvenido, " . $_SESSION["nombre"];
    } else {
        echo "No puede visitar esta página.";
    }
    ?>

    <p><a href="ejercicio6.html">Volver al formulario</a></p>
</body>
</html>