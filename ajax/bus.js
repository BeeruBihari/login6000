function getdist(orgid){
    //alert(s);
    orgid_s = orgid.split("-");
    $.ajax({

                type: "POST",

                url: "ajax/bus.php",

                data: {orgid: orgid_s[0], type:'getdis'},

                success: function (data) {

              //  alert(data);
                
                        

                    $('.destination').html(data);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });
}