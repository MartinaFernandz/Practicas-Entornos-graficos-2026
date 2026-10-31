<?php
session_start();

if (isset($_SESSION["carro"])) {
    $carro = $_SESSION["carro"];
} else {
    $carro = array();
}

$total = 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de compras</title>
</head>
<body>
    <h1>Carrito de compras</h1>

    <?php
    if (count($carro) > 0) {
    ?>

    <table border="1">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>Quitar</th>
        </tr>

        <?php
        foreach ($carro as $producto) {
            $subtotal = $producto["precio"] * $producto["cantidad"];
            $total = $total + $subtotal;
        ?>
        <tr>
            <td><?php echo $producto["producto"]; ?></td>
            <td><?php echo $producto["precio"]; ?></td>
            <td>
                <form action="agregarcar.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                    <input type="number" name="cantidad" value="<?php echo $producto['cantidad']; ?>" min="1" required>
                    <input type="submit" value="Actualizar">
                </form>
            </td>
            <td><?php echo number_format($subtotal, 2); ?></td>
            <td>
                <a href="borrarcar.php?id=<?php echo $producto['id']; ?>">
                    Quitar
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>

    <p>Productos distintos: <?php echo count($carro); ?></p>
    <p>Total: $<?php echo number_format($total, 2); ?></p>

    <?php
    } else {
        echo "<p>No hay productos seleccionados.</p>";
    }
    ?>

    <p><a href="catalogo.php">Volver al catálogo</a></p>
</body>
</html>