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
    <title>Contador de visitas</title>
</head>
<body>
    <h1>Primera página</h1>

    <p>
        Has visitado
        <?php echo $_SESSION["contador"]; ?>
        páginas durante esta sesión.
    </p>

    <a href="pagina2.php">Ir a la segunda página</a>
</body>
</html>