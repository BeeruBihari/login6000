   <!-- <script src="<?php echo Fjs; ?>/pages/index2.js"></script>
        <script>$(function(){ Index2.init(); });</script>
       --> 
<?php
include 'include/base.php';
?>
        <script src="<?php echo Fjs; ?>/helpers/gmaps.min.js"></script>


<script type="text/javascript">
    function showAndroidToast(ordno,amount,cashback,name,mobile,email) {
      // alert('');
        Android.showToast(ordno,amount,cashback,name,mobile,email);
    }
    
    function dataconnection() {
       // alert('');
       mpose.mposeDeviceIntl();
    }
</script>
<div id="page-content">
                        <!-- Dashboard 2 Header -->

                        <div class="content-header">
                            <?php flash( 'b2b_login' ); ?>
                            <ul class="nav-horizontal text-center">
                                <li class="active">

                                    <a href="javascript:void(0)"><i class="fa fa-home"></i> Home</a>
                                </li>
                                
                                <li>
                                    <a href="javascript:void(0)" onClick="showAndroidToast(3,10,0,'nar',8200759374,'info@bizz.website')"><i class="fa fa-mobile" aria-hidden="true"></i> Total Recharge</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"  ><i class="fa fa-credit-card" aria-hidden="true"></i>
Total Balance</a>
                                </li>
                                
                                
                               
                                
                                 <li>
                                    <a href="javascript:void(0)" onClick="dataconnection()"><i class="fa fa-ticket" aria-hidden="true"></i>Total Users</a>
                                </li>
                                
                                <li>
                                    <a href="javascript:void(0)" class="mnb"><i class="fa fa-cogs"></i>Setting</a>
                                </li>
                            </ul>

                        </div>
                        <!-- END Dashboard 2 Header -->

                        <!-- Dashboard 2 Content -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Web Server Block -->
