<?php

include'../include/base.php';

$con = mysqli_connect("localhost","bizzweb_kandoip",'kp@rt#${{121}}',"bizzweb_kandoipower");

if($_POST['type'] == 'sendmsg'){
    
   $id = $_SESSION['b2b_kpr_rech_id'];
    $msg = $_POST['msg'];
    $date = date('Y-m-d');
    $time= date('h:i:s');
    
    if($_SESSION['b2b_kpr_rech_user_type'] == 4){
        $toid = $_POST['user'];
        $admin=$_SESSION['b2b_kpr_rech_id'];
    }
    else{
         $toid = $_SESSION['b2b_kpr_rech_admin_id'];
         $admin=$_SESSION['b2b_kpr_rech_admin_id'];
    }
    $data = "INSERT INTO `b2b_chats`(`user_id`, `admin_id`,`to_id`, `msg`, `date`, `time`) VALUES ('".$id."','".$admin."','".$toid."','".$msg."','".$date."','".$time."')";
    
    mysqli_query($con,$data);
    //echo $data;
}

if($_POST['type'] == 'fetchchat'){
    
    $id = $_POST['user'];
    
    $data = "SELECT * FROM `b2b_chats` WHERE (to_id='".$id."' AND user_id='".$_SESSION['b2b_kpr_rech_id']."') OR (user_id='".$id."' AND to_id='".$_SESSION['b2b_kpr_rech_id']."') ";
    
    $sql = mysqli_query($con,$data);
    
    while($r = mysqli_fetch_array($sql)){
        
        if($r['user_id'] == $_SESSION['b2b_kpr_rech_id']){
            echo '<li class="chatui-talk-msg"></li>';
        }
        else{
            echo '<li class="chatui-talk-msg chatui-talk-msg-highlight themed-border"></li>';
        }
        
        
    }
    
}

?>