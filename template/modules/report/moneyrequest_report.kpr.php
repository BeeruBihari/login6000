<link rel="stylesheet" href="<?php echo Fcss;  ?>/plugins.css">

<div id="page-content">
                        <!-- Table Responsive Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Money Request Report<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Report</li>
                            <li><a href=""> Money Request Report</a></li>
                        </ul>
                        
                        <div class="block">
                            
<!--                            <div class="block-title">
                               
                              
                                <div class="row">
                                    <div class="col-sm-12 col-xs-10">
                                        
                                        <h2><strong> Money Request Report</strong> Table</h2>
                                        
                                    </div>
                                    
                    </div>
                     <form method="post">
                                    <div class="row">
                                    <div class="col-sm-1 col-xs-12" style="margin-left:1%;">
                                         
                                        <div class="" id="example-datatable_length">
                                            <label>
                                                <select name="example-datatable_length" aria-controls="example-datatable" class="form-control">
                                                    <option value="10">10</option>
                                                    <option value="20">50</option>
                                                    <option value="30">100</option>
                                                    <option value="30">All</option>
                                                    
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                    
                                     <div class="col-sm-2 col-xs-12" style="margin-left:1%;">
                                         
                                        <div class="" id="example-datatable_length">
                                            <label>
                                                <select name="example-datatable_length" aria-controls="example-datatable" class="form-control">
                                                    <option value="10">Member-Id</option>
                                                    <option value="20">Trnsaction-Id</option>
                                                    
                                                    
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                   
                                    <div class="col-sm-3 col-xs-5">
                                        <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Search Item">
                                    </div>
                                    
                                    
                                    <div class="col-md-2">
                                           <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Search</button>
                                  </div>
                                      
                                             
                                    </div>
                                    </form>
                                   
                                </div>-->
                           
                          
                            <table class="table table-vcenter table-striped table-bordered">
                                
                                <thead>
                                    <tr>
                                        
                                        <th>Transaction-Id</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Amount</th>
                                        <th>Bank</th>
                                        <th>Bank Ref</th>
                                        <th>Transfer Type</th>
                                        <th>Entry Date</th>
                                        <th>Modify Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <form method="post">
                                <?php //print_r($getallmoneydata);  ?>
                                <?php foreach ($getallmoneydata as $admin_val):  ?>
                                    <?php $uplevel_name=$o__report->getb2busersbyid($admin_val['uplevel_id']); ?>
                                    <?php $user_name=$o__report->getb2busersbyid($admin_val['user_id']); ?>
                               
                                    <tr>
                                       <td><?php echo $admin_val['transaction_id']; ?></td>
                                       <td><?php echo $uplevel_name->username; ?></td>
                                       <td><?php echo $user_name->username; ?></td>
                                       <td><?php echo $admin_val['amount']; ?></td>
                                       <td><?php echo $admin_val['bank']; ?></td>
                                       <td><?php echo $admin_val['bank_ref']; ?></td>
                                       <td><?php echo $admin_val['transfer_type']; ?></td>
                                       <td><?php echo $admin_val['date'].' '.$admin_val['time']; ?></td>
                                       <td><?php echo $admin_val['approve_date'].' '.$admin_val['approve_time']; ?></td>
                                         <td>
                                             <?php if($admin_val['status'] == '0') :?>
                                             <label class="btn btn-warning ">Pending</label>
                                             
                                             <?php elseif($admin_val['status'] == '1') :?>
                                             <label class="btn btn-success ">Accept</label>
                                             <?php elseif($admin_val['status'] == '2') :?>
                                             <label class="btn btn-danger">Decline</label>
                                             <?php endif;?>
                                         </td>
                                         
                                       
                                    </tr>
                                   
                                     <?php endforeach;  ?>
                                    
                                </form>
                                    
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
                   
                    