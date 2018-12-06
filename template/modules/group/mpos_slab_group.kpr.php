<link rel="stylesheet" href="<?php echo Fcss; ?>/plugins.css">
<div id="page-content">
   
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                   MPOS Slab<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>MPOS Slab</li>
                            <li><a href="">MPOS Slab</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>MPOS Slab</strong></h2>
                                    </div>
                                   
                                    <?php
                            flash('add_slab'); 
                            ?> 
                                        <fieldset>
                                           
                                           
                                            
                                           
                                        
                                        <div class="">
	<div class="row">
		<div class="span12">
            
             
            
           
             
           
                
                <form id="form-validation" action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                     
         
                     <input type="hidden" name="group_id" value="<?php echo $_GET['grp']; ?>">
                       <div class="col-sm-6 form-group">
                            <label class="col-md-4 control-label" for="api_name">Slab Name</label>
                                <div class="col-md-7">
                                    <input type="text" id="api_name" name="slab_name" class="form-control" placeholder="Slab Name" required>
                                        
                                </div>
                      </div>


                     <!--<div class="col-sm-6 form-group">
                         <label class="col-md-4 control-label" for="">Group Name</label>
                         <div class="col-md-7">
                             <select id="api_holder" name="group_id" class="form-control" size="1" required>
                                 <option value="">Select Group Name</option>
                                 <?php foreach ($getgroup as $holder): ?>
                                     <option value="<?php echo $holder['id']; ?>"><?php echo $holder['group_name']; ?></option>
                                 <?php endforeach; ?>


                             </select>
                         </div>
                     </div> -->
                      
                      
                       <hr style="border:1px dashed #eaedf1;width: 100%;">
                       
                       
                       <div class="col-sm-6 form-group">
                         <!--   <label class="col-md-2 control-label" for="to_amount"></label>-->
                                <div class="col-md-7">
                                    <input type="text" id="url" name="to_amount" class="form-control" placeholder="To Amount" required>
                                        
                                </div>
                                <label class="col-md-2 control-label" for="from_amount">TO</label>
                      </div>
                       <div class="col-sm-6 form-group">
                            
                                <div class="col-md-7">
                                    <input type="text" id="url" name="from_amount" class="form-control" placeholder="From Amount" required>
                                        
                                </div>
                      </div>

                      
                       <hr style="border:1px dashed #eaedf1;width: 100%;">
                       
                        <div class="col-sm-6 form-group">
                         <label class="col-md-4 control-label" for="">MPOS Type</label>
                         <div class="col-md-7">
                             <select id="api_holder" name="rtype" class="form-control" size="1" required>
                                 <option value="">Select MPOS Type</option>
                                   <option value="SALE">SALE</option>
                                   <option value="CASH">CASH</option>
                                 
                             </select>
                         </div>
                     </div>
                        <div class="col-sm-6 form-group">
                         <label class="col-md-4 control-label" for="">Card Type</label>
                         <div class="col-md-7">
                             <select id="api_holder" name="card_type" class="form-control" size="1" required>
                                 <option value="">Select Card Type</option>
                                 <option value="CREDIT">Credit</option>
                                 <option value="DEBIT">Debit</option>
                             </select>
                         </div>
                     </div>
                       
                       <hr style="border:1px dashed #eaedf1;width: 100%;">
                       
                       <div class="col-sm-6 form-group">
                         <label class="col-md-4 control-label" for="">Commission</label>
                         <div class="col-md-7">
                              <input type="text" id="url" name="coms" class="form-control" placeholder="Commission" required>
                         </div>
                     </div>
                        <div class="col-sm-6 form-group">
                         <label class="col-md-4 control-label" for="">Commission Type</label>
                         <div class="col-md-7">
                             <select id="api_holder" name="coms_type" class="form-control" size="1" required>
                                 <option value="">Select Commission Type</option>
                                 <option value="percentage">Percentage (%)</option>
                                 <option value="flat">Flat (RS.)</option>
                             </select>
                         </div>
                     </div>

                       
			<hr style="border:1px dashed #eaedf1;width: 100%;">
						
                                        
                                        <div class="form-group form-actions button_margin123" >
                                            <div class="col-md-12" style="margin-bottom:3%;">
                                                <center><button type="submit" name="add_mpos_slab" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button></center>
                                            </div>
                                        </div>
                 </form>
                
               
             
            
            
        </div>
	</div>
                                            
                                             
</div>
                                        
                                        
                                        
        
                                        </fieldset>
                                    
                                    
         

         
                                        
                                       
                                        
                                   
                                </div>
                                
                               
                               
                            </div>
                            
<script src="<?php echo Fjs; ?>/vendor/jquery.min.js"></script>

  <script src="<?php echo Fjs; ?>/pages/adduser.js"></script>
                                    
                                    <script>$(function(){ AddUser.init(); });</script>
                           
                    <style>
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
                       
    .prod_bord1 {
        border: 2px solid #e0e0e0;
        height: 120px;
        width: 120px;
    }
    .hover_ad1 {
        background:transparent;
        text-align:center;
        opacity:0;
        -webkit-transition: opacity .25s ease;
        margin-top: -45%;
    }
    .prod_bord1:hover .hover_ad1 {
        opacity: 1;
    }
    .fileUpload {
        position: relative;
        overflow: hidden;
        margin: 10px;
        background-color: #357ebd;

    }
    .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
    .addbtn{
        background: transparent;
        border: none;
        box-shadow: none;
    }
    .remove-row{
        background: transparent;
        border: none;
        box-shadow: none;
    }
    .title1{
        font-weight: 600;
    }
    .title2
    {
       font-weight: 600;   
    }
    
</style>

<script>
     function imageshow(input,i) {
     
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#'+i)
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
                   
                            
                            
                            
                        </div>
                        
                        
                        <div class="block">
                            
                            <div class="block-title">
                               
                              
                                <div class="row">
                                    <div class="col-sm-12 col-xs-10">
                                        
                                        <h2><strong></strong> MPOS Slab List</h2>
                                        
                                    </div>
                          </div>          
                    </div>
                            <style>
                                .table thead > tr > th{
                                        font-size: 13px;
                                }
                            </style>     
                            
            <table class="table table-borderless table-striped table-vcenter table-bordered">

                <thead>
                   
                       
                        <th>Group Name</th>
                        <th>Slab Name</th>
                        <th>To Amount</th>
                        <th>From Amount</th>
                        <th>Mpos Type</th>
                        <th>Card Type</th>
                        <th>Commission</th>
                        <th>Commission Type</th>
                        
                    
                </thead>
                <tbody>
                   
                       <?php
            $i = 1;
           foreach ($get_mpos_slab as $grp):
                ?>
                <tr>
                    
                        
                      
                    <td>
                        <?php $getgroup_name = $o__group->getallgroup_name($grp['group_id']);
                            
                            echo $getgroup_name->group_name;
                    ?></td>    
                    <td><?php echo $grp['slab_name']; ?></td>    
                    <td><?php echo $grp['to_amount']; ?></td>    
                    <td><?php echo $grp['from_amount']; ?></td>    
                    <td><?php echo $grp['rtype']; ?></td>    
                    <td><?php echo $grp['card_type']; ?></td>    
                    <td><?php echo $grp['commission']; ?></td>    
                    <td><?php echo $grp['commission_type']; ?></td>    
                    
                   
                </tr>
                
                
            <?php endforeach; ?>
                        
                    
                </tbody>
            </table>
                            
                            
                    </div>
                        
                        
                        
                    </div>
                    
                    
                   



                    


                   


                  

