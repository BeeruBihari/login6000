<script src="ajax/dmt.js"></script>
<div id="page-content">
    <input type="hidden" id="token" value="">
    <input type="hidden" id="custId" value="">
    <input type="hidden" id="otp" value="">
    <input type="hidden" id="ss" value="">
    <input type="hidden" id="mobb" value="">
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Add Retailer<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> Retailer</li>
                            <li><a href="">Add Retailer</a></li>
                        </ul>
                        <!-- END Validation Header -->
<div class="add_data"></div>
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                         <button class="w3-button w3-xlarge w3-circle w3-teal money_box_but1" style="background-color: #00b9f5;color: #fff; border: 1px solid;">+</button>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                    
                                        <fieldset>
                                           <div class="box_part1">
                                             
                                            
                                           <hr style="border:1px dashed #eaedf1;width: 100%;">
                                           
                                            <div class="form-group col-md-12 col-xs-12">
                                                <label  for="firstname">Mobile Number</label>
                                              
                                                    <div class="col-md-12 col-xs-12 input-group">
                                                        <input type="text" id="mob_num" name="mob_num" class="form-control forn_control12" placeholder="Mobile Number">
                                                       
                                                  
                                                </div>
                                            </div>
                                        
                                            
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            
                                            
                                       
                                        
                                       
                                        <div class="form-group form-actions">
                                            <div class="col-md-12">

                                                <center><button type="submit" class="btn btn-sm btn-primary money_box_but2 but1">Submit</button></center><br>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="box_part2" style="display:none;">
                                 
                             <div class="form-group col-md-12 col-xs-12">
                                <label  for="firstname">OTP</label>
                                 <div class="col-md-12 col-xs-12 input-group">
                                    <input type="text" id="otp_first_part" name="otp_first_part" class="form-control forn_control12" placeholder="OTP">
                                </div>
                            </div>
                                        
                                 <hr style="border:1px dashed #eaedf1;width: 100%;">
                            
                            
                                            
                         <center><button type="submit" class="btn btn-sm btn-primary money_box_but_verify but2">Verify</button></center>
                         
                    </div> 
                    
                    <div class="box_part3" style="display:none;">
                              
                                
                            <div class="form-group col-md-12 col-xs-12">
                                <label  for="firstname">Full Name</label>
                                 <div class="col-md-12 col-xs-12 input-group">
                                    <input type="text" id="full_name" name="full_name" class="form-control forn_control12" placeholder="Full Name">
                                </div>
                            </div>

                           <div class="form-group col-md-12 col-xs-12">
                                <label  for="firstname">Mobile Number</label>
                                 <div class="col-md-12 col-xs-12 input-group">
                                    <input type="text" id="mobile_no2" name="mobile_no2" class="form-control forn_control12" placeholder="Mobile Number">
                                </div>
                            </div>
                            
                            
                        <div class="form-group col-md-12 col-xs-12">
                            <label  for="firstname">Account Number</label>
                             <div class="col-md-12 col-xs-12 input-group">
                                <input type="text" id="acc_no" name="acc_no" class="form-control forn_control12" placeholder="Account Number">
                            </div>
                        </div>
                         
                          <center><button type="submit" class="btn btn-sm btn-primary second_form_but but3"> Submit</button></center>
                         
                          
                    </div>
                    
                     </fieldset>
                                    
                                   
                                </div>
                                
                            </div>
                            
                           


<script>
 $(document).ready(function(){
     $(".money_box_but2").click(function(){
         $(".box_part2").show();
         $(".box_part1").hide();
         
     });
   
 });
</script> 

<script>
 $(document).ready(function(){
     $(".money_box_but1").click(function(){
         $(".box_part3").show();
         $(".box_part1").hide();
         $(".box_part2").hide();
     });
    
 });
</script>
   
   
 
 


 <script>
 $(document).ready(function(){
     $(".second_form_but").click(function(){
         $(".box_part2").show();
         $(".box_part1").hide();
         $(".box_part3").hide();
     });
   
 });
</script>
                            
<script>
 $(document).ready(function(){
     
    
 });
