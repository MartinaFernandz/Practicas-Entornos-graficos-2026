<?php
session_start();

$link = mysqli_connect("127.0.0.1", "root", "", "", 3307)
    or die("Error de conexión");

mysqli_select_db($link, "compras");

$vSql = "SELECT * FROM catalogo ORDER BY producto ASC";
$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de productos</title>
</head>
<body>
    <h1>Catálogo de productos</h1>

    <table border="1">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Acción</th>
        </tr>

        <?php
        while ($fila = mysqli_fetch_array($vResultado)) {
        ?>
        <tr>
            <td><?php echo $fila["producto"]; ?></td>
            <td><?php echo $fila["precio"]; ?></td>
            <td>
                <a href="agregarcar.php?id=<?php echo $fila['id']; ?>">
                    Agregar al carrito
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>

    <p><a href="vercarrito.php">Ver carrito</a></p>
</body>
</html>

<?php
mysqli_free_result($vResultado);
mysqli_close($link);
?>