<link rel="stylesheet" href="<?php echo Fcss; ?>/plugins.css">
<script src="ajax/commission.js"></script>
<div id="page-content" style="min-height: 694px;">
    <!-- Table Responsive Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                View Group<br>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Group</li>
        <li><a href="">View Group</a></li>
    </ul>
     <div class="msgajax" style="color: green; font-size: 15px; margin-bottom: 2%;">
                                     
                                        </div>

    <div class="block">
        <!-- Responsive Partial Title -->
        <div class="block-title">



        </div>


        <table class="table table-vcenter table-striped">

            <thead>
                <tr>
                    <th></th>
                    <th>Id</th>
                    <th>Group Name</th>
                    <th>Date/Time</th>
                    <th>Status</th>
                    <th style="width:30%;">Actions</th>
                </tr>
            </thead>
            <tbody>
            <form method="post"></form>
            <?php
            $i = 1;
            foreach ($getgroup as $grp):
                ?>
                <tr>
                    <td>
                    <!--    <i class="fa fa-plus-circle add_but1 grpindcoms" aria-hidden="true"><span style="display: none;"><?php  echo $grp['id']; ?></span></i>
                        <i class="fa fa-minus-circle minus_but1" aria-hidden="true" style="display:none;"></i>-->
                    </td>
                    <td><?php echo $i++; ?></td>       
                    <td><?php echo $grp['group_name']; ?></td>    
                    <td><?php echo $grp['date'] . ' ' . $grp['time']; ?></td>    
                    <td>
                        <?php if ($grp['status'] == 0): ?>
                            <label class="label label-danger">Deactive</label>
                        <?php endif; ?>
                        <?php if ($grp['status'] == 1): ?>
                            <label class="label label-success">Active</label>
                        <?php endif; ?>
                    </td>    
                    <td class="">

                        <div class="btn-group" style="width:100%;">

                            <button data-toggle="tooltip" title="" type="button" onclick="document.location.href = '#';" name="active" value="35" class="btn btn-warning " style="width: 39px;background-color:#f0c129;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);" data-original-title="Edit"><i class="fa fa-pencil"></i></button>
                            <!--<button data-toggle="tooltip" title="" type="submit" name="active" value="35" class="btn btn-warning " style="border-radius:3px;background-color:#4d4d4d;color:#fff;border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);" data-original-title="Active"><i class="fa fa-check"></i></button>-->
                            <button data-toggle="tooltip" title="" type="button" class="btn btn-warning " style="width: 39px;border-radius:3px;background-color:#ff0000a1;color:#fff;border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);" data-original-title="Delete Group"><i class="fa fa-ban" aria-hidden="true"></i></button>
                            <!--<button class="btn btn-danger " data-toggle="tooltip" title="" type="button" onclick="document.location.href = '#';" name="active" value="35" style="width: 39px;background-color:#33ad9c;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);" data-original-title="Assign Group"><i class="fa fa-link"></i></button>-->
                            
                            

                            <button data-toggle="tooltip" title="" type="button" onclick="document.location.href='index.php?action=view_group_coms&grp=<?php  echo $grp['id']; ?>';" name="active" value="82" class="btn btn-warning " style="width: 39px;background-color:#0c690fb3;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);" data-original-title="View Commission"><i class="fa fa-inr"></i></button>

                            <button data-toggle="tooltip" title="" onclick="document.location.href='index.php?action=mpos_slab_group&grp=<?php  echo $grp['id']; ?>';" type="button" name="active" value="122" class="btn btn-warning modelopen" style="width: 39px;background-color:#f0c129;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);" data-original-title="Add MPOS Slab"><i class="fa fa-credit-card"></i></button>
                            <button data-toggle="tooltip" title="" onclick="document.location.href='index.php?action=dmt_slab_group&grp=<?php  echo $grp['id']; ?>';" type="button" name="active" value="122" class="btn btn-warning modelopen" style="width: 39px;background-color:#f0c129;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);" data-original-title="Add DMT Slab"><i class="fa fa-credit-card"></i></button>
                        </div>
                    </td>
                </tr>
                
                
            <?php endforeach; ?>
            </tbody>
        </table>


 <!---------sub-table------>
        <div class="table_display" style="display:none;">
            <table class="table table-vcenter table-striped">

                <thead>
                    <tr>
                       
                        <th>Operator Name</th>
                        <th>Buy Commission</th>
                        <th>Sale Commission</th>
                        <th>Sale Commission Type</th>
                        <th>Service Charge</th>
                        <th>Service Charge Type</th>
						<?php if($_SESSION['b2b_kpr_rech_user_type'] == 4 || $_SESSION['b2b_kpr_rech_user_type'] == 0){ ?>
						<th>Select API</th>
						<?php } ?>
                    </tr>
                </thead>
                <tbody class="datagrpind">
<!--                <form method="post"></form>-->
               
                </tbody>
            </table>

        </div>   
                 <script>

            $(document).ready(function() {
                $(".add_but1").click(function() {
                    $(".table_display").show();
                    $(".minus_but1").show();
                    $(".add_but1").hide();
                });
            });

        </script>

        <script>

            $(document).ready(function() {
                $(".minus_but1").click(function() {
                    $(".table_display").hide();
                    $(".minus_but1").hide();
                    $(".add_but1").show();
                });
            });

        </script>

         


        <!-------end sub-table---->

        
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
            table 
            {
                overflow-x: auto;

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