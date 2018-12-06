<?php
$o__recharge= new recharge();

if(TYPE == 'recharge')
{
    
    $mobile=$o__recharge->getalloperators('1');
    $dth=$o__recharge->getalloperators('2');
    $postpaid=$o__recharge->getalloperators('4');

if(isset($_POST['pay_now_mob'])){
    $user_id = $_SESSION['b2b_kpr_rech_id'];
    if(isset($_POST['mob_no'])){
        $mob_no=$_POST['mob_no'];
    }
    
    if(isset($_POST['smart_card'])){
        $mob_no=$_POST['smart_card'];
    }
    
    
    $amount=$_POST['amount'];
    $opcode=$_POST['opcode'];
    $paymethod=$_POST['paymethod'];
    $rtype = $_POST['rtype'];
    $modetype = 'B2BWEB';
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
    
        $string = ['user_id'=>$user_id,'amount'=>$amount,'mobile'=>$mob_no,'opcode'=>$opcode,'order_id'=>$rid,'paymentmode'=>$paymethod,'rtype'=>$rtype,'modetype'=>$modetype,'admin_id'=>$admin_id];
        //print_r($string);exit;
        //file_get_contents($url);
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL,"http://api.paybay.in/api/b2bcashRecharge");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
        
        // in real life you should use something like:
        // curl_setopt($ch, CURLOPT_POSTFIELDS, 
        //          http_build_query(array('postvar1' => 'value1')));
        
        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $server_output = curl_exec ($ch);
        
        curl_close ($ch);
        //print_r($server_output);exit;
        $op = json_decode($server_output);
        flash('rech', $op->message, 'alert alert-success');
        $master->redirect('index.php?action=recharge');
        
}

if(isset($_POST['pay_now_post'])){
    $user_id = $_SESSION['b2b_kpr_rech_id'];
    $mob_no=$_POST['mob_no'];
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
        //print_r($server_output);exit;
        $op = json_decode($server_output);
        flash('rech', $op->message, 'alert alert-success');
        $master->redirect('index.php?action=recharge');
}
//     $wallet_amt=$o__recharge->getwalletamt($_SESSION['b2b_kpr_rech_id']);



//     if(isset($_POST['pay_now']))
//     {
//         if($wallet_amt >= '100'):
//         $user_det=$o__recharge->getb2busersbyid($_SESSION['b2b_kpr_rech_id']);
//         $rr="";
//         $trn="";
//         $operator=$_POST['operator'];
//         $mob_no=$_POST['mob_no'];
//         $amount=$_POST['amount'];
//         $smart_card=$_POST['smart_card'];

//         $key='$2y$10$6arUksGG6e59rrOhsMEL0OQpx3Eqz0NM0KbtyhHzvVSOuTL0u7jGu';

        
//         $max = 1000;
//         $digits = 8;
//         $products = $o__recharge->getallorders();
//         $power = pow(10, $digits);
//         foreach($products as $prods):
//             $num = str_pad(mt_rand(0, $power), $digits, "0", STR_PAD_LEFT);
//             if (!in_array($num, $prods['rech_unique_id']))
//             {
//                 //$index->update_ibid($num,$prods['id']);
//                 $rr=$num;
//             }
//         endforeach;
        
//          $maxx = 1000;
//         $digitss = 10;
//         $productss = $o__recharge->getallorders();
//         $powers = pow(10, $digitss);
//         foreach($productss as $prods):
//             $num = str_pad(mt_rand(0, $powers), $digitss, "0", STR_PAD_LEFT);
//             if (!in_array($num, $prods['transaction_id']))
//             {
//                 //$index->update_ibid($num,$prods['id']);
//                 $trn=$num;
//             }
//         endforeach;

//         if($mob_no != "")
//         {
//             $records=array(
//                 'userid'=>  $_SESSION['b2b_kpr_rech_id'],
//                 'rech_unique_id'=>$rr,
//                 'transaction_id'=>$trn,
//                 'opcode'=>$operator,
//                 'amount'=>$amount,
//                 'date'=>date('Y-m-d'),
//                 'time'=>date('h:i:s'),
//                 'mobile'=>$mob_no,
//                 'admin_id'=>$user_det->admin_id,

