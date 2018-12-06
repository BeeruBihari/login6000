<?php

$utid =date("DMdmYhis");

// The URL to POST to
$url ="https://in.cyberplat.com/cgi-bin/bu/bu_pay_check.cgi/332";
$mySOAP ="SD=334543&AP=334566&OP=334567&SESSION=$utid&NUMBER=500287574&ACCOUNT=Surat&Authenticator3=&AMOUNT=1290.00&AMOUNT_ALL=&TERM_ID=334566&COMMENT=Test";

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
}
curl_close($ch);
?>