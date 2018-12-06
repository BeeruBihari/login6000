<?php

class group {
    
    public function getapiname($id) {
        $ss__testimonials = "select * from `b2b_api_configurations` where api_holder='$id'";
       // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }
    
    public function add_mpos_slab($records = '') {
        
        foreach ($records as $key => $value) {
            $field[] = $key;
            if ($value == "NOW()")
                $data[] = "$value";
            else
                $data[] = "'$value'";
        }
        $field = implode(',', $field);
        $data = implode(',', $data);
        //echo "INSERT INTO `b2b_mpos_slabs` ($field) VALUES ($data)"; exit();
        $inid=$this->execute("INSERT INTO `b2b_mpos_slabs` ($field) VALUES ($data)");
       // mysqli_query($con,$inid);
        return $inid;
    }
    public function add_dmt_slab($records = '') {
        
        foreach ($records as $key => $value) {
            $field[] = $key;
            if ($value == "NOW()")
                $data[] = "$value";
            else
                $data[] = "'$value'";
        }
        $field = implode(',', $field);
        $data = implode(',', $data);
        //echo "INSERT INTO `b2b_dmt_slabs` ($field) VALUES ($data)"; exit();
        $inid=$this->execute("INSERT INTO `b2b_dmt_slabs` ($field) VALUES ($data)");
       // mysqli_query($con,$inid);
        return $inid;
    }
    
    
    
    public function create_group($records = '') {
        
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
        $inid=$this->execute("INSERT INTO `api_operator_groups` ($field) VALUES ($data)");
       // mysqli_query($con,$inid);
        return $inid;
    }
    
    public function create_group_table_record($records = '') {
        foreach ($records as $key => $value) {
            $field[] = $key;
            if ($value == "NOW()")
                $data[] = "$value";
            else
                $data[] = "'$value'";
        }
        $field = implode(',', $field);
        $data = implode(',', $data);
        //echo "INSERT INTO `b2b_users` ($field) VALUES ($data)"; exit();
        $this->execute("INSERT INTO `api_operator_group_tables` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }
    
    public function getalloperator() {
        if( $_SESSION['b2b_kpr_rech_admin_id'] == '1' && $_SESSION['b2b_kpr_rech_user_type'] != '4')
        {
            $ss__testimonials = "select * from `api_operator`";
             //echo "select * from `api_operator`"; exit();
        }
        else
        {
            if($_SESSION['b2b_kpr_rech_user_type'] == '4'){
                $ss__testimonials = "select * from `b2b_wl_operator_".$_SESSION['b2b_kpr_rech_unique_id']."`  ORDER BY `service_id` ASC";
                // echo "select * from `b2b_wl_operator_`".$_SESSION['b2b_kpr_rech_unique_id']; exit();
            }
            else
            {
                 $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
                    $admin_unique_id = "select * from `b2b_users` where id=".$_SESSION['b2b_kpr_rech_admin_id'];
                   $result= mysqli_query($con, $admin_unique_id);
                   
                    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                   // print_r($row);
                    
                 $ss__testimonials = "select * from `b2b_wl_operator_".$row['unique_id']."` ORDER BY `service_id` ASC";
                 //echo "select * from `b2b_wl_operator_`".$row['unique_id']; exit();
            }
            
        }
        
         //echo($ss__testimonials);exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }
    
    public function getallgroup($id) {
        $ss__testimonials = "select * from `api_operator_groups` where user_id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }
    public function getallgroup_name($id) {
        $ss__testimonials = "select * from `api_operator_groups` where id='$id'";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }
     public function getallmpos_slab($id) {
        $ss__testimonials = "select * from `b2b_mpos_slabs` where group_id='$id' order by id desc";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }
     public function getalldmt_slab($id) {
        $ss__testimonials = "select * from `b2b_dmt_slabs` where group_id='$id' order by id desc";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }
    public function getalldmt_slab_validate($id,$grp) {
        $ss__testimonials = "select * from `b2b_dmt_slabs` where group_id='$id' and rtype='Validation' and dmt_type='".$grp."' order by id desc";
        // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }
    public function getoperatorname($id) {
        $ss__testimonials = "select * from `api_operator` where opid='$id'";
       // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }
    public function getBuyComs($gid,$opid) {
        $ss__testimonials = "select * from `api_operator_group_tables` where group_id='$gid' AND opid='$opid'";
       // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'single');
    }
    public function getindop($id) {
        $ss__testimonials = "select * from `api_operator_group_tables` where group_id='$id'";
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