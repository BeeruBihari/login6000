<?php



class commission
{
    
    public function getindop($id) {
        $ss__testimonials = "select * from `api_operator_group_tables` where group_id='$id' ORDER BY service_id ASC";
       // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }
	
    public function getapiname($id) {
        $ss__testimonials = "select * from `b2b_api_configurations` where api_holder='$id'";
       // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }
	
	public function fetchbuycommission($uqid,$api,$op) {
        $ss__testimonials = "select * from `b2b_wl_operator_".$uqid."` where opid='".$op."'";
       // echo($ss__testimonials);exit();
        return $this->getExecute($ss__testimonials,'single');
    }
	
	
    
    public function getallcommission() {

        if($_SESSION['b2b_kpr_rech_id']=='1'){
            $ss__testimonials = "select *  from `api_operator` ORDER BY service_id ASC";
        }
        else{
            $ss__testimonials = "select *  from `b2b_wl_operator_".$_SESSION['b2b_kpr_rech_unique_id']."` ORDER BY service_id ASC";
        }


        // echo("select * from b2b_users where id='$id'");exit();

        return $this->getExecute($ss__testimonials,'multiple');

    }
    
    public function getapiforopcode($id) {

        if($_SESSION['b2b_kpr_rech_id']=='1'){
            
            $ss__testimonials = "select opid,OperatorDescritpion,opcode  from `api_operator` ORDER BY service_id ASC";
        }
        else{
            $ss__testimonials = "select *  from `b2b_wl_operator_".$_SESSION['b2b_kpr_rech_unique_id']."` ORDER BY service_id ASC";
        }


        // echo($ss__testimonials);exit();

        return $this->getExecute($ss__testimonials,'multiple');

    }
    
    public function update_b2b_user_all_commissions($records, $id_admin) {
           if($_SESSION['b2b_kpr_rech_id']=='1'){
            foreach ($records as $key => $value) {
                $data[] = $key . "='" . $value . "'";
            }
            $data = implode(',', $data);
            $ss__update_admin = "UPDATE api_operator SET $data WHERE opid='" . $id_admin . "'";
           // echo $ss__update_admin; exit();
            $this->execute($ss__update_admin);
           }
           else{
               foreach ($records as $key => $value) {
                $data[] = $key . "='" . $value . "'";
            }
            $data = implode(',', $data);
            $ss__update_admin = "UPDATE b2b_wl_operator_".$_SESSION['b2b_kpr_rech_unique_id']." SET $data WHERE opid='" . $id_admin . "'";
           // echo $ss__update_admin; exit();
            $this->execute($ss__update_admin);
           }
        }
        
        public function update_b2b_api_opcode($records, $id_admin) {
           if($_SESSION['b2b_kpr_rech_id']=='1'){
            foreach ($records as $key => $value) {
                $data[] = $key . "='" . $value . "'";
            }
            $data = implode(',', $data);
            $ss__update_admin = "UPDATE api_operator SET $data WHERE opid='" . $id_admin . "'";
           // echo $ss__update_admin; exit();
            $this->execute($ss__update_admin);
           }
           else{
               foreach ($records as $key => $value) {
                $data[] = $key . "='" . $value . "'";
            }
            $data = implode(',', $data);
            $ss__update_admin = "UPDATE b2b_wl_operator_".$_SESSION['b2b_kpr_rech_unique_id']." SET $data WHERE opid='" . $id_admin . "'";
          //  echo $ss__update_admin; exit();
            $this->execute($ss__update_admin);
           }
        }
        
    public function update_b2b_api_select($records, $id) {
         if($_SESSION['b2b_kpr_rech_id']=='1'){
              foreach ($records as $key => $value) {
                $data[] = $key . "='" . $value . "'";
            }
            $data = implode(',', $data);
            $ss__update_admin = "UPDATE api_operator SET $data WHERE opid='" . $id . "'";
            //echo $ss__update_admin; exit();
            $this->execute($ss__update_admin);
         }
         else{
			 
            foreach ($records as $key => $value){
                $data[] = $key . "='" . $value . "'";
            }
            $data = implode(',', $data);
            $ss__update_admin = "UPDATE b2b_wl_operator_".$_SESSION['b2b_kpr_rech_unique_id']." SET $data WHERE opid='" . $id . "'";
            //echo $ss__update_admin; exit();
            $this->execute($ss__update_admin);
         }
             
         }
           
        
        
    public function update_b2b_user_grp_commissions($records, $id_admin,$gid) {
            foreach ($records as $key => $value) {
                $data[] = $key . "='" . $value . "'";
            }
            $data = implode(',', $data);
            $ss__update_admin = "UPDATE api_operator_group_tables SET $data WHERE opid='" . $id_admin . "' and group_id='" . $gid . "'";
            //echo $ss__update_admin; exit();
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