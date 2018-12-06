<?php



class recharge
{

    public function getalloperators($id) {

        $ss__testimonials = "select api_operator_group_tables.opid, api_operator_group_tables.status12, api_operator_group_tables.group_id, api_operator.OperatorDescritpion,api_operator.opid, api_operator.service_id,api_operator.opcode from api_operator INNER JOIN api_operator_group_tables ON api_operator.opid = api_operator_group_tables.opid AND api_operator.service_id='$id' and api_operator_group_tables.group_id='".$_SESSION['b2b_kpr_rech_grp_name']."' order by api_operator.OperatorDescritpion asc";
         //echo($ss__testimonials);exit();

        return $this->getExecute($ss__testimonials);

    }
    public function mposreceiptdata($id) {

        $ss__testimonials = "select * from `b2b_mpos_transaction_histories` where receiptcode='$id' ORDER BY id DESC";

       //  echo("select * from `b2b_mpos_transaction_histories` where receiptcode='$id'");exit();

        return $this->getExecute($ss__testimonials,'single');

    }

    
 
    

  public function getOneUsername($id) {

        $ss__testimonials = "select * from `b2b_users` where id='$id'";

       // echo("select * from b2b_users where id='$id'");exit();

        return $this->getExecute($ss__testimonials,'single');

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

       // echo $ss__update_admin;    exit();    

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
    public function updatetidmpos($records, $id_admin) {

        foreach ($records as $key => $value) {

            $data[] = $key . "='" . $value . "'";

        }

        $data = implode(',', $data);

        $ss__update_admin = "UPDATE b2b_orders SET $data WHERE 	transaction_id='" . $id_admin . "'";

        //echo $ss__update_admin;         exit();

        $this->execute($ss__update_admin);

    }
    
    public function getrechargedata($id) {

        $ss__testimonials = "select * from `b2b_orders` where transaction_id='$id'";

        // echo("select * from b2b_users where id='$id'");exit();

        return $this->getExecute($ss__testimonials);

    }
    
    public function updaterechargemposdata($records, $id_admin) {

        foreach ($records as $key => $value) {

            $data[] = $key . "='" . $value . "'";

        }

        $data = implode(',', $data);

        $ss__update_admin = "UPDATE b2b_orders SET $data WHERE 	transaction_id='" . $id_admin . "'";

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