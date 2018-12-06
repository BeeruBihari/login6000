<?php
$url = "https://test.ccavenue.com/transaction/getRSAKey";
$fields = array(
        'access_code'=>"AVSX73EI11BE51XSEB",
        'order_id'=>$_POST['order_id']
);

$postvars='';
$sep='';
foreach($fields as $key=>$value)
{
        $postvars.= $sep.urlencode($key).'='.urlencode($value);
        $sep='&';
}

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,count($fields));
curl_setopt($ch, CURLOPT_CAINFO, 'replace this with your cacert.pem file path here');
curl_setopt($ch,CURLOPT_POSTFIELDS,$postvars);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);

echo $result;
?>
