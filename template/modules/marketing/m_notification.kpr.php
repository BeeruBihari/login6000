<div id="page-content">
   
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Notification<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> Marketing</li>
                            <li><a href="">Notification</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Notification</strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                   
                                        <fieldset>
                                           
                                           
                                            
                                            <!--<div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="notification">Notification Detail</label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input required type="text" value="" id="notification" name="notification" class="form-control forn_control12" placeholder="Notification Detail">
                                                        
                                                  
                                                </div>
                                            </div>
                                            
                                           
                                        
                                         <div class="form-group col-md-6 col-xs-12">
                                    <label class="col-md-4 col-xs-12 control-label" for="pan_card">Image</label>

                                        <div class="col-md-7 col-xs-12">
                                            <div class="prod_bord1">
                                                <img src="<?php echo Fimages; ?>/category.png" id="more_prod1" style="width: 100%; height: 100%;">
                                                <div class="hover_ad1 ">
                                                    <div class="fileUpload btn">
                                                        <span style="color:#fff;">Upload</span>
                                                        <input id="uploadPhoto1" type="file" accept="image/*" name="pan_card"  class="upload pan_card" onchange="readURL1(this);">


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <hr style="border:1px dashed #eaedf1;width: 100%;">-->
                                        
                                        <div class="">
	<div class="row">
		<div class="span12">
            
             
            
            <div id="tab" class="btn-group" data-toggle="buttons-radio">
              <a href="#prices2" class="btn btn-large btn-info active" data-toggle="tab">Group</a>
              <a href="#features2" class="btn btn-large btn-info" data-toggle="tab">Individual</a>
              
            </div>
             
            <div class="tab-content">
              <div class="tab-pane active" id="prices2" style="margin-top:3%;">
                
                
                 <form action="" method="post">
                     
                     <div class="col-sm-6 form-group">
                            <label class="col-md-4 control-label" for="example-select">Type</label>
                                <div class="col-md-7">
                                    <select id="example-select" name="example-select" class="form-control" size="1">
                                        <option value="0">----Please select--------</option>
                                        <option value="1">With Image</option>
                                        <option value="2">Without Image</option>
                                        
                                    </select>
                                </div>
                        </div>
                     
                     <script type="text/javascript">
    $(function () {
        $("#example-select").change(function () {
            if ($(this).val() == "2") {
                $(".image_show").hide();
            } else {
                $(".image_show").show();
            }
        });
    });
</script>
                    
                     
                       <div class="col-sm-6 form-group">
                            <label class="col-md-4 control-label" for="title">Title</label>
                                <div class="col-md-7">
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title">
                                        
                                </div>
                      </div>
                      
                      
                      
                       <hr style="border:1px dashed #eaedf1;width: 100%;">
                       
                       
                      
                                        
                                        <div class="form-group col-md-6 col-xs-12">
                                            <label class="col-md-4 control-label" for="msg">Message</label>
                                            <div class="col-md-7">
                                                <textarea id="msg" name="msg" rows="5" class="form-control" placeholder="Content.."></textarea>
                                            </div>
                                        </div>
                                        
                                         <div class="form-group col-md-6 col-xs-12 image_show" style="display:none;">
                                    <label class="col-md-4 col-xs-12 control-label" for="pan_card">Image</label>

                                        <div class="col-md-7 col-xs-12">
                                            <div class="prod_bord1">
                                                <img src="<?php echo Fimages; ?>/category.png" id="more_prod1" style="width: 100%; height: 100%;">
                                                <div class="hover_ad1 ">
                                                    <div class="fileUpload btn">
                                                        <span style="color:#fff;">Upload</span>
                                                        <input id="uploadPhoto1" type="file" accept="image/*" name="pan_card"  class="upload pan_card" onchange="readURL1(this);">


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group form-actions button_margin123" >
                                            <div class="col-md-12" style="margin-bottom:3%;">
                                                <center><button type="submit" name="useradd" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button></center>
                                            </div>
                                        </div>
                 </form>
                
               
              </div>
              <div class="tab-pane" id="features2" style="margin-top:3%;">
                   <form action="" method="post">
                     
                     <div class="col-sm-6 form-group">
                            <label class="col-md-4 control-label" for="example-select2">User</label>
                                <div class="col-md-7">
                                    <select id="example-select2" name="example-select2" class="form-control" size="1">
                                        <option value="0">----Please select--------</option>
                                        <option value="1">one</option>
                                        <option value="2">two</option>
                                        
                                    </select>
                                </div>
                        </div>
                     
                     
                     <div class="col-sm-6 form-group">
                            <label class="col-md-4 control-label" for="example-select1">Type</label>
                                <div class="col-md-7">
                                    <select id="example-select1" name="example-select1" class="form-control" size="1">
                                        <option value="0">----Please select--------</option>
                                        <option value="1">With Image</option>
                                        <option value="2">Without Image</option>
                                        
                                    </select>
                                </div>
                        </div>
                        
                         <script type="text/javascript">
    $(function () {
        $("#example-select1").change(function () {
            if ($(this).val() == "2") {
                $(".image_show1").hide();
            } else {
                $(".image_show1").show();
            }
        });
    });
</script>
                     
                     <hr style="border:1px dashed #eaedf1;width: 100%;">
                    
                     
                       <div class="col-sm-6 form-group">
                            <label class="col-md-4 control-label" for="title1">Title</label>
                                <div class="col-md-7">
                                    <input type="text" id="title1" name="title1" class="form-control" placeholder="Enter Title">
                                        
                                </div>
                      </div>
                      
                      
                      
                       
                       
                       
                      
                                        
                                        <div class="form-group col-md-6 col-xs-12">
                                            <label class="col-md-4 control-label" for="msg1">Message</label>
                                            <div class="col-md-7">
                                                <textarea id="msg1" name="msg1" rows="5" class="form-control" placeholder="Content.."></textarea>
                                            </div>
                                        </div>
                                        <hr style="border:1px dashed #eaedf1;width: 100%;">
                                        
                                         <div class="form-group col-md-6 col-xs-12 image_show1" style="display:none;">
                                    <label class="col-md-4 col-xs-12 control-label" for="pan_card">Image</label>

                                        <div class="col-md-7 col-xs-12">
                                            <div class="prod_bord1">
                                                <img src="<?php echo Fimages; ?>/category.png" id="more_prod" style="width: 100%; height: 100%;">
                                                <div class="hover_ad1 ">
                                                    <div class="fileUpload btn">
                                                        <span style="color:#fff;">Upload</span>
                                                        <input id="uploadPhoto" type="file" accept="image/*" name="pan_card"  class="upload pan_card" onchange="readURL(this);">


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group form-actions button_margin123" >
                                            <div class="col-md-12" style="margin-bottom:3%;">
                                                <center><button type="submit" name="useradd" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button></center>
                                            </div>
                                        </div>
                 </form>
              </div>
              
              
            </div>
        </div>
	</div>
</div>
                                        
                                        
                                        
        
                                        </fieldset>
                                        
                                       
                                        
                                   
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
                    
                    
                   



                    


                   


                  

