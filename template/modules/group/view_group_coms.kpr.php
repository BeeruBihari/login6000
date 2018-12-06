<?php
$o__user = new user();
$o__commission1 = new commission();
if($_SESSION['b2b_kpr_rech_user_type'] == 4 || $_SESSION['b2b_kpr_rech_user_type'] == 0){
	$displaynone = '';
}
else{
	$displaynone = 'display:none';
}
?>
<link rel="stylesheet" href="<?php echo Fcss; ?>/plugins.css">
<script src="ajax/commission.js"></script>
<div id="page-content">
    <!-- Table Responsive Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                Group Commission<br>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>User</li>
        <li><a href="">Group Commission</a></li>
    </ul>

    <div class="block">

        <div class="block-title">

            <div class="row">
                <div class="col-sm-10">

                    <h2><strong>Group Commission</strong> Table</h2>


                </div>

            </div>

        </div>

        <div class="msgajax" style="color: green; font-size: 15px; margin-bottom: 2%;">

        </div>

        <div class="row">
            <div class="col-md-12 col-xs-12">
                <!-- Block Tabs -->
                <div class="block full">
                    <!-- Block Tabs Title -->
                    <div class="block-title">
                        <div class="block-options pull-right">

                        </div>
                        <ul class="nav nav-tabs" data-toggle="tabs">

                            <li class="active"><a href="#example-tabs2-1">Recharge/Utility
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- END Block Tabs Title -->

                    <!-- Tabs Content -->
                    <div class="tab-content">

                        <!-- For RECHARGE COMMISSION  -->
                        <div class="tab-pane active" id="example-tabs2-1">


                            <table class="table table-vcenter table-striped">

                                <thead>
                                    <tr>

                                        <th>Provider</th>
                                        <th>Buy Commission</th>
                                        <th>Sale Commission</th>
                                        <th>Sale Type</th>
                                        <th>Service Charge</th>
                                        <th>Service Charge Type</th>
                                        <th style="<?php echo $displaynone; ?>">Select API</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <form method="post">

                                    <?php 
                                    $prsid = 0;
                                    //print_r($getgroup_record);
                                    foreach ($getgroup_record as $value1): 
									
									if($_SESSION['b2b_kpr_rech_user_type'] == 4){
										$adminid = $_SESSION['b2b_kpr_rech_id'];
									}
									$apiid=0;
									foreach ($getapiname as $apis):
									$columname_status = 'status'.$apis['id'];
									if ($value1[$columname_status] == '1'){ $apiid=$apis['id']; }
									endforeach;
									
									$getbuycomdata = $o__group->getBuyComs($_SESSION['b2b_kpr_rech_grp_name'],$value1['opid']);
									//print_r($getbuycomdata);echo '<br><br>';
									if($getbuycomdata->sale_commission_type == 'flat'){
									    $buycom = $getbuycomdata->sale_commission.'Rs.';
									}
									else{
									    $buycom = $getbuycomdata->sale_commission.'%';
									}
									
									$getuserdata = $o__user->getOneuser($adminid);
									$getbuycomms = $o__commission1->fetchbuycommission($getuserdata->unique_id,$apiid,$value1['opid']);
									$sdata = 'buy_commission'.$apiid; 
									//$buycom = $getbuycomms->$sdata;
									//echo $value1['service_id'];
									if($value1['service_id'] != $prsid){
									?>
									<tr>
									    <td colspan="7"><b>PriPaid</b></td>
									</tr>
                                    <?php
									}
									
								
                                    ?>
                                        <tr>

                                           
       <input type="hidden" id="example-text-input" value="<?php echo $_GET['grp'];  ?>" name="example-text-input" class="form-control grp" placeholder="Text">
