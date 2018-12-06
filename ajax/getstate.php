<?php 

include '../include/base.php';
$o__electricity= new electricity();
 
 //moblie check 
                if(isset($_POST['st'])){
                $final=$_POST['st'];
                
               
      $elec_state=$o__electricity->getstate_board($final);
      $option="";
      if(!empty($elec_state))
      {
          $option.='<option value="">Please select</option>';
          foreach ($elec_state as $elec):
              
              $option.='<option value='.$elec['url_verification'].'>'.$elec['electricity_board'].'</option>';
          endforeach;
        echo $option; 
      }
 else 
     {
         echo '00';
      }
}
?>