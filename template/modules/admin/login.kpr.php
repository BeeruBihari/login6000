 <?php
     $o__admin = new admin();
     $url =  $_SERVER["HTTP_HOST"];
$uell = explode(".",$url);
$getdata = $o__admin->getdatabyurl('http://'.$url);


     ?>
 <body>
    
        <!-- Login Background -->
        <div id="login-background" style="    background: #2d2d2d;">
            <!-- For best results use an image with a resolution of 2560x400 pixels (prefer a blurred image for smaller file size) -->
            <img src="uploads/logo4.png" alt="Login Background" class="animation-pulseSlow">
        </div>
        <!-- END Login Background -->

        <!-- Login Container -->
        <div id="login-container" class="animation-fadeIn" >
            <!-- Login Title -->
            <div class="login-title text-center">
                
                <img src="<?php if($getdata->logo){echo FAUrlupload.'/b2b_user_logo/'.$getdata->logo;}else{ echo 'uploads/logo.png';} ?>" style="margin-top:-8px;width: 300px;" alt="">
            </div>
            <!-- END Login Title -->

            <!-- Login Block -->
            <div class="block push-bit">
                <!-- Login Form -->
                <form action="" method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
                    <?php flash( 'b2b_login' ); ?>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                <input type="text" id="login-email" name="admin_username" class="form-control input-lg" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="login-password" name="admin_password" class="form-control input-lg" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-4">
                            <label class="switch switch-primary" data-toggle="tooltip" title="Remember Me?">
                                <input type="checkbox" id="login-remember-me" name="login-remember-me" checked>
                                <span></span>
                            </label>
                        </div>
                        <div class="col-xs-8 text-right">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Login to Dashboard</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <a href="javascript:void(0)" id="link-reminder-login"><small>Forgot password?</small></a>
                        </div>
                    </div>
                </form>
                <!-- END Login Form -->

                <!-- Reminder Form -->
                <form action="login.html#reminder" method="post" id="form-reminder" class="form-horizontal form-bordered form-control-borderless display-none">
                    <div class="form-group forgot_mobno">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-phone_alt"></i></span>
                                <input type="text" id="forgot_mobno" name="reminder-email" class="form-control input-lg" placeholder="Mobile Number">
                                <span class="mob_avail"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group otp_verify" style="display: none;">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-send"></i></span>
                                <input type="text" id="reminder-email" name="reminder-email" class="form-control input-lg" placeholder="Mobile Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" id="btn_send_otp" disabled class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Send OTP</button>
                            <button type="button" id="btn_verify_otp" class="btn btn-sm btn-primary" style="display: none;"><i class="fa fa-angle-right"></i> Verify OTP</button>
                            <button type="submit" id="btn_change_pwd" class="btn btn-sm btn-primary" style="display: none;"><i class="fa fa-angle-right"></i> Change Password</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <small>Did you remember your password?</small> <a href="javascript:void(0)" id="link-reminder"><small>Login</small></a>
                        </div>
                    </div>
                </form>
                <script>
                    $(function () {
                        $('#forgot_mobno').onkeyup(function () {
                            var mob = $(this).val();
                            if (mob.length == '10') {
                                //alert(ss); exit();
                                $.ajax({
                                    type: "POST",
                                    url: "ajax/forgot_pwd.php",
                                    data: {mobno: mob},
                                    success: function (data) {
                                        $('#btn_send_otp').removeAttr('disbaled');
                                    }
                                });
                            }
                            else {
                                $('.city_select').attr('display', 'none');
                            }

                        });
                        $('#btn_send_otp').click(function () {
                            $('#forgot_mobno').val();
                        });
                    });
                </script>

                <!-- END Reminder Form -->

                <!-- Register Form
                <form action="login.html#register" method="post" id="form-register" class="form-horizontal form-bordered form-control-borderless display-none">
                    <div class="form-group">
                        <div class="col-xs-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                <input type="text" id="register-firstname" name="register-firstname" class="form-control input-lg" placeholder="Firstname">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <input type="text" id="register-lastname" name="register-lastname" class="form-control input-lg" placeholder="Lastname">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                <input type="text" id="register-email" name="register-email" class="form-control input-lg" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="register-password" name="register-password" class="form-control input-lg" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="register-password-verify" name="register-password-verify" class="form-control input-lg" placeholder="Verify Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-6">
                            <a href="#modal-terms" data-toggle="modal" class="register-terms">Terms</a>
                            <label class="switch switch-primary" data-toggle="tooltip" title="Agree to the terms">
                                <input type="checkbox" id="register-terms" name="register-terms">
                                <span></span>
                            </label>
                        </div>
                        <div class="col-xs-6 text-right">
                            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Register Account</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <small>Do you have an account?</small> <a href="javascript:void(0)" id="link-register"><small>Login</small></a>
                        </div>
                    </div>
                </form>-->
                <!-- END Register Form -->
            </div>