$(function(){
    
    $(".operator11").on("change", function() {
      var ssp = $(".operator11").val();
      var sp = ssp.split('-');
    $("#debug1").text(sp[0]).removeAttr('disabled');
    //alert(sp[1]);
    if(sp[1] == '0'){
        $('.rech_pri').removeAttr('onsubmit');
    }
    });
    
    $('#debug1').click(function(){
       FormsValidation.init();
        var amt = $('.swip_rec_pri_amt').val();
        var mono = $('.swip_rec_pri_mono').val();
        var opt = $('.swip_rec_pri_opt').val();
         // 
       if(amt !== "" && mono !== "" && opt !== "" ){
         //  alert(amt);
       $.ajax({
            url: "ajax/recharge_mpos/recharge_mpos.php",
            type: "post",
            data: {amt1 : amt, mono1: mono, opt1: opt},
            success: function(result){
             //    alert(result);
        $('.swip_rec_pri_amt').val('');
         $('.swip_rec_pri_mono').val('');
        $('.swip_rec_pri_opt').val('');
                var spt = result.split(',');
               Android.showToast(spt[0].trim(),spt[1].trim(),spt[2].trim(),spt[3].trim(),spt[4].trim(),spt[5].trim()); // format data passing :  ordno,amount,cashback,name,mobile,email
            }
            
        });
           
       }
    else{
        alert("Please Enter Value");
    }
        
    });
    
});

function responseMpose(abcd){
    alert(abcd);
}