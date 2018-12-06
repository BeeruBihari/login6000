

<!DOCTYPE html>
	<script src="<?php echo THEME_URI; ?>js/jquery-1.11.0.min.js"></script>
<script src="<?php echo THEME_URI; ?>js/custome.js"></script>
<?php $o__index = new index();

?>

<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo THEME_URI; ?>css/style3.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!-------------------- login model box-------------------->
<style>
	button.close_btn{
		top: -10px;
    right: -6px;
		
	}
</style>

<div class=""> 
			<div class="agileui-forms">
				<div class="">
				<div class="modal fade" id="myloginmodel" role="dialog">
   
	
       
		<div class="modal-body">
			<div class="main-agileinfo"> 
			<div class="agileui-forms">
			<button type="button" class="close close_btn" data-dismiss="modal">&times;</button>
				<div class="container-form">
				<form method="post" id="change_pwd">
				    <input type="hidden" name="mnon" class="mnon" value="" />
					<div class="form-item log-in"><!-- login form-->
						<div class="w3table agileinfo"> 
							<div class="w3table-cell"> 
								<div class="w3table-tophead">
									<h2 class="change_head">Sign in</h2>
								</div>
								<!-------------------- forgot password box-------------------->
								
                                <div  class="forgot_show" style="display:none;">

                                    <div class="fields-grid">
                                        <!--<div class="styled-input agile-styled-input-top group">
                                            <input type="text" name="mobile" class="inp1" required="">
                                             <span class="bar"></span>
                                            <label class="lbl1">Mobile No</label>
                                            <span></span>
                                        </div>-->

                                        <div class="group">
                                            <input type="text" class="inp1 ele1" id="mob_no_forgot" name="mobile"  autocomplete="off" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label class="lbl1">Mobile No.</label>
                                            

                                        </div>
                                           <div class="result_check"></div>
                                        <input type="button" class="otp_generate" value="Generate OTP" name="login" disabled style="    float: right;color:#fff;
    background: #00b9f5;">
                                    </div>

                                </div>
<!-------------------- otp show box-------------------->
 <div class="otp_show" style="display:none;">

                                    <div class="fields-grid">
                                        <!--<div class="styled-input agile-styled-input-top group">
                                            <input type="text" name="mobile" class="inp1" required="">
                                             <span class="bar"></span>
                                            <label class="lbl1">Mobile No</label>
                                            <span></span>
                                        </div>-->

                                        <div class="group">
                                            <input type="text" id="otp_no" class="inp1 ele1" name="mobile"  autocomplete="off" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label class="lbl1">Enter OTP</label>
                                            

                                        </div>
                                           <div class="result_otp_check"></div>
                                        <input type="button" class="otp_verify" value="Verify OTP" name="login" style="    float: right;
    background: #00b9f5;">
                                    </div>

                                </div>
<!-------------------- new password box-------------------->
 <div class="new_pwd" style="display:none;">

                                    <div class="fields-grid">
                                        <!--<div class="styled-input agile-styled-input-top group">
                                            <input type="text" name="mobile" class="inp1" required="">
                                             <span class="bar"></span>
                                            <label class="lbl1">Mobile No</label>
                                            <span></span>
                                        </div>-->

                                        <div class="group">
                                            <input type="password" id="enter_new_pwd" class="inp1 ele1" name="new_pwd"  autocomplete="off" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label class="lbl1">Enter New Password</label>
                                       </div>
                                       <div class="valid_pwd"></div>
                                        <input type="button" class="generate_pwd" value="Generate New Password" name="newpwd" style="    float: right;
    background: #00b9f5;">
                                    </div>

                                </div>
                                	</form>
                                	<!-------------------- sign in otp box-------------------->
                                	<form method="post">
 <div class="signin_otp_verify" style="display:none;">
<input type="hidden" name="mobno_verify" class="mobno_verify" value="" />
                                    <div class="fields-grid">
                                        <!--<div class="styled-input agile-styled-input-top group">
                                            <input type="text" name="mobile" class="inp1" required="">
                                             <span class="bar"></span>
                                            <label class="lbl1">Mobile No</label>
                                            <span></span>
                                        </div>-->

                                        <div class="group">
                                            <input type="text" maxlength="4" id="" class="inp1 ele1" name="new_pwd"  autocomplete="off" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label class="lbl1">Enter OTP</label>
                                       </div>
                                       <div class="valid_login_otp"></div>
                                        <input type="submit" class="" value="Verify" name="login" style="    float: right;
    background: #00b9f5;">
                                    </div>

                                </div>
                                </form>
<!-------------------- sign in box-------------------->

                                <form action="#" method="post" autocomplete="off" class="hide_forgot">
									<div class="fields-grid">
										<!--<div class="styled-input agile-styled-input-top group">
											<input type="text" name="mobile" class="inp1" required=""> 
											 <span class="bar"></span>
											<label class="lbl1">Mobile No</label>
											<span></span>
										</div>-->
										
										 <div class="group">
	                                            <input type="text" class="inp1 ele1" id="mobno" name="mobile"  autocomplete="off" required>
                                             <span class="highlight"></span>
                                             <span class="bar"></span>
                                              <label class="lbl1">Mobile No.</label>
                                          </div>
										
										<div class="group">
											<input type="Password" name="password" id="pswd" class="inp1" required="">
											<span class="bar"></span>
											<label class="lbl1">Password</label>
											<span></span>
										</div>
										 <div class="valid_login_cred"></div>
										<a style="cursor:pointer;" class="forgot_pwd">forgot password?</a>
										<input type="button" class="login_check" value="SIGN IN" name="login" style="    float: right;
    background: #00b9f5;color:#fff;border: 1px solid #fff;"> 
									</div>
									<div class="social-grids">
										<div class="social-text">
											<p>Or Sign in with</p>
										</div>
										<div class="social-icons">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-rss"></i></a></li>
											</ul>
										</div>
										<div class="clear"> </div>
									</div>

								</form>  
							</div>
						</div>
					</div>
					
				</div>
				<div class="container-info">
					<div class="info-w3lsitem">
					
					</div>
					<div class="info-w3lsitem">
						<div class="w3table">
							<div class="w3table-cell">
								<p> Dont have an account?</p>
								<?php $rcid = ($_GET['rcid']=="" ? '' : '&rcid='.$_GET['rcid'] ); ?>
								<div class="btn"><a href="index.php?action=register<?php echo $rcid; ?>" style="color:#fff;">Sign up</a></div>
							</div>
						</div>
					</div>
					<div class="clear"> </div>
				</div> 
			
				
			</div> 
		</div>	
		

		  
				</div>
			
			</div>
			</div>
		</div>	

<script  src="ajax/forgot.js"></script> 
<script  src="<?php echo THEME_URI; ?>js/jquery-1.12.3.min.js"></script> 
	


<!------------------------------ end login --------------------------------->


<!--for electricity----->
<div class="container">
  
 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pay Your Electricity Bill</h4>
        </div>
        <div class="modal-body">
           <div ng-app="">
  <div>
        <form action="#" method="post">
         <div class=" form-group maxl">
      <label class="radio inline"> 
        <input type="radio" name="ele_board" value="electricityboards" class="chng1 inp1" checked>
        <span> Electricity Boards </span> 
      </label>
    
</div>


       <div class="group">
	     <input type="text" class="inp1 ele1" name="state" data-toggle="dropdown" id="mob_cricle11" autocomplete="off" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">State</label>
      </div>
      
