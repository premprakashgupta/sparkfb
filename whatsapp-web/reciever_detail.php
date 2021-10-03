<?php
session_start();
include "db_con.php";
$sender_number=$_SESSION['sender_number'];
extract($_POST);
$_SESSION['reciever_number']=$reciever_number;

$q="update message set blue_tick='seen' where sender='$reciever_number' && reciever='$sender_number'";
$result = mysqli_query($con,$q);
// header("location://localhost/chat/index.php");
echo $reciever_number;

?>