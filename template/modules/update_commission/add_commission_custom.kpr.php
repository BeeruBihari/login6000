<script src="ajax/commission.js"></script>
<div id="page-content">
    <!-- Validation Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                Add Commission<br />
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li> Commission</li>
        <li><a href="">Add Commission</a></li>
    </ul>
    <!-- END Validation Header -->

    <div class="row">
        <div class="col-md-12">
            <!-- Form Validation Example Block -->
            <div class="block">
                <!-- Form Validation Example Title -->
                <div class="block-title">
                    <h2><strong>Add Commission</strong></h2>
                </div>
                <!-- END Form Validation Example Title -->

                <!-- Form Validation Example Content -->
                <form id="form-validation" action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <fieldset>



                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <!-- Block Tabs -->
                                <div class="block full">
                                    <!-- Block Tabs Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">

                                        </div>
                                        <ul class="nav nav-tabs" data-toggle="tabs">
                                            <?php
                                            $counter = '0';
                                            $apis = array();

                                            foreach($assign_apis as $api):

                                                if ($api['api_id'] == 2)
                                                {
                                                }
                                                else
                                                {
                                                    $apis[$counter] = $api['api_id'];
                                                    ?>
                                                    <li class="<?php  echo ($counter == '0' ? 'active' : ''); ?>"><a href="#example-tabs2-<?php
                                                        echo $api['api_id']; ?>">
                                                            <?php
                                                            if ($api['api_id'] == 1)
                                                            {
                                                                echo 'Recharge';
                                                            }

                                                            if ($api['api_id'] == 3)
                                                            {
                                                                echo 'Flight';
                                                            }

                                                            if ($api['api_id'] == 4)
                                                            {
                                                                echo 'DTH';
                                                            }

                                                            if ($api['api_id'] == 5)
                                                            {
                                                                echo 'Money Transfer';
                                                            }

                                                            if ($api['api_id'] == 6)
                                                            {
                                                                echo 'Bus';
                                                            }

                                                            ?>
                                                        </a></li>
                                                    <!--                                                <li><a href="#example-tabs2-profile">Utility</a></li>-->
                                                    <?php $counter++;

                                                }


                                            endforeach; ?>
                                        </ul>
                                    </div>
                                    <!-- END Block Tabs Title -->

                                    <!-- Tabs Content -->
                                    <div class="tab-content">

                                        <!-- For RECHARGE COMMISSION  -->

                                        <?php
                                       // print_r($apis);
                                        if (in_array('1', $apis)): ?>
                                            <div class="tab-pane <?php echo ($apis[0] == '1' ? 'active' : ''); ?>" id="example-tabs2-1">
                                                <table class="table table-vcenter table-striped">

                                                    <thead>
                                                    <tr>
                                                        <th>Operator Name  </th>
                                                        <th>Commission</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $operators = $o__commission->getoperators('b2b_user_rech_' . $b2b_user->unique_id,'1');

                                                    // print_r($operators);

                                                    foreach($operators as $op):
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $op['OperatorDescritpion']; ?></td>
                                                            <td><input required type="text" value="<?php echo $op['commoncommision']; ?>" class="form-control commission_rate<?php echo $op['opid']; ?>"></td>
                                                            <td><button type="button" name="commission" class="btn btn-sm btn-primary update_com" value="<?php echo $op['opid']; ?>"><i class="fa fa-arrow-right"></i>  Update</button></td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>

                                                </table>
                                                <style>
                                                    .table thead > tr > th {
                                                        font-size: 13px;
                                                        font-weight: 600;
                                                    }
                                                </style>
                                            </div>

                                            <?php endif; ?>

                                        <!-- For FLIGHT COMMISSION  -->

                                        <?php if (in_array('3', $apis)): ?>

                                            <div class="tab-pane <?php
                                            echo ($apis[0] == '3' ? 'active' : ''); ?>" id="example-tabs2-3">
                                                <form name="abc" method="post">
                                                    <table class="table table-vcenter table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Commission</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Flight Commission</td>
                                                            <td><input type="text" name="flight_com" value="<?php  echo $b2b_user->flight_commission; ?>" class="form-control"></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="form-group form-actions button_margin123">
                                                        <div class="col-md-8 col-md-offset-4">
                                                            <button type="submit" name="flight_update" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <style>
                                                    .table thead > tr > th {
                                                        font-size: 13px;
                                                        font-weight: 600;
                                                    }
                                                </style>
                                            </div>
                                            <?php    endif; ?>



                                        <!-- For DTH COMMISSION  -->
