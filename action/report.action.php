<?php
$o__report= new report();
$getallmoneydata=$o__report->getallmoneyrequest($_SESSION['b2b_kpr_rech_admin_id']);
$getapiconfiglist=$o__report->getapiconfiglist();
$o__user= new user();
if(TYPE == 'report1')
{
    $as_rech_records = array();
    $total="";
    if(isset($_POST['trans_report'])){
        //print_r($_POST); exit();
        $from= $_POST['from'];
        $to= $_POST['to'];
        $type= $_POST['type'];
        
        if($type == 'recharge'):
            $as=$o__report->getAll_recharge_reports($from,$to);
            
            $total = $o__report->total_record;
            
            if (!empty($as[0])) {
            while ($as__record = mysqli_fetch_assoc($as[0])) {
                $as_rech_records[] = $as__record;
            }
            }
            $rech_report=$o__report->gettotalcount($from,$to);
        endif;
            
            
    
    }
}

if(TYPE == 'allreport')
{
    
}
if(TYPE == 'manualchangestatus')
{
    //print_r($_POST); exit();
           if(isset($_POST['manualst_submit'])){
       
        $from= $_POST['from'];
        $to= $_POST['to'];
        $type= $_POST['rech_type'];
        
        $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
	$sql1 = mysqli_query($con,"select * from `b2b_app_all_recharge_transaction_histories` WHERE date BETWEEN '$from' AND '$to'");
	//print("select * from `b2b_app_all_recharge_transaction_histories` WHERE date BETWEEN '$from' AND '$to'");
	//$r1 = mysqli_fetch_array($sql1,MYSQLI_ASSOC);
       print_r($r1);
        exit();
        $count = 0;
	while($r1 = mysqli_fetch_array($sql1)){
		$sql = mysqli_query($con,"SELECT * FROM b2b_users WHERE id='".$r1['b2b_user_id']."' and and admin_id='".$_SESSION['b2b_kpr_rech_id']."'"); 
                while($r = mysqli_fetch_array($sql)){
                        
                        $number ='';
			$typeu = '';
			if($r['user_type'] == 1){
			    $typeu = 'MD';
			}
			elseif($r['user_type'] == 2){
			    $typeu = 'Dis';
			}
			elseif($r['user_type'] == 3){
			    $typeu = 'Reti';
			}
			else{
			    $typeu = 'Admin';
			}
			
			if($r1['rtype'] != ''){
				$type = $r1['rtype'];
			}
			else{
				$type = $r1['type'];
			}
			
			if($r1['mobile'] != ''){
				$number = $r1['mobile'];
			}
			
			if($r1['consumer_no'] != ''){
				$number = $r1['consumer_no'];
			}
			
			if($r1['status'] == '0'){
				$status = 'Pending';
				$class_s = 'label-warning';
			}
			elseif($r1['status'] == '1'){
				$status = 'Success';
				$class_s = 'label-success';
			}
			elseif($r1['status'] == '2'){
				$status = 'Fail';
				$class_s = 'label-danger';
			}
			elseif($r1['status'] == '3'){
				$status = 'Refund';
				$class_s = 'label-info';
			}
			else{
				$status = 'Insufficient Balance';
				$class_s = 'label-default';
			}
			
		echo '<tr><td>'.$r1['id'].'</td><td class="">'.$r['firstname'].' '.$r['lastname'].'</td><td>'.$typeu.'</td><td>'.$type.'</td><td>'.$number.'</td><td>'.$r1['current_balance'].'</td><td>'.$r1['amount'].'</td><td>'.$r1['final_balance'].'</td><td>'.$r1['transaction_id'].'</td><td >'.$status.'</td><td >'.$r1['c_status'].'</td><td>'.$r1['date'].'/'.$r1['time'].'</td></tr>';	
//		if($count == 500){
//			exit;
//		}
		$count++;
                }
		
	}
            
    
    }
}
if(TYPE == 'moneyrequest_report')
{
    
}
if(TYPE == 'api_daybook')
{
    
}
if(TYPE == 'sendsms_report')
{
    
}
if(TYPE == 'report2')
{
    
}
if(TYPE == 'refund_status')
{
    
}
if(TYPE == 'user_ladger')
{
    
}
if(TYPE == 'commission_detail')
{
    
}
if(TYPE == 'recharge_detail')
{
    
}
if(TYPE == 'recharge_detail_format')
{
    
}
if(TYPE == 'user_daybook')
{
   
    
    
}
if(TYPE == 'recharge_by_sms')
{
    
}
if(TYPE == 'incomming_msg')
{
    
}
if(TYPE == 'fund_transfer')
{
    
}
if(TYPE == 'refund_statement')
{
    
}
if(TYPE == 'api_sms_report')
{
    
}
if(TYPE == 'other_sms_report')
{
    
}
if(TYPE == 'recharge_report')
{
    
}
if(TYPE == 'fund_receive_statement')
{
    
}
if(TYPE == 'changestatus')
{
	$data = $o__report->GetAllHistorydataa();
}
if(TYPE == 'disputes')
{ 
	$data = $o__report->getallDisputesbyadmin();
}
if(TYPE == 'disputes_pending')
{ 
	$data = $o__report->getallDisputesbyadmin();
}
if(TYPE == 'api_resp')
{ 
	$data = $o__report->getapiresponse();
}
if(TYPE == 'queue_rech'){
    if(isset($_POST['updatebtn'])){
        
    
        $string = ['user_id'=>$_POST['user_id'],'order_id'=>$_POST['order_id'],'admin_id'=>$_POST['admin_id'],'mob'=>$_POST['mob'],'amount'=>$_POST['amount'],'opcode'=>$_POST['opcode'],'opid'=>$_POST['opid'],'status'=>$_POST['status']];
       // print_r($string); exit;
        $ch = curl_init();                        
        curl_setopt($ch, CURLOPT_URL,"http://api.paybay.in/api/manually_recharge");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        //print_r($server_output);
}
}
?>