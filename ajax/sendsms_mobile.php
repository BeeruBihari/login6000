<?php
include'../include/base.php';
$o__index = new index();

if (isset($_POST['mob']))
{
    $final = $_POST['mob'];
    $r = rand(1111, 9999);
    $message = urlencode("Forgot Password OTP is " . $r);
    $mobile_member = $_POST['mob'];
    $update_ans = $o__index->updateuserotp($r, $mobile_member);
    
    
    
   // echo 'http://sms.bulksmsserviceproviders.com/api/send_http.php?username=gorsys&password=9610003839&mobiles=' . $mobile_member . '&message=' . $message . '&sender=gorsys&route=B';
   // $ch = file_get_contents('http://sms.bulksmsserviceproviders.com/api/send_http.php?username=gorsys&password=9610003839&mobiles=' . $mobile_member . '&message=' . $message . '&sender=gorsys&route=B');


  $ch = curl_init('http://sms.bulksmsserviceproviders.com/api/send_http.php?username=gorsys&password=9610003839&mobiles=' . $mobile_member . '&message=' . $message . '&sender=gorsys&route=B');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);

      echo $update_ans;

}


if (isset($_POST['sms_mob']))
{
    $final = $_POST['sms_mob'];
    $r = rand(1111, 9999);
    $message = urlencode("Forgot Password OTP is " . $r);
    $mobile_member = $_POST['sms_mob'];
    
    
    
    $search_mobile = $o__index->getmobilebbyid($mobile_member);
    if($search_mobile > 0)
    {
         $update_otp = $o__index->updatemobotp($r,$mobile_member);
         echo 1;
    }
    else
    {
        $record= array(
            'mobile' => $mobile_number,
            'otp' => $r,
            'date' => date('Y-m-d'),
            'time' => date('h:i:s'),
            );
        $create_otp = $o__index->createotpgenerate($r,$mobile_member);
        if($create_otp > 0)
        {
            echo 1;
        }
        else
        {
            echo 0;
        }
        
    }
    
   // echo 'http://sms.bulksmsserviceproviders.com/api/send_http.php?username=gorsys&password=9610003839&mobiles=' . $mobile_member . '&message=' . $message . '&sender=gorsys&route=B';
   // $ch = file_get_contents('http://sms.bulksmsserviceproviders.com/api/send_http.php?username=gorsys&password=9610003839&mobiles=' . $mobile_member . '&message=' . $message . '&sender=gorsys&route=B');


  $ch = curl_init('http://sms.bulksmsserviceproviders.com/api/send_http.php?username=gorsys&password=9610003839&mobiles=' . $mobile_member . '&message=' . $message . '&sender=gorsys&route=B');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);

      echo $update_ans;

}




if (isset($_POST['email']))
{
    $final = $_POST['email'];
    $r = rand(1111, 9999);
    
    $mobile_member = $_POST['email'];
    
    
    
    $search_mobile = $o__index->getmobilebbyid($mobile_member);
    if($search_mobile > 0)
    {
         $update_otp = $o__index->updatemobotp($r,$mobile_member);
         
         $message='
         <html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>OTP</title>
<style>
@import url(http://fonts.googleapis.com/css?family=Roboto:400,700);
body {
    background: url(../img/bg.jpg);
}
.btn-custom {
    color: #bdc3c7;
    font-size: 18px;
    border: 1px solid #bdc3c7;
}
.btn-custom:hover {
    color: #ffffff;
    border: 1px solid #ffffff;
}
#pricing-table {
    padding-top: 50px;
}
#pricing-table .pricing {
    marign: 0;
    padding: 0;
    font-family: "Robot", sans-serif;
}
#pricing-table .pricing .pricing-table {
    padding-bottom: 30px;
}
#pricing-table .pricing .pricing-table .pricing-header {
    position: relative;
    background: #34495e;
    padding: 22px 22px;
    text-align: center;
    border-top-right-radius: 4px;
    border-top-left-radius: 4px;
}
#pricing-table .pricing .pricing-table .pricing-header .pricing-title {
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 24px;
    text-align: center;
    font-weight: 700;
}
#pricing-table .pricing .pricing-table .pricing-header .pricing-rate {
    font-size: 70px;
    font-weight: 700;
    color: #ffffff;
    position: relative;
    text-align: center;
}
#pricing-table .pricing .pricing-table .pricing-header .pricing-rate sup {
    font-size: 24px;
    position: relative;
    top: -30px;
    color: #bdc3c7;
}
#pricing-table .pricing .pricing-table .pricing-header .pricing-rate span {
    font-size: 16px;
    color: #bdc3c7;
    text-transform: uppercase;
}
#pricing-table .pricing .pricing-list {
    padding: 20px 0 40px 0;
    background: #ffffff;
    border: 1px solid #e3e3e3;
}
#pricing-table .pricing .pricing-list ul {
    padding: 0px;
    display: table;
    margin: 0px auto;
}
#pricing-table .pricing .pricing-list ul li {
    list-style: none;
    border-bottom: 1px solid #EAECEB;
    color: #bdc3c7;
    font-size: 16px;
    line-height: 42px;
}
#pricing-table .pricing .pricing-list ul li:last-child {
    border: none;
}
#pricing-table .pricing .pricing-list ul li i {
    margin-right: 12px;
    color: #bdc3c7;
}
#pricing-table .pricing .pricing-list ul li span {
    color: #34495e;
}
</style>
</head>
<body style="">

