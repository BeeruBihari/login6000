<div id="page-content">
    <!-- Table Responsive Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
               Disputes Request<br>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Report</li>
        <li><a href="">Disputes Request</a></li>
    </ul>

    
    <script src="http://kpagent.kandoipower.com/template/sections/js/vendor/jquery.min.js"></script>

    

    <script>$(function() {
            Report1.init();
        });</script>


    <div class="block">


        <div class="block-title">
            <h2><strong>Transaction View</strong> Report</h2>
        </div>

        <table class="table table-vcenter table-striped table-bordered table-hover button_margin123">

            <thead>
                <tr>
					<th>Disputes No.</th>
                    <th>TrxID</th>
                    <th>Entry Date</th>
                    <th>Product</th>
                    <th>Amount</th>
                    <th>Mobile No.</th>
					<th>Member ID</th>					
                    <th>Member Name</th>
                    <th>Transaction Status</th>
                    <th>Status</th>
                    <th>Disputes Status</th>
                    
<!--                    <th>Print</th>-->
                </tr>
            </thead>
            <tbody>
			<?php
			foreach($data as $r):
			if($r['status'] == 0){
				
			
			$data_trans = $o__report->getallhistrydatabytransID($r['transaction_id']);
			$user = $o__user->getOneuser($r['user_id']);
			//print_r($data_trans);
			if($data_trans[0]['status'] == '0'){
				$status = '<span class="label label-warning">Pending</span>';
				
			}
			elseif($data_trans[0]['status'] == '1'){
				$status = '<span class="label label-success">Success</span>';
				
			}
			elseif($data_trans[0]['status'] == '2' || $data_trans[0]['status'] == '3'){
				$status = '<span class="label label-danger">Fail</span>';
				
			}
			else{
				$status = '<span class="label label-default">Insuf. Bal.</span>';
				
			}
			
			if($r['status'] == '0'){
				$statusd = '<span class="label label-warning">Pending</span>';
				
			}
			elseif($r['status'] == '1'){
				$statusd = '<span class="label label-success">Success</span>';
				
			}
			elseif($r['status'] == '2'){
				$statusd = '<span class="label label-danger">Fail</span>';
				
			}
			else{
				$statusd = '<span class="label label-default">Other</span>';
				
			}
			?>
				<tr>
					<td><?php echo $r['id']; ?></td>
                    <td><?php echo $r['transaction_id']; ?></td>
                    <td><?php echo $r['date']; ?></td>
                    <td><?php echo $data_trans[0]['opcode']; ?></td>
                    <td><?php echo $data_trans[0]['amount']; ?></td>
                    <td><?php echo $data_trans[0]['mobile']; ?></td> 
					<td><?php echo $user->id; ?></th>			
                    <td><?php echo $user->firstname; ?></th>
                    <td><?php echo $status; ?></td>
                    
                    <td>
					<select class="form-control" onchange="changestatus(this.value)">
			 <option value="<?php echo $r['id']; ?>-0">Select</option> 
			 <option value="<?php echo $r['id']; ?>-1">Accept</option> 
			 <option value="<?php echo $r['id']; ?>-2">Decline</option> 
			 </select>
					</td>
					
                    <td><?php echo $statusd; ?></td>
<!--                    <th>Print</th>-->
                </tr>
			<?php
			}
			endforeach;
			?>
            </tbody>
        </table>
<script>
function changestatus(data){
	var getd = data.split("-");
	if(confirm('Are you sure for update ?'))

        {
	 $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {id:getd[0],sts:getd[1],type:'changestatusDisputes'},

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

</script>
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

