<?php
session_start();

if (isset($_SESSION["carro"]) && isset($_GET["id"])) {
    $id = (int) $_GET["id"];

    $carro = $_SESSION["carro"];

    unset($carro[md5($id)]);

    $_SESSION["carro"] = $carro;
}

header("Location: vercarrito.php");
exit;
?>