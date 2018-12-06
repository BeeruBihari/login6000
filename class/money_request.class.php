<?php

class money_request {

    public function insert_b2b_app_all_trans_hist($records = '') {
        foreach ($records as $key => $value) {
            $field[] = $key;
            if ($value == "NOW()")
                $data[] = "$value";
            else
                $data[] = "'$value'";
        } $field = implode(',', $field);
        $data = implode(',', $data);
//exit ("INSERT INTO `users` ($field) VALUES ($data)"); 
        $this->execute("INSERT INTO `b2b_app_all_recharge_transaction_histories` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }

    public function create_b2b_money_requests($records = '') {
        foreach ($records as $key => $value) {
            $field[] = $key;
            if ($value == "NOW()")
                $data[] = "$value";
            else
                $data[] = "'$value'";
        } $field = implode(',', $field);
        $data = implode(',', $data);
//exit ("INSERT INTO `users` ($field) VALUES ($data)"); 
        $this->execute("INSERT INTO `b2b_money_requests` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }

    public function getOneUsername($id) {
        $ss__testimonials = "select * from `b2b_users` where id='$id'";
//echo("select * from b2b_users where id='$id'");exit();  
        return $this->getExecute($ss__testimonials, 'single');
    }

    public function create_b2b_add_money($records = '') {
        foreach ($records as $key => $value) {
            $field[] = $key;
            if ($value == "NOW()")
                $data[] = "$value";
            else
                $data[] = "'$value'";
        } $field = implode(',', $field);
        $data = implode(',', $data);
//exit ("INSERT INTO `users` ($field) VALUES ($data)");    
        $this->execute("INSERT INTO `b2b_add_moneys` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }

    public function update_status($st, $id, $apd, $apt) {
        $ss__testimonials = "update `b2b_money_requests` set status='$st',approve_date='$apd',approve_time='$apt' where id='$id'";
//echo("SELECT *  FROM `orders` where rech_unique_id='$id'");exit();      
        return $this->execute($ss__testimonials);
    }

    public function update_user_balance($st, $id) {
        $ss__testimonials = "update `b2b_users` set balance = balance + '$st' where id='$id'";
        return $this->execute($ss__testimonials);
    }

     public function update_user_balance1($st, $id) {
        $ss__testimonials = "update `b2b_users` set balance = '$st' where id='$id'";
        return $this->execute($ss__testimonials);
    }
    public function update_user_balance_minus($st, $id) {
        $ss__testimonials = "update `b2b_users` set balance= balance - '$st' where id='$id'";
        return $this->execute($ss__testimonials);
    }
 public function update_user_balance_minus1($st, $id) {
        $ss__testimonials = "update `b2b_users` set balance='$st' where id='$id'";
        return $this->execute($ss__testimonials);
    }

    public function getOneuser($id) {
        $ss__testimonials = "select * from `b2b_users` where id='$id'";
// echo("select * from b2b_users where id='$id'");exit();      
        return $this->getExecute($ss__testimonials, 'single');
    }

    public function getonerequest($id) {
        $ss__testimonials = "select * from `b2b_money_requests` where id='$id'";
 //echo( "select * from `b2b_money_requests` where id='$id'");exit();      
        return $this->getExecute($ss__testimonials, 'single');
    }

    public function getAll_b2b_money_requests() {
        $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
        global $prs_paging;
        $prs_paging = new get_paging();
        $parpage = (is_numeric(global_page_admin)) ? global_page_admin : '20';
        $this->extrapara = "index.php?action=" . $_GET['action'];
        $ss__user = "SELECT * FROM `b2b_money_requests` where user_id='" . $_SESSION['b2b_kpr_rech_id'] . "' ORDER BY id DESC";
        $query = mysqli_query($con, $ss__user);
        $this->total_record = mysqli_num_rows($query);
//Store Total Row of pages in  Variable $total_record     
        $result = $prs_paging->number_paging($ss__user, $parpage, 5, 'N', 'Y', "", $this->extrapara);
        return $result;
    }

    public function getAll_b2b_requests_filter($dfrm, $dtm) {
        $con =mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
        global $prs_paging;
        $prs_paging = new get_paging();
        $parpage = (is_numeric(global_page_admin)) ? global_page_admin : '20';
        $this->extrapara = "index.php?action=" . $_GET['action'];
        $ss__user = "SELECT * FROM `b2b_money_requests` where date between '$dfrm' and '$dtm' and user_id='" . $_SESSION['b2b_kpr_rech_id'] . "' ORDER BY id DESC";
// echo $ss__user; exit();     
        $query = mysqli_query($con, $ss__user);
        $this->total_record = mysqli_num_rows($query);
//Store Total Row of pages in  Variable $total_record    
        $result = $prs_paging->number_paging($ss__user, $parpage, 5, 'N', 'Y', "", $this->extrapara);
        return $result;
    }

    public function getAll_b2b_users_admin() {
        $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
        global $prs_paging;
        $prs_paging = new get_paging();
        $parpage = (is_numeric(global_page_admin)) ? global_page_admin : '20';
        $this->extrapara = "index.php?action=" . $_GET['action'];
        $ss__user = "SELECT * FROM `b2b_users` where user_type <> 0  ORDER BY id DESC";
        $query = mysqli_query($con, $ss__user);
        $this->total_record = mysqli_num_rows($query);
//Store Total Row of pages in  Variable $total_record   
        $result = $prs_paging->number_paging($ss__user, $parpage, 5, 'N', 'Y', "", $this->extrapara);
        return $result;
    }

    public function getAll_b2b_requests($id) {
        $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
        global $prs_paging;
        $prs_paging = new get_paging();
        $parpage = (is_numeric(global_page_admin)) ? global_page_admin : '20';
        $this->extrapara = "index.php?action=" . $_GET['action'];
        if ($_SESSION['b2b_kpr_rech_id'] == '1') {
            $ss__user = "SELECT * FROM `b2b_money_requests` where admin_id='1' ORDER BY id DESC";
        } else {
            $ss__user = "SELECT * FROM `b2b_money_requests` where uplevel_id='$id' ORDER BY id DESC";
        } $query = mysqli_query($con, $ss__user);
        $this->total_record = mysqli_num_rows($query);
//Store Total Row of pages in  Variable $total_record       
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
        $this->execute($ss__update_admin);
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