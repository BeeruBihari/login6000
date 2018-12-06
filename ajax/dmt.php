<?php

include'../include/base.php';
if($_POST['type']=='login'){
        
        $user_id=$_SESSION['b2b_kpr_rech_id'];
        $admin_id=$_SESSION['b2b_kpr_rech_admin_id'];
        $modetype='B2BWEB';
        $number = $_POST['number'];
        $string = ['number'=>$number,'user_id'=>$user_id,'admin_id'=>$admin_id,'modetype'=>$modetype];
         
         
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://kpcab.kandoipower.com/api/DMT_login");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        echo $server_output;
        
}
if($_POST['type']=='otp_login'){
    $number = $_POST['number'];
    $admin_id = $_SESSION['b2b_kpr_rech_admin_id'];
    function random_num ($len)
            {
             $ch = "0123456789";
             $l = strlen ($ch) - 1;
             $str = "";
             for ($i=0; $i < $len; $i++)
             {
                 $x = rand (0, $l);
                 $str .= $ch[$x];
             }
             return $str;
            }
        $otp = random_num(6);
        $string1 = ['number'=>$number,'admin_id'=>$admin_id,'otp'=>$otp];
        $ch1 = curl_init();
        curl_setopt($ch1, CURLOPT_URL,"http://api.kandoipower.com/api/DMT_Otp");
        curl_setopt($ch1, CURLOPT_POST, 1);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $string1);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        $server_output1 = curl_exec ($ch1);
        curl_close ($ch1);
        $data = array('otp'=>md5($otp),'ss'=>$otp);
        echo json_encode($data);
}
if($_POST['type']=='check_otp'){
    $otp = $_POST['otp'];
    $kpotp = trim($_POST['kpotp']," ");
    $md = md5($otp);
    if($md == $kpotp){
        $data = array('status'=>1);
        echo json_encode($data);
    }
    else{
        $data = array('status'=>0);
        echo json_encode($data);
    }
}
if($_POST['type']=='getbenf'){
    
    $user_id=$_SESSION['b2b_kpr_rech_id'];
    $admin_id=$_SESSION['b2b_kpr_rech_admin_id'];
    $modetype='B2BWEB';
    $no = $_POST['number'];
    $token = $_POST['token'];
    $string = ['number'=>$no,'token'=>$token,'user_id'=>$user_id,'admin_id'=>$admin_id,'modetype'=>$modetype];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://kpcab.kandoipower.com/api/DMT_getbeneficiary");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        $r = '';
        $data = json_decode($server_output);
        $json = $data->data;
        $json = $json->beneList;
        for($i=0;$i<count($json);$i++){
            $r .= '<option value="'.$json[$i]->id.'/'.$json[$i]->customerNumber.'/'.$json[$i]->beneMobileNo.'/'.$json[$i]->beneName.'/'.$json[$i]->accountNo.'/'.$json[$i]->bankName.'/'.$json[$i]->ifscCode.'/'.$json[$i]->createdDate.'/'.$json[$i]->status.'">'.$json[$i]->beneName.'</option>';
        }
    echo $r;
    
}
if($_POST['type']=='transfermoney'){
    $user_id=$_SESSION['b2b_kpr_rech_id'];
    $admin_id=$_SESSION['b2b_kpr_rech_admin_id'];
    $modetype='B2BWEB';
    $beneId = $_POST['beneId'];
    $coustomerId = $_POST['coustomerId'];
    $amount = $_POST['amount'];
    $transactionMode = $_POST['transactionMode'];
    $token = $_POST['token'];
    $string = ['token'=>$token,'user_id'=>$user_id,'admin_id'=>$admin_id,'modetype'=>$modetype,'coustomerId'=>$coustomerId,'amount'=>$amount,'transactionMode'=>$transactionMode,'beneId'=>$beneId,'order_id'=>1234567890];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://kpcab.kandoipower.com/api/DMT_requestbeneficiary");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
    echo $server_output;
}
?>