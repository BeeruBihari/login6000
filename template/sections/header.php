<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php
     $o__admin = new admin();
     $url =  $_SERVER["HTTP_HOST"];
$uell = explode(".",$url);

$getdata = $o__admin->getdatabyurl('http://'.$url);

     ?>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>B2B</strong>Portal</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->

            <!-- Page Container -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available #page-container classes:

                '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

                'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
                'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
                'sidebar-mini sidebar-visible-lg-mini'          for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
                'sidebar-mini sidebar-visible-lg'               for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)

                'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
                'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

                'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

                'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

                'style-alt'                                     for an alternative main style (without it: the default style)
                'footer-fixed'                                  for a fixed footer (without it: a static footer)

                'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

                'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
                'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

                'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links
            -->
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                <!-- Alternative Sidebar -->
                <div id="sidebar-alt">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-alt-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            

                            <!-- Chat Talk -->
                            <div class="chat-talk display-none">
                                <!-- Chat Info -->
                                <div class="chat-talk-info sidebar-section">
                                    <button id="chat-talk-close-btn" class="btn btn-xs btn-default pull-right">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <img src="<?php echo Fimages; ?>/avatar12.jpg" alt="avatar" class="img-circle pull-left">
                                    <strong>John</strong> Doe
                                </div>
                                <!-- END Chat Info -->

                                <!-- Chat Messages -->
                                <ul class="chat-talk-messages">
                                    <li class="text-center"><small>Yesterday, 18:35</small></li>
                                    <li class="chat-talk-msg animation-slideRight">Hey admin?</li>
                                    <li class="chat-talk-msg animation-slideRight">How are you?</li>
                                    <li class="text-center"><small>Today, 7:10</small></li>
                                    <li class="chat-talk-msg chat-talk-msg-highlight themed-border animation-slideLeft">I'm fine, thanks!</li>
                                </ul>
                                <!-- END Chat Messages -->

                                <!-- Chat Input -->
                                <form action="index.html" method="post" id="sidebar-chat-form" class="chat-form">
                                    <input type="text" id="sidebar-chat-message" name="sidebar-chat-message" class="form-control form-control-borderless" placeholder="Type a message..">
                                </form>
                                <!-- END Chat Input -->
                            </div>
                            <!--  END Chat Talk -->
                            <!-- END Chat -->

                            <!-- Activity -->
                            <a href="index.php?action=chat" class="sidebar-title ">
                                <i class="fa fa-globe pull-right"></i> <strong>Live</strong>Chat
                            </a>
                            <div class="sidebar-section">
                                <div class="alert alert-danger alert-alt">
                                    <small>just now</small><br>
                                    <i class="fa fa-thumbs-up fa-fw"></i> Upgraded to Pro plan
                                </div>
                                <div class="alert alert-info alert-alt">
                                    <small>2 hours ago</small><br>
                                    <i class="gi gi-coins fa-fw"></i> You had a new sale!
                                </div>
                                <div class="alert alert-success alert-alt">
                                    <small>3 hours ago</small><br>
                                    <i class="fa fa-plus fa-fw"></i> <a href="#"><strong>John Doe</strong></a> would like to become friends!<br>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-check"></i> Accept</a>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-times"></i> Ignore</a>
                                </div>
                                <div class="alert alert-warning alert-alt">
                                    <small>2 days ago</small><br>
                                    Running low on space<br><strong>18GB in use</strong> 2GB left<br>
                                    <a href="#" class="btn btn-xs btn-primary"><i class="fa fa-arrow-up"></i> Upgrade Plan</a>
                                </div>
                            </div>
                            <!-- END Activity -->

                            <!-- Messages -->
                            <a href="#" class="sidebar-title">
                                <i class="fa fa-envelope pull-right"></i> <strong>Messages</strong>UI (5)
                            </a>
                            <div class="sidebar-section">
                                <div class="alert alert-alt">
                                    Debra Stanley<small class="pull-right">just now</small><br>
                                    <a href="#"><strong>New Follower</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Sarah Cole<small class="pull-right">2 min ago</small><br>
                                    <a href="#"><strong>Your subscription was updated</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Bryan Porter<small class="pull-right">10 min ago</small><br>
                                    <a href="#"><strong>A great opportunity</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Jose Duncan<small class="pull-right">30 min ago</small><br>
                                    <a href="#"><strong>Account Activation</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Henry Ellis<small class="pull-right">40 min ago</small><br>
                                    <a href="#"><strong>You reached 10.000 Followers!</strong></a>
                                </div>
                            </div>
                            <!-- END Messages -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Alternative Sidebar -->

                <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="#" class="sidebar-brand">
                                <i class="gi gi-flash"></i><span class="sidebar-nav-mini-hide"><strong><?php echo $getdata->cmpy_name; ?></strong></span>
                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <a href="#">
                                        <img src="<?php if($getdata->logo){echo FAUrlupload.'/b2b_user_logo/'.$getdata->logo;}else{ echo 'http://login.teleqwik.com/uploads/b2b_user_logo/adhaar_1514051516.png';} ?>" class="img-responsive" alt="Logo" style="height:67px;display:inline-block;">
                                    </a>
                                </div>
                                <div class="sidebar-user-name"><?php echo $_SESSION['b2b_kpr_rech_name']; ?></div>
                                <div class="sidebar-user-links">
                                    <a href="index.php?action=add_user&id=<?php echo $_SESSION['b2b_kpr_rech_id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
                                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                    <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>
                                    <a href="index.php?action=logout" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                                </div>
                            </div>
                            <!-- END User Info -->

                            <!-- Theme Colors -->
                            <!-- Change Color Theme functionality can be found in js/app.js - templateOptions() -->
                            
                            
                            <!-- END Theme Colors -->

                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="index.php"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                                </li>
                                <?php if($_SESSION['b2b_kpr_rech_id'] == '1'): ?>
                               
                                <li>
                                    
                                    <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');this.blur();">
                                    <i class="gi gi-chat sidebar-nav-icon"></i>Live Chat
                                   
                                </a>
                                
                                </li>
                                 <?php endif; ?>
                                <!-- <li>
                                        <a data-url="index.php?action=recharge" class="clicklink"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Recharge</span></a>
                                    </li>-->
                                <li>
                                    <a href="index.php?action=add_user&id=<?php echo $_SESSION['b2b_kpr_rech_id']; ?>"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Profile</span></a>
                                </li>
 <?php if($_SESSION['b2b_kpr_rech_user_type']=="0") : ?>
                                <li>
                                   <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-show_lines sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Services</span></a>
                                    <ul>
                                     
                                     <?php if($_SESSION['b2b_kpr_rech_user_type'] == '0'): ?>
                                     <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-bus sidebar-nav-icon"></i>Bus</a>
                                            <ul>
                                                <li>
                                            <a href="index.php?action=bus_form">Bus Booking</a>
                                        </li>
                                        
                                            </ul>
                                        </li>   
                                        <?php endif; ?>
                                   
                                    <li>
                                        <a href="index.php?action=recharge"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Recharge</span></a>
                                    </li>
                                    
                                    <li>
                                            <a href="index.php?action=landline"><i class="gi gi-phone_alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Landline</span></a>
                                    </li>
                                    <li>
                                            <a href="index.php?action=electricity"><i class="gi gi-lightbulb sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Electricity</span></a>
                                        </li>
                                    <li>
                                            <a href="index.php?action=broadband"><i class="gi gi-wifi sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Broadband</span></a>
                                    </li>
                                    
                                      <?php if($_SESSION['b2b_kpr_rech_id'] == '1'): ?>
                                      
                                      <li>
                                            <a href="index.php?action=money_box"><i class="fa fa-money sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">DMT</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=book_flight"><i class="gi gi-airplane sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Flight Booking</span></a>
                                    </li>
                                     <?php endif; ?>
                                 </ul>
                                    
                                    
                                    
                                </li>
                                 <?php if($_SESSION['b2b_kpr_rech_id'] == '1'): ?>
                                 <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-notes sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Bill</span></a>
                                    <ul>
                                        
                                        <li>
                                            <a href="index.php?action=landline">Landline</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=electricity">Electricity</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=gas">Gas</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=insurance">Insurance</a>
                                        </li>
                                         <li>
                                            <a href="index.php?action=broadband">Broadband</a>
                                        </li>
                                    </ul>
                                </li>
                                 <?php endif; ?>
                                
                                
                                <?php endif; ?>
                                
                                
                                
                                
                                
                                
                                
        
                               
                              <!--   <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-notes sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">mPose</span></a>
                                    <ul>
                                        <li>
                                            <a href="#" onClick="mposeDeviceInt()">Device Initialization</a>
                                        </li>
                                        <li>
                                            <a href="#">Cash</a>
                                        </li>
                                        <li>
                                            <a href="#">Withdraw</a>
                                        </li>
                                        <li>
                                            <a href="#">Payment</a>
                                        </li>
                                        
                                    </ul>
                                </li> -->
                                
                                <?php if($_SESSION['b2b_kpr_rech_user_type']=="0" || $_SESSION['b2b_kpr_rech_user_type']=="1" || $_SESSION['b2b_kpr_rech_user_type']=="2" || $_SESSION['b2b_kpr_rech_user_type']=="4" || $_SESSION['b2b_kpr_rech_user_type']=="5"): ?>
                                
                               
                              <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-user sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Member</span></a>
                                    <ul>
                                        <li>
                                            <a href="index.php?action=add_user">Add Member</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=view_user">View Member</a>
                                        </li>
                                        <?php 
                                        if($_SESSION['b2b_kpr_rech_user_type']=="0"){
                                            
                                       
                                        ?>
                                        <li>
                                            <a href="index.php?action=view_user_mob">User Enquiry</a>
                                        </li>

                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                                  
                                
                                  <?php endif; ?>
                                
                                <!--Add Group --->
                                
                                
                                 <?php if($_SESSION['b2b_kpr_rech_user_type']=="0" || $_SESSION['b2b_kpr_rech_user_type']=="1" || $_SESSION['b2b_kpr_rech_user_type']=="2" || $_SESSION['b2b_kpr_rech_user_type']=="4" || $_SESSION['b2b_kpr_rech_user_type']=="5"): ?>
                                
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-user sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Group</span></a>
                                    <ul>
                                        <li>
                                            <a href="index.php?action=add_group">Add Group</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=view_group">View Group</a>
                                        </li>

                                        
                                    </ul>
                                </li>
                                  
                                  <?php endif; ?>


                                <?php //if($_SESSION['b2b_kpr_rech_user_type']=="0" || $_SESSION['b2b_kpr_rech_user_type']=="4" || $_SESSION['b2b_kpr_rech_user_type']=="5"): ?>
                                <!-- <li>
                                        <a href="index.php?action=add_commission"><i class="gi gi-airplane sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Commission</span></a>
                                    </li> -->
									<li>
                                        <a href="index.php?action=livetrans"><i class="gi gi-airplane sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Live Transaction</span></a>
                                    </li>
                                <?php //endif; ?>
                                    <?php if($_SESSION['b2b_kpr_rech_user_type']=="0"): ?>
                                   <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-notes sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Admin Utility</span></a>
                                    <ul>
                                        <li>
                                            <a href="index.php?action=admin_ladger">Admin Ladger</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=admin_daybook">Admin DayBook</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=admin_api_daybook">Admin API DayBook</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=send_msg">Send Message</a>
                                        </li>
                                        
                                    </ul>
                                </li> 
                                
                                
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-notes sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">API Configration</span></a>
                                    <ul>
                                        <li>
                                            <a href="index.php?action=add_recharge_api">Add Recharge API</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=add_sms_api">Add SMS API</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=view_sms_api">View SMS API</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=api_switch">API Switch</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=set_sms_prefix">Set SMS Prefix</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=user_wise_api">User Wise API Switch</a>
                                        </li>
                                        
                                        
                                    </ul>
                                </li> 
                                  <?php endif; ?>
                              
<?php //echo $_SESSION['b2b_kpr_rech_user_type']; ?>
<?php if( $_SESSION['b2b_kpr_rech_user_type']== "0" || $_SESSION['b2b_kpr_rech_user_type']=="2" || $_SESSION['b2b_kpr_rech_user_type']=="3" || $_SESSION['b2b_kpr_rech_user_type']=="1" || $_SESSION['b2b_kpr_rech_user_type']=="4" || $_SESSION['b2b_kpr_rech_user_type']=="5"): ?>
                                    <li>
                                        <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-money sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Payment Request</span></a>
                                        <ul>
                                            <?php if( $_SESSION['b2b_kpr_rech_user_type']=="1" || $_SESSION['b2b_kpr_rech_user_type']=="2" || $_SESSION['b2b_kpr_rech_user_type']=="3" || $_SESSION['b2b_kpr_rech_user_type']=="5"): ?>
                                            <li>
                                                <a href="index.php?action=add_money_request">Add Payment Request</a>
                                            </li>
                                            <?php endif; ?>
                                            <li>
                                                <?php if( $_SESSION['b2b_kpr_rech_user_type']=="1" || $_SESSION['b2b_kpr_rech_user_type']=="2" || $_SESSION['b2b_kpr_rech_user_type']=="3" || $_SESSION['b2b_kpr_rech_user_type']=="5"): ?>
                                                <a href="index.php?action=view_money_request">View Payment Request</a>
                                                <?php endif; ?>
                                                <?php if( $_SESSION['b2b_kpr_rech_user_type']=="1" || $_SESSION['b2b_kpr_rech_user_type']=="2"  || $_SESSION['b2b_kpr_rech_user_type']=="4"  || $_SESSION['b2b_kpr_rech_user_type']=="0" || $_SESSION['b2b_kpr_rech_user_type']=="5"): ?>
                                                        <a href="index.php?action=respond_money_request">Balance Request</a>
                                                <?php endif; ?>
                                            </li>


                                        </ul>
                                    </li>

                                     <?php endif; ?>
                                   
                                    <!-------add detail---->
                                    <?php if($_SESSION['b2b_kpr_rech_user_type']=="0"): ?>
                                    <li>
                                        <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-credit_card sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">mPOS</span></a>
                                      <ul>
                                        <?php if($_SESSION['b2b_kpr_rech_user_type']=="0"){ ?>
                                         <li> <a href="index.php?action=m_add_device">Add Device</a></li>
                                        
                                         <li> <a href="index.php?action=m_manage_device">View Device</a></li>
                                          <?php
                                        }
                                        else{
                                            ?>
                                            <li> <a href="index.php?action=m_manage_device_user">View Device</a></li>
                                            <?php
                                        }
                                         ?>
                                       </ul>
                                     </li>
                                     <?php endif; ?>
                                    <?php if($_SESSION['b2b_kpr_rech_user_type']=="0"): ?>
                                    <li>
                                     <a href="index.php?action=analitics"><i class="gi gi-star sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Analitics</span></a>
                                     </li>
                                     
                                      <li>
                                     <a href="#"><i class="gi gi-star sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Cab Booking</span></a>
                                     </li>
                                    
                                     
                                    
                                      <li>
                                        <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-conversation sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">SMS</span></a>
                                      <ul>
 
                                         <li> <a href="index.php?action=long_code">Long Code</a></li>
                                         <li> <a href="index.php?action=short_code">Short Code</a></li>
                                       </ul>
                                     </li>
                                     
                                       <?php endif; ?>
                                     <?php if($_SESSION['b2b_kpr_rech_user_type']=="0"  || $_SESSION['b2b_kpr_rech_user_type'] == "4"): ?>
                                      <li>
                                        <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-conversation sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">API Config</span></a>
                                      <ul>
                                        <?php if($_SESSION['b2b_kpr_rech_id'] == '1'): ?>
                                         <li> <a href="index.php?action=mobile_utility_api_configration">Mobile/Utility API Config</a></li>
                                          <?php endif; ?>
                                         <li> <a href="index.php?action=view_mobile_utility_api_configration">View Mobile/Utility API Config</a></li>
                                        <!-- <li>
                                            <a href="index.php?action=api_switch">API Switch</a>
                                        </li>-->
                                        <li>
                                            <a href="index.php?action=add_sms_api">Add SMS API</a>
                                        </li>
                                         <li>
                                            <a href="index.php?action=view_sms_api">View SMS API</a>
                                        </li>
                                       </ul>
                                     </li>
                                      <?php endif; ?>
                                      
                                      <?php if($_SESSION['b2b_kpr_rech_user_type']=="0"): ?>
                                      <li>
                                        <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-notes sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Marketing</span></a>
                                      <ul>
 
                                         <li> <a href="index.php?action=m_adsense">Adsense</a></li>
                                         <li> <a href="index.php?action=m_notification">Notification</a></li>
                                         <li> <a href="index.php?action=m_bulk_sms">Bulk SMS</a></li>
                                         <li> <a href="index.php?action=m_email">Email </a></li>
                                         <li> <a href="index.php?action=m_mobile_notification">Mobile Notification</a></li>
                                       </ul>
                                     </li>
                                     
                                     <li>
                                        <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-notes sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Ad Management</span></a>
                                      <ul>
 
                                         <li> <a href="index.php?action=add_ad">Add Ad</a></li>
                                         <li> <a href="index.php?action=manage_ad">Manage Ad</a></li>
                                        
                                       </ul>
                                     </li>
                                     
                                      <li>
                                        <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-notes sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Payment Gateway</span></a>
                                      <ul>
 
                                         <li> <a href="index.php?action=p_add_payment_gateway">Add Payment Gateway</a></li>
                                         <li> <a href="index.php?action=p_view_payment_gateway">Manage Payment Gateway</a></li>
                                        
                                       </ul>
                                     </li>
                                     
                                     

                                    <?php endif; ?>
                                    <?php if( $_SESSION['b2b_kpr_rech_user_type']=="0" || $_SESSION['b2b_kpr_rech_user_type']=="4" || $_SESSION['b2b_kpr_rech_user_type']=="5" || $_SESSION['b2b_kpr_rech_user_type']=="1" || $_SESSION['b2b_kpr_rech_user_type']=="2" || $_SESSION['b2b_kpr_rech_user_type']=="3"): ?>
                                    <li>
                                        
                                         
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-notes sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Report</span></a>
                                    <ul>
                                        
                                        <?php if( $_SESSION['b2b_kpr_rech_user_type']=="0" || $_SESSION['b2b_kpr_rech_user_type']=="4" || $_SESSION['b2b_kpr_rech_user_type']=="5" || $_SESSION['b2b_kpr_rech_user_type']=="1" || $_SESSION['b2b_kpr_rech_user_type']=="2" || $_SESSION['b2b_kpr_rech_user_type']=="3"): ?>
                                        <li>
                                            <a href="index.php?action=report1">Transaction Report</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=user_daybook">Day Book</a>
                                        </li>
                                        
                                        <?php endif;?>
                                          <?php if( $_SESSION['b2b_kpr_rech_user_type']=="0"): ?>
                                          
                                        <li>
                                            <a href="index.php?action=report2">Refund Request Report</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=refund_status">Refund Status Report</a>
                                        </li>
                                        
                                      
                                        <li>
                                            <a href="index.php?action=recharge_detail_format">Recharge Detail Format</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=user_daybook">User DayBook</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=recharge_by_sms">Recharge By SMS</a>
                                        </li>
                                        
                                        
                                        
                                        <li>
                                            <a href="index.php?action=api_sms_report">API SMS Report</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=other_sms_report">Other SMS Report</a>
                                        </li>
                                       
                                        
                                          <li>
                                            <a href="index.php?action=recharge_detail">Recharge Detail</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=user_ladger">User Ladger</a>
                                        </li>
                                        
                                        <li>
                                            <a href="index.php?action=fund_transfer">Fund Transfer Statement</a>
                                        </li>
                                         <li>
                                            <a href="index.php?action=allreport">Commission Reports</a>
                                        </li>
										<li>
                                            <a href="index.php?action=commission_detail">Commission Detail</a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if( $_SESSION['b2b_kpr_rech_user_type']=="0" || $_SESSION['b2b_kpr_rech_user_type']=="4"): ?>
										
										<li>
                                            <a href="index.php?action=queue_rech">Recharge In Queue</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=refund_statement">Refund Statement</a>
                                        </li>
										<li>
                                            <a href="index.php?action=changestatus">Change Status Manually </a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=incomming_msg">Incomming Message</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=dmt_report">DMT Report</a>
                                        </li>
                                        
										<li>
                                            <a href="index.php?action=disputes">Disputes</a>
                                        </li>
										<li>
                                            <a href="index.php?action=disputes_pending">Disputes Pending</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=api_resp">API Response LOG</a>
                                        </li>
                                        
                                         <li>
                                            <a href="index.php?action=moneyrequest_report">Money Request Report</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=api_daybook">API DAY BOOK</a>
                                        </li>
                                        <li>
                                            <a href="index.php?action=menual_report">Manually API Report</a>
                                        </li>

                                        <li>
                                            <a href="index.php?action=sendsms_report">Send SMS</a>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                                <?php endif;?>
                                <?php if($_SESSION['b2b_kpr_rech_user_type']=="0" || $_SESSION['b2b_kpr_rech_user_type']=="4"): ?>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-notes sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Sell Product</span></a>
                                    <ul>

                                        <li> <a href="index.php?action=add_product">Add Product</a></li>
                                        <li> <a href="index.php?action=manage_product">Manage Product</a></li>
                                        <li> <a href="index.php?action=order_manage">Order Manage</a></li>

                                    </ul>
                                </li>
                                <?php endif;?>
                                <?php if($_SESSION['b2b_kpr_rech_user_type']=="0" || $_SESSION['b2b_kpr_rech_user_type']=="4" || $_SESSION['b2b_kpr_rech_user_type']=="6"): ?>
                                <li>
                                    <a href="index.php?action=apidocs"><i class="fi fi-doc sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">API DOCS</span></a>
                                </li>
                                <?php endif;?>
                                <?php if($_SESSION['b2b_kpr_rech_user_type']=="0"): ?>

                                
<!--                                 <li>-->
<!--                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-suitcase sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Assign API</span></a>-->
<!--                                    <ul>-->
<!--                                        <li>-->
<!--                                            <a href="index.php?action=add_api">Add API</a>-->
<!--                                        </li>-->
<!--                                       -->
<!--                                        -->
<!--                                        -->
<!--                                    </ul>-->
<!--                                </li>-->
                                
                                
<!--                                <li>-->
<!--                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-certificate sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">API Name</span></a>-->
<!--                                    <ul>-->
<!--                                        <li>-->
<!--                                            <a href="index.php?action=add_api_name">Add API Name</a>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <a href="index.php?action=view_api_name">View API Name</a>-->
<!--                                        </li>-->
<!--                                       -->
<!--                                    </ul>-->
<!--                                </li>-->
                                <?php endif; ?>
<!--                                <li>-->
<!--                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-star sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">API User Type</span></a>-->
<!--                                    <ul>-->
<!--                                        <li>-->
<!--                                            <a href="index.php?action=add_api_user">Add API User Type</a>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <a href="index.php?action=view_api_user">View API User Type</a>-->
<!--                                        </li>-->
<!--                                       -->
<!--                                    </ul>-->
<!--                                </li>-->
                                

                                
                                <!--<li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a><a href="javascript:void(0)" data-toggle="tooltip" title="Create the most amazing pages with the widget kit!"><i class="gi gi-lightbulb"></i></a></span>
                                    <span class="sidebar-header-title">Widget Kit</span>
                                </li>
                                <li>
                                    <a href="page_widgets_stats.html"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Statistics</span></a>
                                </li>
                                <li>
                                    <a href="page_widgets_social.html"><i class="gi gi-share_alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Social</span></a>
                                </li>
                                <li>
                                    <a href="page_widgets_media.html"><i class="gi gi-film sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Media</span></a>
                                </li>
                                <li>
                                    <a href="page_widgets_links.html"><i class="gi gi-link sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Links</span></a>
                                </li>
                                <li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                                    <span class="sidebar-header-title">Design Kit</span>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-certificate sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">User Interface</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_ui_grid_blocks.html">Grid &amp; Blocks</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_draggable_blocks.html">Draggable Blocks</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_typography.html">Typography</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_buttons_dropdowns.html">Buttons &amp; Dropdowns</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_navigation_more.html">Navigation &amp; More</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_horizontal_menu.html">Horizontal Menu</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_progress_loading.html">Progress &amp; Loading</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_preloader.html">Page Preloader</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_color_themes.html">Color Themes</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-notes_2 sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Forms</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_forms_general.html">General</a>
                                        </li>
                                        <li>
                                            <a href="page_forms_components.html">Components</a>
                                        </li>
                                        <li>
                                            <a href="page_forms_validation.html">Validation</a>
                                        </li>
                                        <li>
                                            <a href="page_forms_wizard.html">Wizard</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-table sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Tables</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_tables_general.html">General</a>
                                        </li>
                                        <li>
                                            <a href="page_tables_responsive.html">Responsive</a>
                                        </li>
                                        <li>
                                            <a href="page_tables_datatables.html">Datatables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-cup sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Icon Sets</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_icons_fontawesome.html">Font Awesome</a>
                                        </li>
                                        <li>
                                            <a href="page_icons_glyphicons_pro.html">Glyphicons Pro</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-show_big_thumbnails sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Page Layouts</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_layout_static.html">Static</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_fixed_footer.html">Static + Fixed Footer</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_fixed_top.html">Fixed Top Header</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_fixed_top_footer.html">Fixed Top Header + Footer</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_fixed_bottom.html">Fixed Bottom Header</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_fixed_bottom_footer.html">Fixed Bottom Header + Footer</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_main_sidebar_mini.html">Mini Main Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_main_sidebar_partial.html">Partial Main Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_main_sidebar_visible.html">Visible Main Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_alternative_sidebar_partial.html">Partial Alternative Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_alternative_sidebar_visible.html">Visible Alternative Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_no_sidebars.html">No Sidebars</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_both_partial.html">Both Sidebars Partial</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_animated.html">Animated Sidebar Transitions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                                    <span class="sidebar-header-title">Develop Kit</span>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-brush sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Ready Pages</span></a>
                                    <ul>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Errors</a>
                                            <ul>
                                                <li>
                                                    <a href="page_ready_400.html">400</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_401.html">401</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_403.html">403</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_404.html">404</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_500.html">500</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_503.html">503</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Get Started</a>
                                            <ul>
                                                <li>
                                                    <a href="page_ready_blank.html">Blank</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_blank_alt.html">Blank Alternative</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="page_ready_search_results.html">Search Results (4)</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_article.html">Article</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_user_profile.html">User Profile</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_contacts.html">Contacts</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>e-Learning</a>
                                            <ul>
                                                <li>
                                                    <a href="page_ready_elearning_courses.html">Courses</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_elearning_course_lessons.html">Course - Lessons</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_elearning_course_lesson.html">Course - Lesson Page</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Message Center</a>
                                            <ul>
                                                <li>
                                                    <a href="page_ready_inbox.html">Inbox</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_inbox_compose.html">Compose Message</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_inbox_message.html">View Message</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="page_ready_chat.html">Chat</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_timeline.html">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_files.html">Files</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_tickets.html">Tickets</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_bug_tracker.html">Bug Tracker</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_tasks.html">Tasks</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_faq.html">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_pricing_tables.html">Pricing Tables</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_invoice.html">Invoice</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_forum.html">Forum (3)</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_coming_soon.html">Coming Soon</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Login, Register &amp; Lock</a>
                                            <ul>
                                                <li>
                                                    <a href="login.html">Login</a>
                                                </li>
                                                <li>
                                                    <a href="login_full.html">Login (Full Background)</a>
                                                </li>
                                                <li>
                                                    <a href="login_alt.html">Login 2</a>
                                                </li>
                                                <li>
                                                    <a href="login.html#reminder">Password Reminder</a>
                                                </li>
                                                <li>
                                                    <a href="login_alt.html#reminder">Password Reminder 2</a>
                                                </li>
                                                <li>
                                                    <a href="login.html#register">Register</a>
                                                </li>
                                                <li>
                                                    <a href="login_alt.html#register">Register 2</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_lock_screen.html">Lock Screen</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_lock_screen_alt.html">Lock Screen 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-wrench sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Components</span></a>
                                    <ul>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>3 Level Menu</a>
                                            <ul>
                                                <li>
                                                    <a href="#">Link 1</a>
                                                </li>
                                                <li>
                                                    <a href="#">Link 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="page_comp_maps.html">Maps</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_charts.html">Charts</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_gallery.html">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_carousel.html">Carousel</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_calendar.html">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_animations.html">CSS3 Animations</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_syntax_highlighting.html">Syntax Highlighting</a>
                                        </li>
                                    </ul>
                                </li>-->
                            </ul>
                            <!-- END Sidebar Navigation -->

                            <!-- Sidebar Notifications -->
                            <!--<div class="sidebar-header sidebar-nav-mini-hide">
                                <span class="sidebar-header-options clearfix">
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Refresh"><i class="gi gi-refresh"></i></a>
                                </span>
                                <span class="sidebar-header-title">Activity</span>
                            </div>
                            <div class="sidebar-section sidebar-nav-mini-hide">
                                <div class="alert alert-success alert-alt">
                                    <small>5 min ago</small><br>
                                    <i class="fa fa-thumbs-up fa-fw"></i> You had a new sale ($10)
                                </div>
                                <div class="alert alert-info alert-alt">
                                    <small>10 min ago</small><br>
                                    <i class="fa fa-arrow-up fa-fw"></i> Upgraded to Pro plan
                                </div>
                                <div class="alert alert-warning alert-alt">
                                    <small>3 hours ago</small><br>
                                    <i class="fa fa-exclamation fa-fw"></i> Running low on space<br><strong>18GB in use</strong> 2GB left
                                </div>
                                <div class="alert alert-danger alert-alt">
                                    <small>Yesterday</small><br>
                                    <i class="fa fa-bug fa-fw"></i> <a href="javascript:void(0)"><strong>New bug submitted</strong></a>
                                </div>
                            </div>-->
                            <!-- END Sidebar Notifications -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <!-- In the PHP version you can set the following options from inc/config file -->
                    <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
                    <header class="navbar navbar-default">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <?php
                            if(strpos($_SERVER['HTTP_USER_AGENT'], 'app') == false){
                            ?>
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>

                            <!-- END Main Sidebar Toggle Button -->

                            <!-- Template Options -->
                            <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
                            <li class="dropdown ligh_dark_color">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="gi gi-chevron-left"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-options">
                                    <li class="dropdown-header text-center">Header Style</li>
                                    <li>
                                        <div class="btn-group btn-group-justified btn-group-sm">
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-default">Light</a>
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-inverse">Dark</a>
                                        </div>
                                    </li>
                                    <li class="dropdown-header text-center">Page Style</li>
                                    <li>
                                        <div class="btn-group btn-group-justified btn-group-sm">
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style">Default</a>
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style-alt">Alternative</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>
                            
                           
                            <!-- END Template Options -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Search Form -->
                        <?php
                        if(strpos($_SERVER['HTTP_USER_AGENT'], 'app') == false){
                        ?>
                        <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
                            <div class="form-group">
                                <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                            </div>
                        </form>
                        <?php } ?>
                        <!-- END Search Form -->
<script>
    function getbalance(){
        
        $.ajax({

                type: "POST",

                url: "getbalance.php",

                data: {user: '<?php echo $_SESSION['b2b_kpr_rech_id']; ?>', type:'bal1'},

                success: function (data) {

               
                
                        

                    $('.addbalance_header_1').html(data);

                }

            });
            
            $.ajax({

                type: "POST",

                url: "getbalance.php",

                data: {user: '<?php echo $_SESSION['b2b_kpr_rech_id']; ?>', type:'bal2'},

                success: function (data) {

              
                
                        

                    $('.addbalance_header_2').html(data);


                }

            });
            
           
    }
    getbalance();
    //setInterval(getbalance, 1000);
    <?php
    //$_SESSION['b2b_kpr_rech_id'];
    ?>
</script>
                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            <!-- Alternative Sidebar Toggle Button -->
                            <?php
                            if(strpos($_SERVER['HTTP_USER_AGENT'], 'app') == false){
                            ?>
                            <li style="padding: 10px;">
							<b>YOUR IP : &nbsp;</b><b class="">&nbsp;&nbsp;<?php echo $_SERVER["REMOTE_ADDR"]; ?></b>
							
							</li>
							<li style="padding: 10px;">
                               
                                <b>Balance : &nbsp;</b><b class="addbalance_header_1" style="color: #ec4848;">&nbsp;&nbsp;<?php echo $user_det->balance; ?></b></li>
                            
                            
                            <li>
                            <!--<li style="padding: 10px;">
                               
                                <b>Wallet BALANCE - 2 : &nbsp;</b><b class="addbalance_header_2" style="color: #ec4848;">&nbsp;&nbsp;<?php echo $user_det->balance2; ?></b></li>
                            
                            
                            <li>  -->  
							
							

                                <!-- If you do not want the main sidebar to open when the alternative sidebar is closed, just remove the second parameter: App.sidebar('toggle-sidebar-alt'); -->
                                
                                
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');this.blur();">
                                    <i class="gi gi-share_alt"></i>
                                    <span class="label label-primary label-indicator animation-floating">4</span>
                                </a>
                            </li>
                            <?php } ?>
                            <!-- END Alternative Sidebar Toggle Button -->

                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle login_logout" data-toggle="dropdown" >
                                    <img src="<?php echo Fimages; ?>/avatar12.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                    <!--<li class="dropdown-header text-center">Account</li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw pull-right"></i>
                                            <span class="badge pull-right">10</span>
                                            Updates
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                            <span class="badge pull-right">5</span>
                                            Messages
                                        </a>
                                        <a href="#"><i class="fa fa-magnet fa-fw pull-right"></i>
                                            <span class="badge pull-right">3</span>
                                            Subscriptions
                                        </a>
                                        <a href="#"><i class="fa fa-question fa-fw pull-right"></i>
                                            <span class="badge pull-right">11</span>
                                            FAQ
                                        </a>
                                    </li>-->
                                    <li class="divider"></li>
                                    <li>
                                        <a href="index.php?action=profile">
                                            <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                        <!--<a href="#" data-toggle="modal">
                                            <i class="fa fa-cog fa-fw pull-right"></i>
                                            Settings
                                        </a>-->
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <!--<a href="#"><i class="fa fa-lock fa-fw pull-right"></i> Lock Account</a>-->
                                        <a href="index.php?action=logout"><i class="fa fa-power-off pull-right" aria-hidden="true"></i> Logout</a>
                                    </li>
                                    <!--<li class="dropdown-header text-center">Activity</li>
                                    <li>
                                        <div class="alert alert-success alert-alt">
                                            <small>5 min ago</small><br>
                                            <i class="fa fa-thumbs-up fa-fw"></i> You had a new sale ($10)
                                        </div>
                                        <div class="alert alert-info alert-alt">
                                            <small>10 min ago</small><br>
                                            <i class="fa fa-arrow-up fa-fw"></i> Upgraded to Pro plan
                                        </div>
                                        <div class="alert alert-warning alert-alt">
                                            <small>3 hours ago</small><br>
                                            <i class="fa fa-exclamation fa-fw"></i> Running low on space<br><strong>18GB in use</strong> 2GB left
                                        </div>
                                        <div class="alert alert-danger alert-alt">
                                            <small>Yesterday</small><br>
                                            <i class="fa fa-bug fa-fw"></i> <a href="javascript:void(0)" class="alert-link">New bug submitted</a>
                                        </div>
                                    </li>-->
                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    
                    <?php
                    if(strpos($_SERVER['HTTP_USER_AGENT'], 'app') == false){
                    ?>
                    
                    <div class="icon_set mobile_nav" style="">
<nav class="navbar navbar-inverse" style="background-color: rgba(1, 43, 114, 0.76);border: none;">
  <div class="container-fluid" style="">
    <div class="navbar-header">

    </div>
    <div class="sidebar-user-links" style="padding: 15px;height: 67px;">
        
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                
                                     
                                     
                                    <!--<a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="" onclick="$('#modal-user-settings').modal('show');" data-original-title="Settings"><i class="gi gi-cogwheel"></i></a>-->
                 <i class="fa fa-user fa-2x botton_icons_margin" style="color: #fff; " onclick="window.location.href = 'index.php?action=profile'"></i>
                
                <?php $links=($_SESSION['b2b_kpr_rech_user_type']=="0" || $_SESSION['b2b_kpr_rech_user_type']=="1" || $_SESSION['b2b_kpr_rech_user_type']=="2" ? 'index.php?action=respond_money_request' : 'index.php?action=view_money_request' ); ?>
                 <i class="fa fa-envelope fa-2x botton_icons_margin" style="color: #fff;"></i></a>
                 <i class="fa fa-inr fa-2x botton_icons_margin" style="color: #fff;margin-top:3px;" onclick="window.location.href = '<?php echo $links; ?>'"></i>
                 <i class="fa fa-sign-out fa-2x botton_icons_margin" style="color: #fff;" onclick="window.location.href = 'index.php?action=logout'"></i>
                                   
        <p class="text-muted credit">
            </p>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle bottom_value" data-toggle="dropdown" style="">
                     <span class="caret caret-up"></span>
                </button>
                <ul class="dropdown-menu drop-up" role="menu">
                   <li class="dropdown-header text-center">Account</li>
                                    
                                   
                                    <li>
                                        <a href="index.php?action=profile" style="color:#000;opacity:1.0">
                                            <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        
                                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        
                                        <a href="index.php?action=logout" style="color:#000;opacity:1.0"><i class="fa fa-power-off pull-right" aria-hidden="true"></i> Logout</a>
                                    </li>
                </ul>
            </div>
            
           </div> 
            </div>
            
            
            
        <p></p>
      
      <style>
          /* Sticky footer styles
-------------------------------------------------- */

.mobile_nav{
    display:none;
}

@media only screen and (max-width: 768px) {
    /* For mobile phones: */
    .mobile_nav{
 position: fixed;
    z-index: 1000;
    margin-bottom: 0px;
    border: none;
    width: 100%;
    bottom:0px;
    margin-bottom:-6%;
    display:block;
}

}

/* Wrapper for page content to push down footer */
#wrap {
  min-height: 100%;
  height: auto;
  /* Negative indent footer by its height */
  margin: 0 auto -60px;
  /* Pad bottom by footer height */
  padding: 0 0 60px;
}

/* Set the fixed height of the footer here */



/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */

.container {
  width: auto;
  max-width: 680px;
  padding: 0 15px;
}
.container .credit {
  margin: 0 0;
  padding: 8px 0 4px 0;
}

.caret-up {
    /* Safari */
    -webkit-transform: rotate(-180deg);
    
    /* Firefox */
    -moz-transform: rotate(-180deg);
    
    /* IE */
    -ms-transform: rotate(-180deg);
    
    /* Opera */
    -o-transform: rotate(-180deg);
    
    /* Internet Explorer */
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=6);

}

.drop-up {
    top: auto;
    bottom: 100% !important;
}

@media only screen and (min-width:300px) and (max-width: 320px)
{
  .botton_icons_margin
  {
    margin-right:15%;
  }
  .login_logout
  {
    display:none;   
  }
  .bottom_value
  {
     margin-left: 17em !important;
     margin-top: -33px;
  }
  .drop-up
  {
      margin-left: 8em;
    
    margin-bottom: 56px;
  }
}


@media only screen and (min-width:321px) and (max-width: 360px)
{
      .botton_icons_margin
  {
    margin-right:16%;
  }
  .login_logout
  {
    display:none;   
  }
  .bottom_value
  {
     margin-left: 20em !important;
     margin-top: -38px;
  }
  .drop-up
  {
      margin-left: 11em;
    
    margin-bottom: 56px;
  }
}
@media only screen and (min-width:375px) and (max-width: 414px)
{
      .botton_icons_margin
  {
    margin-right:17%;
  }
  .login_logout
  {
    display:none;   
  }
  .bottom_value
  {
     margin-left: 23em !important;
     margin-top: -38px;
  }
  .drop-up
  {
      margin-left: 14em;
    
    margin-bottom: 56px;
  }
}
@media only screen and (min-width:361px) and (max-width: 400px)
{
      .botton_icons_margin
  {
    margin-right:16%;
  }
  .login_logout
  {
    display:none;   
  }
  .bottom_value
  {
     margin-left: 21em !important;
     margin-top: -34px;
  }
  .drop-up
  {
      margin-left: 12em;
    
    margin-bottom: 56px;
  }
}
@media only screen and (min-width:425px) and (max-width: 468px)
{
  .botton_icons_margin
  {
    margin-right:18%;
  }
  .login_logout
  {
    display:none;   
  }
  .bottom_value
  {
     margin-left: 24em !important;
    margin-top: -57px;
  }
  .drop-up
  {
      margin-left: 16em;
    
    margin-bottom: 57px;
  }  
}
@media only screen and (min-width:600px) and (max-width: 1024px)
{
  .botton_icons_margin
  {
    margin-right:20%;
  }
  .login_logout
  {
    display:none;   
  }
  .bottom_value
  {
     margin-left: 36em !important;
    margin-top: -57px;
  }
  .drop-up
  {
      margin-left: 12em;
    
    margin-bottom: 56px;
  }  
}
@media only screen and (min-width:768px) and (max-width: 768px)
{
      .botton_icons_margin
  {
    margin-right:20%;
  }
   .login_logout
  {
    display:none;   
  } 
  .bottom_value
  {
     margin-left: 47em !important;
     margin-top: -43px;
  }
  .drop-up
  {
      margin-left: 40em;
    
    margin-bottom: 56px;
  }
}

@media only screen and (min-width: 769px) and (max-width: 960px)
{
      .botton_icons_margin
  {
    margin-right:20%;
  }
  .login_logout
  {
    display:none;   
  }
}
@media only screen and (min-width: 961px) and (max-width: 1024px)
 {
       .botton_icons_margin
  {
    margin-right:20%;
  }

}

@media only screen and (min-width:1025px) and (max-width: 1280px)
 {
       .botton_icons_margin
  {
    margin-right:20%;
  }
  
}

@media only screen and (min-width:1440px) and (max-width: 1440px)
{
      .botton_icons_margin
  {
    margin-right:20%;
  }
 
}

@media only screen and (min-width:1441px) and (max-width: 1920px)
{
}

      </style>
                                </div>
  </div>
</nav>
</div>
                    <?php } ?>
<style>
    .divoverlay
{
position:absolute;
width:100%;
height:100%;
background-color:transparent;
z-index:1;
top:0;
}
</style>
 <?php if(  $_SESSION['b2b_kpr_rech_username']=="admindemo" || $_SESSION['b2b_kpr_rech_username']=="masterdemo" || $_SESSION['b2b_kpr_rech_username']=="distributordemo" || $_SESSION['b2b_kpr_rech_username']=="retailerdemo"): ?>
<script>
    $('#main-container').append('<div class="divoverlay"> </div>');
    
</script>
<?php endif; ?>
                    <!-- END Header -->