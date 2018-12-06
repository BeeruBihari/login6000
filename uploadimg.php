<?php
$file_path_pan = "uploads/b2b_user_pan/";
    $var = $_POST['result'];

    $file_path = $file_path_pan . basename( $_FILES['pancard']['name']);
  //  echo $file_path; exit();
    if(move_uploaded_file($_FILES['pancard']['tmp_name'], $file_path)) {
        $result = array("status" => "true", "message" => $file_path);
        return json_encode($result);
    } else{
        $result = array("status" => "false", "message" => 'error');
        return json_encode($result);
    }
//    $result = array("status" => "false", "message" => 'error');
//
//return json_encode($result);

    
    
   // echo json_encode($result);

?>