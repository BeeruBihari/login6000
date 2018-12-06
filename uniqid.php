<?php
include 'include/base.php';
$o__recharge = new recharge();
$max = 1000;
$digits = 8;
$products = $o__recharge->getallusers();
$power = pow(10, $digits);
foreach($products as $prods):
    $num = str_pad(mt_rand(0, $power), $digits, "0", STR_PAD_LEFT);
    if (!in_array($num, $prods['unique_id']))
    {
        $o__recharge->update_unique_id($num,$prods['id']);
       // $rr=$num;
    }
    endforeach;

?>