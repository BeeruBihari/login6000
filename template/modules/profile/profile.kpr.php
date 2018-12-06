<div id="page-content">
                        <!-- User Profile Header -->
                        <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
                       

                        <!-- User Profile Content -->
                        <div class="row">
                            <!-- First Column -->
                            
                            <!-- END First Column -->

                            <!-- Second Column -->
                            <div class="col-md-12">
                                <!-- Info Block -->
                                <div class="block">
                                    <!-- Info Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Friend Request"><i class="fa fa-plus"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Hire"><i class="fa fa-briefcase"></i></a>
                                        </div>
                                        <h2>About <strong><?php echo $user_det->firstname.' '.$user_det->lastname; ?></strong> </h2>
                                    </div>
                                    <!-- END Info Title -->

                                    <!-- Info Content -->
                                    <table class="table table-borderless table-striped button_margin123">
                                        <tbody>
                                            <tr>
                                                <td style="width: 20%;"><strong>Company Name</strong></td>
                                                <td><?php echo $user_det->cmpy_name; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 20%;"><strong>Mobile Number</strong></td>
                                                <td><?php echo $user_det->mob_no; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 20%;"><strong>Email</strong></td>
                                                <td><?php echo $user_det->email; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>APIs</strong></td>
                                                <td>
                                                    <?php $api=$o__user->getapisbyuser($user_det->id);

                                                    foreach ($api as $a):

                                                        if($a['api_id']==1){ echo '<a href="javascript:void(0)" class="label label-info">Recharge</a>'; }
                                                        if($a['api_id']==2){ echo '<a href="javascript:void(0)" class="label label-info">Wallet</a>'; }
                                                        if($a['api_id']==3){ echo '<a href="javascript:void(0)" class="label label-info">Flight</a>'; }
                                                        if($a['api_id']==4){ echo '<a href="javascript:void(0)" class="label label-info">DTH</a>'; }
                                                        if($a['api_id']==5){ echo '<a href="javascript:void(0)" class="label label-info">Money Transfer</a>'; }
                                                        if($a['api_id']==6){ echo '<a href="javascript:void(0)" class="label label-info">Bus</a>'; }
                                                    endforeach;
                                                    ?>

                                                    <!--                                                    <a href="javascript:void(0)" class="label label-info">HTML</a>-->
                                                    <!--                                                    <a href="javascript:void(0)" class="label label-info">CSS</a>-->
                                                    <!--                                                    <a href="javascript:void(0)" class="label label-info">Javascript</a>-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 20%;"><strong>PAN Card</strong></td>
                                                <td><img height="150px" width="200px" src="<?php echo (!empty($user_det->pan_card) ? FAUrlupload.'/b2b_user_pan/'.$user_det->pan_card : Fimages.'/category.png' ) ?>"></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 20%;"><strong>Adhaar Card</strong></td>
                                                <td><img height="150px" width="200px" src="<?php echo (!empty($user_det->adhaar_card) ? FAUrlupload.'/b2b_user_adhaar/'.$user_det->adhaar_card : Fimages.'/category.png' ) ?>"></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <!-- END Info Content -->
                                </div>
                               
                               <style>
                                   .button_margin123
                    {
                        margin-bottom:65px;
                    }
                               </style>

                                
                            </div>
                            <!-- END Second Column -->
                        </div>
                        <!-- END User Profile Content -->
                    </div>