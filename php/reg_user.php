<?php 
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$address = $_REQUEST["address"];
$password = $_REQUEST["password"];

include 'conn.php';

$qry = "INSERT INTO users (name, email, phone, address, password)
VALUES ('$name', '$email', '$phone', '$address', '$password')";

$result = mysqli_query($conn, $qry);
//$runQuery = $conn->query($insertQuery);

if ($result === true) {
	header("Location: ../html/login.php");
}else{
	echo "Error: " .$mysql_qry . "<br>" .$conn->error;
}

$conn->close();
 ?>