<!--    <td></td>-->
                                            <td>
                                                <input type="text" readonly  id="example-text-input1"  value="<?php echo $value1['OperatorDescritpion']; ?>" name="example-text-input" class="form-control opdescp<?php echo $value1['opid']; ?>" placeholder="Text">
                                            </td>
                                            <td>
                                                <input type="text" readonly  id="example-text-input2" value="<?php echo $buycom;  ?>" name="example-text-input" class="form-control opbuycom<?php echo $value1['opid']; ?>" placeholder="Buy Commission">
                                            </td>
                                            <td>
                                                <input type="text" id="example-text-input3" value="<?php echo $value1['sale_commission']; ?>" name="example-text-input" class="form-control opsalecom<?php echo $value1['opid']; ?>" placeholder="Text">
                                            </td>
                                            <td>
                                                <select class="form-control opsalecomtype<?php echo $value1['opid']; ?>" name="sale_com_type">

                                                    <option <?php if($value1['sale_commission_type']=='flat'): echo 'selected'; endif;  ?> value="flat">Flat</option>
                                                    <option <?php if($value1['sale_commission_type']=='percentage'): echo 'selected'; endif;  ?> value="percentage">Percentange(%)</option>

                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" id="example-text-input4" value="<?php echo $value1['service_charge']; ?>" name="example-text-input" class="form-control opsccom<?php echo $value1['opid']; ?>" placeholder="Text">
                                            </td>

                                            <td>
                                                <select class="form-control opsctype<?php echo $value1['opid'] ;  ?>" name="service_charge_type">
                                                    <option <?php if($value1['service_charge_type']=='flat'): echo 'selected'; endif;  ?> value="flat">Flat</option>
                                                    <option <?php if($value1['service_charge_type']=='percentage'): echo 'selected'; endif;  ?> value="percentange">Percentange(%)</option>

                                                </select>
                                            </td>

                                            <td style="<?php echo $displaynone; ?>">
                                                <select class="form-control apiselect<?php echo $value1['opid']; ?>" name="api_select" onchange="apinameselect(this.value,<?php echo $value1['opid']; ?>)">
                                                    <option value="0">Select Api</option>
                                                    <?php foreach ($getapiname as $value):?>
                                                    <option <?php  $columname_status = 'status' . $value['id']; if ($value1[$columname_status] == '1'){ echo 'selected'; } ?> value="<?php echo $value['id']; ?>"><?php echo $value['api_name']; ?></option>
                                                    <?php endforeach;?>
                                                    <?php
//                                                    if ($_SESSION['b2b_kpr_rech_user_type'] == '4' || $_SESSION['b2b_kpr_rech_user_type'] == '0') {
//
//                                                        
//
//
//
//                                                        //foreach ($getgroup_record as $grp):
//
//                                                            $opt = '<option value="0">Select Api</option>';
//
//                                                            foreach ($getapiname as $value):
//                                                                $selectopt = '';
//                                                                $columname_status = 'status' . $value['id'];
//                                                                //print_r($columname_status);exit;
//                                                                if ($grp[$columname_status] == '1'):
//                                                                    $selectopt = 'selected';
//                                                                endif;
//                                                                $opt .= '<option ' . $selectopt . ' value="' . $value['id'] . '">' . $value['api_name'] . '</option>';
//                                                            endforeach;
//
//                                                           // echo '<tr><td><input type="hidden"  class="grpid' . $grp['opid'] . '" value="' . $grp['group_id'] . '"><input type="text" readonly id="example-text-input1"  value="' . $grp['OperatorDescritpion'] . '" name="example-text-input" class="form-control opdescp' . $grp['opid'] . '" placeholder="Text"></td><td><input type="text" readonly id="example-text-input1"  value="' . $grp['buy_commission'] . '" name="example-text-input" class="form-control opbuycom' . $grp['opid'] . '" placeholder="Text"></td><td><input type="text"  id="example-text-input1"  value="' . $grp['sale_commission'] . '" name="example-text-input" class="form-control opsalecom' . $grp['opid'] . '" placeholder="Text"></td><td><select class="form-control opsalecomtype' . $grp['opid'] . '" name="sale_com_type"><option  value="flat">Flat</option><option value="percentage">Percentange(%)</option></select></td><td><input type="text"  id="example-text-input1"  value="' . $grp['service_charge'] . '" name="example-text-input" class="form-control opsccom' . $grp['opid'] . '" placeholder="Text"></td><td><select class="form-control opsctype' . $grp['opid'] . '" name="service_charge_type"><option  value="flat">Flat</option><option value="percentage">Percentange(%)</option></select></td><td><select class="form-control apiselect' . $grp['opid'] . '" name="api_select">' . $opt . '</select></td><td><button type="button" name="grpcommission" class="btn btn-sm btn-primary grpcommission" onClick="grpcom(' . $grp['opid'] . ')" value="' . $grp['opid'] . '"><i class="fa fa-arrow-right"></i>  Update</button></td></tr>';
//
//                                                       // endforeach;
//                                                    }
                                                    ?>

                                                </select>
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-xs">
                                                    <button disable type="button" name="allcommission" class="btn btn-sm btn-primary updateallcommission" value="<?php echo $value1['opid']; ?>"><i class="fa fa-arrow-right"></i>  Update</button>

                                                </div>
                                            </td>
                                        </tr>
<?php  endforeach; ?>

                                </form>

                                </tbody>
                            </table>


                        </div>




                    </div>
                    <!-- END Tabs Content -->
                </div>
                <!-- END Block Tabs -->
            </div>

        </div>


<script>
function apinameselect(data,opid){
	//alert(data);
	
	$.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {apiid: data,opid:opid, type:'fetchbuycommission'},

                success: function (data) {

               // alert(data);
                
                        

                    $('.opbuycom'+opid).val(data);
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });
}
    $(function(){
        //$('button').removeAttr('disable');
		
		
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



        </div>

    </div>

