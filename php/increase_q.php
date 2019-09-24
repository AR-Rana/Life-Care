<?php 
$indexNo = $_REQUEST["indexNo"];

session_start();
$item_quantity = $_SESSION["cart_item_quantity"];

$item_quantity[$indexNo] = $item_quantity[$indexNo]+1;
$_SESSION["cart_item_quantity"] = $item_quantity;

header("location: ../html/cart.php");
 ?>
