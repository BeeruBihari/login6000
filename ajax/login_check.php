<?php 

include '../include/base.php';
$o__index = new index();
 
                if(isset($_POST['mob'])){
                $mobno=$_POST['mob'];
                $pswd=md5($_POST['pswd']);
                 $r = rand(1111, 9999);
               
      $userotp = $o__index->getuseremailpwd($mobno,$pswd);    
      
      if($userotp->id != "")
      {
            $message = urlencode(" Password OTP is " . $r);
             $ch = curl_init('http://sms.bulksmsserviceproviders.com/api/send_http.php?username=gorsys&password=9610003839&mobiles=' . $mobno . '&message=' . $message . '&sender=gorsys&route=B');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
              $update_ans = $o__index->updateuserotpverify($r, $mobno);
        echo '1';
      }
 else 
     {
         echo '00';
      }
}

?>