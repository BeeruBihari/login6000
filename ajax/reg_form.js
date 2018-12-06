$(document).ready(function(){
    $(".forgot_pwd").click(function(){
        $(".hide_forgot").hide();
        $(".change_head").html('FORGOT PASSWORD');
         $(".forgot_show").show();
    });
    



   $('#mobil_no').keyup(function() {
       
       
var mob = $(this).val();
          
//alert(mob.length);
            if (mob.length=='10')
            {
                $.ajax({
                    url: 'ajax/reg_form_validate.php',
                    type: 'post',
                    data: {mob:mob},
                    success: function(data) {
//alert(data);
                        if (data.trim() == '1')
                        {
                            $('#mob_msgs').html('<p class="text-danger">Mobile Number Exists</p>');
                            $('.reg_login').attr('disabled','disabled');
                        }
                        else
                        {
                            $('#mob_msgs').html('<a data-target="#mobile_verify" style="cursor:pointer" data-toggle="modal" class="text-info send_otp_msg"> Verify Registered Mobile Number</p>');
                            //$('.reg_login').removeAttr('disabled','disabled');
                        }
                    }
                });
            }
            else
            {
                 $('#mob_msgs').html('<p class="text-danger">Enter Valid Mobile Number</p>');
            }
        });

   
   
   
//email validate kp register
   $('#kpemail').keyup(function() {
       
             var kpmail = $(this).val();
             
        if (!validateSeller()) {
            $('#email_msgs').html('<p class="text-danger">Enter Email first.</p>');
            $('.reg_login').attr('disabled','disabled');
            
        }
        else if(kpmail.length==="")
        {
            $('#email_msgs').html('<p class="text-danger">Enter Email first.</p>');
            $('.reg_login').attr('disabled','disabled');
            
        }
      else {
           
                $.ajax({
                    url: 'ajax/reg_form_validate.php',
                    type: 'post',
                    data: {kpmail:kpmail},
                    success: function(data) {
//alert(data);
                        if (data.trim() == '1')
                        {
                            $('#email_msgs').html('<p class="text-danger">Email Address Exists</p>');
                            $('.reg_login').attr('disabled','disabled');
                        }
                        else
                        {
                            $('#email_msgs').html('<a data-target="#email_verify" id="send_otp_email" style="cursor:pointer" data-toggle="modal" class="text-info"> Verify Email</p>');
                            //$('.reg_login').removeAttr('disabled','disabled');
                        }
                    }
                });
        }
       
            
        });

   
  
   function validateSeller() {
        var em = document.getElementById('kpemail').value;
        var atpos = em.indexOf("@");
        var dotpos = em.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= em.length) {
            //$('.msg').html('Not Valid Email');
            //document.getElementById("sell_msg").innerHTML = 'Enter a Valid Email Address';
            //$('#sell_msg').html('<p class="text-danger">Enter a Valid Email Address</p>');
            return false;

        }
        else {
            //$('.msg').html('Valid Email');
            //document.getElementById("msg").innerHTML = 'Valid Email Address';
            //$('#sell_msg').hide();
             return true;
        }
    }
   


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



 //click and otp send email
     $('#send_otp_email').click(function() {
         alert(' ');
var email = $('#kpemail').val();
          
alert(email);
            if (email.length!=="")
            {
                $.ajax({
                    url: 'ajax/sendsms_mobile.php',
                    type: 'post',
                    data: {email:email},
                    success: function(data) {
                        if (data.trim() == '1')
                        {
                         
                        }
                        else
                        {
                            $('.result_check').html('<p class="text-danger">Enter Valid Email</p>');
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
     $('.send_otp_msg').click(function() {
var mob = $('#mobil_no').val();
          
//alert(mob);
            if (mob.length==10)
            {
                $.ajax({
                    url: 'ajax/sendsms_mobile.php',
                    type: 'post',
                    data: {sms_mob:mob},
                    success: function(data) {
                        if (data.trim() == '1')
                        {
                         
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
        
        
        
        
        
         //click and otp check
     $('#verify_mob').click(function() {
var mob = $('.otp_number').val();
          

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