<div id="page-content">
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Add Retailer<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> Retailer</li>
                            <li><a href="">Add Retailer</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Add Retailer</strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                    <form id="form-validation" action="page_forms_validation.html" method="post" class="form-horizontal">
                                        <fieldset>
                                           
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="user_type">User Type</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="user_type" name="user_type" class="form-control val_select">
                                                        <option value="">Please select</option>
                                                        <option value="master">Master</option>
                                                        <option value="distributor">Distributor</option>
                                                        <option value="retailer">Retailer</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            
                                           <hr style="border:1px dashed #eaedf1;width: 100%;">
                                           
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="firstname">First Name</label>
                                              
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input type="text" id="first_name" name="firstname" class="form-control forn_control12" placeholder="First Name">
                                                       
                                                  
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="lastname">Last Name</label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input type="text" id="lastname" name="lastname" class="form-control forn_control12" placeholder="Last Name">
                                                        
                                                  
                                                </div>
                                            </div>
                                            
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="cmpy_name">Company Name</label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input type="text" id="cmpy_name" name="cmpy_name" class="form-control forn_control12" placeholder="Company Name">
                                                        
                                                  
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="mob_no">Mobile Number</label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input type="text" id="mob_no" name="mob_no" class="form-control forn_control12" placeholder="Mobile Number">
                                                       
                                                   
                                                </div>
                                            </div>
                                            
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="phone_no">Phone Number</label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input type="text" id="phone_no" name="phone_no" class="form-control forn_control12" placeholder="Phone Number">
                                                       
                                                   
                                                </div>
                                            </div>
                                            
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="email">Email</label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input type="text" id="email" name="email" class="form-control forn_control12" placeholder="Email">
                                                       
                                                   
                                                </div>
                                            </div>
                                            
                                             
                                           
                                           <hr style="border:1px dashed #eaedf1;width: 100%;">
                                           
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="password">Password</label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input type="password" id="password" name="password" class="form-control forn_control12" placeholder="Password">
                                                       
                                                   
                                                </div>
                                            </div>
                                            
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="confirm_password">Confirm Password</label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input type="password" id="confirm_password" name="confirm_password" class="form-control forn_control12" placeholder="Confirm Password">
                                                       
                                                   
                                                </div>
                                            </div>
                                           
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            
                                          
                                            
                                             
                                           
                                           
                                           
                                           <div class="form-group col-md-6 col-xs-12">
                                    <label class="col-md-4 col-xs-12 control-label" for="adhaar_card">Adhaar Card</label>

                                        <div class="col-md-7 col-xs-12">
                                            <div class="prod_bord1">
                                                <img src="<?php echo Fimages; ?>/category.png" id="more_prod" style="width: 100%; height: 100%;" onchange="readURL(this);">
                                                <div class="hover_ad1 ">
                                                    <div class="fileUpload btn">
                                                        <span style="color:#fff;">Upload</span>
                                                        <input required id="uploadPhoto1" type="file" accept="image/*" name="adhaar_card"  class="upload adhaar_card"   onchange="readURL(this);">


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                         <div class="form-group col-md-6 col-xs-12">
                                    <label class="col-md-4 col-xs-12 control-label" for="pan_card">PAN Card</label>

                                        <div class="col-md-7 col-xs-12">
                                            <div class="prod_bord1">
                                                <img src="<?php echo Fimages; ?>/category.png" id="more_prod1" style="width: 100%; height: 100%;">
                                                <div class="hover_ad1 ">
                                                    <div class="fileUpload btn">
                                                        <span style="color:#fff;">Upload</span>
                                                        <input required id="uploadPhoto1" type="file" accept="image/*" name="adhaar_card"  class="upload pan_card" onchange="readURL1(this);">


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <hr style="border:1px dashed #eaedf1;width: 100%;">
                                        
                                        
                                        

        

                                        
                                       
                                        <div class="form-group form-actions button_margin123">
                                            <div class="col-md-12">
                                                <center><button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
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
                            
                           
                            <script>
                        
 
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
                    
                    
                   



                    


                   


                  

