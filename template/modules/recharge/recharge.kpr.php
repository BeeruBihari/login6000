<script src="http://kpagent.kandoipower.com/template/sections/js/recharge/recharge_mpos.js"></script>
<script type="text/javascript">
    function showToast(ordno,amount,cashback,name,mobile,email) {
      // alert('');
        Android.showToast(ordno,amount,cashback,name,mobile,email);
    }
    
   
</script>
<div id="page-content">
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Recharge<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> Recharge</li>
                            <li><a href="">Recharge</a></li>
                        </ul>
                        <!-- END Validation Header -->
<?php if( $_SESSION['b2b_kpr_rech_user_type']=="0" || $_SESSION['b2b_kpr_rech_user_type']=="4" || $_SESSION['b2b_kpr_rech_user_type']=="3" || $_SESSION['b2b_kpr_rech_user_type']=="2" || $_SESSION['b2b_kpr_rech_user_type']=="1" || $_SESSION['b2b_kpr_rech_user_type']=="5"): ?>
                        <div class="row">
                            
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                     <?php flash('money');
                            flash('rech');

                            ?>
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Mobile Prepaid</strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                        <form id="form-validation" autocomplete="off" action="" method="post" class="form-horizontal rech_pri">
                                            <input type="hidden" name="rtype" value="MobileRecharge">
                                        <fieldset>
                                            
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="operator">Operator</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="operator" name="opcode" class="form-control swip_rec_pri_opt" required>
                                                        <option value="">Please select</option>
                                                        <?php foreach ($mobile as $mob): ?>
                                                        <option value="<?php echo $mob['opcode']; ?>"><?php echo $mob['OperatorDescritpion']; ?></option>
                                                       <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="mob_no">Mobile Number</label>
                                              
                                                    <div class="col-md-7 col-xs-12 input-group">
                                                        <input type="text" id="mob_no" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" name="mob_no" class="form-control forn_control12 swip_rec_pri_mono" placeholder="Mobile Number" required>
                                                </div>
                                            </div>
                                            
                                           
                                            
                                           <hr style="border:1px dashed #eaedf1;width: 100%;">
                                           
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="amount">Amount</label>
                                              
                                                    <div class="col-md-7 col-xs-12 input-group">
                                                        <input type="text" id="amount" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" name="amount" class="form-control forn_control12 swip_rec_pri_amt" placeholder="Amount" required>
                                                       
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="operator">Payment Methods</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="operator" name="paymethod" class="form-control operator11">
                                                        
                                                        <option value="CASH" >CASH</option>
                                                       
                                                      
                                                    </select>
                                                </div>
                                            </div>
                                            
                                           <script>
                                               $(function() {
  
});


                                           </script>
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            
                                            

        
                                        </fieldset>
                                        
                                       
                                        <div class="form-group form-actions">
                                            <div class="col-md-12">
                                                <center><button type="submit" id="debug1" name="pay_now_mob" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button></center>
                                            </div>
                                        </div>
                                    </form>
                                  <!--  END Form Validation Example Content -->

                                    <!-- Terms Modal -->
                                   
                                    <!-- END Terms Modal -->







                                    <script src="<?php echo Fjs; ?>/vendor/jquery.min.js"></script>

                                    <script src="<?php echo Fjs; ?>/pages/formsValidation.js"></script>
                                    <script>$(function(){ FormsValidation.init(); });</script>
                                    <script>$(function(){ FormsValidation2.init(); });</script>








                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                            
                           
                            



                    <style>
                 
                             
    .prod_bord1 {
        border: 2px solid #e0e0e0;
        height: 120px;
        width: 120px;
    }
    .hover_ad1 {
        background:transparent;
        text-align:center;
        opacity:0;
        -webkit-transition: opacity .25s ease;
        margin-top: -45%;
    }
    .prod_bord1:hover .hover_ad1 {
        opacity: 1;
    }
    .fileUpload {
        position: relative;
        overflow: hidden;
        margin: 10px;
        background-color: #357ebd;

    }
    .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
    .addbtn{
        background: transparent;
        border: none;
        box-shadow: none;
    }
    .remove-row{
        background: transparent;
        border: none;
        box-shadow: none;
    }
    .title1{
        font-weight: 600;
    }
    .title2
    {
       font-weight: 600;   
    }
    .forn_control12
    {
      margin-left: 10px;
      width: 92%; 
    }
    .button_margin123
    {
      margin-bottom:65px;
     }
     
     @media only screen and (min-width:768px) and (max-width: 768px)
{
     .forn_control12
    {
      margin-left: 10px;
      width: 96%; 
    }
}
</style>


                   
                            
                            
                            
                        </div>
                        
                        
                        
                        
                        
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>DTH</strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                    <form id="form-validation2" autocomplete="off" action="" method="post" class="form-horizontal">
                                        <input type="hidden" name="rtype" value="DTH">
                                        <fieldset>
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="smart_card">Smart Card Number</label>
                                              
                                                    <div class="col-md-7 col-xs-12 input-group">
                                                        <input type="text" id="smart_card" name="smart_card" class="form-control forn_control12" placeholder="Smart Card Number" required>
                                                       
                                                  
                                                </div>
                                            </div>
                                            
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="operator">Operator</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="operator" name="opcode" class="form-control" required>
                                                        <option value="">Please Select</option>
                                                        <?php foreach ($dth as $mob): ?>
                                                            <option value="<?php echo $mob['opcode']; ?>"><?php echo $mob['OperatorDescritpion']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                           <hr style="border:1px dashed #eaedf1;width: 100%;">
                                           
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="amount">Amount</label>
                                              
                                                    <div class="col-md-7 col-xs-12 input-group">
                                                        <input type="text" id="amount" name="amount" class="form-control forn_control12" placeholder="Amount" required>
                                                       
                                                  
                                                </div>
                                            </div>

                                             <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="operator">Payment Methods</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="operator" name="paymethod" class="form-control operator11">
                                                        
                                                        <option value="CASH" >CASH</option>
                                                       
                                                      
                                                    </select>
                                                </div>
                                            </div>

                                             
                                              <hr style="border:1px dashed #eaedf1;width: 100%;">




                                          </fieldset>


                                          <div class="form-group form-actions">
                                              <div class="col-md-12">
                                                 <center> <button type="submit" id="debug" name="pay_now_mob" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                                  <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button></center>
                                              </div>
                                          </div>
                                      </form>
                                      <!-- END Form Validation Example Content -->

                                    <!-- Terms Modal -->
                                   
                                    <!-- END Terms Modal -->
                                </div>
                                <!-- END Validation Block -->
                            </div>






                    <style>
                       
    .prod_bord1 {
        border: 2px solid #e0e0e0;
        height: 120px;
        width: 120px;
    }
    .hover_ad1 {
        background:transparent;
        text-align:center;
        opacity:0;
        -webkit-transition: opacity .25s ease;
        margin-top: -45%;
    }
    .prod_bord1:hover .hover_ad1 {
        opacity: 1;
    }
    .fileUpload {
        position: relative;
        overflow: hidden;
        margin: 10px;
        background-color: #357ebd;

    }
    .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
    .addbtn{
        background: transparent;
        border: none;
        box-shadow: none;
    }
    .remove-row{
        background: transparent;
        border: none;
        box-shadow: none;
    }
    .title1{
        font-weight: 600;
    }
    .title2
    {
       font-weight: 600;   
    }
    .button_margin123
                    {
                        margin-bottom:65px;
                    }
    
