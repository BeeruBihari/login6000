<?php
$b2b_money_requests = new money_request();
if(TYPE == 'add_money_request')
{
    //$record = $b2b_money_requests->getOneuser($_GET['aid']);
    if(isset($_POST['money_request']))
    {


        $recordss =array(
            'user_id' => $_SESSION['b2b_kpr_rech_id'],
            'admin_id' => $_SESSION['b2b_kpr_rech_admin_id'],
            'uplevel_id' => $_SESSION['b2b_kpr_rech_uplevel_id'],
            'amount' => $_POST['amount'],
            'enter_date' => $_POST['date'],
            'bank_ref' => $_POST['bank_ref'],
            'transfer_type' => $_POST['transfer_type'],
            'bank' => $_POST['bank'],
            'remark' => $_POST['remark'],
            'date' => date('Y-m-d'),
            'time' => date('h:i:s'),

        );

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
		$con =mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
		$sql2 = mysqli_query($con,"SELECT * FROM b2b_money_requests WHERE transaction_id = '".$rid."'");
        $n2 = mysqli_num_rows($sql2);
		$sql3 = mysqli_query($con,"SELECT * FROM b2b_app_all_recharge_transaction_histories WHERE transaction_id = '".$rid."'");
        $n3 = mysqli_num_rows($sql3);
		if($n2 > 0 || $n3 > 0){
			goto rndid;
        }
		$recordss['transaction_id'] = $rid;
        $b2b_money_requests->create_b2b_money_requests($recordss);

        flash('add_money_request', 'Successfully Request Sent', 'alert alert-success');
        $master->redirect('index.php?action=view_money_request');
    }
}
if(TYPE == 'view_money_request')
{
if(isset($_POST['payment_filter'])):

 if($_SESSION['b2b_kpr_rech_id']=='1'){
    $as = $b2b_money_requests->getAll_b2b_requests_filter($_POST['from_date'],$_POST['to_date']);
}else{
    $as = $b2b_money_requests->getAll_b2b_requests_filter($_POST['from_date'],$_POST['to_date']);
}   
    
    else:
    
if($_SESSION['b2b_kpr_rech_id']=='1'){
    $as = $b2b_money_requests->getAll_b2b_money_requests();
}else{
    $as = $b2b_money_requests->getAll_b2b_money_requests();
}
    
        
endif;
    //print_r($as); exit();
    $total = $b2b_money_requests->total_record;
    $as_money_records = array();
    if (!empty($as[0])) {
        while ($as__record = mysqli_fetch_assoc($as[0])) {
            $as_money_records[] = $as__record;
        }
    }
    if(isset($_POST['active']))
    {
        $o__user->update_status('1',$_POST['active']);
        flash('active_deactive', 'Successfully Updated User Status as <b>Active</b>', 'alert alert-success');
        $master->redirect('index.php?action=view_user');
    }
    if(isset($_POST['deactive']))
    {
        $o__user->update_status('0',$_POST['deactive']);
        flash('active_deactive', 'Successfully Updated User Status as <b>Deactive</b>', 'alert alert-success');
        $master->redirect('index.php?action=view_user');
    }
}



