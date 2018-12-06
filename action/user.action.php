    <?php
    $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
$o__user = new user();
$getgroup=$o__user->getgroup($_SESSION['b2b_kpr_rech_id']);
$getgpname=$o__user->getOneuser($_GET['id']);
   // $o__recharge= new recharge();
   //print_r($getgpname);exit;
   
if(TYPE == 'add_user')
{
    
        
    
    if(isset($_POST['useradd']))
    {
       // print_r($_POST);
        $record = $o__user->getOneuser($_GET['id']);
        if(isset($_FILES['adhaar_card']['name'][0]) && !empty($_FILES['adhaar_card']['name'][0])) {
            $path = FAPathupload . "/b2b_user_adhaar/";
//echo $path;
            $adhaar_card = UploadFile_adhaar($_FILES['adhaar_card'], $path);
        }
        else
        {
            $adhaar_card= $record->adhaar_card;
        }
        if(isset($_FILES['logo']['name'][0]) && !empty($_FILES['logo']['name'][0])) {
            $path = FAPathupload . "/b2b_user_logo/";
//echo $path;
            $logo = UploadFile_adhaar($_FILES['logo'], $path);
        }
        else
        {
            $logo= $record->logo;
        }
        if(isset($_FILES['pan_card']['name'][0]) && !empty($_FILES['pan_card']['name'][0])) {
            $path = FAPathupload . "/b2b_user_pan/";

            $pan_card = UploadFile_pan($_FILES['pan_card'], $path);
        }
        else
        {
            $pan_card= $record->pan_card;
        }
        if(!empty($_POST['status'])){ $status=$_POST['status']; }else{ $status='0'; }
        $custom_commission='';
        if($_POST['custom_commission']){ $custom_commission='1'; }else{ $custom_commission='2'; }
        
       switch ($_POST['user_type']) 
       {
           
            case 1:
                   //$md = $o__user->b2buplevel($_SESSION['b2b_kpr_rech_id']);
                    //$adminid=$md->uplevel_id;
                    if($_SESSION['b2b_kpr_rech_user_type'] == '4'){
                        $adminid=$_SESSION['b2b_kpr_rech_id'];
                    }else{
                        $adminid=$_SESSION['b2b_kpr_rech_admin_id'];
                    }
                    
                       break;
                
            case 2:
                    $md = $o__user->b2buplevel($_SESSION['b2b_kpr_rech_id']);
                    //$md = $o__user->b2buplevel($d->uplevel_id);
                   // $a = $o__user->b2buplevel($md->uplevel_id);
                    $adminid=$md->admin_id;
                    break;
            case 3:
                    $r = $o__user->b2buplevel($_SESSION['b2b_kpr_rech_id']);
                    // $d = $o__user->b2buplevel($r->uplevel_id);
                    // $md = $o__user->b2buplevel($d->uplevel_id);
                    // $a = $o__user->b2buplevel($md->uplevel_id);
                    $adminid= $_SESSION['b2b_kpr_rech_admin_id'];
                    //echo $_SESSION['b2b_kpr_rech_admin_id'];
                       break;
                
            case 4:
                        $wla = $o__user->b2buplevel($_SESSION['b2b_kpr_rech_id']);
                        $adminid=$wla->admin_id;
                        break;

            case 5:
                $adminid=$_SESSION['b2b_kpr_rech_id'];
            case 6:
                if($_SESSION['b2b_kpr_rech_user_type'] == 4 || $_SESSION['b2b_kpr_rech_user_type'] == 0){
                    $adminid=$_SESSION['b2b_kpr_rech_id'];
                }
                else{
                    $adminid=$_SESSION['b2b_kpr_rech_admin_id'];
                }
                
        }
        
        $records= array(

            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'cmpy_name' => $_POST['cmpy_name'],
            'mob_no' => $_POST['mob_no'],
            'phone_no' => $_POST['phone_no'],
            'email' => $_POST['email'],
            'website' => $_POST['website'],
            'group_name' => $_POST['comm_group'],
            'adhaar_card' => $adhaar_card,
            'pan_card' => $pan_card,
            'logo' => $logo,
            'status' => $status,
            'user_type' => $_POST['user_type'],
            'full_rights' => $_POST['full_rights'],
            'group_name' => $_POST['group_type'],
            'username' => $_POST['username'],
			'show_password' => $_POST['password'],
           // 'custom_commission' => $custom_commission,
            'mpos_status' => $_POST['mpos_status'],
            

        );
        if(!empty($_POST['password'])){
            $records['password'] = md5($_POST['password']);
        }
     //  print_r($records); exit();
        if(empty($_GET['id']))
        {
//            if($_POST['user_type']=='4' && ($_SESSION['b2b_kpr_rech_user_type']==))
//            {
//                
//            }
            
            $rr="";
            $max = 1000;
            $digits = 8;
            $products = $o__user->getallorders();
            $power = pow(10, $digits);
            foreach($products as $prods):
                $num = str_pad(mt_rand(0, $power), $digits, "0", STR_PAD_LEFT);
                if (!in_array($num, $prods['unique_id']))
                {
                    //$index->update_ibid($num,$prods['id']);
                    $rr=$num;
                }
            endforeach;
            
			if($_SESSION['b2b_kpr_rech_user_type'] == 4 || $_SESSION['b2b_kpr_rech_user_type'] == 0){
				$getapiuser = $_SESSION['b2b_kpr_rech_id'];
			}
			else{
				$getapiuser = $_SESSION['b2b_kpr_rech_admin_id'];
			}
			$smsapi = $o__user->getOnesmsapi($_SESSION['b2b_kpr_rech_admin_id']);
			$mssg = $smsapi->welcome_msg.' Usernmae:'.$_POST['username'].' Password :'.$_POST['password'];
			$url = $smsapi->url;
			$data_user = $url.'&'.$smsapi->mobile_par.'='.$_POST['mob_no'].'&'.$smsapi->msg_par.'='.$mssg;
            //$msg1_user = "Welcome to KP B2B Portal Your Username is " . $_POST['username'] . " and their password is " . $_POST['password'];
            
			//$data_user = 'http://sms.bulksmsserviceproviders.com/api/send_http.php?username=gorsys&password=9610003839&mobiles=' . $_POST['mob_no'] . '&message=' . urlencode($msg1_user) . '&sender=gorsys&route=B';
           // print_r($smsapi);
			//echo $data_user.$_SESSION['b2b_kpr_rech_admin_id'];
			//$d1_user = file_get_contents($data_user);
			ini_set("allow_url_fopen", 1);
                                                $ch = curl_init();
                                            curl_setopt($ch, CURLOPT_URL, $data_user);
                                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                            $d1_user = curl_exec($ch);
                                            curl_close($ch);
			 $records_sms= array(
			 'admin_id'=>$_SESSION['b2b_kpr_rech_admin_id'],
			 'api_id'=>$smsapi->id,
			 'msg'=>$mssg,
			 'mobile'=>$_POST['mob_no'],
			 'date' => date('Y-m-d'),
             'time' => date('h:i:s'),
			 'response'=>$d1_user
			 );
			 
			$add_user=$o__user->Send_sms_insert($records_sms);
            $records['uplevel_id'] = $_SESSION['b2b_kpr_rech_id'];
            $records['admin_id'] = $adminid;
            $records['unique_id'] = $rr;
           // $records['group_name'] = '1';
            $records['date'] = date('Y-m-d');
            $records['time'] = date('h:i:s');
            //print_r($records); exit();

            $add_user=$o__user->create_b2b_users($records);

            if($_POST['user_type']=='4')
            {

                
                
                
                    $create_query='CREATE TABLE IF NOT EXISTS b2b_wl_operator_'.$rr.' LIKE api_operator';
                    //echo $create_query; exit();
                    $o__data = mysqli_query($con, $create_query);
                    if($o__data)
                    {
                        $create_query='INSERT INTO b2b_wl_operator_'.$rr.' SELECT * from api_operator';
                        $o__data = mysqli_query($con, $create_query);
                    }
                
                
                //exit();


            }
            $logoemail="";
            if($getdata->logo){$logoemail =  FAUrlupload.'/b2b_user_logo/'.$getdata->logo;}else{ $logoemail = Fimages.'/logopnb.png';}
            
            $message='
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Welocme to PAYBAY</title>
        <meta name="viewport" content="width=device-width" />
       <style type="text/css">
            @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
                body[yahoo] .buttonwrapper { background-color: transparent !important; }
                body[yahoo] .button { padding: 0 !important; }
                body[yahoo] .button a { background-color: #1bbae1; padding: 15px 25px !important; }
            }

            @media only screen and (min-device-width: 601px) {
                .content { width: 600px !important; }
                .col387 { width: 387px !important; }
            }
        </style>
    </head>
    <body bgcolor="#ededed" style="margin: 0; padding: 0;" yahoo="fix">
        <!--[if (gte mso 9)|(IE)]>
        <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td>
        <![endif]-->
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px;" class="content">
            <tr>
                <td style="padding: 15px 10px 15px 10px;">
                    
                </td>
            </tr>
            
			<tr style="border-top: 4px solid #dadada;">
                <td align="left" bgcolor="#fff" style="padding: 30px 35px 30px 35px;">
                    <h2>PAYBAY</h2>
                </td>
            </tr>
			<tr>
                <td  bgcolor="#f7f7f7" style="padding: 35px 35px 20px 35px;color: #555555c7; font-family: Arial, sans-serif;font-size:14px">
                   <span style="text-align:left;color:#000000c2;font-size:30px;">Welcome To PAYBAY</span><br><br>
                    
					<span style="padding-top:0px">Congratulations! '.$_POST['username'].',  for joining PAYBAY as a business partner. Here is some important information about your new Account. Please save this email so you can refer to it later. </span>
                </td>
            </tr>
			
           <tr>
				<td align="left" bgcolor="#f7f7f7" style="padding: 0px 35px 20px 35px; color: #000; font-family: Arial, sans-serif; font-size: 12px; line-height: 20px; border-bottom: 1px solid #f6f6f6;font-weight:400">
					<span style="text-align:left;">YOUR LOGIN EMAIL ADDRESS:</span><br>
					Username is '.$_POST['username'].'<br>
					Password is '.$_POST['password'].'
	            </td>
			</tr>
            
           
            
            
        </table>
        <!--[if (gte mso 9)|(IE)]>
                </td>
            </tr>
        </table>
        <![endif]-->
    </body>
</html>';



//<img src="'.$logoemail.'" alt="Logo" width="152" height="152" style="display:block;" />

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
            $headers .= 'From: <b2b@paybay.in>' . "\r\n";
            //$headers .= 'Cc: myboss@teleqwik.com' . "\r\n";

            mail($_POST['email'],'Welcome to PAYBAY',$message,$headers);

           // echo $add_user; exit();
                flash('add_user', 'Successfully User Added', 'alert alert-success');
                $master->redirect('index.php?action=view_user');

        }
        else{

            if($_POST['custom_commission']=='1')
            {

                $id_branch = clearInput($_GET['id']);
                $as__records = $o__user->getOneuser($id_branch);
                $getassignapi = $o__user->getassignapi($id_branch);

                //print_r($getassignapi); exit();
                foreach ($getassignapi as $api):
                if($api['api_id']=='1')
                {
                    $create_query='CREATE TABLE IF NOT EXISTS b2b_user_rech_'.$as__records->unique_id.' LIKE api_operator';
                    //echo $create_query; exit();
                    $o__data = mysqli_query($con, $create_query);
                    if($o__data)
                    {
                        $create_query='INSERT INTO b2b_user_rech_'.$as__records->unique_id.' SELECT * from api_operator';
                        $o__data = mysqli_query($con, $create_query);
                    }
                }
                endforeach;
                //exit();


            }
            else
            {

            }
            if($_GET['id'] == $_SESSION['b2b_kpr_rech_id']){
            $records['about_us'] = $_POST['about_us'];
            $records['t_c'] = $_POST['t_c'];
            $records['shipping_policy'] = $_POST['shipping_policy'];
            $records['refund_policy'] = $_POST['refund_policy'];
            $records['privacy_policy'] = $_POST['privacy_policy'];
            $records['disclaimer'] = $_POST['disclaimer'];
            $records['tag_line'] = $_POST['tag_line'];
            $records['fb_link'] = $_POST['fb_link'];
            $records['gp_link'] = $_POST['gp_link'];
            $records['yt_link'] = $_POST['yt_link'];
            $records['tw_link'] = $_POST['tw_link'];
            $records['pt_link'] = $_POST['pt_link'];
            }
            
            $add_user=$o__user->update_b2b_users($records,$_GET['id']);
            flash('add_user', 'Successfully Updated User Data', 'alert alert-success');
            $master->redirect('index.php?action=view_user');
        }

    }
    
if(isset($_POST['addblncbtn'])){
    $b2b_money_requests = new money_request();
    $bnc = $_POST['addblnc'];
    $data_blnc = $o__user->getOneuser($_SESSION['b2b_kpr_rech_id']);
    $ttb = $data_blnc->balance + $bnc;
     $records= array('balance'=>$ttb);
     
     $recordss =array(
                    'b2b_user_id' => $_SESSION['b2b_kpr_rech_id'],
                    'admin_id' => $_SESSION['b2b_kpr_rech_admin_id'],
                    'uplevel_id' => $_SESSION['b2b_kpr_rech_uplevel_id'],
                    'current_balance' =>$data_blnc->balance,
					'amount' =>$bnc,
					'rtype' =>'Money Add',
                    'add_amount' =>$amt_uid[0],
                    'type' =>'Money Add',
                    'c_status' =>'credited',
                    'status' =>1,
                    'final_balance' =>$ttb,
					
                    'date' => date('Y-m-d'),
                    'time' => date('h:i:s'),
        
                );
     $add_histry=$b2b_money_requests->insert_b2b_app_all_trans_hist($recordss);
    $add_user=$o__user->update_b2b_users($records,$_GET['id']);
    flash('add_bncl', 'Successfully Updated Balance', 'alert alert-success');
            $master->redirect('index.php?action=add_user&id='.$_SESSION['b2b_kpr_rech_id']);
}
//print_r($getgpname);exit;
    if (!is_empty($_GET['id'])) {
        $id_branch = $_GET['id'];
        if (!filter_var($id_branch, FILTER_VALIDATE_INT)) {
            $_SESSION['error_msg'] = "Invalid operation";
            $master->redirect('index.php?action=view_user');
        }

            $as__records = $o__user->getOneuser($id_branch);

         //print_r($as__records); exit();
        if ($as__records) {

            $ss__id = $as__records->id;
            $ss__firstname = $as__records->firstname;
            $ss__lastname = $as__records->lastname;
            $ss__cmpy_name = $as__records->cmpy_name;
            $ss__mob_no = $as__records->mob_no;
            $ss__phone_no = $as__records->phone_no;
            $ss__email = $as__records->email;
            $ss__adhaar_card = $as__records->adhaar_card;
            $ss__logo = $as__records->logo;
            $ss__pan_card = $as__records->pan_card;
            $ss__website = $as__records->website;
            $ss__user_type = $as__records->user_type;
            $ss__username = $as__records->username;
            $ss__status = $as__records->status;
            $ss__custom_commission = $as__records->custom_commission;
            $ss__mpos_status = $as__records->mpos_status;
            if($_GET['id'] == $_SESSION['b2b_kpr_rech_id']){
            $ss__about_us = $as__records->about_us;
            $ss__t_c = $as__records->t_c;
            $ss__shipping_policy = $as__records->shipping_policy;
            $ss__refund_policy = $as__records->refund_policy;
            $ss__privacy_policy = $as__records->privacy_policy;
            $ss__disclaimer = $as__records->disclaimer;
            $ss__tag_line = $as__records->tag_line;
            $ss__fb_link = $as__records->fb_link;
            $ss__gp_link = $as__records->gp_link;
            $ss__tw_link = $as__records->tw_link;
            $ss__yt_link = $as__records->yt_link;
            $ss__pt_link = $as__records->pt_link;
            $ss__group_name = $as__records->group_name;
            }

            //$ss__reference = $as__records->reference_id;
        } else {
            $_SESSION["error_msg"] = "Something is wrong";
            $master->redirect('index.php?action=view_user');
        }
    }


}
if(TYPE == 'view_user')
{
    if($_SESSION['b2b_kpr_rech_id']=='1'):
    $as_users_records = $o__user->getAll_b2b_users_admin();
    else:
    $as_users_records = $o__user->getAll_b2b_users();
    endif;
    //print_r($as); exit();

    $total = $o__user->total_record;
    // $as_users_records = array();
    // if (!empty($as[0])) {
    //     while ($as__record = mysqli_fetch_assoc($as[0])) {
    //         $as_users_records[] = $as__record;
    //     }
    // }
    if(isset($_POST['active']))
    {
        $o__user->update_status('1',$_POST['active']);
        flash('active_deactive', 'Successfully Updated User Status as <b>Active</b>', 'alert alert-success');
        $master->redirect('index.php?action=view_user');
    }
    if(isset($_POST['deactive']))
    {
        $o__user->update_status('0',$_POST['deactive']);
        flash('active_deactive', 'Successfully Updated User Status as <b>Deactive</b>', 'alert alert-success');
        $master->redirect('index.php?action=view_user');
    }
    
    
    //blance remove 
    
    if(isset($_POST['debit_blnc'])){
        $c_b = $_POST['blnc_curt'];
        $U_b =  $_POST['user_blnc'];
        $d_b = $_POST['blnc'];
        
        $final = $c_b - $d_b;
        $records_blnc= array(

            'balance' => $final);
        //    print_r($records_blnc);
        $add_user=$o__user->update_b2b_users($records_blnc,$U_b);

        $as__records_blc = $o__user->getOneuser($_SESSION['b2b_kpr_rech_id']);

        $currnt_blnc = $as__records_blc->balance;
        $update_blnc = $currnt_blnc + $d_b;
        $records_blnc1= array(

            'balance' => $update_blnc);
        $add_user_crnt =$o__user->update_b2b_users($records_blnc1,$as__records_blc->id);
        
        function random_num ($len)
            {
             $ch = "0123456789";
             $l = strlen ($ch) - 1;
             $str = "";
             for ($i=0; $i < $len; $i++)
             {
                 $x = rand (0, $l);
                 $str .= $ch[$x];
             }
             return $str;
            }
		rndid:
		$rid = random_num(10);	
		$con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");
		
		$sql3 = mysqli_query($con,"SELECT * FROM b2b_app_all_recharge_transaction_histories WHERE transaction_id = '".$rid."'");
        $n3 = mysqli_num_rows($sql3);
		if($n3 > 0){
			goto rndid;
        }
        
        
        $records_histry= array(

            
            'b2b_user_id'=>$U_b,
            'rtype'=>'DEBIT',
            'transaction_id'=>$rid,
            'amount'=>$d_b,
            'current_balance'=>$c_b,
            'total_balance'=>$final,
            'final_balance'=>$final,
            'date'=>date('Y-m-d'),
            'time'=>date('h:i:s'),
            'rech_user'=>1,
            'status'=>1,
            
            );
            
            
         //   print_r($records_histry);exit;
        $o__money_request = new money_request();
        
        $o__money_request->insert_b2b_app_all_trans_hist($records_histry);
        
        flash('debite', 'Amount Successfully Debited!!', 'alert alert-success');
        $master->redirect('index.php?action=view_user');
    }
    
}
if(TYPE=="add_money")
{
    $record = $o__user->getOneuser($_GET['aid']);
    if(isset($_POST['add_money']))
    {
        $records= array( 'balance' => $_POST['money']+$record->balance);

        $recordss =array(
                'user_id' => $_GET['aid'],
                'admin_id' => $_SESSION['b2b_kpr_rech_id'],
                'money' => $_POST['money'],
                'date' => date('Y-m-d'),
                'time' => date('h:i:s'),
                'status' => '1',
        );
        $o__user->update_b2b_users($records,$_GET['aid']);
        $o__user->create_b2b_add_money($recordss);
        flash('active_deactive', 'Successfully Updated User Balance of Rs. '.$_POST['money'], 'alert alert-success');
        $master->redirect('index.php?action=view_user');
    }
}
if(TYPE== "view_user_mob"){
    $data = $o__user->getallsignupuser();
}
?>