</script>                            
                            

                            <div class="col-md-4 col-xs-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                         <button class="w3-button w3-xlarge w3-circle w3-teal money_box_second_part_but1" style="background-color: #00b9f5;color: #fff; border: 1px solid;" disabled="disabled">+</button>
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                    
                                        <fieldset>
                                           <div class="second_part_drop_down">
                                             <div class="form-group col-md-12 col-xs-12">
                                               
                                                <label class=" control-label" for="user_type">Select Beneficiary</label>
                                                <div class="col-md-12 col-xs-12">
                                                    <select id="benf" name="benf" class="form-control drop_down_second_part" disabled="disabled">
                                                        <option value="">Please select</option>
                                                        
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            
                                           <hr style="border:1px dashed #eaedf1;width: 100%;">
                                           
                                            
                                       
                                        <div class="form-group form-actions">
                                            <div class="col-md-12">

                                                <center><button type="submit" class="btn btn-sm btn-primary money_box_second_part_but2 but4"  disabled="disabled">Money Transfer</button></center><br>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="second_part_otp" style="display:none;">
                                

                             <div class="form-group col-md-12 col-xs-12">
                                <label  for="otp">OTP</label>
                                 <div class="col-md-12 col-xs-11 input-group">
                                    <input type="text" id="opt_second_part" name="opt_second_part" class="form-control forn_control12" placeholder="OTP">
                                </div>
                            </div>
                                        
                                 <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            
                         <center><button type="submit" class="btn btn-sm btn-primary money_box_otp_verify" >Verify</button></center>
                         
                    </div> 
                    
                    <div class="second_part_form1" style="display:none;">
                              
                                
                            <div class="form-group col-md-12 col-xs-12">
                                <label  for="firstname">Full Name</label>
                                 <div class="col-md-12 col-xs-11 input-group">
                                    <input type="text" id="full_name_money_box2" name="full_name_money_box2" class="form-control forn_control12" placeholder="Full Name">
                                </div>
                            </div>

                           <div class="form-group col-md-12 col-xs-12">
                                <label  for="firstname">Mobile Number</label>
                                 <div class="col-md-12 col-xs-11 input-group">
                                    <input type="text" id="mobile_no_money_box2" name="mobile_no_money_box2" class="form-control forn_control12" placeholder="Mobile Number">
                                </div>
                            </div>
                            
                            
                        <div class="form-group col-md-12 col-xs-12">
                            <label  for="firstname">Account Number</label>
                             <div class="col-md-12 col-xs-11 input-group">
                                <input type="text" id="acc_no_money_box2" name="acc_no_money_box2" class="form-control forn_control12" placeholder="Account Number">
                            </div>
                        </div>
                        
                        <div class="form-group col-md-12 col-xs-12">
                            <label  for="firstname">IFSC Code</label>
                             <div class="col-md-12 col-xs-11 input-group">
                                <input type="text" id="ifsc_money_box2" name="ifsc_money_box2" class="form-control forn_control12" placeholder="IFSC Code">
                            </div>
                        </div>
                         
                          <center><button type="submit" class="btn btn-sm btn-primary second_part_form_but"> Submit</button></center>
                         
                          
                    </div>
                    
                     </fieldset>
                                    
                                   
                                </div>
                                
                            </div>
                            
                           
<!----------------for second part----------->
<script>
 $(document).ready(function(){
     $(".money_box_second_part_but1").click(function(){
         $(".second_part_form1").show();
         $(".second_part_drop_down").hide();
         $(".second_part_otp").hide();
     });
   
 });
</script>



<!--------------second part submit button jquery-------------->
<!--<script>
 $(document).ready(function(){
     $(".money_box_second_part_but2").click(function(){
         $('.third_part_amount_di').prop('disabled', false); 
       $('.money_box_third_part_amount').prop('disabled', false);
     });
   
 });
</script>-->

<!-------------second part form submit button---------->

<script>
 $(document).ready(function(){
     $(".second_part_form_but").click(function(){
         $(".second_part_form1").hide();
         $(".second_part_drop_down").hide();
         $(".second_part_otp").show();
     });
   
 });
</script>

<!--<script>
 $(document).ready(function(){
     $(".money_box_otp_verify").click(function(){
         $(".second_part_form1").hide();
         $(".second_part_drop_down").show();
         $(".second_part_otp").hide();
     });
   
 });
</script>-->


