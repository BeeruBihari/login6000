<script src="<?php echo Fjs; ?>/mpos_com_modal.js"></script>
<style>
    .btn-default.btn-on.active{background-color: #5BB75B;color: white;}
.btn-default.btn-off.active{background-color: #5BB75B;color: white;}
</style>

<div id="page-content">
    <!-- Validation Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                Add/Update MPOS Commission<br>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li> MPOS Commission</li>
        <li><a href="">Add/Update MPOS Commission</a></li>
    </ul>
    <!-- END Validation Header -->

    <!--                        <div class="row">
                                <div class="col-md-12">
                                     Form Validation Example Block 
                                    <div class="block">
                                         Form Validation Example Title 
                                        <div class="block-title">
                                            <h2><strong>Add/Update MPOS Commission</strong></h2>
                                        </div>
                                         END Form Validation Example Title 
    
                                         Form Validation Example Content 
                                        <form id="form-validation3" action="" method="post" class="form-horizontal">
                                            <fieldset>
                                                 <div class="form-group col-md-6 col-xs-12">
                                                    <label class="col-md-4 col-xs-12 control-label" for="service_charge">Service Charge</label>
                                                        <div class="col-md-7 col-xs-11 input-group">
                                                            <input type="text" id="service_charge" name="service_charge" class="form-control forn_control12" placeholder="Service Charge">
                                                    </div>
                                                </div>
                                               
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <label class="col-md-4 col-xs-12 control-label" for="flate_comm">Flate Commission</label>
                                                        <div class="col-md-7 col-xs-11 input-group">
                                                            <input type="text" id="flate_comm" name="flate_comm" class="form-control forn_control12" placeholder="Flate Commission">
                                                    </div>
                                                </div>
                                             <hr style="border:1px dashed #eaedf1;width: 100%;">
                                             
                                             
                                             
                                             
                                          
                                           
                                            <div class="form-group form-actions button_margin123">
                                                <div class="col-md-12">
                                                    <center><button type="submit" name="mpos_add_comm" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                                    <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button></center>
                                                </div>
                                            </div>
                                        </form>
                                        </fieldset>
                                         END Form Validation Example Content 
    
                                         Terms Modal 
                                       
                                         END Terms Modal 
                                    </div>
                                     END Validation Block 
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
    
    
    
                       
    
                       
                                
                                
                                
                            </div>-->
<?php
flash('updatecreditslab'); 
flash('insertecreditslab'); 
flash('updatedebitslab'); 
flash('insertedebitslab'); 
?>
    <div class="row">
        <div class="col-md-6">
            <!-- Form Validation Example Block -->
            <div class="block">
                <!-- Form Validation Example Title -->
                <div class="block-title">
                    <h2><strong>Credit Card</strong></h2>
                </div>
                <!-- END Form Validation Example Title -->

                <!-- Form Validation Example Content -->
                <form id="form-validation" action="#" method="post" class="form-horizontal form-bordered">
                    <fieldset>
                        <legend><i class="fa fa-angle-right"></i>Select Card Type for Slab Commission</legend>
                        <div class="form-group">

                            <div class="col-md-12">
                                <select  id="credit_type" name="credit_type" class="form-control">
                                    <option value="">Please select card type</option>
                                    <option value="VISA">VISA</option>
                                    <option value="MasterCard">MasterCard</option>
                                    <option value="Maestro">Maestro</option>
                                    <option value="RuPay">RuPay</option>
                                    <option value="American Express">American Express</option>
                                    <option value="Citibank">Citibank</option>
                                </select>
                            </div>
                        </div>
                       
                        
                                       <div class="form-group">
                                     <?php 
                              $counter = '0';
                              $apis = array();
                          foreach($slabdata as $creditslab):
                              
                           $apis[$counter] = $creditslab['card_name'];
                        ?> 
                                      
                            <div class="block">
                            <!-- Interactive Title -->
                            <div class="block-title">
                                <!-- Interactive block controls (initialized in js/app.js -> interactiveBlocks()) -->
                                <div class="block-options pull-right">
                                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-content"><i class="fa fa-arrows-v"></i></a>
                                    <a style="cursor: pointer;" class="btn btn-alt btn-sm btn-primary credit_edit" alt="<?php echo $creditslab['id']; ?>"><i class="fa fa-pencil-square-o fa-fw"></i></a>
                                    
                                </div>
                                <h2><strong>Credit Card Slab Commission For </strong><span id="card_name<?php echo $creditslab['id']; ?>"><?php echo $creditslab['card_name']; ?></span></h2>
                            </div>
                            <!-- END Interactive Title -->

                            <!-- Interactive Content -->
                            <!-- The content you will put inside div.block-content, will be toggled -->
                            <div class="block-content" style="display: none;">
                               
                                <ul class="fa-ul list-li-push">
                                    <li><i class="fa fa-li fa-check text-success"></i> Slab Amount Range 
                                        <span id="min_price<?php echo $creditslab['id']; ?>"><?php echo $creditslab['min_price'] ; ?></span> to  
                                        <span id="max_price<?php echo $creditslab['id']; ?>"><?php echo $creditslab['max_price'] ; ?></span>
                                    </li>
                                    
                                    <li><i class="fa fa-li fa-check text-success"></i>Service Charge 
                                        <?php  
                                            if($creditslab['service_charge_status']=='percentage'):
                                                echo 'percentage (%)='. ' <span id="service_charge_per'.$creditslab['id'].'">'.$creditslab['service_charge_per'].'</span>' ;
                                            endif;
                                            if($creditslab['service_charge_status']=='flat'):
                                                echo 'flat='. ' <span id="service_charge_flat'.$creditslab['id'].'">'.$creditslab['service_charge_flat'].'</span>' ;
                                            endif;
                                            
                                    
                                    ?> </li>
                                    <li><i class="fa fa-li fa-check text-success"></i>Commission
                                    <?php 
                                            if($creditslab['commission_status']=='percentage'):
                                                 echo 'percentage (%)='.' <span id="commission_per'.$creditslab['id'].'">'.$creditslab['commission_per'].'</span>' ;
                                            endif;
                                            if($creditslab['commission_status']=='flat'):
                                                 echo 'flat='.' <span id="commission_flat'.$creditslab['id'].'">'.$creditslab['commission_flat'].'</span>' ;
                                            endif;
                                    ?>
                                    </li>
                                    <li><i class="fa fa-li fa-check text-success"></i>GST (%) = <span id="gst<?php echo $creditslab['id']; ?>"><?php echo $creditslab['gst'] ;?></span> % </li>
                                </ul>
                            </div>
                          
                            <!-- END Interactive Content -->
                        </div>
                                      
                                       <?php endforeach; ?>
                        </div>   
                    </fieldset>
                    
                </form>
                <!-- END Form Validation Example Content -->

                <!-- Terms Modal -->
                <div id="modal-terms" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title"><i class="gi gi-pen"></i> Service Terms</h3>
                            </div>
                            <div class="modal-body">
                                <h4 class="sub-header">1.1 | General</h4>
                                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <h4 class="sub-header">1.2 | Account</h4>
                                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <h4 class="sub-header">1.3 | Service</h4>
                                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <h4 class="sub-header">1.4 | Payments</h4>
                                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Ok, I've read them!</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Terms Modal -->
            </div>
            <!-- END Validation Block -->
        </div>
        <div class="col-md-6">
            <!-- Form Validation Example Block -->
            <div class="block">
                <!-- Form Validation Example Title -->
                <div class="block-title">
                    <h2><strong>Debit Card</strong></h2>
                </div>
                <!-- END Form Validation Example Title -->

                <!-- Form Validation Example Content -->
                <form id="form-validation" action="#" method="post" class="form-horizontal form-bordered">
                    <fieldset>
                        <legend><i class="fa fa-angle-right"></i>Select Card Type for Slab Commission</legend>
                         <div class="form-group">

                            <div class="col-md-12">
                                <select  id="debit_type" name="debit_type" class="form-control">
                                    <option value="">Please select card type</option>
                                    <option value="VISA1">VISA1</option>
                                    <option value="MasterCard">MasterCard</option>
                                    <option value="Maestro">Maestro</option>
                                    <option value="RuPay">RuPay</option>
                                    <option value="American Express">American Express</option>
                                    <option value="Citibank">Citibank</option>
                                </select>
                            </div>
                        </div>
                                    <div class="form-group">
                                     <?php 
                              $counter = '0';
                              $apis = array();
                          foreach($slabdata1 as $creditslab):
                              
                           $apis[$counter] = $creditslab['card_name'];
                        ?> 
                                      
                            <div class="block">
                            <!-- Interactive Title -->
                            <div class="block-title">
                                <!-- Interactive block controls (initialized in js/app.js -> interactiveBlocks()) -->
                                <div class="block-options pull-right">
                                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-content"><i class="fa fa-arrows-v"></i></a>
                                    <a style="cursor: pointer;" class="btn btn-alt btn-sm btn-primary debit_edit" alt="<?php echo $creditslab['id']; ?>"><i class="fa fa-pencil-square-o fa-fw"></i></a>
                                    
                                </div>
                                <h2><strong>Debit Card Slab Commission For </strong><span id="card_name1<?php echo $creditslab['id']; ?>"><?php echo $creditslab['card_name']; ?></span></h2>
                            </div>
                            <!-- END Interactive Title -->

                            <!-- Interactive Content -->
                            <!-- The content you will put inside div.block-content, will be toggled -->
                            <div class="block-content" style="display: none;">
                               
                                <ul class="fa-ul list-li-push">
                                    <li><i class="fa fa-li fa-check text-success"></i> Slab Amount Range 
                                        <span id="min_price1<?php echo $creditslab['id']; ?>"><?php echo $creditslab['min_price'] ; ?></span> to  
                                        <span id="max_price1<?php echo $creditslab['id']; ?>"><?php echo $creditslab['max_price'] ; ?></span>
                                    </li>
                                    
                                    <li><i class="fa fa-li fa-check text-success"></i>Service Charge 
                                        <?php  
                                            if($creditslab['service_charge_status']=='percentage'):
                                                echo 'percentage (%)='. ' <span id="service_charge_per1'.$creditslab['id'].'">'.$creditslab['service_charge_per'].'</span>' ;
                                            endif;
                                            if($creditslab['service_charge_status']=='flat'):
                                                echo 'flat='. ' <span id="service_charge_flat1'.$creditslab['id'].'">'.$creditslab['service_charge_flat'].'</span>' ;
                                            endif;
                                            
                                    
                                    ?> </li>
                                    <li><i class="fa fa-li fa-check text-success"></i>Commission
                                    <?php 
                                            if($creditslab['commission_status']=='percentage'):
                                                 echo 'percentage (%)='.' <span id="commission_per1'.$creditslab['id'].'">'.$creditslab['commission_per'].'</span>' ;
                                            endif;
                                            if($creditslab['commission_status']=='flat'):
                                                 echo 'flat='.' <span id="commission_flat1'.$creditslab['id'].'">'.$creditslab['commission_flat'].'</span>' ;
                                            endif;
                                    ?>
                                    </li>
                                    <li><i class="fa fa-li fa-check text-success"></i>GST (%) = <span id="gst1<?php echo $creditslab['id']; ?>"><?php echo $creditslab['gst'] ;?></span> % </li>
                                </ul>
                            </div>
                          
                            <!-- END Interactive Content -->
                        </div>
                                      
                                       <?php endforeach; ?>
                        </div>
                        
                    </fieldset>
                    
                </form>
                <!-- END Form Validation Example Content -->

                <!-- Terms Modal -->
                <div id="modal-terms" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title"><i class="gi gi-pen"></i> Service Terms</h3>
                            </div>
                            <div class="modal-body">
                                <h4 class="sub-header">1.1 | General</h4>
                                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <h4 class="sub-header">1.2 | Account</h4>
                                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <h4 class="sub-header">1.3 | Service</h4>
                                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <h4 class="sub-header">1.4 | Payments</h4>
                                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Ok, I've read them!</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Terms Modal -->
            </div>
            <!-- END Validation Block -->
        </div>
       
    </div>
</div>


<div class="modal fade" id="myModal" role="dialog">
     <form id="form-validation" action="" method="post" class="form-horizontal form-bordered">
<div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Your Slab Commission For <span class="cardtypename card_name_credit"></span></h4>
            </div>
            <div class="modal-body">
               
                    <fieldset>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="val_range">Minimum Price  <span class="text-danger">*</span></label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" value="" id="val_range" name="min_price_credit" class="form-control min_price_credit" placeholder="">
                            <input type="hidden" id="card_name"  name="card_name" value="">
                            <input type="hidden" id="c_id"  name="c_id" value="">
                           
                        </div>
                    </div>
                    <label class="col-md-3 control-label" for="val_range">Maximum Price   <span class="text-danger">*</span></label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" value="" id="val_range" name="max_price_credit" class="form-control max_price_credit" placeholder="">
                            
                        </div>
                    </div>
                </div>
                        
                <div class="form-group">
                    <!--<h3><i class="fa fa-angle-right"></i>Add Service Charge</h3>-->
                    
                    <label class="col-md-3 control-label" for="val_range">Service Charge(%)</label>
                    
                    <div class="col-md-2">
                        <div class="input-group">
                            <input type="text" value="" id="val_range" name="service_charge_per_credit" class="form-control service_charge_per_credit" placeholder="">
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                             <div class="btn-group" id="status" data-toggle="buttons">
                                 <label class="btn btn-default btn-on btn-xs active" id="scper_lbl">
                                    <input type="radio" value="1" id="scp_credit" name="service_charge" checked="checked">%</label>
                                    <label class="btn btn-default  btn-off btn-xs " id="scflat_lbl">
                                    <input type="radio" value="0"  id="scf_credit" name="service_charge">flat</label>
                                  </div>
                        </div>
                    </div>
                    <label class="col-md-3 control-label" for="val_range">Service Charge Flat</label>
                    
                    <div class="col-md-2">
                        <div class="input-group">
                            <input type="text" value="" id="val_range" name="service_charge_flat_credit" class="form-control service_charge_flat_credit" placeholder="">
                           
                        </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <!--<h3><i class="fa fa-angle-right"></i>Add Service Charge</h3>-->
                    
                    <label class="col-md-3 control-label" for="val_range">Commission Charge(%)</label>
                    
                    <div class="col-md-2">
                        <div class="input-group">
                            <input type="text" value="" id="val_range" name="commission_per_credit" class="form-control commission_per_credit" placeholder="">
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                             <div class="btn-group" id="status" data-toggle="buttons">
                                    <label class="btn btn-default btn-on btn-xs active" id="scp_com_lbl">
                                    <input type="radio" value="1" id="scp_com_credit" name="commission_credit" checked="checked">%</label>
                                    <label class="btn btn-default  btn-off btn-xs " id="scf_com_lbl">
                                    <input type="radio" value="0"  id="scf_com_credit" name="commission_credit">flat</label>
                                  </div>
                        </div>
                    </div>
                    <label class="col-md-3 control-label" for="val_range">Commission Flat</label>
                    
                    <div class="col-md-2">
                        <div class="input-group">
                            <input type="text" value="" id="val_range" name="commission_flat_credit" class="form-control commission_flat_credit" placeholder="">
                           
                        </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="val_range">GST <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" value="" id="val_range" name="gst_credit" class="form-control gst_credit" placeholder="100">
                           
                        </div>
                    </div>
                    
                </div>
                        
                    </fieldset>
               
            </div>
            <div class="modal-footer">

                <button type="submit" name="credit_submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                <button type="reset" class="btn btn-sm btn-warning" id="resetc"><i class="fa fa-repeat"></i> Reset</button>
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
            </div>
            
            
        </div>
        
    </div>
     </form>
</div>

<div class="modal fade" id="myModal_debit" role="dialog">
    <form id="form-validation" action="" method="post" class="form-horizontal form-bordered">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
             
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Your Slab Commission For <span class="cardtypename_debit  card_name_debit"></span></h4>
            </div>
           
            <div class="modal-body">
                
                    <fieldset>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="val_range">Minimum Price  <span class="text-danger">*</span></label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" id="val_range" name="min_price_debit" class="form-control min_price_debit" placeholder="">
                              <input type="hidden" id="card_name_debit"  name="card_name_debit" value="">
                            <input type="hidden" id="c_id1"  name="c_id1" value="">
                        </div>
                    </div>
                    <label class="col-md-3 control-label" for="val_range">Maximum Price   <span class="text-danger">*</span></label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" id="val_range" name="max_price_debit" class="form-control max_price_debit" placeholder="">
                            
                        </div>
                    </div>
                </div>
                        
                <div class="form-group">
                    <!--<h3><i class="fa fa-angle-right"></i>Add Service Charge</h3>-->
                    
                    <label class="col-md-3 control-label" for="val_range">Service Charge(%)</label>
                    
                    <div class="col-md-2">
                        <div class="input-group">
                            <input type="text" id="val_range" name="service_charge_per_debit" class="form-control service_charge_per_debit" placeholder="100">
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                             <div class="btn-group" id="status" data-toggle="buttons">
                                 <label class="btn btn-default btn-on btn-xs active" id="scper_lbl1">
                                    <input type="radio" value="1" id="scp_credit1" name="service_debit" checked="checked">%</label>
                                    <label class="btn btn-default  btn-off btn-xs " id="scflat_lbl1">
                                    <input type="radio" value="0"  id="scf_credit1" name="service_debit">flat</label>
                                  </div>
<!--                            <div class="btn-group" id="status" data-toggle="buttons">
                                    <label class="btn btn-default btn-on btn-xs active">
                                    <input type="radio" value="1" id="scp" name="service_debit" checked="checked">%</label>
                                    <label class="btn btn-default  btn-off btn-xs ">
                                    <input type="radio" value="0"  id="scf" name="service_debit">flat</label>
                                  </div>-->
                        </div>
                    </div>
                    <label class="col-md-3 control-label" for="val_range">Service Charge Flat</label>
                    
                    <div class="col-md-2">
                        <div class="input-group">
                            <input type="text" id="val_range" name="service_charge_flat_debit" class="form-control service_charge_flat_debit" placeholder="">
                           
                        </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <!--<h3><i class="fa fa-angle-right"></i>Add Service Charge</h3>-->
                    
                    <label class="col-md-3 control-label" for="val_range">Commission Charge(%)</label>
                    
                    <div class="col-md-2">
                        <div class="input-group">
                            <input type="text" id="val_range" name="commission_per_debit" class="form-control commission_per_debit" placeholder="">
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                             <div class="btn-group" id="status" data-toggle="buttons">
                                    <label class="btn btn-default btn-on btn-xs active" id="scp_com_lbl1">
                                    <input type="radio" value="1" id="scp_com_credit1" name="commission_debit" checked="checked">%</label>
                                    <label class="btn btn-default  btn-off btn-xs " id="scf_com_lbl1">
                                    <input type="radio" value="0"  id="scf_com_credit1" name="commission_debit">flat</label>
                                  </div>
<!--                            <div class="btn-group" id="status" data-toggle="buttons">
                                    <label class="btn btn-default btn-on btn-xs active">
                                    <input type="radio" value="1" id="scp" name="commission_debit" checked="checked">%</label>
                                    <label class="btn btn-default  btn-off btn-xs ">
                                    <input type="radio" value="0"  id="scf" name="commission_debit">flat</label>
                                  </div>-->
                        </div>
                    </div>
                    <label class="col-md-3 control-label" for="val_range">Commission Flat</label>
                    
                    <div class="col-md-2">
                        <div class="input-group">
                            <input type="text" id="val_range" name="commission_flat_debit" class="form-control commission_flat_debit" placeholder="">
                           
                        </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="val_range">GST </label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" id="val_range" name="gst_debit" class="form-control gst_debit" placeholder="">
                           
                        </div>
                    </div>
                    
                </div>
                        
                    </fieldset>
               
            </div>
            <div class="modal-footer">

                <button type="submit" name="debit_submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                <button type="reset" class="btn btn-sm btn-warning" id="resetc1"><i class="fa fa-repeat"></i> Reset</button>
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
            </div>
                 
        </div>

    </div>
    </form>
</div>





<script type="text/javascript">
   


</script>
<script type="text/javascript">

</script>





