<link rel="stylesheet" href="<?php echo Fcss;  ?>/plugins.css">
<script src="ajax/commission.js"></script>
<div id="page-content">
                        <!-- Table Responsive Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    View Mobile/Utility API Configration<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> API Configration</li>
                            <li><a href=""> View Mobile/Utility API Configration</a></li>
                        </ul>
                        
                        <div class="block">
                            
                            <div class="block-title">
                               
                              
                                <div class="row">
                                    <div class="col-sm-12 col-xs-10">
                                        
                                        <h2><strong>View Mobile/Utility API Configration</strong> Table</h2>
                                        
                                    </div>
                          </div>          
                    </div>
                     
                                   
                               <?php
                            flash('add_b2b_api'); 
                            ?> 
                           
                          
                            <table class="table table-vcenter table-striped">
                                
                                <thead>
                                    <tr>
                                        <th></th>
                                        
                                        <th>Sr No.</th>
                                        <th>API Name</th>
                                        <!--<th>URL</th>
<!--                                        <th>Mobile No./Consumer No.</th>
                                        <th>Amount</th>
                                        <th>Operator Code</th>
                                        <th>Reference Number</th>
                                        <th>Format</th>
                                        <th>Format Parameter</th>-->
                                        <th>Action</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <form method="post">
                                 <?php
                                $i = 1;
                                foreach ($getapi as $grp):
                                    ?>
                                   
                                    <tr>
                                        <td>
                                            <i class="fa fa-plus-circle add_but1 apicodeget" aria-hidden="true"><span style="display: none;"><?php  echo $grp['id']; ?></span></i>
                                            <i class="fa fa-minus-circle minus_but1" aria-hidden="true" style="display:none;"></i>
                                        </td>
                                       <td><?php echo $i++; ?></td>       
                                       <td><?php echo $grp['api_name']; ?></td>    
                                       <!--<td><?php echo $grp['url']; ?></td>    -->
                                       <td><?php // echo $grp['number']; ?></td>    
                                       <td><?php //echo $grp['amount']; ?></td>    
                                       <td><?php// echo $grp['opcode']; ?></td>    
                                       <td><?php //echo $grp['ref_no']; ?></td>    
                                       <td><?php //echo $grp['format']; ?></td>    
                                       <td><?php //echo $grp['format_parameter']; ?></td>    
                                      
                                       <td>
                                           
                                           <div class="btn-group" style="width:100%;">

                            <button data-toggle="tooltip" title="" type="button" onclick="document.location.href='index.php?action=mobile_utility_api_configration&id=<?php echo $grp['id']; ?>';"  name="active" value="35" class="btn btn-warning " style="width: 39px;background-color:#f0c129;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);" data-original-title="Edit"><i class="fa fa-pencil"></i></button>
                           
                            <button data-toggle="tooltip" title="" type="button" class="btn btn-warning " style="width: 39px;border-radius:3px;background-color:#ff0000a1;color:#fff;border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                           

                        </div>
                                           
                                       </td>
                                      
                                       
                                    </tr>
                                    <?php endforeach;?>
                                    
                                    
                                </form>
                                    
                                </tbody>
                            </table>
<!---------sub-table------>
        <div class="table_display" style="display:none;">
            <table class="table table-vcenter table-striped">

                <thead>
                    <tr>
                       
                        <th>Operator Name</th>
                        <th>Buy Commission</th>
                        <th>Buy Commission Type</th>
                        <th>Service Charge</th>
                        <th>Service Charge Type</th>
                        <th>Operator Code</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="datagrpind">
<!--                <form method="post"></form>-->
               
                </tbody>
            </table>

        </div>  
         <script>

            $(document).ready(function() {
                $(".add_but1").click(function() {
                    $(".table_display").show();
                    $(".minus_but1").show();
                    $(".add_but1").hide();
                });
            });

        </script>

        <script>

            $(document).ready(function() {
                $(".minus_but1").click(function() {
                    $(".table_display").hide();
                    $(".minus_but1").hide();
                    $(".add_but1").show();
                });
            });

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
                       table {
	
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
                   
                    