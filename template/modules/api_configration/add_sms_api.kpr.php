<link rel="stylesheet" href="<?php echo Fcss; ?>/plugins.css">

<div id="page-content">
    <!-- Table Responsive Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                Add/Update SMS API<br>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>API Configration</li>
        <li><a href="">Add/Update SMS API</a></li>
    </ul>

    <div class="block">

        <div class="block-title">


            <div class="row">
                <div class="col-sm-12 col-xs-10">

                    <h2 style="display:inline-block"><strong>Add/Update SMS API</strong></h2>

<!--                    <i class="fa fa-plus-circle fa-2x add_but1" aria-hidden="true" style="display:inline-block;float:right;"></i>-->

                </div>

            </div>


        </div>


        <?php if($_GET['sid']):
            
            $geteditsmsapi= $o__api_configration->editsmsapi($_GET['sid']);
            ?>
        
         <div class="add_but_click">

            <form id="form-validation" action="" method="post" class="form-horizontal" enctype="multipart/form-data" data-parsley-validate>
                <fieldset>



                    <div class="form-group col-md-6 col-xs-12">
                        <label class="col-md-4 col-xs-12 control-label" for="pin_password">Name</label>

                        <div class="col-md-7 col-xs-11 input-group">
                            <input required="" type="text" value="<?php echo $geteditsmsapi->name; ?>" id="name" name="name" class="form-control forn_control12" placeholder="Enter name" aria-required="true">

                            <input  type="hidden" value="<?php echo $geteditsmsapi->id; ?>" name="tx">
                        </div>
                    </div>

                    <hr style="border:1px dashed #eaedf1;width: 100%;">

                    <div class="form-group col-md-6 col-xs-12">
                        <label class="col-md-4 col-xs-12 control-label" for="pin_password">URL</label>

                        <div class="col-md-7 col-xs-11 input-group">
                            <input type="text" id="url" value="<?php echo $geteditsmsapi->url; ?>" name="url" required="" class="form-control" placeholder="Enter URL">

                        </div>
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        
                    </div>

                    <hr style="border:1px dashed #eaedf1;width: 100%;">


                    <div class="form-group col-md-6 col-xs-12">
                        <label class="col-md-4 col-xs-12 control-label" for="pin_password">Mobile Parameter</label>

                        <div class="col-md-7 col-xs-11 input-group">
                            <input required="" type="text" value="<?php echo $geteditsmsapi->mobile_par; ?>" id="name" required="" name="mobile_par" class="form-control forn_control12" placeholder="API Mobile Parameter" aria-required="true">


                        </div>
                    </div>




                    <div class="form-group col-md-6 col-xs-12">
                        <label class="col-md-4 col-xs-12 control-label" for="pin_password" required="">Message Parameter</label>

                        <div class="col-md-7 col-xs-11 input-group">
                            <input required="" type="text" value="<?php echo $geteditsmsapi->msg_par; ?>" id="api_url" name="message_par" class="form-control forn_control12" placeholder="API Message Parameter" aria-required="true">


                        </div>
                    </div>

                    <hr style="border:1px dashed #eaedf1;width: 100%;">


                    <div class="form-group col-md-6 col-xs-12">
                        <label class="col-md-4 col-xs-12 control-label" for="pin_password" required="">Message</label>

                        <div class="col-md-7 col-xs-11 input-group">
                            <textarea class="form-control" name="message"><?php echo $geteditsmsapi->msg; ?></textarea>
                        </div>
                    </div>
                    
                    
                    <div class="form-group col-md-6 col-xs-12">
                         <label class="col-md-4 col-xs-12 control-label" for="pin_password">Welcome Message</label>

                        <div class="col-md-7 col-xs-11 input-group">
                            <textarea class="form-control" name="welcome_message" required=""><?php echo $geteditsmsapi->welcome_msg; ?></textarea>
                        </div>
                    </div>
                    

                    <hr style="border:1px dashed #eaedf1;width: 100%;">





                </fieldset>


                <div class="form-group form-actions button_margin123">
                    <div class="col-md-12">
                        <center><button type="submit" name="updatesmsapi" class="btn btn-sm btn-primary sub123"><i class="fa fa-arrow-right"></i> Submit</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button></center>
                    </div>
                </div>
            </form>

        </div> 

        
        <?php else:?>
        
        


        <div class="add_but_click">

            <form id="form-validation" action="" method="post" class="form-horizontal" enctype="multipart/form-data" data-parsley-validate>
                <fieldset>



                    <div class="form-group col-md-6 col-xs-12">
                        <label class="col-md-4 col-xs-12 control-label" for="pin_password">Name</label>

                        <div class="col-md-7 col-xs-11 input-group">
                            <input required="" type="text" value="" id="name" name="name" class="form-control forn_control12" placeholder="Enter name" aria-required="true">


                        </div>
                    </div>
