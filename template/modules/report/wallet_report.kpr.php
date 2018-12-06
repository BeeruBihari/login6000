<link rel="stylesheet" href="<?php echo Fcss;  ?>/plugins.css">

<div id="page-content">
    <!-- Table Responsive Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                User Ledger<br>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Report</li>
        <li><a href="">User Ledger</a></li>
    </ul>

    <div class="block">

        <div class="block-title">
            <h2><strong>User</strong> Ledger</h2>
        </div>

        <table class="table table-vcenter table-striped table-bordered table-hover button_margin123">

            <thead>
            <tr>
                <th>Trans ID</th>
                <th>Previous Balance</th>
                <th>Next Balance</th>
                <th>Date</th>
                

                <!--                    <th>Print</th>-->
            </tr>
            </thead>
            <tbody>
            <?php
            
            $url = 'http://api.kandoipower.com/api/walletreport?user_id='.$_SESSION['b2b_kpr_rech_id'];
            
                $data = file_get_contents($url);
                
                $d = json_decode($data);
                //print_r($d);
                foreach($d as $r){
                    ?>
                    <tr>
                        <td><?php echo $r->transaction_id; ?></td>
                        <td><?php echo $r->current_balance; ?></td>
                        <td><?php echo $r->final_balance; ?></td>
                        <td><?php echo $r->date; ?></td>
                        
                    </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>








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

