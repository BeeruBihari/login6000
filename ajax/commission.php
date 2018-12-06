<?php

include'../include/base.php';
$con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
$o__commission = new update_commission();

$o__commission1 = new commission();
// ALL Commission
if ($_POST['type'] == 'allcommission') {
   
   $grp = $_POST['grp'];
    $opdsp1 = $_POST['opdsp1'];
  //  $opbuy1 = $_POST['opbuy1'];
    $opsale1 = $_POST['opsale1'];
    $opsc1 = $_POST['opsc1'];
    $opsaletp1 = $_POST['opsaletp1'];
    $opsctp1 = $_POST['opsctp1'];
    $id = $_POST['id'];     
    $apiselect = $_POST['apiselect'];
    
	$sql2 = mysqli_query($con,"select * from `b2b_api_configurations`");
	
	
    $records= array(
            'OperatorDescritpion' => $opdsp1,
          //  'buy_commission' => $opbuy1,
            'sale_commission' => $opsale1,
            'service_charge' => $opsc1,
            'sale_commission_type' => $opsaletp1,
            'service_charge_type' => $opsctp1

         );
	while($r = mysqli_fetch_array($sql2)){
		$sss = 'status'.$r['id'];
		$records[$sss] = '0';
		if($r['id'] == $apiselect){
			$records[$sss] = '1';
		}
	}	 
        $update_allcom = $o__commission1->update_b2b_user_grp_commissions($records,$id,$grp);   
         echo $update_allcom;   
}
if ($_POST['type'] == 'updateapi') {
  
   
    $opdsp1 = $_POST['opdsp1'];
    $opbuy1 = $_POST['api1'];
    
    $id = $_POST['id'];     
$getapiname1 = $o__commission1->getapiname($_SESSION['b2b_kpr_rech_id']);    
   
    
    $records= array(
            'hermes_status' => '0',
            'oto_status' => '0',
            'rechargedesk_status' => '0',
         );
         foreach ($getapiname1 as $apivalue1):
         $columname_status1 = 'status'.$apivalue1['id'];
         if($opbuy1 == $apivalue1['id']){
             $records[$columname_status1]='1';
         }
         else{
         $records[$columname_status1]='0';
         }
         endforeach;
        $update_allcom = $o__commission1->update_b2b_api_select($records,$id);   
         echo $update_allcom;   
}
if ($_POST['type'] == 'mobile') {
    $common = $_POST['common'];
    $id = $_POST['id'];
    $tbi = $_POST['tbi'];
    $update_ans = $o__commission->updatecommissionbyid($tbi, $common, $id);
    echo $update_ans;
}
if ($_POST['type'] == 'dth') {
    $common = $_POST['common'];
    $id = $_POST['id'];
    $tbi = $_POST['tbi'];
    $update_ans = $o__commission->updatecommissionbyid($tbi, $common, $id);
    echo $update_ans;
}

// Group Commission Code

