<?php 

include '../include/base.php';
$o__index = new index();
 
 //moblie check 
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


// email validate kp
      if(isset($_POST['kpmail'])){
                $final=$_POST['kpmail'];
                
               
      $userotp = $o__index->check_email($final);    
      
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