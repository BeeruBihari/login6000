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
        <li><a href="">Manually API Report</a></li>
    </ul>

    
    <script src="http://kpagent.kandoipower.com/template/sections/js/vendor/jquery.min.js"></script>

    

    <script>$(function() {
            Report1.init();
        });</script>


    <div class="block">


        <div class="block-title">
            <h2><strong>Manually API</strong> Report</h2>
        </div>

        <table class="table table-vcenter table-striped table-bordered table-hover button_margin123">

            <thead>
                <tr>
                    <th>TrxID</th>
                    <th>Entry Date</th>
                    <th>Product</th>
                    <th>Amount</th>
                    <th>Mobile No.</th>                   
                    <th>Member Name</th>
                    
                    
                    <th>Status</th>
                    <th></th>
<!--                    <th>Print</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                $o__user = new user();
                $data =  $o__report->getmanualldata();
                foreach($data as $r){
                    $oneuser = $o__user->getOneuser($r['user_id']);
                    if($oneuser->admin_id == $_SESSION['b2b_kpr_rech_id']){
                        if($r['status'] == 1){
                            $st = "Success";
                        }
                        elseif($r['status'] == 2 || $r['status'] == 3){
                            $st = "Fail";
                        }
                        else{
                            $st = "Pending";
                        }
                   
                ?>
			<tr>
			    <td><?php echo $r['transaction_id']; ?></td>
			    <td><?php echo $r['date']; ?></td>
			    <td><?php echo $r['opcode']; ?></td>
			    <td><?php echo $r['amount']; ?></td>
			    <td><?php echo $r['mobile']; ?></td>
			    <td><?php echo $oneuser->firstname.' '.$oneuser->lastname; ?></td>
			    <td><?php echo $st; ?></td>
			    <td></td>
			</tr>
			<?php
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
	if(confirm('Are you sure for update ?'))

        {
	 $.ajax({

                type: "POST",

                url: "ajax/commission.php",

                data: {trsid: getd[0],status: getd[1], type:'changestatus'},

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
