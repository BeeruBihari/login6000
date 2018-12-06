<?php  

include '../include/base.php';

$o__payment = new recharge();

if(!empty($_GET['status']))
{
//    $records= array(
//
//        'refno' => $_GET['refno'],
//        'reason' => $_GET['status'],
//
//        );
//
//    $rere=$o__payment->createorderform($records);
//
    
    
     if($_GET['status'] == "Success")
     {
         $records= array(
             'status' => '1',
             );
         
        $o__payment->update_b2b_response_orders($records,$_GET['refno']);
        
     }
     if($_GET['status'] == "Failure")
     {
         $records= array(
             'status' => '2',
           );
         
         $oid=$o__payment->getdatabyrefno($_GET['refno']);
         $commssion=$o__payment->getdatabyoid($oid->id);
         
         $record_comm= array(
             'status' => '0',
           );
          $o__payment->update_b2b_response_comm($record_comm,$oid->id);
          $o__payment->update_b2b_response_orders($records,$_GET['refno']);
     }
}

?>