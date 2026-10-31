<?php
session_start();

$link = mysqli_connect("127.0.0.1", "root", "", "", 3307)
    or die("Error de conexión");

mysqli_select_db($link, "base2");

unset($_SESSION["nombre"]);

if (isset($_POST["mail"])) {
    $mail = $_POST["mail"];

    $vSql = "SELECT * FROM alumnos WHERE mail = '$mail'";
    $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

    if (mysqli_num_rows($vResultado) == 0) {
        $mensaje = "El alumno no existe.";
    } else {
        $fila = mysqli_fetch_array($vResultado);
        $_SESSION["nombre"] = $fila["nombre"];

        $mensaje = "Alumno encontrado: " . $_SESSION["nombre"];
    }

    mysqli_free_result($vResultado);
} else {
    $mensaje = "No se ingresó ningún correo.";
}

mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Búsqueda de alumnos</title>
</head>
<body>
    <h1>Resultado de la búsqueda</h1>

    <p><?php echo $mensaje; ?></p>

    <a href="bienvenida.php">Ir a la página de bienvenida</a>

    <p><a href="ejercicio6.html">Volver al formulario</a></p>
</body>
</html>