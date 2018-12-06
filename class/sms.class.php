<?php



class sms
{

    public function getsendsms() {

        $ss__testimonials = "select * from `b2b_send_sms_histories` where admin_id='".$_SESSION['b2b_kpr_rech_id']."'";

        // echo("select * from b2b_users where id='$id'");exit();

        return $this->getExecute($ss__testimonials);

    }
    public function smsapinamebyid($id) {

        $ss__testimonials = "select * from `b2b_sms_apis` where id='$id' ORDER BY id DESC";

         // echo($ss__testimonials);exit();

        return $this->getExecute($ss__testimonials,'single');

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