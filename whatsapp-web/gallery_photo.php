<?php
session_start();
include "db_con.php";
$sender_n=$_SESSION['sender_number'];
$reciever_n=$_SESSION['reciever_number'];
// $sender_n="9199";
// $reciever_n="9955";
$q="select * from message where (sender='$reciever_n' and reciever='$sender_n' and image='img')";
$result = mysqli_query($con,$q);
// print_r($result);
$num=mysqli_num_rows($result);

$output="";
$output_two="";
for($i=0;$i<$num;$i++)
{
    $row = mysqli_fetch_array($result);
   $output.="<li>".$row['msg']."</li>";
   if($i<3)
   {
    $output_two.="<li>".$row['msg']."</li>";
   }
    
}



echo json_encode(array($output,$output_two));


?>