if ($_POST['type'] == 'grp') {
    $id = $_POST['id'];
    $update_ans = $o__commission->getindop($id);
	
    
	//echo $_SESSION['b2b_kpr_rech_user_type'];
	
	
	if($_SESSION['b2b_kpr_rech_user_type'] == '4' || $_SESSION['b2b_kpr_rech_user_type'] == '0'){
		
		$getapiname= $o__commission1->getapiname($_SESSION['b2b_kpr_rech_id']);
	
   
    
      foreach ($update_ans as $grp):
	  
	  $opt = '<option value="0">Select Api</option>';
	  
		 foreach ($getapiname as $value):
		     $selectopt = '';
			$columname_status = 'status'.$value['id'];
			//print_r($columname_status);exit;
			if($grp[$columname_status] == '1'):
			$selectopt = 'selected';
			endif;
			$opt .= '<option '.$selectopt.' value="'.$value['id'].'">'.$value['api_name'].'</option>';
			endforeach;
          
          echo '<tr><td><input type="hidden"  class="grpid'.$grp['opid'].'" value="'.$grp['group_id'].'"><input type="text" readonly id="example-text-input1"  value="'.$grp['OperatorDescritpion'].'" name="example-text-input" class="form-control opdescp'.$grp['opid'].'" placeholder="Text"></td><td><input type="text" readonly id="example-text-input1"  value="'.$grp['buy_commission'].'" name="example-text-input" class="form-control opbuycom'.$grp['opid'].'" placeholder="Text"></td><td><input type="text"  id="example-text-input1"  value="'.$grp['sale_commission'].'" name="example-text-input" class="form-control opsalecom'.$grp['opid'].'" placeholder="Text"></td><td><select class="form-control opsalecomtype'.$grp['opid'].'" name="sale_com_type"><option  value="flat">Flat</option><option value="percentage">Percentange(%)</option></select></td><td><input type="text"  id="example-text-input1"  value="'.$grp['service_charge'].'" name="example-text-input" class="form-control opsccom'.$grp['opid'].'" placeholder="Text"></td><td><select class="form-control opsctype'.$grp['opid'].'" name="service_charge_type"><option  value="flat">Flat</option><option value="percentage">Percentange(%)</option></select></td><td><select class="form-control apiselect'.$grp['opid'].'" name="api_select">'.$opt.'</select></td><td><button type="button" name="grpcommission" class="btn btn-sm btn-primary grpcommission" onClick="grpcom('.$grp['opid'].')" value="'.$grp['opid'].'"><i class="fa fa-arrow-right"></i>  Update</button></td></tr>';
          
      endforeach;
	
	}
	
	if($_SESSION['b2b_kpr_rech_user_type'] == 1 || $_SESSION['b2b_kpr_rech_user_type'] == 2 || $_SESSION['b2b_kpr_rech_user_type'] == 3){
		//print_r($id);
		foreach ($update_ans as $grp):
	  
          
          echo '<tr><td><input type="hidden"  class="grpid'.$grp['opid'].'" value="'.$grp['group_id'].'"><input type="text" readonly id="example-text-input1"  value="'.$grp['OperatorDescritpion'].'" name="example-text-input" class="form-control opdescp'.$grp['opid'].'" placeholder="Text"></td><td><input type="text" readonly id="example-text-input1"  value="'.$grp['buy_commission'].'" name="example-text-input" class="form-control opbuycom'.$grp['opid'].'" placeholder="Text"></td><td><input type="text"  id="example-text-input1"  value="'.$grp['sale_commission'].'" name="example-text-input" class="form-control opsalecom'.$grp['opid'].'" placeholder="Text"></td><td><select class="form-control opsalecomtype'.$grp['opid'].'" name="sale_com_type"><option  value="flat">Flat</option><option value="percentage">Percentange(%)</option></select></td><td><input type="text"  id="example-text-input1"  value="'.$grp['service_charge'].'" name="example-text-input" class="form-control opsccom'.$grp['opid'].'" placeholder="Text"></td><td><select class="form-control opsctype'.$grp['opid'].'" name="service_charge_type"><option  value="flat">Flat</option><option value="percentage">Percentange(%)</option></select></td><td><button type="button" name="grpcommission" class="btn btn-sm btn-primary grpcommission" onClick="grpcom('.$grp['opid'].')" value="'.$grp['opid'].'"><i class="fa fa-arrow-right"></i>  Update</button></td></tr>';
          
      endforeach;
		
	}
   // print_r($update_ans);
}
if ($_POST['type'] == 'getapicode') {
    $id = $_POST['id'];
   
    $update_ans1 = $o__commission1->getapiforopcode($id);
    
   // print_r($update_ans1);exit();
   $var2 = 'opcode'.$id;
   $var3 = 'buy_commission'.$id;
   $var4 = 'buy_commission_status'.$id;
   $var7 = 'buy_service_charge'.$id;
   $var8 = 'buy_service_charge_status'.$id;
   //print_r($var2);exit();
      foreach ($update_ans1 as $grp):
          if($grp[$var4] == 'percentage'){
              $percentage = 'selected';
          }
          if($grp[$var4] == 'flat'){
              $flat == 'selected';
          }
          if($grp[$var8] == 'percentage'){
              $percentage1 = 'selected';
          }
          if($grp[$var8] == 'flat'){
              $flat1 == 'selected';
          }
          echo '<tr><td><input type="hidden" class="opid'.$grp['opid'].'" value="'.$id.'"><input type="text" readonly id="example-text-input1"  value="'.$grp['OperatorDescritpion'].'" name="example-text-input" class="form-control opdescp'.$grp['opid'].'" placeholder="Text"></td><td><input type="text" id="example-text-input1"  value="'.$grp[$var3].'" name="example-text-input" class="form-control opcom'.$grp['opid'].'" placeholder="Text"></td><td><select class="form-control opsctype'.$grp['opid'].'" name="service_charge_type"><option '.$flat.'  value="flat">Flat</option><option '.$percentage.' value="percentage">Percentange(%)</option></select></td><td><input type="text" id="example-text-input1"  value="'.$grp[$var7].'" name="example-text-input" class="form-control saleopcom'.$grp['opid'].'" placeholder="service charge"></td><td><select class="form-control saleoptype'.$grp['opid'].'" name="service_charge_type"><option '.$flat1.'  value="flat">Flat</option><option '.$percentage1.' value="percentage">Percentange(%)</option></select></td><td><input type="text" id="example-text-input1"  value="'.$grp[$var2].'" name="example-text-input" class="form-control opcode'.$grp['opid'].'" placeholder="Enter Op Code"></td><td><button type="button" name="grpcommission" class="btn btn-sm btn-primary grpcommission" onClick="updatecode('.$grp['opid'].')" value="'.$grp['opid'].'"><i class="fa fa-arrow-right"></i>  Update</button></td></tr>';
          
      endforeach;
      
   // print_r($update_ans);
}
if ($_POST['type'] == 'updateopcode') {
    $opcode1 = $_POST['opcode1'];
    $opsctype = $_POST['opsctype1'];
    $opcom = $_POST['opcom1'];
    $id = $_POST['id'];
    $opid = $_POST['opid'];
    
     $saleopcom1 = $_POST['saleopcom1'];
    $saleoptype = $_POST['saleoptype1'];
    
         $var = 'opcode'.$opid;
         $var3 = 'buy_commission'.$opid;
         $var4 = 'buy_commission_status'.$opid;
          $var7 = 'buy_service_charge'.$opid;
            $var8 = 'buy_service_charge_status'.$opid;
         
         $records[$var] = $opcode1;
         $records[$var3] = $opcom;
         $records[$var4] = $opsctype;
         $records[$var7] = $saleopcom1;
         $records[$var8] = $saleoptype;
    $update_ans = $o__commission1->update_b2b_api_opcode($records, $id);
    echo $update_ans;
}