<div class="col-md-4 col-xs-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        
                                    </div>
                                    <!-- END Form Validation Example Title -->

                                    <!-- Form Validation Example Content -->
                                    
                                        <fieldset>
                                           <div class="third_part_amount" style="margin-top:15px;">
                                             <div class="form-group col-md-12 col-xs-12">
                                               <div class="form-group col-md-12 col-xs-12">
                                               
                                                <label class=" control-label" for="user_type">Select Transfer Mode</label>
                                                <div class="col-md-12 col-xs-12">
                                                    <select id="Transfermode" name="Transfermode" class="form-control drop_down_third_part" disabled="disabled">
                                                        <option value="IMPS">IMPS</option>
                                                        <option value="NEFT">NEFT</option>
                                                        
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            
                                                <div class="form-group col-md-12 col-xs-12">
                            <label  for="amount">Amount</label>
                             <div class="col-md-12 col-xs-11 input-group">
                                <input type="text" id="amount" name="amount" class="form-control third_part_amount_di forn_control12" placeholder="Amount" disabled="disabled">
                            <label class="label label-danger amt_no_wr" style="margin-left: 14px; display: none;"></label>
                            </div>
                        </div>
                                            </div>
                                            
                                           <hr style="border:1px dashed #eaedf1;width: 100%;">
                                           
                                            
                                       
                                        <div class="form-group form-actions">
                                            <div class="col-md-12">

                                                <center><button type="submit" class="btn btn-sm btn-primary money_box_third_part_amount button_margin123 but_last" disabled="disabled">Transfer</button></center><br>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="third_part_otp" style="display:none;">
                                

                             <div class="form-group col-md-12 col-xs-12">
                                <label  for="otp">OTP</label>
                                 <div class="col-md-12 col-xs-11 input-group">
                                    <input type="text" id="opt_second_part" name="opt_second_part" class="form-control forn_control12" placeholder="OTP">
                                </div>
                            </div>
                                        
                                 <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            
                         <center><button type="submit" class="btn btn-sm btn-primary money_box_third_part_otp button_margin123 but_last">Verify</button></center>
                         
                    </div> 
                    
                    
                    
                     
                                    
                                   
                                </div>
                                
                            </div>
                            </fieldset>
                            
                           
<script>
 
</script>
<style>
.but_last
{
    /* margin-top:70%;*/
}
.but4
{
    /* margin-top:69%;*/
}
.but3
{
    /* margin-top:22%;*/
}
 .but2
 {
   /*   margin-top:62%;*/
 }
  .but1
  {
    /*  margin-top:37%;*/
  }
    .block
    {
        height:390px;
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
      width: 91%; 
    }
    .val_select
   {
      width: 95%; 
   }
   .but1
  {
      margin-top:12%;
  }
  .but2
 {
     margin-top:23%;
 }
 .but3
{
    margin-top:8%;
}
.but4
{
    margin-top:55%;
}
.but_last
{
    margin-top:24%;
}
}
@media only screen and (min-width:300px) and (max-width: 320px)
{
 .forn_control12
    {
      margin-left: 14px;
      width: 91%; 
    }
    .but1
  {
      margin-top:25%;
  }
  .but2
 {
     margin-top:52%;
 }
 .but3
{
    margin-top:16%;
}
.but_last
{
    margin-top:39%;
}
.but4
{
    margin-top:55%;
}
}


@media only screen and (min-width:321px) and (max-width: 360px)
{
     .forn_control12
    {
      margin-left: 14px;
      width: 91%; 
    }
    .but1
  {
      margin-top:25%;
  }
  .but2
 {
     margin-top:52%;
 }
 .but3
{
    margin-top:16%;
}
.but_last
{
    margin-top:39%;
}
.but4
{
    margin-top:55%;
}
}
@media only screen and (min-width:361px) and (max-width: 414px)
{
    .forn_control12
    {
      margin-left: 14px;
      width: 91%; 
    }
    .but1
  {
      margin-top:25%;
  }
  .but2
 {
     margin-top:52%;
 }
 .but3
{
    margin-top:16%;
}
.but_last
{
    margin-top:39%;
}
.but4
{
    margin-top:55%;
}
}

@media only screen and (min-width:473px) and (max-width: 600px)
{
     .val_select
   {
      width: 89%; 
   }
   .but1
  {
      margin-top:25%;
  }
  .but2
 {
     margin-top:52%;
 }
 .but3
{
    margin-top:16%;
}
.but_last
{
    margin-top:39%;
}
.but4
{
    margin-top:55%;
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
                        </div>
                    </div>
                    
                    
                   



                    


                   


                  

