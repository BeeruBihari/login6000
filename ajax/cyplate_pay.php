<?php


  $ele_board_url=$_POST['ele_board'];
  $customer_number=$_POST['customer_number'];
  $amount_elec=$_POST['amount_elec'];
  $Account=$_POST['account_elec'];
  
//   function getInbetweenStrings($start, $end, $str){
//    $matches = array();
//    $regex = "/$start([a-zA-Z0-9_]*)$end/";
//    preg_match_all($regex, $str, $matches);
//    return $matches[1];
//        }
  
//$len = 15;
//
//$rand = substr(str_shuffle(md5(time())), 0, $len);
//
//$utid = strtoupper($rand);
define('CERT','A907E421D570101FD7AD7F7B901E57B056ECEEDF');  //our testing key 
function get_query_result($qs, $url)
{
   
    $opts = array( 
        'http'=>array(
            'method'=>"POST",
            'header'=>array("Content-type: application/x-www-form-urlencoded\r\n".
                            "X-CyberPlat-Proto: SHA1RSA\r\n"),
            'content' => "inputmessage=".urlencode($qs)
        )
    ); 
    $context = stream_context_create($opts);    
    // print_r($context);
    // print_r('<br><br><br><br><br><br><br>');
    return file_get_contents($url, false, $context);
}

  $utid =date("DMdmYhs");

$number=$customer_number;

$amount=$amount_elec;

$SD = 334543;
$AP = 334566;
$OP = 334567;

// The URL to POST to
$url = $ele_board_url;
//$mySOAP ="SD=334543\r\nAP=334566\r\nOP=334567\r\nSESSION=$utid\r\nNUMBER=$number\r\nACCOUNT=$Account\r\nAuthenticator3=\r\nAMOUNT=$amount\r\nAMOUNT_ALL=\r\nTERM_ID=334566\r\nCOMMENT=Test";
$mySOAP ="CERT=".CERT."\r\nSD=$SD\r\nAP=$AP\r\nOP=$OP\r\nSESSION=$utid\r\nNUMBER=$number\r\nAMOUNT=$amount\r\nAMOUNT_ALL=$amount\r\nCOMMENT=Test";

print_r($url.$mySOAP);
// The HTTP headers for the request (based on image above)
$headers = array(
'Content-Type: application/x-www-form-url encoded',
);
// Build the cURL session
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $mySOAP);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);


// Send the request and check the response
if (($result = curl_exec($ch)) === FALSE) {
die('cURL error: '.curl_error($ch)."<br />\n");
} 
else {
    
   print_r($result);

//$str = "$result";
//$str_arr = getInbetweenStrings('BEGIN', 'END', $str);
//
//print_r($str_arr);
//
//
//    $dat1=  explode('BEGIN', $result);
//   // print_r($dat1[1]);
//    $dat12=  explode('=', $dat1[1]);
//    print_r('',$dat12);
//    print_r('Date',$dat12[1]);
//    print_r('session',$dat12[2]);
//    print_r('error',$dat12[3]);
//    print_r('result',$dat12[4]);
//    print_r('trannsid',$dat12[5]);
   // $str = "$result";
//if(strpos($result, "RESULT=0")!==false)
//{
//    echo 'true';
//}
// else {
//    echo 'false';
//}
//print_r($result);
}
curl_close($ch);
?>