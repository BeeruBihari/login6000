<div id="page-content">
    <!-- Table Responsive Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                All Transaction Report<br>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>All Transaction Report</li>
        <li><a href="">Transaction Report</a></li>
    </ul>

    <div class="block">
        <div class="block-title">
            <h2>All Transaction Report</h2>

        </div>

        <form action="" id="form-horizontal" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" >

            <div class="row">

<!--                <div class="col-xs-12 col-sm-12">
                    <div class="form-group">

                        <div class="col-md-12">
                            <label class="radio-inline" for="type">
                                <input type="radio" id="type" name="type" value="recharge"> Recharge
                            </label>

                        </div>
                    </div>
                </div>-->


                <div class="col-xs-12 col-sm-12">

                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="from">From</label>
                                <div class="col-md-8 col-xs-11">
                                    <input type="text" id="from" name="from" class="form-control input-datepicker forn_control12" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                </div>
                            </div> 
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="to">To</label>
                                <div class="col-md-8 col-xs-11">
                                    <input type="text" id="to" name="to" class="form-control input-datepicker forn_control12" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                </div>
                            </div><br>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="to">Type</label>
                                <div class="col-md-8 col-xs-11">
                                    <select required="" id="user_type" name="rech_type" class="form-control val_select">
                                        
                                         <?php if($_SESSION['b2b_kpr_rech_user_type']=="4" || $_SESSION['b2b_kpr_rech_user_type']=="0"): ?>
                                        <option value="MobileRecharge">MobileRecharge</option>
                                        <option value="Electricity">Electricity</option>
                                        <option value="Gas">Gas</option>
                                        <option value="Insurance">Insurance</option>
                                        <option value="BroadBand">BroadBand</option>
                                        <option value="LandLine">LandLine</option>
                                        <option value="DMT">DMT</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div><br>
                        </div>

 
                        <div class="col-xs-12 col-sm-4"></div>
                        <div class="col-xs-12 col-sm-3">
                            <div class="form-group">
                                <center><button name="manualst_submit" type="submit" class="btn btn-sm btn-primary" style="margin-top:5px;"><i class="fa fa-angle-right"></i> Submit</button></center>
                            </div>
                        </div><br>
                    </div> 



                </div>



            </div>





        </form>
    </div>
    <script src="http://kpagent.kandoipower.com/template/sections/js/vendor/jquery.min.js"></script>

    <script src="http://kpagent.kandoipower.com/template/sections/js/pages/adduser.js"></script>

    <script>$(function() {
            Report1.init();
        });</script>


    <div class="block">


        <div class="block-title">
            <h2><strong>Transaction View</strong> Report</h2>
        </div>

        <table class="table table-vcenter table-striped table-bordered button_margin123">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>User-Name</th>
                    <th>User Type</th>
                    <th>Recharge Type</th>
                    <th>Mobile No.</th>                   
                    <th>Prev. Balance</th>
                    <th>Amount Transacted</th>
                    <th>Next Balance</th>
                    <th>Transaction Id</th>
                    <th>Status</th>
                    <th>Transaction Type</th>
                    <th>Date/Time</th>
<!--                    <th>Print</th>-->
                </tr>
            </thead>
            <tbody>
            <?php 
     
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
            .val_select
            {
                width: 100%; 
            }
            .forn_control12
            {
                margin-left: 14px;
                width: 92%; 
            }
            .button_margin123
            {
                margin-bottom:65px;
            }

            @media only screen and (min-width:768px) and (max-width: 768px)
            {
                .forn_control12
                {
                    margin-left: 10px;
                    width: 100%; 
                }
                .val_select
                {
                    width: 95%; 
                }
            }
            @media only screen and (min-width:300px) and (max-width: 320px)
            {
                .forn_control12
                {
                    margin-left: 14px;
                    width: 100%; 
                }
            }


            @media only screen and (min-width:321px) and (max-width: 360px)
            {
                .forn_control12
                {
                    margin-left: 14px;
                    width: 100%; 
                }
            }
            @media only screen and (min-width:361px) and (max-width: 414px)
            {
                .forn_control12
                {
                    margin-left: 14px;
                    width: 100%; 
                }
            }

            @media only screen and (min-width:473px) and (max-width: 600px)
            {
                .val_select
                {
                    width: 89%; 
                }
            }
            @media only screen and (min-width: 769px) and (max-width: 960px)
            {
            }
            @media only screen and (min-width: 961px) and (max-width: 1024px)
            {
            }

            @media only screen and (min-width:1025px) and (max-width: 1280px)
            {
            }

            @media only screen and (min-width:1440px) and (max-width: 1440px)
            {
            }

            @media only screen and (min-width:1441px) and (max-width: 1920px)
            {
            }

            table 
            {
                overflow:scroll;

            }
            .table-responsive {
                width: 100%;
                margin-bottom: 15px;
                overflow-x: auto;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch;
                -ms-overflow-style: -ms-autohiding-scrollbar;
                border: 1px solid #DDD;
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

