 <script src="<?php echo Fjs; ?>/vendor/jquery.min.js"></script>

                                    <script src="<?php echo Fjs; ?>/pages/formsValidation.js"></script>
                                    <script>$(function(){ FormsValidation.init(); });</script>
   

<div id="page-content">
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Book Hotel<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> Hotel</li>
                            <li><a href="">Book Hotel</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Book Hotel</strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                    
                                        <fieldset>
                                          <form id="form-validation" autocomplete="off"  method="post" class="form-horizontal" action="#"> 
                                           
                                           
                                           <div class="form-group col-md-8 col-xs-12">
                                                <label class="col-md-3 col-xs-12 control-label" for="val_city2">City,Hotel or Area</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="val_city2" name="val_city2" class="form-control">
                                                        <option value="">Please select</option>
                                                        
                                                        <option value="BLR">Bangalore</option>
                                                        <option value="BOM">Mumbai</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            
                                           
                                            
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">

                                       
                                            <div class=" one_way_flight form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 control-label" for="val_date">Check In</label>
                                                <div class="col-md-7">
                                                    <input type="text" id="val_date" name="val_date" class="form-control input-datepicker " data-date-format="mm/dd/yyyy" placeholder="mm/dd/yyyy">
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6 col-xs-12" >
                                                <label class="col-md-4 control-label" for="val_date2">Check Out</label>
                                                <div class="col-md-7">
                                                    <input type="text" id="val_date2" name="val_date2" class="form-control input-datepicker" data-date-format="mm/dd/yyyy" placeholder="mm/dd/yyyy">
                                                </div>
                                            </div>

                                           
                                           <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            	<div class="row">
                                            <div class="form-group col-md-6 col-xs-12">
                                             <label class="col-md-5 col-xs-5 control-label" for="example-datepicker">Select Room</label>
		<div class="col-xs-7 col-sm-7">
			<div class="input-group number-spinner">
				<span class="input-group-btn">
					<a class="btn btn-default spinner" data-dir="dwn"><i class="fa fa-minus" aria-hidden="true"></i></a>
				</span>
                            <input type="text" name="adult" class="form-control text-center" value="1">
				<span class="input-group-btn">
					<a class="btn btn-default spinner" data-dir="up"><i class="fa fa-plus" aria-hidden="true"></i></a>
				</span>
			</div>
		</div>
	</div>
</div>
                                           
                                           
                                            
                                            
                                            	<div class="row">
                                            <div class="form-group col-md-6 col-xs-12">
                                             <label class="col-md-5 col-xs-5 control-label" for="example-datepicker">Adults (Above 12 Years)</label>
		<div class="col-xs-7 col-sm-7">
			<div class="input-group number-spinner">
				<span class="input-group-btn">
					<a class="btn btn-default spinner" data-dir="dwn"><i class="fa fa-minus" aria-hidden="true"></i></a>
				</span>
                            <input type="text" name="adult" class="form-control text-center" value="1">
				<span class="input-group-btn">
					<a class="btn btn-default spinner" data-dir="up"><i class="fa fa-plus" aria-hidden="true"></i></a>
				</span>
			</div>
		</div>
	</div>
</div>
	
	<div class="row">
	<div class="form-group col-md-6 col-xs-12">
                                             <label class="col-md-5 col-xs-5 control-label" for="example-datepicker">Children (2-12 Years)</label>
		<div class="col-xs-7 col-sm-7">
			<div class="input-group number-spinnerr">
				<span class="input-group-btn">
					<a class="btn btn-default spinner" data-dir="dwn"><i class="fa fa-minus" aria-hidden="true"></i></a>
				</span>
                            <input type="text" name="children" class="form-control text-center" value="0">
				<span class="input-group-btn">
					<a class="btn btn-default spinner" data-dir="up"><i class="fa fa-plus" aria-hidden="true"></i></a>
				</span>
			</div>
		</div>
	</div>
	</div>

	
	
                         <script>
                            $(document).on('click', '.number-spinner a', function () {    
	var btn = $(this),
		oldValue = btn.closest('.number-spinner').find('input').val().trim(),
		newVal = 0;
	
	if (btn.attr('data-dir') == 'up') {
		newVal = parseInt(oldValue) + 1;
	} else {
		if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		} else {
			newVal = 1;
		}
	}
	btn.closest('.number-spinner').find('input').val(newVal);
});

   $(document).on('click', '.number-spinnerr a', function () {    
	var btn = $(this),
		oldValue = btn.closest('.number-spinnerr').find('input').val().trim(),
		newVal = 0;
	
	if (btn.attr('data-dir') == 'up') {
		newVal = parseInt(oldValue) + 1;
	} else {
		if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		} else {
			newVal = 0;
		}
	}
	btn.closest('.number-spinnerr').find('input').val(newVal);
});

                         </script>  
                         
                         <style>
                             .input-group-addon, .input-group-btn 
                             {
                                  width: 0%;
                             }
                             .spinner
                             {
                                 height: 34px;
                                 width: 34px;
                             }
                            .button_margin123
                           {
                              margin-bottom:65px;
                           }
                           .forn_control12
    {
      margin-left: 10px;
      width: 92%; 
    }
    
     
     @media only screen and (min-width:768px) and (max-width: 768px)
{
     .forn_control12
    {
      margin-left: 10px;
      width: 96%; 
    }
}
                         </style>
                         
                            
                            
                              <hr style="border:1px dashed #eaedf1;width: 100%;">
                                         
                                        <div class="form-group form-actions button_margin123">
                                            <div class="col-md-12">
                                                
                                                <center><button type="submit" class="btn btn-sm btn-primary" style="margin-bottom:10px;"><i class="fa fa-arrow-right"></i> Submit</button></center>
                                               
                                            </div>
                                        </div>
                                       
                                         </fieldset>
                                   </form>
                                    <!-- END Form Validation Example Content -->

                                    <!-- Terms Modal -->
                                   
                                    <!-- END Terms Modal -->
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                           
                            
            
                            
                        </div>
                    </div>
                    
                    
                   



                    


                   


                  