if(TYPE == 'respond_money_request')
{

    //print_r($as); exit();

        $as = $b2b_money_requests->getAll_b2b_requests($_SESSION['b2b_kpr_rech_id']);

    $total = $b2b_money_requests->total_record;
    $as_money_records = array();
    if (!empty($as[0])) {
        while ($as__record = mysqli_fetch_assoc($as[0])) {
            $as_money_records[] = $as__record;
        }
    }
    if(isset($_POST['accept']))
    {
        
        if($_SESSION['b2b_kpr_rech_user_type']== "0")
        {
           
                 $amt_uid=explode(',',$_POST['amount']);
                $b2b_money_requests->update_status('1',$_POST['accept'],date('Y-m-d'),date('h:i:s'));
                $b2b_money_requests->update_user_balance($amt_uid[0],$amt_uid[1]);
        
                  $current_balance = $b2b_money_requests->getOneUsername($amt_uid[1]);
                 $final_bal=$current_balance->balance + $amt_uid[0];
                $recordss =array(
                    'b2b_user_id' => $amt_uid[1],
                    'admin_id' => $_SESSION['b2b_kpr_rech_admin_id'],
                    'uplevel_id' => $_SESSION['b2b_kpr_rech_uplevel_id'],
                    'current_balance' =>$current_balance->balance,
					'amount' =>$amt_uid[0],
					'rtype' =>'Money Request',
                    'add_amount' =>$amt_uid[0],
                    'type' =>'Money Accepted',
                    'c_status' =>'credited',
                    'status' =>1,
                    'final_balance' =>$final_bal,
					'transaction_id' =>$amt_uid[2],
                    'date' => date('Y-m-d'),
                    'time' => date('h:i:s'),
        
                );
				
                $b2b_money_requests->insert_b2b_app_all_trans_hist($recordss);
                
                
                         $current_balance1 = $b2b_money_requests->getOneUsername($_SESSION['b2b_kpr_rech_id']);
                         $final_bal_enduser=$current_balance1->balance;
                         
                         $recordss_enduser =array(
                            'b2b_user_id' => $_SESSION['b2b_kpr_rech_id'],
                            'admin_id' => $_SESSION['b2b_kpr_rech_admin_id'],
                            'uplevel_id' => $_SESSION['b2b_kpr_rech_uplevel_id'],
                            'current_balance' =>$current_balance1->balance,
                            'rtype' =>'Money Request',
							'amount' =>$amt_uid[0],
                            'sub_amount' =>$amt_uid[0],
                            'type' =>'Money Accepted',
                            'c_status' =>'debited',
                             'rech_user' =>1,
                              'status' =>1,
                            'final_balance' =>$final_bal_enduser,
							'transaction_id' =>$amt_uid[2],
                            'date' => date('Y-m-d'),
                            'time' => date('h:i:s'),
                
                        );
                        $b2b_money_requests->insert_b2b_app_all_trans_hist($recordss_enduser);
                        
                flash('active_deactive', 'Successfully Updated as <b>Accept</b>', 'alert alert-success');
                $master->redirect('index.php?action=respond_money_request');
        }else
        {
            
                    $amt_uid=explode(',',$_POST['amount']);
                    
                     $current_bal = $b2b_money_requests->getOneUsername($_SESSION['b2b_kpr_rech_id']);
                        $cur_bal_user=$current_bal->balance;
                
                    if( $amt_uid[0] < $cur_bal_user)
                    {
                        
                         $b2b_money_requests->update_status('1',$_POST['accept'],date('Y-m-d'),date('h:i:s'));
                         
                         $current_balance = $b2b_money_requests->getOneUsername($amt_uid[1]);
                         $final_bal=$current_balance->balance + $amt_uid[0];
                         $b2b_money_requests->update_user_balance1($final_bal,$amt_uid[1]);
                        $recordss =array(
                            'b2b_user_id' => $amt_uid[1],
                            'admin_id' => $_SESSION['b2b_kpr_rech_admin_id'],
                            'uplevel_id' => $current_balance->uplevel_id,
                            'current_balance' =>$current_balance->balance,
							'amount' =>$amt_uid[0],
                            'add_amount' =>$amt_uid[0],
                            'type' =>'Money Accepted',
                            'c_status' =>'credited',
                             'rech_user' =>1,
                              'status' =>1,
                            'final_balance' =>$final_bal,
							'transaction_id' =>$amt_uid[2],
                            'date' => date('Y-m-d'),
                            'time' => date('h:i:s'),
                
                        );
                        $b2b_money_requests->insert_b2b_app_all_trans_hist($recordss);
                        
                        
                         $current_balance1 = $b2b_money_requests->getOneUsername($_SESSION['b2b_kpr_rech_id']);
                         $final_bal_enduser=$current_balance1->balance - $amt_uid[0];
                          $b2b_money_requests->update_user_balance_minus1($final_bal_enduser,$_SESSION['b2b_kpr_rech_id']);
                         
                         $recordss_enduser =array(
                            'b2b_user_id' => $_SESSION['b2b_kpr_rech_id'],
                            'admin_id' => $_SESSION['b2b_kpr_rech_admin_id'],
                            'uplevel_id' => $_SESSION['b2b_kpr_rech_uplevel_id'],
                            'current_balance' =>$current_balance1->balance,
							'amount' =>$amt_uid[0],
                            'sub_amount' =>$amt_uid[0],
                            'type' =>'Money Accepted',
                            'c_status' =>'debited',
                             'rech_user' =>1,
                              'status' =>1,
                            'final_balance' =>$final_bal_enduser,
							'transaction_id' =>$amt_uid[2],
                            'date' => date('Y-m-d'),
                            'time' => date('h:i:s'),
                
                        );
                        $b2b_money_requests->insert_b2b_app_all_trans_hist($recordss_enduser);
                        
                        flash('active_deactive', 'Successfully Updated as <b>Accept</b>', 'alert alert-success');
                        $master->redirect('index.php?action=respond_money_request');
                    }
                    else 
                     {
                         flash('active_deactive', 'Account Balnce Is <b>Low</b>', 'alert alert-danger');
                        $master->redirect('index.php?action=respond_money_request');
                     }
        }
      
       
        
        
    }
    if(isset($_POST['decline']))
    {
        $amt_uid=explode(',',$_POST['amount']);
        
   

        $getone=$b2b_money_requests->getonerequest($amt_uid[3]);
        
    //      print_r($getone);
    // exit();
        
        if($getone->status=='1')
        {
            
            
             if($_SESSION['b2b_kpr_rech_user_type']== "0")
             {
                 
                  
                    $b2b_money_requests->update_status('2',$_POST['decline'],date('Y-m-d'),date('h:i:s'));
                    $b2b_money_requests->update_user_balance_minus($amt_uid[0],$amt_uid[1]);
                    
                     $current_balance = $b2b_money_requests->getOneUsername($amt_uid[1]);
                        $final_bal=$current_balance->balance - $amt_uid[0];
                       $recordss =array(
                           'b2b_user_id' => $amt_uid[1],
                           'admin_id' => $_SESSION['b2b_kpr_rech_admin_id'],
                           'uplevel_id' => $current_balance->uplevel_id,
                           'current_balance' =>$current_balance->balance,
        				   'amount' =>$amt_uid[0],
                           'sub_amount' =>$amt_uid[0],
                           'type' =>'Money Decline',
                           'c_status' =>'debited',
                           'rech_user' =>1,
                            'status' =>1,
                           'final_balance' =>$final_bal,
        				   'transaction_id' =>$amt_uid[2],
                           'date' => date('Y-m-d'),
                           'time' => date('h:i:s'),
        
                       );
                       $b2b_money_requests->insert_b2b_app_all_trans_hist($recordss);
             }
             elseif($_SESSION['b2b_kpr_rech_user_type']== "4" && $_SESSION['b2b_kpr_rech_full_rights'] == 1)
             {
                             
                    $b2b_money_requests->update_status('2',$_POST['decline'],date('Y-m-d'),date('h:i:s'));
                    $b2b_money_requests->update_user_balance_minus($amt_uid[0],$amt_uid[1]);
                    
                     $current_balance = $b2b_money_requests->getOneUsername($amt_uid[1]);
                        $final_bal=$current_balance->balance - $amt_uid[0];
                       $recordss =array(
                           'b2b_user_id' => $amt_uid[1],
                           'admin_id' => $_SESSION['b2b_kpr_rech_admin_id'],
                           'uplevel_id' => $current_balance->uplevel_id,
                           'current_balance' =>$current_balance->balance,
        				   'amount' =>$amt_uid[0],
                           'sub_amount' =>$amt_uid[0],
                           'type' =>'Money Decline',
                           'c_status' =>'debited',
                           'rech_user' =>1,
                            'status' =>1,
                           'final_balance' =>$final_bal,
        				   'transaction_id' =>$amt_uid[2],
                           'date' => date('Y-m-d'),
                           'time' => date('h:i:s'),
        
                       );
                       $b2b_money_requests->insert_b2b_app_all_trans_hist($recordss);
                 
             }
             else
             {
             
             
            $b2b_money_requests->update_status('2',$_POST['decline'],date('Y-m-d'),date('h:i:s'));
          
            
             $current_balance = $b2b_money_requests->getOneUsername($amt_uid[1]);
                $final_bal=$current_balance->balance - $amt_uid[0];
               $recordss =array(
                   'b2b_user_id' => $amt_uid[1],
                   'admin_id' => $_SESSION['b2b_kpr_rech_admin_id'],
                   'uplevel_id' => $current_balance->uplevel_id,
                   'current_balance' =>$current_balance->balance,
				   'amount' =>$amt_uid[0],
                   'sub_amount' =>$amt_uid[0],
                   'type' =>'Money Decline',
                   'c_status' =>'debited',
                   'rech_user' =>1,
                    'status' =>1,
                   'final_balance' =>$final_bal,
				   'transaction_id' =>$amt_uid[2],
                   'date' => date('Y-m-d'),
                   'time' => date('h:i:s'),

               );
               $b2b_money_requests->insert_b2b_app_all_trans_hist($recordss);
               
             $b2b_money_requests->update_user_balance_minus1($final_bal,$amt_uid[1]);
               
               
               // add balance to add user
               
               //$b2b_money_requests->update_user_balance($amt_uid[0],$_SESSION['b2b_kpr_rech_id']);
                         $current_balance1 = $b2b_money_requests->getOneUsername($_SESSION['b2b_kpr_rech_id']);
                         $final_bal_enduser=$current_balance1->balance + $amt_uid[0];
                         
                         $recordss_enduser =array(
                            'b2b_user_id' => $_SESSION['b2b_kpr_rech_id'],
                            'admin_id' => $_SESSION['b2b_kpr_rech_admin_id'],
                            'uplevel_id' => $_SESSION['b2b_kpr_rech_uplevel_id'],
                            'current_balance' =>$current_balance1->balance,
							'amount' =>$amt_uid[0],
                            'add_amount' =>$amt_uid[0],
                            'type' =>'Money Decline',
                            'c_status' =>'credited',
                             'rech_user' =>1,
                              'status' =>1,
                            'final_balance' =>$final_bal_enduser,
							'transaction_id' =>$amt_uid[2],
                            'date' => date('Y-m-d'),
                            'time' => date('h:i:s'),
                
                        );
                        $b2b_money_requests->insert_b2b_app_all_trans_hist($recordss_enduser);
                        $b2b_money_requests->update_user_balance1($final_bal_enduser,$_SESSION['b2b_kpr_rech_id']);
                        
             }            
        }
        else
        {
            $b2b_money_requests->update_status('2',$_POST['decline'],date('Y-m-d'),date('h:i:s'));
        }


        flash('active_deactive', 'Successfully Updated as <b>Decline</b>', 'alert alert-success');
        $master->redirect('index.php?action=respond_money_request');
    }
}

?>