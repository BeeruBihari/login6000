


<div id="page-content">
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Add Payment Request<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> Payment Request</li>
                            <li><a href="">Add Payment Request</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Add Payment Request</strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                    <form id="form-validation3" action="" method="post" class="form-horizontal">
                                        <fieldset>
                                           
                                            <div class=" one_way_flight form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 control-label" for="date">Date</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <input type="text" id="date" name="date" class="form-control input-datepicker date123" data-date-format="mm/dd/yyyy" placeholder="mm/dd/yyyy">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="amount">Amount</label>
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input type="text" id="amount" name="amount" class="form-control forn_control12" placeholder="Amount">
                                                </div>
                                            </div>
                                         <hr style="border:1px dashed #eaedf1;width: 100%;">
                                         
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="bank_ref">Bank Ref. ID</label>
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input type="text" id="bank_ref" name="bank_ref" class="form-control forn_control12" placeholder="Bank Ref. ID">
                                                </div>
                                            </div>
                                         
                                         <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="transfer_type">Choose Transfer Type</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="transfer_type" name="transfer_type" class="form-control val_select">
                                                        <option value="">Please select</option>
                                                        <option value="IMPS">IMPS</option>
                                                        <option value="NEFT">NEFT</option>
                                                        <option value="RTGS">RTGS</option>
                                                        <option value="Fund Transfer">Fund Transfer</option>
                                                        <option value="Cash Deposit">Cash Deposit</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>  
                                         <hr style="border:1px dashed #eaedf1;width: 100%;">
                                         <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="bank">Bank Name Where You Deposited</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="bank" name="bank" class="form-control val_select">
                                                        <option value="">Please select</option>
                                                        <option value="SBI">SBI</option>
                                                        <option value="ICICI">ICICI</option>
                                                        <option value="Andhara Bank">Andhara Bank</option>
                                                        <option value="YES BANK">YES BANK</option>
                                                        <option value="BOI">BOI</option>
                                                        <option value="HDFC BANK">HDFC BANK</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            
                                           <div class="form-group col-md-6 col-xs-12">
                                            <label class="col-md-4 col-xs-12 control-label" for="remark">Remark</label>
                                            <div class="col-md-7 col-xs-11">
                                                <textarea id="remark" name="remark" rows="9" class="form-control forn_control12" placeholder="Remark"></textarea>
                                            </div>
                                        </div>
                                         <hr style="border:1px dashed #eaedf1;width: 100%;">
                                      
                                        
                                        
                                       
                                        <div class="form-group form-actions button_margin123">
                                            <div class="col-md-12">
                                                <center><button type="submit" name="money_request" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button></center>
                                            </div>
                                        </div>
                                    </form>
                                    </fieldset>
                                    <!-- END Form Validation Example Content -->

                                    <!-- Terms Modal -->
                                   
                                    <!-- END Terms Modal -->
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            <style>
                                
                   .val_select
   {
      width: 100%; 
   }
    .forn_control12
    {
      margin-left: 14px;
      width: 90%; 
    }
    .button_margin123
    {
      margin-bottom:65px;
     }
     
     @media only screen and (min-width:768px) and (max-width: 768px)
{
     .forn_control12
    {
margin-left: 17px;
    width: 99%;
    }
    .val_select
   {
      width: 95%; 
   }
   .date123
   {
     width: 95%;  
   }
}
@media only screen and (min-width:300px) and (max-width: 320px)
{
 .forn_control12
    {
     margin-left: 17px;
    width: 99%;
    }
}


@media only screen and (min-width:321px) and (max-width: 360px)
{
     .forn_control12
    {
     margin-left: 17px;
    width: 99%; 
    }
}
@media only screen and (min-width:361px) and (max-width: 414px)
{
    .forn_control12
    {
     margin-left: 17px;
    width: 99%;
    }
}

@media only screen and (min-width:473px) and (max-width: 600px)
{
     .val_select
   {
      width: 89%; 
   }
   .date123
   {
     width: 87%;  
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
}      </style>
                           
                            
<script src="<?php echo Fjs; ?>/vendor/jquery.min.js"></script>

  <script src="<?php echo Fjs; ?>/pages/formsValidation.js"></script>
                                    
                                    <script>$(function(){ FormsValidation3.init(); });</script>



                   

                   
                            
                            
                            
                        </div>
                    </div>
                    
                    
                   



                    


                   


                  

