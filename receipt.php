
<?php 
include'include/base.php';
$o__recharge= new recharge();

$mpos_b2buser_data=$o__recharge->mposreceiptdata($_GET['rid']);

//print_r($mpos_b2buser_data->id);

//exit();
if($mpos_b2buser_data->id!=""):
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">





<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<style>
			html {display: none;}
		</style>
		<script>
			if (self == top) {
				document.documentElement.style.display = 'block' ;
			} else {
				top.location = self.location ;
			}
		</script>

		<title>
			Transaction Receipt
		</title>
		<link href="/portal/css/eZetap.css" rel="stylesheet" type="text/css" />
	<!--	<script type="text/javascript" src="/portal/js/jquery-latest.js"></script>
		<script type="text/javascript" language="JavaScript" src="/portal/js/ezeportal.js"></script>-->
		
	</head>
	<body>
		<div id="page" class="popup-main" style="">
				<div id="main" style="background:white;">
				







<style type="text/css">
.receipt {
	font-size: 8pt;
	font-family: monospace;
	width: 300px;
	border: 1px solid #000;
	padding: 2px 2px 2px 2px;
	margin: auto;
}

.printform {
	text-size: x-small;
	text-align: right;
	float: right;
}
</style>
<style type="text/css" media="print, handheld">
.printform {
	display: none;
}

.receipt {
	margin: auto;
	width: 300px;
}
</style>

<style type="text/css" media="only screen and (max-device-width: 480px)">
.printform {
	display: none;
}

.receipt {
	margin: auto;
}
</style>
<style type="text/css"
	media="only screen and (-webkit-min-device-pixel-ratio: 2)">
.printform {
	display: none;
}

.receipt {
	margin: auto;
}
</style>
<style type="text/css" media="only screen and (min-resolution: 300dpi)">
.printform {
	display: none;
}

.receipt {
	margin: auto;
}
</style>

<div class="receipt">
	
	
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tbody>
				
					
					





	
		<tr>
			<td colspan="2" align="center">				
			<script type="text/javascript"> 
				if (window.print) {
					document.write('<form class="printform"><input type="button" name="print" accesskey="p"  value="Print" onClick="window.print()"></form>');
				}
			</script><br /><img src="http://kpagent.kandoipower.com/rbl.png" alt="Bank" style="margin-left:7%;"/>
			</td>
		</tr>
	
	<tr>
		
		<td colspan="2" align="center">Kandoi power PVT LTD
			<br /> 
			 
			
				
				
					
					Behind Post Office , Sadulpur, Churu,Rajasthan, India,331023.
						<br />
					
					
						Rajkot
						<br />
					
				
			
		</td>
	</tr>

					
					
				
				
					<tr>
						<td colspan="2" align="center">
							
								Ref # <?php echo $mpos_b2buser_data->order_id; ?>
								<br />
							
						</td>
					</tr>
				
				
				



<tr>
	<td align="left"><strong>Date/Time:</strong> 
	<?php echo $mpos_b2buser_data->date; ?>
	</td>
	<td align="right">
		<?php echo $mpos_b2buser_data->time; ?>
	</td>
</tr>


	<tr>
		
			
				<td align="left">MID: <?php echo $mpos_b2buser_data->mid; ?></td>
				<td align="right">TID: <?php echo $mpos_b2buser_data->tid; ?></td>
			
			
		
	</tr>
	<tr>
		<td align="left">BATCH NO: <?php echo $mpos_b2buser_data->batch_no; ?></td>
		<td align="right">INVOICE NO: <?php echo $mpos_b2buser_data->invoiceno; ?></td>
	</tr>







			



	


<tr>
	<td colspan="2" align="center">
	
					
						<strong>DEBIT SALE</strong>
				
				<tr>
					<td align="left" colspan="2"><strong>CARD NUM:<?php echo $mpos_b2buser_data->card_no; ?></strong>
						Swipe with PIN
					</td>
				</tr>
				<tr>
					<td align="left" colspan="2">CARD TYPE:<?php echo $mpos_b2buser_data->card_brand; ?></td>
				</tr>
				<tr>
					<td align="left">AUTH CODE: <?php echo $mpos_b2buser_data->authcode; ?></td>
					<td align="right">RRN: <?php echo $mpos_b2buser_data->rrnumber; ?></td>
				</tr>
	
	</td>
</tr>


		<tr>
			<td align="left">BASE AMOUNT:</td>
			<td align="right">Rs.<?php echo $mpos_b2buser_data->amount; ?></td>
		</tr>
	

			</tbody>
		</table>

				<em	style="font-family: sans serif; font-weight: normal; font-style: italic; letter-spacing: 0.2em;">
					
						
						
							<p style="text-align: center">PIN VERIFIED OK</p>
						
					
				</em>



	<p>

				<em
					style="font-family: sans serif; font-weight: normal; font-style: italic; letter-spacing: 0.2em;">
					
						
						
							<p style="text-align: center">SIGNATURE NOT REQUIRED</p>
						
					
				</em>
			
			
		
	</p>
	<p style="text-align: center">
		
			
			
				
			
		
	</p>

	
	<p style="text-align: center">
		----------------------------------------
		<br />
		I agree to pay as per the card issuer agreement and receive chargeslip by electronic means.
		<br />
		----------------------------------------
	</p>


	<p style="text-align: center">
		***** CUSTOMER COPY *****<br>
        VERSION V-1.0.0
	</p>


	



<!----
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>






<script	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script	src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

<link href="/portal/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="/portal/css/cs.css" rel="stylesheet"	type="text/css" />
<script type="text/javascript" language="JavaScript" src="/portal/js/angular.js"></script>
<script type="text/javascript" language="JavaScript" src="/portal/js/smili.js"></script>
<script type="text/javascript" language="JavaScript" src="/portal/js/imagePromo.js"></script>



-->










<div id="vas-enhancer"></div>
<div id="bank-enhancer"></div>
<div id="ps-enhancer"></div>

<script>
		$(document).ready(function(){
			try{
				$("#vas-enhancer").html(getHtmlContent());
			} catch(err){}

			try{
				$("#bank-enhancer").html(getBankHtmlContent());
			}catch(err){}

			try{
				$("#ps-enhancer").html(getPSHtmlContent());
			} catch(err){}
		});
</script>



<!--<p style="text-align: center">
    <img src="/portal/images/ezetap_wb_logo.gif"
        width="134" height="63" alt="Ezetap" />
</p>
<script type="text/javascript">
	if (window.print) {
		document.write('<form class="printform"><input type="button" name="print" accesskey="p"  value="Print" onClick="window.print()"></form></br>');
	}
</script>-->
</div>

				</div>
		</div><!-- end page -->
<script type="text/javascript" language="JavaScript">
$(function(){
	try{
	ezetkprocessor();
	if ($('#ezetk', opener.document).length > 0) {
		$('#ezetk', opener.document).val($('#ezetk').val());
		window.opener.ezetkprocessor();
	}
	}catch(err){
		//Catch the error here so that it doesn't affect other JS functions
	}
});	
</script>

	</body>
</html>
<?php

else:
   ?> <script>window.location='http://kpagent.kandoipower.com/index.php';</script>
   
   <?php 
 

endif;
?>
