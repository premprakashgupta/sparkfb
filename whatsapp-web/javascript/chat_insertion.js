$(document).ready(function(){
   
// scroll -----------------------------------------function 
            function scrolling(){
                console.log("p");
                var r=$(".chat_box .chat_box_inner .chat").prop("scrollHeight");
                $(".chat_box .chat_box_inner .chat").animate({
                    scrollTop: r
                }, 500);
            }   
        

 $('.fa-send').click(function(){
        var sender_msg=$('#chat_input').val().trim();
        if(sender_msg != ""){

            $.ajax({
                
                url: 'chat_insertion.php',
                type: 'post',
                data: {sender_msg:sender_msg},
                success: function(result){
                    document.getElementById('chat_input').value="";
                    
                    scrolling();
                    
                }
                
            });

        }
        
    });

});