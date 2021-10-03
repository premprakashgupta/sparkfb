<?php
session_start();
include"db_con.php";
extract($_POST);

if(is_numeric($sender_number) && strlen($sender_number)==10 && !empty($name) && strlen($name)>5){


    $query="select * from user where number='$sender_number'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
echo $num;


if($num<1)
{
    
    $insert_query="insert into user (number,name,image,about) values ('$sender_number','$name','image/default-profile-picture-clipart-3.jpg','Hey there! I am using WhatsApp.')";


    $insert_result=mysqli_query($con,$insert_query);
    if($insert_result)
    {
        $_SESSION['sender_number']=$sender_number;

        $query="select * from user where number='$sender_number' && name='$name'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
       
        $_SESSION['profile_img']=$row['image'];
    $_SESSION['name']=$row['name'];
    $_SESSION['about']=$row['about'];
    $q="update user set status='Online' where number='$sender_number'";
    $result = mysqli_query($con,$q);
    $_SESSION['success_info']="<script>swal('Registered', 'Thank you', 'success');</script>";
    header("location://localhost/whatsapp-web/index.php");

    }
    else{
        $_SESSION['success_info']="<script>swal('Not Registered, Try again..', 'Thank you', 'error');</script>";
        header("location://localhost/whatsapp-web/login.php");
    }
   
}
else{

    $query="select * from user where number='$sender_number' && name='$name'";
    $loginresult=mysqli_query($con,$query);
    $num=mysqli_num_rows($loginresult);
    if($loginresult){
        if($num==1){
            $row=mysqli_fetch_array($loginresult);
            $_SESSION['sender_number']=$sender_number;
               $_SESSION['profile_img']=$row['image'];
           $_SESSION['name']=$row['name'];
           $_SESSION['about']=$row['about'];
           
           $q="update user set status='Online' where number='$sender_number'";
           $result = mysqli_query($con,$q);
           $_SESSION['success_info']="<script>swal('login', 'Thank you', 'success');</script>";
           // echo "swal('login', 'Thank you', 'success');";
              header("location://localhost/whatsapp-web/index.php");

    }
    else{
        $_SESSION['success_info']="<script>swal('Number already registered !!', 'Thank you', 'warning');</script>";
        header("location://localhost/whatsapp-web/login.php");
    }


}
else{
    $_SESSION['success_info']="<script>swal('Login failed..', 'Thank you', 'error');</script>";
        header("location://localhost/whatsapp-web/login.php");
   
}



   
}


}
else{
     $_SESSION['success_info']="<script>swal('Check all details again !!', 'Thank you', 'error');</script>";
    header("location://localhost/whatsapp-web/login.php");
}


?>