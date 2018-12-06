<link rel="stylesheet" href="<?php echo Fcss; ?>/plugins.css">
<script src="ajax/commission.js"></script>

<div id="page-content" style="min-height: 694px;">
    <!-- Table Responsive Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                 Transaction Report
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Home</li>
        <li><a href="">Transaction Report</a></li>
    </ul>
     <div class="msgajax" style="color: green; font-size: 15px; margin-bottom: 2%;">
                                     
                                        </div>

    <div class="block table-responsive">
        <!-- Responsive Partial Title -->
        <div class="block-title">



        </div>


        <table class="table table-vcenter table-bordered">

            <thead>
     <!--           <tr>-->
     <!--                <th>Member Code</th>-->
     <!--               <th>UserType</th>-->
     <!--                <th>TrxID</th>-->
     <!--               <th>Member Name</th>-->
     <!--               <th>Topup Number</th>-->
     <!--               <th>Phone Number</th>-->
     <!--               <th>Previous Balance</th>-->
     <!--               <th>Amount</th>-->
     <!--               <th>Next Balance</th>-->
					<!--<th>Serial No.</th>-->
     <!--               <th>Status</th>-->
     <!--               <th>Credited/Debited</th>-->
					<!--<th>Response</th>-->
     <!--               <th>Entry Date</th>-->
     <!--               <th>Commission</th>-->
     <!--                <th>Profit</th>-->
     <!--           </tr>-->
     
                <tr>
                    <!--<th>Serial No.</th>-->
                    <th>TrxID</th>
                    <th>Date</th>
                    <th>Bank Name</th>
                    <th>Banf. Name</th>
                    <th>A/C</th>
                    <th>BenCode</th>
                    <th>BenIFSC</th>
                    <th>Amount</th>
                    <th>Trans. Type</th>
                    
                    <th>Status</th>
                    
                </tr>
            </thead>
            <tbody class="" >
                <?php
                $data = $o__report->getDMThitry();
                
                foreach($data as $r){
                   
                if($r['status'] == '0'){
                    $status = 'Pending';
                }
                elseif($r['status'] == '1'){
                    $status = 'Success';
                }
                else{
                    $status = 'Fail';
                }
                
                
                if(isset($r['json'])){
                    
                    $dd = json_decode($r['json']);
                    
                    // $mr = $dd->MoneyRemittance;
                    // $bnf = $dd->Beneficiary;
                    // $bnk = $dd->BankDetail;
                    
                    
                }
                ?>
            <tr>
                <td>
                    <?php echo $r['transaction_id']; ?>
                </td>
                <td>
                    <?php echo $r['date'].'<br>'.$r['time']; ?>
                </td>
                <td>
                    <?php echo $dd->BankDetail->BankName; ?>
                </td>
                <td>
                    <?php echo $dd->MoneyRemittance->BenefName; ?>
                </td>
                <td>
                    <?php echo $dd->Beneficiary->AccountNo; ?>
                </td>
                <td>
                    <?php echo $r['bencode']; ?>
                </td>
                <td>
                    <?php echo $r['benifsc']; ?>
                </td>
                <td>
                    <?php echo $r['amount']; ?>
                </td>
                <td>
                    <?php echo $r['routingtype']; ?>
                </td>
                <td>
                    <?php echo $status; ?>
                </td>
                
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>


   
            

         


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