if ($_POST['type'] == 'grpcommission') {
   
    $opdsp1 = $_POST['opdsp1'];
    $opgrpid1 = $_POST['opgrpid1'];
    $opbuy1 = $_POST['opbuy1'];
    $opsale1 = $_POST['opsale1'];
    $opsc1 = $_POST['opsc1'];
    $opsaletp1 = $_POST['opsaletp1'];
    $opsctp1 = $_POST['opsctp1'];
	$apiselect = $_POST['apiselect'];
    $id = $_POST['id'];     
    $getapiname= $o__commission1->getapiname($_SESSION['b2b_kpr_rech_id']);
	
    //print_r($records);exit;
    $records= array(
           // 'OperatorDescritpion' => $opdsp1,
           // 'buy_commission' => $opbuy1,
            'sale_commission' => $opsale1,
            'service_charge' => $opsc1,
            'sale_commission_type' => $opsaletp1,
            'service_charge_type' => $opsctp1

         );
		 foreach ($getapiname as $value):
			$columname_status = 'status'.$value['id'];
			$records[$columname_status] = '0';
			if($value['id'] == $apiselect){
				$records[$columname_status] = '1';
			}
	endforeach;
        $update_allcom = $o__commission1->update_b2b_user_grp_commissions($records,$id,$opgrpid1);   
         echo $update_allcom;   
        // echo $id;   
}
if ($_POST['type'] == 'fetchuserdata') {
$o__user = new user();
$user_id = $_POST['user'];
$getdata = $o__user->getdownlineuser($user_id);
foreach ($getdata as $users):
if($users['user_type'] == 1){
	$user_type = 'Master Distributor';
}elseif($users['user_type'] == 4){
	$user_type = 'Admin';
}elseif($users['user_type'] == 2){
	$user_type = 'Distributor';
}else{
	$user_type = 'Retailer';
}

if($users['status']=='1'){
	$user_status = '<button data-toggle="tooltip" title="Active" type="button"   class="btn btn-warning " style="width: 39px;border-radius:3px;background-color:#008000a1;color:#fff;border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-check"></i></button>';
}
else{
	$user_status = '<button data-toggle="tooltip" title="De-Active" type="button"   class="btn btn-warning " style="width: 39px;border-radius:3px;background-color:#ff0000a1;color:#fff;border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-ban" aria-hidden="true"></i></button>';
}
echo '<tr class="success removedata'.$user_id.'  afterdata'.$users['id'].'">
                                    <td><i onClick="showdata('.$users['id'].')" class="fa fa-plus-circle plus'.$users['id'].' getuserdata" data-userid="'.$users['id'].'" aria-hidden="true"></i><i onClick="hidedata('.$users['id'].')" class="fa fa-minus-circle minus'.$users['id'].'" data-userid="'.$users['id'].'" aria-hidden="true" style="display:none;color: red;"></i></td>
                                    <td>'.$users['firstname'].' '.$users['	lastname'].'</td>
                                    <td>'.$users['cmpy_name'].'</td>
                                    <td>'.$users['website'].'</td>
                                    <td>'.$users['mob_no'].'</td>
                                    <td> '.$users['show_password'].'</td>
                                    <td>'.$users['balance'].'</td>
									<td>'.$user_type.'</td>
									<td>'.$user_status.'</td>
									<td><a data-toggle="tooltip" title="Edit" type="button" href="index.php?action=add_user&id='.$users['id'].'"  name="active" class="btn btn-warning " style="width: 39px;background-color:#f0c129;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);"><i class="fa fa-pencil"></i></a></td>
                                    </tr>
									
									';	
endforeach;
//echo 'sad';
}
if ($_POST['type'] == 'getlivedata') {
	
	$sql1 = mysqli_query($con,"select * from `b2b_all_transaction_queues` order by id DESC");
	$count = 0;
	$i= 1;
	while($r2 = mysqli_fetch_array($sql1)){
	 //  $r3 = mysqli_fetch_array($sql1);
	    $sql_trns = mysqli_query($con,"select * from `b2b_app_all_recharge_transaction_histories` where transaction_id='".$r2['transaction_id']."' and rech_user='1' order by id DESC");
	    $n_trns = mysqli_num_rows($sql_trns);
	   // echo $n_trns;exit;
	    if($n_trns > 0){
	        $r1 = mysqli_fetch_array($sql_trns);
	    }else{
	        $r1 = mysqli_fetch_array($sql1);
	    }
	    
	    
		$sql = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r1['b2b_user_id']."'");//and admin_id='".$_SESSION['b2b_kpr_rech_id']."'
		while($r = mysqli_fetch_array($sql)){
		$usertypp = $r['user_type'];
		$condition=false;
	    switch ($usertypp){
	       case 1:
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r['admin_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;
	       case 2:
	            $sql_md = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r['uplevel_id']."'");
	            $r_md = mysqli_fetch_array($sql_md);
	            if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_md['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r['admin_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;
	       case 3:
	           $sql_dis = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r['uplevel_id']."'");
	           $r_dis = mysqli_fetch_array($sql_dis);
	           $sql_md = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r_dis['uplevel_id']."'");
	           $r_md = mysqli_fetch_array($sql_md);
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_dis['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_md['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r['admin_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;     
	       case 4:
	            break;
	       case 5:
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;
	       case 6:
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;     
	    }
	    if($condition == true){
	        
	    
			$number ='';
			$typeu = '';
			if($r['user_type'] == 1){
			    $typeu = 'Master';
			}
			elseif($r['user_type'] == 2){
			    $typeu = 'Distributor';
			}
			elseif($r['user_type'] == 3){
			    $typeu = 'Retailer';
			}
			else{
			    $typeu = 'Admin';
			}
			
			if($r1['rtype'] != ''){
				$type = $r1['rtype'];
			}
			else{
				$type = $r1['type'];
			}
			
			if($r1['mobile'] != ''){
				$number = $r1['mobile'];
			}
			
			if($r1['consumer_no'] != ''){
				$number = $r1['consumer_no'];
			}
			
			if($r1['status'] == '0'){
				$status = 'Pending';
				$class_s = 'label-warning';
			}
			elseif($r1['status'] == '1'){
				$status = 'Success';
				$class_s = 'label-success';
			}
			elseif($r1['status'] == '2' || $r1['status'] == '3'){
				$status = 'Fail';
				$class_s = 'label-danger';
			}
			elseif($r1['status'] == '5'){
				$status = 'In Queue';
				$class_s = 'label-default';
			}
			else{
				$status = 'Insufficient Balance';
				$class_s = 'label-default';
			}
			
			if($r1['transaction_id'] != '0'){
				$transid = $r1['transaction_id'];
			}
			else{
				$transid = $r1['transid'];
			}
			
		$sql2 = mysqli_query($con,"SELECT * FROM b2b_api_configurations WHERE id='".$r1['apiname']."'");
		$r2 = mysqli_fetch_array($sql2);
		
		//<td>'.$r2['api_name'].'</td>	<td>'.$r1['modify_date'].' '.$r1['modify_time'].'</td><td>'.$r1['json'].'</td>
		echo '<tr class="'.$class_s.'"><td>'.$transid.'</td><td>'.$r1['date'].'<br>'.$r1['time'].'</td><td>'.$r1['opcode'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['amount'].'</td><td>'.$r1['mobile'].'</td><td>'.$r1['modetype'].'</td><td class="">'.$r['id'].'</td><td class="">'.$r['firstname'].' '.$r['lastname'].'</td><td>'.$status.'</td><td>'.$r1['buy_commission'].'</td><td>'.$r1['sell_commission'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['commission'].'</td><td ><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['commission'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['current_balance'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['final_balance'].'</td><td>'.$r1['ref_id'].'</td><td>'.$r1['transid'].'</td></tr>';	
		if($count == 50){
			exit;
		}
		$count++;
		}
		}
	}
	
}
if ($_POST['type'] == 'gettransdata') {
	
	
	if(isset($_POST['date1']) && isset($_POST['date2'])){
	    $date1 = $_POST['date1'];
	    $date2 = $_POST['date2'];
	}else{
	    $date1 = date('Y-m-d');
	    $date2 = date('Y-m-d');
	}
	$sql1 = mysqli_query($con,"select * from `b2b_app_all_recharge_transaction_histories` where rech_user='1' and  date between '".$date1."' and '".$date2."' order by id DESC");
	$count = 0;
	$i= 1;
	$num = mysqli_num_rows($sql1);
	if($num > 0){
	    
	while($r1 = mysqli_fetch_array($sql1)){
		$sql = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r1['b2b_user_id']."'"); //and admin_id='".$_SESSION['b2b_kpr_rech_id']."'
		$condition = false;
		while($r = mysqli_fetch_array($sql)){
		$usertypp = $r['user_type'];
		
	    switch ($usertypp){
	       case 1:
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r['admin_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;
	       case 2:
	            $sql_md = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r['uplevel_id']."'");
	            $r_md = mysqli_fetch_array($sql_md);
	            if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_md['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r['admin_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;
	       case 3:
	           $sql_dis = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r['uplevel_id']."'");
	           $r_dis = mysqli_fetch_array($sql_dis);
	           $sql_md = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r_dis['uplevel_id']."'");
	           $r_md = mysqli_fetch_array($sql_md);
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_dis['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_md['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r['admin_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;     
	       case 4:
	            break;
	       case 5:
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r['admin_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;
	       case 6:
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r['admin_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;     
	    }
		
		if($condition == true){
		    
		
			$number ='';
			$typeu = '';
			if($r['user_type'] == 1){
			    $typeu = 'Master';
			}
			elseif($r['user_type'] == 2){
			    $typeu = 'Distributor';
			}
			elseif($r['user_type'] == 3){
			    $typeu = 'Retailer';
			}
			else{
			    $typeu = 'Admin';
			}
			
			if($r1['rtype'] != ''){
				$type = $r1['rtype'];
			}
			else{
				$type = $r1['type'];
			}
			
			if($r1['mobile'] != ''){
				$number = $r1['mobile'];
			}
			
			if($r1['consumer_no'] != ''){
				$number = $r1['consumer_no'];
			}
			
			if($r1['status'] == '0'){
				$status = 'Pending';
				$class_s = 'label-warning';
			}
			elseif($r1['status'] == '1'){
				$status = 'Success';
				$class_s = 'label-success';
			}
			elseif($r1['status'] == '2' || $r1['status'] == '3'){
				$status = 'Fail';
				$class_s = 'label-danger';
			}
			else{
				$status = 'Insufficient Balance';
				$class_s = 'label-default';
			}
			
			if($r1['transaction_id'] != '0'){
				$transid = $r1['transaction_id'];
			}
			else{
				$transid = $r1['transid'];
			}
			
		$sql2 = mysqli_query($con,"SELECT * FROM b2b_api_configurations WHERE id='".$r1['apiname']."'");
		$r2 = mysqli_fetch_array($sql2);
		
		//	<td>'.$r2['api_name'].'</td><td>'.$r1['modify_date'].' '.$r1['modify_time'].'</td>
		echo '<tr class="'.$class_s.'"><td>'.$transid.'</td><td>'.$r1['date'].'<br>'.$r1['time'].'</td><td>'.$r1['opcode'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['amount'].'</td><td>'.$r1['mobile'].'</td><td>'.$r1['modetype'].'</td><td class="">'.$r['id'].'</td><td class="">'.$r['firstname'].' '.$r['lastname'].'</td><td>'.$status.'</td><td>'.$r1['buy_commission'].'</td><td>'.$r1['sell_commission'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['commission'].'</td><td ><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['commission'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['current_balance'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['final_balance'].'</td><td>'.$r1['ref_id'].'</td><td>'.$r1['transid'].'</td></tr>';	
// 		if($count == 5000000000){
// 			exit;
// 		}
// 		$count++;
}
		}
		
		
	}
	}
	else{
	    echo '<tr style="color:red;text-align: center;"><td colspan="18"><b>NO DATA</b></td></tr>';
	}
	
}
if ($_POST['type'] == 'refuntstatment') {

	$sql1 = mysqli_query($con,"select * from `b2b_app_all_recharge_transaction_histories` where rech_user='1' order by id DESC");
	$count = 0;
	$i= 1;
	while($r1 = mysqli_fetch_array($sql1)){
		$sql = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r1['b2b_user_id']."' and admin_id='".$_SESSION['b2b_kpr_rech_id']."'");
		while($r = mysqli_fetch_array($sql)){
			$number ='';
			$typeu = '';
			if($r['user_type'] == 1){
			    $typeu = 'Master';
			}
			elseif($r['user_type'] == 2){
			    $typeu = 'Distributor';
			}
			elseif($r['user_type'] == 3){
			    $typeu = 'Retailer';
			}
			else{
			    $typeu = 'Admin';
			}
			
			if($r1['rtype'] != ''){
				$type = $r1['rtype'];
			}
			else{
				$type = $r1['type'];
			}
			
			if($r1['mobile'] != ''){
				$number = $r1['mobile'];
			}
			
			if($r1['consumer_no'] != ''){
				$number = $r1['consumer_no'];
			}
			
			if($r1['status'] == '0'){
				$status = 'Pending';
				$class_s = 'label-warning';
			}
			elseif($r1['status'] == '1'){
				$status = 'Success';
				$class_s = 'label-success';
			}
			elseif($r1['status'] == '2' || $r1['status'] == '3'){
				$status = 'Refund';
				$class_s = 'label-danger';
			}
			else{
				$status = 'Insufficient Balance';
				$class_s = 'label-default';
			}
			
			if($r1['transaction_id'] != '0'){
				$transid = $r1['transaction_id'];
			}
			else{
				$transid = $r1['transid'];
			}
			
		$sql2 = mysqli_query($con,"SELECT * FROM b2b_api_configurations WHERE id='".$r1['apiname']."'");
		$r2 = mysqli_fetch_array($sql2);
		
			if($r1['status'] == '3'){
		echo '<tr class="'.$class_s.'"><td>'.$transid.'</td><td>'.$r1['date'].'<br>'.$r1['time'].'</td><td>'.$r1['opcode'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['amount'].'</td><td>'.$r1['mobile'].'</td><td>'.$r1['modetype'].'</td><td class="">'.$r['id'].'</td><td class="">'.$r['firstname'].' '.$r['lastname'].'</td><td>'.$r2['api_name'].'</td><td>'.$status.'</td><td>'.$r1['sell_commission'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['commission'].'</td><td ><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['commission'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['current_balance'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['final_balance'].'</td><td></td><td></td></tr>';	
		if($count == 500){
			exit;
		}
		
		$count++;
		}
		}
	}
	
}
if ($_POST['type'] == 'getlivedata_das') {
	
	$sql1 = mysqli_query($con,"select * from `b2b_app_all_recharge_transaction_histories` where rech_user='1' order by id DESC");
	$count = 0;
	$i= 1;
	while($r1 = mysqli_fetch_array($sql1)){
		if($_SESSION['b2b_kpr_rech_user_type'] == 4){
		$sql = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r1['b2b_user_id']."' and admin_id='".$_SESSION['b2b_kpr_rech_id']."'");
		
		
		
		while($r = mysqli_fetch_array($sql)){
		    
		    
		    
			$number ='';
			$typeu = '';
			if($r['user_type'] == 1){
			    $typeu = 'Master';
			}
			elseif($r['user_type'] == 2){
			    $typeu = 'Distributor';
			}
			elseif($r['user_type'] == 3){
			    $typeu = 'Retailer';
			}
			else{
			    $typeu = 'Admin';
			}
			
			if($r1['rtype'] != ''){
				$type = $r1['rtype'];
			}
			else{
				$type = $r1['type'];
			}
			
			if($r1['mobile'] != ''){
				$number = $r1['mobile'];
			}
			
			if($r1['consumer_no'] != ''){
				$number = $r1['consumer_no'];
			}
			
			if($r1['status'] == '0'){
				$status = '<span class="label label-warning">Pending</span>';
				$class_s = 'label-warning';
			}
			elseif($r1['status'] == '1'){
				$status = '<span class="label label-success">Success</span>';
				$class_s = 'label-success';
			}
			elseif($r1['status'] == '2' || $r1['status'] == '3'){
				$status = '<span class="label label-danger">Fail</span>';
				$class_s = 'label-danger';
			}
			else{
				$status = '<span class="label label-default">Insuf. Bal.</span>';
				$class_s = 'label-default';
			}
			
			if($r1['transaction_id'] != '0'){
				$transid = $r1['transaction_id'];
			}
			else{
				$transid = $r1['transid'];
			}
			
		$sql2 = mysqli_query($con,"SELECT * FROM b2b_api_configurations WHERE id='".$r1['apiname']."'");
		$r2 = mysqli_fetch_array($sql2);
		
			
		echo '<tr><td><a href="javascript:void(0)"><strong>'.$transid.'</strong></a></td><td>'.$r1['opcode'].'</td><td><strong><i class="fa fa-inr" aria-hidden="true"></i>'.$r1['amount'].'</strong></td><td>'.$r1['mobile'].'</td><td class="">'.$r['firstname'].'</td><td>'.$status.'</td></tr>';	
		if($count == 9){
			exit;
		}
		$count++;
		}
		}
		
		if($_SESSION['b2b_kpr_rech_user_type'] == 1 || $_SESSION['b2b_kpr_rech_user_type'] == 5){
		$sql = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r1['b2b_user_id']."' and admin_id='".$_SESSION['b2b_kpr_rech_admin_id']."'");	
		$r2 = mysqli_fetch_array($sql);
		$sql2 = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r2['uplevel_id']."'");	
		$r3 = mysqli_fetch_array($sql2);
		
		if($r3['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
		$sql4 = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r1['b2b_user_id']."' and admin_id='".$_SESSION['b2b_kpr_rech_admin_id']."'");	
		while($r = mysqli_fetch_array($sql4)){
		    $usertypp = $r['user_type'];
		$condition=false;
	    switch ($usertypp){
	       case 1:
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;
	       case 2:
	            $sql_md = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r['uplevel_id']."'");
	            $r_md = mysqli_fetch_array($sql_md);
	            if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_md['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;
	       case 3:
	           $sql_dis = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r['uplevel_id']."'");
	           $r_dis = mysqli_fetch_array($sql_dis);
	           $sql_md = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r_dis['uplevel_id']."'");
	           $r_md = mysqli_fetch_array($sql_md);
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_dis['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_md['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;     
	       case 4:
	            break;
	       case 5:
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;
	       case 6:
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;     
	    }
	    if($condition == true){
			$number ='';
			$typeu = '';
			if($r['user_type'] == 1){
			    $typeu = 'Master';
			}
			elseif($r['user_type'] == 2){
			    $typeu = 'Distributor';
			}
			elseif($r['user_type'] == 3){
			    $typeu = 'Retailer';
			}
			else{
			    $typeu = 'Admin';
			}
			
			if($r1['rtype'] != ''){
				$type = $r1['rtype'];
			}
			else{
				$type = $r1['type'];
			}
			
			if($r1['mobile'] != ''){
				$number = $r1['mobile'];
			}
			
			if($r1['consumer_no'] != ''){
				$number = $r1['consumer_no'];
			}
			
			if($r1['status'] == '0'){
				$status = '<span class="label label-warning">Pending</span>';
				$class_s = 'label-warning';
			}
			elseif($r1['status'] == '1'){
				$status = '<span class="label label-success">Success</span>';
				$class_s = 'label-success';
			}
			elseif($r1['status'] == '2' || $r1['status'] == '3'){
				$status = '<span class="label label-danger">Fail</span>';
				$class_s = 'label-danger';
			}
			else{
				$status = '<span class="label label-default">Insuf. Bal.</span>';
				$class_s = 'label-default';
			}
			
			if($r1['transaction_id'] != '0'){
				$transid = $r1['transaction_id'];
			}
			else{
				$transid = $r1['transid'];
			}
			
		$sql2 = mysqli_query($con,"SELECT * FROM b2b_api_configurations WHERE id='".$r1['apiname']."'");
		$r2 = mysqli_fetch_array($sql2);
		
			
		echo '<tr><td><a href="javascript:void(0)"><strong>'.$transid.'</strong></a></td><td>'.$r1['opcode'].'</td><td><strong><i class="fa fa-inr" aria-hidden="true"></i>'.$r1['amount'].'</strong></td><td>'.$r1['mobile'].'</td><td class="">'.$r['firstname'].'</td><td>'.$status.'</td></tr>';	
		if($count == 9){
			exit;
		}
		$count++;
	    }
		}	
		}
		
		}
		
		if($_SESSION['b2b_kpr_rech_user_type'] == 2){
		$sql = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r1['b2b_user_id']."' and admin_id='".$_SESSION['b2b_kpr_rech_admin_id']."'");	
		$r2 = mysqli_fetch_array($sql);
		//echo $r2['uplevel_id'].$_SESSION['b2b_kpr_rech_id'].'/';
		if($r2['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
		$sql4 = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r1['b2b_user_id']."' and admin_id='".$_SESSION['b2b_kpr_rech_admin_id']."'");	
		while($r = mysqli_fetch_array($sql4)){
		    $usertypp = $r['user_type'];
		$condition=false;
	    switch ($usertypp){
	       case 1:
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;
	       case 2:
	            $sql_md = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r['uplevel_id']."'");
	            $r_md = mysqli_fetch_array($sql_md);
	            if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_md['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;
	       case 3:
	           $sql_dis = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r['uplevel_id']."'");
	           $r_dis = mysqli_fetch_array($sql_dis);
	           $sql_md = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r_dis['uplevel_id']."'");
	           $r_md = mysqli_fetch_array($sql_md);
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_dis['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_md['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;     
	       case 4:
	            break;
	       case 5:
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;
	       case 6:
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;     
	    }
	    if($condition == true){
			$number ='';
			$typeu = '';
			if($r['user_type'] == 1){
			    $typeu = 'Master';
			}
			elseif($r['user_type'] == 2){
			    $typeu = 'Distributor';
			}
			elseif($r['user_type'] == 3){
			    $typeu = 'Retailer';
			}
			else{
			    $typeu = 'Admin';
			}
			
			if($r1['rtype'] != ''){
				$type = $r1['rtype'];
			}
			else{
				$type = $r1['type'];
			}
			
			if($r1['mobile'] != ''){
				$number = $r1['mobile'];
			}
			
			if($r1['consumer_no'] != ''){
				$number = $r1['consumer_no'];
			}
			
			if($r1['status'] == '0'){
				$status = '<span class="label label-warning">Pending</span>';
				$class_s = 'label-warning';
			}
			elseif($r1['status'] == '1'){
				$status = '<span class="label label-success">Success</span>';
				$class_s = 'label-success';
			}
			elseif($r1['status'] == '2' || $r1['status'] == '3'){
				$status = '<span class="label label-danger">Fail</span>';
				$class_s = 'label-danger';
			}
			else{
				$status = '<span class="label label-default">Insuf. Bal.</span>';
				$class_s = 'label-default';
			}
			
			if($r1['transaction_id'] != '0'){
				$transid = $r1['transaction_id'];
			}
			else{
				$transid = $r1['transid'];
			}
			
		$sql2 = mysqli_query($con,"SELECT * FROM b2b_api_configurations WHERE id='".$r1['apiname']."'");
		$r2 = mysqli_fetch_array($sql2);
		
			
		echo '<tr><td><a href="javascript:void(0)"><strong>'.$transid.'</strong></a></td><td>'.$r1['opcode'].'</td><td><strong><i class="fa fa-inr" aria-hidden="true"></i>'.$r1['amount'].'</strong></td><td>'.$r1['mobile'].'</td><td class="">'.$r['firstname'].'</td><td>'.$status.'</td></tr>';	
		if($count == 9){
			exit;
		}
		$count++;
	    }
		}	
		}
		}
		
		if($_SESSION['b2b_kpr_rech_user_type'] == 3){
		$sql = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r1['b2b_user_id']."' and admin_id='".$_SESSION['b2b_kpr_rech_admin_id']."'");	
		//$r2 = mysqli_fetch_array($sql);
		while($r = mysqli_fetch_array($sql)){
		    $usertypp = $r['user_type'];
		$condition=false;
	    switch ($usertypp){
	       case 1:
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;
	       case 2:
	            $sql_md = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r['uplevel_id']."'");
	            $r_md = mysqli_fetch_array($sql_md);
	            if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_md['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;
	       case 3:
	           $sql_dis = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r['uplevel_id']."'");
	           $r_dis = mysqli_fetch_array($sql_dis);
	           $sql_md = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r_dis['uplevel_id']."'");
	           $r_md = mysqli_fetch_array($sql_md);
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_dis['uplevel_id'] == $_SESSION['b2b_kpr_rech_id'] || $r_md['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;     
	       case 4:
	            break;
	       case 5:
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;
	       case 6:
	           if($r['id'] == $_SESSION['b2b_kpr_rech_id'] || $r['uplevel_id'] == $_SESSION['b2b_kpr_rech_id']){
	            $condition=true;   
	           }
	            break;     
	    }
	    if($condition == true){
		    
			$number ='';
			$typeu = '';
			if($r['user_type'] == 1){
			    $typeu = 'Master';
			}
			elseif($r['user_type'] == 2){
			    $typeu = 'Distributor';
			}
			elseif($r['user_type'] == 3){
			    $typeu = 'Retailer';
			}
			else{
			    $typeu = 'Admin';
			}
			
			if($r1['rtype'] != ''){
				$type = $r1['rtype'];
			}
			else{
				$type = $r1['type'];
			}
			
			if($r1['mobile'] != ''){
				$number = $r1['mobile'];
			}
			
			if($r1['consumer_no'] != ''){
				$number = $r1['consumer_no'];
			}
			
			if($r1['status'] == '0'){
				$status = '<span class="label label-warning">Pending</span>';
				$class_s = 'label-warning';
			}
			elseif($r1['status'] == '1'){
				$status = '<span class="label label-success">Success</span>';
				$class_s = 'label-success';
			}
			elseif($r1['status'] == '2' || $r1['status'] == '3'){
				$status = '<span class="label label-danger">Fail</span>';
				$class_s = 'label-danger';
			}
			else{
				$status = '<span class="label label-default">Insuf. Bal.</span>';
				$class_s = 'label-default';
			}
			
			if($r1['transaction_id'] != '0'){
				$transid = $r1['transaction_id'];
			}
			else{
				$transid = $r1['transid'];
			}
			
		$sql2 = mysqli_query($con,"SELECT * FROM b2b_api_configurations WHERE id='".$r1['apiname']."'");
		$r2 = mysqli_fetch_array($sql2);
		
			
		echo '<tr><td><a href="javascript:void(0)"><strong>'.$transid.'</strong></a></td><td>'.$r1['opcode'].'</td><td><strong><i class="fa fa-inr" aria-hidden="true"></i>'.$r1['amount'].'</strong></td><td>'.$r1['mobile'].'</td><td class="">'.$r['firstname'].'</td><td>'.$status.'</td></tr>';	
		if($count == 9){
			exit;
		}
		$count++;
	    }
		}
		
		}
	}
	
}
if ($_POST['type'] == 'changestatus') {
	
	function curl_get($url, array $get = NULL, array $options = array()) 
		{    
			$defaults = array( 
				CURLOPT_URL => $url. (strpos($url, '?') === FALSE ? '?' : ''). http_build_query($get), 
				CURLOPT_HEADER => 0, 
				CURLOPT_RETURNTRANSFER => TRUE, 
				CURLOPT_TIMEOUT => 4 
			); 
			
			$ch = curl_init(); 
			curl_setopt_array($ch, ($options + $defaults)); 
			if( ! $result = curl_exec($ch)) 
			{ 
				trigger_error(curl_error($ch)); 
			} 
			curl_close($ch); 
			return $result; 
		}
	
	$sql1 = mysqli_query($con,"select * from `b2b_app_all_recharge_transaction_histories` where transaction_id='".$_POST['trsid']."'");
	$r =mysqli_fetch_array($sql1);
	$url = "http://api.paybay.in/api/ManuallyChangestatus?transtype=".$_POST['status']."&rid=".$_POST['trsid']."&txid=".$_POST['txid']."&apiname=".$r['apiname']."&rpid=".$_POST['rpid'];
	echo curl_get($url);
}
if ($_POST['type'] == 'fetchbuycommission') {
	$o__user = new user();
	$apiid = $_POST['apiid'];
	$opid = $_POST['opid'];
	if($_SESSION['b2b_kpr_rech_user_type'] == 4){
		$adminid = $_SESSION['b2b_kpr_rech_id'];
	}
	
	$getuserdata = $o__user->getOneuser($adminid);
	$getbuycomms = $o__commission1->fetchbuycommission($getuserdata->unique_id,$apiid,$opid);
	$sdata = 'buy_commission'.$apiid; 
	$buycom = $getbuycomms->$sdata;
	//print_r($getbuycomms);
	echo $buycom;
	//$con = mysqli_connect("localhost","bizzweb_kandoip",'kp@rt#${{121}}',"bizzweb_kandoipower");
	//$sql1 = mysqli_query($con,"select * from `` where ' order by id DESC");
	
	
}

