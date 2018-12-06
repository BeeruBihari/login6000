<link rel="stylesheet" href="<?php echo Fcss;  ?>/plugins.css">
<script src="ajax/commission.js"></script>
<script src="<?php echo Fjs;?>/pages/tablesDatatables.js"></script>
<div id="page-content">
                        <!-- Table Responsive Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    View User<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>User</li>
                            <li><a href="">View User</a></li>
                        </ul>
                        
                        <div class="block">
                            <!-- Responsive Partial Title -->
                            <?php flash('add_user');
                            flash('active_deactive');
                            flash('debite');
                            ?>
                            <div class="block-title">
                               
                                <div class="row">
                                    <div class="col-sm-11 col-xs-10">
                                        
                                        <h2><strong>View User</strong> Table</h2>
                                        
                                    </div>
                                     <div class="col-sm-1 col-xs-2" style="padding:10px;">
                                    <span class="" >
                            <a id="ContentPlaceHolder1_HyperLink1" data-toggle="tooltip" title="Add" class="fa fa-2x fa-plus-square" href="#" data-original-title="Create"></a><div class="tooltip fade top in" style="top: 86px; left: 1235.56px; display: block;"></div>
                            <a id="ContentPlaceHolder1_btn_export" data-toggle="tooltip" title="Excel" class="fa fa-2x fa-file-excel-o" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$btn_export','')" data-original-title=""></a>
                    </span>
                    </div>
                    </div>
                                    <div class="row">
                                    <div class="col-sm-3 col-xs-12" style="margin-left:1%;">
                                         
                                        <div class="" id="example-datatable_length">
                                            <label>
                                                <select name="example-datatable_length" aria-controls="example-datatable" class="form-control">
                                                   <?php if($_SESSION['b2b_kpr_rech_user_type'] =='0' ): ?>
                                                    <option value="1">Master Destributor</option>
                                                      <option value="4">Admin</option>
                                                    <?php endif; ?>
                                                    <?php if($_SESSION['b2b_kpr_rech_user_type'] =='4' ): ?>
                                                    <option value="1">Master Destributor</option>
                                                    <option value="4">Admin</option>
                                                    <?php endif; ?>
                                                    <?php if($_SESSION['b2b_kpr_rech_user_type'] =='1' ): ?>
                                                    <option value="2">Destributor</option>
                                                   
                                                    <?php endif; ?>
                                                    <?php if($_SESSION['b2b_kpr_rech_user_type'] =='2' ): ?>
                                                    <option value="3">Retailer</option>
                                                    <?php endif; ?>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                   
                                     <div class="col-sm-1"></div>
                                    <div class="col-sm-5 col-xs-6">
                                                <label class="radio-inline" for="example-inline-radio1">
                                                    <input type="radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> Active
                                                </label>
                                                <label class="radio-inline" for="example-inline-radio2">
                                                    <input type="radio" id="example-inline-radio2" name="example-inline-radios" value="option2"> De-active
                                                </label>
                                                <label class="radio-inline" for="example-inline-radio3">
                                                    <input type="radio" id="example-inline-radio3" name="example-inline-radios" value="option3"> All
                                                </label>
                                            </div>
                                            
                                             <div class="col-sm-2 col-xs-5">
                                        <div id="example-datatable_filter" class="dataTables_filter">
                                            <label>
                                                <div class="input-group">
                                                    <input type="search" class="form-control" placeholder="Search" aria-controls="example-datatable">
                                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                           
                          
                            <table  class="table table-vcenter table-striped table-condensed">
                                
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Company Name</th>
                                        <th>Website/Domain URL</th>
                                        <th>Mobile</th>
                                        <!--<th>API Holding</th>-->
                                        <td>Password</td>
                                        <th>Balance</th>
                                         <th>User Type</th>
                                        <th>Status</th>
                                        <th style="width:30%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <form method="post">
                                    
                                <?php 
                                //print_r($as_users_records);
                                foreach($as_users_records as $users): ?>
                                    <tr>
                                        <td>
                                            <i class="fa fa-plus-circle add_but1 plus<?php echo $users['id']; ?> getuserdata" data-userid="<?php echo $users['id']; ?>" aria-hidden="true"></i>
                                            <i class="fa fa-minus-circle minus_but1 minus<?php echo $users['id']; ?>" data-userid="<?php echo $users['id']; ?>" aria-hidden="true" style="display:none;color: red;"></i>
                                        </td>
                                        <td><?php echo $users['firstname'].' '.$users['lastname']; ?></td>
                                        <td><?php echo $users['cmpy_name']; ?></td>
                                        <td><?php echo $users['website']; ?></td>
                                        <td><?php echo $users['mob_no']; ?></td>
                                        <td><?php echo $users['show_password']; ?></td>
                                        <!--<td><?php $api=$o__user->getapisbyuser($users['id']);
                                            $c=count($api); $i=1;
                                            foreach ($api as $a):

                                                if($i==$c)
                                                {
                                                    if($a['api_id']==1){ echo 'Recharge'; }
                                                    if($a['api_id']==2){ echo 'Wallet'; }
                                                    if($a['api_id']==3){ echo 'Flight'; }
                                                    if($a['api_id']==4){ echo 'DTH'; }
                                                    if($a['api_id']==5){ echo 'Money Transfer'; }
                                                    if($a['api_id']==6){ echo 'Bus'; }
                                                }
                                                else{
                                                    if($a['api_id']==1){ echo 'Recharge,'; }
                                                    if($a['api_id']==2){ echo 'Wallet,'; }
                                                    if($a['api_id']==3){ echo 'Flight,'; }
                                                    if($a['api_id']==4){ echo 'DTH,'; }
                                                    if($a['api_id']==5){ echo 'Money Transfer,'; }
                                                    if($a['api_id']==6){ echo 'Bus,'; }

                                                }
                                                $i++;
                                            endforeach;
                                             ?></td>-->
                                        <td><?php echo $users['balance']; ?></td>
                                        <td>
                                            <?php
                                            echo ($users['user_type']==1 ? 'Master Distributor' : '');
                                             echo ($users['user_type']==4 ? 'Admin' : '');
                                            echo ($users['user_type']==2 ? 'Distributor' : '');
                                            echo ($users['user_type']==3 ? 'Retailer' : '');
                                            ?>
                                        </td>
                                        <td>
                                            <?php if($users['status']=='1'): ?>
                                            
                                            
                                            <button data-toggle="tooltip" title="Active" type="button"   class="btn btn-warning " style="width: 39px;border-radius:3px;background-color:#008000a1;color:#fff;border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-check"></i></button>
    
     
                                        <?php else: ?>
                                        
                                               
                                               <button data-toggle="tooltip" title="De-Active" type="button"   class="btn btn-warning " style="width: 39px;border-radius:3px;background-color:#ff0000a1;color:#fff;border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-ban" aria-hidden="true"></i></button>
    
                                            <?php endif; ?>
                                        </td>
                                        
                                        <td class="">
                                            
                                            <div class="btn-group" style="width:100%;">
                                                
                                                <button data-toggle="tooltip" title="Edit" type="button" onclick="document.location.href='index.php?action=add_user&id=<?php echo $users['id']; ?>';"  name="active" value="<?php echo $users['id'] ?>" class="btn btn-warning " style="width: 39px;background-color:#f0c129;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-pencil"></i></button>
                                               <?php if($users['status']=='0'): ?>
                                                  <button data-toggle="tooltip" title="Active" type="submit" name="active" value="<?php echo $users['id'] ?>" class="btn btn-warning " style="border-radius:3px;background-color:#4d4d4d;color:#fff;border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-check"></i></button>
    
     
                                       
   
                                               <?php else: ?>
                                                   <button data-toggle="tooltip" title="De-Active" type="submit" name="deactive" value="<?php echo $users['id'] ?>" class="btn btn-danger " style="width: 39px;border-radius:3px;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-times"></i></button>
                                               <?php endif; ?>

                                               <?php if($users['custom_commission']=='1'): ?>
                                               <button data-toggle="tooltip" title="Add Commision" type="button" onclick="document.location.href='index.php?action=add_commission_custom&cid=<?php echo $users['id']; ?>';"  name="active" value="<?php echo $users['id'] ?>" class="btn btn-warning " style="width: 39px;background-color:#f0c129;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-usd"></i></button>
                                                <!--<a href="index.php?action=add_commission&cid=<?php echo $users['id']; ?>" class="label label-primary but_padding" data-toggle="tooltip" title="Add Commision"><i class="fa fa-usd" aria-hidden="true"></i></a>-->
                                               <?php endif; ?>
                                               <?php if($_SESSION['b2b_kpr_rech_user_type']=="0" || $_SESSION['b2b_kpr_rech_user_type']=="4"): ?>
                                                <button class="btn btn-danger " data-toggle="tooltip" title="Assign API" type="button" onclick="document.location.href='index.php?action=add_api&aid=<?php echo $users['id']; ?>';"  name="active" value="<?php echo $users['id'] ?>"  style="width: 39px;background-color:#33ad9c;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-link"></i></button>
                                                 <?php endif; ?>
                                                <!--<a href="index.php?action=add_api&aid=<?php echo $users['id']; ?>" class="label label-success but_padding" data-toggle="tooltip" title="Assign API" style="height:30px;width:30px;margin-left: 5px;margin-right: 5px;border-radius:3px;background-color:#337ead;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-link"></i></a>-->
                                              <!-- <a href="index.php?action=add_money&aid=<?php echo $users['id']; ?>" class="label label-info but_padding" data-toggle="tooltip" title="Add Balance"><i class="fa fa-inr"></i></a>-->
                                                 <?php if($_SESSION['b2b_kpr_rech_user_type']=="0" || $_SESSION['b2b_kpr_rech_full_rights'] == '1'): ?>
                                                 <button  data-toggle="tooltip" title="Add Balance" type="button" onclick="document.location.href='index.php?action=add_money&aid=<?php echo $users['id']; ?>';"  name="active" value="<?php echo $users['id'] ?>" class="btn btn-warning " style="width: 39px;background-color:#0c690fb3;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-inr"></i></button>
                                               <?php endif; ?>
                                               <?php if($users['mpos_status']=='1'): ?>
                                               <button  data-toggle="tooltip" title="Set MPOS Commission" type="button" onclick="document.location.href='index.php?action=add_mpos_commission&uid=<?php echo $users['id']; ?>';"  name="active" value="<?php echo $users['id'] ?>" class="btn btn-warning hide" style="width: 39px;background-color:#337ead;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-mobile"></i></button>
                                               
                                               <!--<a href="index.php?action=add_mpos_commission&uid=<?php echo $users['id']; ?>" class="label label-info but_padding" data-toggle="tooltip" title="Set MPOS Commission"><i class="fa fa-mobile" aria-hidden="true"></i></a>-->
                                            <?php endif; ?>
                                            <button data-toggle="tooltip" title="Cut Balance" type="button"  name="active" value="<?php echo $users['id'] ?>" class="btn btn-warning modelopen" style="width: 39px;background-color:#f0c129;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-credit-card"></i></button>
                                            </div>
                                        </td>
                                    </tr>
									<tbody class="table_display<?php echo $users['id']; ?>" style="display:none;">
                                
                                    
                                
                                </tbody>
                                    <?php endforeach; ?>
                                    
                                    
                                    
                                    
                                    
                                    
                                </form>
                                    
                                </tbody>
                            </table>
                            
                            
                            <!---------sub-table
                                    <div class="table_display1" style="display:none;">
                                     <table class="table table-vcenter table-striped">
                                
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Outlate Name</th>
                                        <th>Name</th>
                                        <th>Member Id</th>
                                        <th>Prepaid Amount</th>
                                        <th>Capping</th>
                                        <th>Role</th>
                                         
                                    </tr>
                                </thead>
                                <tbody>
                                <form method="post">
                                    <tr>
                                    <td>jhfbg</td>
                                    <td>jhfbg</td>
                                    <td>jhfbg</td>
                                    <td>jhfbg</td>
                                    <td>jhfbg</td>
                                    <td>jhfbg</td>
                                    <td>jhfbg</td>
                                    </tr>
                                </form>
                                </tbody>
                                </table>
                                    
                               </div>     
                                    
                                    
                                    <!-------end sub-table---->
                            
