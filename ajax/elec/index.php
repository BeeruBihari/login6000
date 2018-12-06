<?php
    error_reporting(-1);
    ini_set('display_errors','On');
  ini_set("allow_url_fopen", 1);


  $ele_board_url=$_GET['ele_board'];
  $customer_number=$_GET['customer_number'];
  $amount_elec=$_GET['amount_elec'];
  $Account=$_GET['account_elec'];
  
  
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
  
   return file_get_contents($url, false, $context);
}

function check_signature($response, $serverCert)
{
    $fields = preg_split("/END\r\nBEGIN SIGNATURE\r\n|END SIGNATURE\r\n|BEGIN\r\n/", $response, NULL, PREG_SPLIT_NO_EMPTY);
    if (count($fields) != 2) {
        print "Bad response\n";
		return;
    }

    $pubkeyid = openssl_pkey_get_public($serverCert);
    $ok = openssl_verify(trim($fields[0]), base64_decode($fields[1]), $pubkeyid);
    print "Signature is ";
    if ($ok==1) {
            print "good";
    } elseif ($ok==0) {
            print "bad";
    } else {
            print "ugly, error checking signature";
    }
    print "\n";
    openssl_free_key($pubkeyid);
}

error_reporting(1);

define('CERT','A907E421D570101FD7AD7F7B901E57B056ECEEDF');  //our testing key 
define('CP_PASSWORD','zse46tfc12345'); //our pwd



//Live urls for bsnl
$check_url = "$ele_board_url";    
$pay_url = "$ele_board_url";
$verify_url = "https://in.cyberplat.com/cgi-bin/bu/bu_pay_status.cgi";  //This url will remain same for all operators


$SD = 334543;
$AP = 334566;
$OP = 334567;


$phNbr = $customer_number;
$amount =  $amount_elec;
$account = $Account;

$secKey = file_get_contents("private.key");
$passwd = CP_PASSWORD;
$serverCert = file_get_contents("mycert.pem");

$sessPrefix = rand(100, 300);
$sess = $sessPrefix.$phNbr.time();
$sess = substr($sess,-20);
//$sess=date("DMdmYhs");
//print_r($sess);
$querString="CERT=".CERT."\r\nSD=$SD\r\nAP=$AP\r\nOP=$OP\r\nSESSION=$sess\r\nNUMBER=$phNbr\r\nACCOUNT=$account\r\nAMOUNT=$amount\r\nCOMMENT=Test";

// make SHA1RSA signature
$pkeyid = openssl_pkey_get_private($secKey, $passwd);
openssl_sign($querString, $signature, $pkeyid, OPENSSL_ALGO_SHA1);
openssl_free_key($pkeyid);
//echo $signature;
$encoded = base64_encode($signature);
$encoded = chunk_split($encoded, 76, "\r\n");

$signInMsg = "BEGIN\r\n" . $querString . "\r\nEND\r\nBEGIN SIGNATURE\r\n" . $encoded . "END SIGNATURE\r\n";
//print "Signed request:\n$signInMsg\n";

// send request to Cyberplat
echo "\n==============Phone Validation Response===================\n";
echo '<br>';
$response = get_query_result($signInMsg, $check_url);

if ($response) {
    print "Server response:\n$response\n";
    // verify server signature
  check_signature($response, $serverCert);
} else {
    print "Bad response\n";
    echo '<br>';
}

echo "\n============== Recharge Response===================\n";
echo '<br>';
$recharge_response = get_query_result($signInMsg, $pay_url);

if ($recharge_response) {
    print "Server response:\n$recharge_response\n";
    // verify server signature
  check_signature($recharge_response, $serverCert);
} else {
    print "Bad response\n";
    echo '<br>';
}





$querString="CERT=".CERT."\r\nSD=$SD\r\nAP=$AP\r\nOP=$OP\r\nSESSION=$sess";

$pkeyid = openssl_pkey_get_private($secKey, $passwd);
openssl_sign($querString, $signature, $pkeyid, OPENSSL_ALGO_SHA1);
openssl_free_key($pkeyid);

$encoded = base64_encode($signature);
$encoded = chunk_split($encoded, 76, "\r\n");

$signInMsg = "BEGIN\r\n" . $querString . "\r\nEND\r\nBEGIN SIGNATURE\r\n" . $encoded . "END SIGNATURE\r\n";

//echo "\n";
//print_r($signInMsg);
echo "\n==============Payment Status Response=====================\n";
echo '<br>';
$response_status = get_query_result($signInMsg, $verify_url);
if ($response_status) {
    print "Server response:\n$response_status\n";
    // verify server signature
  check_signature($response_status, $serverCert);
} else {
    print "Bad response\n";
    echo '<br>';
}		
?>


