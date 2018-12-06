<div id="page-content">
                        <!-- Forms General Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Add Group<br><small></small>
                                </h1>
                            </div>
                        </div>
                       
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Group</li>
                            <li><a href="">Add Group</a></li>
                        </ul>
                         <?php
                            flash('add_group'); 
                            ?>
                       
                        <!-- END Forms General Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Basic Form Elements Block -->
                                <div class="block">
                                    <!-- Basic Form Elements Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="index.php?action=view_group" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip active" >View Group</a>
                                        </div>
                                        <h2><strong>Add New</strong> Group</h2>
                                    </div>
                                    <!-- END Form Elements Title -->

                                    <!-- Basic Form Elements Content -->
                                    
                                    <?php if($_GET['mu']): 
                                        
                                        ?>
                                    <?php else: ?>
                                    <?php endif; ?>
<!--                                     <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Static</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">Username</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Group Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="example-text-input" name="group_name" class="form-control" placeholder="Group Name" required="">
                                               
                                            </div>
                                        </div>
                                       
                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-sm btn-primary" name="submit_apigrp"><i class="fa fa-angle-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                            </div>
                                        </div>
                                    </form>-->
                                    
                                    
                                    
                                    
                                    <form method="post" enctype="multipart/form-data" class="form-horizontal">
<!--                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Static</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">Username</p>
                                            </div>
                                        </div>-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Group Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="example-text-input" name="group_name" class="form-control" placeholder="Group Name" required="">
                                               
                                            </div>
                                        </div>
                                       
                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-sm btn-primary" name="submit_grp"><i class="fa fa-angle-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                    <!-- END Basic Form Elements Content -->
                                </div>
                                <!-- END Basic Form Elements Block -->
                            </div>
                           
                        </div>
                        </div>

                       