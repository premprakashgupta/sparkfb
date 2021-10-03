<?php
session_start();
include"db_con.php";
$sender_number=$_SESSION['sender_number'];
if($_FILES['profile_picture_for_update']['name'] !="")
{
    $file_name=$_FILES['profile_picture_for_update']['name'];
$extention = pathinfo($file_name,PATHINFO_EXTENSION);
$valid_extention = array("jpg","jpeg","png");
if(in_array($extention,$valid_extention))
{
    $new_name=$sender_number.".".$extention;
    $path = "upload/".$new_name;
    if(move_uploaded_file($_FILES['profile_picture_for_update']['tmp_name'],$path)){
        $q="update user set image='$path' where number='$sender_number'";
        $result = mysqli_query($con,$q);
        $_SESSION['profile_img']=$path;
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