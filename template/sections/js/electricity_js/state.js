


//$( ".st" ).change(function() {
//  alert( "Handler for .change() called." );
//});

$(document).ready(function(){
    
     $('.st').change(function() {
         var st=$(this).val();
         
                     //alert(st);
                $.ajax({
                    url: 'ajax/getstate.php' ,
                    type: 'post',
                    data: {st:st},
                    success: function(data) 
                    {
                        if(data.trim()!='00')
                        {
                            $('#ele_board').html(data.trim());
                        }
                        else
                        {
                            alert("No board available for "+ st +" region");
                        }
                     
                     
                    }
                
          
        });
});



// cyberplate verification code

$('#verify_proceed').click(function() {
         var ele_board=$('#ele_board').val();
         var customer_number=$('#customer_number').val();
         var amount_elec=$('#amount_elec').val();
         var account_elec=$('#city').val();
         
//                     alert(ele_board);
//                     alert(customer_number);
//                     alert(amount_elec);
                $.ajax({
                    url: 'ajax/elec/index.php' ,
                 //    url: 'ajax/cyplate_pay.php' ,
                    type: 'post',
                    data: {ele_board:ele_board.trim(),customer_number:customer_number.trim(),amount_elec:amount_elec.trim(),account_elec:account_elec.trim()},
                    
                    success: function(data) 
                    {
                        if(data.trim()!='00')
                        {
                            alert(data);
                            //$('#ele_board').html(data.trim());
                        }
                        else
                        {
                            alert("No board available for "+ st +" region");
                        }
                     
                     
                    }
                
          
        });
});


//

 $('#ele_board').change(function() {
         var st=$('#ele_board option:selected').text();
         
//                     alert(st);
                
                        if(st=='Torrent Power')
                        {
                            var state =$('.st').val();
                            if(state=='Uttar Pradesh')
                            {
                                $('.city_torrent').show();
                                 $('#city').html('<option value="">Select City</option><option value="Agra">Agra</option>');
                            }
                            if(state=='Maharashtra')
                            {
                                 $('.city_torrent').show();
                                  $('#city').html('<option value="">Select City</option><option value="Bhiwandi">Bhiwandi</option>');
                            }
                            if(state=='Gujarat')
                            {
                                 $('.city_torrent').show();
                                  $('#city').html('<option value="">Select City</option><option value="Ahmedabad">Ahmedabad</option><option value="Surat">Surat</option>');
                            }
                            $('#ele_board').html(data.trim());
                        }
                       
                     
                     
                    
                
          
        
});


});



