<script src="ajax/chat.js"></script>
<!-- Page content -->
                    <div id="page-content">
                        <!-- Chat Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    <i class="fa fa-comments"></i>Chat<br><small>Your Social Center</small>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Pages</li>
                            <li><a href="">Chat</a></li>
                        </ul>
                        <!-- END Chat Header -->

                        <!-- Chat Block -->
                        <div class="block">
                            <!-- Title -->
                            <div class="block-title">
                                <div class="block-options pull-right">
                                    <div class="btn-group btn-group-sm">
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default dropdown-toggle enable-tooltip" data-toggle="dropdown" title="Status"><i class="fa fa-cog"></i></a>
                                        <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                            <li class="active">
                                                <a href="javascript:void(0)"><i class="fa fa-check pull-right"></i>Online</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="fa fa-circle pull-right"></i>Away</a>
                                                <a href="javascript:void(0)"><i class="fa fa-circle pull-right"></i>Busy</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="fa fa-power-off pull-right text-muted"></i>Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h2><i class="fa fa-pencil animation-pulse"></i> <strong>Chat</strong> Wells</h2>
                            </div>
                            <!-- END Title -->

                            <!-- Content -->
                            <div class="chatui-container block-content-full">
                                <!-- People -->
                                <div class="chatui-people themed-background-dark">
                                    <div class="chatui-people-scroll">
                                        <!-- Online -->
                                        <!--<h2 class="chatui-header"><i class="fa fa-circle text-success pull-right"></i><strong>Online</strong></h2>-->
                                        <div class="list-group">
                                            <?php
                                            foreach($getusers as $user):
                                            ?>
                                            <a href="javascript:void(0)" class="list-group-item getuser" alt="<?php echo $user['id']; ?>"><!--  active -->
                                                <span class="badge count<?php echo $user['id']; ?>">2</span>
                                                <img src="<?php echo Fimages; ?>/placeholders/avatars/avatar6.jpg" alt="Avatar" class="img-circle">
                                                <h5 class="list-group-item-heading"><strong><?php echo $user['firstname']; ?></strong> <?php echo $user['lasttname']; ?></h5>
                                            </a>
                                           <?php
                                           endforeach;
                                           ?>
                                        </div>
                                        <!-- END Online -->

                                        

                                        
                                    </div>
                                </div>
                                <!-- END People -->

                                <!-- Talk -->
                                <div class="chatui-talk" style="    overflow-y: scroll;">
                                    <div class="chatui-talk-scroll">
                                        <ul class="msg_body">
                                           
                                            <li class="chatui-talk-msg">
                                                 Hey admin?
                                            </li>
                                            <li class="chatui-talk-msg">
                                                How are you?
                                            </li>
                                            
                                            <li class="chatui-talk-msg chatui-talk-msg-highlight themed-border">
                                                 I'm fine, thanks!
                                            </li>
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                                <!-- END Talk -->

                                <!-- Input -->
                                <div class="chatui-input">
                                    <form onsubmit="return false;" method="post" class="form-horizontal form-control-borderless remove-margin">
                                        <div class="input-group">
                                            <span class="input-group-addon spanhover" alt="0"><i class="fa fa-angle-right"></i></span>
                                            <input type="text" id="chatui-message" name="chatui-message" class="form-control input-lg" placeholder="Type a message and hit enter..">
                                        </div>
                                    </form>
                                </div>
                                <!-- END Input -->
                            </div>
                            <!-- END Content -->
                        </div>
                        <!-- END Chat Block -->
                    </div>
                    <!-- END Page Content -->
                    <style>
                        .spanhover:hover{
                            cursor: pointer;
                        }
                    </style>
                    <script src="<?php echo Fjs;?>/pages/readyChat.js"></script>
                    <script>$(function(){ ReadyChat.init(); });</script>