<script>
   
$(document).ready(function(){
    $('.modelopen').click(function(){
    $('#cut_balance').modal('show');
    var id = $(this).val();
    $('.blnc_userid').val(id);
    
    $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {user: id, type:'fetchbalance'},

                success: function (data) {

               //alert(data);
                $('.blnc_curt').val(data);
                      $('.crnt_blanc').html(data);  

                    //$('.table_display'+id).append(data);

                }

            });
    });
    
    
    $(".add_but1").click(function(){
		
		var id = $(this).attr('data-userid');
		getusedatadownline(id);
        $(".table_display"+id).show();
        $(".minus"+id).show();
        $(".plus"+id).hide();
    });
});

</script>

<script>
   
$(document).ready(function(){
    $(".minus_but1").click(function(){
		var id = $(this).attr('data-userid');
        $(".table_display"+id).hide();
        $(".minus"+id).hide();
        $(".plus"+id).show();
    });
});

</script>
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
                    <script>$(function(){ TablesDatatables.init(); });</script>
                    <?php if($total > $as_users_records):
                        ?>
                    <ul class="pagination">
                        <li><?php echo $as[0]; ?></li>
                    </ul>
                    <?php
                    endif; ?>
                        </div>
                        <!-- END Responsive Partial Block -->
                    </div>
                   
 <!---- model box -------->
 <div id="cut_balance" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        Current Balance : <i class="fa fa-inr" aria-hidden="true"></i> <span class="crnt_blanc">0</span>
        <hr>
        <form action="" method="post">
           <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></span>
    <input type="hidden" class="blnc_userid" name="user_blnc" value>
    <input type="hidden" class="blnc_curt" name="blnc_curt" value>
    <input id="amt" type="text" class="form-control" name="blnc" placeholder="Enter Debit Amount">
  </div>
  <button type="submit" class="btn btn-danger" value="debit_blnc" name="debit_blnc">Debit</button>
        </form>
      </div>
     
    </div>

  </div>
</div>