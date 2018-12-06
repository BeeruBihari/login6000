<?php



class update_commission
{

   public function getindop($id) {
        $ss__testimonials = "select * from `api_operator_group_tables` where group_id='$id'";
       // echo("select * from b2b_users where id='$id'");exit();
        return $this->getExecute($ss__testimonials,'multiple');
    }
    
    public function addmposcommissionslab($records = '') {
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
        $this->execute("INSERT INTO `b2b_user_mpos_commissions` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }
     public function update_b2b_users_mpos_commission($records, $id_admin) {
            foreach ($records as $key => $value) {
                $data[] = $key . "='" . $value . "'";
            }
            $data = implode(',', $data);
            $ss__update_admin = "UPDATE b2b_user_mpos_commissions SET $data WHERE id='" . $id_admin . "'";
            $this->execute($ss__update_admin);
        }
    public function createmposcommission($records = '') {
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
        $this->execute("INSERT INTO `b2b_mpos_commissions` ($field) VALUES ($data)");
        return mysqli_insert_id();
    }
    
     public function update_b2b_mpos_commissions($records, $id_admin) {
            foreach ($records as $key => $value) {
                $data[] = $key . "='" . $value . "'";
            }
            $data = implode(',', $data);
            $ss__update_admin = "UPDATE b2b_user_mpos_commissions SET $data WHERE id='" . $id_admin . "'";
           // echo $ss__update_admin; exit();
            $this->execute($ss__update_admin);
        }
     public function update_b2b_user_all_commissions($records, $id_admin,$gid) {
            foreach ($records as $key => $value) {
                $data[] = $key . "='" . $value . "'";
            }
            $data = implode(',', $data);
            $ss__update_admin = "UPDATE api_operator_group_tables SET $data WHERE opid='" . $id_admin . "' and group_id='".$gid."'";
           // echo $ss__update_admin; exit();
            $this->execute($ss__update_admin);
        }
        
    public function getmposuser($id) {

        $ss__testimonials = "select count(*) as b2b_user_id from `b2b_user_mpos_commissions` where b2b_user_id='$id' and card_type='credit'";

        // echo("select * from b2b_users where id='$id'");exit();

        return $this->getExecute($ss__testimonials,'single');

    }
    public function getmposuser_debit($id) {

        $ss__testimonials = "select count(*) as b2b_user_id from `b2b_user_mpos_commissions` where b2b_user_id='$id' and card_type='debit'";

        // echo("select * from b2b_users where id='$id'");exit();

        return $this->getExecute($ss__testimonials,'single');

    }
    public function getb2busermposslab_credit($id) {

        $ss__testimonials = "select *  from `b2b_user_mpos_commissions` where b2b_user_id='$id' and card_type='credit' ";

        // echo("select * from b2b_users where id='$id'");exit();

        return $this->getExecute($ss__testimonials,'multiple');

    }
    public function getb2busermposslab_debit($id) {

        $ss__testimonials = "select *  from `b2b_user_mpos_commissions` where b2b_user_id='$id' and card_type='debit' ";

        // echo("select * from b2b_users where id='$id'");exit();

        return $this->getExecute($ss__testimonials,'multiple');

    }
    
    public function getAllApis($id) {

        $ss__testimonials = "select * from `b2b_assign_apis` where user_id='$id'";

        // echo("select * from b2b_users where id='$id'");exit();

        return $this->getExecute($ss__testimonials);

    }

    public function getOneB2Buser($id) {

        $ss__testimonials = "select * from `b2b_users` where id='$id'";

        // echo("select * from b2b_users where id='$id'");exit();

        return $this->getExecute($ss__testimonials,'single');

    }

    public function updatecommissionbyid($tbnm, $com, $id) {

        $ss__testimonials = "update `$tbnm` set commoncommision='$com' where opid='$id'";

         //echo("update `$tbnm` set commoncommision='$com' where opid='$id'");exit();

        return $this->execute($ss__testimonials);

    }

    public function updateOtherCommissionbyid($tbnm,$type, $com, $id) {

        $ss__testimonials = "update `$tbnm` set $type='$com' where id='$id'";

       // echo($ss__testimonials);exit();

        return $this->execute($ss__testimonials);

    }

    public function getoperators($tbnm,$id) {

        $ss__testimonials = "select * from `$tbnm` where service_id='$id'";

        // echo($ss__testimonials);

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