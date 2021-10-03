<?php
session_start();
include "db_con.php";
$sender_n=$_SESSION['sender_number'];
$reciever_n=$_SESSION['reciever_number'];
// $sender_n="9199";
// $reciever_n="9955";
$q="select * from message where (sender='$sender_n' and reciever='$reciever_n') or (sender='$reciever_n' and reciever='$sender_n')";
$result = mysqli_query($con,$q);
// print_r($result);
$num=mysqli_num_rows($result);

$output="";
for($i=0;$i<$num;$i++)
{
    $row = mysqli_fetch_array($result);
    
    if($reciever_n==$row['reciever']){
        if($row['blue_tick']=="seen")
        $output.="<p class='self'> <span class='self_text_msg prem'>".$row['msg']."<span class='time'>".$row['c_time']."<i class='fa fa-check seen'></i></span></span></p>";
        else
        $output.="<p class='self'> <span class='self_text_msg prem'>".$row['msg']."<span class='time'>".$row['c_time']."<i class='fa fa-check unseen'></i></span></span></p>";
    }
    
    else
    {
        $output.="<p class='other'> <span class='other_text_msg prem'>".$row['msg']."<span class='time'>".$row['c_time']."</span></span></p>";

    }
    
}



echo $output;


?>