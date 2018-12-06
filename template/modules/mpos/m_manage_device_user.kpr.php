<link rel="stylesheet" href="<?php echo Fcss;  ?>/plugins.css">

<div id="page-content">
                        <!-- Table Responsive Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Manage  Device<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Mpos</li>
                            <li><a href="">Manage  Device</a></li>
                        </ul>
                        
                        <div class="block">
                            <?php
                            flash('update_mpos'); 
                            ?> 
                            <div class="block-title">
                               
                              
                                <div class="row">
                                    <div class="col-sm-12 col-xs-10">
                                        
                                        <h2><strong>Manage  Device</strong> Table</h2>
                                        
                                    </div>
                          </div>          
                    </div>
                     
                                   
                               
                           
                          
                            <table class="table table-vcenter table-striped table-bordered">
                                
                                <thead>
                                    <tr>
                                        <th>Sr. Number</th>
                                        <th>User id</th>
                                        <th>Rent</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Assign Date</th>
                                        <th>Status</th>
                                        <th>Select User</th>
                                        <th>Assign Detail</th>
                                        <th></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($data as $r){
                                     $assign_user = $o__mpos->getassignmposusers($r['id']);   
                                    if($r['time'] == 0){
                                        $sts ='Deactivate';
                                    }
                                    elseif($r['time'] == 1){
                                        $sts ='Activate';
                                    }
                                    else{
                                        $sts ='';
                                    }
                                    ?>
                                <form method="post" action="">
                                <input type="hidden" value="<?php echo $r['id']; ?>" name="dataid">
                                
                                    <tr>
                                       <td><?php echo $r['sr_no']; ?></td>
                                       <td><?php echo $assign_user->assign_user; ?></td>
                                       <td><input type="text" value="<?php echo $r['rent']; ?>" name="rent" class="form-control" required></td>
                                       <td><?php echo $r['date']; ?></td>
                                       <td><?php echo $r['time']; ?></td>
                                       <td><?php echo $r['assign_date']; ?></td>
                                       <td><?php echo $sts; ?></td>
                                       <td>
                                           <select class="form-control" name="user_id" required>
                                            <option value=''>Select User</option>
                                            <?php
                                                foreach($userdata as $ur){
                                                    ?>
                                            <option <?php if($ur['id'] == $assign_user->assign_user){ echo 'selected';} ?> value='<?php echo $ur['id']; ?>'><?php echo $ur['firstname'].' '.$ur['lastname']; ?></option>
                                            <?php
                                                }
                                            ?>
                                          </select>
                                          
                                       </td>
                                       <td><input type="date" name="assign_date" class="form-control" required>
                                       <input type="text" name="day" value="<?php echo $r['rent_day']; ?>" class="form-control" placeholder="Enter Day For Rent" required>
                                       <select class="form-control" name="sts" required>
                                           <option value=''>Change Status</option>
                                           <option value='1'>Active</option>
                                           <option value='0'>Deactivate</option>
                                           </select>
                                       </td>
                                       <td><button type="submit" name="mpos_assign" class="btn btn-default">Update</button></td>
                                    </tr>
                                   
                                    
                                    
                                </form>
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
                   
                    