<?php
session_start();
if(!isset($_SESSION['sender_number']))
{
$_SESSION['success_info']="<script>swal('You can't access this page without login !!', 'Sorry..', 'error');</script>";
	header("location://localhost/whatsapp-web/login.php");
	
}
include"chat_list_display.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
      <meta name="keywords" content="HTML, CSS, JavaScript">
      <meta name="author" content="prem">
    <!-- <meta http-equiv="refresh" content="30"> -->
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>whatsApp</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/indexstyle.css">
        <link rel="stylesheet" href="../fontawesome-free-5.14.0-web/css/all.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="shortcut icon" href="image/1523999-middle.png" />
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
    </head>
</head>
<body class="flex-div-center">
    <span class="info_for_screen_size">Sorry, Not supported in mobile.</span>
<?php echo $_SESSION['success_info'];?>
    <div class="container-fluid">
        <div class="profile_list">
            <div class="user_profile flex-div-space-between">
                <div class="user_profile_img">
                    
                <img src="<?php echo $_SESSION['profile_img'];?>" alt=""></div>
                <div class="user_profile_operation">
                    <ul class="flex-div-space-around">
                    <li id="status"><i class="fas fa-sync-alt" title="Status"></i></li>
                    <li><i class="fa fa-comment-alt-lines" title="About"></i>
                    <ul class="about_box">
                        <div class="about_input">
                        <input type="text" value="<?php echo $_SESSION['about'];?>" disabled> <i class="fa fa-check"></i> <i class="fa fa-pen"></i>
                        </div>
                        
                        <p>Change your About .............</p>
                    </ul>
                
                </li>
                    <li><i class="fa fa-ellipsis-v profile_menu" title="Menu"></i>
                    <ul class="profile_menu_ul">
                        <li class="new">New group</li>
                        <li>Create a room</li>
                        <li>Profile</li>
                        <li>Archieved</li>
                        <li>Starred</li>
                        <li>Setting</li>
                        <li class="logout">Log out</li>
                    </ul>
                    
                    </li>
                </ul></div>
            </div>
            <div class="notification_info d-flex">
                <div class="notification_icon"><i class="fa fa-bell-slash"></i></div>
                <div class="notification_msg">
                    <p>Get notified on new message</p>
                    <a href="#">Turn on desktop notifications</a>
                </div>
            </div>
            <div class="search_box flex-div-space-between">
                <div class="search_icon flex-div-center"><i class="fa fa-search"></i></div>
                <input type="text" placeholder="Search or start new chat" id="search_input">
            </div>
            <div class="main_profile_list">
                <!-- profile list ------------------------------------------------------- -->
                <ul>

                <?php
                
                   for($i=0;$i<$num;$i++){
                    $row=mysqli_fetch_array($result);
                   
                   ?> 
                    <li>
                    <img src="<?php echo $row['image']; ?>" alt=''>
                    <div class='profile_detail'>
                        <div class='profile_name_and_time flex-div-space-between'>
                            <div class='name'><?php echo $row['name']; ?></div>
                            <span class="reciever_number"><?php echo $row['number'];
                            // $_SESSION['reciever_number_first']=$row['number'];
                            
                            ?></span>
                            <span class="reciever_about"><?php echo $row['about'];
                            
                            ?></span>

                           <?php
                           
                           include"last_msg_display.php";
                        
                           
                           
                           
                           
                           ?> 
                            
                        </div>
                    </div>
                    </li>


                    <?php
                   }
                    ?>


                  
                </ul>

                <!-- end ------------------------------------------------------- -->
            </div>
        </div>
        <div class="chat_box flex-div-center">
            <div class="content ">
                <img src="image/pre_chat.jpg" alt="">
                <div class="connect_info">
                    <h1>Kepp your phone connected</h1>
                    <p>WhatsApp connects to your phone to sync messages. To reduce data usage, connect your phone to Wi-Fi.</p>
                </div>
                <div class="download_here flex-div-center">
                    <div class="download_here_info flex-div-space-around">
                        <i class="fa fa-laptop"></i><p class="m-0">WhatsApp is available for Windows. </p><a href="#">Get it here</a>
                    </div>
                    
                </div>
            </div>
            <div class="chat_box_inner">
                <div class="chat_profile_section flex-div-space-between">
                    <div class="chat_img_and_name flex-div-space-between">
                        
                        <img src="image/008f3a14-381b-466b-978d-b90941ad66c6.jpg" alt="">
                        <div class="name_and_time mx-3">
                            <p class="chat_person_name">Prem cse</p>
                            <p class="online_status">Online</p>
                        </div>
                       
                    </div>
                    <div class="click_space_for_contact_info"></div>
                    <div class="chat_profile_menu_and_search flex-div-space-between">
                        <div class="chat_search"><i class="fa fa-search"></i></div>
                        <div class="chat_menu"><i class="fa fa-ellipsis-v"></i>
                        

                            <ul class="chat_menu_ul">
                                <li>Contact info</li>
                                <li>Report business</li>
                                <li>Block</li>
                                <li>Select messages</li>
                                <li>Mute notifications</li>
                                <li>Clear messages</li>
                                <li>Delete chat</li>
                            </ul>
                            
                        
                        
                        </div>
                    </div>
                </div>
                
                <div class="chat">
                    <p class='self'> <span class='self_text_msg'>how are you <span class='time'>12:00</span></span></p>  
                </div>
                <div class="chat_bottom_section flex-div-space-around">
                    <div class="emoji"><i class="far fa-smile"></i>
                        <div class="emoji_box">
                            <ul>
                                <li>&#128513;</li>
                            </ul>
                        </div>
                
                
                
                    </div>
                        <div class="clip_icon"><i class="far fa-paperclip"></i>
                    </div>
                    <input type="text" placeholder="Type a message" id="chat_input">
                    <div class="mic"><i class="far fa-microphone"></i></div>
                    <div class="send"><i class="far fa-send"></i></div>
                    <div class="scroll_down_btn"><i class="fa fa-chevron-down"></i></div>
                </div>
            </div>

            <div class="contact_info">
                <div class="sec1_head">
                    <div class="contact_info_cross"><i class="fa fa-times"></i></div>
                    <p>Contact info</p>
                </div>
                <div class="contact_inner_box">
                   <div class="profile_pic_and_name">
                       <div class="profile_pic flex-div-center">
                        <img src="image/008f3a14-381b-466b-978d-b90941ad66c6.jpg" alt=""> 
                       </div>
                     <div class="profile_name">
                        <p>prem cse</p>
                        <span class="status_two">Online</span>
                     </div>
                       
                   </div>

                   <div class="media_and_links">
                       <div class="media_and_links_head flex-div-space-between">
                           <p>media,links,doc..</p>
                           <i class="fa fa-chevron-right"></i>
                       </div>
                       <div class="media_file">
                           <ul class="flex-div-space-between">
                            
                        </ul>
                       </div>
                   </div>

                   <div class="msd">
                       <ul>
                           <li><p>Mute notification</p><input type="checkbox"></li>
                           <li><p>Starred message</p><i class="fa fa-chevron-right"></i></li>
                           <li><p>Dissapearing message <span class="on-off">off</span></p> <i class="fa fa-chevron-right"></i></li>
                       </ul>
                   </div>

                   <div class="about_and_phone">
                    <div class="about_and_phone_head flex-div-space-between">
                        <p>about and phone</p>
                        
                    </div>
                    <div class="about">
                        <ul>
                        <li class="visible_about">jai shree ram</li>
                        
                        <li class="mobile_no"></li>
                     </ul>
                    </div>
                    <div class="contact_inner_box_bottom">
                        <ul>
                            <li class="block bl-re-de">
                                <i class="fa fa-ban"></i> <p>Block</p>
                            </li>
                            <li class="report_contact bl-re-de">
                                <i class="fa fa-thumbs-down"></i> <p>Report contact</p>
                            </li>
                            <li class="delete_chat bl-re-de">
                                <i class="fa fa-trash"></i> <p>Delete chat</p>
                            </li>
                            <li class="delete_chat bl-re-de" style="visibility: hidden;">
                                <i class="fa fa-trash"></i> <p>Delete chat</p>
                            </li>
                        </ul>
                        
                    </div>
                    
                </div>
                </div>
            </div>
           
            <!-- media file sec -------------------------------------------------------------------- -->

            <div class="media_file_container">
                <div class="media_file_inner_container">
                    <div class="media_file_inner_container_head">
                        <i class="fa fa-arrow-left media_file_container_back"></i>
                    </div>
                    <div class="after_checked flex-div-space-between">
                        <div class="after_checked_a flex-div-space-between">
                            <i class="fa fa-times delete_cross"></i>
                            <p class="selected_number">1 selected</p>
                        </div>
                        <div class="after_checked_b flex-div-space-between">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-trash"></i>
                            <i class="fa fa-share"></i>
                            <i class="fa fa-download"></i>
                        </div>
                    </div>
                    <div class="media_file_inner_container_tabs">
                        <ul class="flex-div-space-between">
                            <li class="tab_active">MEDIA</li>
                            <li>DOCS</li>
                            <li>LINKS</li>
                        </ul>
                    </div>
                    <div class="media_file_inner_container_content">
                        <div class="media_file_inner_container_content_second">
                            <div class="media_file_inner_container_content_inner images">
                                <ul>
                                    
                                </ul>
                            </div>
                             <!-- media doc sec -------------------------------------------------------------------- -->
                            <div class="media_file_inner_container_content_inner docs">
                                <ul>
                                    <li><input type="checkbox"><audio controls>
                                        <source src="music/yada yada.mp3" type="audio/ogg">
                                        Your browser does not support the audio element.
                                        </audio</li>
                                    <li><input type="checkbox"><a href="pdf/Programming with Python Training - Certificate of Completion (1).pdf" download><embed
    src="pdf/Programming with Python Training - Certificate of Completion (1).pdf"
    type="application/pdf"
    frameBorder="0"
    height="60%"
    width="60%"
