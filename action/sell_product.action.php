<?php
$o__sell_product = new sell_product();
$o__user = new user();
if(TYPE == 'add_product')
{
    if(isset($_POST['addProduct']))
    {
       // print_r($_FILES);exit;

        if(isset($_FILES['prod_img']['name'][0]) && !empty($_FILES['prod_img']['name'][0])) {
            $path = FAPathupload . "/b2b_user_product/";
//echo $path;
            $prod_img = UploadFile($_FILES['prod_img'], $path);

            $prod_img = 'http://'.$_SERVER[HTTP_HOST].'/uploads/b2b_user_product/'.$prod_img;
        }
        else
        {
            $prod_img= $record->adhaar_card;
        }
        if($_SESSION['b2b_kpr_rech_user_type'] == 4){
            $adminid=$_SESSION['b2b_kpr_rech_id'];
        }
        else{
            $adminid=$_SESSION['b2b_kpr_rech_admin_id'];
        }

        $records= array(
            'user_id' => $_SESSION['b2b_kpr_rech_id'],
            'admin_id' => $adminid,
            'product_name' => $_POST['pro_name'],
            'product_img' => $prod_img,
            'sku' => $_POST['sku'],
            'qty' => $_POST['qty'],
            'amount_with_tax' => $_POST['price'],
            'amount' => $_POST['price'],
            'commission_group' => $_POST['comisn'],
            'status' => 1,
            'date' => date('Y-m-d'),
            'time' => date('h:i:s'),

        );
        $add_user=$o__sell_product->create_b2b_product($records);
    }
    
    
     if(isset($_POST['updateProduct']))
    {
       // print_r($_FILES);exit;
          $id=$_POST['txid'];
        $getprd_data=$o__sell_product->getproduct_upd($id);
        if(isset($_FILES['prod_img']['name'][0]) && !empty($_FILES['prod_img']['name'][0])) {
            $path = FAPathupload . "/b2b_user_product/";
//echo $path;
            $prod_img = UploadFile($_FILES['prod_img'], $path);

            $prod_img = 'http://'.$_SERVER[HTTP_HOST].'/uploads/b2b_user_product/'.$prod_img;
        }
        else
        {
//            $prod_img= $record->adhaar_card;
            $prod_img= $getprd_data->product_img;
        }
//        if($_SESSION['b2b_kpr_rech_user_type'] == 4){
//            $adminid=$_SESSION['b2b_kpr_rech_id'];
//        }
//        else{
//            $adminid=$_SESSION['b2b_kpr_rech_admin_id'];
//        }

        $records= array(
//            'user_id' => $_SESSION['b2b_kpr_rech_id'],
//            'admin_id' => $adminid,
            'product_name' => $_POST['pro_name'],
            'product_img' => $prod_img,
            'sku' => $_POST['sku'],
            'qty' => $_POST['qty'],
            'amount_with_tax' => $_POST['price'],
            'amount' => $_POST['price'],
            'commission_group' => $_POST['comisn'],
            'status' => 1,
            'modify_date' => date('Y-m-d'),
            'modify_time' => date('h:i:s'),

        );
       
        $update_prd=$o__sell_product->update_b2b_product($records,$id);
        flash('update_product', 'Successfully Updated Product', 'alert alert-success');
                $master->redirect('index.php?action=manage_product');
    }
    
}
if(TYPE == 'manage_product')
{
    
    
}
if(TYPE == 'order_manage')
{
    if(isset($_GET['oid'])){
        $records= array(
            'status'=>1
            );
        $update_prd=$o__sell_product->update_b2b_product_order($records,$_GET['oid']);
        flash('update_order', 'Successfully Updated Status', 'alert alert-success');
         $master->redirect('index.php?action=order_manage');
    }
    
}
if(TYPE == 'delete_product')
{
    
    $update_prd=$o__sell_product->delete_product($_GET['prdid']);
        flash('update_product', 'Successfully Product Deleted', 'alert alert-success');
                $master->redirect('index.php?action=manage_product');
    
}

?>