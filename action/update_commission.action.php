<?php
$o__commission = new update_commission();
 $slabdata= $o__commission->getb2busermposslab_credit($_GET['uid']);
 $slabdata1= $o__commission->getb2busermposslab_debit($_GET['uid']);

if(TYPE == 'add_mpos_commission')
{
     if (isset($_POST['mpos_add_comm']))
    {
        $service_charge = $_POST['service_charge'];
     
        $flate_comm = $_POST['flate_comm'];
        date_default_timezone_set('asia/kolkata');
       


        $records= array(

            'service_charge' => $service_charge,
            'flate_commission' => $flate_comm,
            'b2b_user_id' => $_GET['uid'],
            'date' => date("Y-m-d"),
            'time' =>date("h:i:s"),
            
        );

        $mpos_user = $o__commission->getmposuser($_GET['uid']);
        if($mpos_user->b2b_user_id > 0)
        {
             $insert_mpos = $o__commission->update_b2b_mpos_commissions($records,$_GET['uid']);
        }
        else 
        {
            $insert_mpos = $o__commission->createmposcommission($records);
        }
        
    }
     if (isset($_POST['credit_submit']))
    {
        
        $card_type = 'credit';
        $card_name = $_POST['card_name'];
        $min_price_credit = $_POST['min_price_credit'];
        $max_price_credit = $_POST['max_price_credit'];
        $service_charge = $_POST['service_charge'];
        $commission_credit = $_POST['commission_credit'];
        
      
       
        $gst_credit = $_POST['gst_credit'];
        
        
        if($service_charge == '1')  //service charge  pertange
        {
             $service_charge_per_credit = $_POST['service_charge_per_credit'];
             $service_charge_flat_credit = 0;
             $service_charge_credit_status = 'percentage';
        }
        
        if($service_charge == '0')  //service charge flat
        {
             $service_charge_per_credit = 0;
             $service_charge_flat_credit = $_POST['service_charge_flat_credit'];
             $service_charge_credit_status = 'flat';
        }
        
        if($commission_credit == '1')  // commission pertange
        {
              $commission_per_credit = $_POST['commission_per_credit'];
             $commission_flat_credit = 0;
             $commission_credit_status = 'percentage';
        }
        
        if($commission_credit == '0')  // pertange flat
        {
             $commission_per_credit = 0;
             $commission_flat_credit = $_POST['commission_flat_credit'];
               $commission_credit_status = 'flat';
        }
        
        
        date_default_timezone_set('asia/kolkata');
       
        $records= array(

            'card_type' => $card_type,
            'card_name' => $card_name,
            'min_price' => $min_price_credit,
            'max_price' => $max_price_credit,
            'service_charge_per' => $service_charge_per_credit,
            'service_charge_flat' => $service_charge_flat_credit,
            'service_charge_status' => $service_charge_credit_status,
            'commission_per' => $commission_per_credit,
            'commission_flat' => $commission_flat_credit,
            'commission_status' => $commission_credit_status,
            'gst' => $gst_credit,
            'b2b_user_id' => $_GET['uid'],
            'date' => date("Y-m-d"),
            'time' =>date("h:i:s"),
            
        );
//        print_r($records);
//        exit();
        
       
        
        $mpos_user = $o__commission->getmposuser($_GET['uid']);
      
        
        if($_POST['c_id'] > 0)
        {
            $records= array(

           
            'min_price' => $min_price_credit,
            'max_price' => $max_price_credit,
            'service_charge_per' => $service_charge_per_credit,
            'service_charge_flat' => $service_charge_flat_credit,
            'service_charge_status' => $service_charge_credit_status,
            'commission_per' => $commission_per_credit,
            'commission_flat' => $commission_flat_credit,
            'commission_status' => $commission_credit_status,
            'gst' => $gst_credit,
            'b2b_user_id' => $_GET['uid'],
            'date' => date("Y-m-d"),
            'time' =>date("h:i:s"),
            
        );
             $c_id = $_POST['c_id'];
             $insert_mpos = $o__commission->update_b2b_mpos_commissions($records,$c_id);
             flash('updatecreditslab', 'Successfully Commission Slab Updated', 'alert alert-success');
                $master->redirect('index.php?action=add_mpos_commission&uid='.$_GET['uid']);
        }
        else 
        {
            $mpos_user = $o__commission->addmposcommissionslab($records);
            flash('updatecreditslab', 'Successfully Commission Slab Updated', 'alert alert-success');
                $master->redirect('index.php?action=add_mpos_commission&uid='.$_GET['uid']);
            //$insert_mpos = $o__commission->createmposcommission($records);
        }
        
    }
     if (isset($_POST['debit_submit']))
    {
        
        $card_type = 'debit';
        $card_name = $_POST['card_name_debit'];
        $min_price_credit = $_POST['min_price_debit'];
        $max_price_credit = $_POST['max_price_debit'];
        $service_charge = $_POST['service_debit'];
        $commission_credit = $_POST['commission_debit'];
        
      
       
        $gst_credit = $_POST['gst_credit'];
        
        
        if($service_charge == '1')  //service charge  pertange
        {
             $service_charge_per_credit = $_POST['service_charge_per_debit'];
             $service_charge_flat_credit = 0;
             $service_charge_credit_status = 'percentage';
        }
        
        if($service_charge == '0')  //service charge flat
        {
             $service_charge_per_credit = 0;
             $service_charge_flat_credit = $_POST['service_charge_flat_debit'];
             $service_charge_credit_status = 'flat';
        }
        
        if($commission_credit == '1')  // commission pertange
        {
              $commission_per_credit = $_POST['commission_per_debit'];
             $commission_flat_credit = 0;
             $commission_credit_status = 'percentage';
        }
        
        if($commission_credit == '0')  // pertange flat
        {
             $commission_per_credit = 0;
             $commission_flat_credit = $_POST['commission_flat_debit'];
               $commission_credit_status = 'flat';
        }
        
        
        date_default_timezone_set('asia/kolkata');
       
        $records= array(

            'card_type' => $card_type,
            'card_name' => $card_name,
            'min_price' => $min_price_credit,
            'max_price' => $max_price_credit,
            'service_charge_per' => $service_charge_per_credit,
            'service_charge_flat' => $service_charge_flat_credit,
            'service_charge_status' => $service_charge_credit_status,
            'commission_per' => $commission_per_credit,
            'commission_flat' => $commission_flat_credit,
            'commission_status' => $commission_credit_status,
            'gst' => $gst_credit,
            'b2b_user_id' => $_GET['uid'],
            'date' => date("Y-m-d"),
            'time' =>date("h:i:s"),
            
        );
            $mpos_user = $o__commission->getmposuser_debit($_GET['uid']);
      
        
        if($_POST['c_id1'] > 0)
        {
            $records= array(

           
            'min_price' => $min_price_credit,
            'max_price' => $max_price_credit,
            'service_charge_per' => $service_charge_per_credit,
            'service_charge_flat' => $service_charge_flat_credit,
            'service_charge_status' => $service_charge_credit_status,
            'commission_per' => $commission_per_credit,
            'commission_flat' => $commission_flat_credit,
            'commission_status' => $commission_credit_status,
            'gst' => $gst_credit,
            'b2b_user_id' => $_GET['uid'],
            'date' => date("Y-m-d"),
            'time' =>date("h:i:s"),
            
        );
             $c_id = $_POST['c_id1'];
             $insert_mpos = $o__commission->update_b2b_mpos_commissions($records,$c_id);
              flash('updatedebittslab', 'Successfully Commission Slab Updated', 'alert alert-success');
                $master->redirect('index.php?action=add_mpos_commission&uid='.$_GET['uid']);
        }
        else 
        {
            $mpos_user = $o__commission->addmposcommissionslab($records);
             flash('insertedebitslab', 'Successfully Commission Slab Inserted', 'alert alert-success');
                $master->redirect('index.php?action=add_mpos_commission&uid='.$_GET['uid']);
            //$insert_mpos = $o__commission->createmposcommission($records);
        }
        
    }
}
if(TYPE == 'manage_mpos_commission')
{
    
}
if(TYPE == 'add_commission_custom')
{
    $assign_apis= $o__commission->getAllApis($_GET['cid']);
    $b2b_user= $o__commission->getOneB2Buser($_GET['cid']);


    if (isset($_POST['flight_update']))
    {
        $flight_com = $_POST['flight_com'];
       // $id = $_POST['id'];
        $tbi = $_POST['tbi'];

        $update_ans = $o__commission->updateOtherCommissionbyid('b2b_user_rech_' . $b2b_user->unique_id,'flight_commission', $flight_com,$_GET['cid']);
    }
    if (isset($_POST['money_transfer_update']))
    {
        $money_transfer_com = $_POST['money_transfer_com'];
        // $id = $_POST['id'];
        $tbi = $_POST['tbi'];

        $update_ans = $o__commission->updateOtherCommissionbyid('b2b_user_rech_' . $b2b_user->unique_id,'money_commission', $money_transfer_com,$_GET['cid']);
    }
    if (isset($_POST['bus_update']))
    {
        $bus_com = $_POST['bus_com'];
        // $id = $_POST['id'];
        $tbi = $_POST['tbi'];

        $update_ans = $o__commission->updateOtherCommissionbyid('b2b_user_rech_' . $b2b_user->unique_id,'bus_commission', $bus_com,$_GET['cid']);
    }

}

?>