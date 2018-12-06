<?php
$file_path = "uploads/b2b_user_adhaar/";
$file_path_pan = "uploads/";
//    $var = $_POST['result'];

//    $file_path = $file_path_pan . basename( $_FILES['pancard']['name']);
//    move_uploaded_file($_FILES['pancard']['tmp_name'], $file_path);



    $file_path1 = $file_path . basename( $_FILES['adhaarcardside1']['name']);
    move_uploaded_file($_FILES['adhaarcardside1']['tmp_name'], $file_path1);
    


//
//    $file_path2 = $file_path . basename( $_FILES['adhaarcardside2']['name']);
//    move_uploaded_file($_FILES['adhaarcardside2']['tmp_name'], $file_path2);

    
   // echo json_encode($result);

?>