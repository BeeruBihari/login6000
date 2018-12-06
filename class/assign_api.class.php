<?php

class assign_api

{

    public function create_b2b_assign_apis($records = '') {

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

        $this->execute("INSERT INTO `b2b_assign_apis` ($field) VALUES ($data)");

        return mysqli_insert_id();

    }

    public function update_b2b_assign_apis($records, $id_admin,$rr) {

        foreach ($records as $key => $value) {

            $data[] = $key . "='" . $value . "'";

        }

        $data = implode(',', $data);

        $ss__update_admin = "UPDATE b2b_assign_apis SET $data WHERE user_id='" . $id_admin . "' and api_id='$rr'";

        $this->execute($ss__update_admin);

    }

    public function getOneuser($id,$rr) {

        $ss__testimonials = "select * from `b2b_assign_apis` where user_id='$id' and api_id='$rr'";

        // echo("select * from b2b_users where id='$id'");exit();

        return $this->getExecute($ss__testimonials,'single');

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