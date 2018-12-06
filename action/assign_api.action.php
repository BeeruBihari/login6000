<?php
$o__assign_api= new assign_api();
$ede="";

//print_r($apis); exit();
if(TYPE == 'add_api')
{
    if(isset($_POST['assign']))
    {
        if(!empty($_POST['status'])){ $status=$_POST['status']; }else{ $status='1'; }
        $assign_api=$_POST['assign_api'];

        foreach($assign_api as $api):
            $api_us=$o__assign_api->getOneuser($_GET['aid'],$api);
            $records= array(

            'api_id' => $api,
            'user_id' => $_POST['aid'],
            'status' => '1',
            'status' => $status,
            'date' => date('Y-m-d'),
            'time' => date('h:i:s'),
         );
        //print_r($records); exit();
        if(!empty($api_us->id)) {
            $add_user = $o__assign_api->update_b2b_assign_apis($records,$_POST['aid'],$api);
        }
        else{
            $add_user = $o__assign_api->create_b2b_assign_apis($records);
        }
        endforeach;

        flash('add_api', 'Successfully API Updated', 'alert alert-success');
        $master->redirect('index.php?action=view_user');

    }
}


?>