<link rel="stylesheet" href="<?php echo Fcss; ?>/plugins.css">
<script src="ajax/commission.js"></script>
<script>
   $(function(){
       get_queue_transection();
   });
</script>
<style>
 


</style>
<div id="page-content" style="min-height: 694px;">
    <!-- Table Responsive Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                 Queue Report
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Home</li>
        <li><a href="">Queue Report</a></li>
    </ul>
     <div class="msgajax" style="color: green; font-size: 15px; margin-bottom: 2%;">
                                     
                                        </div>

    <div class="block table-responsive">
        <!-- Responsive Partial Title -->
        <div class="block-title">



        </div>


        <table class="table table-vcenter table-bordered table-fixed">

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
                    <th>Action</th>
                    <th>TrxID</th>
                    <th>Entry Date</th>
                    <th>Product</th>
                    <th>Amount</th>
                    <th>Topup Number</th>
                    <th>Phone Number</th>
                    <th>Member Code</th>
                    <th>Member Name</th>
                    <th>Module</th>
                    <th>Status</th>
                    <th>Status Date</th>
                    <th>Buy Price</th>
                    <th>Sell Price</th>
                    <th>Commission</th>
                    <th>Profit</th>
                    <th>Previous Balance</th>
                    <th>Next Balance</th>
                    
					<th>Serial Number</th>
                    <th>Ref. ID</th>
                </tr>
            </thead>
            <tbody class="add_data" style="color:#fff;">
            
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