<!--                                <div class="block full">-->
<!--                                    <!-- Web Server Title -->
<!--                                    <div class="block-title">-->
<!--                                        <div class="block-options pull-right">-->
<!--                                            <span id="dash-chart-live-info" class="label label-primary">%</span>-->
<!--                                            <span class="label label-danger animation-pulse">CPU Load</span>-->
<!--                                        </div>-->
<!--                                        <h2><strong>Web</strong> Server #1</h2>-->
<!--                                    </div>-->
<!--                                    <!-- END Web Server Title -->
<!---->
<!--                                    <!-- Web Server Content -->
<!--                                    <!-- Flot Charts (initialized in js/pages/index2.js), for more examples you can check out http://www.flotcharts.org/ -->
<!--                                    <div id="dash-chart-live" class="chart">-->
<!--                                        -->
<!--                                        -->
<!--                                        -->
<!--                                    </div>-->
<!--                                    <!-- END Web Server Content -->
<!--                                </div>-->
                                <!-- END Web Server Block -->

                                <!-- Mini Sales Charts Block -->
                                <!-- Jquery Sparkline (initialized in js/pages/index2.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                                <div class="block full">
                                    <!-- Mini Sales Charts Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <div class="btn-group btn-group-sm">
                                                <a href="javascript:void(0)" class="btn btn-alt btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                                    <li>
                                                        <a href="javascript:void(0)"><i class="fa fa-check pull-right"></i> This Week</a>
                                                        <a href="javascript:void(0)">This Month</a>
                                                        <a href="javascript:void(0)">This Year</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h2><strong>Sales</strong> This Week</h2>
                                    </div>
                                    <!-- END Mini Sales Charts Title -->

                                    <!-- Mini Sales Charts Content -->
                                    <div class="row text-center">
                                        <div class="col-sm-4">
                                            <span id="mini-sales1">2,5,6,7,10,16,18</span>
                                            <h4>Recharge</h4>
                                        </div>
                                        <div class="col-sm-4">
                                            <span id="mini-sales2">5,6,8,3,11,15,35</span>
                                            <h4>Shopping</h4>
                                        </div>
                                        <div class="col-sm-4">
                                            <span id="mini-sales3">7,8,9,8,8,10,12</span>
                                            <h4>Booking</h4>
                                        </div>
                                    </div>
                                    <!-- END Mini Sales Charts Content -->
                                </div>
                                <!-- END Mini Sales Charts Block -->

                                <!-- Mini Earnings Charts Block -->
                                <!-- Jquery Sparkline (initialized in js/pages/index2.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                                <div class="block full">
                                    <!-- Mini Earnings Charts Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <div class="btn-group btn-group-sm">
                                                <a href="javascript:void(0)" class="btn btn-alt btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                                    <li>
                                                        <a href="javascript:void(0)"><i class="fa fa-check pull-right"></i> This Week</a>
                                                        <a href="javascript:void(0)">This Month</a>
                                                        <a href="javascript:void(0)">This Year</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h2><strong>Earnings</strong> This Week</h2>
                                    </div>
                                    <!-- END Mini Earnings Charts Title -->

                                    <!-- Mini Earnings Charts Content -->
                                    <div class="row text-center">
                                        <div class="col-sm-4">
                                            <span id="mini-earnings1">200,500,600,700,1000,1600,1800</span>
                                            <h4>Recharge</h4>
                                        </div>
                                        <div class="col-sm-4">
                                            <span id="mini-earnings2">500,600,800,300,1100,1500,3500</span>
                                            <h4>Shopping</h4>
                                        </div>
                                        <div class="col-sm-4">
                                            <span id="mini-earnings3">700,800,900,800,800,1000,1200</span>
                                            <h4>Booking</h4>
                                        </div>
                                    </div>
                                    <!-- END Mini Earnings Charts Content -->
                                </div>
                                <!-- END Mini Earnings Charts Block -->

                                <!-- Quick Post Block -->
                                
                                
                                
                                <!-- END Quick Post Block -->
                            </div>
                            <div class="col-md-6">
                                <!-- Timeline Block -->
                                <div class="block">
                                    <!-- Timeline Title -->
                                    <div class="block-title">
<!--                                        <div class="block-options pull-right">-->
<!--                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>-->
<!--                                        </div>-->
                                        <h2><strong>Profile </strong>Time Line</h2>
                                    </div>
                                    <!-- END Timeline Title -->

                                    <!-- Timeline Content -->
                                    <div class="block-content-full">
                                        <div class="timeline">
                                            <ul class="timeline-list">
                                                <li class="active">
                                                    <div class="timeline-icon"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                    <div class="timeline-time"><small><?php echo $user_det->date; ?></small></div>
                                                    <div class="timeline-content button_margin123">
                                                        <p class="push-bit"><a href="#"><strong><?php echo $_SESSION['b2b_kpr_rech_name']; ?></strong></a></p>
                                                        <p class="push-bit">Welcome to KP B2B Portal</p>


                                                    </div>
                                                </li>
<!--                                                <li class="active">-->
<!--                                                    <div class="timeline-icon"><i class="fa fa-star" aria-hidden="true"></i></div>-->
<!--                                                    <div class="timeline-time"><small>5 min ago</small></div>-->
<!--                                                    <div class="timeline-content">-->
<!--                                                        <p class="push-bit"><a href="#"><strong>Administrator</strong></a></p>-->
<!--                                                        <strong>Free courses</strong> for all our customers at A1 Conference Room - 9:00 <strong>am</strong> tomorrow!-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                                <li class="active">-->
<!--                                                    <div class="timeline-icon"><i class="fa fa-star" aria-hidden="true"></i></div>-->
<!--                                                    <div class="timeline-time"><small>3 hours ago</small></div>-->
<!--                                                   <div class="timeline-content">-->
<!--                                                        <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Ella Winter</strong></a></p>-->
<!--                                                        <p class="push-bit"><strong>Happy Hour!</strong> Free drinks at <a href="javascript:void(0)">Cafe-Bar</a> all day long!</p>-->
<!--                                                        <div id="gmap-timeline-dash2" class="gmap" style="height: 220px;"></div>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                                <li class="active">-->
<!--                                                    <div class="timeline-icon"><i class="fa fa-star" aria-hidden="true"></i></div>-->
<!--                                                    <div class="timeline-time"><small>yesterday</small></div>-->
<!--                                                    <div class="timeline-content">-->
<!--                                                        <p class="push-bit"><a href="#"><strong>Patricia Woods</strong></a></p>-->
<!--                                                        <p class="push-bit">Today I had the lunch of my life! It was delicious!</p>-->
<!--                                                        <div class="row push">-->
<!--                                                            <div class="col-sm-6 col-md-4">-->
<!--                                                                <a href="#" data-toggle="lightbox-image">-->
<!--                                                                    <img src="--><?php //echo Fimages; ?><!--/placeholders/photos/photo23.jpg" alt="image">-->
<!--                                                                </a>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                                <li class="active">-->
<!--                                                    <div class="timeline-icon"><i class="fa fa-star" aria-hidden="true"></i></div>-->
<!--                                                    <div class="timeline-time"><small>2 days ago</small></div>-->
<!--                                                    <div class="timeline-content">-->
<!--                                                        <p class="push-bit"><a href="#"><strong>Administrator</strong></a></p>-->
<!--                                                        To thank you all for your support we would like to let you know that you will receive free feature updates for life! You are awesome!-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                                <li class="active">-->
<!--                                                    <div class="timeline-icon"><i class="fa fa-star" aria-hidden="true"></i></div>-->
<!--                                                    <div class="timeline-time"><small>1 week ago</small></div>-->
<!--                                                    <div class="timeline-content">-->
<!--                                                        <p class="push-bit"><a href="#"><strong>Nicole Ward</strong></a></p>-->
<!--                                                        <p class="push-bit">Consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate.</p>-->
<!--                                                        Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                                <li class="text-center">-->
<!--                                                    <a href="javascript:void(0)" class="btn btn-xs btn-default">View more..</a>-->
<!--                                                </li>-->
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- END Timeline Content -->
                                </div>
                                <!-- END Timeline Block -->
                            </div>
                            
                            <style>
                                  .button_margin123
                                {
                                   margin-bottom:75px;
                                }
                                .home1
                                {
                                    color:#1bbae1;
                                }
                                .home2
                                {
                                    color:#f9fafc;
                                }
                                .home2:hover
                                {
                                    color:#1bbae1;
                                }
                                
                            </style>
                        </div>
                        <!-- END Dashboard 2 Content -->
                   
                    <!-- END Page Content -->
                    </div>