<div class="dropdown dropdown_ele1">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Andhra Pradesh">Andhra Pradesh</a>
      </li>
      <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Assam">Assam</a>
      </li>
     
      <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Bihar">Bihar</a>
      </li>
	  
	   <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Chhattisgarh">Chhattisgarh</a>
      </li>
	  
	   <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Gujarat">Gujarat</a>
      </li>
	  
	   <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Hariyana">Hariyana</a>
      </li>
	  
	   <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Jharkhand">Jharkhand</a>
      </li>
	  
	   <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Karnataka">Karnataka</a>
      </li>
	  
	   <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Kerala">Kerala</a>
      </li>
	  
	   <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Mathya Pradesh">Mathya Pradesh</a>
      </li>
	  
	   <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Maharastra">Maharastra</a>
      </li>
	  
	  <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Manipur">Manipur</a>
      </li>
	  
	   <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Meghalaya">Meghalaya</a>
      </li>
	  
	  <li>
        <a title="Select this card" class="list-group-item al3 h11" value="New Delhi">New Delhi</a>
      </li>
	  
	   <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Odisha">Odisha</a>
      </li>
	  
	  <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Punjab">Punjab</a>
      </li>
	  
	   <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Telangana">Telangana</a>
      </li>
	  
	  <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Uttar Pradesh">Uttar Pradesh</a>
      </li>
	  
	   <li>
        <a title="Select this card" class="list-group-item al3 h11" value="Uttarakhand">Uttarakhand</a>
      </li>
	  
	  <li>
        <a title="Select this card" class="list-group-item al3 h11" value="West Begal">West Begal</a>
      </li>
	  
	  
    </ul>
	
  </div>
  

   
	   
     
	  
	
	  
	<div class="ele2" style="display:none;">  
	   <div class="group">
	     <input type="text" class="inp1 ele22" name="electricity_board" data-toggle="dropdown" autocomplete="off" id="mob_cricle11" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Electricity Board</label>
      </div>
      
<div class="dropdown dropdown_ele2">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
          <?php foreach($eleboard as $ele): ?>
      <li>
        <a href="#" title="Select this card" class="list-group-item al4 h11">
           
            <?php echo $ele['OperatorDescritpion']; ?></a>
      </li>
      <?php endforeach; ?>
     
      
	  
	  
	  
    </ul>
	
  </div>
  
	  
	  <div class="group cust">
	     <input type="text" class="inp1" name="customer_no" autocomplete="off" required>
        <span class="highlight"></span>
       <span class="bar"></span>
       <label class="lbl1">Customer Number</label>
	 </div>
    </div>
	 

   
       
	    
	  
      <div class="_3BxH"><button class="_11kC  _15qf _2qE6" type="submit" name="electricity_bill">Proceed</button></div>
    </form>
  </div>
</div>
		 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>





<!-------- For MoBILE------>

<div class="container">
  
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Mobile Recharge or Bill Payment</h4>
        </div>
        <div class="modal-body">
           <div ng-app="">
  <div>
        <form action="#" method="post">
         <div class="maxl">
      <label class="radio inline"> 
        <input type="radio" name="prepost" value="prepaid" class="chng1"checked>
        <span> Prepaid </span> 
      </label>
     <label class="radio inline"> 
      <input type="radio" name="prepost" value="postpaid" class="chng">
      <span>Postpaid </span> 
     </label>
</div>
       
	  <div class="first123">
	   <div class="group">
	     <input type="text" class="inp1" name="mobile" autocomplete="off" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Mobile Number</label>
      </div>
      
      	
	   <div class="group">
	     <input type="text" class="inp1 mob_oper1" name="operator" data-toggle="dropdown" id="mob_opr11" autocomplete="off" required>
	     <input type="hidden" class="opcode_rec" name="opcode_rec" id="get_val1" value="">
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Operator</label>
      </div>
      
<div class="dropdown dropdown1">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     <?php foreach($operator as $op): ?>
      <li>
        <a href="#" title="Select this card" class="list-group-item al1 h11" alt="<?php echo $op['opcode']; ?>">
            
            <?php $img=($op['op_image']!="" ? THEME_URI.'img/dropdown/'.$op['op_image'] :  THEME_URI .'img/no-image.jpg'); ?>
            <img class="img1" src="<?php echo $img; ?>"><?php echo $op['OperatorDescritpion']; ?></a>
      </li>
      <?php endforeach; ?>
      
    </ul>
	
  </div>
  
	
  
  <div class="form-group pre_circle"  style="display:none;">
   <div class="group"  id="mob_cricle22">
	     <input type="text" class="inp1 fir2" name="circle" data-toggle="dropdown"  autocomplete="off" >
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Circle</label>
      </div>
      
      <div class="dropdown dropdown2">
           <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a  title="Select this card" name="get_val2" id="get_val2" class="list-group-item al2 h11" value="Andhra Pradesh">Andhra Pradesh</a>
         
         
         
         
         
         
         
         
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Assam">Assam</a>
      </li>
     
      <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Bihar">Bihar</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Chhattisgarh">Chhattisgarh</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Gujarat">Gujarat</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Hariyana">Hariyana</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Jharkhand">Jharkhand</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Karnataka">Karnataka</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Kerala">Kerala</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Mathya Pradesh">Mathya Pradesh</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Maharastra">Maharastra</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Manipur">Manipur</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Meghalaya">Meghalaya</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="New Delhi">New Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Odisha">Odisha</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Punjab">Punjab</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Telangana">Telangana</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Uttar Pradesh">Uttar Pradesh</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="Uttarakhand">Uttarakhand</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item al2 h11" value="West Begal">West Begal</a>
      </li>
	  
    </ul>
      </div>
      </div>
      
      
     
  
	
  
	  <div class="group">
	      <input type="text" class="inp1" name="amount" autocomplete="off" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Amount</label>
      </div>
	  
	 <div class="checkbox">
        <label>
            <input type="checkbox" name='fast_rec' value="fast_forward" id="chk11">Fast Forward
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
		
          </label>
        </div>
	  
      <div class="_3BxH"><button class="_11kC  _15qf _2qE6" id='proc' type="submit" name="mobile_recharge">Proceed To Recharge</button></div>
	  
	  <div class="_3BxH"><button class="_11kC  _15qf _2qE6" id="but11" style="display:none;">Recharge Now</button></div>
    </form>
  </div>
  
  <form action="#" method="post">
  <div class="second123" style="display:none;">
	   <div class="group">
	     <input type="text" class="inp1" name="mobile" autocomplete="off" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Mobile Number</label>
      </div>
	 
	 
	 
	 
	  <div class="group">
	     <input type="text" class="inp1 mob_fir1 mob_opr123" name="operator" data-toggle="dropdown" id="#" autocomplete="off" required>
	      <input type="hidden" class="opcode_mobile_post" name="opcode_mobile_post"  value="">
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Opertor</label>
      </div>
      
<div class="dropdown mob_dropdown1">
    
  <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     <?php foreach($operatorpost as $oppost): ?>
      <li>
        <a href="#" title="Select this card" class="list-group-item al21 h11" alt="<?php echo $oppost['opcode']; ?>">
            <?php $img=($oppost['op_image']!="" ? THEME_URI.'img/dropdown/'.$oppost['op_image'] :  THEME_URI .'img/no-image.jpg'); ?>
            <img class="img1" src="<?php echo $img; ?>"><?php echo $oppost['OperatorDescritpion']; ?></a>
      </li>
      <?php endforeach; ?>
      
    </ul>
	
  </div>
  
  

  
  
  
	
	  
	  <div class="form-group cricle123" style="display:none;">
	      
	      
	      <div class="group"  id="mob_cricle22">
	     <input type="text" class="inp1 mob_fir2" name="circle" data-toggle="dropdown"  autocomplete="off" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Circle</label>
      </div>
      
      <div class="dropdown mobile_dropdown123">
          <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a  title="Select this card" class="list-group-item al23 h11" value="Andhra Pradesh">Andhra Pradesh</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Assam">Assam</a>
      </li>
     
      <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Bihar">Bihar</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Chhattisgarh">Chhattisgarh</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Gujarat">Gujarat</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Hariyana">Hariyana</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Jharkhand">Jharkhand</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Karnataka">Karnataka</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Kerala">Kerala</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Mathya Pradesh">Mathya Pradesh</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Maharastra">Maharastra</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Manipur">Manipur</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Meghalaya">Meghalaya</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="New Delhi">New Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Odisha">Odisha</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Punjab">Punjab</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Telangana">Telangana</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Uttar Pradesh">Uttar Pradesh</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="Uttarakhand">Uttarakhand</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item al23 h11" value="West Begal">West Begal</a>
      </li>
	  
    </ul>
      </div>
      </div>
      
     
  
  
	    
     
	  
	  <div class="group">
	     <input type="text" class="inp1" name="amount" autocomplete="off"  required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Amount</label>
      </div>
	  
	 <div class="checkbox">
        <label class="fast_lbl">
            <input type="checkbox" name='fast_rec' value="fast_forward" id="chk11">Fast Forward
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
		
          </label>
        </div>
  
      <div class="_3BxH"><button class="_11kC  _15qf _2qE6" id='proc' type="submit" name="mobile_recharge">Proceed To Pay Bill</button></div>
	  
	  <div class="_3BxH"><button class="_11kC  _15qf _2qE6" id="but11" style="display:none;">Recharge Now</button></div>
	   </div>
	  </div>
    </form>
  </div>
  
  
  

		 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
  
