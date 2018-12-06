<?php

class report
{
   
    public function getapiconfiglist() 
    {
        
        if($_SESSION['b2b_kpr_rech_user_type'] == '0')
       {
           $ss__testimonials = "select * from `b2b_api_configurations` where b2b_user_id=".$_SESSION['b2b_kpr_rech_id'];
       }
       else
       {
           $ss__testimonials = "select * from `b2b_api_configurations` where  b2b_user_id=". $_SESSION['b2b_kpr_rech_admin_id']." and api_holder=".$_SESSION['b2b_kpr_rech_id'];
       }
        
         //echo $ss__testimonials;exit();
        return $this->getExecute($ss__testimonials);
    }
    
    public function getallmoneyrequest() {
       
       if($_SESSION['b2b_kpr_rech_user_type'] == '0')
       {
           $ss__testimonials = "select * from `b2b_money_requests`";
       }
       elseif($_SESSION['b2b_kpr_rech_user_type'] == '4')
       {
           $ss__testimonials = "select * from `b2b_money_requests` where admin_id=".$_SESSION['b2b_kpr_rech_id'];
       }
       else 
       {
           if($_SESSION['b2b_kpr_rech_user_type'] == '1')
           {
               $ss__testimonials = "select * from `b2b_money_requests` where uplevel_id=".$_SESSION['b2b_kpr_rech_id'];
           }
           if($_SESSION['b2b_kpr_rech_user_type'] == '2')
           {
                $ss__testimonials = "select * from `b2b_money_requests` where uplevel_id=".$_SESSION['b2b_kpr_rech_id'];
           }
            
       }
       
        
        // echo("select * from `b2b_money_requests` where admin_id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
    
    public function getalloperators($id) {
        $ss__testimonials = "select * from `api_operator` where service_id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
    public function GetAllHistorydataa() {        
        
        $ss__testimonials = "select * from `b2b_app_all_recharge_transaction_histories` where rech_user='1' order by id desc limit 150";        				        
        return $this->getExecute($ss__testimonials,'multiple');    
        
    }
        
        public function getUserbyadmin($id) {       
            $ss__testimonials = "select * from `b2b_users` where id='$id' and admin_id='".$_SESSION['b2b_kpr_rech_id']."'";        
            return $this->getExecute($ss__testimonials,'single');    
            
        }
    
  public function getOneUsername($id) {
        $ss__testimonials = "select * from `b2b_users` where id='$id'";
       // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }
    
    
    
    
    public function getmanualldata() {
        $ss__testimonials = "select * from `b2b_manual_recharges` order by id desc";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
    public function getDMThitry() {
        $ss__testimonials = "select * from `b2b_dmt_histories` where admin_id='".$_SESSION['b2b_kpr_rech_id']."' or user_id='".$_SESSION['b2b_kpr_rech_id']."'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
    public function getUserbyMob($id) {
        $ss__testimonials = "select * from `b2b_users` where mob_no='".$id."'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }
     public function getalllongcode() {
        $ss__testimonials = "select * from `b2b_sms`";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
    public function getapiresponse() {
        $ss__testimonials = "select * from `b2b_api_holders` order by id desc";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
    public function getapinamebyid($id) {
        $ss__testimonials = "select * from `b2b_api_configurations` where id='".$id."' order by id desc";
        //echo("select * from `b2b_api_configurations` where id='".$id."' order by id desc");exit();
        return $this->getExecute($ss__testimonials,'single');
    }
	public function getallDisputesbyadmin() {
        $ss__testimonials = "select * from `b2b_disputes` where admin_id='".$_SESSION['b2b_kpr_rech_id']."'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
	public function getallhistrydatabytransID($id) {
		
        $ss__testimonials = "select * from `b2b_app_all_recharge_transaction_histories` where rech_user='1' and transaction_id='".$id."'";
         //echo($ss__testimonials);exit();
        return $this->getExecute($ss__testimonials);
    }
    public function getallhistrydatabyapi($id) {
        $ss__testimonials = "select * from `b2b_app_all_recharge_transaction_histories` where rech_user='1' and apiname='".$id."'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
    public function getallhistrydata($id,$op) {
        $ss__testimonials = "select * from `b2b_app_all_recharge_transaction_histories` where rech_user='1' and b2b_user_id='".$id."' and opcode='".$op."'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
    public function getallhistrydatabydate($id,$op,$sdate,$edate) {
        $ss__testimonials = "select * from `b2b_app_all_recharge_transaction_histories` where rech_user='1' and b2b_user_id='".$id."' and opcode='".$op."' and date BETWEEN '".$sdate."' and '".$edate."'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
    public function getusebyadminid() {
        
            $ss__testimonials = "select * from `b2b_users` where admin_id='".$_SESSION['b2b_kpr_rech_id']."'";
        
        
        // echo($ss__testimonials);exit();
        return $this->getExecute($ss__testimonials);
    }
    
    public function getopdscbycode() {
        
        if($_SESSION['b2b_kpr_rech_id']=='1'){
            $ss__testimonials = "select * from `api_operator` order by OperatorDescritpion";
        }
        else{
            $ss__testimonials = "select * from `api_operator` order by OperatorDescritpion";
        }
        
         //echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
    
    
    
    
    public function getallorders() {
        $ss__testimonials = "select * from `b2b_orders`";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
    public function getallusers() {
        $ss__testimonials = "select * from `b2b_users`";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }
    public function getb2busersbyid($id) {
        $ss__testimonials = "select * from `b2b_users` where id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }
    public function getdatabyoid($id) {     
        $ss__testimonials = "select * from `b2b_user_commissions` where oid='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }
    public function getdatabyrefno($id) {
        $ss__testimonials = "select * from `b2b_orders` where refno='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }

    public function getcommisionbyid($tbnm,$id) {
        $ss__testimonials = "select * from `$tbnm` where opcode='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }

    public function update_unique_id($uid,$id) {
        $ss__testimonials = "update `b2b_users` set unique_id='$uid' where id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }

    public function update_commission($uid,$id) {
        $ss__testimonials = "update `b2b_users` set commission=(commission + $uid) where id='$id'";
       // echo($ss__testimonials); //exit();
        return $this->execute($ss__testimonials);
    }

    public function update_wallet_amt($uid,$id) {
        $ss__testimonials = "update `b2b_users` set balance='$uid' where id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }

    public function update_bal_commission($uid,$id) {
        $ss__testimonials = "update `b2b_users` set bal='$uid' where id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials);
    }

    public function getwalletamt($id) {
        $ss__testimonials = "select * from `b2b_users` where id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }
    public function getuserbyid($id) {
        $ss__testimonials = "select * from `b2b_users` where id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }
    public function update_b2b_orders($records, $id_admin) {
        foreach ($records as $key => $value) {
            $data[] = $key . "='" . $value . "'";
        }
        $data = implode(',', $data);
        $ss__update_admin = "UPDATE b2b_orders SET $data WHERE rech_unique_id='" . $id_admin . "'";
        $this->execute($ss__update_admin);
    }
    
     public function update_b2b_response_orders($records, $id_admin) {
        foreach ($records as $key => $value) {
            $data[] = $key . "='" . $value . "'";
        }
        $data = implode(',', $data);
        $ss__update_admin = "UPDATE b2b_orders SET $data WHERE refno='" . $id_admin . "'";
        $this->execute($ss__update_admin);
    }
    
    public function update_b2b_response_comm($records, $id_admin) {
        foreach ($records as $key => $value) {
            $data[] = $key . "='" . $value . "'";
        }
        $data = implode(',', $data);
        $ss__update_admin = "UPDATE  b2b_user_commissions SET $data WHERE oid='" . $id_admin . "'";
        $this->execute($ss__update_admin);
    }
    
    
       public function updateOrders($records, $id_admin) {
        foreach ($records as $key => $value) {
            $data[] = $key . "='" . $value . "'";
        }
        $data = implode(',', $data);
        $ss__update_admin = "UPDATE b2b_orders SET $data WHERE rech_unique_id='" . $id_admin . "'";
       // echo $ss__update_admin;        
        $this->execute($ss__update_admin);
    }
      public function uppdateOrders($records, $id_admin) {
        foreach ($records as $key => $value) {
            $data[] = $key . "='" . $value . "'";
        }
        $data = implode(',', $data);
        $ss__update_admin = "UPDATE b2b_orders SET $data WHERE rech_unique_id='" . $id_admin . "'";
        //echo $ss__update_admin;         exit();
        $this->execute($ss__update_admin);
    }
    public function create_order($records = '') {
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
        $this->execute("INSERT INTO `b2b_orders` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }

        public function getAll_recharge_reports($from,$to) {
        $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
        global $prs_paging;
        $prs_paging = new get_paging();
        $parpage = (is_numeric(global_page_admin)) ? global_page_admin : '20';
        $this->extrapara = "index.php?action=" . $_GET['action'];
        if($_SESSION['b2b_kpr_rech_id']=='1'){
        $ss__user = "SELECT * FROM `b2b_orders` where date between '$from' and '$to' and (userid=1 or admin_id=1) and mobile <> '' ORDER BY id DESC";
        }else{
        $ss__user = "SELECT * FROM `b2b_orders` where date between '$from' and '$to' and (userid=".$_SESSION['b2b_kpr_rech_id']." or admin_id=".$_SESSION['b2b_kpr_rech_id'].") and mobile <> '' ORDER BY id DESC";
        }
        //echo $ss__user;        exit();
        $query = mysqli_query($con, $ss__user);
        $this->total_record = mysqli_num_rows($query); //Store Total Row of pages in  Variable $total_record
        $result = $prs_paging->number_paging($ss__user, $parpage, 5, 'N', 'Y', "", $this->extrapara);
        return $result;
    }
      public function gettotalcount($from,$to) {
        if($_SESSION['b2b_kpr_rech_id']=='1'):
        $ss__testimonials = "select sum(amount) as ok_st from `b2b_orders` where date between '$from' and '$to' and mobile <> '' and status=1 ORDER BY id DESC";
        $ss__testimonialss = "select sum(amount) as notok from `b2b_orders` where date between '$from' and '$to' and mobile <> '' and (status=0 or status=2) ORDER BY id DESC";
        else:
        $ss__testimonials = "select sum(amount) as ok_st from `b2b_orders` where date between '$from' and '$to' and userid=".$_SESSION['b2b_kpr_rech_id']." and mobile <> '' and status=1 ORDER BY id DESC";
        $ss__testimonialss = "select sum(amount) as notok from `b2b_orders` where date between '$from' and '$to' and (userid=".$_SESSION['b2b_kpr_rech_id']." or admin_id=".$_SESSION['b2b_kpr_rech_id'].") and mobile <> '' and (status=0 or status=2) ORDER BY id DESC";
        endif;
        $success=$this->getExecute($ss__testimonials,'single');
        $fail=$this->getExecute($ss__testimonialss,'single');
        $final_total=$success->ok_st - $fail->notok;
        $return_data= array($success->ok_st,$fail->notok,$final_total);
        
        // echo("select * from b2b_users where id='$id'");exit();
        return $return_data;
    }

    
    public function create_b2b_user_commissions($records = '') {
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
        $this->execute("INSERT INTO `b2b_user_commissions` ($field) VALUES ($data)");
        return mysqli_insert_id();
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