//             );
//             $o__recharge->create_order($records);
//             $Authentication ="operatorcode=".$operator."&MobileNumber=".$mob_no."&Amount=".$amount."&key=".$key."&mid=M32980742";
//         }
//         if($smart_card != "")
//         {
//             $records=array(
//                 'userid'=>  $_SESSION['b2b_kpr_rech_id'],
//                 'rech_unique_id'=>$rr,
//                 'opcode'=>$operator,
//                 'amount'=>$amount,
//                 'date'=>date('Y-m-d'),
//                 'time'=>date('h:i:s'),
//                 'smartcard_no'=>$smart_card,
//                 'admin_id'=>$user_det->admin_id,
//             );
//             $o__recharge->create_order($records);
//             $Authentication ="operatorcode=".$operator."&MobileNumber=".$smart_card."&Amount=".$amount."&key=".$key."&mid=M58391928";
//         }


// //echo "http://api.bktrecharge.com/api/recharge/GetRechargeDoneRequest?".$Authentication; exit();
//         $ch = curl_init();

//         // set url
//         curl_setopt($ch, CURLOPT_URL, "http://api.bktrecharge.com/api/recharge/GetRechargeDoneRequest?".$Authentication);

//         //return the transfer as a string
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//         // $output contains the output string
//         $output = curl_exec($ch);

//         // close curl resource to free up system resources
//         curl_close($ch);
//         // $result = curl_exec($ch);

//         // print_r($output); //exit();

//         $decode_output=json_decode($output);

//         //  print_r($decode_output); exit();

//         $recordss= array(
//             'reason'=> $decode_output->reason,
//             'reasoncode'=> $decode_output->reasoncode,
//             'rid'=> $decode_output->rid,
//             'refno'=> $decode_output->refno,
//         );
//         $o__recharge->updateOrders($recordss,$rr);
//         //  print_r($recordss); exit();
//         if($decode_output->reason=="Accepted") {
//       //  if($amount!=""){
//             $final_wallet_amt=$wallet_amt->balance - $amount;
//           //
//           //  $recordss['status']="1";
 
//  flash('rech', 'Sucessful Recharge Done', 'alert alert-success');
 
//             //check and calculate retailer , distributor, master distributor commission

//             $retailerid="";
//             $distributorid="";
//             $masterdistributor="";
//             $dist="";
//             $mdist="";
//             $ret_comision="";
//             $dist_comision="";
//             $mdist_comision="";
//             //print_r($user_det->admin_id); exit();
//             //retailer start
//             if($user_det->admin_id != 1):
//                 $retailerid=$user_det->id;

//                 //check commission type
//                 if($user_det->custom_commission=='1'):
//                     $getr_commission=$o__recharge->getcommisionbyid('b2b_user_rech_'.$user_det->unique_id,$operator);
//                     $rcom=$getr_commission->commoncommision;
//                     $ret_comision=($rcom * $amount) /100;
//                     $o__recharge->update_commission($ret_comision,$retailerid);
//                 else:
//                     $getr_commission=$o__recharge->getcommisionbyid('api_operator',$operator);
//                     $rcom=$getr_commission->commoncommision;
//                     $ret_comision=($rcom * $amount) /100;
//                     $o__recharge->update_commission($ret_comision,$retailerid);
//                 endif;
//                 //find distributor
//                 $dist= $o__recharge->getb2busersbyid($user_det->admin_id);
//              //   print_r($dist); exit();
//             else:
//                 $retailerid=$user_det->id;
//                 if($user_det->custom_commission=='1'):
//                     $getr_commission=$o__recharge->getcommisionbyid('b2b_user_rech_'.$user_det->unique_id,$operator);
//                     $rcom=$getr_commission->commoncommision;
//                     $ret_comision=($rcom * $amount) /100;
//                     $o__recharge->update_commission($ret_comision,$retailerid);
//                 else:
//                     $getr_commission=$o__recharge->getcommisionbyid('api_operator',$operator);
//                     $rcom=$getr_commission->commoncommision;
//                     $ret_comision=($rcom * $amount) /100;
//                     $o__recharge->update_commission($ret_comision,$retailerid);
//                 endif;
//             endif;
//             //retailer end

//             //distributor start
//             if(!empty($dist)):
//             if($dist->admin_id!='1'):

//                 $distributorid=$dist->id;
//                 //check commission type
//                 if($dist->custom_commission=='1'):
//                     $getd_commission=$o__recharge->getcommisionbyid('b2b_user_rech_'.$dist->unique_id,$operator);
//                     $rcom=$getd_commission->commoncommision;
//                     $dist_comision=($rcom * $amount) /100;
//                     $o__recharge->update_commission($dist_comision,$distributorid);
//                 else:
//                      $get_commission=$o__recharge->getcommisionbyid('api_operator',$operator);
//                     $rcom=$getd_commission->commoncommision;
//                     $dist_comision=($rcom * $amount) /100;
//                     $o__recharge->update_commission($dist_comision,$distributorid);
//                 endif;

