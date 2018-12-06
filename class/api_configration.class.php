<?php

class api_configration {

    
    public function updatesmsapi($records, $id_admin) {
        foreach ($records as $key => $value) {
            $data[] = $key . "='" . $value . "'";
        }
        $data = implode(',', $data);
        $ss__update_admin = "UPDATE b2b_sms_apis SET $data WHERE id='" . $id_admin . "'";
       // echo $ss__update_admin;        
        $this->execute($ss__update_admin);
    }
    public function getb2buser_list() {
        
        
         if($_SESSION['b2b_kpr_rech_user_type'] == '0')
       {
           $ss__testimonials = "select * from `b2b_users` where admin_id=". $_SESSION['b2b_kpr_rech_id']. " and user_type=4 ";
       }
//        if($_SESSION['b2b_kpr_rech_user_type'] == '4')
//       {
//           $ss__testimonials = "select * from `b2b_users` where admin_id=". $_SESSION['b2b_kpr_rech_id']. " and user_type=4 ";
//       }
        
         //echo $ss__testimonials;exit();
        return $this->getExecute($ss__testimonials);
    }
    public function editsmsapi($id) {
        $ss__testimonials = "select * from `b2b_sms_apis` where id='$id'";
       // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }
    public function create_b2b_sms_apis($records = '') {
        foreach ($records as $key => $value) {
            $field[] = $key;
            if ($value == "NOW()")
                $data[] = "$value";
            else
                $data[] = "'$value'";
        }
        $field = implode(',', $field);
        $data = implode(',', $data);
        //echo ("INSERT INTO `users` ($field) VALUES ($data)"); exit ;
        $this->execute("INSERT INTO `b2b_sms_apis` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }
    
    public function getb2buser($id) {
        $ss__testimonials = "select * from `b2b_users` where id='$id'";
       // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }
    
    public function getsmsapiuser($id) {
        $ss__testimonials = "select * from `b2b_sms_apis` where user_id='$id'";
       // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }
    

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

?>
