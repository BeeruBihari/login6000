 <script src="<?php echo Fjs; ?>/vendor/jquery.min.js"></script>

                                    <script src="<?php echo Fjs; ?>/pages/formsValidation.js"></script>
                                    <script>$(function(){ FormsValidation.init(); });</script>
   

<div id="page-content">
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Gas<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> Gas</li>
                             <li><a href="">Gas Bill</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Pay Your Gas Bill</strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                    
                                        <fieldset>
                                          <form id="form-validation" autocomplete="off"  method="post" class="form-horizontal" action="#"> 
                                           
                                           
                                           
                                           
                                           
                                           
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="val_select">Gas Provider</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="gas_operator" name="val_select" class="form-control val_select">
                                                        <option value="">Please select</option>
                                                        
                                                        <option value="1">MAHANAGAR GAS LIMITED</option>
                                                        <option value="2">Indraprasth Gas</option>
                                                        <option value="3">Gujarat Gas company Limited</option>
                                                        <option value="4">ADANI GAS</option>
                                                        
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                           
                                          <div class="gas1" style="display:none;">  
                                           
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="account_no">Consumer Account No.</label>
                                              
                                                    <div class="col-md-7 col-xs-11 input-group ">
                                                        <input type="text" id="consumer_account" name="account_no" class="form-control account_no forn_control12" placeholder="Consumer Account Number">
                                                       
                                                  
                                                </div>
                                            </div>
                                            
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="amount">Amount</label>
                                              
                                                    <div class="col-md-7 col-xs-11 input-group ">
                                                        <input type="text" id="consumer_account" name="amount" class="form-control amount forn_control12" placeholder="Amount">
                                                       
                                                  
                                                </div>
                                            </div>
                                           </div>
                                           
                                            
                                            
                        
                            
                              <hr style="border:1px dashed #eaedf1;width: 100%;">
                                        
                                      
                                        <div class="form-group form-actions button_margin123">
                                            <div class="col-md-12">
                                                <center><button type="submit" class="btn btn-sm btn-primary" style="margin-bottom:10px;"><i class="fa fa-arrow-right"></i> Get Bill</button></center>
                                               
                                            </div>
                                        </div>
                                        </form>
                                         </fieldset>
                                  
                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                           
                            
<script>
    
    $(document).ready(function() {
    $('#gas_operator').change(function() {
      
	   $('.gas1').show();
	   
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
      width: 91%; 
   }
}
@media only screen and (min-width:300px) and (max-width: 320px)
{
 .forn_control12
    {
      margin-left: 14px;
      width: 100%; 
    }
    .val_select
   {
      width: 91%; 
   }
}


@media only screen and (min-width:321px) and (max-width: 360px)
{
     .forn_control12
    {
      margin-left: 14px;
      width: 100%; 
    }
    .val_select
   {
      width: 91%; 
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
   .val_select
   {
      width: 91%; 
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
                    
                    
                   



                    


                   


                  

