<?php
error_reporting(-1);
//$Get_Response = file_get_contents('https://www.instantpay.in/ws/api/transaction?token=1c1b92ed78a1514294ec8d12046afe41&spkey=BGP&agentid=96385274102&account=9427666688&amount=10');
//$url = 'http://ambikamultiservices.com/API/NewAPIService.aspx?userid=9034322322&pass=0885&mob=9427666688&opt=BS&amt=10&agentid=963257123593&fmt=json';
//$url= 'http://talkfuel.in/Recharge_req.aspx?uid=API104&pass=TTXVYM1e&mno=9427666688&op=B&amt=11&refid=9638957924&format=json';
//$url='http://egpayindia.in/API/APIService.aspx?userid=7779081000&pass=260037&mob=9427666688&opt=TB&amt=11&agentid=9426582543&optional1=963852&fmt=json';
/*$Get_Response = '<?xml version="1.0" encoding="utf-8"?>
<xml><ipay_id>1180117182700VGAEW</ipay_id><agent_id>96385274102</agent_id><opr_id>1162131115</opr_id><account_no>9427666688</account_no><sp_key>BGP</sp_key><trans_amt>10</trans_amt><charged_amt>9.68</charged_amt><opening_bal>6979.95</opening_bal><datetime>2018-01-17 18:27:04</datetime><status>SUCCESS</status><res_code>TXN</res_code><res_msg>Transaction Successful</res_msg></xml>';
$r = simplexml_load_string($Get_Response) or die("Error: Cannot create object");;
//echo $_SERVER[HTTP_HOST];
$url = 'http://ambikamultiservices.com/API/NewAPIService.aspx?userid=9034322322&pass=0885&mob=9427666688&opt=BS&amt=11&agentid=95368421532568&fmt=json';
if(isset($r->asd)){
 //   echo 'adfaf';
}
else{
   // echo '123';
}
$Get_Response = file_get_contents($url);
print_r($Get_Response);
*/
//$Get_Response1 = file_get_contents('https://www.instantpay.in/ws/api/getMIS?format=xml&token=1c1b92ed78a1514294ec8d12046afe41&agentid=951753');
//print_r($Get_Response1);
// $a = 'http://balajitechnopay.com/API/APIService.aspx?userid=8367577842&pass=2616&mob=9427666688&opt=BT&amt=11&agentid=846546&fmt=json';
// // $b = file_get_contents($a);

// //                         print_r($b);
                        
//                         ini_set("allow_url_fopen", 1);
//                                                 $ch = curl_init();
//                                             curl_setopt($ch, CURLOPT_URL, $a);
//                                             curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//                                             $Get_Response = curl_exec($ch);
//                                             curl_close($ch);
                                            
//                                             print_r($Get_Response);
                                            
                                            
// $con = mysqli_connect("localhost","bizzweb_kandoip",'kp@rt#${{121}}',"bizzweb_kandoipower");
// for($i = 175;$i<=190;$i++){
// $sql = mysqli_query($con,"select * from `api_operator` where opid = $i");
// $r = mysqli_fetch_array($sql);
// $sql2 = mysqli_query($con,"select * from `api_operator_groups`");
// while($r2 = mysqli_fetch_array($sql2)){
//     echo $r['opid'].'-'.$r2['id'].'<br>';
//     //mysqli_query($con,"INSERT INTO `api_operator_group_tables`(`opid`,`group_id`,`sale_commission`,`sale_commission_type`,`service_charge`,`service_charge_type`,`service_id`,`status`,`OperatorDescritpion`) VALUES ('".$r['opid']."','".$r2['id']."','0','flat','0','flat','".$r['service_id']."','1','".$r['OperatorDescritpion']."')");
// }
// //mysqli_query($con,"INSERT INTO `b2b_wl_operator_98599406`(`OperatorDescritpion`,`RechargeType`,`service_id`,`opcode`) VALUES ('".$r['OperatorDescritpion']."','".$r['RechargeType']."','".$r['service_id']."','".$r['opcode']."')");    
// }

?>
<?php
// $con = mysqli_connect("localhost","u380658196_main",'ZSE$6tfc',"u380658196_main");
// $sql_d = mysqli_query($con,"SELECT * FROM b2b_users WHERE user_type='3'");
// while($r = mysqli_fetch_array($sql_d)){
//     $sql_md = mysqli_query($con,"SELECT * FROM b2b_users WHERE user_type='2' and id='".$r['uplevel_id']."'");
//     $r_md = mysqli_fetch_array($sql_md);
//     $adminup = $r_md['admin_up'];
//     mysqli_query($con,"UPDATE `b2b_users` SET `admin_up`='".$adminup."' WHERE id='".$r['id']."'");
// }
// echo 'done';

?>
<?php
//echo "<pre>";
$soapUrl = "http://staging.remitindia.in//NTDAPI/Service.asmx";
$soapMobileNo = '8140666688';
$soapAPIKey = 'aXk3dt5218Yngiq4wVX0scVmg8TlhdYpbrX';
$respType = 'JSON';


$data = '<NTDREQ><REQTYPE>AC</REQTYPE><CUSTOMERNO>8140666688</CUSTOMERNO><NAME>AMIT</NAME></NTDREQ>';
$checkSum = strtoupper(hash('SHA512', $data));
$raw_data = htmlentities($data);
//DO NOT SPLIT BELOW LINE OR DO NOT USE NEW LINE (ENTER KEY) IN BELOW STRING
$xml_post_string = '<?xml version="1.0" encoding="utf-8"?><soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"><soap:Header><DMRAuthHeader xmlns="http://tempuri.org/"><MobileNo>'.$soapMobileNo.'</MobileNo><APIKey>'.$soapAPIKey.'</APIKey><ResponseType>'.$respType.'</ResponseType><Checksum>'.$checkSum.'</Checksum></DMRAuthHeader></soap:Header><soap:Body><AddCustomer xmlns="http://tempuri.org/"><sRequest>'.$raw_data.'</sRequest></AddCustomer></soap:Body></soap:Envelope>';
echo $xml_post_string;
$headers = array(
    "Content-type: text/xml;charset=\"utf-8\"",
    "Accept: text/xml",
    "Cache-Control: no-cache",
    "Pragma: no-cache",
    "SOAPAction: http://tempuri.org/AddCustomer",
    "Content-length: ".strlen($xml_post_string),
    "POST: /NTDAPI/Service.asmx HTTP/1.1",
);

$url = $soapUrl;
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
//echo htmlentities($response);
//echo "\n";
curl_close($ch);

$clean_xml = str_ireplace(['SOAP-ENV:', 'SOAP:'], '', $response);
echo $clean_xml;
echo "\n";
$xml = simplexml_load_string($clean_xml);
//echo $xml;
$soapResult = $xml->Body->AddCustomer->AddCustomerResult;
//echo $soapResult;
?>

