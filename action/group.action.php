<?php 
$o__group = new group();
$operator = $o__group->getalloperator();
$getgroup = $o__group->getallgroup($_SESSION['b2b_kpr_rech_id']);
$getgroup_record = $o__group->getindop($_GET['grp']);
$get_mpos_slab = $o__group->getallmpos_slab($_GET['grp']);
$get_dmt_slab = $o__group->getalldmt_slab($_GET['grp']);
$get_dmt_slab_up = $o__group->getalldmt_slab($_SESSION['b2b_kpr_rech_grp_name']);
$getapiname = $o__group->getapiname($_SESSION['b2b_kpr_rech_id']);
if(TYPE == 'add_group')
{
   // print_r($operator);
    if(isset($_POST['submit_grp']))
    {
        
        
        date_default_timezone_set('asia/kolkata');

        $records= array(

            'user_id' => $_SESSION['b2b_kpr_rech_id'],
            'group_name' => $_POST['group_name'],
            'status' => '1',
            'date' => date("Y-m-d"),
            'time' => date("h:i:s")
        );
     
     $group_id = $o__group->create_group($records);
     
    // print_r($group_id);
//     exit();
     
     flash('add_group', 'Successfully Created New Group', 'alert alert-success');
     
     if($group_id)
     {
		
         date_default_timezone_set('asia/kolkata');
            foreach ($operator as $op):
                $records1= array(

                   'opid' => $op['opid'],
                   'group_id' => $group_id,
                   'sale_commission' => 0,//$op['sale_commission'],
                   'service_charge' => $op['service_charge'],
                   'sale_commission_type' => $op['sale_com_status'],
                   'service_charge_type' => $op['service_charge_status'],
                   'OperatorDescritpion' => $op['OperatorDescritpion'],
                   'buy_commission' => $op['buy_commission'],
                   'date' => date("Y-m-d"),
                   'time' => date("h:i:s")
               );
                 $group_record = $o__group->create_group_table_record($records1);
            endforeach;
     }

     
     
      
    }
    
    if(isset($_POST['submit_apigrp']))
    {
        
        
        date_default_timezone_set('asia/kolkata');

        $records= array(

            'user_id' => $_SESSION['b2b_kpr_rech_id'],
            'group_name' => $_POST['group_name'],
            'status' => '1',
            'api_group' => '1',
            'date' => date("Y-m-d"),
            'time' => date("h:i:s")
        );
     
     $group_id = $o__group->create_group($records);
     
    // print_r($group_id);
//     exit();
     
     flash('add_group', 'Successfully Created New Group', 'alert alert-success');
     
     if($group_id)
     {
         date_default_timezone_set('asia/kolkata');
            foreach ($operator as $op):
                $records1= array(

                   'opid' => $op['opid'],
                   'group_id' => $group_id,
                   'sale_commission' => 0,
                   'service_charge' => 0,
                   'OperatorDescritpion' => $op['OperatorDescritpion'],
                   'buy_commission' => 0,
                   'date' => date("Y-m-d"),
                   'time' => date("h:i:s")
               );
                 $group_record = $o__group->create_group_table_record($records1);
            endforeach;
     }

     
     
      
    }
     
}
if(TYPE == 'view_group')
{
    
}
if(TYPE == 'view_group_coms')
{
    
}
if(TYPE == 'mpos_slab_group')
{
  
    if(isset($_POST['add_mpos_slab']))
    {
        if($_POST['to_amount'] < $_POST['from_amount']){
   
         $records= array(

                    //'user_id' => $_SESSION['b2b_kpr_rech_id'],
                    'group_id' => $_POST['group_id'],
                    'slab_name' => $_POST['slab_name'],
                    'to_amount' => $_POST['to_amount'],
                    'from_amount' => $_POST['from_amount'],
                    'rtype' => $_POST['rtype'],
                    'card_type' => $_POST['card_type'],
                    'commission' => $_POST['coms'],
                    'commission_type' => $_POST['coms_type'],
                    'status' => '1',
                    'date' => date("Y-m-d"),
                    'time' => date("h:i:s")
               );
               
                 $group_record = $o__group->add_mpos_slab($records);
                 
                flash('add_slab', 'Successfully Created New MPOS Slab', 'alert alert-success');
                $master->redirect('index.php?action=mpos_slab_group&grp='.$_POST['group_id'].'');
    }
    else{
        flash('add_slab', 'Something Wrong !!!', 'alert alert-danger');
         $master->redirect('index.php?action=mpos_slab_group&grp='.$_POST['group_id'].'');
    }
    }
}

if(TYPE == 'dmt_slab_group')
{
  
    if(isset($_POST['add_dmt_slab']))
    {
        if($_POST['rtype'] == 'Validation'){
            $get_dmt_slab = $o__group->getalldmt_slab_validate($_GET['grp'],$_POST['dmt_type']);
        }
        else{
            $get_dmt_slab = array();;
        }
        
        //print_r($get_dmt_slab);exit;
        if($_POST['to_amount'] <= $_POST['from_amount'] && sizeof($get_dmt_slab) == 0){
   
         $records= array(

                    //'user_id' => $_SESSION['b2b_kpr_rech_id'],
                    'group_id' => $_POST['group_id'],
                    'slab_name' => $_POST['slab_name'],
                    'to_amount' => $_POST['to_amount'],
                    'from_amount' => $_POST['from_amount'],
                    'rtype' => $_POST['rtype'],
                    'dmt_type' => $_POST['dmt_type'],
                    'commission' => $_POST['coms'],
                    'commission_type' => $_POST['coms_type'],
                    
                    'date' => date("Y-m-d"),
                    'time' => date("h:i:s")
               );
              // print_r($records);exit;
                 $group_record = $o__group->add_dmt_slab($records);
                 
                flash('add_slab_dmt', 'Successfully Created New DMT Slab', 'alert alert-success');
                $master->redirect('index.php?action=dmt_slab_group&grp='.$_POST['group_id'].'');
    }
    else{
        flash('add_slab_dmt', 'Something Wrong !!!', 'alert alert-danger');
         $master->redirect('index.php?action=dmt_slab_group&grp='.$_POST['group_id'].'');
    }
    }
}



?>