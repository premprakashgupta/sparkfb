$(document).ready(function(){
    $('.container-fluid .profile_list .user_profile .user_profile_operation ul li .about_box .about_input .fa-pen').click(function(){
        $('.container-fluid .profile_list .user_profile .user_profile_operation ul li .about_box .about_input .fa-pen').hide(); 
        $('.container-fluid .profile_list .user_profile .user_profile_operation ul li .about_box .about_input .fa-check').show();  
        $('.container-fluid .profile_list .user_profile .user_profile_operation ul li .about_box .about_input input').removeAttr("disabled");
        $('.container-fluid .profile_list .user_profile .user_profile_operation ul li .about_box .about_input .fa-pen').css("background-color","transparent");
        $('.container-fluid .profile_list .user_profile .user_profile_operation ul li .about_box .about_input input').css("border-bottom","2px solid #333").focus();
    
    });
    $('.container-fluid .profile_list .user_profile .user_profile_operation ul li .about_box .about_input .fa-check').click(function(){
        
    
    
    
        var about =$('.container-fluid .profile_list .user_profile .user_profile_operation ul li .about_box .about_input input').val();


        

        if(about != ""){

            $('.container-fluid .profile_list .user_profile .user_profile_operation ul li .about_box .about_input .fa-check').hide(); 
            $('.container-fluid .profile_list .user_profile .user_profile_operation ul li .about_box .about_input .fa-pen').show();  
            $('.container-fluid .profile_list .user_profile .user_profile_operation ul li .about_box .about_input input').attr("disabled",true);
            $('.container-fluid .profile_list .user_profile .user_profile_operation ul li .about_box .about_input .fa-check').css("background-color","transparent");
            $('.container-fluid .profile_list .user_profile .user_profile_operation ul li .about_box .about_input input').css("border-bottom","0").focusout();
    
    



    
            $.ajax({
                
                url: 'about_update.php',
                type: 'post',
                data: {about:about},
                success: function(result){
                    
                    
                    swal(result, 'Thank you', 'success');
                    
                }
                
            });
    
        }
        else{
            swal("write something about yourself", 'Thank you', 'warning');

        }
    

    });

    $('.fa-comment-alt-lines').click(function(){
        $('.about_box').fadeToggle();
    });

    
});



