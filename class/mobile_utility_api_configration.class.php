<?php 

class mobile_utility_api_configration
{
    
     public function create_b2b_api($records = '') 
     {
        foreach ($records as $key => $value) {
            $field[] = $key;
            if ($value == "NOW()")
                $data[] = "$value";
            else
                $data[] = "'$value'";
        }
        $field = implode(',', $field);
        $data = implode(',', $data);
      //  echo "INSERT INTO `b2b_api_configurations` ($field) VALUES ($data)"; exit();
        $id=$this->execute("INSERT INTO `b2b_api_configurations` ($field) VALUES ($data)");
        return $id;
    }
    
     public function getgroup($id) {
        $ss__testimonials = "select * from `api_operator_groups` where user_id='$id' and api_group=1";
       // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }
    
     public function getb2bapiname() {
          if($_SESSION['b2b_kpr_rech_id']=='1'){
              $ss__testimonials = "select * from `b2b_api_configurations` ";
          }
          else{
             $ss__testimonials = "select * from `b2b_api_configurations` where 	api_holder=".$_SESSION['b2b_kpr_rech_id']; 
          }
        
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }
    public function getb2buserbyid($id) {
        $ss__testimonials = "select * from `b2b_users` where id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }
	
	public function getapiconfigbyid($id) {
        $ss__testimonials = "select * from `b2b_api_configurations` where id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }
	
    public function getAllAPIUHolder($id) {
        $ss__testimonials = "select * from `b2b_users` where admin_id='$id' and user_type='4' and status='1' order by firstname asc";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }
   
    private function execute($ss__query) {
        $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");

        mysqli_query($con, $ss__query);
        
        return mysqli_insert_id($con);
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