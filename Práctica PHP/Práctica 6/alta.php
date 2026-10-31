<?php
include("conexion.php");

$ciudad = $_POST["ciudad"];
$pais = $_POST["pais"];
$habitantes = $_POST["habitantes"];
$superficie = $_POST["superficie"];
$tieneMetro = $_POST["tieneMetro"];

$vSql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
VALUES ('$ciudad', '$pais', '$habitantes', '$superficie', '$tieneMetro')";

mysqli_query($link, $vSql) or die(mysqli_error($link));

echo "La ciudad fue registrada correctamente.<br>";
echo "<a href='menu.html'>Volver al menu</a>";

mysqli_close($link);
?>