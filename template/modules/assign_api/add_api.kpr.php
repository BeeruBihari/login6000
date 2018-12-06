<div id="page-content">
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Add API<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> Assign API</li>
                            <li><a href="">Add API</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Add API</strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->
<?php
$apis=$o__assign_api->getapisbyuser($_GET['aid']);
foreach ($apis as $ap):
     $ede.=$ap['api_id'].',';
endforeach;
$tt=explode(',',$ede);  ?>
                                    <!-- Form Validation Example Content -->
                                    <form id="form-validation" action="" method="post" class="form-horizontal">
                                        <fieldset>
                                            <div class="form-group col-md-1 col-xs-2"></div>
                                           <input type="hidden" name="aid" value="<?php echo $_GET['aid']; ?>">
                                           <div class="form-group col-md-10 col-xs-10">
                                               <label>Assign API</label>
                                                <label class="checkbox" for="example-inline-checkbox1">
                                                    <input type="checkbox" id="example-inline-checkbox1" name="assign_api[]" <?php if(in_array('1',$tt)){ echo 'checked'; } ?> value="1"> Recharge
                                                </label>
                                                <label class="checkbox" for="example-inline-checkbox2">
                                                    <input type="checkbox" id="example-inline-checkbox2" name="assign_api[]" <?php if(in_array('2',$tt)){ echo 'checked'; } ?> value="2"> Wallet
                                                </label>
                                                <label class="checkbox" for="example-inline-checkbox3">
                                                    <input type="checkbox" id="example-inline-checkbox3" name="assign_api[]" <?php if(in_array('3',$tt)){ echo 'checked'; } ?> value="3"> Flight
                                                </label>
                                                <label class="checkbox" for="example-inline-checkbox3">
                                                    <input type="checkbox" id="example-inline-checkbox3" name="assign_api[]" <?php if(in_array('4',$tt)){ echo 'checked'; } ?> value="4"> DTH
                                                </label>
                                                <label class="checkbox" for="example-inline-checkbox3">
                                                    <input type="checkbox" id="example-inline-checkbox3" name="assign_api[]" <?php if(in_array('5',$tt)){ echo 'checked'; } ?> value="5"> Money Transfer
                                                </label>
                                               <label class="checkbox" for="example-inline-checkbox3">
                                                   <input type="checkbox" id="example-inline-checkbox3" name="assign_api[]" <?php if(in_array('6',$tt)){ echo 'checked'; } ?> value="6"> Bus
                                               </label>
                                            </div>
                                            
                                           <hr style="border:1px dashed #eaedf1;width: 100%;">
                                           
                                           
                                        
                                        

        
                                        </fieldset>
                                        
                                       
                                        <div class="form-group form-actions button_margin123">
                                            <div class="col-md-12">
                                                <center><button type="submit" name="assign" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
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
                    .button_margin123
                    {
                        margin-bottom:65px;
                    }
                    </style>




                   

                   
                            
                            
                            
                        </div>
                    </div>
                    
                    
                   



                    


                   


                  