<?php if ($_SESSION['b2b_kpr_rech_user_type'] == "0"): ?>

<!--                        <div class="form-group col-md-6 col-xs-12">
                            <label class="col-md-4 col-xs-12 control-label" for="pin_password">Select User</label>

                            <div class="col-md-7 col-xs-12">
                                <select required="" id="user_type" name="add_user_sms" class="form-control val_select">
                                    <option value="">Please select</option>
                                        <?php //foreach ($getb2buser_sms as $sms_user) :  ?>
                                     <option value="<?php //echo $sms_user['id']; ?>"><?php //echo $sms_user['firstname'].' '.$sms_user['lastname']; ?></option>
                                        <?php //endforeach;?>
                                   
                                  
                                </select>
                            </div>
                        </div>-->
<?php endif; ?>
                    <hr style="border:1px dashed #eaedf1;width: 100%;">

                    <div class="form-group col-md-6 col-xs-12">
                        <label class="col-md-4 col-xs-12 control-label" for="pin_password">URL</label>

                        <div class="col-md-7 col-xs-11 input-group">
                            <input type="text" id="url" name="url" required="" class="form-control" placeholder="Enter URL">

                        </div>
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        
                    </div>

                    <hr style="border:1px dashed #eaedf1;width: 100%;">


                    <div class="form-group col-md-6 col-xs-12">
                        <label class="col-md-4 col-xs-12 control-label" for="pin_password">Mobile Parameter</label>

                        <div class="col-md-7 col-xs-11 input-group">
                            <input required="" type="text" value="" id="name" required="" name="mobile_par" class="form-control forn_control12" placeholder="API Mobile Parameter" aria-required="true">


                        </div>
                    </div>




                    <div class="form-group col-md-6 col-xs-12">
                        <label class="col-md-4 col-xs-12 control-label" for="pin_password" required="">Message Parameter</label>

                        <div class="col-md-7 col-xs-11 input-group">
                            <input required="" type="text" value="" id="api_url" name="message_par" class="form-control forn_control12" placeholder="API Message Parameter" aria-required="true">


                        </div>
                    </div>

                    <hr style="border:1px dashed #eaedf1;width: 100%;">


                    <div class="form-group col-md-6 col-xs-12">
                        <label class="col-md-4 col-xs-12 control-label" for="pin_password" required="">Message</label>

                        <div class="col-md-7 col-xs-11 input-group">
                            <textarea class="form-control" name="message"></textarea>
                        </div>
                    </div>
                    
                    
                    <div class="form-group col-md-6 col-xs-12">
                         <label class="col-md-4 col-xs-12 control-label" for="pin_password">Welcome Message</label>

                        <div class="col-md-7 col-xs-11 input-group">
                            <textarea class="form-control" name="welcome_message" required=""></textarea>
                        </div>
                    </div>
                    

                    <hr style="border:1px dashed #eaedf1;width: 100%;">





                </fieldset>


                <div class="form-group form-actions button_margin123">
                    <div class="col-md-12">
                        <center><button type="submit" name="addsmsapi" class="btn btn-sm btn-primary sub123"><i class="fa fa-arrow-right"></i> Submit</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button></center>
                    </div>
                </div>
            </form>

        </div> 
        
        <?php endif;?>

<!--        <script>
            $(document).ready(function() {
                $(".add_but1").click(function() {
                    $(".add_but_click").show();
                    $(".table123").hide();
                });

            });
        </script>
        <script>
            $(document).ready(function() {
                $(".sub123").click(function() {
                    $(".add_but_click").hide();
                    $(".table123").show();
                });

            });
        </script>-->

        <style>
            .table thead > tr > th 
            {
                font-size: 13px;
                font-weight: 600;
            }
            .but_padding
            {
                padding:7px;
            }
            table {
                overflow-x: auto;
                display: block;
            }
            @media only screen and (min-width:300px) and (max-width: 320px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }


            @media only screen and (min-width:321px) and (max-width: 360px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }
            @media only screen and (min-width:361px) and (max-width: 414px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }

            @media only screen and (min-width:768px) and (max-width: 768px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }

            @media only screen and (min-width: 769px) and (max-width: 960px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }
            @media only screen and (min-width: 961px) and (max-width: 1024px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }

            @media only screen and (min-width:1025px) and (max-width: 1280px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }

            @media only screen and (min-width:1440px) and (max-width: 1440px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }

                @media only screen and (min-width:1441px) and (max-width: 1920px)
                {
                }
            </style>

        </div>
        <!-- END Responsive Partial Block -->
    </div>

