<?php

$len = 20;

$rand = substr(str_shuffle(md5(time())), 0, $len);

$utid = strtoupper($rand);

$number=39915186720;

$amount=5746.33;

// The URL to POST to
$url = "https://in.cyberplat.com/cgi-bin/bu/bu_pay_check.cgi/235";
$mySOAP ="SD=334543&AP=334566&OP=334567&SESSION=$utid&NUMBER=$number&ACCOUNT=2&Authenticator3=&AMOUNT=$amount&AMOUNT_ALL=&TERM_ID&COMMENT=electricitybill";
//print_r($url.$mySOAP);
//exit();
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
} else {
print_r($result);
}
curl_close($ch);
?>