</style>


                   
                            
                            
                            
                        </div>
                        <?php endif;?>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Mobile Postpaid</strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                        
                                        
                                            <form id="form-validation" autocomplete="off" action="" method="post" class="form-horizontal">
                                                <input type="hidden" name="rtype" value="MobilePostpaid">
                                                <fieldset>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="mob_no">Mobile Number</label>
                                              
                                                    <div class="col-md-7 col-xs-12 input-group">
                                                        <input type="text" id="mob_no1" name="mob_no" class="form-control forn_control12 mob_no" placeholder="Mobile Number" required>
                                                       
                                                  
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="operator">Operator</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="operator" name="opcode" class="form-control" required>
                                                        <option value="">Please Select</option>
                                                        <?php foreach ($postpaid as $mob): ?>
                                                            <option value="<?php echo $mob['opcode']; ?>"><?php echo $mob['OperatorDescritpion']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                           
                                           
                                            
                                           <hr style="border:1px dashed #eaedf1;width: 100%;">
                                           
                                           
                                           
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="amount1">Amount</label>
                                              
                                                    <div class="col-md-7 col-xs-12 input-group">
                                                        <input type="text" id="amount" name="amount" class="form-control forn_control12" placeholder="Amount" required>
                                                       
                                                  
                                                </div>
                                            </div>
                       
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="operator">Payment Methods</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="operator" name="paymethod" class="form-control operator11">
                                                        
                                                        <option value="CASH" >CASH</option>
                                                       
                                                      
                                                    </select>
                                                </div>
                                            </div>

                                               <!-- <script>
                                                    $(function() {
       $(".operator22").on("change", function() {
         $("#debug2").text($(".operator22").val());
       });
     });
                                                </script> -->


                                                 <hr style="border:1px dashed #eaedf1;width: 100%;">



                                            <!--  <div class="form-group col-md-2 col-xs-12">


                                                     <label class="checkbox-inline " for="example-inline-checkbox1" style="color:#00b9f5;font-size:14px;">
                                                         <input type="checkbox" id="example-inline-checkbox1" name="example-inline-checkbox1" value="option1" class="mainCheckBox"><i class="gi gi-forward"></i>Fast Forword
                                                     </label>

                                                 </div> -->

                                            </fieldset>

                                             <div class="form-group form-actions">
                                              <div class="col-md-12">
                                                 <center> <button type="submit" id="debug" name="pay_now_post" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                                  <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button></center>
                                              </div>
                                          </div>

                                         </form>
                                         
                                       <!--  END Form Validation Example Content -->

                                    <!-- Terms Modal -->
                                   
                                    <!-- END Terms Modal -->







                                    <script src="<?php echo Fjs; ?>/vendor/jquery.min.js"></script>

                                    <script src="<?php echo Fjs; ?>/pages/formsValidation.js"></script>
                                    <script>$(function(){ FormsValidation.init(); });</script>
                                    <script>$(function(){ FormsValidation2.init(); });</script>








                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                           
                            
