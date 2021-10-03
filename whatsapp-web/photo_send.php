<?php
session_start();
include"db_con.php";
$sender_number=$_SESSION['sender_number'];
$reciever_number=$_SESSION['reciever_number'];
date_default_timezone_set('Asia/Kolkata');
$c_time = date('h:i a');
if($_FILES['photo_send_file']['name'] !="")
{
    $file_name=$_FILES['photo_send_file']['name'];
$extention = pathinfo($file_name,PATHINFO_EXTENSION);
$valid_extention = array("jpg","jpeg","png");
if(in_array($extention,$valid_extention))
{
    $new_name=rand(10000,99999).".".$extention;
    $path = "post_pic/".$new_name;
    $path_two = '<img src="'.$path.'">';
    // $path2 = "<img src='post_pic/".$new_name."'>";
    if(move_uploaded_file($_FILES['photo_send_file']['tmp_name'],$path)){
        $q="insert into message (sender,reciever,msg,c_time,image) values ('$sender_number','$reciever_number','$path_two','$c_time','img')";
        $status = mysqli_query($con,$q);
    
        echo "file uploaded";


    }
}
else{
    echo "formate will be jpg,jpeg,png";
}


}
else{
    echo "Choose any file";
}


?>