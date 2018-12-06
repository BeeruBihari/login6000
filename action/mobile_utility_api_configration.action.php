<?php
$o__mobile_utility_api = new mobile_utility_api_configration();
$getapi= $o__mobile_utility_api->getb2bapiname();
$api_holders= $o__mobile_utility_api->getAllAPIUHolder($_SESSION['b2b_kpr_rech_id']);
$getgroup=$o__mobile_utility_api->getgroup($_SESSION['b2b_kpr_rech_id']);

if(TYPE == 'mobile_utility_api_configration')
{
     if(isset($_POST['add_b2b_api']))
    {
         date_default_timezone_set('asia/kolkata');

          $records= array(

            'api_name' => $_POST['api_name'],
            'url' => $_POST['url'],
            'number' => $_POST['mob_cons_num'],
            'api_holder' => $_POST['api_holder'],
            'amount' => $_POST['amount'],
            'opcode' => $_POST['operator_code'],
            'ref_no' => $_POST['ref_num'],
            'format' => $_POST['format'],
            'format_parameter' => $_POST['format_parm'],
            'b2b_user_id' => $_SESSION['b2b_kpr_rech_id'],
            'status' =>1,
            'date' => date("Y-m-d"),
            'time' => date("h:i:s"),
            'status_res'=>$_POST['status_res'],
            'number_res'=>$_POST['number_res'],
            'amount_res'=>$_POST['amount_res'],
            'opcode_res'=>$_POST['opcode_res'],
            'ref_no_res'=>$_POST['ref_no_res'],
            
        );
      // print_r($records);        exit();
        $user_det= $o__mobile_utility_api->getb2buserbyid($_POST['api_holder']);
          $b2b_api_add = $o__mobile_utility_api->create_b2b_api($records);

        $alter_aa="ALTER TABLE b2b_wl_operator_".$user_det->unique_id." ADD api_op_".$b2b_api_add." VARCHAR(100) DEFAULT ''";
        $alter_g="ALTER TABLE b2b_wl_operator_".$user_det->unique_id." ADD buy_commission".$b2b_api_add."  DOUBLE(8,2) DEFAULT '0'";
        $alter_h="ALTER TABLE b2b_wl_operator_".$user_det->unique_id." ADD buy_commission_status".$b2b_api_add." VARCHAR(100) DEFAULT 'percentage'";
         $alter_gi="ALTER TABLE b2b_wl_operator_".$user_det->unique_id." ADD buy_service_charge".$b2b_api_add."  DOUBLE(8,2) DEFAULT '0'";
        $alter_hi="ALTER TABLE b2b_wl_operator_".$user_det->unique_id." ADD buy_service_charge_status".$b2b_api_add." VARCHAR(100) DEFAULT 'flat'";
        $alter_a="ALTER TABLE b2b_wl_operator_".$user_det->unique_id." ADD opcode".$b2b_api_add." VARCHAR(100) DEFAULT ''";
        $alter_b= "ALTER TABLE b2b_wl_operator_".$user_det->unique_id." ADD status".$b2b_api_add." INT(10) DEFAULT '0'";
        $alter_c ="ALTER TABLE b2b_wl_operator_".$user_det->unique_id." ADD commission".$b2b_api_add." DOUBLE(8,2) DEFAULT '0'";
        $alter_d ="ALTER TABLE b2b_wl_operator_".$user_det->unique_id." ADD service_charge".$b2b_api_add." DOUBLE(8,2) DEFAULT '0'";
        $alter_e="ALTER TABLE b2b_wl_operator_".$user_det->unique_id." ADD coms_status".$b2b_api_add." VARCHAR(100) DEFAULT 'percentage'";
        $alter_f="ALTER TABLE b2b_wl_operator_".$user_det->unique_id." ADD sc_status".$b2b_api_add." VARCHAR(100) DEFAULT 'flat'";
        $alter_gg= "ALTER TABLE api_operator_group_tables ADD status".$b2b_api_add." INT(10) DEFAULT '0'";
        
       
         
		$con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
        $o__data = mysqli_query($con, $alter_aa);
        $o__data = mysqli_query($con, $alter_a);
        $o__data = mysqli_query($con, $alter_g);
        $o__data = mysqli_query($con, $alter_h);
         $o__data = mysqli_query($con, $alter_gi);
        $o__data = mysqli_query($con, $alter_hi);
        $o__data = mysqli_query($con, $alter_b);
        $o__data = mysqli_query($con, $alter_c);
        $o__data = mysqli_query($con, $alter_d);
        $o__data = mysqli_query($con, $alter_e);
        $o__data = mysqli_query($con, $alter_f);
		$o__data = mysqli_query($con, $alter_gg);
        //echo $alter_a; exit();

          flash('add_b2b_api', 'Successfully Created New Api', 'alert alert-success');
     }
    
}
if(TYPE == 'view_mobile_utility_api_configration')
{
    
    
}

?>