if ($_POST['type'] == 'checknumber') {
	$mob = $_POST['mob'];
	
	$sql1 = mysqli_query($con,"select * from `b2b_users` where mob_no='".$mob."'");
	
	$n = mysqli_num_rows($sql1);
	if($n == 0){
		echo '0';
	}
	else{
		echo '1';
	}
	
}
if ($_POST['type'] == 'checkusername') {
	$un = $_POST['un'];
	
	$sql1 = mysqli_query($con,"select * from `b2b_users` where username='".$un."'");
	
	$n = mysqli_num_rows($sql1);
	if($n == 0){
		echo '0';
	}
	else{
		echo '1';
	}
	
}
if ($_POST['type'] == 'changestatusDisputes') {
	
	
	$id = $_POST['id'];
	$sts = $_POST['sts'];
	mysqli_query($con,"UPDATE `b2b_disputes` SET status='".$sts."' WHERE id='".$id."'");
	
}
if ($_POST['type'] == 'Disputesupdate') {
	
	
	
	$sql = mysqli_query($con,"SELECT * FROM `b2b_disputes` WHERE status='0' and admin_id='".$_SESSION['b2b_kpr_rech_id']."'");
    $nn = mysqli_num_rows($sql);
       echo 'Disputes('.$nn.')'; 
    
	
}
if ($_POST['type'] == 'fetchbalance') {
    	
    	$id = $_POST['user'];
    	$sql = mysqli_query($con,"SELECT * FROM `b2b_users` WHERE id='".$id."'");
    	$r = mysqli_fetch_array($sql);
    	echo $r['balance'];
    
}
if ($_POST['type'] == 'get_queue') {
	
	$sql1 = mysqli_query($con,"select * from `b2b_all_transaction_queues` where admin_id='".$_SESSION['b2b_kpr_rech_id']."' and status='5' order by id DESC");
	$count = 0;
	$i= 1;
	
	while($r1 = mysqli_fetch_array($sql1)){
		$sql = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r1['b2b_user_id']."' and admin_id='".$_SESSION['b2b_kpr_rech_id']."'");
		while($r = mysqli_fetch_array($sql)){
			$number ='';
			$typeu = '';
			if($r['user_type'] == 1){
			    $typeu = 'Master';
			}
			elseif($r['user_type'] == 2){
			    $typeu = 'Distributor';
			}
			elseif($r['user_type'] == 3){
			    $typeu = 'Retailer';
			}
			else{
			    $typeu = 'Admin';
			}
			
			if($r1['rtype'] != ''){
				$type = $r1['rtype'];
			}
			else{
				$type = $r1['type'];
			}
			
			if($r1['mobile'] != ''){
				$number = $r1['mobile'];
			}
			
			if($r1['consumer_no'] != ''){
				$number = $r1['consumer_no'];
			}
			
			if($r1['status'] == '0'){
				$status = 'Pending';
				$class_s = 'label-warning';
			}
			elseif($r1['status'] == '1'){
				$status = 'Success';
				$class_s = 'label-success';
			}
			elseif($r1['status'] == '2' || $r1['status'] == '3'){
				$status = 'Fail';
				$class_s = 'label-danger';
			}
			elseif($r1['status'] == '5'){
				$status = 'In queqe';
				$class_s = 'label-default';
			}
			else{
				$status = 'Insufficient Balance';
				$class_s = 'label-default';
			}
			
			if($r1['transaction_id'] != '0'){
				$transid = $r1['transaction_id'];
			}
			else{
				$transid = $r1['transid'];
			}
			
		$sql2 = mysqli_query($con,"SELECT * FROM b2b_api_configurations WHERE id='".$r1['apiname']."'");
		$r2 = mysqli_fetch_array($sql2);
		
			
		echo '<tr class="'.$class_s.'"><td><form action="" method="post"><select name="status" required style="color:#000;"><option value="">Select</option><option value="SUCCESS">SUCCESS</option><option value="FAILED">FAILED</option></select><input class="btn btn-primary btn-md" type="submit" name="updatebtn" value="Update"><input type="hidden" name="opid" value="'.$r1['opid'].'"><input type="hidden" name="opcode" value="'.$r1['opcode'].'"><input type="hidden" name="amount" value="'.$r1['amount'].'"><input type="hidden" name="order_id" value="'.$transid.'"><input type="hidden" name="mob" value="'.$r1['mobile'].'"><input type="hidden" name="admin_id" value="'.$_SESSION['b2b_kpr_rech_id'].'"><input type="hidden" name="user_id" value="'.$r1['b2b_user_id'].'"></form></td><td>'.$transid.'</td><td>'.$r1['date'].'<br>'.$r1['time'].'</td><td>'.$r1['opcode'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['amount'].'</td><td>'.$r1['mobile'].'</td><td>'.$r1['modetype'].'</td><td class="">'.$r['id'].'</td><td class="">'.$r['firstname'].' '.$r['lastname'].'</td><td>'.$r2['api_name'].'</td><td>'.$status.'</td><td>'.$r1['modify_date'].' '.$r1['modify_time'].'</td><td>'.$r1['buy_commission'].'</td><td>'.$r1['sell_commission'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['commission'].'</td><td ><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['commission'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['current_balance'].'</td><td><i class="fa fa-inr" aria-hidden="true"></i> '.$r1['final_balance'].'</td><td></td><td></td></tr>';	
		if($count == 500){
			exit;
		}
		$count++;
		}
	}
	
}

?>