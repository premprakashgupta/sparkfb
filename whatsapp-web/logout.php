<?php
session_start();
include"db_con.php";
date_default_timezone_set('Asia/Kolkata');
$c_time = "last seen ".date('h:i a');
$sender_number=$_SESSION['sender_number'];
$q="update user set status='$c_time' where number='$sender_number'";
$result = mysqli_query($con,$q);

session_destroy();
echo "logout";
header("location://localhost/whatsapp-web/login.php");

?>