<?php
$o__add_api_user =new add_api_user();

if(TYPE == 'add_api_user')
{
    if(isset($_POST['useradd']))
    {
        //print_r($_FILES);

        $records= array(

            'firstname' => $_POST['firstname'],
            'status' => '1',
            'date' => date('Y-m-d'),
            'time' => date('h:i:s'),

        );
        //print_r($records); exit();
        if(empty($_GET['auid']))
        {
            $add_user=$o__user->create_b2b_users($records);
            if($add_user > 0)
            {
                flash('add_user', 'Successfully User Added', 'alert alert-success');
                $master->redirect('index.php?action=view_user');
            }
        }
        else{
            $add_user=$o__user->update_b2b_users($records,$_GET['id']);
            flash('add_user', 'Successfully Updated User Data', 'alert alert-success');
            $master->redirect('index.php?action=view_user');
        }

    }
}
if(TYPE == 'view_api_user')
{
    
}

?>