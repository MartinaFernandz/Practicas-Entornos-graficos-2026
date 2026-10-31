<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados de búsqueda</title>
</head>
<body>
    <h1>Resultados de búsqueda</h1>

    <?php
    if (isset($_POST["Palabra"]) && $_POST["Palabra"] != "") {
        $pal = $_POST["Palabra"];

        $link = mysqli_connect("127.0.0.1", "root", "", "", 3307)
            or die("Error de conexión");

        mysqli_select_db($link, "prueba");

        $vSql = "SELECT * FROM buscador WHERE canciones LIKE '%$pal%'";
        $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

        if (mysqli_num_rows($vResultado) == 0) {
            echo "<p>No hay resultados respecto a la palabra que busca.</p>";
        } else {
            echo "<h2>Canciones encontradas:</h2>";
            echo "<ul>";

            while ($fila = mysqli_fetch_array($vResultado)) {
                echo "<li>" . $fila["canciones"] . "</li>";
            }

            echo "</ul>";
        }

        mysqli_free_result($vResultado);
        mysqli_close($link);
    } else {
        echo "<p>No se ingresó ninguna palabra.</p>";
    }
    ?>

    <p><a href="FormBuscador.html">Volver al buscador</a></p>
</body>
</html>