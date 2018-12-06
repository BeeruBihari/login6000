<?php 
include'../../include/base.php';
$o__recharge= new recharge();

 
$tid  = $_GET['txtn_id'];
$oid  = $_GET['odr_id'];

 $recharge_details=$o__recharge->getrechargedata($oid);
 $u_id=$recharge_details[0]['userid'];

$user_det=$o__recharge->getb2busersbyid($u_id);
 $wallet_amt=$o__recharge->getwalletamt($u_id);
  
// print_r($user_det);
// print_r('<br>');
// print_r($wallet_amt);



 $records=array(
                'mpos_tid'=> $tid,
              
            );
$o__recharge->updatetidmpos($records,$oid);

 $response=array(
                'status'=> true,
                'tid'=> $tid,
                'oid'=> $oid,
              
            );
 
 
 
 // recharge  code start 
 



$operator=$recharge_details[0]['opcode'];
$mob_no=$recharge_details[0]['mobile'];
$amount=$recharge_details[0]['amount'];
$key='$2y$10$6arUksGG6e59rrOhsMEL0OQpx3Eqz0NM0KbtyhHzvVSOuTL0u7jGu';
 $decode_output="";
  if($mob_no != "")
        {
            
            $Authentication ="operatorcode=".$operator."&MobileNumber=".$mob_no."&Amount=".$amount."&key=".$key."&mid=M32980742";
            $ch = curl_init();

      
        curl_setopt($ch, CURLOPT_URL, "http://api.kandoipower.com/api/recharge/GetRechargeDoneRequest?".$Authentication);

       
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

       
        $output = curl_exec($ch);

       
        curl_close($ch);
       

        $decode_output=json_decode($output);
    

        $recordss= array(
            'reason'=> $decode_output->reason,
            'reasoncode'=> $decode_output->reasoncode,
            'rid'=> $decode_output->rid,
            'refno'=> $decode_output->refno,
        );
         $o__recharge->updaterechargemposdata($recordss,$oid);
         echo json_encode($response);
         exit();
       }
       
        if($decode_output->reason=="Accepted") {
   
            $final_wallet_amt=$wallet_amt->balance - $amount;
          
 
 
            //check and calculate retailer , distributor, master distributor commission

            $retailerid="";
            $distributorid="";
            $masterdistributor="";
            $dist="";
            $mdist="";
            $ret_comision="";
            $dist_comision="";
            $mdist_comision="";
           
            if($user_det->admin_id != 1):
                $retailerid=$user_det->id;

                //check commission type
                if($user_det->custom_commission=='1'):
                    $getr_commission=$o__recharge->getcommisionbyid('b2b_user_rech_'.$user_det->unique_id,$operator);
                    $rcom=$getr_commission->commoncommision;
                    $ret_comision=($rcom * $amount) /100;
                    $o__recharge->update_commission($ret_comision,$retailerid);
                else:
                    $getr_commission=$o__recharge->getcommisionbyid('api_operator',$operator);
                    $rcom=$getr_commission->commoncommision;
                    $ret_comision=($rcom * $amount) /100;
                    $o__recharge->update_commission($ret_comision,$retailerid);
                endif;
                //find distributor
                $dist= $o__recharge->getb2busersbyid($user_det->admin_id);
             //   print_r($dist); exit();
            else:
                $retailerid=$user_det->id;
                if($user_det->custom_commission=='1'):
                    $getr_commission=$o__recharge->getcommisionbyid('b2b_user_rech_'.$user_det->unique_id,$operator);
                    $rcom=$getr_commission->commoncommision;
                    $ret_comision=($rcom * $amount) /100;
                    $o__recharge->update_commission($ret_comision,$retailerid);
                else:
                    $getr_commission=$o__recharge->getcommisionbyid('api_operator',$operator);
                    $rcom=$getr_commission->commoncommision;
                    $ret_comision=($rcom * $amount) /100;
                    $o__recharge->update_commission($ret_comision,$retailerid);
                endif;
            endif;
            //retailer end

            //distributor start
            if(!empty($dist)):
            if($dist->admin_id!='1'):

                $distributorid=$dist->id;
                //check commission type
                if($dist->custom_commission=='1'):
                    $getd_commission=$o__recharge->getcommisionbyid('b2b_user_rech_'.$dist->unique_id,$operator);
                    $rcom=$getd_commission->commoncommision;
                    $dist_comision=($rcom * $amount) /100;
                    $o__recharge->update_commission($dist_comision,$distributorid);
                else:
                     $get_commission=$o__recharge->getcommisionbyid('api_operator',$operator);
                    $rcom=$getd_commission->commoncommision;
                    $dist_comision=($rcom * $amount) /100;
                    $o__recharge->update_commission($dist_comision,$distributorid);
                endif;

                //find master distributor
                $mdist= $o__recharge->getb2busersbyid($dist->admin_id);
            else:
                $distributorid=$dist->id;
                //check commission type
                if($dist->custom_commission=='1'):
                    $getd_commission=$o__recharge->getcommisionbyid('b2b_user_rech_'.$dist->unique_id,$operator);
                    $rcom=$getd_commission->commoncommision;
                    $dist_comision=($rcom * $amount) /100;
                    $o__recharge->update_commission($dist_comision,$distributorid);

                else:
                    $getd_commission=$o__recharge->getcommisionbyid('api_operator',$operator);
                    $rcom=$getd_commission->commoncommision;
                    //echo $rcom;
                    $dist_comision=($rcom * $amount) /100;
                    $o__recharge->update_commission($dist_comision,$distributorid);
                   // exit();
                endif;


            endif;
            endif;
            //distributor end


            //master distributor start
            if(!empty($mdist)):
            if($mdist->admin_id!=1):

                $masterdistributor=$mdist->id;

                //check commission type
                if($mdist->custom_commission=='1'):
                    $getm_commission=$o__recharge->getcommisionbyid('b2b_user_rech_'.$mdist->unique_id,$operator);
                    $mdcom=$getm_commission->commoncommision;
                    $mdist_comision=($mdcom * $amount) /100;
                    $o__recharge->update_commission($mdist_comision,$masterdistributor);
                else:
                    $getm_commission=$o__recharge->getcommisionbyid('api_operator',$operator);
                    $mdcom=$getm_commission->commoncommision;
                    $mdist_comision=($mdcom * $amount) /100;
                    $o__recharge->update_commission($mdist_comision,$masterdistributor);
                endif;

                else:
                    $masterdistributor=$mdist->id;
                    if($mdist->custom_commission=='1'):
                        $getm_commission=$o__recharge->getcommisionbyid('b2b_user_rech_'.$mdist->unique_id,$operator);
                        $mdcom=$getm_commission->commoncommision;
                        $mdist_comision=($mdcom * $amount) /100;
                        $o__recharge->update_commission($mdist_comision,$masterdistributor);
                    else:
                        $getm_commission=$o__recharge->getcommisionbyid('api_operator',$operator);
                        $mdcom=$getm_commission->commoncommision;
                        $mdist_comision=($mdcom * $amount) /100;
                        $o__recharge->update_commission($mdist_comision,$masterdistributor);
                    endif;

            endif;
            endif;
            //master distributor end

            $records = array(
                
                'oid' => $rr,
                'status' => '1',
                'user_id' => $retailerid,
                'dist_user_id' => $distributorid,
                'mdist_user_id' => $masterdistributor,
                'opcode' => $operator,
                'amount' => $amount,
                'commission' => $ret_comision,
                'dist_commission' => $dist_comision,
                'mdist_commission' => $mdist_comision,
                'date' => date('Y-m-d'),
                'time' => date('h:i:s'),

            );
           // print_r($records); exit();
            $o__recharge->create_b2b_user_commissions($records);
            $master->redirect('index.php?action=recharge');
        }
        else
        { 
            
        
            $recor= array(
            'reason'=> $decode_output->reason,
            'reasoncode'=> $decode_output->reasoncode,
            'rid'=> '0',
            'refno'=> $decode_output->refno,
        );
       // print_r($recordss);      
        //echo $rr;
        
        
        $recor['status']="0";
            $final_wallet_amt=$wallet_amt->balance;
            $o__recharge->uppdateOrders($recor,$rr);
           // exit();  
        }

       // $o__recharge->update_b2b_orders($recordss,$rr);

        $o__recharge->update_wallet_amt($final_wallet_amt,$_SESSION['b2b_kpr_rech_id']);
        //$master->redirect('index.php?action=recharge');



echo json_encode($response);
?>