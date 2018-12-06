<?php 

include '../include/base.php';
$o__index = new index();
 
if(isset($_POST['mob'])){
    $final=$_POST['mob'];
    $userotp = $o__index->check_otp($final);    
   //   print_r($userotp);
      if($userotp->id != "")
      {
            
        echo '1';
      }
 else 
     {
         echo '00';
      }
}

?>