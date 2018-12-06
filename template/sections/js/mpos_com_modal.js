$(document).ready(function(){
    
$('#credit_type').change(function () {
    $('.cardtypename').text($(this).val());
    $('#card_name').val($(this).val());
    $('#c_id').val('');
    $('#resetc').trigger('click');
    $('#scf_credit').removeAttr('checked');
             $('#scp_credit').attr('checked');
             $('#scflat_lbl').removeClass('active');
             $('#scper_lbl').addClass('active');
             
             $('#scf_com_credit').removeAttr('checked','checked');
             $('#scp_com_credit').attr('checked');
              $('#scf_com_lbl').removeClass('active');
             $('#scp_com_lbl').addClass('active');
             
    $('#myModal').modal('show');
    
});

//$('#debit_type').change(function () {
//    $('.cardtypename_debit').text($(this).val());
//     $('#card_name_debit').val($(this).val());
//    $('#myModal_debit').modal('show');
//    
//});


$('.credit_edit').click(function() {
    var id=$(this).attr('alt');
         $('.card_name_credit').text($('#card_name'+id).text());
         $('.min_price_credit').val($('#min_price'+id).text());
         $('.max_price_credit').val($('#max_price'+id).text());
         var scp=$('#service_charge_per'+id).text();
         var com_scp=$('#commission_per'+id).text();
         if(scp.trim()==''){
             $('#scf_credit').attr('checked','checked');
             $('#scp_credit').removeAttr('checked');
             $('#scflat_lbl').addClass('active');
             $('#scper_lbl').removeClass('active');
         }
         else
         {
             $('#scp_credit').attr('checked','checked');
             $('#scf_credit').removeAttr('checked');
             $('#scper_lbl').addClass('active');
             $('#scflat_lbl').removeClass('active');
         }
         
         if(com_scp.trim()==''){
             $('#scf_com_credit').attr('checked','checked');
             $('#scp_com_credit').removeAttr('checked');
              $('#scf_com_lbl').addClass('active');
             $('#scp_com_lbl').removeClass('active');
         }
         else
         {
             $('#scp_com_credit').attr('checked','checked');
             $('#scf_com_credit').removeAttr('checked');
              $('#scp_com_lbl').addClass('active');
             $('#scf_com_lbl').removeClass('active');
         }
         $('.service_charge_per_credit').val( $('#service_charge_per'+id).text());
         $('.service_charge_flat_credit').val($('#service_charge_flat'+id).text());
         $('.commission_per_credit').val($('#commission_per'+id).text());
         $('.commission_flat_credit').val($('#commission_flat'+id).text());
         $('.gst_credit').val($('#gst'+id).text());
         $('#c_id').val(id);
          $('#myModal').modal('show');
          
          
     });
     });
     
     
     /* Debit code */
     
     $(document).ready(function(){
    
$('#debit_type').change(function () {
   $('#card_name_debit').val($(this).val());
    $('.cardtypename_debit').text($(this).val());
    $('#card_name1').val($(this).val());
    $('#c_id1').val('');
    $('#resetc1').trigger('click');
    $('#scf_credit1').removeAttr('checked');
             $('#scp_credit1').attr('checked');
             $('#scflat_lbl1').removeClass('active');
             $('#scper_lbl1').addClass('active');
             
             $('#scf_com_credit1').removeAttr('checked','checked');
             $('#scp_com_credit1').attr('checked');
              $('#scf_com_lbl1').removeClass('active');
             $('#scp_com_lbl1').addClass('active');
             
    $('#myModal_debit').modal('show');
    
});

//$('#debit_type').change(function () {
//    $('.cardtypename_debit').text($(this).val());
//     $('#card_name_debit').val($(this).val());
//    $('#myModal_debit').modal('show');
//    
//});


$('.debit_edit').click(function() {
    var id=$(this).attr('alt');
         $('.card_name_debit').text($('#card_name1'+id).text());
         $('.min_price_debit').val($('#min_price1'+id).text());
         $('.max_price_debit').val($('#max_price1'+id).text());
         var scp=$('#service_charge_per1'+id).text();
         var com_scp=$('#commission_per1'+id).text();
         if(scp.trim()==''){
             $('#scf_credit1').attr('checked','checked');
             $('#scp_credit1').removeAttr('checked');
             $('#scflat_lbl1').addClass('active');
             $('#scper_lbl1').removeClass('active');
         }
         else
         {
             $('#scp_credit1').attr('checked','checked');
             $('#scf_credit1').removeAttr('checked');
             $('#scper_lbl1').addClass('active');
             $('#scflat_lbl1').removeClass('active');
         }
         
         if(com_scp.trim()==''){
             $('#scf_com_credit1').attr('checked','checked');
             $('#scp_com_credit1').removeAttr('checked');
              $('#scf_com_lbl1').addClass('active');
             $('#scp_com_lbl1').removeClass('active');
         }
         else
         {
             $('#scp_com_credit1').attr('checked','checked');
             $('#scf_com_credit1').removeAttr('checked');
              $('#scp_com_lbl1').addClass('active');
             $('#scf_com_lbl1').removeClass('active');
         }
         $('.service_charge_per_debit').val( $('#service_charge_per1'+id).text());
         $('.service_charge_flat_debit').val($('#service_charge_flat1'+id).text());
         $('.commission_per_debit').val($('#commission_per1'+id).text());
         $('.commission_flat_debit').val($('#commission_flat1'+id).text());
         $('.gst_debit').val($('#gst1'+id).text());
         $('#c_id1').val(id);
          $('#myModal_debit').modal('show');
          
          
     });
     });