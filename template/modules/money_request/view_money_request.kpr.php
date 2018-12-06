    <div id="page-content">
                        <!-- Table Responsive Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    View Money Request<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Money Request</li>
                            <li><a href="">View Money Request</a></li>
                        </ul>
                        <form method="post">
                        <div class="block">
                            <div class="block-title">
                                <h2>Filter</h2>
                            </div>
                            <table class="table table-vcenter table-striped button_margin123">
                                <thead>
                                    <tr>
                                        <td>
                                            <div class=" one_way_flight form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 control-label" for="example-datepicker">From </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="departure" name="from_date" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=" one_way_flight form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 control-label" for="example-datepicker">To </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="departure" name="to_date" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                </div>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td colspan="2"><center>
                                            <button type="submit" name="payment_filter" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                </center></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                            </form>
                        
                        <div class="block">
                            <?php flash('add_money_request'); ?>
                            <?php //echo $_SESSION['b2b_kpr_rech_balance']; ?>
                            <!-- Responsive Partial Title -->
                            <div class="block-title">
                                <h2><strong>View Money Request</strong> Table</h2>
                            </div>
                          
                            <table class="table table-vcenter table-striped button_margin123">
                                <thead>
                                    <tr>
                                        <th>Amount</th>
                                        <th>Transfer Type</th>
                                        <th>Bank Reference ID</th>
                                        <th>Remarks</th>
                                        <th>Request From</th>
                                        <th>Request To</th>
                                        <th>Status</th>
                                        <th>Deposited Date</th>
                                        <th>Requested Time</th>
                                        <th>Approve / Decline Time</th>
                                        <th>Deposited Bank</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($as_money_records as $r => $money): 
                                    $user=$b2b_money_requests->getOneUsername($money['user_id']);
                                    $admin=$b2b_money_requests->getOneUsername($money['uplevel_id']);
                                    ?>
                                    <tr>
                                        <td><?php echo $money['amount']; ?></td>
                                        <td><?php echo $money['transfer_type']; ?></td>
                                        <td><?php echo $money['bank_ref']; ?></td>
                                        <td><?php echo $money['remarks']; ?></td>
                                        <td><?php echo $user->username; ?></td>
                                        <td><?php echo $admin->username; ?></td>
                                        <td>
                                            <?php if($money['status']=='0'): ?>
                                               <a  class="label label-warning but_padding" style="">Pending</a><br><br>
                                        <?php elseif($money['status']=='1'): ?>

                                                    <a  class="label label-success but_padding" style="">Approve</a><br><br>
                                                <?php elseif($money['status']=='2'): ?>

                                                <a  class="label label-danger but_padding">Decline</a><br><br>
                                                <?php else:
                                                endif;
                                                ?>
                                        </td>
                                        <td><?php echo $money['date']; ?></td>
                                        <td><?php echo $money['date'].' '.$money['time']; ?></td>
                                        <td><?php echo $money['approve_date'].' '.$money['approve_time']; ?></td>
                                        <td><?php echo $money['bank']; ?></td>

                                    
                                        
                                    </tr>
                                    <?php endforeach; ?>
                                    
                                    
                                    
                                    
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
                        .button_margin123
                    {
                        margin-bottom:65px;
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
                    
                    