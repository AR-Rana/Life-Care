<?php 
$email = $_REQUEST["email"];
$pass = $_REQUEST["password"];

echo $email . $pass;

require 'conn.php';
$qry = "SELECT * FROM users WHERE email LIKE '$email' AND password LIKE '$pass';";
$result = mysqli_query($conn, $qry);
if(mysqli_num_rows($result) > 0){
    
    $row = mysqli_fetch_assoc($result);
    $user_id = $row["u_id"];

    session_start();
    $cookie_name = "user_id";
    $cookie_value = $user_id;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/");// 86400 = 1 day

    header("Location: ../");
    //echo "Login success";
}
else{
    //header("Location: ../?err=loginFail");
    echo "Login failed";
}

$conn->close();
 ?>