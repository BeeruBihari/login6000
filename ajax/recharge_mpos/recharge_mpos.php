<?php 
include'../../include/base.php';
$o__recharge= new recharge();

$amt  = $_POST['amt1'];
$mono  = $_POST['mono1'];
$opt  = $_POST['opt1'];

//echo $amt.','.$mono.','.$opt;

$user_det=$o__recharge->getb2busersbyid($_SESSION['b2b_kpr_rech_id']);
        $rr="";
        $trn="";
        $operator=$opt;
        $mob_no=$mono;
        $amount=$amt;
        //echo $operator.$mob_no.$amount ;
        
        $max = 1000;
        $digits = 10;
        $products = $o__recharge->getallorders();
        $power = pow(10, $digits);
        foreach($products as $prods):
            $num = str_pad(mt_rand(0, $power), $digits, "0", STR_PAD_LEFT);
            if (!in_array($num, $prods['rech_unique_id']))
            {
                //$index->update_ibid($num,$prods['id']);
                $rr=$num;
            }
        endforeach;
        
//         $maxx = 1000;
//        $digitss = 10;
//        $productss = $o__recharge->getallorders();
//        $powers = pow(10, $digitss);
//        foreach($productss as $prods):
//            $num = str_pad(mt_rand(0, $powers), $digitss, "0", STR_PAD_LEFT);
//            if (!in_array($num, $prods['transaction_id']))
//            {
//                //$index->update_ibid($num,$prods['id']);
//                $trn=$num;
//            }
//        endforeach;
        $digits_needed=10;

        $random_number=''; 

        $count=0;

        while ( $count < $digits_needed ) {
            $random_digit = mt_rand(0, 9);

            $random_number .= $random_digit;
            $count++;
        }
        $trn=$random_number;
        if($mob_no != "")
        {
            $records=array(
                'userid'=>  $_SESSION['b2b_kpr_rech_id'],
                'rech_unique_id'=>$rr,
                'transaction_id'=>$trn,
                'opcode'=>$operator,
                'amount'=>$amount,
                'date'=>date('Y-m-d'),
                'time'=>date('h:i:s'),
                'mobile'=>$mob_no,
                'admin_id'=>$user_det->admin_id,

            );
            //print_r($records); exit();
            $o__recharge->create_order($records);
            
            
        }
        $cashback=1;
        $name='kandoipower';
        $email='info@kandoipower.com';
        
        echo $trn.','.$amt.','.$cashback.','.$name.','.$mono.','.$email;// ordno,amount,cashback,name,mobile,email
?>
