   <script src="<?php echo Fjs; ?>/vendor/jquery.min.js"></script>

                                    <script src="<?php echo Fjs; ?>/pages/formsValidation.js"></script>
                                    <script>$(function(){ FormsValidation.init(); });</script>
   
    <div id="page-content">
                        <!-- Table Responsive Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Refund Status Report<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Refund Status Report</li>
                            <li><a href="">Refund Status Report</a></li>
                        </ul>
                       
                        <div class="block">
                            <div class="block-title">
                                <h2>Refund Status Report</h2>
                                 
                            </div>
                           
                            <form id="form-validation" autocomplete="off" action="" method="post" class="form-horizontal">
                                        
                                     <div class="row">
                                         
                                         <div class="col-xs-12 col-sm-12">
                                             <div class="form-group">
                                            <lable class="col-md-3" for="val_select">Select Type</lable>
                                            <div class="col-md-8" id="val_select" name="val_select">
                                                <label class="radio-inline" for="example-inline-radio1">
                                                    <input type="radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> Recharge
                                                </label>
                                                <label class="radio-inline" for="example-inline-radio2">
                                                    <input type="radio" id="example-inline-radio2" name="example-inline-radios" value="option2"> Travel
                                                </label>
                                                <label class="radio-inline" for="example-inline-radio3">
                                                    <input type="radio" id="example-inline-radio3" name="example-inline-radios" value="option3"> Fund Transfer
                                                </label>
                                                
                                            </div>
                                        </div>
                                         </div>
                                         
                                         
                                         <div class="col-xs-12 col-sm-12">
                                            
                                            <div class="row">
                                                <div class="col-xs-11 col-sm-6">
                                                   <div class="form-group">
                                                 <label class="col-md-3 col-xs-12 control-label" for="val_date">From</label>
                                                <div class="col-md-8 col-xs-12">
                                                    <input type="text" id="val_date" name="val_date" class="form-control input-datepicker forn_control12" data-date-format="mm-dd-yyyy" placeholder="mm-dd-yyyy">
                                               
                                                </div>
                                            </div> 
                                                </div>
                                                
                                                <div class="col-xs-11 col-sm-6">
                                                    <div class="form-group">
                                                 <label class="col-md-3 col-xs-12 control-label" for="val_date2">To</label>
                                                <div class="col-md-8 col-xs-12">
                                                    <input type="text" id="val_date2" name="val_date2" class="form-control input-datepicker forn_control12" data-date-format="mm-dd-yyyy" placeholder="mm-dd-yyyy">
                                                </div>
                                            </div><br>
                                                </div>
                                                
                                                
                                                
                                                <div class="col-xs-12 col-sm-12">
                                                    <div class="form-group form-actions">
                                                    
                                                 <center><button type="submit" name="submit1" class="btn btn-sm btn-primary" style="margin-top:5px;"><i class="fa fa-angle-right"></i> Submit</button></center>
                                                 </div>
                                                 
                                                 </div><br>
                                            </div> 
                                             
                                            
                                             
                                         </div>
                                         
                                         <!--<div class="row">
                                              <div class="col-xs-1 col-sm-1"></div>
                                             <div class="col-xs-10 col-sm-4" style="padding:10px;">
                                                 <div style="border: 1px solid #ccc;padding:10px;height: 100px;">
                                                     <p>Found 589/758 Entries</p>
                                                 <p><b>Total Amount:</b><B>Rs.86786</B></p>
                                                 </div>
                                                 
                                             </div>
                                             <div class="col-xs-1 col-sm-1"></div>
                                             
                                             <div class="col-xs-10 col-sm-4" style="padding: 13px;padding-left: 50px;">
                                                 <div style="border: 1px solid #ccc;padding:10px;height: 100px;">
                                                     <center><button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Print Excel</button></center>
                                                 </div>
                                                 
                                             </div>
                                             
                                         </div>-->
                                         
                                     </div>
                                        
                                        
                                        
                                        
                                       
                                    </form>
                        </div>
                            
                        
                        <div class="block">
                            
                           
                           
                                     <div class="row">
                                         
                                         
                                         <div class="row">
                                              <div class="col-xs-1 col-sm-1"></div>
                                             <div class="col-xs-8 col-sm-3">
                                                 <div style="">
                                                     <p>Found 589/758 Entries</p>
                                                 
                                                 </div>
                                                 
                                             </div>
                                            
                                             
                                         </div>
                                         
                                     </div>
                                        
                                      
                        </div>
                        
                        <div class="block">
                           
                            
                            <div class="block-title">
                                <h2><strong>Refund Status View</strong> Report</h2>
                            </div>
                          
                            <table class="table table-vcenter table-striped table-bordered button_margin123">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Txn Id</th>
                                        <th>Comment</th>
                                        <th>User-Name</th>
                                        <th>User-Track Id</th>
                                        <th>Operator Transaction Id</th>
                                        <th>Reference Number</th>
                                        <th>Operator Description</th>
                                        <th>Mobile No.</th>
                                        <th>Previous Amount</th>
                                        <th>Amount Transacted</th>
                                        <th>Balance Amount</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a type="submit" class="btn btn-success">Accept</a><br><br>
                                        <a type="submit" name="deactive" value="" class="btn btn-danger ">Decline</a><br><br></td>
                                    
                    
                                    
                                    
                                    
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
                    
                    