<script>
 $( ".mainCheckBox" ).click(function() {
        if(this.checked){
             $('.pay_bill').show();
        $('.proceed').hide();
        }
        if(!this.checked){
           $('.pay_bill').hide();
        $('.proceed').show();
        }
    });


 
</script>


                    <style>
                 .button_margin123
                    {
                        margin-bottom:65px;
                    }
                             
    .prod_bord1 {
        border: 2px solid #e0e0e0;
        height: 120px;
        width: 120px;
    }
    .hover_ad1 {
        background:transparent;
        text-align:center;
        opacity:0;
        -webkit-transition: opacity .25s ease;
        margin-top: -45%;
    }
    .prod_bord1:hover .hover_ad1 {
        opacity: 1;
    }
    .fileUpload {
        position: relative;
        overflow: hidden;
        margin: 10px;
        background-color: #357ebd;

    }
    .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
    .addbtn{
        background: transparent;
        border: none;
        box-shadow: none;
    }
    .remove-row{
        background: transparent;
        border: none;
        box-shadow: none;
    }
    .title1{
        font-weight: 600;
    }
    .title2
    {
       font-weight: 600;   
    }
    
</style>

<script>
    
    $(document).ready(function() {
    $('#operator1').change(function() {
      
	   $('.circle1').show();
	   
    });
});
    
    
</script>

                   
                            
                            
                            
                        </div>
                        
                    </div>

                    


                   


                  

