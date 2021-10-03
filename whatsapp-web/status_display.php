<?php
session_start();
include "db_con.php";
$reciever_n=$_SESSION['reciever_number'];
$q="select status from user where (number='$reciever_n')";
$result = mysqli_query($con,$q);
$num=mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);



echo $row['status'];


?>