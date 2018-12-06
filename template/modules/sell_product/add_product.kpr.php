<div id="page-content">
   
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Add/Update Product<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> Sell Product</li>
                            <li><a href="">Add/Update Product</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Add/Update Product</strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                   <?php if($_GET['pid']): 
                                       $getprd_data=$o__sell_product->getproduct_upd($_GET['pid']);
                                       ?>
                                    
                                      <fieldset>
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $getprd_data->id; ?>" name="txid">
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="pro_name">Product Name</label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input required type="text" value="<?php echo $getprd_data->product_name; ?>" id="pro_name" name="pro_name" class="form-control forn_control12" placeholder="Product Name">
                                                        
                                                  
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
<!--                                            <label class="col-md-4 control-label" for="pro_detail">Product Detail</label>
                                            <div class="col-md-7">
                                                <textarea id="pro_detail" name="pro_detail" rows="5" class="form-control" placeholder="Content.."></textarea>
                                            </div>-->
                                        </div>

                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="pan_card">Image</label>

                                                <div class="col-md-7 col-xs-12">
                                                    <div class="prod_bord1">
                                                        <?php if($getprd_data->product_img): ?>
                                                        <img src="<?php echo $getprd_data->product_img; ?>" id="more_prod1" style="width: 100%; height: 100%;">
                                                        <?php else: ?>
                                                        <img src="<?php echo Fimages; ?>/category.png" id="more_prod1" style="width: 100%; height: 100%;">
                                                        <?php endif; ?>
                                                        
                                                        
                                                        <div class="hover_ad1 ">
                                                            <div class="fileUpload btn">
                                                                <span style="color:#fff;">Upload</span>
                                                                <input id="uploadPhoto1" type="file" accept="image/*" name="prod_img"  class="upload pan_card" onchange="readURL1(this);">


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="pro_name">Qty</label>

                                                <div class="col-md-7 col-xs-11 input-group">
                                                    <input required type="text" value="<?php echo $getprd_data->qty; ?>" id="qty" name="qty" class="form-control forn_control12 qty" placeholder="Product Quantity">


                                                </div>
                                            </div>
                                        
                                        <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="pro_name">SKU</label>

                                                <div class="col-md-7 col-xs-11 input-group">
                                                    <input required type="text" value="<?php echo $getprd_data->sku; ?>" id="sku" name="sku" class="form-control forn_control12 sku" placeholder="Product SKU">


                                                </div>
                                            </div>
                                            
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="price">Price</label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input required type="text" value="<?php echo $getprd_data->amount; ?>" id="price" name="price" class="form-control forn_control12" placeholder="Price">
                                                        
                                                  
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="price">Commission</label>

                                                <div class="col-md-7 col-xs-11 input-group">
                                                    <input required type="text" value="<?php echo $getprd_data->commission_group; ?>" id="comisn" name="comisn" class="form-control forn_control12 comisn" placeholder="Commission">


                                                </div>
                                            </div>

                                           

                                        
                                        <hr style="border:1px dashed #eaedf1;width: 100%;">
                                        
                                        

                                        
                                       <div class="col-md-12" style="margin-bottom:3%;">
                                                <center><button type="submit" name="updateProduct" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button></center>
                                            </div>


</form>
                                        </fieldset>
                                    
                                   <?php else: ?>
                                   
                                        <fieldset>
<form action="" method="post" enctype="multipart/form-data">
                                            <!--<div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 control-label" for="example-select">Product Category</label>
                                                <div class="col-md-7">
                                                    <select id="cat" name="cat" class="form-control cat" size="1">
                                                        <option value="0">Please select Category</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 control-label" for="example-select">Product Sub Category</label>
                                                <div class="col-md-7">
                                                    <select id="subcat" name="subcat" class="form-control subcat" size="1">
                                                        <option value="0">Please select Sub Category</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr style="border:1px dashed #eaedf1;width: 100%;"> -->
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="pro_name">Product Name</label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input required type="text" value="" id="pro_name" name="pro_name" class="form-control forn_control12" placeholder="Product Name">
                                                        
                                                  
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
<!--                                            <label class="col-md-4 control-label" for="pro_detail">Product Detail</label>
                                            <div class="col-md-7">
                                                <textarea id="pro_detail" name="pro_detail" rows="5" class="form-control" placeholder="Content.."></textarea>
                                            </div>-->
                                        </div>

                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="pan_card">Image</label>

                                                <div class="col-md-7 col-xs-12">
                                                    <div class="prod_bord1">
                                                        <img src="<?php echo Fimages; ?>/category.png" id="more_prod1" style="width: 100%; height: 100%;">
                                                        <div class="hover_ad1 ">
                                                            <div class="fileUpload btn">
                                                                <span style="color:#fff;">Upload</span>
                                                                <input id="uploadPhoto1" type="file" accept="image/*" name="prod_img"  class="upload pan_card" onchange="readURL1(this);">


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="pro_name">Qty</label>

                                                <div class="col-md-7 col-xs-11 input-group">
                                                    <input required type="text" value="" id="qty" name="qty" class="form-control forn_control12 qty" placeholder="Product Quantity">


                                                </div>
                                            </div>
                                        
                                        <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="pro_name">SKU</label>

                                                <div class="col-md-7 col-xs-11 input-group">
                                                    <input required type="text" value="" id="sku" name="sku" class="form-control forn_control12 sku" placeholder="Product SKU">


                                                </div>
                                            </div>
                                            
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="price">Price</label>
                                               
                                                    <div class="col-md-7 col-xs-11 input-group">
                                                        <input required type="text" value="" id="price" name="price" class="form-control forn_control12" placeholder="Price">
                                                        
                                                  
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="price">Commission</label>

                                                <div class="col-md-7 col-xs-11 input-group">
                                                    <input required type="text" value="" id="comisn" name="comisn" class="form-control forn_control12 comisn" placeholder="Commission">


                                                </div>
                                            </div>

                                            <!--<div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 control-label" for="example-select">Tax (%)</label>
                                                <div class="col-md-7">
                                                    <select id="example-select" name="example-select" class="form-control" size="1">
                                                        <option value="0">Please select Tax Group</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>-->

                                        
                                        <hr style="border:1px dashed #eaedf1;width: 100%;">
                                        
                                        

                                        
                                       <div class="col-md-12" style="margin-bottom:3%;">
                                                <center><button type="submit" name="addProduct" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button></center>
                                            </div>


</form>
                                        </fieldset>
                                    
                                    <?php endif; ?>
                                        
                                       
                                        
                                   
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
                    
                    
                   



                    


                   


                  

