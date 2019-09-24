<?php 
if (isset($_COOKIE["user_id"])) {
	header("Location: add_order.php");
}else{
	//echo'<script>alert("Login required...")</script>';
	header("Location: ../html/login.php");
}

 ?>