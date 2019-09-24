<?php 
session_start();

$total = 0;
$items = array();
$item_quantity = array();
$prices = array();
$total_price = 0.00;

if (isset($_SESSION["total_cart_item"]) and isset($_SESSION["cart_item_list"]) and isset($_SESSION["cart_item_quantity"])) {

	$total = $_SESSION["total_cart_item"];
	$items = $_SESSION["cart_item_list"];
	$item_quantity = $_SESSION["cart_item_quantity"];
	$prices = $_SESSION["cart_item_price"];

	$id = $_COOKIE["user_id"];

	$itemStr = "";
	$quantityStr = "";
	$priceStr = "";

	for ($i=0; $i < $total; $i++) { 
		$itemStr = $itemStr . $items[$i].',';
		$quantityStr = $quantityStr . $item_quantity[$i];
		$priceStr = $priceStr . $prices[$i].',';

		$total_price = $total_price + ($item_quantity[$i] * $prices[$i]);
	}

	include 'conn.php';

	$qry = "INSERT INTO orders (u_id, m_ids, m_quantities, m_prices, total_price, status)
	VALUES ('$id', '$itemStr', '$quantityStr', '$priceStr', '$total_price', 'pending')";

	$result = mysqli_query($conn, $qry);
	//$runQuery = $conn->query($insertQuery);

	if ($result === true) {
		//echo 'Order placed success';
		session_destroy();
		header("Location: ../html/orders.php");
	}else{
		echo "Error: " .$mysql_qry . "<br>" .$conn->error;
	}

	$conn->close();
	}

	//echo $itemStr.'<br>'.$quantityStr.'<br>'.$priceStr.'<br>'.$total_price;



//header("Location: ../");

 ?>