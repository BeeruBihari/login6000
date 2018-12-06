<script src="ajax/bus.js"></script>
<div id="page-content">
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Book Bus<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> Bus</li>
                            <li><a href="">Book Bus</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Book Bus</strong></h2>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                    
                                        <fieldset>
                                          <form method="post" action="index.php?action=bus_response"> 
                                           
                                            
                                         <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="from">From</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="from" name="from" class="form-control" onchange='getdist(this.value)' required>
                                                        <option value="">Please select</option>
                                                        <option value="71-Bangalore">Bangalore </option>
                                                        <option value="170-Chennai">Chennai </option>
                                                        
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                           
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="to">To</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <select id="to" name="to" class="form-control destination" required>
                                                        <option value="">Please select</option>
                                                        
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                           
                                           
                                            
                                           
                                            
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">

                                       
                                            <div class=" form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 control-label" for="example-datepicker">Departure</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <input required type="text" id="departure" name="date" class="form-control input-datepicker set_date forn_control12" data-date-format="mm/dd/yyyy" placeholder="mm/dd/yyyy">
                                                </div>
                                                
                                                
                                            </div>

                                      <!--  <div class=" form-group col-md-6 col-xs-12">
                                            <button type="button" class="btn btn-alt btn-primary today_date">Today</button>
                                                
                                                <button type="button" class="btn btn-alt btn-primary tomorrow_date" style="margin-left:20px;">Tomorrow</button>
                                        </div> -->
                                            

                         <script>
                             $('.today_date').click(function(){
    $('.set_date').datepicker('setDate', new Date());
});
                         </script>
                         
                         <script>
                             $('.tomorrow_date').on("click", function () {
    var date = new Date();
    date.setTime(date.getTime() + (1000*60*60*24))
    $('.set_date').datepicker("setDate", date);
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
                            .val_select
   {
      width: 100%; 
   }
    .forn_control12
    {
      margin-left: 2px;
      width: 100%; 
    }
    .button_margin123
    {
      margin-bottom:65px;
     }
     
     @media only screen and (min-width:768px) and (max-width: 768px)
{
     .forn_control12
    {
      margin-left: 6px;
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
          margin-left: 2px;
    width: 100%;
    }
}


@media only screen and (min-width:321px) and (max-width: 360px)
{
     .forn_control12
    {
      margin-left: 2px;
      width: 100%; 
    }
}
@media only screen and (min-width:361px) and (max-width: 414px)
{
    .forn_control12
    {
      margin-left: 2px;
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
                    
                    
                   



                    


                   


                  

