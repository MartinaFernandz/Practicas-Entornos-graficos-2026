<?php
include("conexion.php");

$Cant_por_Pag = 2;

$pagina = isset($_GET["pagina"]) ? (int) $_GET["pagina"] : 1;

if ($pagina < 1) {
    $pagina = 1;
}

$vSql = "SELECT * FROM ciudades";
$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

$total_registros = mysqli_num_rows($vResultado);
$total_paginas = ceil($total_registros / $Cant_por_Pag);

mysqli_free_result($vResultado);

if ($total_paginas > 0 && $pagina > $total_paginas) {
    $pagina = $total_paginas;
}

$inicio = ($pagina - 1) * $Cant_por_Pag;

$vSql = "SELECT * FROM ciudades ORDER BY id LIMIT $inicio, $Cant_por_Pag";
$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado con Paginación</title>
</head>
<body>
    <h1>Listado de Ciudades con Paginación</h1>

    <p>Total de registros: <?php echo $total_registros; ?></p>
    <p>Página <?php echo $pagina; ?> de <?php echo $total_paginas; ?></p>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Ciudad</th>
            <th>País</th>
            <th>Habitantes</th>
            <th>Superficie</th>
            <th>Tiene Metro</th>
        </tr>

        <?php
        while ($fila = mysqli_fetch_array($vResultado)) {
        ?>
        <tr>
            <td><?php echo $fila["id"]; ?></td>
            <td><?php echo $fila["ciudad"]; ?></td>
            <td><?php echo $fila["pais"]; ?></td>
            <td><?php echo $fila["habitantes"]; ?></td>
            <td><?php echo $fila["superficie"]; ?></td>
            <td><?php echo $fila["tieneMetro"]; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <p>
    <?php
    for ($i = 1; $i <= $total_paginas; $i++) {
        if ($pagina == $i) {
            echo $i . " ";
        } else {
            echo "<a href='listado_pag.php?pagina=" . $i . "'>" . $i . "</a> ";
        }
    }
    ?>
    </p>

    <p><a href="menu.html">Volver al menú</a></p>
</body>
</html>

<?php
mysqli_free_result($vResultado);
mysqli_close($link);
?>