$(document).ready(function(){

    function chat_list_display(){
        $.ajax({

            url: "chat_list_display.php",
            type: "POST",
        
            success: function(result){
                $('.main_profile_list ul').append(result);
               
            }
        });
    }

    chat_list_display();
    
});


