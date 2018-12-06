<?php 
//include'../include/base.php';
$con = mysqli_connect("localhost","bizzweb_kandoip",'kp@rt#${{121}}',"bizzweb_kandoipower");
       
//ob_clean();
if($_POST['prd'])
{
   
    $id=trim($_POST['prd']);
    echo  $id;
    $delete = "DELETE FROM `b2b_products` WHERE id='$id'";
    mysqli_query($con, $delete);
}


?>
