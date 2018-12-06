<?php
  $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
class index {

    var $total_record;
    var $total_new_user_record;


 public function getoperatorformobileprepaid() {
        $ss__testimonials = "SELECT *  FROM `api_operator` where RechargeType='TopUP' and service_id='1' ";
        return $this->getExecute($ss__testimonials);
    }
    public function getoperatorformobilepostpaid() {
        $ss__testimonials = "SELECT *  FROM `api_operator` where RechargeType='TopUP' and service_id='4' ";
        return $this->getExecute($ss__testimonials);
    }

    public function getoperatorfordatacard() {
        $ss__testimonials = "SELECT *  FROM `api_operator` where RechargeType='DataCard' ";
        return $this->getExecute($ss__testimonials);
    }
    
    public function getoperatorfordth() {
        $ss__testimonials = "SELECT *  FROM `api_operator` where RechargeType='DTH' ";
        return $this->getExecute($ss__testimonials);
    }
     
    public function getoperatorforelectricity() {
        $ss__testimonials = "SELECT *  FROM `api_operator` where RechargeType='Electricity' ";
        return $this->getExecute($ss__testimonials);
    }
    
     public function getuniqueid() {
        $ss__testimonials = "SELECT rech_unique_id  FROM `orders`";
        return $this->getExecute($ss__testimonials);
    }
    
     public function getuserbyid($id) {
        $ss__testimonials = "SELECT *  FROM `users` where id='$id'";
        return $this->getExecute($ss__testimonials,'single');
    }
    
     public function updateuserotp($id,$id2) {
        $ss__testimonials = "update users set verify_otp='$id' where mobile='$id2'";
       // echo $ss__testimonials; exit();
      if($this->execute($ss__testimonials))
      {
          $r=1;
      }else
      { 
          $r=0;
      }
      
      return $r;
    }
    
      public function updateuserotpverify($id,$id2) {
        $ss__testimonials = "update users set otp='$id' where mobile='$id2'";
       // echo $ss__testimonials; exit();
      if($this->execute($ss__testimonials))
      {
          $r=1;
      }else
      { 
          $r=0;
      }
      
      return $r;
    }
    
    
    public function createotpgenerate($records = '') {
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
        $this->execute("INSERT INTO `mobile_otp_generate` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }
        
     public function insertcurrency($records = '') {
        foreach ($records as $key => $value) {
            $field[] = $key;
            if ($value == "NOW()")
                $data[] = "$value";
            else
                $data[] = "'$value'";
        }
        $field = implode(',', $field);
        $data = implode(',', $data);
        // exit ("INSERT INTO `cryptocurrencies` ($field) VALUES ($data)");
        $this->execute("INSERT INTO `cryptocurrencies` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }
    
    public function getmobilebyid($id) {
        $ss__testimonials = "SELECT *  FROM `mobile_otp_generate` where mobile='$id'";
        return $this->getExecute($ss__testimonials,'single');
    }
    
    public function updatemobotp($id,$id2) {
        $ss__testimonials = "update mobile_otp_generate set otp='$id' where mobile='$id2'";
       // echo $ss__testimonials; exit();
      if($this->execute($ss__testimonials))
      {
          $r=1;
      }else
      { 
          $r=0;
      }
      
      return $r;
    }
    
    
         public function check_mobile_number($id) {
        $ss__testimonials = "SELECT id  FROM `users` where mobile='$id'";
        return $this->getExecute($ss__testimonials, 'single');
    }
    
        public function check_email($id) {
        $ss__testimonials = "SELECT id  FROM `users` where email='$id'";
        return $this->getExecute($ss__testimonials, 'single');
    }
    
    
    public function getallcryptocurrencies() {
        $ss__testimonials = "SELECT id  FROM `cryptocurrencies` order by rank asc limit 0, 20";
        return $this->getExecute($ss__testimonials);
    }
    
     public function check_password($id,$id2) {
        $ss__testimonials = "SELECT id  FROM `users` where password='$id' and id='$id2'";
        return $this->getExecute($ss__testimonials, 'single');
    }
    
     public function update_user_pwd($id,$mob) {
        $ss__testimonials = "update users set password='$id' where mobile='$mob'";
        return $this->execute($ss__testimonials);
    }
    
    
   public function check_otp($id) {
        $ss__testimonials = "SELECT id  FROM `users` where verify_otp='$id'";
       // echo $ss__testimonials; 
        return $this->getExecute($ss__testimonials, 'single');
    }
    
    public function getlastorder() {
        $ss__testimonials = "SELECT id,rech_unique_id  FROM `orders` order by id desc limit 1";
       // echo $ss__testimonials; 
        return $this->getExecute($ss__testimonials, 'single');
    }
    
    
    
public function createuserregister($records = '') {
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
        $this->execute("INSERT INTO `users` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }

public function createwallet_user($records = '') {
        foreach ($records as $key => $value) {
            $field[] = $key;
            if ($value == "NOW()")
                $data[] = "$value";
            else
                $data[] = "'$value'";
        }
        $field = implode(',', $field);
        $data = implode(',', $data);
      //   exit ("INSERT INTO `wallet_users` ($field) VALUES ($data)");
        $this->execute("INSERT INTO `wallet_users` ($field) VALUES ($data)");
        
        return mysqli_insert_id();
    }


       public function updateorder($id) {
        $ss__testimonials = "update orders set userid='".$_SESSION['kpr_rech_id']."' where temporary_id='$id'";
        //echo("update orders set userid='".$_SESSION['kpr_rech_id']."' where rech_unique_id='$id'");exit();
        $this->execute($ss__testimonials);
    }
    public function createmobilerecharge($records = '') {
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
        $this->execute("INSERT INTO `orders` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }

    public function createdatacardrecharge($records = '') {
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
        $this->execute("INSERT INTO `orders` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }

public function createdthrecharge($records = '') {
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
        $this->execute("INSERT INTO `orders` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }
public function createelectricitybill($records = '') {
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
        $this->execute("INSERT INTO `orders` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }


    public function getuseremailpwd($mobile, $password) {
        $query__admin = "SELECT * FROM users WHERE mobile='" . $mobile . "' and password='" . $password . "' and status='1'";
        return $this->getExecute($query__admin, 'single');
        //print_r($query__admin); exit();
        
     //  echo $o__admin->id; exit();
    
    }
    
     public function loginwithotp($mobile, $password) {
        $query__admin = "SELECT * FROM users WHERE mobile='" . $mobile . "' and otp='" . $password . "' and status='1'";
        $o__admin = $this->getExecute($query__admin, 'single');
       /// print_r($query__admin); exit();
        
     //  echo $o__admin->id; exit();
        if ($o__admin!="") {
            $_SESSION['kpr_rech_id'] = $o__admin->id;
            $_SESSION['kpr_rech_mobile'] = $mobile;
            $_SESSION['kpr_rech_name'] = $o__admin->firstname.' '.$o__admin->lastname;
             $_SESSION['kpr_rech_fname'] = $o__admin->firstname;



            return '1';
        } else {
            $_SESSION['error_msg'] = "Sorry, this login is invalid.";
            return '0';
        }
    }
    

     public function userlogout() {
        unset(  $_SESSION['kpr_rech_id']);
        //unset($_SESSION['cs_email_armora']);
        unset($_SESSION['kpr_rech_mobile']);
        unset($_SESSION['kpr_rech_name']);
         unset($_SESSION['kpr_rech_fname']);
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
