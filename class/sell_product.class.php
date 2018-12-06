<?php

class sell_product {

    
    
     public function getproduct_upd($id) {
        $ss__testimonials = "select * from `b2b_products` where id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }
    
    public function delete_product($id) {
        $ss__testimonials = "delete from `b2b_products` where id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        $this->execute($ss__testimonials);
    }
    
    public function update_b2b_product($records, $id_admin) {
        foreach ($records as $key => $value) {
            $data[] = $key . "='" . $value . "'";
        }
        $data = implode(',', $data);
        $ss__update_admin = "UPDATE b2b_products SET $data WHERE id='" . $id_admin . "'";
        // echo $ss__update_admin;            exit();
        $this->execute($ss__update_admin);
    }
    public function update_b2b_product_order($records, $id_admin) {
        foreach ($records as $key => $value) {
            $data[] = $key . "='" . $value . "'";
        }
        $data = implode(',', $data);
        $ss__update_admin = "UPDATE b2b_product_orders SET $data WHERE id='" . $id_admin . "'";
        // echo $ss__update_admin;            exit();
        $this->execute($ss__update_admin);
    }
    
    public function getgroup($id) {
        $ss__testimonials = "select * from `api_operator_groups` where user_id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }

    public function create_b2b_product($records = '') {
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
        $this->execute("INSERT INTO `b2b_products` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }
    public function Getorder() {
        $ss__testimonials = "select * from `b2b_product_orders` where admin_id='".$_SESSION['b2b_kpr_rech_id']."' order by id desc";
        //echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
    public function GetallProduct() {
        if($_SESSION['b2b_kpr_rech_user_type'] == 4 || $_SESSION['b2b_kpr_rech_user_type'] == 0){
            $ss__testimonials = "select * from `b2b_products` where admin_id='".$_SESSION['b2b_kpr_rech_id']."' order by id desc";
        }
        else{
            $ss__testimonials = "select * from `b2b_products` where user_id='".$_SESSION['b2b_kpr_rech_id']."' order by id desc";
        }

        //echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
    public function GetallProductbyid() {
        if($_SESSION['b2b_kpr_rech_user_type'] == 4 || $_SESSION['b2b_kpr_rech_user_type'] == 0){
            $ss__testimonials = "select * from `b2b_product_orders` where admin_id='".$_SESSION['b2b_kpr_rech_id']."' order by id desc";
        }
        else{
            $ss__testimonials = "select * from `b2b_product_orders` where user_id='".$_SESSION['b2b_kpr_rech_id']."' order by id desc";
        }

        //echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
     public function GetProductbyid($id) {
         $ss__testimonials = "select * from `b2b_products` where id='".$id."' order by id desc";
         return $this->getExecute($ss__testimonials,'single');
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
    public function getOnesmsapi($id) {
        $ss__testimonials = "select * from `b2b_sms_apis` where admin_id='$id' and status='1'";
        //echo($ss__testimonials);exit();
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
        $con =mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
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
        $con =mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
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
    public function update_b2b_users($records, $id_admin) {
        foreach ($records as $key => $value) {
            $data[] = $key . "='" . $value . "'";
        }
        $data = implode(',', $data);
        $ss__update_admin = "UPDATE b2b_users SET $data WHERE id='" . $id_admin . "'";
        // echo $ss__update_admin;            exit();
        $this->execute($ss__update_admin);
    }
    private function execute($ss__query) {
        $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");

        mysqli_query($con, $ss__query);
    }

    private function getExecute($ss__query, $type = 'multiple') {
        $con =mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
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
