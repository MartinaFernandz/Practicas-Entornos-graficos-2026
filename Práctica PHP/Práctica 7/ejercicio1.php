<?php
$estilo = "verde";

if (isset($_POST["estilo"])) {
    $estilo = $_POST["estilo"];
    setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
} elseif (isset($_COOKIE["estilo"])) {
    $estilo = $_COOKIE["estilo"];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estilos con Cookies</title>
    <link rel="stylesheet" href="<?php echo $estilo; ?>.css">
</head>
<body>
    <h1>Personalizar la página</h1>

    <p>Seleccioná el estilo que querés utilizar:</p>

    <form action="ejercicio1.php" method="post">
        <select name="estilo">
            <option value="verde">Verde</option>
            <option value="rosa">Rosa</option>
            <option value="negro">Negro</option>
        </select>

        <input type="submit" value="Cambiar estilo">
    </form>
</body>
</html>