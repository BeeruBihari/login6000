<div id="page-content">
   
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Mobile, DTH & Postpaid API Configuration<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>API Configration</li>
                            <li><a href="">Mobile, DTH & Postpaid Configuration</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Mobile, DTH & Postpaid API Configuration</strong></h2>
                                    </div>
                                   
                                    <?php
                            flash('add_b2b_api'); 
                            ?> 
                                        <fieldset>
                                           
                                           
                                            
                                           
                                        
                                        <div class="">
	<div class="row">
		<div class="span12">
            
             
            
           
             
           
                
                 <form action="" method="post">
                     
                    
                   
                     
                       <div class="col-sm-6 form-group">
                            <label class="col-md-4 control-label" for="api_name">API Name</label>
                                <div class="col-md-7">
                                    <input type="text" id="api_name" name="api_name" class="form-control" placeholder="Enter API Name">
                                        
                                </div>
                      </div>


                     <div class="col-sm-6 form-group">
                         <label class="col-md-4 control-label" for="api_holder">API Holder</label>
                         <div class="col-md-7">
                             <select id="api_holder" name="api_holder" class="form-control" size="1">
                                 <option value="">Select API Holder</option>
                                 <?php foreach ($api_holders as $holder): ?>
                                     <option value="<?php echo $holder['id']; ?>"><?php echo $holder['firstname'].' '.$holder['lastname']; ?></option>
                                 <?php endforeach; ?>


                             </select>
                         </div>
                     </div>
                      
                      
                       <hr style="border:1px dashed #eaedf1;width: 100%;">
                       
                       
                       <div class="col-sm-12 form-group">
                            <label class="col-md-2 control-label" for="url">URL</label>
                                <div class="col-md-7">
                                    <input type="text" id="url" name="url" class="form-control" placeholder="Enter URL">
                                        
                                </div>
                      </div>

                      
                       <hr style="border:1px dashed #eaedf1;width: 100%;">
<!--                        <div class="form-group col-md-6 col-xs-12">
                                                 <label class="col-md-4 col-xs-12 control-label" for="user_type">Add Commission Group</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select required id="user_type" name="group_type" class="form-control val_select" >
                                                        <option selected value disabled>Please select Group Type</option>
                                                        <?php //foreach ($getgroup as $grp_name):?>
                                                        <option <?php //if($getgpname->group_name){ echo 'selected'; } ?> value="<?php //echo $grp_name['id']; ?>"><?php //echo $grp_name['group_name']; ?></option>
                                                         <?php// endforeach;?>
                                                    </select>
                                                     
                                                </div>
                                            </div>
                       <div class="form-group col-md-2 col-xs-12">
                                               
                                                <label class="col-md-12 col-xs-12 control-label" for="user_type"><a href="index.php?action=add_group&mu=1">Create New Group</a></label>
                                            </div>
                       <hr style="border:1px dashed #eaedf1;width: 100%;">-->
                       
                        <div class="col-sm-6 form-group">
                            <label class="col-md-4 control-label" for="mob_cons_num">Mobile No./Consumer No.</label>
                                <div class="col-md-7">
                                        <input type="text" id="mob_cons_num" name="mob_cons_num" class="form-control" placeholder="Enter Mobile Number/Consumer Number">
                                        
                                </div>
                      </div>
                      
                      <div class="col-sm-6 form-group">
                            <label class="col-md-4 control-label" for="amount">Amount</label>
                                <div class="col-md-7">
                                    <input type="text" id="amount" name="amount" class="form-control" placeholder="Enter Amount">
                                        
                                </div>
                      </div>
                      
                            <hr style="border:1px dashed #eaedf1;width: 100%;">
                            
                             <div class="col-sm-6 form-group">
                                <label class="col-md-4 control-label" for="operator_code">Operator Code</label>
                                <div class="col-md-7">
                                    <input type="text" id="operator_code" name="operator_code" class="form-control" placeholder="Enter Operator Code">
                                        
                                </div>
                              </div>
                              
                              <div class="col-sm-6 form-group">
                                <label class="col-md-4 control-label" for="ref_num">Reference Number</label>
                                <div class="col-md-7">
                                    <input type="text" id="ref_num" name="ref_num" class="form-control" placeholder="Enter Reference Number">
                                        
                                </div>
                              </div>
                             <div class="col-sm-6 form-group">
                                <label class="col-md-4 control-label" for="format_parm">Format</label>
                                <div class="col-md-7">
                                    <input type="text" id="format_parm" name="format_parm" class="form-control" placeholder="Enter Format Parameter">
                                        
                                </div>
                              </div>
                       
                                        
                               <div class="col-sm-6 form-group">
                            <label class="col-md-4 control-label" for="example-select">Format</label>
                                <div class="col-md-7">
                                    <select id="example-select" name="format" class="form-control" size="1">
                                        <option value="json">JSON</option>
                                       
                                    
                                    </select>
                                </div>
                        </div>
						 <hr style="border:1px dashed #eaedf1;width: 100%;">
						<div class="col-sm-6 form-group">
                                <label class="col-md-4 control-label" for="format_parm">Response Status</label>
                                <div class="col-md-7">
                                    <input type="text" id="status_res" name="status_res" class="form-control" placeholder="Enter Response Status Parameter">
                                        
                                </div>
                              </div>
						<div class="col-sm-6 form-group">
                                <label class="col-md-4 control-label" for="format_parm">Response Mobile / Customer No.</label>
                                <div class="col-md-7">
                                    <input type="text" id="number_res" name="number_res" class="form-control" placeholder="Enter Response Mobile / Customer No. Parameter">
                                        
                                </div>
                              </div>
						<div class="col-sm-6 form-group">
                                <label class="col-md-4 control-label" for="format_parm">Response Amount</label>
                                <div class="col-md-7">
                                    <input type="text" id="amount_res" name="amount_res" class="form-control" placeholder="Enter Response amount Parameter">
                                        
                                </div>
                              </div>
						<div class="col-sm-6 form-group">
                                <label class="col-md-4 control-label" for="format_parm">Response Operator Code</label>
                                <div class="col-md-7">
                                    <input type="text" id="opcode_res" name="opcode_res" class="form-control" placeholder="Enter Response Operator Code Parameter">
                                        
                                </div>
                              </div>
                        <div class="col-sm-6 form-group">
                                <label class="col-md-4 control-label" for="format_parm">Response Reference Number</label>
                                <div class="col-md-7">
                                    <input type="text" id="ref_no_res" name="ref_no_res" class="form-control" placeholder="Enter Response Reference Number Parameter">
                                        
                                </div>
                              </div>       
                                        
                                        <div class="form-group form-actions button_margin123" >
                                            <div class="col-md-12" style="margin-bottom:3%;">
                                                <center><button type="submit" name="add_b2b_api" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button></center>
                                            </div>
                                        </div>
                 </form>
                
               
             
            
            
        </div>
	</div>
</div>
                                        
                                        
                                        
        
                                        </fieldset>
                                        
                                       
                                        
                                   
                                </div>
                               
                            </div>
                            
<script src="<?php echo Fjs; ?>/vendor/jquery.min.js"></script>

  <script src="<?php echo Fjs; ?>/pages/adduser.js"></script>
                                    
                                    <script>$(function(){ AddUser.init(); });</script>
                           
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
     function imageshow(input,i) {
     
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#'+i)
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
                   
                            
                            
                            
                        </div>
                    </div>
                    
                    
                   



                    


                   


                  

