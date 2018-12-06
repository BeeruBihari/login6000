$(function(){
    
    $('.getuser').click(function(){
        
        var id = $(this).attr('alt');
        $('.spanhover').attr('alt',id);
        
        
    });
    
    $('.spanhover').click(function(){
        
        var id = $(this).attr('alt');
        var msg = $('#chatui-message').val();
        if(id != '0'){
        if(msg != " " || msg !== ""){
        $.ajax({

                type: "POST",

                url: "ajax/chat.php",

                data: {user: id,msg:msg, type:'sendmsg'},

                success: function (data) {

               $('.msg_body').html(data);
                
                        

                    //$('.table_display'+id).append(data);

                }

            });
            
        }
        }
        else{
            alert("Please Select User!!!");
        }
    });
    
    
});