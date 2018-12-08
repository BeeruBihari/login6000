<?php

echo "its index.php";
date_default_timezone_set("Asia/Calcutta");

$action = (!empty($_GET['action'])) ? $_GET['action'] : "index";
$ss__path = realpath(dirname(__FILE__));
define('SITE_PATH', $ss__path);
require_once "include/base.php";
$o__admin = new admin();
$url =  $_SERVER["HTTP_HOST"];
$uell = explode(".",$url);
$getdata = $o__admin->getdatabyurl('http://'.$uell[1].'.'.$uell[2]);
require_once "action/" . ACTION . ".action.php";

echo "starting wokring chcking for authumtication ";
if ($master->isAuthenticated() && $action != "apoinmentview") {
    echo "master authenticated and action is apoinmentview.. now checking ffor action != index";
    if($action != "index"){
        echo "action is not qual to .index";
        include FASection . DS . "header_css.php";
        
        if($_GET['app']=='mobile'):
        
        if($action != "book_flight" || $action != "flight_response" || $action != "flight_ticket" || $action != "roundway_trip" || $action != "select_seat"):
        include FASection . DS . "header.php";
        endif;
        
        else:
        include FASection . DS . "header.php";
        endif;
        
        
    }else{
        echo "acition is == index";
        include FASection . DS . "header_css.php";
        include FASection . DS . "header.php";
    }
} else {
    echo "master authnatication failed lodign login page";
    include FASection . DS . "header_login.php";
    echo FASection . DS . "header_login.php";
}

include FAtemplate . DS . ACTION . DS . $action . ".kpr.php";
if ($master->isAuthenticated()) {
    
     if($action != "index"){
          
          if($_GET['app']=='mobile'):
        
        if($action != "book_flight" || $action != "flight_response" || $action != "flight_ticket" || $action != "roundway_trip" || $action != "select_seat"):
        include FASection . DS . "footer.php";
        endif;
        
        else:
        include FASection . DS . "footer.php";
        endif;
          
        include FASection . DS . "footer_js.php";
        
    }else{
       include FASection . DS . "footer.php";
    include FASection . DS . "footer_js.php";
    }
} else {
    include FASection . DS . "footer_login.php";
}
?>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 4000);
</script>