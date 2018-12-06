<?php
//error_reporting(1);
ini_set('display_errors','On');
ini_set("allow_url_fopen", 1);
$con =mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
$message = $_REQUEST['message'];
$number = $_REQUEST['number'];
$keyword = $_REQUEST['keyword'];

mysqli_query($con,"INSERT INTO b2b_sms(keyword,message,receive_mob)VALUES('".$keyword."','".$message."','".$number."')");

if(!empty($message)&&!empty($number)&&!empty($keyword)){
    $number = $str = substr($number, 2);    
    $sql = mysqli_query($con,"SELECT * FROM b2b_users WHERE mob_no = '".$number."'");
    $n = mysqli_num_rows($sql);
    if($n == '1'){
        $data = explode(" ",$message);
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
        $sql2 = mysqli_query($con,"SELECT * FROM b2b_app_all_recharge_transaction_histories WHERE transaction_id = '".$rid."'");
        $n2 = mysqli_num_rows($sql2);
        if($n2 > 0 ){
            goto rndid;
        }
        $r = mysqli_fetch_array($sql);
        $url = 'http://api.paybay.in/api/b2bcashRecharge?user_id='.$r['id'].'&amount='.$data[2].'&mobile='.$data[1].'&opcode='.$data[0].'&order_id='.$rid.'&paymentmode=CASH&rtype=MobileRecharge';
        $string = ['user_id'=>$r['id'],'amount'=>$data[2],'mobile'=>$data[1],'opcode'=>$data[0],'order_id'=>$rid,'paymentmode'=>'CASH','rtype'=>'MobileRecharge','modetype'=>'LONGCODE'];
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


        
        print_r($server_output);
        
    }
    else{
        echo 'not run'.$n;
    }
    
}
?>