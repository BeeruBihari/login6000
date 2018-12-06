<?php


class electricity

{
    public function getstate() {

        $state = "select DISTINCT state from `electricity_company_urls`  ORDER BY state ASC";

        // echo("select * from b2b_users where id='$id'");exit();

        return $this->getExecute($state);

    }
    
    public function getstate_board($id) {

        $state = "select * from `electricity_company_urls` where state='$id' ORDER BY state ASC";

       //  echo($state);exit();

        return $this->getExecute($state);

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