</div>
</div>


<!------landline------>

<div class="container">
  
  

  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pay Your Landline</h4>
        </div>
        <div class="modal-body">
           <div ng-app="">
             <div>
           <form action="#" method="post" autocomplete="off">
               
                <div class="group">
                     <input type="hidden" class="opcode_landline" name="opcode_landline"  value="">
	     <input type="text" class="inp1 landline22" name="operator" data-toggle="dropdown" id="landline11" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Opertor</label>
      </div>
      
<div class="dropdown landline">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a href="#" title="Select this card" class="list-group-item al5 h11" alt="<?php echo $oplan['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/8.png">Aircel</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item al5 h11" alt="<?php echo $oplan['opcode']; ?>"><img  class="img1" src="<?php echo THEME_URI; ?>img/dropdown/14.jpg">Airtel</a>
      </li>
     
      <li>
        <a href="#" title="Select this card" class="list-group-item al5 h11" alt="<?php echo $oplan['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/13.jpg">BSNL</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al5 h11" alt="<?php echo $oplan['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/11.png">Idea</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al5 h11" alt="<?php echo $oplan['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/10.png">Jio</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al5 h11" alt="<?php echo $oplan['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/9.png">MTNL</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al5 h11" alt="<?php echo $oplan['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/1.png">MTS</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al5 h11" alt="<?php echo $oplan['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/12.png">Reliance GSM</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al5 h11" alt="<?php echo $oplan['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/12.png">Reliance Mobile</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al5 h11" alt="<?php echo $oplan['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/5.png">Tata DOCOMO</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al5 h11" alt="<?php echo $oplan['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/6.png">Tata Indicom</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item al5 h11" alt="<?php echo $oplan['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/3.png">Telenor</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al5 h11" alt="<?php echo $oplan['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/2.png">Vodafone</a>
      </li>
	  
    </ul>
	
  </div>
  

               
               
               
               
               
               
               
	        
	   <div class="landline123" style="display:none;">
	      <div class="group">
		  <input type="text" class="inp1" name="no_std_code"  required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Number With STD Code</label>
         </div>
		 <div class="group">
		   <input type="text" class="inp1" name="amount"  required style=" margin:30px 8px;">
          <span class="highlight"></span>
          <span class="bar"></span>
          <label class="lbl1">Amount</label>
         </div>
		 
		  <div class="checkbox">
        <label  class="fast_lbl">
            <input type="checkbox" name='fast_rec' value="fast_forward" id="chk11">Fast Forward
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
		
          </label>
        </div>
		
		
	  
	  <div class="_3BxH"><button class="_11kC  _15qf _2qE6" id="but12" style="display:none;" type="submit" name="landline_bill">Pay Bill Now</button></div>
		
	   </div>
			
           <div class="_3BxH"><button class="_11kC  _15qf _2qE6" id="but13" type="submit" name="landline_bill">Proceed</button></div>
		   
		   <div class="_2WAL"><!-- react-text: 1119 -->Your service provider will take two working days to consider bill paid in their accounts.<!-- /react-text --></div>
	  
        </form>
     </div>
   </div>
		 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!-------datacard------->

<div class="container">
  
 
  <!-- Modal -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Datacard Recharge or Bill Payment</h4>
        </div>
        <div class="modal-body">
           <div ng-app="">
  <div>
        <form action="#" method="post" autocomplete="off">
         <div class="maxl">
      <label class="radio inline"> 
        <input type="radio" name="prepost" value="prepaid" class="datacard_but1" checked>
        <span> Prepaid </span> 
      </label>
     <label class="radio inline"> 
      <input type="radio" name="prepost" value="postpaid" class="datacard_but11">
      <span>Postpaid </span> 
     </label>
</div>
       
	  <div class="fir1">
	   <div class="group">
	     <input type="text" class="inp1" name="datacard_no"  required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Datacard Number</label>
      </div>
      
      
      
        <div class="group">
	     <input type="text" class="inp1 datacard22" name="operator" data-toggle="dropdown" id="landline11" required>
	     <input type="hidden" class="opcode_datacard_pre" name="opcode_datacard_pre"  value="">
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Opertor</label>
      </div>
      
<div class="dropdown datacard_fir1">




   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">

       <?php foreach($datacardop as $dataop): ?>
           <li>
               <a href="#" title="Select this card" class="list-group-item al7 h11" alt="<?php echo $dataop['opcode']; ?>">
                   <?php $img=($dataop['op_image']!="" ? THEME_URI.'img/dropdown/'.$dataop['op_image'] :  THEME_URI .'img/no-image.jpg'); ?>
                   <img class="img1" src="<?php echo $img; ?>"><?php echo $dataop['OperatorDescritpion']; ?></a>
           </li>
       <?php endforeach; ?>



	  
    </ul>
	
  </div>
  

               
        

	   <div class="form-group datacard111" style="display:none;">
	   <div class="group"  id="mob_cricle22">
	     <input type="text" class="inp1 datacard1_fir2" name="circle" data-toggle="dropdown"  autocomplete="off" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Circle</label>
      </div>
      
      <div class="dropdown datacard_dropdown123">
          <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a  title="Select this card" class="list-group-item aldatacard h11" value="Andhra Pradesh">Andhra Pradesh</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Assam">Assam</a>
      </li>
     
      <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Bihar">Bihar</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Chhattisgarh">Chhattisgarh</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Gujarat">Gujarat</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Hariyana">Hariyana</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Jharkhand">Jharkhand</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Karnataka">Karnataka</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Kerala">Kerala</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Mathya Pradesh">Mathya Pradesh</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Maharastra">Maharastra</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Manipur">Manipur</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Meghalaya">Meghalaya</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="New Delhi">New Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Odisha">Odisha</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Punjab">Punjab</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Telangana">Telangana</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Uttar Pradesh">Uttar Pradesh</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="Uttarakhand">Uttarakhand</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard h11" value="West Begal">West Begal</a>
      </li>
	  
    </ul>
      </div>
      </div>
      
     
	  
	  <div class="group">
	    <input type="text" class="inp1" name="amount"  required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Amount</label>
      </div>
          <div class="_3BxH"><button class="_11kC  _15qf _2qE6" type="submit" name="datacard_rec">Proceed To Recharge</button></div>
	  </div>
        </form>
        
     
	  <form method="post" autocomplete="off">
	 <div class="sec1" style="display:none;">
	   <div class="group">
	     <input type="text" class="inp1" name="datacard_no"  required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Datacard Number</label>
      </div>
	  
	<div class="group">
	     <input type="text" class="inp1 datacard33" name="operator" data-toggle="dropdown" id="landline11" required>
	     <input type="hidden" class="opcode_datacard_post" name="opcode_datacard_post"  value="">
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Opertor</label>
      </div>
      
<div class="dropdown datacard_fir2">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">

       <?php foreach($datacardop as $dataop): ?>
           <li>
               <a href="#" title="Select this card" class="list-group-item al8 h11" alt="<?php echo $dataop['opcode']; ?>">
                   <?php $img=($dataop['op_image']!="" ? THEME_URI.'img/dropdown/'.$dataop['op_image'] :  THEME_URI .'img/no-image.jpg'); ?>
                   <img class="img1" src="<?php echo $img; ?>"><?php echo $dataop['OperatorDescritpion']; ?></a>
           </li>
       <?php endforeach; ?>


	  
    </ul>
	
  </div>
  

	  
	 
	  
	  <div class="form-group datacard_sec123" style="display:none;">
	      
	      
	      <div class="group"  id="mob_cricle22">
	     <input type="text" class="inp1 datacard_p_fir2" name="circle" data-toggle="dropdown"  autocomplete="off" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Circle</label>
      </div>
      
      <div class="dropdown datacard_p_dropdown123">
          <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a  title="Select this card" class="list-group-item aldatacard_p h11" value="Andhra Pradesh">Andhra Pradesh</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Assam">Assam</a>
      </li>
     
      <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Bihar">Bihar</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Chhattisgarh">Chhattisgarh</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Gujarat">Gujarat</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Hariyana">Hariyana</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Jharkhand">Jharkhand</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Karnataka">Karnataka</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Kerala">Kerala</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Mathya Pradesh">Mathya Pradesh</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Maharastra">Maharastra</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Manipur">Manipur</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Meghalaya">Meghalaya</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="New Delhi">New Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Odisha">Odisha</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Punjab">Punjab</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Telangana">Telangana</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Uttar Pradesh">Uttar Pradesh</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="Uttarakhand">Uttarakhand</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item aldatacard_p h11" value="West Begal">West Begal</a>
      </li>
	  
    </ul>
      </div>
      </div>
      
     
	  
	  <div class="group">
	    <input type="text" class="inp1" name="amount"  required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Amount</label>
      </div>
      
      <div class="_3BxH"><button class="_11kC  _15qf _2qE6" type="submit" name="datacard_rec">Proceed To Recharge</button></div>
	</div>
	  
	  
      
    </form>
  </div>
</div>
		 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!-------DTH ------------>

  <div class="container">
  
 

  <!-- Modal -->
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">DTH Recharge</h4>
        </div>
        <div class="modal-body">
           <div ng-app="">
             <div>
           <form action="#" method="post" autocomplete="off">
               
               <div class="group">
	     <input type="text" class="inp1 dth11" name="operator" data-toggle="dropdown" id="landline11" required>
	      <input type="hidden" class="opcode_rec_dth" name="opcode_rec_dth"  value="">
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Opertor</label>
      </div>
      
<div class="dropdown dth_fir2">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
     <?php foreach($dthop as $dop): ?>
           <li>
               <a href="#" title="Select this card" class="list-group-item al9 h11" alt="<?php echo $dop['opcode']; ?>">
                   <?php $img=($dop['op_image']!="" ? THEME_URI.'img/dropdown/'.$dop['op_image'] :  THEME_URI .'img/no-image.jpg'); ?>
                   <img class="img1" src="<?php echo $img; ?>"><?php echo $dop['OperatorDescritpion']; ?></a>
           </li>
       <?php endforeach; ?>
     
     
     
	  
    </ul>
	
  </div>
  

  
			 
			 
			 <div class="dth12" style="display:none;">
			   <div class="group">
			    <input type="text" class="inp1" name="smart_card_no"  required>
                <span class="highlight"></span>
                <span class="bar"></span>
                 <label class="lbl1">Smart Card Number</label>
              </div>
              
		 <div class="group">
		   <input type="text" class="inp1" name="amount"  required>
                <span class="highlight"></span>
                <span class="bar"></span>
                 <label class="lbl1">Amount</label>
         </div>
		 
		   <div class="checkbox">
           <label class="fast_lbl">
            <input type="checkbox" name='fast_rec' value="fast_forward" id="chk11">Fast Forward
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
		
          </label>
        </div>
		
		<div class="_3BxH"><button class="_11kC  _15qf _2qE6 dth_but" style="display:none" type="submit" name="dth_recharge">Recharge Now</button></div>
			 
			 </div>
			
           <div class="_3BxH"><button class="_11kC  _15qf _2qE6 dth_but1" type="submit" name="dth_recharge">Proceed To Recharge</button></div>
		  
        </form>
     </div>
   </div>
		 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<!--------------GAS---------------->


<div class="container">
  


  <!-- Modal -->
  <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pay Your Gas Bill</h4>
        </div>
        <div class="modal-body">
           <div ng-app="">
             <div>
           <form action="#" method="post" autocomplete="off">
               
                 <div class="group">
	     <input type="text" class="inp1 gas11" name="gas_provider" data-toggle="dropdown" id="landline11" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Gas Provider</label>
      </div>
      
<div class="dropdown gas_fir2">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a href="#" title="Select this card" class="list-group-item al10 h11">Adani Gas Limited</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item al10 h11">Indraprastha Gas Limited</a>
      </li>
     
      <li>
        <a href="#" title="Select this card" class="list-group-item al10 h11">Mahanagar Gas Mumbai</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al10 h11">siti Energy Ltd</a>
      </li>
	  
    </ul>
	
  </div>
  

  
  
	         
			 
			 <div class="gas12" style="display:none;">
			     <div class="group">
				   <input type="text" class="inp1" name="consumer_acc_no"  required>
                <span class="highlight"></span>
                <span class="bar"></span>
                 <label class="lbl1">Consumer Account Number</label>
                 </div>
				 
				 <div class="_3BxH"><button class="_11kC  _15qf _2qE6 gas_but" type="submit" name="gas_bill">Get Bill</button></div>
	       </div>
			
           <div class="_3BxH"><button class="_11kC  _15qf _2qE6 gas_but1" type="submit" name="gas_bill">Proceed</button></div>
		   
        </form>
     </div>
   </div>
		 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!-----------BroadBand--------->

<div class="container">
 

  <!-- Modal -->
  <div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pay Your Broadband Bill</h4>
        </div>
        <div class="modal-body">
           <div ng-app="">
             <div>
           <form action="#" method="post" autocomplete="off">
               
             <div class="group">
	     <input type="text" class="inp1 broadband11" name="operator" data-toggle="dropdown" id="landline11" required>
	     <input type="hidden" class="opcode_rec_broadband" name="opcode_rec_broadband"  value="">
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Opertor</label>
      </div>
      
<div class="dropdown broadband_fir2">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a href="#" title="Select this card" class="list-group-item al17 h11" alt="<?php echo $dop1['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/8.png">Aircel</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item al17 h11" alt="<?php echo $dop1['opcode']; ?>"><img  class="img1" src="<?php echo THEME_URI; ?>img/dropdown/14.jpg">Airtel</a>
      </li>
     
      <li>
        <a href="#" title="Select this card" class="list-group-item al17 h11" alt="<?php echo $dop1['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/13.jpg">BSNL</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al17 h11" alt="<?php echo $dop1['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/11.png">Idea</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al17 h11" alt="<?php echo $dop1['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/10.png">Jio</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al17 h11" alt="<?php echo $dop1['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/9.png">MTNL</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al17 h11" alt="<?php echo $dop1['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/1.png">MTS</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al17 h11" alt="<?php echo $dop1['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/12.png">Reliance GSM</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al17 h11" alt="<?php echo $dop1['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/12.png">Reliance Mobile</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al17 h11" alt="<?php echo $dop1['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/5.png">Tata DOCOMO</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al17 h11" alt="<?php echo $dop1['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/6.png">Tata Indicom</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item al17 h11" alt="<?php echo $dop1['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/3.png">Telenor</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al17 h11" alt="<?php echo $dop1['opcode']; ?>"><img class="img1" src="<?php echo THEME_URI; ?>img/dropdown/2.png">Vodafone</a>
      </li>
	  
    </ul>
	
  </div>
  

  
	         
			 
			 
			 <div class="broadband12" style="display:none;">
			    <div class="group">
				    <input type="text" class="inp1" name="account_no"  required>
                <span class="highlight"></span>
                <span class="bar"></span>
                 <label class="lbl1">Account Number</label>
                 </div>
				 
				 <div class="_3BxH"><button class="_11kC  _15qf _2qE6 broadband_but"  type="submit" name="broadband_bill">Get Bill</button></div>
			 </div>
			
           <div class="_3BxH"><button class="_11kC  _15qf _2qE6 broadband_but1"  type="submit" name="broadband_bill">Proceed</button></div>
		   
		   
        </form>
     </div>
   </div>
		 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<!------------water------------->

<div class="container">
  


  <!-- Modal -->
  <div class="modal fade" id="myModal8" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pay Your Water Bill</h4>
        </div>
        <div class="modal-body">
           <div ng-app="">
             <div>
           <form action="#" method="post" autocomplete="off">
               
                 <div class="group">
	     <input type="text" class="inp1 water11" name="board" data-toggle="dropdown" id="landline11" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Board</label>
      </div>
      
<div class="dropdown water_fir2">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a href="#" title="Select this card" class="list-group-item al19 h11">Banglor Water Supply and Sewerage Board</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item al19 h11">Delhi Jal Board</a>
      </li>
     
      <li>
        <a href="#" title="Select this card" class="list-group-item al19 h11">Uttarakhand Jal Sanathan</a>
      </li>
	  
	   
	  
    </ul>
	
  </div>
  

 
 
			 <div class="water12" style="display:none;">
			     <div class="group">
				    <input type="text" class="inp1" name="consumer_no"  required>
                 <span class="highlight"></span>
                 <span class="bar"></span>
                 <label class="lbl1">Consumer Number</label>
                 </div>
				 
				 <div class="_3BxH"><button class="_11kC  _15qf _2qE6 water_but"  type="submit" name="water_bill">Get Bill</button></div>
			 </div>
			
           <div class="_3BxH"><button class="_11kC  _15qf _2qE6 water_but1" type="submit" name="water_bill">Proceed</button></div>
		   
        </form>
     </div>
   </div>
		 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!-----insurance------>

<div class="container">
  


  <!-- Modal -->
  <div class="modal fade" id="myModal10" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pay Your Insurance Premium</h4>
        </div>
        <div class="modal-body">
           <div ng-app="">
             <div>
           <form action="#" method="post" autocomplete="off">
               
                 <div class="group">
	     <input type="text" class="inp1 insurance11" name="insurance_cmpy" data-toggle="dropdown" id="landline11" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Insurance Company</label>
      </div>
      
<div class="dropdown insurance_fir2">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a href="#" title="Select this card" class="list-group-item al20 h11">Aegon Life Insurance</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item al20 h11">Bharti AXA Life Insurance</a>
      </li>
     
      <li>
        <a href="#" title="Select this card" class="list-group-item al20 h11">Birla Sun Life Insurance</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al20 h11">Edelweiss Tokio Life Insurance</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al20 h11">Future Generali India General Insurance</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al20 h11">Future Generali India Life Insurance</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al20 h11">HDFC Ergo General Insurance</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al20 h11">ICICI Prudential Life Insurance</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al20 h11">IDBI Federal Life Insurance</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al20 h11">IndiaFirst Life Insurance</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al20 h11">MAX Life Insurance</a>
      </li>
	  
	  <li>
        <a href="#" title="Select this card" class="list-group-item al20 h11">Reliance General Insurance</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item al20 h11">Royal Sundaram General Insurance</a>
      </li>
	  
    </ul>
	
  </div>
  

  
	         
			 <div class="insurance12" style="display:none;">
			     <div class="group">
				    <input type="text" class="inp1" name="policy_no"  required>
                 <span class="highlight"></span>
                 <span class="bar"></span>
                 <label class="lbl1">Policy Number</label>
                 </div>
				 
				  <div class="_3BxH"><button class="_11kC  _15qf _2qE6 insurance_but" type="submit" name="get_premium">Get Premium</button></div>
			 </div>
			
           <div class="_3BxH"><button class="_11kC  _15qf _2qE6 insurance_but1" type="submit" name="get_premium">Proceed To Pay</button></div>
		   
		   <!--<div class="_2WAL">Your service provider will take two working days to consider bill paid in their accounts, the premium payment date will be effective immediately</div>-->
	  
        </form>
     </div>
   </div>
		 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>







<!-------------------------------------------------BUS--------------------------------------------------->
    <div class="container">
  
  <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_bus">	Bus</button>-->

  <!-- Modal -->
  <div class="modal fade" id="myModal_bus" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Book Bus Tickets</h4>
        </div>
        <div class="modal-body">
           <div ng-app="">
  <div>
        <form action="#" method="post">
         
     <div class="row">
    <div class="col-xs-12 col-sm-6">       
     <div class="row">
	     <div class="group">
	     <input type="text" class="inp1 bus11" name="bus_from" data-toggle="dropdown" id="" required>
	     <input type="hidden" class="opcode_bus_from" name="opcode_bus_from"  value="">
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">From</label>
      </div>
      
<div class="dropdown bus_drp">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a href="#" title="Select this card" class="list-group-item albus h11" alt="<?php echo $bus['opcode']; ?>">Delhi</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item albus h11" alt="<?php echo $bus['opcode']; ?>">Delhi</a>
      </li>
     
      <li>
        <a href="#" title="Select this card" class="list-group-item albus h11" alt="<?php echo $bus['opcode']; ?>">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item albus h11" alt="<?php echo $bus['opcode']; ?>">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item alflight h11" alt="<?php echo $bus['opcode']; ?>">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item alflight h11" alt="<?php echo $bus['opcode']; ?>">Delhi</a>
      </li>
	  
	  
    </ul>
	
    </div>
  </div>
 </div>  
  
  <div class="col-xs-12 col-sm-6"> 
  <div class="row">
	     <div class="group">
	     <input type="text" class="inp1 bus12" name="bus_to" data-toggle="dropdown" id="" required>
	      <input type="hidden" class="opcode_bus_to" name="opcode_bus_to"  value="">
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">To</label>
      </div>
      
<div class="dropdown bus_drp2">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a href="#" title="Select this card" class="list-group-item albus2 h11" alt="<?php echo $bus_to['opcode']; ?>">Delhi</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item albus2 h11" alt="<?php echo $bus_to['opcode']; ?>">Delhi</a>
      </li>
     
      <li>
        <a href="#" title="Select this card" class="list-group-item albus2 h11" alt="<?php echo $bus_to['opcode']; ?>">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item albus2 h11" alt="<?php echo $bus_to['opcode']; ?>">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item albus2 h11" alt="<?php echo $bus_to['opcode']; ?>">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item albus2 h11" alt="<?php echo $bus_to['opcode']; ?>">Delhi</a>
      </li>
	  
	  
    </ul>
	
    </div>
  </div>
 </div>
 </div> 
	 
	 <div class="row">
	   <div class="col-xs-12 col-sm-5">
	      
          <label class="lbl1" style="color: #00b9f5;margin-left: 17px;">Date Of Journey</label><br>
     
           <div class="group">
				<input type="date" name="departure1" id="departure1" class="inp1"   required>
                <span class="highlight"></span>
                <span class="bar"></span>
            
           </div>
        </div>
     
	   <div class="col-xs-6 col-sm-2">
	      <button type="button" class="btn date_dis11 today"  style="width: 100%;height: 54px;margin-top: 23px;">Today</button>
	   </div>
	    <div class="col-xs-6 col-sm-3">
	      <button type="button" class="btn today" style="width: 100%;height: 54px;margin-top: 23px;">Tomorrow</button>
	   </div>
	  </div>
	 </div>
	 
      <div class="_3BxH"><button class="_11kC  _15qf _2qE6">Search</button></div>
    </form>
  </div>
</div>
		 
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
      </div>
      
    </div>
  </div>
  


<style>
    .today
    {
        width: 100%;
    height: 54px;
    background: #fff;
    border: 1px solid #00b9f5;
    color: #00b9f5;
    font-size: 15px;
    }
    .today:hover
    {
        width: 100%;
    height: 54px;
    background: #fff;
    border: 1px solid #00b9f5;
    color: #00b9f5;
    font-size: 15px;
    }
     .today:active
    {
        width: 100%;
    height: 54px;
    background: #fff;
    border: 1px solid #00b9f5;
    color: #00b9f5;
    font-size: 15px;
    }
</style>

<!--------------------------------------------end BUS-------------------------------------------------->






<!--------------------------------------------flight----------------------------------------------------->

<div class="container">
  
  <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_bus">	Bus</button>-->

  <!-- Modal -->
  <div class="modal fade" id="myModal_flight" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding: 5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-size:27px;">Book Flight Tickets</h4>
        </div>
        <div class="modal-body">
           <div ng-app="">
  <div>
        <form action="#" method="post">
     
     
        <div class="maxl" style="margin-top:1px;">
      <label class="radio inline"> 
        <input type="radio" name="flight" value="one_way" class="flight_radio" checked>
        <span> One Way </span> 
      </label>
     <label class="radio inline"> 
      <input type="radio" name="flight" value="round_trip" class="flight_radio1">
      <span>Round Trip </span> 
     </label>
</div>

<div class="one_way_flight">
  <div class="row" style="margin-top:-30px;">
    <div class="col-xs-12 col-sm-6">       
     <div class="row">
	     <div class="group">
	     <input type="text" class="inp1 flight11" name="flight_from" data-toggle="dropdown" id="" required>
	     <input type="hidden" class="opcode_flight_from" name="opcode_flight_from"  value="">
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">From</label>
      </div>
      
<div class="dropdown flight_drp">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight h11" alt="<?php echo $flight['opcode']; ?>">Delhi</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight h11" alt="<?php echo $flight['opcode']; ?>">Delhi</a>
      </li>
     
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight h11" alt="<?php echo $flight['opcode']; ?>">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item alflight h11" alt="<?php echo $flight['opcode']; ?>">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item alflight h11" alt="<?php echo $flight['opcode']; ?>">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item alflight h11" alt="<?php echo $flight['opcode']; ?>">Delhi</a>
      </li>
	  
	  
    </ul>
	
    </div>
  </div>
 </div>  
  
  <div class="col-xs-12 col-sm-6"> 
  <div class="row">
	     <div class="group">
	     <input type="text" class="inp1 flight12" name="flight_to" data-toggle="dropdown" id="" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">To</label>
      </div>
      
<div class="dropdown flight_drp2">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight2 h11">Delhi</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight2 h11">Delhi</a>
      </li>
     
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight2 h11">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item alflight2 h11">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item alflight2 h11">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item alflight2 h11">Delhi</a>
      </li>
	  
	  
    </ul>
	
    </div>
  </div>
 </div>
 </div>  
  
  
        <div class="row">
             <div class="col-xs-12 col-sm-6">
          <label class="lbl1" style="color: #00b9f5;margin-left: 17px;margin-top:-11px;">Departure</label><br>
     
  
  
    
           <div class="group">
				<input type="date" name="departure1" id="departure1" class="inp1"  style="width:100%;margin-top: -7px;margin-left:-2px;" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                
        </div>   
   </div>
   
   
   <div class="col-xs-12 col-sm-6">
          
   </div>
</div>

<style>
    [type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}




</style>


<br>


  <div class="row" style="margin-top:-22px;">
      <div class="col-xs-12 col-sm-7"> 
    	
    	<div class="row">
    	    <div class="col-xs-3">
    	        <p style="font-size: 16px;margin-top:12px;">Adults</p><br>
    	        <p style="font-size: 16px;margin-top:2px">Children</p><br>
    	        <p style="font-size: 16px;margin-top:2px">Infants</p>
    	    </div>
    	     <div class="col-xs-4">
    	         <div class="input-group number-spinner">
				<span class="input-group-btn">
					<a class="btn btn-default but098" data-dir="dwn" style="border-radius: 50%;width:22px;height:23px;padding:1px;"><span class="glyphicon glyphicon-minus icon_grp"></span></a>
				</span>
				<input type="text" class="form-control text-center" value="1" style="width: 30px;
    font-size: 13px;
    margin-top: 4px;">
				<span class="input-group-btn">
					<a class="btn btn-default but098" data-dir="up" style="border-radius: 50%;width:22px;height:23px;padding:1px;"><span class="glyphicon glyphicon-plus icon_grp"></span></a>
				</span>
			</div>
			
			<br>
			
			
			<div class="input-group number-spinner">
				<span class="input-group-btn">
					<a class="btn btn-default but098" data-dir="dwn" style="border-radius: 50%;width:22px;height:23px;padding:1px;"><span class="glyphicon glyphicon-minus icon_grp"></span></a>
				</span>
				<input type="text" class="form-control text-center" value="1" style="width: 30px;
    font-size: 13px;
    margin-top: 4px;">
				<span class="input-group-btn">
					<a class="btn btn-default but098" data-dir="up" style="border-radius: 50%;width:22px;height:23px;padding:1px;"><span class="glyphicon glyphicon-plus icon_grp"></span></a>
				</span>
			</div>
			
			
			<br>
			
			<div class="input-group number-spinner">
				<span class="input-group-btn">
					<a class="btn btn-default but098" data-dir="dwn" style="border-radius: 50%;width:22px;height:23px;padding:1px;"><span class="glyphicon glyphicon-minus icon_grp"></span></a>
				</span>
				<input type="text" class="form-control text-center" value="1" style="width: 30px;
    font-size: 13px;
    margin-top: 4px;">
				<span class="input-group-btn">
					<a class="btn btn-default but098" data-dir="up" style="border-radius: 50%;width:22px;height:23px;padding:1px;"><span class="glyphicon glyphicon-plus icon_grp"></span></a>
				</span>
			</div>
    	     </div>
    	     <div class="col-xs-5">
    	        <p style="font-size:12px;margin-top:10px;">(Above 12 yrs)</p><br>
    	        <p style="font-size:12px;margin-top:10px;">(2-12 years)</p><br>
    	        <p style="font-size:12px;margin-top:10px;">(Below 2 years)</p>
    	     </div>
    	</div>
    <!-- <div class="flight_traveller">
         <div class="col-xs-3">
             <p>Adults</p>
         </div>
         <div class="col-xs-5">
             <div class="input-group number-spinner">
				<span class="input-group-btn">
					<button class="btn btn-default but098" data-dir="dwn" style="border-radius: 50%;"><span class="glyphicon glyphicon-minus icon_grp"></span></button>
				</span>
				<input type="text" class="form-control text-center" value="1" style="width: 30px;
    font-size: 13px;
    margin-top: 4px;">
				<span class="input-group-btn">
					<button class="btn btn-default but098" data-dir="up" style="border-radius: 50%;"><span class="glyphicon glyphicon-plus icon_grp"></span></button>
				</span>
			</div>
         </div>
         <div class="col-xs-4">
             (Above 12 years)
         </div>
    </div>-->
    
    
    
 </div>
 
 <div class="col-xs-12 col-sm-5"> 
   <div class="group">
	     <input type="text" class="inp1 flight14" name="class" data-toggle="dropdown" id="" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Class</label>
      </div>
      
<div class="dropdown flight_drp4">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:159px;">
     
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight4 h11">economy</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight4 h11">premiumEconomy</a>
      </li>
     <li>
        <a href="#" title="Select this card" class="list-group-item alflight4 h11">businessClass</a>
      </li>
      
	  
	  
    </ul>
 </div>
     </div>
   <br>
	
	 
      <div class="_3BxH"><button class="_11kC  _15qf _2qE6" style="margin-top:3%;">Search</button></div>
      </div>
      
      
    </div>
    
    
    
    
    <div class="round_flight" style="display:none;">
  <div class="row" style="margin-top:-30px;">
    <div class="col-xs-12 col-sm-6">       
     <div class="row">
	     <div class="group">
	     <input type="text" class="inp1 flight11" name="flight_from" data-toggle="dropdown" id="" required>
	     <input type="hidden" class="opcode_flight_from" name="opcode_flight_from"  value="">
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">From</label>
      </div>
      
<div class="dropdown flight_drp">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight h11" alt="<?php echo $flight['opcode']; ?>">Delhi</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight h11" alt="<?php echo $flight['opcode']; ?>">Delhi</a>
      </li>
     
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight h11" alt="<?php echo $flight['opcode']; ?>">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item alflight h11" alt="<?php echo $flight['opcode']; ?>">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item alflight h11" alt="<?php echo $flight['opcode']; ?>">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item alflight h11" alt="<?php echo $flight['opcode']; ?>">Delhi</a>
      </li>
	  
	  
    </ul>
	
    </div>
  </div>
 </div>  
  
  <div class="col-xs-12 col-sm-6"> 
  <div class="row">
	     <div class="group">
	     <input type="text" class="inp1 flight12" name="flight_to" data-toggle="dropdown" id="" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">To</label>
      </div>
      
<div class="dropdown flight_drp2">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:172px;">
     
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight2 h11">Delhi</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight2 h11">Delhi</a>
      </li>
     
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight2 h11">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item alflight2 h11">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item alflight2 h11">Delhi</a>
      </li>
	  
	   <li>
        <a href="#" title="Select this card" class="list-group-item alflight2 h11">Delhi</a>
      </li>
	  
	  
    </ul>
	
    </div>
  </div>
 </div>
 </div>  
  
  
        <div class="row">
             <div class="col-xs-12 col-sm-6">
          <label class="lbl1" style="color: #00b9f5;margin-left: 17px;margin-top:-11px;">Departure</label><br>
     
  
  
    
           <div class="group">
				<input type="date" name="departure" id="departure" class="inp1" style="width:100%;margin-top: -7px;margin-left:-2px;"  required>
                <span class="highlight"></span>
                <span class="bar"></span>
                
        </div>   
   </div>
   
   
   <div class="col-xs-12 col-sm-6">
          <label class="lbl1" style="color: #00b9f5;margin-left: 17px;margin-top:-11px;">Return Date</label><br>
     
  
  
    
           <div class="group">
				<input type="date" name="return_date" id="return_date" class="inp1"  style="width:100%;margin-top: -7px;margin-left:-2px;" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                
        </div>   
   </div>
</div>

<style>
    [type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}




</style>


<br>


  <div class="row" style="margin-top:-22px;">
      <div class="col-xs-12 col-sm-7"> 
    	
    	<div class="row">
    	    <div class="col-xs-3">
    	        <p style="font-size: 16px;margin-top:12px;">Adults</p><br>
    	        <p style="font-size: 16px;margin-top:2px">Children</p><br>
    	        <p style="font-size: 16px;margin-top:2px">Infants</p>
    	    </div>
    	     <div class="col-xs-4">
    	         <div class="input-group number-spinner">
				<span class="input-group-btn">
					<a class="btn btn-default but098" data-dir="dwn" style="border-radius: 50%;width:22px;height:23px;padding:1px;"><span class="glyphicon glyphicon-minus icon_grp"></span></a>
				</span>
				<input type="text" class="form-control text-center" value="1" style="width: 30px;
    font-size: 13px;
    margin-top: 4px;">
				<span class="input-group-btn">
					<a class="btn btn-default but098" data-dir="up" style="border-radius: 50%;width:22px;height:23px;padding:1px;"><span class="glyphicon glyphicon-plus icon_grp"></span></a>
				</span>
			</div>
			
			<br>
			
			
			<div class="input-group number-spinner">
				<span class="input-group-btn">
					<a class="btn btn-default but098" data-dir="dwn" style="border-radius: 50%;width:22px;height:23px;padding:1px;"><span class="glyphicon glyphicon-minus icon_grp"></span></a>
				</span>
				<input type="text" class="form-control text-center" value="1" style="width: 30px;
    font-size: 13px;
    margin-top: 4px;">
				<span class="input-group-btn">
					<a class="btn btn-default but098" data-dir="up" style="border-radius: 50%;width:22px;height:23px;padding:1px;"><span class="glyphicon glyphicon-plus icon_grp"></span></a>
				</span>
			</div>
			
			
			<br>
			
			<div class="input-group number-spinner">
				<span class="input-group-btn">
					<a class="btn btn-default but098" data-dir="dwn" style="border-radius: 50%;width:22px;height:23px;padding:1px;"><span class="glyphicon glyphicon-minus icon_grp"></span></a>
				</span>
				<input type="text" class="form-control text-center" value="1" style="width: 30px;
    font-size: 13px;
    margin-top: 4px;">
				<span class="input-group-btn">
					<a class="btn btn-default but098" data-dir="up" style="border-radius: 50%;width:22px;height:23px;padding:1px;"><span class="glyphicon glyphicon-plus icon_grp"></span></a>
				</span>
			</div>
    	     </div>
    	     <div class="col-xs-5">
    	        <p style="font-size:12px;margin-top:10px;">(Above 12 yrs)</p><br>
    	        <p style="font-size:12px;margin-top:10px;">(2-12 years)</p><br>
    	        <p style="font-size:12px;margin-top:10px;">(Below 2 years)</p>
    	     </div>
    	</div>
    <!-- <div class="flight_traveller">
         <div class="col-xs-3">
             <p>Adults</p>
         </div>
         <div class="col-xs-5">
             <div class="input-group number-spinner">
				<span class="input-group-btn">
					<button class="btn btn-default but098" data-dir="dwn" style="border-radius: 50%;"><span class="glyphicon glyphicon-minus icon_grp"></span></button>
				</span>
				<input type="text" class="form-control text-center" value="1" style="width: 30px;
    font-size: 13px;
    margin-top: 4px;">
				<span class="input-group-btn">
					<button class="btn btn-default but098" data-dir="up" style="border-radius: 50%;"><span class="glyphicon glyphicon-plus icon_grp"></span></button>
				</span>
			</div>
         </div>
         <div class="col-xs-4">
             (Above 12 years)
         </div>
    </div>-->
    
    
    
 </div>
 
 <div class="col-xs-12 col-sm-5"> 
   <div class="group">
	     <input type="text" class="inp1 flight14" name="class" data-toggle="dropdown" id="" required>
         <span class="highlight"></span>
         <span class="bar"></span>
          <label class="lbl1">Class</label>
      </div>
      
<div class="dropdown flight_drp4">
    
   <ul class="dropdown-menu scrollbar"  id="style-3" style="height:159px;">
     
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight4 h11">economy</a>
      </li>
      <li>
        <a href="#" title="Select this card" class="list-group-item alflight4 h11">premiumEconomy</a>
      </li>
     <li>
        <a href="#" title="Select this card" class="list-group-item alflight4 h11">businessClass</a>
      </li>
      
	  
	  
    </ul>
 </div>
     </div>
   <br>
	
	 
      <div class="_3BxH"><button class="_11kC  _15qf _2qE6" style="margin-top:3%;">Search</button></div>
      </div>
      
      
      
      
      
      
      
    </div>
    
    </form>
  
</div>
		 
        </div>
        </div>
      
   
        <div class="modal-footer" style="padding: 5px;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
       </div>
  </div>
  
</div>


<style>
    .flight_traveller
    {
      background:#fff;
      border:1px solid #a9a9a9;
    }
</style>
<!---------------------------------------------END Flight------------------------------------------------->



<!----Cooming Soon Modal--------->



<div class="container">
  


  <!-- Modal -->
  <div class="modal fade" id="coming11" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content grad1">
       
        <div class="modal-body">
           <div ng-app="">
             <div>
           <form action="#" method="post">
               
                 <h1 style="color:#fff;font-weight:700"><center>Coming Soon</center></h1>
        </form>
     </div>
   </div>
		 
        </div>
        
          
        
      </div>
      
    </div>
  </div>
  
</div>



<!------login moda--------->

<div class="container">
  


  <!-- Modal -->
  <div class="modal fade" id="login11" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content grad1">
       
        <div class="modal-body">
           <div ng-app="">
             <div>
           <form action="#" method="post">
               
                 <h1 style="color:#fff;font-weight:700"><center>Please Login First or Register</center></h1>
        </form>
     </div>
   </div>
		 
        </div>
        
          
        
      </div>
      
    </div>
  </div>
  
</div>


<style>
.grad1 {
   
    background: red; /* For browsers that do not support gradients */    
    background: -webkit-linear-gradient(left rgba(1, 43, 114, 0.57), rgba(1, 43, 114, 0.57), rgba(0, 185, 245, 0.48)); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(bottom right, rgba(1, 43, 114, 0.57), rgba(0, 185, 245, 0.48)); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(bottom right, rgba(1, 43, 114, 0.57), rgba(0, 185, 245, 0.48)); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to bottom right, rgba(1, 43, 114, 0.57), rgba(0, 185, 245, 0.48)); /* Standard syntax (must be last) */
}
</style>


</body>
</html>

<style>
.maxl {
    margin-top: 1px;
    margin-bottom: 25px;
    margin-left: 15px;
}
.fast_lbl
{
        font-weight: bold;
    padding: 8px 15px;
    
}
.checkbox label:after, 
.radio label:after {
    content: '';
    display: table;
    clear: both;
}

.checkbox .cr,
.radio .cr {
    position: relative;
    display: inline-block;
    border: 1px solid #a9a9a9;
    border-radius: .25em;
    width: 1.3em;
    height: 1.3em;
    float: left;
    margin-right: .5em;
}

.radio .cr {
    border-radius: 50%;
}

.checkbox .cr .cr-icon,
.radio .cr .cr-icon {
    position: absolute;
    font-size: .8em;
    line-height: 0;
    top: 50%;
    left: 20%;
}

.radio .cr .cr-icon {
    margin-left: 0.04em;
}

.checkbox label input[type="checkbox"],
.radio label input[type="radio"] {
    display: none;
}

.checkbox label input[type="checkbox"] + .cr > .cr-icon,
.radio label input[type="radio"] + .cr > .cr-icon {
    transform: scale(3) rotateZ(-20deg);
    opacity: 0;
    transition: all .3s ease-in;
}

.checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
.radio label input[type="radio"]:checked + .cr > .cr-icon {
    transform: scale(1) rotateZ(0deg);
    opacity: 1;
}

.checkbox label input[type="checkbox"]:disabled + .cr,
.radio label input[type="radio"]:disabled + .cr {
    opacity: .5;
}
 ._2WAL {
    font-size: 12px;
    padding: 5px;
    margin: 10px 0 0;
    background: #ebebeb;
} 



._2qE6 {
    font-size: 16px;
    padding: 15px 20px;
}

._15qf {
    background: #00b9f5;
    color: #fff;
}

._11kC {
   cursor: pointer;
   width: 100%;
    margin: 0;
    text-align: center;
    border-width: 0;
    font-weight: 600;
    margin-top: 5px;
}


.inline{
  display: inline-block;
}

.radio{
  color:#999;
  font-size:17px;
  position:relative;
}
.radio span{
  position:relative;
   padding-left:20px;
}
.inline + .inline {
    margin-left: 40px;
}
.radio span:after{
  content:'';
  width:15px;
  height:15px;
  border:3px solid;
  position:absolute;
  left:0;
  top:1px;
  border-radius:100%;
  -ms-border-radius:100%;
  -moz-border-radius:100%;
  -webkit-border-radius:100%;
  box-sizing:border-box;
  -ms-box-sizing:border-box;
  -moz-box-sizing:border-box;
  -webkit-box-sizing:border-box;
}
.radio input[type="radio"]{
   cursor: pointer; 
  position:absolute;
  width:100%;
  height:100%;
  z-index: 1;
  opacity: 0;
  filter: alpha(opacity=0);
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
}
.radio input[type="radio"]:checked + span{
  color:#00b9f5;  
}
.radio input[type="radio"]:checked + span:before{
    content:'';
  width:5px;
  height:5px;
  position:absolute;
  background:#0B8;
  left:5px;
  top:6px;
  border-radius:100%;
  -ms-border-radius:100%;
  -moz-border-radius:100%;
  -webkit-border-radius:100%;
}

.group        
{ 
  position:relative; 
 
  margin-left: 5px;
}
.inp1         {
  font-size:18px;
  padding:10px 10px 10px 5px;
  display:block;
 
  border:none;
  border-bottom:1px solid #A9A9A9;
   
  padding:0.5em;
   margin: 20px 8px;
  width: 92%;
   color: #000;
}
.inp1:focus     { outline:none;border-bottom:1px solid #00b9f5; }

.lbl1          {
  color:#A9A9A9; 
  font-size:14px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:18px;
  top:7px;
  transition:0.2s ease all; 
}

/* active state */
.inp1:focus ~ label, .inp1:valid ~ label     {
  top:-5px;
  font-size:12px;
  color:#00b9f5;
}
.bar  { position:relative; display:block; width:0%; }
.bar:before, .bar:after   {
  content:'';
  height:2px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background:#00b9f5; 
  transition:0.2s ease all; 
}
.bar:before {
  left:50%;
}
.bar:after {
  right:50%; 
}

/* active state */
.inp1:focus ~ .bar:before, .inp1:focus ~ .bar:after {
  width:50%;
}
/*.highlight {
  position:absolute;
  height:60%; 
  width:100px; 
  top:25%; 
  left:0;
  pointer-events:none;
  opacity:0.5;
}*/

/* active state */
.inp1:focus ~ .highlight {
  //animation:inputHighlighter 0.3s ease;
}

/* ANIMATIONS ================ 
@keyframes inputHighlighter {
  from  { background:#00b9f5; }
  to    { width:0; background:transparent; }
}
*/
.sel1 {
  
  padding:0.9em;
  margin: 17px 8px;
  width: 92%;
  display: block;
  border: none;
  
  border-bottom: solid 1px #a9a9a9;
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 100%, #00b9f5);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 100%, #00b9f5);
  background-position: -200px 0;
  background-size: 200px 100%;
  background-repeat: no-repeat;
  color: #a9a9a9;
}
.sel1:focus, .sel1:valid {
 box-shadow: none;
 outline: none;
 background-position: 0 0;
 color:#00b9f5;
 border-bottom: solid 1px #00b9f5;
}
.sel1 option
{
  color:black;
  padding:10px;
}


</style>






<style>

.dropdown-toggle, .dropdown-menu { width: 300px }
.btn-group {margin-left: 6px;margin-top: -26px;margin-bottom:-27px;width:100%;font-size:14px; }
 .img1{ margin-right: 15px;width:7%;height:32px; border:1px solid #a9a9a9; border-radius:50%;padding:1px;background:#fff;}
.dropdown-toggle { padding-right: 50px }
.dropdown-toggle .glyphicon {  margin-right: -40px }
.dropdown-menu {
   
    padding: 5px 3px;
    margin: -30px 8px 0;
	font-size:17px;
	color:#a9a9a9;
}
.dropdown-menu>li>a {
   padding: 7px;
    
}
.h11
{
 padding:15px;
}
.dropdown-header { background: white; font-size: 14px; font-weight: 700; padding-top: 5px; padding-bottom: 5px; margin-top: 10px; margin-bottom: 5px }
</style>



<style>
.scrollbar
{
   //float: left;
	width: 92%;
	overflow-y: scroll;
	margin-bottom: 25px;
}

button.close {
   
    top: 9px;
    right: 16px;
}
/*
 *  STYLE 3
 */

#style-3::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}

#style-3::-webkit-scrollbar
{
	width: 6px;
	background-color: #F5F5F5;
}

#style-3::-webkit-scrollbar-thumb
{
	background-color: #00b9f5;
}

.btn-group.open .dropdown-toggle {
   
     box-shadow: inset 0 0px 0px rgba(0,0,0,0); 
}
</style>