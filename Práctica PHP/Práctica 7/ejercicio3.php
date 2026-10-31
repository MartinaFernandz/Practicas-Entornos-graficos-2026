<?php
$nombre = "";

if (isset($_POST["usuario"])) {
    $nombre = $_POST["usuario"];
    setcookie("ultimo_usuario", $nombre, time() + (60 * 60 * 24 * 30));
} elseif (isset($_COOKIE["ultimo_usuario"])) {
    $nombre = $_COOKIE["ultimo_usuario"];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nombre de usuario</title>
</head>
<body>
    <h1>Registro de usuario</h1>

    <?php
    if ($nombre != "") {
        echo "<p>Último nombre ingresado: $nombre</p>";
    }
    ?>

    <form action="ejercicio3.php" method="post">
        <label>Nombre de usuario:</label>
        <input type="text" name="usuario" required>

        <input type="submit" value="Guardar usuario">
    </form>
</body>
</html>