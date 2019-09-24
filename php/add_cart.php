<?php 
session_start();


$id = $_REQUEST["m_id"];
$price = $_REQUEST["m_price"];

//echo $price;

$cart_item = 0;
$items = array();
$item_quantity = array();
$prices = array();

if (isset($_SESSION["total_cart_item"])) {
	$cart_item = $_SESSION["total_cart_item"];
}

$cart_item = $cart_item + 1;


if (isset($_SESSION["cart_item_list"])) {
	$items = $_SESSION["cart_item_list"];
	$item_quantity = $_SESSION["cart_item_quantity"];
	$prices = $_SESSION["cart_item_price"];
}

array_push($items, $id);
array_push($item_quantity, 1);
array_push($prices, $price);




$_SESSION["total_cart_item"] = $cart_item;
$_SESSION["cart_item_list"] = $items;
$_SESSION["cart_item_quantity"] = $item_quantity;
$_SESSION["cart_item_price"] = $prices;



header("Location: ../");
 ?>