<input type="hidden" class="tbi" value="<?php echo 'b2b_user_rech_' . $b2b_user->unique_id; ?>" />
                                        <?php   if (in_array('4', $apis)): ?>
                                            <div class="tab-pane <?php echo ($apis[0] == '4' ? 'active' : ''); ?>" id="example-tabs2-4">
                                                <table class="table table-vcenter table-striped">

                                                    <thead>
                                                    <tr>
                                                        <th>DTH Operator  </th>
                                                        <th>Commission</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $operators = $o__commission->getoperators('b2b_user_rech_' . $b2b_user->unique_id, '2');

                                                    // print_r($operators);
                                                    foreach($operators as $op):
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $op['OperatorDescritpion']; ?></td>
                                                            <td><input required type="text" value="<?php echo $op['commoncommision']; ?>" class="form-control dth_commission_rate<?php echo $op['opid']; ?>"></td>
                                                            <td><button type="button" name="commission" class="btn btn-sm btn-primary update_dth_com" value="<?php echo $op['opid']; ?>"><i class="fa fa-arrow-right"></i>  Update</button></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    </tbody>

                                                </table>
                                                <style>
                                                    .table thead > tr > th {
                                                        font-size: 13px;
                                                        font-weight: 600;
                                                    }
                                                </style>
                                            </div>

                                        <?php endif; ?>




                                        <!-- For MONEY TRANSFER COMMISSION  -->

                                        <?php if (in_array('5', $apis)): ?>

                                            <div class="tab-pane <?php
                                            echo ($apis[0] == '5' ? 'active' : ''); ?>" id="example-tabs2-5">
                                                <form name="abc" method="post">
                                                    <table class="table table-vcenter table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Commission</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Money Transfer Commission</td>
                                                            <td><input type="text" name="money_transfer_com" value="<?php  echo $b2b_user->money_commission; ?>" class="form-control"></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="form-group form-actions button_margin123">
                                                        <div class="col-md-8 col-md-offset-4">
                                                            <button type="submit" name="money_transfer_update" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <style>
                                                    .table thead > tr > th {
                                                        font-size: 13px;
                                                        font-weight: 600;
                                                    }
                                                </style>
                                            </div>
                                        <?php    endif; ?>



                                        <!-- For BUS COMMISSION  -->

                                        <?php if (in_array('6', $apis)): ?>

                                            <div class="tab-pane <?php
                                            echo ($apis[0] == '6' ? 'active' : ''); ?>" id="example-tabs2-6">
                                                <form name="abc" method="post">
                                                    <table class="table table-vcenter table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Commission</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Bus Commission</td>
                                                            <td><input type="text" name="bus_com" value="<?php  echo $b2b_user->bus_commission; ?>" class="form-control"></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="form-group form-actions button_margin123">
                                                        <div class="col-md-8 col-md-offset-4">
                                                            <button type="submit" name="bus_update" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <style>
                                                    .table thead > tr > th {
                                                        font-size: 13px;
                                                        font-weight: 600;
                                                    }
                                                </style>
                                            </div>
                                        <?php    endif; ?>



                                    </div>
                                    <!-- END Tabs Content -->
                                </div>
                                <!-- END Block Tabs -->
                            </div>

                        </div>
                        <!-- END Working Tabs Content -->


                        <hr style="border:1px dashed #eaedf1;width: 100%;">


                    </fieldset>



                </form>
                <!-- END Form Validation Example Content -->

                <!-- Terms Modal -->

                <!-- END Terms Modal -->
            </div>
            <!-- END Validation Block -->
        </div>


        <style>
            .button_margin123
            {
                margin-bottom:65px;
            }
        </style>




    </div>
</div>
