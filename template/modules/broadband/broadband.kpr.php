 <script src="<?php echo Fjs; ?>/vendor/jquery.min.js"></script>

                                    <script src="<?php echo Fjs; ?>/pages/formsValidation.js"></script>
                                    <script>$(function(){ FormsValidation.init(); });</script>
   

<div id="page-content">
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Broadband<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> Broadband</li>
                            <li><a href="">Broadband Bill</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Pay Your Broadband Bill</strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                    
                                        <fieldset>
                                          <form id="form-validation" autocomplete="off"  method="post" class="form-horizontal" action=""> 
                                           
                                           <input type="hidden" name="rtype" value="Broadband">
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="operator">Operator</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="operator" name="opcode" class="form-control" required>
                                                        <option value="">Please Select</option>
                                                        <?php foreach ($bb as $mob): ?>
                                                            <option value="<?php echo $mob['opcode']; ?>"><?php echo $mob['OperatorDescritpion']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                           
                                          <div class="broad_band1" >  
                                          
                                           
                                            
                                           
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="account_no">Account Number</label>
                                              
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input type="text" id="account_number" name="account_no" class="form-control account_no forn_control12" placeholder="Account Number">
                                                       
                                                  
                                                </div>
                                            </div>

                                         <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="amount">Amount</label>
                                              
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input type="text" id="amount" name="amount" class="form-control amount forn_control12" placeholder="Amount">
                                                       
                                                  
                                                </div>
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
                                        
                                      
                                        <div class="form-group form-actions">
                                              <div class="col-md-12">
                                                 <center> <button type="submit" id="debug" name="pay_now_bb" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                                  <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button></center>
                                              </div>
                                          </div>
                                       
                                         </fieldset>
                                   </form>
                                    <!-- END Form Validation Example Content -->

                                    <!-- Terms Modal -->
                                   
                                    <!-- END Terms Modal -->
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                           
                            
<script>
    
    $(document).ready(function() {
    $('#broadband_operator').change(function() {
      
	   $('.broad_band1').show();
	   
    });
});
    
    
</script>

 <style>
    .val_select
   {
      width: 100%; 
   }
    .forn_control12
    {
      margin-left: 14px;
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
      width: 100%; 
    }
    .val_select
   {
      width: 95%; 
   }
}
@media only screen and (min-width:300px) and (max-width: 320px)
{
 .forn_control12
    {
      margin-left: 14px;
      width: 100%; 
    }
}


@media only screen and (min-width:321px) and (max-width: 360px)
{
     .forn_control12
    {
      margin-left: 14px;
      width: 100%; 
    }
}
@media only screen and (min-width:361px) and (max-width: 414px)
{
    .forn_control12
    {
      margin-left: 14px;
      width: 100%; 
    }
}

@media only screen and (min-width:473px) and (max-width: 600px)
{
     .val_select
   {
      width: 89%; 
   }
}
@media only screen and (min-width: 769px) and (max-width: 960px)
{
}
@media only screen and (min-width: 961px) and (max-width: 1024px)
 {
}

@media only screen and (min-width:1025px) and (max-width: 1280px)
 {
}

@media only screen and (min-width:1440px) and (max-width: 1440px)
{
}

@media only screen and (min-width:1441px) and (max-width: 1920px)
{
}
</style>                            
                            
                            
                        </div>
                    </div>
                    
                    
                   



                    


                   


                  

