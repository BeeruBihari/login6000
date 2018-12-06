<?php
$o__report= new report();
if(TYPE == 'add_retailer')
{
    
}
if(TYPE == 'view_retailer')
{
    
}
if(TYPE == 'chat')
{
    if($_SESSION['b2b_kpr_rech_user_type'] == 4){
        $getusers=$o__report->getusebyadminid();
    }
    
   
}
?>