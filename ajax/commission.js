//DTH Recharge Commission
function get_queue_transection(){
   // alert('');
     $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {type:'get_queue'},

                success: function (data) {

               // alert(data);
                
                        

                    $('.add_data').html(data);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });
    
}

function refuntstatment(){
   // alert('');
     $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {type:'refuntstatment'},

                success: function (data) {

               // alert(data);
                
                        

                    $('.add_data').html(data);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });
    
}
function gettransection(){
   // alert('');
     $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {type:'gettransdata'},

                success: function (data) {

                //alert(data);
                
                        

                    $('.add_data').html(data);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });
    
}
function gettransection_withdate(){
    
   var date1 = $('#date1').val();
   var date2 = $('#date2').val();
   //alert(date2);
     $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {date1:date1,date2:date2,type:'gettransdata'},

                success: function (data) {

                //alert(data);
                
                        

                    $('.add_data').html(data);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });
    
}
function showdata(id){
    
        getusedatadownline_after(id);
        $(".table_display"+id).show();
        $(".minus"+id).show();
        $(".plus"+id).hide();
}
function hidedata(id){
    
        //getusedatadownline(id);
         $(".removedata"+id).remove();
        //$(".table_display"+id).show();
        $(".minus"+id).hide();
        $(".plus"+id).show();
}
function getusedatadownline_after(id){
        
      //  var id = $(this).attr('data-userid');
      //  alert(id+'s');
        $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {user: id, type:'fetchuserdata'},

                success: function (data) {

               // alert('after');
                
                        

                    $('.afterdata'+id).after(data);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });
        
    }
function getusedatadownline(id){
        
      //  var id = $(this).attr('data-userid');
      //  alert(id+'s');
        $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {user: id, type:'fetchuserdata'},

                success: function (data) {

               // alert('.table_display'+id);
                
                        

                    $('.table_display'+id).html(data);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });
        
    }

$(function () {
    //$(".getuserdata").click();

    $(".update_dth_com").click(function () {



        var id = $(this).val();

        var common = $('.dth_commission_rate'+id).val();

        var tbi = $('.tbi').val();



        if(confirm('Are you sure for update ?'))

        {

            $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {id: id, common: common, type:'dth', tbi:tbi},

                success: function (data) {



                    $('.msgajax').html('Commission Changed');

                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });



        }

    });



});



//MOBILE Recharge Commission

$(function () {

    $(".update_com").click(function () {



        var id = $(this).val();

        var common = $('.commission_rate'+id).val();

        var tbi = $('.tbi').val();

        if(confirm('Are you sure for update ?'))

        {

            $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {id: id, common: common, type:'mobile', tbi:tbi},

                success: function (data) {

                   // alert(data);

                    $('.msgajax').html('Commission Changed');

                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });



        }

    });



});




//ALL Commission

$(function () {

    $(".updateallcommission").click(function () {

   

        var id = $(this).val();
        var grp = $('.grp').val();
        var opdsp = $('.opdescp'+id).val();
       // var opbuy = $('.opbuycom'+id).val();
        var opsale = $('.opsalecom'+id).val();
        var opsc = $('.opsccom'+id).val();
        var opsaletp = $('.opsalecomtype'+id).val();
        var opsctp = $('.opsctype'+id).val();
        var apiselect = $('.apiselect'+id).val();

       

     //  alert(id+'/'+grp+'/'+opdsp+'/'+opsale+'/'+opsc+'/'+opsaletp+'/'+opsctp);

        if(confirm('Are you sure for update ?'))

        {

            $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {grp: grp, id: id, opdsp1: opdsp, opsale1:opsale, opsc1:opsc, opsaletp1:opsaletp, opsctp1:opsctp,apiselect:apiselect,type:'allcommission'},
                    
                success: function (data) {
//alert(data);
                    

                    $('.msgajax').html(opdsp + ' Provider Commission Update Successfully');
                    $('.msgajax').show();
                    $('.msgajax').fadeOut( 90000, function() {
    // Animation complete.
  });
        
                }

            });



        }

    });

 $(".updateapi").click(function () {

   

        var id = $(this).val();

        var opdsp = $('.opdescp'+id).val();
        var api = $('.apiselect'+id).val();
        


       

        if(confirm('Are you sure for update ?'))

        {

            $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {id: id, opdsp1: opdsp,api1 : api,type:'updateapi'},
                    
                success: function (data) {
//alert(data);
                    $('.msgajax').html(opdsp + ' Provider Commission Update Successfully');
                    $('.msgajax').show();
                    $('.msgajax').fadeOut( 3000, function() {
    // Animation complete.
  });
        
                }

            });



        }

    });


});


//Group Commission

$(function () {

    $(".grpindcoms").click(function () { 

   

        var id = $(this).text();
        
        //alert(id);
        
           //$('.msgajax').html(id);
           
           $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {id: id, type:'grp'},

                success: function (data) {

               // alert(data);
                
                        

                    $('.datagrpind').html(data);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });


    });
    
     $(".apicodeget").click(function () { 

   

        var id = $(this).text();
        
       // alert(id);
        
           $('.msgajax').html(id);
           
           $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {id: id, type:'getapicode'},

                success: function (data) {

              //  alert(data);
                
                        

                    $('.datagrpind').html(data);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });


    });



});

//Group Individual Commission

//$(function () {

    function grpcom(id) {

   //alert('');

        //var id = $(this).val();

        var opdsp = $('.opdescp'+id).val();
        var opgrpid = $('.grpid'+id).val();
       // var opbuy = $('.opbuycom'+id).val();
        var opsale = $('.opsalecom'+id).val();
        var opsc = $('.opsccom'+id).val();
        var opsaletp = $('.opsalecomtype'+id).val();
        var opsctp = $('.opsctype'+id).val();
        var apiselect = $('.apiselect'+id).val();
       //alert(id);
       

        if(confirm('Are you sure for update ?'))

        {

            $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {id: id, apiselect : apiselect, opdsp1: opdsp, opgrpid1: opgrpid,  opsale1:opsale, opsc1:opsc, opsaletp1:opsaletp, opsctp1:opsctp,type:'grpcommission'},
                    
                success: function (data) {

                  //  alert(data);

                    $('.msgajax').html(opdsp + ' Provider Commission Update Successfully');
                    $('.msgajax').show();
                    $('.msgajax').fadeOut( 3000, function() {
    // Animation complete.
  });
        
                }

            });



        }

    }


function updatecode(id) {

   //alert('');

        //var id = $(this).val();

        var opid = $('.opid'+id).val();
        var opcom = $('.opcom'+id).val();
        var opcode = $('.opcode'+id).val();
        var opdescp = $('.opdescp'+id).val();
        var opsctype = $('.opsctype'+id).val();
        
         var saleopcom = $('.saleopcom'+id).val();
          var saleoptype = $('.saleoptype'+id).val();
        
       alert(opcode);

       //alert(opsctype);
       

        if(confirm('Are you sure for update ?'))

        {

            $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {id: id, opid : opid, opcode1 : opcode,opsctype1 : opsctype, opcom1 : opcom,saleopcom1:saleopcom,saleoptype1:saleoptype, type:'updateopcode'},
                    
                success: function (data) {

                 //  alert(data);

                    $('.msgajax').html(opdescp + ' Provider Commission Update Successfully');
                    $('.msgajax').show();
                    $('.msgajax').fadeOut( 3000, function() {
    // Animation complete.
  });
        
                }

            });



        }

    }


//});