//                 //find master distributor
//                 $mdist= $o__recharge->getb2busersbyid($dist->admin_id);
//             else:
//                 $distributorid=$dist->id;
//                 //check commission type
//                 if($dist->custom_commission=='1'):
//                     $getd_commission=$o__recharge->getcommisionbyid('b2b_user_rech_'.$dist->unique_id,$operator);
//                     $rcom=$getd_commission->commoncommision;
//                     $dist_comision=($rcom * $amount) /100;
//                     $o__recharge->update_commission($dist_comision,$distributorid);

//                 else:
//                     $getd_commission=$o__recharge->getcommisionbyid('api_operator',$operator);
//                     $rcom=$getd_commission->commoncommision;
//                     //echo $rcom;
//                     $dist_comision=($rcom * $amount) /100;
//                     $o__recharge->update_commission($dist_comision,$distributorid);
//                   // exit();
//                 endif;


//             endif;
//             endif;
//             //distributor end


//             //master distributor start
//             if(!empty($mdist)):
//             if($mdist->admin_id!=1):

//                 $masterdistributor=$mdist->id;

//                 //check commission type
//                 if($mdist->custom_commission=='1'):
//                     $getm_commission=$o__recharge->getcommisionbyid('b2b_user_rech_'.$mdist->unique_id,$operator);
//                     $mdcom=$getm_commission->commoncommision;
//                     $mdist_comision=($mdcom * $amount) /100;
//                     $o__recharge->update_commission($mdist_comision,$masterdistributor);
//                 else:
//                     $getm_commission=$o__recharge->getcommisionbyid('api_operator',$operator);
//                     $mdcom=$getm_commission->commoncommision;
//                     $mdist_comision=($mdcom * $amount) /100;
//                     $o__recharge->update_commission($mdist_comision,$masterdistributor);
//                 endif;

//                 else:
//                     $masterdistributor=$mdist->id;
//                     if($mdist->custom_commission=='1'):
//                         $getm_commission=$o__recharge->getcommisionbyid('b2b_user_rech_'.$mdist->unique_id,$operator);
//                         $mdcom=$getm_commission->commoncommision;
//                         $mdist_comision=($mdcom * $amount) /100;
//                         $o__recharge->update_commission($mdist_comision,$masterdistributor);
//                     else:
//                         $getm_commission=$o__recharge->getcommisionbyid('api_operator',$operator);
//                         $mdcom=$getm_commission->commoncommision;
//                         $mdist_comision=($mdcom * $amount) /100;
//                         $o__recharge->update_commission($mdist_comision,$masterdistributor);
//                     endif;

//             endif;
//             endif;
//             //master distributor end

//             $records = array(
                
//                 'oid' => $rr,
//                 'status' => '1',
//                 'user_id' => $retailerid,
//                 'dist_user_id' => $distributorid,
//                 'mdist_user_id' => $masterdistributor,
//                 'opcode' => $operator,
//                 'amount' => $amount,
//                 'commission' => $ret_comision,
//                 'dist_commission' => $dist_comision,
//                 'mdist_commission' => $mdist_comision,
//                 'date' => date('Y-m-d'),
//                 'time' => date('h:i:s'),

//             );
//           // print_r($records); exit();
//             $o__recharge->create_b2b_user_commissions($records);
//             $master->redirect('index.php?action=recharge');
//         }
//         else
//         { 
//             flash('rech', ' Recharge Pending', 'alert alert-warning');
        
//             $recor= array(
//             'reason'=> $decode_output->reason,
//             'reasoncode'=> $decode_output->reasoncode,
//             'rid'=> '0',
//             'refno'=> $decode_output->refno,
//         );
//       // print_r($recordss);      
//         //echo $rr;
        
        
//         $recor['status']="0";
//             $final_wallet_amt=$wallet_amt->balance;
//             $o__recharge->uppdateOrders($recor,$rr);
//           // exit();  
//         }

//       // $o__recharge->update_b2b_orders($recordss,$rr);
        
//         $o__recharge->update_wallet_amt($final_wallet_amt,$_SESSION['b2b_kpr_rech_id']);
//         $master->redirect('index.php?action=recharge');

//         else:
//     flash('money', 'Wallet must be greater than 100', 'alert alert-danger');
//                 $master->redirect('index.php?action=recharge');
// endif;
//     }

// flash('money', 'Wallet must be greater than 100', 'alert alert-danger');
// $master->redirect('index.php?action=recharge');
}

if(TYPE=="money_box")
{
    
}



?>