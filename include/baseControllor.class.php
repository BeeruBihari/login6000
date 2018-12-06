<?php

abstract class baseControllor {

    private $DBASE = "paybay_main";
    private $USER = 'root';
    private $PASS = '';
    private $SERVER = 'localhost';

    public function __construct() {
        $this->connect($this->SERVER, $this->USER, $this->PASS, $this->DBASE);
        return true;
    }

    private function connect($SERVER, $USER, $PASS, $DBASE) {
        $conn = $this->connectSql($SERVER, $USER, $PASS, $DBASE);
        //$this->selectDb($DBASE, $conn);
    }

    private function connectSql($SERVER, $USER, $PASS, $DBASE) {
        $conn = mysqli_connect($SERVER, $USER, $PASS, $DBASE);
        $this->validateException();
        return $conn;
    }

  /*  private function selectDb($DBASE, $conn) {
        mysql_select_db($DBASE, $conn);
        $this->validateException();
        return true;
    }*/

    private function validateException() {
        if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    }

}
?>