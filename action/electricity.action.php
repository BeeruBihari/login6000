<?php
$o__electricity= new electricity();
$elec_state=$o__electricity->getstate();
$o__recharge= new recharge();

if(TYPE == 'electricity')
{
    
    $ldl=$o__recharge->getalloperators('7');
    if(isset($_POST['pay_now'])){
        $user_id = $_SESSION['b2b_kpr_rech_id'];
        $cus_no=$_POST['customer_number'];
        $amount=$_POST['amount'];
        $opcode=$_POST['ele_board'];
        $state=$_POST['state'];
        $rtype = 'Electricity';
        $modetype = 'B2BWEB';
        $admin_id = $_SESSION['b2b_kpr_rech_admin_id'];
        if(!empty($_POST['cus_mob'])){
           $cus_mob = $_POST['cus_mob']; 
        }
        else{
           $cus_mob = 0; 
        }
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
        rndid:
        $rid = random_num(10);
        $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
        $sql2 = mysqli_query($con,"SELECT * FROM b2b_app_all_recharge_transaction_histories WHERE transaction_id = '".$rid."'");
        $sql3 = mysqli_query($con,"SELECT * FROM b2b_app_all_recharge_transaction_histories WHERE transaction_id = '".$rid."'");
        $n2 = mysqli_num_rows($sql2);
        $n3 = mysqli_num_rows($sql3);
        $n = $n3 + $n2;
        if($n > 0 ){
            goto rndid;
        }
        $transid =  $rid;
        
        $string = ['user_id'=>$user_id,'amount'=>$amount,'consumer_no'=>$cus_no,'board'=>$opcode,'order_id'=>$rid,'paymentmode'=>$paymethod,'rtype'=>$rtype,'modetype'=>$modetype,'admin_id'=>$admin_id,'account'=>'','authentication'=>'','cus_mob'=>$cus_mob,'state'=>$state];
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL,"http://api.paybay.in/api/electricityapi");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        
        curl_close ($ch);
        //print_r($server_output);exit;
        $op = json_decode($server_output);
        flash('rech', $op->message, 'alert alert-success');
        $master->redirect('index.php?action=electricity');
    }
}

?>