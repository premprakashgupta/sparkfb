
var scroll_height=0;
$(document).ready(function(){
    // for search box ----------------------------------------------------
    $('.search_box input').focus(function(){
        
        $('.search_icon i').removeClass('fa-search');
        $('.search_icon i').addClass('fa-arrow-right');
        $('.fa-arrow-right').css('transform','rotateZ(180deg)');
    });
    $('.search_box input').focusout(function(){
        if($('.search_box input').val()=="")
        {
            $('.search_icon i').removeClass('fa-arrow-right');
        $('.search_icon i').addClass('fa-search');
        $('.fa-search').css('transform','rotateZ(0deg)');
        }
    });
    $('.arrow-right').click(function(){
        
        $('.search_icon i').removeClass('fa-arrow-right');
        $('.search_icon i').addClass('fa-search');
        $('.fa-search').css('transform','rotateZ(0deg)');
        
    });
   
    // refresh page -------------------------------------------------------

    $('.fa-sync-alt').click(function(){
        $('.fa-sync-alt').css('transform', "rotateZ(240deg)");
        setTimeout(function(){
            location.reload();
        },1000);
        
    });
    
    // end ------------------------------------------------------------

    // for message type and send button appear ------------------------------------------------

    function send_btn_action(){
        var message=$('#chat_input').val().trim();
        // for enter button work-----------------
        if(message.length>0)
        {
          $('.mic').css('display','none');
          $('.send').css('display','block');
        }
        else{
            
          $('.send').css('display','none');
          $('.mic').css('display','block');
        }
    };
    $('#chat_input').keyup(function(event){
        send_btn_action();
        if (event.keyCode === 13) {
            // Cancel the default action, if needed
            event.preventDefault();
            // Trigger the button element with a click
            if($('#chat_input').val()!="")
            {
                $('.fa-send').click();
            }
           
          }
    });
 // end ----------------------------------------------------------------------

// chat box display ----------------------------------------------------------------
$('.container-fluid .profile_list .main_profile_list ul').on("click",'li',function(){
    console.log("profile js run");
        $('.container-fluid .profile_list .main_profile_list ul li').removeClass('active');
        $(this).addClass('active');
        $('.content').css('display','none');
        $('.chat_box_inner').css('display','block');
// contact info ----------
        $('.contact_info').hide();
        $('.chat_box_inner').css('width','100%');
        $('.chat_box').css('border','none');
// media file -------------
        $('.media_file_container').hide();
    $('.chat_box_inner').css('width','100%');

        // i will remove below code on the time of back-end -----------------------------------------------
        var v=$(this).find('.name').html();
        $('.chat_person_name').html(v);
        $('.profile_name p').html(v);
        var v=$(this).find('img').attr('src');
        $('.chat_img_and_name img').attr('src',v);
        $('.profile_pic img').attr('src',v);

        var v=$(this).find('.reciever_about').html();
        $('.visible_about').html(v);


       

        // add tag_active on first class--------------------------------------

        $('.media_file_inner_container_tabs ul li').removeClass('tab_active');
        $('.media_file_inner_container_tabs ul li:first-child').addClass('tab_active');
        $('.media_file_inner_container_content_second').css('transform','translateX(0px)');


        // triggred menu buttons ------------------------------
        if($('.profile_menu_ul').css('display')=='block')
        {
            $('.profile_menu_ul').hide();
            $('.user_profile_operation ul li i').css('background-color','rgba(144,144,144,0)');
        }
        if($('.chat_menu_ul').css('display')=='block')
        {
            $('.chat_menu_ul').hide();
            $('.chat_menu i').css('background-color','rgba(144,144,144,0)');
        }
        

        
        

    });
    // end --------------------------------------------------------------------------------

    // profile menu click function ----------------------------------------------------------

    $('.profile_menu').click(function(){               
        $('.profile_menu_ul').fadeToggle();
        
    });
    // end--------------------------------------------------------------------------
    // chat box menu click function --------------------------------------------------
    $('.chat_menu').click(function(){
        $('.chat_menu_ul').fadeToggle();
        var p=$('.chat_menu i');
        var v= p.css('background-color');
        if(v == 'rgba(144, 144, 144, 0.3)')
        {
        p.css('background-color','rgba(144,144,144,0)');
        
        }
        else
        {
        p.css('background-color','rgba(144,144,144,0.3)');
        
        }
    });
// end ------------------------------------------------------------------------------------

// icon round bd after click -------------------------------------------------------

$('.user_profile_operation ul li i').click(function(){
  

   
    if($(this).css('background-color') == 'rgba(144, 144, 144, 0.3)')
    {
    $(this).css('background-color','rgba(144,144,144,0)');
    ;
    }
    else
    {
    $(this).css('background-color','rgba(144,144,144,0.3)');
    
    }
});

// end ----------------------------------------------------------------------------------

// paperclip click function ---------------------------------------------------------

$('.clip_icon i').click(function(){
    

    console.log($(this).css('background-color'));
    if($(this).css('background-color') == 'rgba(144, 144, 144, 0.3)')
    {
    $(this).css('background-color','rgba(144,144,144,0)');
    
    }
    else
    {
    $(this).css('background-color','rgba(144,144,144,0.3)');
    
    }
});

// end -----------------------------------------------------------------------------------

// all image alternate imag if dp is not present ----------------------------------------------------

$('img').attr('onerror',"this.src='image/default-profile-picture-clipart-3.jpg';");

// end -----------------------------------------------------------------------------------------------

// click function on .click_space_for_contact_info to display contact info ---------------------------------------

$('.click_space_for_contact_info').click(function(){
    if($('.media_file_container').css('display')!='block')
    {
        $('.contact_info').show();
        $('.chat_box_inner').css('width','70%');
    }
    
});
$('.contact_info_cross').click(function(){
    $('.contact_info').hide();
    $('.chat_box_inner').css('width','100%');
});

// end ---------------------------------------------------------------------------------------

// media sec display -------------------------------

$('.media_and_links_head').click(function(){
    $('.contact_info').hide();
    $('.media_file_container').show();
})

// end -------------------------------

// media file tab click function --------------------------------------------------

$('.media_file_inner_container_tabs ul li').click(function(){
    $('.media_file_inner_container_tabs ul li').removeClass('tab_active');
    $(this).addClass('tab_active');
    var tab_name = $(this).html();
    // console.log(tab_name);
    if(tab_name == 'DOCS')
    {
        // console.log("11");
        $('.media_file_inner_container_content_second').css('transform','translateX(-389px)');
        

    }
    if(tab_name == 'LINKS')
    {
        // console.log("12");
        $('.media_file_inner_container_content_second').css('transform','translateX(-777px)');
    }
    if(tab_name == 'MEDIA')
    {
        // console.log("13");
        $('.media_file_inner_container_content_second').css('transform','translateX(0px)');
    }
});
$('.media_file_container_back').click(function(){
    $('.media_file_container').hide();
    $('.contact_info').show();
});

// delete item selected -----------------------------
var count=0;
$('.media_file_inner_container_content_inner ul li input').click(function(){
    var numberOfChecked = $('.media_file_inner_container_content_inner ul li input:checkbox:checked').length;
    if(numberOfChecked>0){
        $('.media_file_inner_container_head').hide();
        $('.after_checked').css('display','flex');
    }
    else{
        $('.after_checked').hide();
        $('.media_file_inner_container_head').show();
        
    }
    $('.selected_number').html(numberOfChecked+"  selected");
});








// end -------------------------------------------------






// end ----------------------------------------------------------------

//    logout ----------------------------------------------

$('.logout').click(function(){
    window.location.href="logout.php";
})
$('.container-fluid .profile_list .main_profile_list ul li .profile_detail .profile_msg .msg p img').replaceWith(function(){
    return $("<i class='fa fa-file-image'></i>", {html: $(this).html()});
});

$('.container-fluid .profile_list .main_profile_list ul li .profile_detail .profile_msg .msg p audio').replaceWith(function(){
    return $("<i class='fa fa-music'></i>", {html: $(this).html()});
});
$('.container-fluid .profile_list .main_profile_list ul li .profile_detail .profile_msg .msg p video').replaceWith(function(){
    return $("<i class='fa fa-video'></i>", {html: $(this).html()});
});
$('.container-fluid .profile_list .main_profile_list ul li .profile_detail .profile_msg .msg p embed').replaceWith(function(){
    return $("<i class='fa fa-file-pdf'></i>", {html: $(this).html()});
});





// emoji picker ------------------------------


// $(function() {
//     // Initializes and creates emoji set from sprite sheet
//     window.emojiPicker = new EmojiPicker({
//       emojiable_selector: '[data-emojiable=true]',
//       assetsPath: 'http://onesignal.github.io/emoji-picker/lib/img/',
//       popupButtonClasses: 'fa fa-smile-o'
//     });
//     // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
//     // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
//     // It can be called as many times as necessary; previously converted input fields will not be converted again
//     window.emojiPicker.discover();
//   });


// search operation-----------------------------------


$('.search_box input').keyup(function(){
    var search=$(this).val().toLowerCase();
    var name_in_list = $('.main_profile_list ul li');
    name_in_list.filter(function(){
        $(this).toggle($(this).find('.name').text().toLowerCase().indexOf(search) > -1)
    });

});
 

$('.search_icon').on("click",'i',function(){
    $('.search_box input').val("");
    $('.main_profile_list ul li').show();
})
$('.download_here_info a').click(function(e){
    console.log("a");
    // e.preventDefault();
    window.open("https://www.whatsapp.com/download","_blank");
})

$('.menu_bars').click(function(){
    $('.profile_list').css('transform','translateX: 50vw');
})




});