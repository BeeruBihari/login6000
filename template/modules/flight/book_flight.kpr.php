 <script src="<?php echo Fjs; ?>/vendor/jquery.min.js"></script>

                                    <script src="<?php echo Fjs; ?>/pages/formsValidation.js"></script>
                                    <script>$(function(){ FormsValidation.init(); });</script>
   

<div id="page-content">
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Book Flight<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> Flight</li>
                            <li><a href="">Book Flight</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Book Flight</strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                    
                                        <fieldset>
                                          <form id="form-validation" autocomplete="off"  method="post" class="form-horizontal" action="index.php?action=select_seat"> 
                                           <div class="form-group">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-6">
                                                <label class="radio-inline" for="flight_type">
                                                    <input type="radio" class="flight_radio" id="flight_type" name="flight_type" value="O" required=""> One Way
                                                </label>
                                                <label class="radio-inline" for="flight_type">
                                                    <input type="radio" id="flight_type" class="flight_radio1" name="flight_type" value="R" required=""> Round Trip
                                                </label>
                                               
                                            </div>
                                        </div>
                                        <script>
                                        $('#form-validation input').on('change', function() {
  //    alert($('input[name=flight_type]:checked', '#form-validation').val());
   if($('input[name=flight_type]:checked', '#form-validation').val() == "O")
   {
        
        $('.form-horizontal').attr('action','index.php?action=select_seat');
   }
   if($('input[name=flight_type]:checked', '#form-validation').val() == "R")
   {
        
        $('.form-horizontal').attr('action','index.php?action=roundway_trip');
   }
   
   
});
                                        </script>
                                        <br>
                                            
                                           <hr style="border:1px dashed #eaedf1;width: 100%;">
                                           
                                           
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="from">From</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="from" name="from" class="form-control">
                                                        <option value="">Please select</option>
                                                        
                                                        <option value="BLR">Bangalore</option>
                                                        <option value="BOM">Mumbai</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="to">To</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="to" name="to" class="form-control">
                                                        <option value="">Please select</option>
                                                        <option value="AMD">Ahmedabad</option>
                                                        <option value="BLR">Bangalore</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                           
                                            
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">

                                       
                                            <div class=" one_way_flight form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 control-label" for="depart">Departure</label>
                                                <div class="col-md-7">
                                                    <input type="text" id="depart" name="depart" class="form-control input-datepicker " data-date-format="mm/dd/yyyy" placeholder="mm/dd/yyyy">
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6 col-xs-12 round_flight" style="display:none;">
                                                <label class="col-md-4 control-label" for="example-datepicker">Return Date</label>
                                                <div class="col-md-7">
                                                    <input type="text" id="val_date2" name="return" class="form-control input-datepicker" data-date-format="mm/dd/yyyy" placeholder="mm/dd/yyyy">
                                                </div>
                                            </div>

                                           
                                           
                                            
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">
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

	<div class="row">
	<div class="form-group col-md-6 col-xs-12">
                                             <label class="col-md-5 col-xs-5 control-label" for="example-datepicker">Infants (Below 2 Years)</label>
		<div class="col-xs-7 col-sm-7">
			<div class="input-group number-spinnerr">
				<span class="input-group-btn">
					<a class="btn btn-default spinner" data-dir="dwn"><i class="fa fa-minus" aria-hidden="true"></i></a>
				</span>
                            <input type="text" name="infant" class="form-control text-center" value="0">
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
                         </style>
                         
                            
                            
                              <hr style="border:1px dashed #eaedf1;width: 100%;">
                                         <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="seat">Class</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="seat" name="seat" class="form-control">
                                                        <option value="">Please select</option>
                                                        <option value="ECONOMY">Economy</option>
                                                        <option value="PREMIUMECONOMY">Premium Economy</option>
                                                        <option value="BUSINESS">Business Class</option>
                                                        <option value="FIRSTCLASS">First Class</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
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
                            
                           
                            
<script>
$(document).ready(function() {
    $('.flight_radio').click(function() {
       $('.round_flight').hide(),
	   $('.one_way_flight').show();
    });
});
 


  $(document).ready(function() {
    $('.flight_radio1').click(function() {
       $('.round_flight').show(),
	   $('.one_way_flight').show();
    });
});

</script>

 
                     
                   
                            
                            
                            
                        </div>
                    </div>
                    
                    
                   



                    


                   


                  

