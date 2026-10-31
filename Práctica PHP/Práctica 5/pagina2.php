<?php
session_start();

if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 1;
} else {
    $_SESSION["contador"]++;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Segunda página</title>
</head>
<body>
    <h1>Segunda página</h1>

    <p>
        Has visitado
        <?php echo $_SESSION["contador"]; ?>
        páginas durante esta sesión.
    </p>

    <a href="ejercicio4.php">Volver a la primera página</a>
</body>
</html>