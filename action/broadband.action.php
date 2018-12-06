<?php
$o__recharge= new recharge();
if(TYPE == 'broadband')
{
     $bb=$o__recharge->getalloperators('12');
     if(isset($_POST['pay_now_bb'])){
    $user_id = $_SESSION['b2b_kpr_rech_id'];
    $mob_no=$_POST['account_no'];
    
    $amount=$_POST['amount'];
    $opcode=$_POST['opcode'];
    $paymethod=$_POST['paymethod'];
    $rtype = $_POST['rtype'];
    $modetype = 'B2BWEB';
    $admin_id = $_SESSION['b2b_kpr_rech_admin_id'];
    function random_nu($len)
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
        rndid2:
        $rid = random_nu(10);
        $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
        $sql2 = mysqli_query($con,"SELECT * FROM b2b_app_all_recharge_transaction_histories WHERE transaction_id = '".$rid."'");
        $sql3 = mysqli_query($con,"SELECT * FROM b2b_app_all_recharge_transaction_histories WHERE transaction_id = '".$rid."'");
        $n2 = mysqli_num_rows($sql2);
        $n3 = mysqli_num_rows($sql3);
        $n = $n3 + $n2;
        if($n > 0 ){
            goto rndid2;
        }
    $transid =  $rid;
    $string = ['user_id'=>$user_id,'amount'=>$amount,'number'=>$mob_no,'provider'=>$opcode,'account'=>'','authentication'=>'','order_id'=>$rid,'paymentmode'=>$paymethod,'rtype'=>$rtype,'modetype'=>$modetype,'admin_id'=>$admin_id];
        //print_r($string);exit;
        //file_get_contents($url);
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL,"http://api.paybay.in/api/CyberMobilePostpaidapi");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
        
        // in real life you should use something like:
        // curl_setopt($ch, CURLOPT_POSTFIELDS, 
        //          http_build_query(array('postvar1' => 'value1')));
        
        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $server_output = curl_exec ($ch);
        
        curl_close ($ch);
        $op = json_decode($server_output);
        flash('rech', $op->message, 'alert alert-success');
        $master->redirect('index.php?action=recharge');
}
}

?>