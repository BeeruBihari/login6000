<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<div id="page-content">
    <!-- Table Responsive Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
               Change Status Manually<br>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Report</li>
        <li><a href="">Change Status Manually</a></li>
    </ul>

    
    <script src="http://kpagent.kandoipower.com/template/sections/js/vendor/jquery.min.js"></script>

    

    <script>$(function() {
            Report1.init();
        });</script>


    <div class="block">


        <div class="block-title">
            <h2><strong>Transaction View</strong> Report</h2>
        </div>

        <table class="table table-vcenter table-striped table-bordered table-hover button_margin123" id="myTable">

            <thead>
                <tr>
                    <th>TrxID</th>
                    <th>Entry Date</th>
                    <th>Product</th>
                    <th>Amount</th>
                    <th>Mobile No.</th>                   
                    <th>Member Name</th>
                    <th>Status Date</th>
                    
                    <th>Status</th>
                    <th></th>
<!--                    <th>Print</th>-->
                </tr>
            </thead>
            <tbody>
			<?php
			foreach($data as $rr){
				$uname =  $o__report->getUserbyadmin($rr['b2b_user_id']);
				if($uname){
			if($rr['status'] == '0'){
				$status = 'Pending';
				$class_s = 'label-warning';
			}
			elseif($rr['status'] == '1'){
				$status = 'Success';
				$class_s = 'label-success';
			}
			elseif($rr['status'] == '2' || $rr['status'] == '3'){
				$status = 'Fail';
				$class_s = 'label-danger';
			}
			else{
				$status = 'Insufficient Balance';
				$class_s = 'label-default';
			}		
				
			if($rr['rtype'] == 'MobileRecharge' || $rr['rtype'] == 'DTH' || $rr['rtype'] == 'DMT'){
			?>
            <tr>
			<td><?php echo $rr['transaction_id']; ?></td>
			<td><?php echo $rr['date']; ?></td>
			<td><?php echo $rr['opcode']; ?></td>
			<td><?php echo $rr['amount']; ?></td>
			<td><?php echo $rr['mobile']; ?></td>
			<td><?php echo $uname->firstname.' '.$uname->lasttname; ?></td>
			<td><?php echo $rr['modify_date']; ?></td>
			<td><?php echo $status; ?></td>
			<td>
			<?php
			$functionname = '';
			if($rr['status'] != '1' || $rr['status'] !='4'){
				$functionname = 'changestatus(this.value)';
			}
			else{
				$functionname = 'notchagestatus()';
				
			}
			?>
			<input type="text" class="form-control" id="rpid<?php echo $rr['transaction_id']; ?>" name="rpid" placeholder="Serial Number"/>
			<input type="text" class="form-control" id="txid<?php echo $rr['transaction_id']; ?>" name="txid" placeholder="Ref. ID"/>
			<select class="form-control" onchange="<?php echo $functionname; ?>">
			 <option value="">Select</option>   
			<?php
			if($rr['status'] != 0){
			?>
			<option value="<?php echo $rr['transaction_id'].'-PROCESS'; ?>">Pending</option>
			<?php
			}
			if($rr['status'] != 1){
			?>
			<option value="<?php echo $rr['transaction_id'].'-SUCCESS'; ?>">Success</option>
			<?php
			}
			if($rr['status'] != 3 || $rr['status'] != 4){
			?>
			<option value="<?php echo $rr['transaction_id'].'-FAILED'; ?>">Fail</option>
			<?php
			}
			?>
			</select>
			</td>
			</tr>
			<?php
			}
			}
			}
			?>
            </tbody>
        </table>

        <style>
            .table thead > tr > th
            {
                font-size: 13px;
                font-weight: 600;
            }
            .but_padding
            {
                padding:7px;
            }
            .val_select
            {
                width: 100%; 
            }
            .forn_control12
            {
                margin-left: 14px;
                width: 92%; 
            }
            .button_margin123
            {
                margin-bottom:65px;
            }

            @media only screen and (min-width:768px) and (max-width: 768px)
            {
                .forn_control12
                {
                    margin-left: 10px;
                    width: 100%; 
                }
                .val_select
                {
                    width: 95%; 
                }
            }
            @media only screen and (min-width:300px) and (max-width: 320px)
            {
                .forn_control12
                {
                    margin-left: 14px;
                    width: 100%; 
                }
            }


            @media only screen and (min-width:321px) and (max-width: 360px)
            {
                .forn_control12
                {
                    margin-left: 14px;
                    width: 100%; 
                }
            }
            @media only screen and (min-width:361px) and (max-width: 414px)
            {
                .forn_control12
                {
                    margin-left: 14px;
                    width: 100%; 
                }
            }

            @media only screen and (min-width:473px) and (max-width: 600px)
            {
                .val_select
                {
                    width: 89%; 
                }
            }
            @media only screen and (min-width: 769px) and (max-width: 960px)
            {
            }
            @media only screen and (min-width: 961px) and (max-width: 1024px)
            {
            }

            @media only screen and (min-width:1025px) and (max-width: 1280px)
            {
            }

            @media only screen and (min-width:1440px) and (max-width: 1440px)
            {
            }

            @media only screen and (min-width:1441px) and (max-width: 1920px)
            {
            }

            table 
            {
                overflow:scroll;

            }
            .table-responsive {
                width: 100%;
                margin-bottom: 15px;
                overflow-x: auto;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch;
                -ms-overflow-style: -ms-autohiding-scrollbar;
                border: 1px solid #DDD;
            }

            @media only screen and (min-width:300px) and (max-width: 320px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }


            @media only screen and (min-width:321px) and (max-width: 360px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }
            @media only screen and (min-width:361px) and (max-width: 414px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }

            @media only screen and (min-width:768px) and (max-width: 768px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }

            @media only screen and (min-width: 769px) and (max-width: 960px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }
            @media only screen and (min-width: 961px) and (max-width: 1024px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }

            @media only screen and (min-width:1025px) and (max-width: 1280px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }

            @media only screen and (min-width:1440px) and (max-width: 1440px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }

                @media only screen and (min-width:1441px) and (max-width: 1920px)
                {
                }
            </style>
        </div>
        <!-- END Responsive Partial Block -->
    </div>
<script>
function changestatus(data){
	var getd = data.split("-");
	var rpid = $('#rpid'+getd[0]).val();
	var txid = $('#txid'+getd[0]).val();
	if(confirm('Are you sure for update ?'))

        {
	 $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {trsid: getd[0],status: getd[1], txid:txid, rpid:rpid, type:'changestatus'},

                success: function (data) {
location.reload();
              // alert(data);
                
               //    $('body').html(data);     

                    
//
//                    $('.msgajax').animate({ opacity: "hide" }, "slow");

                }

            });
		}
}

function notchagestatus(){
	alert('WARNNIGN!!! YOU CAN NOT CHANGE STATUS.');
}
</script>
