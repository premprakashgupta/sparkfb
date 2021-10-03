$(document).ready(function(){


    function msg_display(){


        $.ajax({
                    
            url: 'msg_display.php',
            type: 'post',
            success: function(result){
            
                $('.chat_box .chat_box_inner .chat p').remove();
                $('.chat_box .chat_box_inner .chat').append(result);
                
            }
    
    });
    
    };

    function scrolling(){
        $(".chat_box .chat_box_inner .chat").animate({
            scrollTop: "+=1000px"
        }, 500);
        setTimeout(function(){
            scroll_height=$('.chat').scrollTop();
        },502);
    }   












    $('.user_profile_img img').click(function(){
        $('.profile_update_box').css('display','flex');
    });

    $('.update_box_close').click(function(){
        
    
        $('.profile_update_box').hide();
        
    });

$('#submit_form').on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(this);
    $('.upper_input_box i').attr("class","fa fa-spinner");

    $.ajax({

        url: "profile_update.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(result){
            if(result=="file uploaded"){
                swal(result, "You clicked the button!", "success");
            $('.upper_input_box i').attr("class","fa fa-upload outerbox_icon");
            $('.profile_update_box').hide();
            }
            if(result=="formate will be jpg,jpeg,png"){
                swal(result, "You clicked the button!", "warning");
            $('.upper_input_box i').attr("class","fa fa-upload outerbox_icon");
           
            }
            if(result=="Choose any file"){
                swal(result, "You clicked the button!", "error");
            $('.upper_input_box i').attr("class","fa fa-upload outerbox_icon");
            
            }

            
        }
        



    })
})





$('.clip_icon').click(function(){
    $('.photo_send_box').css('display','flex');
});

$('.photo_send_box_close').click(function(){
    

    $('.photo_send_box').hide();
    $('.clip_icon i').css('background-color','rgba(144,144,144,0)');
    
});



$('#submit_form_photo').on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(this);
    $('.upper_input_box i').attr("class","fa fa-spinner");

    $.ajax({

        url: "photo_send.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(result){
            
            msg_display();
            scrolling();
            if(result=="file uploaded"){
                swal(result, "You clicked the button!", "success");
            $('.photo_send_box .upper_input_box i').attr("class","fa fa-file-image outerbox_icon");
            $('.photo_send_box').hide();
            }
            if(result=="formate will be jpg,jpeg,png"){
                swal(result, "You clicked the button!", "warning");
            $('.photo_send_box .upper_input_box i').attr("class","fa fa-file-image outerbox_icon");
           
            }
            if(result=="Choose any file"){
                swal(result, "You clicked the button!", "error");
            $('.photo_send_box .upper_input_box i').attr("class","fa fa-file-image outerbox_icon");
            
            }

            
        }
        



    })
})

 $('.chat').on("click","p span img",function(){
     $('.photo_preview').css('display','flex');
     var src=$(this).attr("src");
     $('.photo_preview .box img').attr("src",src);
     console.log(src);
 })  

$('.photo_preview_close').click(function(){
    $('.photo_preview').hide();
});
// $('.photo_preview .box img').dblclick(function(e){
//     e.preventDefault();
//     window.location.href="download/"
// })
});