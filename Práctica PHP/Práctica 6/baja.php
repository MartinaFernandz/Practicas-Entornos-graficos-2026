<?php
include("conexion.php");

$id = $_POST["id"];

$vSql = "SELECT * FROM ciudades WHERE id = '$id'";
$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

if (mysqli_num_rows($vResultado) == 0) {
    echo "La ciudad no existe.<br>";
} else {
    $vSql = "DELETE FROM ciudades WHERE id = '$id'";

    mysqli_query($link, $vSql) or die(mysqli_error($link));

    echo "La ciudad fue eliminada correctamente.<br>";
}

echo "<a href='menu.html'>Volver al menu</a>";

mysqli_free_result($vResultado);
mysqli_close($link);
?>