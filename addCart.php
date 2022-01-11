<?php
    session_start();
    $name = $_POST["item-name"];
    $size = $_POST["size"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];

    $_SESSION["item-name"] = $name;
    $_SESSION["size"] = $size;
    $_SESSION["quantity"] = $quantity;
    $_SESSION["price"] = $price;

    header("Location: cart.php");
?>