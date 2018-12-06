<?php 

include '../include/base.php';
$o__index = new index();
 
                if(isset($_POST['mob'])){
                $final=$_POST['mob'];
                
               
      $userotp = $o__index->check_mobile_number($final);    
      
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
