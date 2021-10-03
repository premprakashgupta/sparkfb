$(document).ready(function(){


// scroll -----------------------------------------function 
function scrolling(){
    console.log("p");
    var r=$(".chat_box .chat_box_inner .chat").prop("scrollHeight");
    console.log(r);
    $(".chat_box .chat_box_inner .chat").animate({
        scrollTop: r
    }, 500);
}   


    // end --------------------------------


    // gallery photo display--------------------------------

    function gallery_photo(){


        $.ajax({
                    
            url: 'gallery_photo.php',
            type: 'post',
            success: function(result){
                var result_two = $.parseJSON(result);
                $('.media_file_inner_container_content .media_file_inner_container_content_second .images ul li').remove();
                $('.media_file_inner_container_content .media_file_inner_container_content_second .images ul').append(result_two[0]);

                $('.media_file ul li').remove();
                $('.media_file ul').append(result_two[1]);

                
            }
    
    });
    
    };


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

// status display ----------------------------------------

function status_display(){


    $.ajax({
                
        url: 'status_display.php',
        type: 'post',
        success: function(result){
            
        
            $('.online_status').html(result);
            $('.status_two').html(result);
            
        
        }

});

};


    $('.main_profile_list ul').on("click",'li',function(){
        // console.log($(this).html());
        var reciever_name=$(this).find('.name').html();
        var reciever_number=$(this).find('.reciever_number').html();
        $.ajax({
                
            url: 'reciever_detail.php',
            type: 'post',
            data: {reciever_name:reciever_name,reciever_number:reciever_number},
            success: function(result){
        
              $('.mobile_no').html(result);
            
            msg_display();
            scrolling();
            status_display();
            gallery_photo();
            setInterval(() => {
                msg_display();
                status_display();
                // scrolling();
            }, 500);

            
            }
            
        });
    });

    // $('.media_file ul li').not(".prem1",".prem2").css("display","none");
  
});

// var scroll_height;

// $('.chat').on("scroll",function(){
//     var c1=$('.chat').scrollTop();
// if(c1<scroll_height)
// {
//     $('.scroll_down_btn').show(500);
// }
// else{
//     $('.scroll_down_btn').hide(500);
// }
// });

// $('.scroll_down_btn').click(function(){
//     var d=$('.chat').scrollTop(scroll_height);
// });