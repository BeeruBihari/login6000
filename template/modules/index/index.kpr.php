   <!-- <script src="<?php echo Fjs; ?>/pages/index2.js"></script>
        <script>$(function(){ Index2.init(); });</script>
       --> 
<?php
     $o__admin = new admin();
     $url_ADMIN =  $_SERVER["HTTP_HOST"];
$uell_ADMIN = explode(".",$url_ADMIN);
$getdata_ADMIN = $o__admin->getdatabyurl('http://'.$uell_ADMIN[1].'.'.$uell_ADMIN[2]);
     ?>
        <script src="<?php echo Fjs; ?>/helpers/gmaps.min.js"></script>


<script type="text/javascript">
    function showAndroidToast(ordno,amount,cashback,name,mobile,email) {
      // alert('');
        Android.showToast(ordno,amount,cashback,name,mobile,email);
    }
    
    function dataconnection() {
       // alert('');
       mpose.mposeDeviceIntl();
    }
</script>

<div id="page-content">
   
                        <!-- Dashboard 2 Header -->

                        <div class="content-header">
                            <?php flash( 'b2b_login' ); ?>
                            <ul class="nav-horizontal text-center">
                                <li class="">

                                    <a href="javascript:void(0)" class="disput">Disputes(0)</a>
                                </li>
                                <li class="">

                                    <a href="javascript:void(0)">Payment Req.(0)</a>
                                </li>
                            </ul>
							<?php if($_SESSION['b2b_kpr_rech_id'] == 1 || $_SESSION['b2b_kpr_rech_id'] == 102 || $_SESSION['b2b_kpr_rech_id'] == 103 || $_SESSION['b2b_kpr_rech_id'] == 104 || $_SESSION['b2b_kpr_rech_id'] ==105){ ?>
                            <ul class="nav-horizontal text-center">
                                <li class="">

                                    <a href="javascript:void(0)"><i class="fa fa-mobile"></i> Recharge - Bill</a>
                                </li>
                                
                                <li>
                                    <a href="javascript:void(0)" ><i class="fa fa-credit-card-alt" aria-hidden="true"></i> mPOS</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"  ><i class="fa fa-inr " aria-hidden="true"></i> Money Transfer</a>
                                </li>
                                
                                
                               
                                
                                 <li>
                                    <a href="javascript:void(0)"><i class="fa fa-credit-card" aria-hidden="true"></i>Adhaar Pay</a>
                                </li>
                                
                                <li>
                                    <a href="javascript:void(0)" class="mnb"><i class="fa fa-exchange"></i>UPI</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mnb"><i class="fa fa-plane"></i>Travel Booking</a>
                                </li>
                                <li>
                                    
                                    <a href="javascript:void(0)" class="mnb"><i class="fa fa-comments-o"></i>Bulk SMS</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mnb"><i class="fa fa-car"></i>Cab Booking</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mnb"><i class="fa fa-share-alt"></i>API</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mnb"><i class="fa fa-tags"></i>White Label</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mnb"><i class="fa fa-handshake-o"></i>Marketing</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mnb"><i class="fa fa-adn"></i>Ads</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mnb"><i class="fa fa-commenting-o"></i>Live Chat</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mnb"><i class="fa fa-address-book-o"></i>Cybrosys</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mnb"><i class="fa fa-code"></i>Long/Short Code</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mnb"><i class="fa fa-money"></i>Payment Gateway</a>
                                </li>
							<?php } ?>
                            </ul>

                        </div>
                        <!-- END Dashboard 2 Header -->

                        <!-- Dashboard 2 Content -->
						
                        <div class="row">
						<?php if($_SESSION['b2b_kpr_rech_user_type'] == 4){ ?>
						<div class="col-md-12">
                                <!-- Latest Orders Block -->
                                <div class="block">
                                    <!-- Latest Orders Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="#" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                                            
                                        </div>
                                        <h2><strong>Daily</strong> Summery</h2>
                                    </div>
                                    <!-- END Latest Orders Title -->

                                    <!-- Latest Orders Content -->
                                    <table class="table table-borderless table-striped table-vcenter table-bordered">
									<thead>
									<tr>
									<th class="text-center">API NAME</th>
									<th class="text-center">Total Hint</th>
									<th class="text-center">Success Count</th>
									<th class="text-center">Success Transaction</th>
									<th class="text-center">Fail Count</th>
									<th class="text-center">Fail Transaction</th>
									<th class="text-center">Pending Count</th>
									<th class="text-center">Pending Transaction</th>
									<th class="text-center">Total Transaction</th>
									</tr>
									</thead>
                                        <tbody >
                                            <?php
											foreach ($getapi as $grp):
											$th = 0;
											$sc = 0;
											$st = 0;
											$fc = 0;
											$ft = 0;
											$pc = 0;
											$pt = 0;
											$tt = 0;
											$apitrans=$o__report->getallhistrydatabyapi($grp['id']);
											foreach ($apitrans as $r3):
											$th++;
												if($r3['status'] == 1){
                                                    $sc++;
                                                    $st = $st + $r3['amount'];
                                                }
                                                
                                                if($r3['status'] == 2 || $r3['status'] == 3){
                                                    $fc++;
                                                    $ft = $ft + $r3['amount'];
                                                }
                                                
                                                if($r3['status'] == 1){
                                                    $pc++;
                                                    $pt = $pt + $r3['amount'];
                                                }
											$tt = $tt + $r3['amount'];
											endforeach;
											?>
											<tr>
                                                <td class="text-center" style="width: 100px;"><a href="javascript:void(0)"><strong><?php echo $grp['api_name']; ?></strong></a></td>
                                                <td class="text-center"><?php echo $th; ?></td>
                                                <td class="text-center"><span class="label label-success"><?php echo $sc; ?></span></td>
												<td class="text-center"><span class="label label-success"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $st; ?></span></td>
												<td class="text-center"><span class="label label-danger"><?php echo $fc; ?></span></td>
												<td class="text-center"><span class="label label-danger"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $ft; ?></span></td>
												<td class="text-center"><span class="label label-warning"><?php echo $pc; ?></span></td>
												<td class="text-center"><span class="label label-warning"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $pt; ?></span></td>
												<td class="text-center"><span class="label label-success"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $tt; ?></span></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                    <!-- END Latest Orders Content -->
                                </div>
                                <!-- END Latest Orders Block -->
                            </div>
						<?php } ?>
							<div class="col-md-4">
                                <!-- Latest Orders Block -->
                                <div class="block">
                                    <!-- Latest Orders Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                          
                                            
                                        </div>
                                        <h2><strong>Master Distributor</strong> Sign up</h2>
                                    </div>
                                    <!-- END Latest Orders Title -->

                                    <!-- Latest Orders Content -->
                                    <table class="table table-borderless table-striped table-vcenter table-bordered">
                                        <tbody >
                                            
											<tr>
                                                <td class="text-center" style="width: 100px;"><a href="javascript:void(0)"><strong>THIS MONTH</strong></a></td>
                                                
                                                <td class="text-right"><span class="label label-success">5</span></td>
                                            </tr>
											<tr>
                                                <td class="text-center" style="width: 100px;"><a href="javascript:void(0)"><strong>LAST MONTH</strong></a></td>
                                                
                                                <td class="text-right"><span class="label label-success">25</span></td>
                                            </tr>
											<tr>
                                                <td class="text-center" style="width: 100px;"><a href="javascript:void(0)"><strong>TOTAL MONTH</strong></a></td>
                                                
                                                <td class="text-right"><span class="label label-success">37</span></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <!-- END Latest Orders Content -->
                                </div>
                                <!-- END Latest Orders Block -->
                            </div>
							<div class="col-md-4">
                                <!-- Latest Orders Block -->
                                <div class="block">
                                    <!-- Latest Orders Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                           
                                            
                                        </div>
                                        <h2><strong>Distributor</strong> Sign up</h2>
                                    </div>
                                    <!-- END Latest Orders Title -->

                                    <!-- Latest Orders Content -->
                                    <table class="table table-borderless table-striped table-vcenter table-bordered">
                                        <tbody >
                                            
											<tr>
                                                <td class="text-center" style="width: 100px;"><a href="javascript:void(0)"><strong>THIS MONTH</strong></a></td>
                                                
                                                <td class="text-right"><span class="label label-success">33</span></td>
                                            </tr>
											<tr>
                                                <td class="text-center" style="width: 100px;"><a href="javascript:void(0)"><strong>LAST MONTH</strong></a></td>
                                                
                                                <td class="text-right"><span class="label label-success">57</span></td>
                                            </tr>
											<tr>
                                                <td class="text-center" style="width: 100px;"><a href="javascript:void(0)"><strong>TOTAL MONTH</strong></a></td>
                                                
                                                <td class="text-right"><span class="label label-success">119</span></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <!-- END Latest Orders Content -->
                                </div>
                                <!-- END Latest Orders Block -->
                            </div>
							<div class="col-md-4">
                                <!-- Latest Orders Block -->
                                <div class="block">
                                    <!-- Latest Orders Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                           
                                            
                                        </div>
                                        <h2><strong>Retailer</strong> Sign up</h2>
                                    </div>
                                    <!-- END Latest Orders Title -->

                                    <!-- Latest Orders Content -->
                                    <table class="table table-borderless table-striped table-vcenter table-bordered">
                                        <tbody >
                                            
											<tr>
                                                <td class="text-center" style="width: 100px;"><a href="javascript:void(0)"><strong>THIS MONTH</strong></a></td>
                                                
                                                <td class="text-right"><span class="label label-success">10</span></td>
                                            </tr>
											<tr>
                                                <td class="text-center" style="width: 100px;"><a href="javascript:void(0)"><strong>LAST MONTH</strong></a></td>
                                                
                                                <td class="text-right"><span class="label label-success">80</span></td>
                                            </tr>
											<tr>
                                                <td class="text-center" style="width: 100px;"><a href="javascript:void(0)"><strong>TOTAL MONTH</strong></a></td>
                                                
                                                <td class="text-right"><span class="label label-success">266</span></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <!-- END Latest Orders Content -->
                                </div>
                                <!-- END Latest Orders Block -->
                            </div>
						<div class="col-sm-6">
                                <!-- Classic Chart Block -->
                                <div class="block full">
                                    <!-- Classic Chart Title -->
                                    <div class="block-title">
                                        <h2><strong>Account</strong> Chart</h2>
                                    </div>
                                    <!-- END Classic Chart Title -->

                                    <!-- Classic Chart Content -->
                                    <!-- Flot Charts (initialized in js/pages/compCharts.js), for more examples you can check out http://www.flotcharts.org/ -->
                                    <div id="chart-classic" class="chart"></div>
                                    <!-- END Classic Chart Content -->
                                </div>
                                <!-- END Classic Chart Block -->
                            </div>
                            <div class="col-md-6">
                                <!-- Latest Orders Block -->
                                <div class="block">
                                    <!-- Latest Orders Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="index.php?action=livetrans" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                                            
                                        </div>
                                        <h2><strong>Latest</strong> Transaction</h2>
                                    </div>
                                    <!-- END Latest Orders Title -->

                                    <!-- Latest Orders Content -->
                                    <table class="table table-borderless table-striped table-vcenter table-bordered">
                                        <tbody class="add_data_das">
                                            
											<!--<tr>
                                                <td class="text-center" style="width: 100px;"><a href="javascript:void(0)"><strong>ORD.685116</strong></a></td>
                                                <td class="hidden-xs"><a href="javascript:void(0)">Gerald Berry</a></td>
                                                <td class="hidden-xs">Paypal</td>
                                                <td class="text-right"><strong>$65,00</strong></td>
                                                <td class="text-right"><span class="label label-success">Delivered</span></td>
                                            </tr>-->
                                            
                                        </tbody>
                                    </table>
                                    <!-- END Latest Orders Content -->
                                </div>
                                <!-- END Latest Orders Block -->
                            </div>
							
							
							
                            
                            
                            <style>
                                  .button_margin123
                                {
                                   margin-bottom:75px;
                                }
                                .home1
                                {
                                    color:#1bbae1;
                                }
                                .home2
                                {
                                    color:#f9fafc;
                                }
                                .home2:hover
                                {
                                    color:#1bbae1;
                                }
                                
                            </style>
                        </div>
                        <!-- END Dashboard 2 Content -->
                   
                    <!-- END Page Content -->
                    </div>
					<script src="ajax/livedata.js"></script>
					<script src="<?php echo Fjs;?>/pages/compCharts.js"></script>
					<script>$(function(){ CompCharts.init(); });</script>