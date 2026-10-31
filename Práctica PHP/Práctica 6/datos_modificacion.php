<?php
include("conexion.php");

$id = $_POST["id"];

$vSql = "SELECT * FROM ciudades WHERE id = '$id'";
$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Ciudad</title>
</head>
<body>
    <h1>Modificar Ciudad</h1>

    <?php
    if (mysqli_num_rows($vResultado) == 0) {
        echo "La ciudad no existe.";
    } else {
        $fila = mysqli_fetch_array($vResultado);
    ?>

    <form action="modificacion.php" method="post">

        <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

        <label>Ciudad:</label>
        <input type="text" name="ciudad" value="<?php echo $fila['ciudad']; ?>" required>
        <br><br>

        <label>País:</label>
        <input type="text" name="pais" value="<?php echo $fila['pais']; ?>" required>
        <br><br>

        <label>Habitantes:</label>
        <input type="number" name="habitantes" min="0" value="<?php echo $fila['habitantes']; ?>" required>
        <br><br>

        <label>Superficie:</label>
        <input type="number" name="superficie" min="0" step="0.01" value="<?php echo $fila['superficie']; ?>" required>
        <br><br>

        <label>¿Tiene metro?</label>
        <select name="tieneMetro">
            <option value="1" <?php if ($fila['tieneMetro'] == 1) echo "selected"; ?>>Sí</option>
            <option value="0" <?php if ($fila['tieneMetro'] == 0) echo "selected"; ?>>No</option>
        </select>
        <br><br>

        <input type="submit" value="Guardar cambios">

    </form>

    <?php
    }

    mysqli_free_result($vResultado);
    mysqli_close($link);
    ?>

    <p><a href="menu.html">Volver al menú</a></p>
</body>
</html>