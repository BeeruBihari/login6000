$(document).ready(function(){
    $(".money_box_but_verify").click(function(){
        var kpotp = $('#otp').val();
        var otp = $('#otp_first_part').val();
        
        $.ajax({

                type: "POST",

                url: "ajax/dmt.php",

                data: {kpotp: kpotp,otp:otp,type:'check_otp'},

                success: function (data) {
                    var a = jQuery.parseJSON(data);
                    if(a.status == 1){
                        getbenf();
                        $('.drop_down_second_part').prop('disabled', false);
                        $('.money_box_second_part_but1').prop('disabled', false); 
                        $('.money_box_second_part_but2').prop('disabled', false);
                        
                    }
                    else{
                        alert('Wrong OPT !!!');
                        // location.reload();
                    }
                }

            });
           
      
       
     });
    $(".money_box_but2").click(function(){
        
         $(".box_part2").show();
         $(".box_part1").hide();
         var mob = $('#mob_num').val();
         //alert(mob);
         $.ajax({

                type: "POST",

                url: "ajax/dmt.php",

                data: {number: mob,type:'login'},

                success: function (data) {

                //alert(data);
                
                        var a = jQuery.parseJSON(data);
                        //alert(a.token);
                    $('#token').val(a.token);
                    $('#mobb').val(mob);
                    $('#custId').val(a.data.customerId);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });
            $.ajax({

                type: "POST",

                url: "ajax/dmt.php",

                data: {number: mob,type:'otp_login'},

                success: function (data) {

                //alert(data);
                
                    var a = jQuery.parseJSON(data);
                    $('#otp').val(a.otp);
                    //$('#ss').val(a.ss);
                    //$('.add_data').html(data);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });
     });
     
     $(".money_box_second_part_but2").click(function(){
         
         $('.third_part_amount_di').prop('disabled', false);
          $('.drop_down_third_part').prop('disabled', false);
       $('.money_box_third_part_amount').prop('disabled', false);
     });
   
   $('#amount').keyup(function(){
        var amt = $(this).val();
        if(amt < 100){
            $('.amt_no_wr').html('Please Enter Amount More then 100 Rs. !!!').css('display','inline');
        }else{
            $('.amt_no_wr').css('display','none');
        }
       
   });
   
   $(".money_box_third_part_amount").click(function(){
        // $(".third_part_amount").hide();
         $('.third_part_amount_di').prop('disabled', true);
          $('.drop_down_third_part').prop('disabled', true);
       $('.money_box_third_part_amount').prop('disabled', true);
       var token = $('#token').val();
       var mob = $('#mobb').val();
       var benf = $('#benf').val();
       var splt = benf.split("/");
       var beneId = splt[0];
       var coustomerId = $('#custId').val();
       var amount = $('#amount').val();
       var transactionMode = $('#Transfermode').val();
       $.ajax({

                type: "POST",

                url: "ajax/dmt.php",

                data: {beneId:beneId,coustomerId:coustomerId,amount:amount,transactionMode:transactionMode,token:token,type:'transfermoney'},

                success: function (data) {
                    var a = jQuery.parseJSON(data);
                    if(a.status === true){
                        
                        alert(a.message);
                         location.reload();
                    }
                    else{
                        alert(a.message);
                         location.reload();
                    }
                }

            });
         
        
     });
 });
 
 function getbenf(){
     var no = $('#mobb').val();
     var token = $('#token').val();
     
     if(no.length == 10 && token !== null){
        
     
     $.ajax({

                type: "POST",

                url: "ajax/dmt.php",

                data: {number: no,token:token,type:'getbenf'},

                success: function (data) {

                //alert(data);
                //$('.add_data').html(data);
                    
                    $('#benf').html(data);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });
    }
 }