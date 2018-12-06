<?php
//echo 'hfgs';
$con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
class admin {
    /*
     * getAdminUser()
     * @return type
     */

    /**
     * adminLogin()
     * @param type $username
     * @param type $password
     * @return type
     */
    public function adminLogin($username, $password) {
        $query__admin = "SELECT * FROM b2b_users WHERE (username='" . $username . "' or mob_no='".$username."') and password='" . $password . "'  and status='1'";
        $o__admin = $this->getExecute($query__admin, 'single');
        //print_r($o__admin); exit();
        if ($o__admin->id > 0) {
            $_SESSION['b2b_kpr_rech_id'] = $o__admin->id;
            $_SESSION['b2b_kpr_rech_username'] = $username;
            $_SESSION['b2b_kpr_rech_name'] = $o__admin->firstname.' '.$o__admin->lastname;
            $_SESSION['b2b_kpr_rech_password'] = $password;
            $_SESSION['b2b_kpr_rech_user_type'] = $o__admin->user_type;
            $_SESSION['b2b_kpr_rech_admin_id'] = $o__admin->admin_id;
            $_SESSION['b2b_kpr_rech_unique_id'] = $o__admin->unique_id;
            $_SESSION['b2b_kpr_rech_uplevel_id'] = $o__admin->uplevel_id;
             $_SESSION['b2b_kpr_rech_full_rights'] = $o__admin->full_rights;
             $_SESSION['b2b_kpr_rech_grp_name'] = $o__admin->group_name;
              $_SESSION['b2b_kpr_rech_balance'] = $o__admin->balance;
            return true;
        } else {
            $_SESSION['error_msg'] = "Sorry, this login is invalid.";
            return false;
        }
    }

    /**
     * adminLogout()
     */
    public function adminLogout() {
        unset($_SESSION['b2b_kpr_rech_id']);
        unset($_SESSION['b2b_kpr_rech_username']);
        unset($_SESSION['b2b_kpr_rech_password']);
        unset($_SESSION['b2b_kpr_rech_uplevel_id']);
         unset($_SESSION['b2b_kpr_rech_full_rights']);
          unset($_SESSION['b2b_kpr_rech_balance']);
        
    }

    /**
     * updateAdminProfile()
     * @param type $records
     * @param type $id_admin
     */
    public function getdatabyurl($id) {
        $ss__testimonials = "SELECT *  FROM `b2b_users` where website = '$id'";
        //echo("SELECT *  FROM `b2b_users` where website = '$id'");exit();
        return $this->getExecute($ss__testimonials,'single');;
    }
    public function getcouponuserdetail($id) {
        $ss__testimonials = "SELECT *  FROM `orders` where rech_unique_id='$id'";
        //echo("SELECT *  FROM `orders` where rech_unique_id='$id'");exit();
        return $this->execute($ss__testimonials);
    }

    /**
     * execute()
     * @param type $ss__query string
     */
     private function execute($ss__query) {
        $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");

        mysqli_query($con, $ss__query);
    }

    private function getExecute($ss__query, $type = 'multiple') {
         $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
        $o__data = mysqli_query($con, $ss__query);
        if ($type == 'multiple') {
            $data = array();
            while ($as__record = mysqli_fetch_assoc($o__data)) {
                $data[] = $as__record;
            }
            return $data;
        } else {
            $data = mysqli_fetch_assoc($o__data);
            return (object) $data;
        }
    }


}
//echo 'hfgs';

?>
