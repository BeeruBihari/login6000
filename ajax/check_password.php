<?php 

include '../include/base.php';
$o__index = new index();
 
                if(isset($_POST['mob'])){
                $final=md5($_POST['mob']);
                
               
      $userotp = $o__index->check_password($final, $_SESSION['kpr_rech_id']);    
      
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