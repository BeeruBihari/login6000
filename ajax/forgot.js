$(document).ready(function(){
    $(".forgot_pwd").click(function(){
        $(".hide_forgot").hide();
        $(".change_head").html('FORGOT PASSWORD');
         $(".forgot_show").show();
    });
    



   $('.inp1').keyup(function() {
       
       
var mob = $(this).val();
          
//alert(mob.length);
            if (mob.length=='10')
            {
                $.ajax({
                    url: 'ajax/check_mobile_number.php',
                    type: 'post',
                    data: {mob:mob},
                    success: function(data) {
//alert(data);
                        if (data.trim() == '1')
                        {
                            $('.result_check').html('<p class="text-success">Valid Mobile Number</p>');
                            $('.otp_generate').removeAttr('disabled','disabled');
                        }
                        else
                        {
                            $('.result_check').html('<p class="text-danger">Enter Valid Registered Mobile Number</p>');
                            $('.otp_generate').attr('disabled','disabled');
                        }
                    }
                });
            }
            else
            {
                 $('.result_check').html('<p class="text-danger">Enter Valid Mobile Number</p>');
            }
        });

   


   $('#enter_new_pwd').keyup(function() {
       
       
var mob = $('#enter_new_pwd').val();
          
//alert(mob.length);
            if (mob.length>='7')
            {
             $('.generate_pwd').removeAttr('disabled');   
             $('.valid_pwd').html('');
            }
            else{ $('.valid_pwd').html('<p class="text-danger" style="margin:2%;">Password must have greater than 7 letters.</p>'); 
                
                 $('.generate_pwd').attr('disabled');   
            }
   });


    
    //click and otp generate
     $('.otp_generate').click(function() {
var mob = $('#mob_no_forgot').val();
          
//alert(mob);
            if (mob.length==10)
            {
                $.ajax({
                    url: 'ajax/sendsms_mobile.php',
                    type: 'post',
                    data: {mob:mob},
                    success: function(data) {
//alert(data);
                        if (data.trim() == '0')
                        {
                              $(".forgot_show").hide();
        $(".change_head").html('ENTER OTP');
         $(".otp_show").show();
                            $('.mnon').val(mob);
                          //  $('.result_check').html('<p class="text-danger">Enter Valid Mobile Number</p>');
                        }
                        else
                        {
                            $('.result_check').html('<p class="text-danger">Enter Valid Mobile Number</p>');
                        }
                    }
                });
            }
            else
            {
                 $('.result_check').html('<p class="text-danger">Enter Valid Mobile Number</p>');
            }
        });
        
        
    //click and otp generate
     $('.login_check').click(function() {
var mob = $('#mobno').val();
var pswd = $('#pswd').val();          

//alert(mob);
            if (mob.length==10)
            {
                $.ajax({
                    url: 'ajax/login_check.php',
                    type: 'post',
                    data: {mob:mob,pswd:pswd},
                    success: function(data) {
//alert(data);
                        if (data.trim() == '1')
                        {
                              $(".hide_forgot").hide();
        $(".change_head").html('ENTER OTP');
         $(".signin_otp_verify").show();
                            $('.mobno_verify').val(mob);
                          //  $('.result_check').html('<p class="text-danger">Enter Valid Mobile Number</p>');
                        }
                        else
                        {
                            $('.valid_login_cred').html('<p class="text-danger">Enter Valid Details</p>');
                        }
                    }
                });
            }
            else
            {
                 $('.valid_login_cred').html('<p class="text-danger">Enter Valid Mobile Number</p>');
            }
        });     
        
        
         //click and otp check
     $('.otp_verify').click(function() {
var mob = $('#otp_no').val();
          

            if (mob.length==4)
            {
                $('.otp_verify').removeAttr('disabled','disabled');
                
                $.ajax({
                    url: 'ajax/check_otp.php',
                    type: 'post',
                    data: {mob:mob},
                    success: function(data) {
//alert(data.trim());
                        if (data.trim() == '1')
                        {
                              $(".otp_show").hide();
        $(".change_head").html('ENTER NEW PASSWORD');
         $(".new_pwd").show();
                          //  $('.result_check').html('<p class="text-danger">Enter Valid Mobile Number</p>');
                        }
                        else
                        {
                            $('.result_otp_check').html('<p class="text-danger">Enter Valid Code</p>');
                        }
                    }
                });
            }
            else
            {
                 $('.result_otp_check').html('<p class="text-danger">Enter Valid Code</p>');
            }
        });

   
    
    

});