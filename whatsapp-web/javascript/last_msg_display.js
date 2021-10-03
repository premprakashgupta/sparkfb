$(document).ready(function(){

    function last_msg_display(x){
        console.log(x);
        $.ajax({

            url: "last_msg_display.php",
            type: "POST",
            data: {reciever_number:x},
            success: function(result){
                last_msg_update(result)
                
               
            }
        });
    }
    
    var p=document.getElementsByClassName('reciever_number');
    var q=document.getElementsByClassName('msg');
    var t=0;
    for(i=0;i<p.length;i++)
    {
        // q[i].innerHTML=p[i].innerHTML;
        var w=p[i].innerHTML;
        last_msg_display(w);
       function last_msg_update(y)
        {

            
    
            q[t].innerHTML=y;
            t++;
            
        };
    }

});


