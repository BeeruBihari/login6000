$(document).ready(function(){
    
    
$('#old_pswd').click(function() {
       
var mob = $('.old_pwd').val();
          
alert(mob);
var mobb=mob.trim();

            if (mobb !=='')
            {
                $.ajax({
                    url: 'ajax/check_password.php',
                    type: 'post',
                    data: {mob:mob},
                    success: function(data) {
//alert(data);
                        if (data.trim() == '1')
                        {
                             $('.check_ans').html('');
                            $('.old_ch_pwd').hide();
                            $('.new_change_pwd').removeAttr('display','none');
                        }
                        else
                        {
                            $('.check_ans').html('<p class="text-danger">Enter Valid Password</p>');
                            
                        }
                    }
                });
            }
            else
            {
                 $('.check_ans').html('<p class="text-danger">Enter Password first</p>');
            }
        });
        
});
