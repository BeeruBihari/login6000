<link rel="stylesheet" href="<?php echo Fcss;  ?>/plugins.css">
<script src="ajax/commission.js"></script>
<div id="page-content">
                        <!-- Table Responsive Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Add Commission<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>User</li>
                            <li><a href="">Add Commission</a></li>
                        </ul>
                        
                        <div class="block">
                           
                            <div class="block-title">
                               
                                <div class="row">
                                    <div class="col-sm-10">
                                        
                                        <h2><strong>Add Commission</strong> Table</h2>
                                       
                                           
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
                                        <th>Buy Commission</th>
                                        <th>Sale Commission</th>
                                        <th>Sale Type</th>
                                        <th>Service Charge</th>
                                        <th>Service Charge Type</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <form method="post">
                             
                                    <?php //foreach ($getallcomdata as $value) :?>
                                   
                                    <tr>
                                        
<!--                                       <td>
                                           <input type="text" id="example-text-input" value="<?php //echo $value['opid'] ; ?>" name="example-text-input" class="form-control" placeholder="Text">
                                       </td>-->
                                       <td>
                                           <input type="text"  id="example-text-input1"  value="<?php //echo $value['OperatorDescritpion'] ; ?>" name="example-text-input" class="form-control opdescp<?php echo $value['opid'] ; ?>" placeholder="Text">
                                       </td>
                                       <td>
                                           <input type="text"  id="example-text-input2" value="<?php //echo $value['buy_commission'] ; ?>" name="example-text-input" class="form-control opbuycom<?php echo $value['opid'] ; ?>" placeholder="Text">
                                       </td>
                                       <td>
                                           <input type="text" id="example-text-input3" value="<?php //echo $value['sale_commission'] ; ?>" name="example-text-input" class="form-control opsalecom<?php echo $value['opid'] ; ?>" placeholder="Text">
                                       </td>
                                       <td>
                                           <select class="form-control opsalecomtype<?php //echo $value['opid'] ; ?>" name="sale_com_type">
                                               
                                               <option <?php //if($value['sale_com_status']=='flat'): echo 'selected'; endif; ?> value="flat">Flat</option>
                                               <option <?php //if($value['sale_com_status']=='percentage'): echo 'selected'; endif; ?> value="percentange">Percentange(%)</option>
                                              
                                           </select>
                                       </td>
                                       <td>
                                           <input type="text" id="example-text-input4" value="<?php //echo $value['service_charge'] ; ?>" name="example-text-input" class="form-control opsccom<?php echo $value['opid'] ; ?>" placeholder="Text">
                                       </td>
                                       
                                       <td>
                                           <select class="form-control opsctype<?php //echo $value['opid'] ; ?>" name="service_charge_type">
                                               <option <?php //if($value['service_charge_status']=='flat'): echo 'selected'; endif; ?> value="flat">Flat</option>
                                               <option <?php //if($value['service_charge_status']=='percentage'): echo 'selected'; endif; ?> value="percentange">Percentange(%)</option>
                                              
                                           </select>
                                       </td>
                                       <td>
                                           <div class="btn-group btn-group-xs">
                                               <button type="button" name="allcommission" class="btn btn-sm btn-primary updateallcommission" value="<?php echo $value['opid'] ; ?>"><i class="fa fa-arrow-right"></i>  Update</button>
                                                    
                                                </div>
                                       </td>
                                    </tr>
                                    <?php //endforeach;?>
                                    
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
                        table 
                        {
		overflow-x: auto;
		
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
                       
                     </div>
                    
                    