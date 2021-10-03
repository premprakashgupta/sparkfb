function gallery_photo(){


    $.ajax({
                
        url: 'gallery_photo.php',
        type: 'post',
        success: function(result){
        
            $('.media_file_inner_container_content .media_file_inner_container_content_second .images ul li').remove();
            $('.media_file_inner_container_content .media_file_inner_container_content_second .images ul li').append(result);
            
        }

});

};
gallery_photo();