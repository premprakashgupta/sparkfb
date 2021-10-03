$(document).ready(function(){
    console.log("hi");
    $('.chat').on("click",'p .time',function(){
        console.log($(this).html());
        
        $('#chat_input').val("&#128512;");
        console.log("p");
    });


    $('.chat_bottom_section .emoji').click(function(){
        $('.chat_bottom_section .emoji .emoji_box').fadeToggle();   
    
    });


    var new_emoji_list="";
$('.chat_bottom_section .emoji .emoji_box ul').on("click",'li',function(){
  
     new_emoji_list = new_emoji_list + $(this).html().trim();
     if(new_emoji_list!="")
     {
        $('#chat_input').val(new_emoji_list);
        $('.mic').hide();
        $('.send').show();

     }
    

});
$('#chat_input').keyup(function(event){
    if(event.keyCode==8)
    {

        new_emoji_list=$('#chat_input').val().trim();

    }
});

for(var i=128512;i<128591;i++)
{
    $('.chat_bottom_section .emoji .emoji_box ul').append("<li>&#"+i+";</li>");
}

$('.fa-send').click(function(){
    new_emoji_list="";
})

});



