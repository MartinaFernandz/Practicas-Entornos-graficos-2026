<?php
$titular = "";

if (isset($_COOKIE["titular"])) {
    $titular = $_COOKIE["titular"];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Periódico</title>
</head>
<body>
    <h1>Periódico Digital</h1>

    <h2>Seleccioná el tipo de noticia</h2>

    <form action="periodico.php" method="post">
        <input type="radio" name="titular" value="politica" required> Política
        <br>
        <input type="radio" name="titular" value="economia"> Economía
        <br>
        <input type="radio" name="titular" value="deportes"> Deportes
        <br><br>

        <input type="submit" value="Guardar preferencia">
    </form>

    <h2>Titulares</h2>

    <?php
    if ($titular == "" || $titular == "politica") {
        echo "<h3>Política: Debate de propuestas legislativas</h3>";
    }

    if ($titular == "" || $titular == "economia") {
        echo "<h3>Economía: Informe sobre la actividad económica</h3>";
    }

    if ($titular == "" || $titular == "deportes") {
        echo "<h3>Deportes: Comienza un nuevo torneo de fútbol</h3>";
    }
    ?>

    <p><a href="borrar_cookie.php">Borrar preferencia</a></p>
</body>
</html>