<?php
$o__mpos = new mpos();
if(TYPE == 'm_add_device')
{
    if(isset($_POST['addmpos']))
    {
    $sr = $_POST['serial_no'];
    $rent = $_POST['rent'];
    $remark = $_POST['remark'];
        $records= array(

            'sr_no' => $sr,
            'rent' => $rent,
            'remark'=>$remark,
            'status'=>0,
            );
            
             $records['date'] = date('Y-m-d');
            $records['time'] = date('h:i:s');
            $add_mpos=$o__mpos->create_b2b_mpos($records);
            flash('add_mpos', 'Successfully mPOS Added', 'alert alert-success');
                $master->redirect('index.php?action=m_add_device');
    }
    
}
if(TYPE == 'm_manage_device')
{
    if($_SESSION['b2b_kpr_rech_user_type']=="0"){
    $data = $o__mpos->getmpos();
    $userdata = $o__mpos->getadminuser();
    }else{
        $data = $o__mpos->getassignmpos();
        $userdata = $o__mpos->getDownuser();
    }
    if(isset($_POST['mpos_assign']))
    {
        $id = $_POST['dataid'];
        $rent = $_POST['rent'];
        $user_id = $_POST['user_id'];
        $assign_date = $_POST['assign_date'];
        $day = $_POST['day'];
        $sts = $_POST['sts'];
        $records= array(
            'rent' => $rent,
            'assign_date'=>$assign_date,
            'status'=>$sts,
            'assign_user'=>$user_id,
            'rent_day'=>$day,
            );
        $update = $o__mpos->update_b2b_mpos($records,$id);
         flash('update_mpos', 'Successfully mPOS Update', 'alert alert-success');
                $master->redirect('index.php?action=m_manage_device');
    }
}
if(TYPE == 'm_manage_device_user'){
    $data = $o__mpos->getassignmpos();
    $userdata = $o__mpos->getDownuser();
    if(isset($_POST['mpos_assign']))
    {
        $id = $_POST['dataid'];
        $rent = $_POST['rent'];
        $user_id = $_POST['user_id'];
        $assign_date = $_POST['assign_date'];
        $day = $_POST['day'];
        $sts = $_POST['sts'];
        $records= array(
            'rent' => $rent,
            'assign_date'=>$assign_date,
            'mpos_id'=>$id,
            'status'=>$sts,
            'assign_user'=>$user_id,
            'rent_day'=>$day,
            );
        $update = $o__mpos->create_b2b_mpos_user($records);
         flash('update_mpos', 'Successfully mPOS Update', 'alert alert-success');
                $master->redirect('index.php?action=m_manage_device');
    }
}

?>