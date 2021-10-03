<?php
session_start();
include"db_con.php";
$sender_number=$_SESSION['sender_number'];
extract($_POST);



$q="update user set about='$about' where number='$sender_number'";
   $result = mysqli_query($con,$q);
   $_SESSION['about']=$about;

echo "About updated ...";






?>