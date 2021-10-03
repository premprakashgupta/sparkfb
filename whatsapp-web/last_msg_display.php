<?php
include "db_con.php";
$sender_number=$_SESSION['sender_number'];
$reciever_number_first=$row['number'];

if($sender_number != $reciever_number_first)
{

    $query="select * from message where ((sender='$sender_number') and (reciever='$reciever_number_first')) or ((sender='$reciever_number_first') and (reciever='$sender_number'))  order by id desc";
$result1 = mysqli_query($con,$query);
$num1 =mysqli_num_rows($result1);
$output1="<div class='time'>00:00</div>
</div>
<div class='profile_msg flex-div-space-between'>
        <div class='msg d-flex' title='Nothing...'>
   
            <p>Nothing...</p></div><div class='mute_and_pin'><i class='fa fa-volume-slash' title='Mute'></i><i class='fa fa-thumbtack' title='Pin'></i><i class='fa fa-chevron-down' title='More'></i></div>";
if($num1>0){
    $output1=" ";
    for($j=0;$j<1;$j++)
{
    $row1 = mysqli_fetch_array($result1);
    $row1['sender']==$sender_number ? $you="You : ":$you="";
    $row1['blue_tick']=="seen" ? $blue_tick="seen" : $blue_tick="unseen";
    // if($row1['blue_tick']=="seen")
    // {
        $output1.="
    <div class='time'>".$row1['c_time']."</div>
    </div>
    <div class='profile_msg flex-div-space-between'>
            <div class='msg d-flex' title='".$you.$row1['msg']."'>
                <i class='fa fa-check ".$blue_tick."'></i>
                <p>".$you.$row1['msg']."</p></div><div class='mute_and_pin'><i class='fa fa-volume-slash' title='Mute'></i><i class='fa fa-thumbtack' title='Pin'></i><i class='fa fa-chevron-down' title='More'></i></div>";
    // }
    // else{
    //     $output1.="
    // <div class='time'>".$row1['c_time']."</div>
    // </div>
    // <div class='profile_msg flex-div-space-between'>
    //         <div class='msg d-flex' title='kaise ho beta ? hum thik hai tum batao kaise ho axxe ho n padhayi kaise chal rahi hai'>
    //             <i class='fa fa-check unseen'></i>
    //             <p>".$you.$row1['msg']."</p></div><div class='mute_and_pin'><i class='fa fa-volume-slash' title='Mute'></i><i class='fa fa-thumbtack' //title='Pin'></i><i class='fa fa-chevron-down' title='More'></i></div>";
    // }



}
}





echo $output1;

}

?>