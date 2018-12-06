<?php 

$con = mmysqli_connect("localhost","u380658196_main",'ZSE$6tfc',"u380658196_main");
       
ob_clean();
if($_POST['prd'])
{
   
    $id=mysql_real_escape_string($_POST['prd']);
    echo  $id;
    $delete = "DELETE FROM `b2b_products` WHERE id='$id'";
    mysqli_query($con, $delete);
}


?>
