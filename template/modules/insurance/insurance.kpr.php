 <script src="<?php echo Fjs; ?>/vendor/jquery.min.js"></script>

                                    <script src="<?php echo Fjs; ?>/pages/formsValidation.js"></script>
                                    <script>$(function(){ FormsValidation.init(); });</script>
   

      <div id="page-content">
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Insurance<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> Insurance</li>
                             <li><a href="">Insurance</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Pay Your Insurance Premium</strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                    
                                        <fieldset>
                                          <form id="form-validation" autocomplete="off"  method="post" class="form-horizontal" action="#"> 
                                           
                                           
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="val_select">Insurance Company</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="ins_comp" name="val_select" class="form-control val_select">
                                                        <option value="">Please select</option>
                                                        
                                                        <option value="1">Tata AIG Life</option>
                                                        <option value="2">ICICI Pru Life</option>
                                                        
                                                        
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                           
                                          <div class="ins_comp1" style="display:none;">  
                                           
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="policy_no">Policy Number</label>
                                              
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input type="text" id="policy_no" name="policy_no" class="form-control policy_no forn_control12" placeholder="Policy Number">
                                                       
                                                  
                                                </div>
                                            </div>
                                            
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="amount">Amount</label>
                                              
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input type="text" id="amount" name="amount" class="form-control amount forn_control12" placeholder="Amount">
                                                       
                                                  
                                                </div>
                                            </div>
                                            
                                            
                                           </div>
                                           
                                            
                                            
                        
                            
                              <hr style="border:1px dashed #eaedf1;width: 100%;">
                                        
                                      
                                        <div class="form-group form-actions button_margin123">
                                            <div class="col-md-12">
                                                <center><button type="submit" class="btn btn-sm btn-primary" style="margin-bottom:10px;"><i class="fa fa-arrow-right"></i> Get Premium</button></center>
                                               
                                            </div>
                                        </div>
                                       
                                         </fieldset>
                                   </form>
                                    
                                </div>
                               
                            </div>
                            
                           
                            
<script>
    
    $(document).ready(function() {
    $('#ins_comp').change(function() {
      
	   $('.ins_comp1').show();
	   
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
                    
                    
                   



                    


                   


                  

