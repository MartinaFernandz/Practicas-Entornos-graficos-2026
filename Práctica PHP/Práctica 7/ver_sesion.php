<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos de sesión</title>
</head>
<body>
    <h1>Datos guardados en la sesión</h1>

    <?php
    if (isset($_SESSION["usuario"]) && isset($_SESSION["clave"])) {
        echo "Usuario: " . $_SESSION["usuario"] . "<br>";
        echo "Clave: " . $_SESSION["clave"] . "<br>";
    } else {
        echo "No hay datos guardados en la sesión.";
    }
    ?>

    <p><a href="ejercicio5.html">Volver al formulario</a></p>
</body>
</html>