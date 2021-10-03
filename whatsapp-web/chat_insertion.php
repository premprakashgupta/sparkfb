<?php
session_start();
include "db_con.php";
date_default_timezone_set('Asia/Kolkata');
$c_time = date('h:i a');

$sender_msg=$_POST['sender_msg'];
$sender_n=$_SESSION['sender_number'];
$reciever_n=$_SESSION['reciever_number'];
$q="insert into message (sender,reciever,msg,c_time) values ('$sender_n','$reciever_n','$sender_msg','$c_time')";
$status = mysqli_query($con,$q);
echo $status;
$blue_tick_query="update message set blue_tick='seen' where sender='$reciever_n' && reciever='$sender_n'";
$blue_tick_result = mysqli_query($con,$blue_tick_query);

?>