<?php
$o__api_configration = new api_configration();
$getallcomdata= $o__api_configration->getsmsapiuser($_SESSION['b2b_kpr_rech_id']);
$getb2buser_sms= $o__api_configration->getb2buser_list();
if(TYPE == 'add_recharge_api')
{
    
}
if(TYPE == 'add_sms_api')
{
    if(isset($_POST['useradd']))
    {
        $records= array(

            'name' => $_POST['name'],
            'url' => $_POST['url'],
            'cmpy_name' => $_POST['mobile_par'],
            'mob_no' => $_POST['msg_par'],
            'msg' => $_POST['message'],
            'email' => $_POST['email'],
            'website' => $_POST['website'],
            'group_name' => $_POST['comm_group'],
            'adhaar_card' => $adhaar_card,
            'pan_card' => $pan_card,
            'logo' => $logo,
            'status' => $status,
            'user_type' => $_POST['user_type'],
            'full_rights' => $_POST['full_rights'],
            'group_name' => $_POST['group_type'],
            'username' => $_POST['username'],
           // 'custom_commission' => $custom_commission,
            'mpos_status' => $_POST['mpos_status'],
            

        );
    }
     if(isset($_POST['addsmsapi']))
    {
          $records= array(

            'name' => $_POST['name'],
            'url' => $_POST['url'],
            'mobile_par' => $_POST['mobile_par'],
            'msg_par' => $_POST['message_par'],
            'msg' => $_POST['message'],
            'status' => 0,
            'admin_id' => $_SESSION['b2b_kpr_rech_admin_id'],
            'user_id' => $_SESSION['b2b_kpr_rech_id'],
            'welcome_msg' => $_POST['welcome_message'],
           // 'user_type' => $_POST['user_type'],
            'date' => date('Y-m-d'),
            'time' => date('h:i:s'),
        );
          
          $getb2buser_sms= $o__api_configration->create_b2b_sms_apis($records);
          flash('add_sms_api', 'Successfully Added SMS API', 'alert alert-success');
          $master->redirect('index.php?action=view_sms_api');
    }
    if(isset($_POST['updatesmsapi']))
    {
          $records= array(

            'name' => $_POST['name'],
            'url' => $_POST['url'],
            'mobile_par' => $_POST['mobile_par'],
            'msg_par' => $_POST['message_par'],
            'msg' => $_POST['message'],
            'status' => 0,
            'admin_id' => $_SESSION['b2b_kpr_rech_admin_id'],
            'user_id' => $_SESSION['b2b_kpr_rech_id'],
            'welcome_msg' => $_POST['welcome_message'],
           // 'user_type' => $_POST['user_type'],
//            'date' => date('Y-m-d'),
//            'time' => date('h:i:s'),
        );
          
          $getb2buser_sms= $o__api_configration->updatesmsapi($records,$_POST['tx']);
          flash('add_sms_api', 'Successfully Updated SMS API', 'alert alert-success');
          $master->redirect('index.php?action=view_sms_api');
    }
    
    
}
if(TYPE == 'api_switch')
{
$o__commission = new commission();
$getallcomdata= $o__commission->getallcommission();
$getapiname= $o__commission->getapiname($_SESSION['b2b_kpr_rech_id']);
//$_SESSION['b2b_kpr_rech_id']
}
if(TYPE == 'set_sms_prefix')
{
    
}
if(TYPE == 'user_wise_api')
{
    
}
if(TYPE == 'view_sms_api')
{
    
}

?>