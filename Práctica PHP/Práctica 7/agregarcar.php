<?php
session_start();

if (isset($_POST["id"])) {
    $id = (int) $_POST["id"];
} elseif (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
} else {
    header("Location: catalogo.php");
    exit;
}

if (isset($_POST["cantidad"])) {
    $cantidad = (int) $_POST["cantidad"];

    if ($cantidad < 1) {
        $cantidad = 1;
    }
} else {
    $cantidad = 1;
}

$link = mysqli_connect("127.0.0.1", "root", "", "", 3307)
    or die("Error de conexión");

mysqli_select_db($link, "compras");

$vSql = "SELECT * FROM catalogo WHERE id = $id";
$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

if ($fila = mysqli_fetch_array($vResultado)) {
    if (isset($_SESSION["carro"])) {
        $carro = $_SESSION["carro"];
    } else {
        $carro = array();
    }

    $carro[md5($id)] = array(
        "id" => $id,
        "producto" => $fila["producto"],
        "precio" => $fila["precio"],
        "cantidad" => $cantidad
    );

    $_SESSION["carro"] = $carro;
}

mysqli_free_result($vResultado);
mysqli_close($link);

header("Location: catalogo.php");
exit;
?>