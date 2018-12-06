<script src="<?php echo Fjs;  ?>/helpers/ckeditor/ckeditor.js"></script>
<div id="page-content">
    <?php $names=(empty($_GET['id']) ? 'Add User' : 'Edit User'); ?>
    <?php
    $readonly = '';
    $displaynone = '';
    $displaynone_web = '';
    if($_GET['id'] == $_SESSION['b2b_kpr_rech_id']){
        $readonly = 'readonly';
        $displaynone = 'display:none';
    }
    else{
        $displaynone_web = 'display:none';
    }
    ?>
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    <?php echo $names; ?><br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> User</li>
                            <li><a href=""><?php echo $names; ?></a></li>
                        </ul>
                        <!-- END Validation Header -->
                        <?php
                        
                        
                        if(isset($_GET['id']) && $_SESSION['b2b_kpr_rech_user_type'] == 4){
                            
                        
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block">
                                    <?php
                                    flash('add_bncl');
                                    ?>
                                    <form id="form-validation" action="" method="post" class="form-horizontal">
                                        <fieldset>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="firstname">Add Balance</label>
                                              
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input required type="text" value="" id="addblnc" name="addblnc" class="form-control forn_control12" placeholder="Add Balance">
                                                       
                                                  
                                                </div>
                                            </div>
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            <div class="form-group form-actions button_margin123">
                                            <div class="col-md-12">
                                                <center><button disabled type="submit" name="addblncbtn" class="btn btn-sm btn-primary sbmtbtn"><i class="fa fa-arrow-right"></i> Submit</button>
                                                </center>
                                            </div>
                                        </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        <?php
                        }
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong><?php echo $names; ?></strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->
									<script>
									$(function(){
										var ln_l = $('#mob_no').val().length;
											
											if(ln_l == 10){
												$('.sbmtbtn').removeAttr('disabled');
											}
											
											
										$('.val_select').change(function(){
											var idd = $(this).val();
											//alert(idd);
											if(idd == 5){
												$('.websitediv').show();
											}
											else{
												$('.websitediv').hide();
											}
										});
										$("#mob_no").keyup(function(){
											var ln = $(this).val().length;
											var mob = $(this).val();
											
											if(ln == 10){
												$('.sbmtbtn').removeAttr('disabled');
											}
											
											$.ajax({

												type: "POST",

												url: "ajax/commission.php",

												data: {mob: mob, type:'checknumber'},

												success: function (data) {
												
											    data = data.trim();
												if(data == 0 && ln == 10){
													$('.sbmtbtn').removeAttr('disabled');
												}
												else{
													$('.sbmtbtn').attr('disabled','true');
													
												}
												
												if(data == 1){
													
													$('.mob_no_wr').show();
												}
												else{
													$('.mob_no_wr').hide();
												}
														

													//$('.table_display'+id).html(data);
								//
								//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

												}

											});
										});
										
										$("#username").keyup(function(){
											
											var mob = $(this).val();
											
											
											
											$.ajax({

												type: "POST",

												url: "ajax/commission.php",

												data: {un: mob, type:'checkusername'},

												success: function (data) {
												
											    data = data.trim();
												if(data == 0 && ln == 10){
													$('.sbmtbtn').removeAttr('disabled');
												}
												else{
													$('.sbmtbtn').attr('disabled','true');
													
												}
												
												if(data == 1){
													
													$('.username_wr').show();
												}
												else{
													$('.username_wr').hide();
												}
														

													//$('.table_display'+id).html(data);
								//
								//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

												}

											});
										});
										
									});
									</script>
                                    <!-- Form Validation Example Content -->
                                    
                                    <form id="form-validation" action="" method="post" class="form-horizontal" enctype="multipart/form-data" autocomplete="off">
                                        <fieldset>
                                            <?php 
                                            if($_SESSION['b2b_kpr_rech_user_type']=="6" && $_GET['id'] == $_SESSION['b2b_kpr_rech_id']): ?>
                                           Unique ID <?php echo $_SESSION['b2b_kpr_rech_unique_id']; ?> <br>
                                           User ID <?php echo $_SESSION['b2b_kpr_rech_id']; ?>
                                           <?php 
                                           endif; 
                                           ?>
                                           <div class="form-group col-md-6 col-xs-12" style="<?php echo $displaynone; ?>">
                                               <label class="col-md-4 col-xs-12 control-label" for="user_type">User Type<span style="color:red;">*</span></label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select required id="user_type" name="user_type" class="form-control val_select" >
                                                        <option value="">Please select</option>
                                                        
                                                        <?php if($_SESSION['b2b_kpr_rech_user_type']=="0" || $_SESSION['b2b_kpr_rech_user_type']=="4"): ?>
                                                        <option <?php if($ss__user_type == '4'){ echo 'selected'; } ?> value="4">White Label With Full Access</option>
                                                        <option <?php if($ss__user_type == '5'){ echo 'selected'; } ?> value="5">White Label</option>
                                                            <option <?php if($ss__user_type == '1'){ echo 'selected'; } ?> value="1">Master</option>
                                                            <option <?php if($ss__user_type == '5'){ echo 'selected'; } ?> value="5">B2B</option>
                                                            <option <?php if($ss__user_type == '6'){ echo 'selected'; } ?> value="6">API User</option>
                                                        <?php endif; ?>
                                                        <?php if($_SESSION['b2b_kpr_rech_user_type']=="5"): ?>
                                                        <option <?php if($ss__user_type == '1'){ echo 'selected'; } ?> value="1">Master</option>
                                                        <?php endif; ?>
                                                        <?php if($_SESSION['b2b_kpr_rech_user_type']=="1"): ?>
                                                            <option <?php if($ss__user_type == '2'){ echo 'selected'; } ?> value="2">Distributor</option>
                                                        <?php endif; ?>

                                                        <?php if($_SESSION['b2b_kpr_rech_user_type']=="2"): ?>
                                                        <option <?php if($ss__user_type == '3'){ echo 'selected'; } ?> value="3">Retailer</option>
                                                        <?php endif; ?>
                                                        

                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <?php
                                            if($_GET['id'] != $_SESSION['b2b_kpr_rech_id']){
                                            ?>
                                            <div class="form-group col-md-4 col-xs-12" style="<?php echo $displaynone; ?>">
                                                 <label class="col-md-4 col-xs-12 control-label" for="user_type">Group Type<span style="color:red;">*</span></label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select required id="user_type" name="group_type" class="form-control val_select" >
                                                        <option selected value disabled>Please select Group Type</option>
                                                        <?php foreach ($getgroup as $grp_name):?>
                                                        <option <?php if($getgpname->group_name == $grp_name['id']){ echo 'selected'; } ?> value="<?php echo $grp_name['id']; ?>"><?php echo $grp_name['group_name']; ?></option>
                                                         <?php endforeach;?>
                                                    </select>
                                                     
                                                </div>
                                            </div>
                                            
                                            <div class="form-group col-md-2 col-xs-12" style="<?php echo $displaynone; ?>">
                                               
                                                <label class="col-md-12 col-xs-12 control-label" for="user_type"><a href="index.php?action=add_group">Create New Group</a></label>
                                            </div>
                                            <?php
                                            }
                                            else{
                                                ?>
                                                <input type="hidden" value="<?php echo $ss__group_name; ?>" name="group_type">
                                                <?php
                                                
                                            }
                                            ?>
                                            
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            <?php if($_SESSION['b2b_kpr_rech_user_type']=="0"): ?>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="full_rights">Full Rights</label>
                                                <div class="col-md-7 col-xs-11">
                                                    <input type="checkbox" class="form-control forn_control12" name="full_rights" <?php if($getgpname->full_rights == '1'){ echo 'checked'; } ?>  value="1">
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if(!empty($_GET['id'])): ?>
                                            <!--<div class="form-group col-md-6 col-xs-12" style="<?php echo $displaynone; ?>">-->
                                            <!--    <label class="col-md-4 col-xs-12 control-label" for="user_type">Custom Commission</label>-->
                                            <!--    <div class="col-md-7 col-xs-11">-->
                                            <!--        <input type="checkbox" class="form-control forn_control12 custom_commission" name="custom_commission" <?php if($ss__custom_commission=='1'){ echo 'checked'; } ?> value="1">-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <?php endif; ?>
                                            
                                                <hr style="border:1px dashed #eaedf1;width: 100%;">
                                           
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="firstname">First Name<span style="color:red;">*</span></label>
                                              
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input required type="text" value="<?php echo $ss__firstname; ?>" id="firstname" name="firstname" class="form-control forn_control12" placeholder="First Name">
                                                       
                                                  
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="lastname">Last Name<span style="color:red;">*</span></label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input required type="text" value="<?php echo $ss__lastname; ?>" id="lastname" name="lastname" class="form-control forn_control12" placeholder="Last Name">
                                                        
                                                  
                                                </div>
                                            </div>
                                            
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="username">User Name<span style="color:red;">*</span></label>
                                              
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input required type="text" value="<?php echo $ss__username; ?>" id="username" name="username" class="form-control forn_control12" placeholder="User Name">
                                                       
                                                    <label class="label label-danger username_wr" style="margin-left: 14px;display:none;">already registered</label>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="cmpy_name">Company Name<span style="color:red;">*</span></label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input required type="text" value="<?php echo $ss__cmpy_name; ?>" id="cmpy_name" name="cmpy_name" class="form-control forn_control12" placeholder="Company Name">
                                                        
                                                  
                                                </div>
                                            </div>
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">
                                           
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="mob_no">Mobile Number<span style="color:red;">*</span></label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input required  type="text" maxlength="10" value="<?php echo $ss__mob_no; ?>" id="mob_no" name="mob_no" class="form-control forn_control12" placeholder="Mobile Number">

                                                   <label class="label label-danger mob_no_wr" style="margin-left: 14px;display:none;">already registered</label>
                                                </div>
                                            </div>
                                            

                                            
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="phone_no">Phone Number</label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input  type="text" id="phone_no" maxlength="10" value="<?php echo $ss__phone_no; ?>" name="phone_no" class="form-control forn_control12" placeholder="Phone Number">
                                                       
                                                   
                                                </div>
                                            </div>

                                           <hr style="border:1px dashed #eaedf1;width: 100%;">
                                           
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="email">Email<span style="color:red;">*</span></label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input required type="email" value="<?php echo $ss__email; ?>" id="email" name="email" class="form-control forn_control12" placeholder="Email">
                                                       
                                                   
                                                </div>
                                            </div>
                                            
                                             
                                           
                                          
                                           
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="password">Password<span style="color:red;">*</span></label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input required type="password" id="password" name="password" class="form-control forn_control12" placeholder="Password">
                                                       
                                                   
                                                </div>
                                            </div>
                                            
                                              <hr style="border:1px dashed #eaedf1;width: 100%;">
                                             
                                            <div class="form-group col-md-6 col-xs-12 websitediv" style="display:none;">
                                                <label class="col-md-4 col-xs-12 control-label" for="website">Website/Domain URL<span style="color:red;">*</span></label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input  type="text" value="<?php echo $ss__website; ?>" id="website" name="website" class="form-control forn_control12" placeholder="Website / Domain">
                                                        
                                                  
                                                </div>
                                            </div>
											
                                           <div class="form-group col-md-6 col-xs-12" style="<?php echo $displaynone; ?>">
                                                <label class="col-md-4 col-xs-12 control-label" for="user_type">MPOS Device</label>
                                                <div class="col-md-5 col-xs-11">
                                                    <input  type="text"  id="mpos_device" name="mpos_device" class="form-control forn_control12" placeholder="Device Sr.No">
                                                </div>
                                                <div class="col-md-3 col-xs-11">
                                                    <input type="checkbox" class="form-control forn_control12" name="mpos_status" <?php if($ss__mpos_status=='1'){ echo 'checked'; } ?> value="1">
                                                </div>
                                            </div>
                                               <hr style="border:1px dashed #eaedf1;width: 100%;">
                                           <?php $disp=($ss__custom_commission == '0' ? 'block' : 'none' ); ?>
                                               <div class="shhid" style="display:<?php echo $disp; ?>">
                                            <div class="form-group col-md-6 col-xs-12" style="<?php echo $displaynone; ?>">
                                                <label class="col-md-4 col-xs-12 control-label" for="user_type">Commission Group</label>
                                                <div class="col-md-7 col-xs-11">
                                                    <select name="comm_group" class="form-control forn_control12">
                                                        <option value="1">Group 1 (Default)</option>
                                                        <option value="2">Group 2</option>
                                                        <option value="3">Group 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                                   
                                               <hr style="border:1px dashed #eaedf1;width: 100%;">   
                                            </div>
                                           <div class="form-group col-md-6 col-xs-12" style="<?php echo $displaynone; ?>">
                                    <label class="col-md-4 col-xs-12 control-label" for="adhaar_card">Adhaar Card</label>

                                        <div class="col-md-7 col-xs-12">
                                            <div class="prod_bord1">

                                                <img src="<?php echo (!empty($_GET['id']) ? FAUrlupload.'/b2b_user_adhaar/'.$ss__adhaar_card : Fimages.'/category.png' ) ?>" id="more_prod" style="width: 100%; height: 100%;" onchange="readURL(this);">
                                                <div class="hover_ad1 ">
                                                    <div class="fileUpload btn">
                                                        <span style="color:#fff;">Upload</span>
                                                        <input id="uploadPhoto1" type="file" accept="image/*" name="adhaar_card"  class="upload adhaar_card" onchange="readURL(this);">


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                      
                                        <input type="hidden" name="status" value="<?php echo $ss__status; ?>">
                                        
                                        
                                         <div class="form-group col-md-6 col-xs-12" style="<?php echo $displaynone; ?>">
                                    <label class="col-md-4 col-xs-12 control-label" for="pan_card">PAN Card</label>

                                        <div class="col-md-7 col-xs-12">
                                            <div class="prod_bord1">
                                                <img src="<?php echo (!empty($_GET['id']) ? FAUrlupload.'/b2b_user_pan/'.$ss__pan_card : Fimages.'/category.png' ) ?>" id="more_prod1" style="width: 100%; height: 100%;">
                                                <div class="hover_ad1 ">
                                                    <div class="fileUpload btn">
                                                        <span style="color:#fff;">Upload</span>
                                                        <input id="uploadPhoto1" type="file" accept="image/*" name="pan_card"  class="upload pan_card" onchange="readURL1(this);">


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group col-md-6 col-xs-12">
                                    <label class="col-md-4 col-xs-12 control-label" for="pan_card">LOGO</label>

                                        <div class="col-md-7 col-xs-12">
                                            <div class="prod_bord1">
                                                <img src="<?php echo (!empty($_GET['id']) ? FAUrlupload.'/b2b_user_logo/'.$ss__logo : Fimages.'/category.png' ) ?>" id="more_prod2" style="width: 100%; height: 100%;">
                                                <div class="hover_ad1 ">
                                                    <div class="fileUpload btn">
                                                        <span style="color:#fff;">Upload</span>
                                                        <input id="uploadPhoto1" type="file" accept="image/*" name="logo"  class="upload logo" onchange="readURL2(this);">


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <hr style="border:1px dashed #eaedf1;width: 100%;">
                                       

        
                                        </fieldset>
                                        
                                       
                                        <div class="form-group form-actions button_margin123">
                                            <div class="col-md-12">
                                                <center><button disabled type="submit" name="useradd" class="btn btn-sm btn-primary sbmtbtn"><i class="fa fa-arrow-right"></i> Submit</button>
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
                            
                           <script src="<?php echo Fjs; ?>/vendor/jquery.min.js"></script>

  <script src="<?php echo Fjs; ?>/pages/adduser.js"></script>
                                    
                                    <script>$(function(){ AddUser.init(); });</script>
                            <script>
                        
 $(".custom_commission").click(function() {
        if(!$(this).is(":checked"))
        {
            $('.shhid').show();
        }
        else
        {
            $('.shhid').hide();
        }
        
    }); 
    
    
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#more_prod').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".adhaar_card").change(function () {
        readURL(this);
    });
    
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#more_prod2').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".logo").change(function () {
        readURL2(this);
    });

</script>


<script>
                        
 
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#more_prod1').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".pan_card").change(function () {
        readURL1(this);
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
                    
                    
                   



                    


                   


                  

