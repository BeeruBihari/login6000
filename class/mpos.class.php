<?php

class mpos {

    public function getgroup($id) {
        $ss__testimonials = "select * from `api_operator_groups` where user_id='$id'";
       // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }
    
    public function create_b2b_mpos($records = '') {
        foreach ($records as $key => $value) {
            $field[] = $key;
            if ($value == "NOW()")
                $data[] = "$value";
            else
                $data[] = "'$value'";
        }
        $field = implode(',', $field);
        $data = implode(',', $data);
      //  echo "INSERT INTO `b2b_users` ($field) VALUES ($data)"; exit();
        $this->execute("INSERT INTO `b2b_mpos` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }
    public function create_b2b_mpos_user($records = '') {
        foreach ($records as $key => $value) {
            $field[] = $key;
            if ($value == "NOW()")
                $data[] = "$value";
            else
                $data[] = "'$value'";
        }
        $field = implode(',', $field);
        $data = implode(',', $data);
      //  echo "INSERT INTO `b2b_users` ($field) VALUES ($data)"; exit();
        $this->execute("INSERT INTO `b2b_mpos_users` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }
    public function getmpos() {
        $ss__testimonials = "select * from `b2b_mpos` order by id desc";
       // echo($ss__testimonials);exit();
        return $this->getExecute($ss__testimonials);
    }
    public function getadminuser() {
        $ss__testimonials = "select * from `b2b_users` where user_type='4' order by firstname desc";
       // echo($ss__testimonials);exit();
        return $this->getExecute($ss__testimonials);
    }
    public function getassignmpos() {
        $ss__testimonials = "select * from `b2b_mpos` where assign_user='".$_SESSION['b2b_kpr_rech_id']."' order by id desc";
       // echo($ss__testimonials);exit();
        return $this->getExecute($ss__testimonials);
    }
    public function getassignmposusers($id) {
        $ss__testimonials = "select * from `b2b_mpos_users` where mpos_id='".$id."' order by id desc";
       // echo($ss__testimonials);exit();
        return $this->getExecute($ss__testimonials,'single');
    }
    public function getDownuser() {
        $ss__testimonials = "select * from `b2b_users` where uplevel_id='".$_SESSION['b2b_kpr_rech_id']."' order by firstname desc";
       // echo($ss__testimonials);exit();
        return $this->getExecute($ss__testimonials);
    }
    public function update_b2b_mpos($records, $id_admin) {
            foreach ($records as $key => $value) {
                $data[] = $key . "='" . $value . "'";
            }
            $data = implode(',', $data);
            $ss__update_admin = "UPDATE b2b_mpos SET $data WHERE id='" . $id_admin . "'";
           // echo $ss__update_admin;            exit();
            $this->execute($ss__update_admin);
        }
    
    

  
    public function create_b2b_add_money($records = '') {
        foreach ($records as $key => $value) {
            $field[] = $key;
            if ($value == "NOW()")
                $data[] = "$value";
            else
                $data[] = "'$value'";
        }
        $field = implode(',', $field);
        $data = implode(',', $data);
        //exit ("INSERT INTO `users` ($field) VALUES ($data)");
        $this->execute("INSERT INTO `b2b_add_moneys` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }

    public function update_status($st,$id) {
        $ss__testimonials = "update `b2b_users` set status='$st' where id='$id'";
        //echo("SELECT *  FROM `orders` where rech_unique_id='$id'");exit();
        return $this->execute($ss__testimonials);
    }
    public function getOneuser($id) {
        $ss__testimonials = "select * from `b2b_users` where id='$id'";
        //echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }
	
	public function Send_sms_insert($records = '') {
        foreach ($records as $key => $value) {
            $field[] = $key;
            if ($value == "NOW()")
                $data[] = "$value";
            else
                $data[] = "'$value'";
        }
        $field = implode(',', $field);
        $data = implode(',', $data);
        //echo "INSERT INTO `b2b_send_sms_histories` ($field) VALUES ($data)"; exit();
        $this->execute("INSERT INTO `b2b_send_sms_histories` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }
    public function getassignapi($id) {
        $ss__testimonials = "select api_id from `b2b_assign_apis` where user_id='$id' and status='1'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
    public function getallorders($id) {
        $ss__testimonials = "select * from `b2b_users`";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
	public function getdownlineuser($id) {
        $ss__testimonials = "select * from `b2b_users` where uplevel_id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
public function b2buplevel($id) {
        $ss__testimonials = "select * from `b2b_users` where id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }

    public function getAll_b2b_users() {
        $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
        global $prs_paging;
        $prs_paging = new get_paging();
        $parpage = (is_numeric(global_page_admin)) ? global_page_admin : '20';
        $this->extrapara = "index.php?action=" . $_GET['action'];
        $ss__user = "SELECT * FROM `b2b_users` where user_type <> 0 and uplevel_id='".$_SESSION['b2b_kpr_rech_id']."' ORDER BY id DESC";
        $query = mysqli_query($con, $ss__user);
        $this->total_record = mysqli_num_rows($query); //Store Total Row of pages in  Variable $total_record
        $result = $prs_paging->number_paging($ss__user, $parpage, 5, 'N', 'Y', "", $this->extrapara);
        return $result;
    }
    public function getAll_b2b_users_admin() {
        $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
        global $prs_paging;
        $prs_paging = new get_paging();
        $parpage = (is_numeric(global_page_admin)) ? global_page_admin : '20';
        $this->extrapara = "index.php?action=" . $_GET['action'];
        $ss__user = "SELECT * FROM `b2b_users` where (user_type=1  or user_type=4) and admin_id=1  ORDER BY id DESC";
        $query = mysqli_query($con, $ss__user);
        $this->total_record = mysqli_num_rows($query); //Store Total Row of pages in  Variable $total_record
        $result = $prs_paging->number_paging($ss__user, $parpage, 5, 'N', 'Y', "", $this->extrapara);
        return $result;
    }
    public function getapisbyuser($id) {
        $ss__testimonials = "select api_id from `b2b_assign_apis` where user_id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
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
