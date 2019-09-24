<?php 
session_start();


$cart_item = 0;
$items = array();
if (isset($_SESSION["total_cart_item"])) {
	$cart_item = $_SESSION["total_cart_item"];
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>

 	<link rel="stylesheet" href="../bootstrap/bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="../css/reg.css">
 </head>
 <body>
 <script src="../bootstrap/jquery/jquery.slim.min.js"></script>
 <script src="../bootstrap/bootstrap/js/popper.min.js"></script>
 <script src="../bootstrap/bootstrap/js/bootstrap.min.js"></script>

 <!-- Navigation bar -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="../">
      <img src="../images/logo.png" width="55px" height="50px" alt="logo">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0" action="home_page.php" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="search here" aria-label="Search" name="search" style="width: 600px;" required>
      <input class="btn btn-outline-light my-2 my-sm-0" type="submit" value="Search">
    </form>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <div class="cart largenav col-sm-2">
            <a class="cart-button" href="cart.php">
                <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                    <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>
                </svg> Cart
                <span class="item-number "><?php echo $cart_item; ?></span>
            </a>
        </div>
      </li>
    </ul>
    
  </div>
  </div>
</nav>
<!-- navbar ends -->

<section id="formContainer" class="container">
  <form id="loginForm" action="../php/reg_user.php" method="post">

    <input type="text" class="form-control" placeholder="Name" name="name" required>
    <input type="email" class="form-control" placeholder="Email" name="email" required>
    <input type="text" class="form-control" placeholder="Phone" name="phone" required>
    <input type="text" class="form-control" placeholder="Address" name="address" required>
    <input type="password" class="form-control" placeholder="Password" name="password" required>
    <input type="submit" class="btn btn-primary form-control" value="Registration">
    <center><a href="login.php">Already have an account?</a></center>
  </form>
</section>
 
 </body>
 </html>