<link rel="stylesheet" href="<?php echo Fcss;  ?>/plugins.css">
<script src="ajax/commission.js"></script>
<div id="page-content">
                        <!-- Table Responsive Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    API Switch<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>API Configration</li>
                            <li><a href="">API Switch</a></li>
                        </ul>
                        
                        <div class="block">
                            
                            <div class="block-title">
                               
                              
                                <div class="row">
                                    <div class="col-sm-12 col-xs-10">
                                        
                                        <h2><strong>API Switch</strong> Table</h2>
                                        
                                    </div>
                                    
                    </div>
                     
                                   
                                </div>
                           <div class="msgajax" style="color: green; font-size: 15px; margin-bottom: 2%;">
                                     
                                        </div>
                           <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <!-- Block Tabs -->
                                <div class="block full">
                                    <!-- Block Tabs Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">

                                        </div>
                                        <ul class="nav nav-tabs" data-toggle="tabs">
                                            
                                            <li class="active"><a href="#example-tabs2-1">Recharge/Utility
                                                </a>
                                            </li>
                                            
                                        </ul>
                                        </div>
                                    <!-- END Block Tabs Title -->

                                    <!-- Tabs Content -->
                                    <div class="tab-content">

                                        <!-- For RECHARGE COMMISSION  -->
                                        <div class="tab-pane active" id="example-tabs2-1">
                                            
                                            
                                            <table class="table table-vcenter table-striped">
                                
                                <thead>
                                    <tr>
                                       
                                        <th>Provider</th>
                                        
                                        <th>Api List</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <form method="post">
                             
                                    <?php foreach ($getallcomdata as $value) :?>
                                   
                                    <tr>
                                        
<!--                                       <td>
                                           <input type="text" id="example-text-input" value="<?php //echo $value['opid'] ; ?>" name="example-text-input" class="form-control" placeholder="Text">
                                       </td>-->
                                       <td>
                                           <input type="text"  id="example-text-input1"  value="<?php echo $value['OperatorDescritpion'] ; ?>" name="example-text-input" class="form-control opdescp<?php echo $value['opid'] ; ?>" placeholder="Text">
                                       </td>
                                       
                                       
                                       <td>
                                           <select class="form-control apiselect<?php echo $value['opid'] ; ?>" name="service_charge_type">
                                               <option value="0">Select Api</option>
                                               <?php foreach ($getapiname as $apivalue): 
                                               $columname_status = 'status'.$apivalue['id'];
                                               ?>
                                               <option <?php if($value[$columname_status] == '1'): echo 'selected'; endif; ?> value="<?php echo $apivalue['id'];?>"><?php echo $apivalue['api_name'];?></option>
                                               
                                              <?php endforeach;?>
                                           </select>
                                       </td>
                                       <td>
                                           <div class="btn-group btn-group-xs">
                                               <button type="button" name="allcommission" class="btn btn-sm btn-primary updateapi" value="<?php echo $value['opid'] ; ?>"><i class="fa fa-arrow-right"></i>  Update</button>
                                                    
                                                </div>
                                       </td>
                                    </tr>
                                    <?php endforeach;?>
                                    
                                </form>
                                    
                                </tbody>
                            </table>
                                            
                                            
                                        </div>
                                        
                            
                            
                            
                             </div>
                                    <!-- END Tabs Content -->
                                </div>
                                <!-- END Block Tabs -->
                            </div>

                        </div>
                            
                            
                           
                            

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
                   
                    