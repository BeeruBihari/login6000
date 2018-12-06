<link rel="stylesheet" href="<?php echo Fcss; ?>/plugins.css">

<div id="page-content">
    <!-- Table Responsive Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                View SMS API<br>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>API Configration</li>
        <li><a href="">View SMS API</a></li>
    </ul>

    <div class="block">
        
        <!-- Responsive Partial Title -->
                            <?php 
                            flash('add_sms_api');
                           
                            ?>

        <div class="block-title">


            <div class="row">
                <div class="col-sm-12 col-xs-10">

                    <h2 style="display:inline-block"><strong>View SMS API</strong></h2>

                    <!--<i class="fa fa-plus-circle fa-2x add_but1" aria-hidden="true" style="display:inline-block;float:right;"></i>-->
                    <a href="index.php?action=add_sms_api"><i class="fa fa-plus-circle fa-2x add_but1" aria-hidden="true" style="float:right;"></i></a>

                </div>

            </div>


        </div>


        <table class="table table-vcenter table-striped table-bordered table123">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Url</th>
                    <th>Status</th>
                    <th>Action</th>


                </tr>
            </thead>
            <tbody>
            <form method="post">




                <?php
                $i = 1;
                foreach ($getallcomdata as $value):
                    ?>
                    <tr>

                        <td><?php echo $i++; ?></td>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['url']; ?></td>
                        <td>
                            <?php if ($value['status'] == 1): ?>
                                <span class="label label-success">Active</span>
                            <?php endif; ?>
                            <?php if ($value['status'] == 0): ?>
                                <span class="label label-danger">Deactive</span>
    <?php endif; ?>
                        </td>
                        <td>
                            <button data-toggle="tooltip" onclick="window.location.href='index.php?action=add_sms_api&sid=<?php echo $value['id']; ?>'" title="Edit API" type="button"   class="btn btn-warning " style="width: 39px;border-radius:3px;background-color:#f0c129;color:#fff;border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            <button data-toggle="tooltip" title="Enabled/Disabled" type="button"   class="btn btn-warning " style="width: 39px;border-radius:3px;background-color:#337ead;color:#fff;border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-ban"></i></button>

                        </td>

                    </tr>
<?php endforeach; ?>


            </form>

            </tbody>
        </table>


        

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