></embed> Click here for download</a></li>
                                   
                                </ul>
                            </div>


                            <!-- media file link -------------------------------------------------------------------- -->


                            <div class="media_file_inner_container_content_inner links">
                                <ul>
                                    <li><input type="checkbox"><p>Join us on google meet <br> <a href="#"> https://meet.google.com/xtd-kjag-tdr</a></p></li>
                                    
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>




            <!-- all content above it ------------------------------------------------------- -->
        </div>
    </div>

    <!-- box 1 ---------------------------------------------------- -->
<div class="profile_update_box outerbox flex-div-center">
    <div class="box">
        <form id="submit_form">
        <div class="upper_input_box flex-div-center">
            <label for="profile_picture_for_update"><i class="fa fa-upload outerbox_icon"></i></label>
            <input type="file" name="profile_picture_for_update" id="profile_picture_for_update">
        </div>
        <div class="lower_input_box flex-div-space-around">
            <input type="button" class="update_box_close" value="Cancel"> <input type="submit" value="Update">
        </div>
        </form>
        
    </div>
</div>
<!-- box 2 ------------------------------------------------------------- -->

<div class="photo_send_box outerbox flex-div-center">
    <div class="box">
        <form id="submit_form_photo">
        <div class="upper_input_box flex-div-center">
            <label for="foto_send_file"><i class="fa fa-file-image outbox_icon"></i></label>
            <input type="file" name="photo_send_file" id="foto_send_file">
        </div>
        <div class="lower_input_box flex-div-space-around">
            <input type="button" class="photo_send_box_close" value="Cancel"> <input type="submit" value="send ">
        </div>
        </form>
        
    </div>
</div>
<!-- box 3--------------------------------------------------------- -->
<div class="photo_preview flex-div-center">
                   
    <div class="box">
       <img src="" alt="">
       <i class="fa fa-times photo_preview_close"></i>    
    </div>
</div>


<?php  $_SESSION['success_info']="";?>
</body>
<!-- <script src="javascript/chat_list_display.js" ></script> -->
<!-- <script src="javascript/last_msg_display.js" ></script> -->
<script src="javascript/conversation.js"></script>
<script src="javascript/profile_list.js"></script>
<script src="javascript/reciever_detail.js"></script>
<script src="javascript/chat_insertion.js"></script>
<script src="javascript/test.js"></script>
<script src="javascript/profile_update.js"></script>
<script src="javascript/about_update.js"></script>
</html>