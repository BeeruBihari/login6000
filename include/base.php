<?php

echo "its base .php";
ob_start();
session_start();
//error_reporting(0);

error_reporting(E_ALL);
// error_reporting(E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR);
// ini_set('display_errors', '1');
// ini_set('log_errors', '1');
 
//error_reporting(1);
include "defines.php";
echo 'sdfjh';

// getting controller and config class
include "baseControllor.class.php";
require $_SERVER['DOCUMENT_ROOT']."/php/BugfixPhp7_10_18/login6000/include/../class/myConfig.class.php";
echo "jkdj";

$dir = Fclass;
$dh = opendir($dir);



  while (false !== ($filename = readdir($dh))) {
    if (strstr($filename, '.class.php')) {
        require_once Fclass . DS . $filename;
     echo Fclass . DS . $filename.'<br/>';
    }
}

 echo "myConfig.class.php"; exit();

$master = new myConfig();

 //echo "myConfig.class.php"; exit();
 
if (!empty($action)) {
    $o__action = $master->getClientActions($action);
    define('ACTION', $o__action->action);
    define('TYPE', $o__action->type);
    $master->getclientRestricated($action);
}
// chk tht user is authonticates or not ///


if ($master->isAuthenticatedClient()) {
   
    define('USER_ID', $_SESSION['cs_member_id']);
    define('USER_NAME', $_SESSION['cs_membername']);
    define('MEMBER_ID',  $_SESSION['cs_memberId']);
}


require_once Ffunction . DS . "framework.php";
////getting required class for project///////////
require_once FAhelper . DS . "paging.class.php";

?>
