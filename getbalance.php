<?php
$con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");

if($_POST['type'] == 'bal1'){
$id = $_POST['user'];

$sql = mysqli_query($con,"SELECT id,balance FROM b2b_users WHERE id='".$id."' ");
$r = mysqli_fetch_array($sql);
echo $r['balance']; 
}
if($_POST['type'] == 'bal2'){
$id = $_POST['user'];

$sql = mysqli_query($con,"SELECT id,balance2 FROM b2b_users WHERE id='".$id."' ");
$r = mysqli_fetch_array($sql);
echo $r['balance2']; 
}

?>