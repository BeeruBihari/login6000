<link rel="stylesheet" href="<?php echo Fcss; ?>/plugins.css">

<div id="page-content">
    <!-- Table Responsive Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                API Daybook<br>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Admin Utility</li>
        <li><a href="">API Daybook</a></li>
    </ul>

    <div class="block">

        <div class="block-title">


            <div class="row">
                <div class="col-sm-12 col-xs-10">

                    <h2><strong>API Daybook</strong> Table</h2>

                </div>

            </div>
        </div>
        <form method="post" action="#">
            <input type="hidden" name="action" value="user_daybook" />
            <div class="row" style="margin-bottom:3%;">


                <div class="col-md-1"></div>

                <div class="col-md-3">
                             <!--<input type="text" id="example-text-input" name="uid" class="form-control" placeholder="Enter Member Id">-->
                     <?php //print_r($getapiconfiglist); ?>
                    <select required="" id="user_type" name="api_name" class="form-control val_select">
                        <option selected="" value="" disabled="">Please select API Name</option>
                       
                        <?php foreach ($getapiconfiglist as $apiname) : ?>
                       
                        <option value="<?php echo $apiname['id']; ?>"><?php echo $apiname['api_name']; ?></option>
                         <?php endforeach; ?>
                    </select>
                </div>
                <!--                                    
                                                    <div class="col-md-2">
                                                            <input type="text" id="example-datepicker" name="sdate" class="form-control input-datepicker" data-date-format="yyyy/mm/dd" placeholder="From Date">
                                                     </div>
                                                      
                                                     <div class="col-md-2">
                                                            <input type="text" id="example-datepicker" name="edate" class="form-control input-datepicker" data-date-format="yyyy/mm/dd" placeholder="To Date">
                                                    </div>-->

                <div class="col-md-2">
                    <button type="submit" name="apiwise_btn" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Search</button>
                </div>


            </div>
        </form>

    </div>

    <div class="block table-responsive">
        <!-- Responsive Partial Title -->
        <div class="block-title">



        </div>


        <table class="table table-vcenter table-bordered">

            <thead>
                <tr>
                    <th>No.</th>
                    <th>OP NAME</th>
                    <th>OPCODE</th>
                    <th>API Name</th>
                    <th>SuccessHits</th>
                    <th>SuccessAmt</th>
                    <th>Buy Commission</th>
                    <th>Commission</th>
                    <th>Sale Commission</th>
                    <th>Profit</th>
<!--                                            <th>Commission</th>-->

                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $opdsc = $o__report->getopdscbycode();
                foreach ($opdsc as $r) {

                    $th = 0;
                    $tamt = 0;
                    $sh = 0;
                    $samt = 0;
                    $fh = 0;
                    $famt = 0;
                    $ph = 0;
                    $pamt = 0;
                    $cms = 0;

                    $userdata = $o__report->getusebyadminid();
                    foreach ($userdata as $r2) {

                        if ($_GET['sdate'] != '' && $_GET['edate'] != '') {

                            $alldata = $o__report->getallhistrydatabydate($r2['id'], $r['opcode'], $_GET['sdate'], $_GET['edate']);
                        } else {
                            $alldata = $o__report->getallhistrydata($r2['id'], $r['opcode']);
                        }
                        foreach ($alldata as $r3) {
                            $th++;
                            $tamt = $tamt + $r3['amount'];
                            if ($r3['status'] == 1) {
                                $sh++;
                                $samt = $samt + $r3['amount'];
                            }

                            if ($r3['status'] == 2 || $r3['status'] == 3) {
                                $fh++;
                                $famt = $famt + $r3['amount'];
                            }

                            if ($r3['status'] == 1) {
                                $ph++;
                                $pamt = $pamt + $r3['amount'];
                            }

                            $cms = $cms + $r3['commission'];
                        }
                    }
                    ?>
                    <tr>
                        <td>
                    <?php echo $i; ?>
                        </td>
                        <td>
                    <?php echo $r['OperatorDescritpion']; ?>
                        </td>
                        <td>
                    <?php echo $r['opcode']; ?>
                        </td>
                        <td>
                    <?php echo $r3['apiname']; ?>
                        </td>
                        <td>
                            <?php echo $sh; ?>
                        </td>
                        <td>
                            <?php echo $samt; ?>
                        </td>
                        <td>
                            <?php echo $r3['buy_commission']; ?>
                        </td>
                        <td>
                            <?php echo $r3['sell_commission']; ?>
                        </td>
                        <td>
                            <?php echo $cms; ?>
                        </td>
                        <td>
                            <?php echo $cms; ?>
                        </td>
    <!--                                            <td>
                            <?php //echo $cms;  ?>
                        </td>-->
    <?php
    $i++;
}
?>
                </tr>
            </tbody>
        </table>
    </div>




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


