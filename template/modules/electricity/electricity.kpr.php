
   

<div id="page-content">
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Electricity<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> Electricity</li>
                            <li><a href="">Electricity Bill</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <?php
                                    flash('rech');
                                    ?>
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Pay Your Electricity Bill</strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                    
                                        <fieldset>
                                          <form  autocomplete="off"  method="post" class="form-horizontal" action=""> 
                                          
                                           
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="state">State</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="state" name="state" class="form-control st" required>
                                                        
                                                        <option value="">Please select</option>
                                                        <?php foreach ($elec_state as $state): ?>
                                                        <option value="<?php echo $state['state']; ?>"><?php echo $state['state']; ?></option>
                                                       <?php endforeach; ?>
<!--                                                        <option value="1">Gujarat</option>
                                                        <option value="2">Gujarat</option>
                                                        <option value="3">Gujarat</option>-->
                                                        
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                           
                                            
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="ele_board">Electricity Board</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="ele_board" name="ele_board" class="form-control" required>
                                                     <option value="">Please Select</option>
                                                        <?php foreach ($ldl as $mob): ?>
                                                            <option value="<?php echo $mob['opcode']; ?>"><?php echo $mob['OperatorDescritpion']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                           
                                              
                                           
 <hr style="border:1px dashed #eaedf1;width: 100%;">
                                             
                                            
                                           
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="customer_number">Customer Number</label>
                                              
                                                    <div class="col-md-7 col-xs-12 input-group">
                                                        <input type="text" id="" name="customer_number" class="form-control" placeholder="Customer Number" required>
                                                       
                                                  
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="customer_number">Customer Mobile Number</label>
                                              
                                                    <div class="col-md-7 col-xs-12 input-group">
                                                        <input type="text" id="" name="cus_mob" class="form-control" placeholder="Customer Mobile Number" required>
                                                       
                                                  
                                                </div>
                                            </div>
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="amount_elec">Amount</label>
                                              
                                                    <div class="col-md-7 col-xs-12 input-group">
                                                        <input type="text" id="amount_elec" name="amount_elec" class="form-control" placeholder="Amount" required>
                                                       
                                                  
                                                </div>
                                            </div>

                                           
                                           
                                          
                                      
                            
                              <hr style="border:1px dashed #eaedf1;width: 100%;">
                                        
                                      
                                        <div class="form-group form-actions button_margin123">
                                            <div class="col-md-8 col-md-offset-4">
                                                <button type="submit" name="pay_now" id="" class="btn btn-sm btn-primary" style="margin-bottom:10px;"><i class="fa fa-arrow-right"></i> Proceed</button>
                                               
                                            </div>
                                        </div>
                                        
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pay Your Electricity Bill</h4>
        </div>
        <div class="modal-body">
          <p style="text-align:center;font-size:17px;">Amount <b><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;4000</b></p>
          <p style="text-align:center;font-size:17px;font-weight:600;">Click 'Pay Now' For Pay Your Electricity Bill</p>
           <center><button type="button" id="verify_proceed" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Pay Now</button></center>
                                               
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
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
                            
                           
          <script src="<?php echo Fjs; ?>/vendor/jquery.min.js"></script>
 

                                   
                                    <!--<script src="<?php echo Fjs; ?>/electricity_js/frmvalidation.js"></script>
                                    <script>$(function(){ FrmsValidation.init(); });</script>-->
                                   
                                                  
<script>
    
    $(document).ready(function() {
    $('#state').change(function() {
      
	  // $('.ele1').show();
	   
    });
});
    
    
</script>


 <!--<script src="http://kpagent.kandoipower.com/template/sections/js/electricity_js/state.js"></script>-->
<style>
    
    .button_margin123
                    {
                        margin-bottom:65px;
                    }
</style>
                              
                   
                            
                            
                            
                        </div>
                    </div>
                    
                    
                   



                    


                   


                  

