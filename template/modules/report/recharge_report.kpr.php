<link rel="stylesheet" href="<?php echo Fcss;  ?>/plugins.css">

<div id="page-content">
                        <!-- Table Responsive Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Add Recharge report<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Report</li>
                            <li><a href="">Add Recharge report</a></li>
                        </ul>
                        
                        <div class="block">
                            
                            <div class="block-title">
                               
                              
                                <div class="row">
                                    <div class="col-sm-12 col-xs-10">
                                        
                                        <h2><strong>Add Recharge report</strong> Table</h2>
                                        
                                    </div>
                          </div>          
                    </div>
                    
                                    <div class="row">
                                         <form method="post">
                                    <div class="col-sm-1 col-xs-4" >
                                         
                                        <div class="" id="example-datatable_length">
                                            <label>
                                                <select name="example-datatable_length" aria-controls="example-datatable" class="form-control">
                                                    <option value="10">10</option>
                                                    <option value="20">50</option>
                                                    <option value="30">100</option>
                                                    <option value="30">All</option>
                                                    
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                    
                                     <div class="col-md-3 col-xs-4">
                                            <input type="text" id="example-datepicker" name="example-datepicker" class="form-control input-datepicker" data-date-format="mm/dd/yy" placeholder="From Date">
                                    </div>
                                    
                                    <div class="col-md-3 col-xs-4">
                                            <input type="text" id="example-datepicker1" name="example-datepicker" class="form-control input-datepicker" data-date-format="mm/dd/yy" placeholder="To Date">
                                    </div>
                                   
                                   
                                   <div class="col-md-2 col-xs-6">
                                             <div class="" id="example-datatable_length1">
                                            <label>
                                                <select name="example-datatable_length" aria-controls="example-datatable" class="form-control">
                                                   
                                                    <option value="20">Member-Id</option>
                                                     <option value="20">Transaction-Id</option>
                                                     <option value="20">Recharge No.</option>
                                                     <option value="20">Operator-Id</option>
                                                </select>
                                            </label>
                                        </div>
                                     </div>
                                  
                                 
                                     <div class="col-md-3 col-xs-4">
                                                <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Search Item">
                                               
                                    </div>
                                    
                                     
                                    
                                    <div class="col-md-12 col-xs-12">
                                           <center><button type="submit" class="btn btn-sm btn-primary" style="margin-top:1%;"><i class="fa fa-arrow-right"></i> Search</button></center>
                                  </div>
                                      
                                      </form>       
                                    </div>
                                    
                                   
                               
                           
                          
                            <table class="table table-vcenter table-striped table-bordered">
                                
                                <thead>
                                    <tr>
                                       
                                        <th>Trasaction ID</th>
                                        <th>Member Id</th>
                                        <th>Outlet Name</th>
                                        <th>Recharge Number</th>
                                        <th>Oprater Name</th>
                                        <th>DateTime</th>
                                        <th>Amount</th>
                                        <th>Balance Amount</th>
                            
                                        <th>Status</th>
                                        <th>Operater Id</th>
                                        
                                        <th>Mode</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <form method="post">
                                
                                    <tr>
                                      
                                       
                                        <td>161222228343679337</td>
                                       <td>6756665656</td>
                                       <td>nndjnfsjn</td>
                                       <td>83747343777</td>
                                       <td>Airtel</td>
                                       <td>02-Dec-2016 22:28:34	</td>
                                       <td>50.00</td>
                                       <td>1039.20</td>
                                       <td>REFUND</td>
                                       <td></td>
                                       <td>Api</td>
                                      
                                       <td>
                                            
                                       </td>
                                      
                                    </tr>
                                  
                                   <div>  
                                   <tr style="display:none;"  class="table_display">
                                      
                                       <td colspan="16">
                                                
                                                <div id="div1731175649137DC5B" style="display: inline; position: relative; left: 0px; overflow: auto;">
                                                    <div>
                                                         <div class="table-responsive">
					<table cellspacing="0" rules="all" border="1" class="table table-vcenter table-striped table-bordered">
						<tbody>
						    <tr>
							 <td>Transaction_ID</td>
							 <td>1731175649137DC5B</td>
						   </tr><tr>
							<td>ApiRequestID</td><td>&nbsp;</td>
						</tr><tr>
							<td>Venderid</td><td>&nbsp;</td>
						</tr><tr>
							<td>STDCode</td><td>&nbsp;</td>
						</tr><tr>
							<td>Url</td><td>VDSVVS</td>
						</tr><tr>
							<td>Responce</td><td>&nbsp;</td>
						</tr><tr>
							<td>SName</td><td>&nbsp;</td>
						</tr>
					</tbody></table>
					 </div>
				</div>
                                            </div></td>
                                           
                                   </tr>
                                   </div>  
                                </form>
                                    
                                </tbody>
                            </table>
                           
                            
                            
                       <script>
   
$(document).ready(function(){
    $(".add_but1").click(function(){
        $(".table_display").show();
        $(".minus_but1").show();
        $(".add_but1").hide();
    });
});

</script>

<script>
   
$(document).ready(function(){
    $(".minus_but1").click(function(){
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
                   
                    