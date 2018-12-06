<link rel="stylesheet" href="<?php echo Fcss;  ?>/plugins.css">

<div id="page-content">
                        <!-- Table Responsive Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                   API Response<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Report</li>
                            <li><a href="">API Response</a></li>
                        </ul>
                        
                        <div class="block">
                            
                            <div class="block-title">
            <h2><strong>Transaction View</strong> Report</h2>
        </div>

        <table class="table table-vcenter table-striped table-bordered table-hover button_margin123">

            <thead>
                <tr>
                    <th>TrxID</th>
                    <th>API NAME</th>
                    <th>Response</th>
                    <th>Date</th>
                    <th>time</th>                   
                    
<!--                    <th>Print</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($data as $r){
                    
                $apidata = $o__report->getapinamebyid($r['status']);
                    if($apidata->api_holder == $_SESSION['b2b_kpr_rech_id']){
                ?>
            <tr>
                <td><?php echo $r['b2b_user_id']; ?></td>
                <td><?php echo $apidata->api_name; ?></td>
                <td><?php print_r(unserialize($r['name'])); ?></td>
                <td><?php echo $r['date']; ?></td>
                <td><?php echo $r['time']; ?></td>
                
                </tr>
                <?php
                }}
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
                       table {
		overflow-x: auto;
		display: block;
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
                   
                    