<link rel="stylesheet" href="<?php echo Fcss;  ?>/plugins.css">

<div id="page-content">
                        <!-- Table Responsive Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                     User Daybook<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Admin Utility</li>
                            <li><a href="">User Daybook</a></li>
                        </ul>
                        
                        <div class="block">
                            
                            <div class="block-title">
                               
                               
                                <div class="row">
                                    <div class="col-sm-12 col-xs-10">
                                        
                                        <h2><strong>User Daybook</strong> Table</h2>
                                        
                                    </div>
                                    
                    </div>
                    </div>
                      <form method="get" action="">
                          <input type="hidden" name="action" value="user_daybook" />
                                    <div class="row" style="margin-bottom:3%;">
                                    
                                    
                                    <div class="col-md-1"></div>
                                   
                                   <div class="col-md-3">
                                                <input type="text" id="example-text-input" name="uid" class="form-control" placeholder="Enter Member Id">
                                              
                                            </div>
                                    
                                    <div class="col-md-2">
                                            <input type="text" id="example-datepicker" name="sdate" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="From Date">
                                     </div>
                                      
                                     <div class="col-md-2">
                                            <input type="text" id="example-datepicker" name="edate" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="To Date">
                                    </div>
                                    
                                    <div class="col-md-2">
                                           <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Search</button>
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
                                            <th>Total Hits</th>
                                            <th>Total Amount</th>
                                            <th>SuccessHits</th>
                                            <th>SuccessAmt</th>
                                            <th>FailedHits</th>
                                            <th>FailedAmt</th>
                                            <th>PendingHits</th>
                                            <th>PendingAmt</th>
                                            <th>Commission</th>
                                            
                                            </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        $i=1;
                                        $opdsc = $o__report->getopdscbycode();
                                        $Total_success = 0;
                                        $Total_fail = 0;
                                        $Total_pending = 0;
                                        $Total = 0;
                                        $TH = 0;
                                        $FH = 0;
                                        foreach($opdsc as $r){
                                            
                                            $th = 0;
                                            $tamt = 0;
                                            $sh = 0;
                                            $samt = 0;
                                            $fh = 0;
                                            $famt = 0;
                                            $ph = 0;
                                            $pamt = 0;
                                            $cms = 0;
                                            
                                        
                                        $userdata = $o__report->getallusers();
                                        foreach($userdata as $r2){
                                            
                                            $usertypp = $r2['user_type'];
                                    		$condition=false;
                                    	    switch ($usertypp){
                                    	       case 1:
                                    	           if($r2['id'] == $_SESSION['b2b_kpr_rech_id'] || $r2['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r2['admin_id'] == $_SESSION['b2b_kpr_rech_id']){
                                    	            $condition=true;   
                                    	           }
                                    	            break;
                                    	       case 2:
                                    	            $sql_md = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r2['uplevel_id']."'");
                                    	            $r_md = mysqli_fetch_array($sql_md);
                                    	            if($r2['id'] == $_SESSION['b2b_kpr_rech_id'] || $r2['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_md['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r2['admin_id'] == $_SESSION['b2b_kpr_rech_id']){
                                    	            $condition=true;   
                                    	           }
                                    	            break;
                                    	       case 3:
                                    	           $sql_dis = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r2['uplevel_id']."'");
                                    	           $r_dis = mysqli_fetch_array($sql_dis);
                                    	           $sql_md = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r_dis['uplevel_id']."'");
                                    	           $r_md = mysqli_fetch_array($sql_md);
                                    	           if($r2['id'] == $_SESSION['b2b_kpr_rech_id'] || $r2['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_dis['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_md['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r2['admin_id'] == $_SESSION['b2b_kpr_rech_id']){
                                    	            $condition=true;   
                                    	           }
                                    	            break;     
                                    	       case 4:
                                    	            break;
                                    	       case 5:
                                    	           if($r2['id'] == $_SESSION['b2b_kpr_rech_id'] || $r2['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r['admin_id'] == $_SESSION['b2b_kpr_rech_id']){
                                    	            $condition=true;   
                                    	           }
                                    	            break;
                                    	       case 6:
                                    	           if($r2['id'] == $_SESSION['b2b_kpr_rech_id'] || $r2['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
                                    	            $condition=true;   
                                    	           }
                                    	            break;     
                                    	    }
                                            
                                            if($condition ==true){
                                                
                                            
                                            if($_GET['sdate'] != '' && $_GET['edate'] != ''){
                                                
                                            $alldata = $o__report->getallhistrydatabydate($r2['id'],$r['opcode'],$_GET['sdate'],$_GET['edate']);
                                            
                                            }else{
                                               $sdate1 =  date("Y-m-d");
                                               $edate1 = date("Y-m-d");
                                            //$alldata = $o__report->getallhistrydata($r2['id'],$r['opcode']);
                                            $alldata = $o__report->getallhistrydatabydate($r2['id'],$r['opcode'],$sdate1,$edate1);
                                            }
                                            foreach($alldata as $r3){
                                                $th++;
                                                $TH++;
                                                $tamt = $tamt + $r3['amount'];
                                                $Total = $Total + $tamt;
                                                if($r3['status'] == 1){
                                                    $sh++;
                                                    $samt = $samt + $r3['amount'];
                                                    $Total_success = $Total_success + $samt;
                                                }
                                                
                                                if($r3['status'] == 2 || $r3['status'] == 3){
                                                    $fh++;
                                                    $FH++;
                                                    $famt = $famt + $r3['amount'];
                                                    $Total_fail = $Total_fail + $famt;
                                                }
                                                
                                                if($r3['status'] == 0){
                                                    $ph++;
                                                    $pamt = $pamt + $r3['amount'];
                                                    $Total_pending = $Total_pending + $pamt;
                                                }
                                                
                                                $cms = $cms + $r3['commission'];
                                                
                                            }
                                        }
                                            
                                            
                                        }
                                        
                                            
                                        
                                            
                                            
                                        
                                            
                                        
                                            
                                        if($th != 0 || $tamt != 0){
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php echo $r['OperatorDescritpion']; ?>
                                            </td>
                                            <td>
                                                <?php echo $th; ?>
                                            </td>
                                            <td>
                                                <?php echo $tamt; ?>
                                            </td>
                                            <td>
                                                <?php echo $sh; ?>
                                            </td>
                                            <td>
                                                <?php echo $samt; ?>
                                            </td>
                                            <td>
                                                <?php echo $fh; ?>
                                            </td>
                                            <td>
                                                <?php echo $famt; ?>
                                            </td>
                                            <td>
                                                <?php echo $ph; ?>
                                            </td>
                                            <td>
                                                <?php echo $pamt; ?>
                                            </td>
                                            <td>
                                                <?php echo $cms; ?>
                                            </td>
                                            
                                        </tr>
                                        <?php
                                        
                                            
                                        
                                        $i++;
                                        }
                                        }
                                            ?>
                                        <tr>
                                            <th>Total Success</th>
                                            <th><?php echo $Total_success; ?></th>
                                            
                                            <th>Total Fail</th>
                                            <th><?php echo $Total_fail; ?></th>
                                            
                                            <th>Total Pending</th>
                                            <th><?php echo $Total_pending; ?></th>
                                            
                                            <th>Total</th>
                                            <th><?php echo $Total; ?></th>
                                            <th colspan="2">Fail Ratio</th>
                                            <th><?php $fpr=0; if($FH < 1){echo '0%';}else{$fpr = 100 * $FH / $TH; echo round($fpr).'%';} ?></th>
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
                    
                   
                    