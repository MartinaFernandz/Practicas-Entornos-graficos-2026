<?php
include("conexion.php");

$id = $_POST["id"];
$ciudad = $_POST["ciudad"];
$pais = $_POST["pais"];
$habitantes = $_POST["habitantes"];
$superficie = $_POST["superficie"];
$tieneMetro = $_POST["tieneMetro"];

$vSql = "UPDATE ciudades SET
ciudad = '$ciudad',
pais = '$pais',
habitantes = '$habitantes',
superficie = '$superficie',
tieneMetro = '$tieneMetro'
WHERE id = '$id'";

mysqli_query($link, $vSql) or die(mysqli_error($link));

echo "La ciudad fue modificada correctamente.<br>";
echo "<a href='menu.html'>Volver al menu</a>";

mysqli_close($link);
?>