<section id="pricing-table">
<div class="container">
<div class="row">
<div class="pricing">
<div style="width:33.33%;">

</div>
<div style="width:33.33%;margin:auto;">
<div class="pricing-table">
<div class="pricing-header">

<p class="pricing-rate"><img src="logopnb.png" height="200px" width="200px"/></p>
<p class="pricing-title">Welcome to KandoiPower</p>
</div>
<div class="pricing-list">
<h4 style="text-align:center;">Your OTP is '.$r.'</h4>
</div>
</div>
</div>
<div style="width:33.33%;">

</div>
</div>
</div>
</div>
</section>


</body></html>
         ';
         
         
         $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <verify@kandoipower.com>' . "\r\n";


mail($mobile_member,'KandoiPower - Email Verification',$message,$headers);
         
         echo 1;
    }
    else
    {
        $record= array(
            'email' => $mobile_number,
            'otp' => $r,
            'date' => date('Y-m-d'),
            'time' => date('h:i:s'),
            );
        $create_otp = $o__index->createotpgenerate($r,$mobile_member);
        if($create_otp > 0)
        {
            
             $message='
         <html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>OTP</title>
<style>
@import url(http://fonts.googleapis.com/css?family=Roboto:400,700);
body {
    background: url(../img/bg.jpg);
}
.btn-custom {
    color: #bdc3c7;
    font-size: 18px;
    border: 1px solid #bdc3c7;
}
.btn-custom:hover {
    color: #ffffff;
    border: 1px solid #ffffff;
}
#pricing-table {
    padding-top: 50px;
}
#pricing-table .pricing {
    marign: 0;
    padding: 0;
    font-family: "Robot", sans-serif;
}
#pricing-table .pricing .pricing-table {
    padding-bottom: 30px;
}
#pricing-table .pricing .pricing-table .pricing-header {
    position: relative;
    background: #34495e;
    padding: 22px 22px;
    text-align: center;
    border-top-right-radius: 4px;
    border-top-left-radius: 4px;
}
#pricing-table .pricing .pricing-table .pricing-header .pricing-title {
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 24px;
    text-align: center;
    font-weight: 700;
}
#pricing-table .pricing .pricing-table .pricing-header .pricing-rate {
    font-size: 70px;
    font-weight: 700;
    color: #ffffff;
    position: relative;
    text-align: center;
}
#pricing-table .pricing .pricing-table .pricing-header .pricing-rate sup {
    font-size: 24px;
    position: relative;
    top: -30px;
    color: #bdc3c7;
}
#pricing-table .pricing .pricing-table .pricing-header .pricing-rate span {
    font-size: 16px;
    color: #bdc3c7;
    text-transform: uppercase;
}
#pricing-table .pricing .pricing-list {
    padding: 20px 0 40px 0;
    background: #ffffff;
    border: 1px solid #e3e3e3;
}
#pricing-table .pricing .pricing-list ul {
    padding: 0px;
    display: table;
    margin: 0px auto;
}
#pricing-table .pricing .pricing-list ul li {
    list-style: none;
    border-bottom: 1px solid #EAECEB;
    color: #bdc3c7;
    font-size: 16px;
    line-height: 42px;
}
#pricing-table .pricing .pricing-list ul li:last-child {
    border: none;
}
#pricing-table .pricing .pricing-list ul li i {
    margin-right: 12px;
    color: #bdc3c7;
}
#pricing-table .pricing .pricing-list ul li span {
    color: #34495e;
}
</style>
</head>
<body style="">

<section id="pricing-table">
<div class="container">
<div class="row">
<div class="pricing">
<div style="width:33.33%;">

</div>
<div style="width:33.33%;margin:auto;">
<div class="pricing-table">
<div class="pricing-header">

<p class="pricing-rate"><img src="logopnb.png" height="200px" width="200px"/></p>
<p class="pricing-title">Welcome to KandoiPower</p>
</div>
<div class="pricing-list">
<h4 style="text-align:center;">Your OTP is '.$r.'</h4>
</div>
</div>
</div>
<div style="width:33.33%;">

</div>
</div>
</div>
</div>
</section>


</body></html>
         ';
         
         
         $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <verify@kandoipower.com>' . "\r\n";


mail($mobile_member,'KandoiPower - Email Verification',$message,$headers);
            
            
            
            echo 1;
        }
        else
        {
            echo 0;
        }
        
    }
    
      echo $update_ans;

}






