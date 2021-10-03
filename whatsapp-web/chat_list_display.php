<?php
// session_start();
include "db_con.php";
$sender_number=$_SESSION['sender_number'];
$q="select * from user where number !=('$sender_number')";
$result = mysqli_query($con,$q);
$num=mysqli_num_rows($result);






?>