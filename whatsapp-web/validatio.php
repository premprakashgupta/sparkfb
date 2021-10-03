<?php
session_start();
include "db_con.php";
$sender_number=$_POST['sender_number'];
$_SESSION['sender_number']=$_POST['sender_number'];
$q="select * from user where number='$sender_number'";
$result = mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$_SESSION['profile_img']=$row['image'];
$_SESSION['name']=$row['name'];

$q="update user set status='Online' where number='$sender_number'";
$result = mysqli_query($con,$q);

header("location://localhost/whatsapp-web/index.php");
?>