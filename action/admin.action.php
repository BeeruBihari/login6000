<?php
//echo '<script> alert("'. $_SESSION['admin_kpr_rech_id'].'"); </script>';
$o__admin = new admin();

/*
 * Login
 */
if (TYPE == 'login') {
  //print_r($_SERVER);
$url =  $_SERVER["HTTP_HOST"];
$uell = explode(".",$url);
$getdata = $o__admin->getdatabyurl('http://'.$uell[1].'.'.$uell[2]);
//print_r($getdata);

    $error = true;
    $error_username = $error_password = "";
    $ss__username = $ss__password = "";

    if (isset($_POST) && !empty($_POST)) {

        //print_r($_POST); exit();

        $ss__username = $_POST['admin_username'];//clearInput($_POST['admin_username']);
        $ss__password = $_POST['admin_password'];//clearInput($_POST['admin_password']);

        if (is_empty($ss__username)) {
            $error = false;
            $error_username = "Please enter username";
        }
        if (is_empty($ss__password)) {
            $error = false;
            $error_password = "Please enter password";
        }
        //echo $ss__username.'/'.$ss__password;exit;
        if ($error) {
            if ($o__admin->adminLogin($ss__username, md5($ss__password))) {
                if (isset($_POST['remember']) && !empty($_POST['remember'])) {
                    setcookie('admin_username', base64_encode($ss__username), time() + 60 * 60 * 24 * 365,"/");
                    setcookie('admin_password', base64_encode($ss__password), time() + 60 * 60 * 24 * 365,"/");
                    setcookie('admin_remember', $_POST['remember'], time() + 60 * 60 * 24 * 365,"/");
                } else {
                    setcookie('admin_username', base64_encode($ss__username), time() - 60 * 60 * 24 * 365,"/");
                    setcookie('admin_password', base64_encode($ss__password), time() - 60 * 60 * 24 * 365,"/");
                    setcookie('admin_remember', $_POST['remember'], time() - 60 * 60 * 24 * 365,"/");
                }
                flash( 'b2b_login', 'Login Successfull. Welcome to B2B Portal' ,'alert alert-success');
                //echo $_POST['redirect']; exit();
                if($_POST['redirect']=='flight'){

                    //    echo $_SERVER['HTTP_USER_AGENT']; exit();
                    $master->redirect('index.php?action=book_flight');
                }
                else{
                    $master->redirect($_SERVER['HTTP_REFERER']);
                    //$master->redirect('index.php?action=book_flight');
                }

                //$master->redirect();
            }
            else{
                flash( 'b2b_login', 'Something Missing...Check your credentials' ,'alert alert-danger');
                $master->redirect('index.php?action=login');
            }

        }
    }

}


/*
 * Function to logout from admin panel
 */
if (TYPE == 'logout') {
    $o__admin->adminLogout();
    $master->redirect();
}

?>
