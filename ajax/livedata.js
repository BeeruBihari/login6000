$(function(){
//     getdatalive();
//   getdatalive_das();
//   disputeupdate();
//   setInterval( getdatalive, 250000);
//   setInterval( getdatalive_das, 250000);
//   setInterval( disputeupdate, 250000);
});

function getdatalive(){
   // alert('');
     $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {type:'getlivedata'},

                success: function (data) {

               // alert(data);
                
                        

                    $('.add_data').html(data);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });
    
}

function getdatalive_das(){
   // alert('');
     $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {type:'getlivedata_das'},

                success: function (data) {

               // alert(data);
                
                        

                    $('.add_data_das').html(data);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });
    
}

function disputeupdate(){
   // alert('');
     $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {type:'Disputesupdate'},

                success: function (data) {

              //  alert(data);
                
                        

                    $('.disput').html(data);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });
    
}