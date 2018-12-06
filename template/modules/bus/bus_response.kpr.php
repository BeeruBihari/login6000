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
                                <div class="block" style="background:#f9fafc;">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Book Bus</strong></h2>
                                    </div>
                                   
                                    
                                        <fieldset>
                                          
                                          
                                          <div class="first_part">
              
                  <div class="row">
                      
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="second_part">
                           <div class="row">
                               <div class="col-xs-12 col-sm-5">
                                   <div class="row">
                                       <div class="col-xs-4 col-sm-4">
                                           <p class="first_title"><?php echo $ori_e[1]; ?></p>
                                          <P class="first_title2">Origin </P> 
                                       </div>
                              
                                    <div class="col-xs-4 col-sm-4" style="text-align:center;">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true" style="font-size:25px;"></i>
                                    </div>
                             
                                <div class=" col-sm-4 col-xs-4">
                                  <p class="first_title"><?php echo $dis_e[1]; ?></p>
                                  <P class="first_title2">Destination</P>
                               </div>
                            </div>
                        </div>
                               
                               <div class="col-xs-12 col-sm-3">
                                  <p class="first_title"><?php echo $dateofmonth.' '.$month; ?></p>
                                  <P class="first_title2"><?php echo $dayOfWeek; ?></P>
                               </div>
                             
                               
                              <div class="col-sm-1"></div>
                               
                               
                               <!--<div class="col-xs-12 col-sm-3">
                                  <button type="submit" class="btn btn-sm btn-primary" style="margin-bottom:10px;"> Modify Search</button>
                               </div> -->
                           
                        </div>
                    </div>
                   
                   
                  
                
                   
                   
                   
             
              
              </div>
               </div>
                </div> 
              
              <div class="col-xs-12 col-sm-3 row fliter_flight">
                    
                    	<div class="col-lg-12 col-md-12 col-sm-12">
                        	
                            <div class="sidebar-box-heading">
                            	<i class="icons icon-filter"></i>
                            	<h4>Filters</h4>
                            </div>
                            
                            <div class="sidebar-box-content sidebar-padding-box" style="background-color: #fff;padding: 10px;">
                            	
                               
                               <p class="stops">Bus Type</p>
                                <input type="checkbox" id="categorymanufacturer1"><label for="categorymanufacturer1">AC</label><br>
                                <input type="checkbox" id="categorymanufacturer2"><label for="categorymanufacturer2">Non AC</label><br>
                                <input type="checkbox" id="categorymanufacturer3"><label for="categorymanufacturer3">Seater</label><br>
                                <input type="checkbox" id="categorymanufacturer4"><label for="categorymanufacturer4">Sleeper</label><br>
                                
                                <br>
                                <div style="border-bottom: 1px solid #e3e6e6;"></div>
                                
                                
                                <p class="stops">Bus Brand</p>
                                <input type="checkbox" id="categorymanufacturer1"><label for="categorymanufacturer1">Volvo</label><br>
                                <input type="checkbox" id="categorymanufacturer2"><label for="categorymanufacturer2">Mercedes</label><br>
                                <input type="checkbox" id="categorymanufacturer2"><label for="categorymanufacturer2">Scania</label><br>
                              
                                <br>
                                                                 <hr style="border:1px solid #ccc;">
                               
                                
                                 <p class="stops">Price</p>
                                 <p>Upto Rs. 2663</p>
                            <input type="text" id="example-slider-range1" name="example-slider-range1" class="form-control input-slider" data-slider-min="0" data-slider-max="1000" data-slider-step="1" data-slider-value="[400,600]" data-slider-orientation="horizontal" data-slider-tooltip="hide">
                  
                                <br>
                                <div style="border-bottom: 1px solid #e3e6e6;"></div>
                               
                               
                             
                               <p class="stops">Departure Time</p>
                               <p>Bengaluru Sat, 14 Oct 2017</p>
                            <input type="text" id="example-slider-range1" name="example-slider-range1" class="form-control input-slider" data-slider-min="0" data-slider-max="1000" data-slider-step="1" data-slider-value="[400,600]" data-slider-orientation="horizontal" data-slider-tooltip="hide">
                  
                                <br><br>
                                <div style="border-bottom: 1px solid #e3e6e6;"></div>
                                <br>
     
                               
                               
                               
                                
                                
                                
                                 <p class="stops">Bording Points</p>
                                <div class="scrollbar" id="style-3">							
							<div class="board_point"  style="height:150px;">
								
                                <input type="checkbox" id="board_pt1"><label for="board_pt1">Marathahalli</label><br>
                                <input type="checkbox" id="board_pt2"><label for="board_pt2">Bellandur</label><br>
                                <input type="checkbox" id="board_pt3"><label for="board_pt3">Hsr layout</label><br>
								<input type="checkbox" id="board_pt4"><label for="board_pt4">Madiwala</label><br>
								<input type="checkbox" id="board_pt5"><label for="board_pt5">Electronic City</label><br>
								<input type="checkbox" id="board_pt6"><label for="board_pt6">Bommasandara</label><br>
								<input type="checkbox" id="board_pt7"><label for="board_pt7">Narayana Hrudayalaya</label><br>
								<input type="checkbox" id="board_pt8"><label for="board_pt8">Hosur</label><br>
							
								<input type="checkbox" id="board_pt23"><label for="board_pt23">Marthahalli</label><br>
								
								<input type="checkbox" id="board_pt28"><label for="board_pt28">Indira nagar</label><br>
								<input type="checkbox" id="board_pt29"><label for="board_pt29">Kalasipalayam</label><br>
								<input type="checkbox" id="board_pt30"><label for="board_pt30">Silk board</label><br>
								<input type="checkbox" id="board_pt31"><label for="board_pt31">Bommana halli</label><br>
							
								
								<input type="checkbox" id="board_pt35"><label for="board_pt35">Double road</label><br>
								<input type="checkbox" id="board_pt36"><label for="board_pt36">Indiranagara</label><br>
								<input type="checkbox" id="board_pt37"><label for="board_pt37">Anandarao circle</label><br>
								<input type="checkbox" id="board_pt38"><label for="board_pt38">Marathalli</label><br>
								<input type="checkbox" id="board_pt39"><label for="board_pt39">Kalasipalyam</label><br>
								<input type="checkbox" id="board_pt40"><label for="board_pt40">Shanthinagar</label><br>
								<input type="checkbox" id="board_pt41"><label for="board_pt41">Bommasandra</label><br>
								
								<input type="checkbox" id="board_pt42"><label for="board_pt42">Jayanagar 4th block</label><br>
								<input type="checkbox" id="board_pt43"><label for="board_pt43">Gandhinagar</label><br>
								<input type="checkbox" id="board_pt44"><label for="board_pt44">Dairy circle</label><br>
								<input type="checkbox" id="board_pt45"><label for="board_pt45">Nagasandra circle</label><br>
								<input type="checkbox" id="board_pt46"><label for="board_pt46">Maruthi mandira</label><br>
								<input type="checkbox" id="board_pt47"><label for="board_pt47">Vijayanagar</label><br>
								
								
								
								<input type="checkbox" id="board_pt63"><label for="board_pt63">Shanthi nagar</label><br>
								<input type="checkbox" id="board_pt64"><label for="board_pt64">Indiranagar</label><br>
								<input type="checkbox" id="board_pt65"><label for="board_pt65">Hosur kallada</label><br>
								<input type="checkbox" id="board_pt66"><label for="board_pt66">Krishnagiri byepass</label><br>
								<input type="checkbox" id="board_pt67"><label for="board_pt67">Doubleroad end</label><br>
								<input type="checkbox" id="board_pt68"><label for="board_pt68">Electronics city toll</label><br>
								<input type="checkbox" id="board_pt69"><label for="board_pt69">Kalasipalayam bus pickup</label><br>
							</div>
                           </div>

                              <br>
                                 <hr style="border:1px solid #ccc;">
                                <br>


                                                       <p class="stops">Bus Operator</p>
                             
							 <div class="scrollbar" id="style-3">							
							<div class="board_point"  style="height:160px;">
								
                                <input type="checkbox" id="board1"><label for="board1">Orange Tours & Travels</label><br>
                                <input type="checkbox" id="board2"><label for="board2">KALLADA TOURS & TRAVELS</label><br>
                                <input type="checkbox" id="board3"><label for="board3">KPN Travels</label><br>
								<input type="checkbox" id="board4"><label for="board4">Hebron Transports</label><br>
								<input type="checkbox" id="board5"><label for="board5">Seabird Tourists</label><br>
								<input type="checkbox" id="board6"><label for="board6">Jabbar Travels</label><br>
								<input type="checkbox" id="board7"><label for="board7">SRM Transports</label><br>

								<input type="checkbox" id="board14"><label for="board14">Sharma Transports</label><br>
								<input type="checkbox" id="board15"><label for="board15">Geepee Travels</label><br>
								<input type="checkbox" id="board16"><label for="board16">Evacay Bus (To Velachery)</label><br>
								<input type="checkbox" id="board17"><label for="board17">SRS Travels</label><br>
								<input type="checkbox" id="board18"><label for="board18">Konduskarsr Travels</label><br>
							
								
								<input type="checkbox" id="board20"><label for="board20">APR Travels</label><br>
								<input type="checkbox" id="board21"><label for="board21">YBM Travels</label><br>
								<input type="checkbox" id="board22"><label for="board22">National Travels(nts)</label><br>
								<input type="checkbox" id="board23"><label for="board23">VRL Travels</label><br>
								<input type="checkbox" id="board24"><label for="board24">Asian Xpress</label><br>
							
								<input type="checkbox" id="board27"><label for="board27">GP Travels</label><br>
								
								
								<input type="checkbox" id="board28"><label for="board28">NTS</label><br>
								<input type="checkbox" id="board29"><label for="board29">JTS Muthalib Travels</label><br>
								<input type="checkbox" id="board30"><label for="board30">HMS Travels</label><br>
								<input type="checkbox" id="board31"><label for="board31">HMS Jabbar Travels</label><br>
								
								<input type="checkbox" id="board42"><label for="board42">Geepee travels bus</label><br>
								
								<input type="checkbox" id="board43"><label for="board43">JAHAN JABBAR TRAVELS</label><br>
								<input type="checkbox" id="board44"><label for="board44">APRTravels</label><br>
								<input type="checkbox" id="board45"><label for="board45">BANGALORE TO CHENNAI</label><br>
								<input type="checkbox" id="board46"><label for="board46">Gee Bus</label><br>
								<input type="checkbox" id="board47"><label for="board47">5PM CHENNAI</label><br>
								<input type="checkbox" id="board48"><label for="board48">SMA Travels</label><br>
								
								<input type="checkbox" id="board56"><label for="board56">YBMTravels</label><br>
								
								<input type="checkbox" id="board57"><label for="board57">SMPK Tours And Travels</label><br>
								
								
								
							</div>
							
                           </div>
                           
                           <br>
                                 <hr style="border:1px solid #ccc;">
                                <br>
                                
                               
                                
                               
                               
                            </div>
                            
                        </div>
                        
                    </div>
              
              <div class="col-xs-12 col-sm-9">
              <div class="third_part">
                
                  <div class="table-responsive" style="padding-left: 10px;">          
  <table class="table table-condensed ">
    <thead>
      <tr >
       
        <th class="width1"><p class="first_title2">Operator</p></th>
        <th class="width1"><p class="first_title2">Departure</p></th>
       <!-- <th class="width1"><p class="first_title2">Duration</p></th> -->
        <th class="width1"><p class="first_title2">Arrival</p></th>
        <th class="width1"><p class="first_title2">Price</p></th>
        <th class="width1"><p class="first_title2">Select</p></th>
      </tr>
      
    </thead>
    <tbody>
       <?php
	   foreach($buslist as $r){
		   
	   
	   ?>
      <tr class="border123">
                  

        <td>
            <p class="first_title"><?php echo $r->TransportName; ?></p>
            <P class="first_title2"><?php echo $r->BusType.','.$r->Fares[0]->SeatType; ?></P>
        </td>
        <td>
            <p class="first_title"><?php echo $r->DepartureTime; ?></p>
            <!--<P class="first_title2"></P>-->
        </td>
       <!-- <td>
            <P class="first_title2">11 hr 30 min</P>
            <a  class="dropping_bording" style="font-size:10px;color:#00b9f5;" data-toggle="pill" data-parent="#accordion" href="#menu1">Boarding & Dropping Point</a>
        </td> -->
        <td>
          <p class="first_title"><?php echo $r->ArrivalTime; ?></p>
           <!-- <P class="first_title2">BLR</P>    -->
        </td>
        <td>
            <p class="first_title">Rs.<?php echo $r->Fares[0]->Fare; ?></p>
            <P class="first_title2">Refundable</P>
        </td>
        <td><button type="submit" class="btn btn-sm btn-primary book_seat" data-toggle="pill" data-parent="#accordion" href="#home" style="margin-bottom:10px;"> Book Seat</button><br>

        </td>
      </tr>
	  <?php
	   }
	  ?>
	  <br>
      
      <script>
          $(".book_seat").click(function(){
          $(".flight_detail1").toggle("flight_detail1");
});
      </script>
       
      <script>
          $(".dropping_bording").click(function(){
          $(".flight_detail1").toggle("flight_detail1");
}); 
      </script>
     <script>
$(document).ready(function(){
    $(".dropping_bording").click(function(){
        $(".abc1").addClass("active");
        $(".abc").removeClass("active");
        $(".abc2").removeClass("active");
        $(".abc3").removeClass("active");
    });
});
</script>

<script>
$(document).ready(function(){
    $(".book_seat").click(function(){
        $(".abc").addClass("active");
        $(".abc1").removeClass("active");
        $(".abc2").removeClass("active");
        $(".abc3").removeClass("active");
    });
});
</script>
     
     
      <tr class="flight_detail1"  style="display:none;">
           
          <td colspan="5">
              <div>
       <ul class="nav nav-pills">
 
    <li class="abc active"><a data-toggle="pill" href="#home">Available Seats</a></li>
   <!-- <li class="abc1"><a data-toggle="pill" href="#menu1">Bording & Droping Point</a></li>
    <li class="abc2"><a data-toggle="pill" href="#menu2">Review</a></li>
     <li class="abc3"><a data-toggle="pill" href="#menu3">Cancellation Policy</a></li> -->
   
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        
    <div class="col-sm-12 col-xs-12" style="border:1px solid #ccc;border-radius:5px;padding:10px;
    margin-top: 20px;height:222px;">
          <form method="post" action="#"> 
                                           
                                            
                                         <div class="form-group col-md-6 col-xs-6">
                                               
                                                
                                                    <select id="from" name="from" class="form-control bordding">
                                                        <option value="">Select Bording Point</option>
                                                        <option value="master">Delhi</option>
                                                        <option value="distributor">Rajkot</option>
                                                        <option value="retailer">Surat</option>
                                                       
                                                    </select>
                                               
                                            </div>
                                           
                                          <div class="form-group col-md-6 col-xs-6">
                                               
                                                
                                                    <select id="from" name="from" class="form-control dropping">
                                                        <option value="">Select Dropping Point</option>
                                                        <option value="master">Delhi</option>
                                                        <option value="distributor">Rajkot</option>
                                                        <option value="retailer">Surat</option>
                                                       
                                                    </select>
                                                
                                            </div>
                                            
                                            <div class="form-group col-md-6 col-xs-12 seat_details" style="display:none;">
                                                
                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <p style="font-size: 15px;">Seats</p>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6">
                                                        <b style="font-size: 15px;">h1,h2,h3</b>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <p style="font-size: 15px;">Fare</p>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6">
                                                        <b style="font-size: 15px;">500</b>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="row" style="background: #fafafa;padding-top: 9px;">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <p style="font-size: 15px;">Total</p>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6">
                                                        <b style="font-size: 15px;">Rs.500</b>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                           
                                        <div class="form-group col-md-6 col-xs-6">  
                                            <p class="for_all">Please select seat(s), boarding & dropping points to continue</p>
                                            
                                            <p class="for_bording" style="display:none;">Please select seat(s) & dropping point to continue</p>
                                            
                                            <p class="for_seat" style="display:none;">Please select seat(s) to continue</p>
                                        </div>
                                        
                                         <div class="form-group col-md-6 col-xs-6">    
                                            <center><button type="submit" class="btn btn-sm btn-primary continue1"  disabled="disabled">Continue</button></center>
                                         </div>    
                                            
      </div>
     
       <p class="msg12" style="display:none;color:red;">There cannot be more than 5 passengers in a single booking</p>
    
    <div class="row">
      <div class="col-xs-12 col-sm-7 seat">
          <div class="row">
              <div class="col-xs-2 col-sm-2 heading">
                   <span>U</span><BR>
                   <span>P</span><br>
                   <span>P</span><br>
                   <span>E</span><br>
                   <span>R</span>
              </div>
         
        
       <div class="col-xs-10 col-sm-10">
         <div class="row" style="margin-top: 36px;">
             <div class="col-xs-1 col-sm-1"></div>
             <div class="col-xs-2 col-sm-2">
                 
	             
                 	<!--<span><div class="infoToggler" onclick="img_change('1','infoToggler');" alt="<?php echo Fimages; ?>/bus-seat-blue.png">
                    <img src="<?php echo Fimages; ?>/bus-seat-blank.png" class="1">
                    
                   
                 </div></span>-->
                 
                 <input type="checkbox" class="custom_image LCheckbox" value="1" id="CB1" style="display:none;"/><label for='CB1' class="img_change_demo" style="padding-left: 52px;
    margin-top: 3px;">&nbsp;</label>
                <label class="centered">12</label>
               

             </div>
             
             <!---checked only 5 check box----->
             
             
             <div class="col-xs-2 col-sm-2">
                
	             
                 	<!--<span><div class="infoToggler" onclick="img_change('2','infoToggler');" alt="<?php echo Fimages; ?>/bus-seat-blue.png">
                    <img src="<?php echo Fimages; ?>/bus-seat-blank.png" class="2">
                    
                   
                 </div></span>-->
                 
                 <input type="checkbox" class="custom_image LCheckbox" value="1" id="CB2" style="display:none;"/>
                 <label for='CB2' class="img_change_demo" style="padding-left: 52px;margin-top: 3px;">&nbsp;</label>
                 <label class="centered">12</label>
             </div>
             
             
             
             <style>
                 input[type=checkbox] + .img_change_demo
 {
     background: url('<?php echo Fimages; ?>/bus-seat-blank.png') 0 0px no-repeat;
     height: 19px;
     
 }
 input[type=checkbox]:checked + .img_change_demo {
     background: url('<?php echo Fimages; ?>/bus-seat-blue.png') 0 0px no-repeat;
     
 }
 .centered {
    position: absolute;
   top: 45%;
    left: 60%;
    transform: translate(-50%, -50%);
    color:#000;
}
  
  input[type=checkbox]:checked + label +label
  {
      color:#fff;
  }
             </style>




             <div class="col-xs-2 col-sm-2">
                   <input type="checkbox" class="custom_image LCheckbox" value="1" id="CB3" style="display:none;"/><label for='CB3' class="img_change_demo" style="padding-left: 52px;
    margin-top: 3px;">&nbsp;</label>
    <label class="centered">12</label>
             </div>
             
             <div class="col-xs-2 col-sm-2">
                 <input type="checkbox" class="custom_image LCheckbox" value="1" id="CB4" style="display:none;"/><label for='CB4' class="img_change_demo" style="padding-left: 52px;
    margin-top: 3px;">&nbsp;</label>
    <label class="centered">12</label>
             </div>
             
             <div class="col-xs-2 col-sm-2">
                   <input type="checkbox" class="custom_image LCheckbox" value="1" id="CB5" style="display:none;"/><label for='CB5' class="img_change_demo" style="padding-left: 52px;
    margin-top: 3px;">&nbsp;</label>  
    <label class="centered">12</label>
             </div>
             
         </div>
         
         
         <div class="row" style="margin-top: 20px;">
             <div class="col-xs-1 col-sm-1"></div>
             <div class="col-xs-2 col-sm-2">
                  <input type="checkbox" class="custom_image LCheckbox" value="1" id="CB6" style="display:none;"/><label for='CB6' class="img_change_demo" style="padding-left: 52px;margin-top: 3px;">&nbsp;</label>
                  <label class="centered">12</label>
             </div>
             
             <div class="col-xs-2 col-sm-2">
                   <input type="checkbox" class="custom_image LCheckbox" value="1" id="CB7" style="display:none;"/><label for='CB7' class="img_change_demo" style="padding-left: 52px;margin-top: 3px;">&nbsp;</label>
                   <label class="centered">12</label>
             </div>
             <div class="col-xs-2 col-sm-2">
                   <input type="checkbox" class="custom_image LCheckbox" value="1" id="CB8" style="display:none;"/><label for='CB8' class="img_change_demo" style="padding-left: 52px;margin-top: 3px;">&nbsp;</label>
                   <label class="centered">12</label>
             </div>
             <div class="col-xs-2 col-sm-2">
                  <input type="checkbox" class="custom_image LCheckbox" value="1" id="CB9" style="display:none;"/><label for='CB9' class="img_change_demo" style="padding-left: 52px;
    margin-top: 3px;">&nbsp;</label>  
    <label class="centered">12</label>
             </div>
             <div class="col-xs-2 col-sm-2">
 <input type="checkbox" class="custom_image LCheckbox" value="1" id="CB10" style="display:none;"/><label for='CB10' class="img_change_demo" style="padding-left: 52px;margin-top: 3px;">&nbsp;</label>
    <label class="centered">12</label>
             </div>
         </div>
         
         <div class="row" style="margin-top: 20px;">
             <div class="col-xs-1 col-sm-1"></div> 
             <div class="col-xs-2 col-sm-2">
                   
             </div>
             <div class="col-xs-2 col-sm-2">
                    
             </div>
             <div class="col-xs-2 col-sm-2">
                   
             </div>
             <div class="col-xs-2 col-sm-2">
                    
             </div>
             <div class="col-xs-2 col-sm-2">
                   
             </div>
         </div>
         
         
         <div class="row" style="margin-top: 20px;">
             
             <div class="col-xs-1 col-sm-1"></div>
             <div class="col-xs-2 col-sm-2">
                   <input type="checkbox" class="custom_image LCheckbox" value="1" id="CB11" style="display:none;"/><label for='CB11' class="img_change_demo" style="padding-left: 52px;
    margin-top: 3px;">&nbsp;</label>
    <label class="centered">12</label>
             </div>
             <div class="col-xs-2 col-sm-2">
                   <input type="checkbox" class="custom_image LCheckbox" value="1" id="CB12" style="display:none;"/><label for='CB12' class="img_change_demo" style="padding-left: 52px;
    margin-top: 3px;">&nbsp;</label> 
    <label class="centered">12</label>
             </div>
             <div class="col-xs-2 col-sm-2">
                  <input type="checkbox" class="custom_image LCheckbox" value="1" id="CB13" style="display:none;"/><label for='CB13' class="img_change_demo" style="padding-left: 52px;
    margin-top: 3px;">&nbsp;</label> 
    <label class="centered">12</label>
             </div>
             <div class="col-xs-2 col-sm-2">
                  <input type="checkbox" class="custom_image LCheckbox" value="1" id="CB14" style="display:none;"/><label for='CB14' class="img_change_demo" style="padding-left: 52px;
    margin-top: 3px;">&nbsp;</label> 
    <label class="centered">12</label>
             </div>
             <div class="col-xs-2 col-sm-2">
                  <input type="checkbox" class="custom_image LCheckbox" value="1" id="CB15" style="display:none;"/><label for='CB15' class="img_change_demo" style="padding-left: 52px;
    margin-top: 3px;">&nbsp;</label>
    <label class="centered">12</label>
             </div>
         </div>
        </div>
        </div>  
         
              
        
      </div>
      
      
      
      <script>
           $(function() {
    $('.bordding').change(function(){
        $('.for_all').hide();
        $('.for_bording').show();
           
    });
});
      </script>
      
      
      <script>
          
          $(document).ready(function () { 
$('.LCheckbox').click(function(){
if($('input.LCheckbox').filter(':checked').length >= 5){
    $('input.LCheckbox:not(:checked)').attr('disabled', 'disabled');
     $('.msg12').show();
      
      
     
}
else{
    $('input.LCheckbox').removeAttr('disabled');
    $('.msg12').hide();
     $('.seat_details').show();
     $( ".continue1" ).prop( "disabled", false);
     if($('input.LCheckbox').filter(':checked').length == 0)
     {
         $('.seat_details').hide();
         $( ".continue1" ).prop( "disabled", true);
     }         
}
    
 });
 });

$(document).ready(function () {
$('.LCheckbox').change(function(){
if ($('input.LCheckbox').is(':checked') == true){
  $(this).nextAll(".LInput:first").prop('disabled', false);
    } else {
    $(this).nextAll(".LInput:first").val("").prop('disabled', true);
    

    }
 });
});
      </script>
      
      <script>
           $(function() {
    $('.dropping').change(function(){
        $('.for_all').hide();
        $('.for_bording').hide();
        $('.for_seat').hide();
       
           
    });
});
      </script>
      
      
      
     </div>
    
    <div class="row" style="padding:10px;">
         <div class="col-xs-4 col-sm-3">
             <label><img src="<?php echo Fimages; ?>/bus-seat-blank.png">&nbsp;&nbsp;Available Seats</label>
         </div> 
     
        <div class="col-xs-4 col-sm-3">
         <label><img src="<?php echo Fimages; ?>/bus-seat-blue.png">&nbsp;&nbsp;Selected Seats</label>
        </div>
        
        <div class="col-xs-4 col-sm-3">
         <label><img src="<?php echo Fimages; ?>/bus-seat-grey.png">&nbsp;&nbsp;Occupied Seats</label>
        </div>
        
    </div> 
    
    
     
     <div class="row">
      <div class="col-xs-12 col-sm-11 seat1">
          <div class="row">
              <div class="col-xs-1 col-sm-1">
                  <img src="<?php echo Fimages; ?>/steering-wheel.png" style="margin-top:20px;">
              </div>
         
        
       <div class="col-xs-11 col-sm-11">
         <div  style="margin-top: 0px;">
             
             <table>
                  
                 <tr style="height:63px;">
                  
                     <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="11" id="kp1" style="display:none;"/><label for='kp1' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">1</span></label>
                         </div>
                     </td>
                
                  <style>
                 input[type=checkbox] + .img_change_demo2
 {
     background: url('<?php echo Fimages; ?>/seat-black.png') 0 0px no-repeat;
     height: 18px;
     
 }
 input[type=checkbox]:checked + .img_change_demo2 {
     background: url('<?php echo Fimages; ?>/seat-black-blue-1.png') 0 0px no-repeat;
     
 }
 
             </style>
                      <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="12" id="kp2" style="display:none;"/><label for='kp2' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">12</span></label>
                         </div>
                     </td>
                
                     <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="13" id="kp3" style="display:none;"/><label for='kp3' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">7</span></label>
                         </div>
                     </td>
                 
                      <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="14" id="kp4" style="display:none;"/><label for='kp4' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">15</span></label>
                         </div>
                     </td>
                
<td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="15" id="kp5" style="display:none;"/><label for='kp5' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">13</span></label>
                         </div>
                     </td>
                 
                     <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="16" id="kp6" style="display:none;"/><label for='kp6' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">1</span></label>
                         </div>
                     </td>
                 
                     <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="17" id="kp7" style="display:none;"/><label for='kp7' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">18</span></label>
                         </div>
                     </td>
                 
                      <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="18" id="kp8" style="display:none;"/><label for='kp8' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">28</span></label>
                         </div>
                     </td>
                 
                      <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="19" id="kp9" style="display:none;"/><label for='kp9' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">22</span></label>
                         </div>
                     </td>
                 
                      <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="20" id="kp10" style="display:none;"/><label for='kp10' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">10</span></label>
                         </div>
                     </td>
                  
                 </tr>
                
               
                 <tr style="height:27px;">
                    <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="21" id="kp11" style="display:none;"/><label for='kp11' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">10</span></label>
                         </div>
                     </td>
                  
                
                     <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="22" id="kp12" style="display:none;"/><label for='kp12' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">13</span></label>
                         </div>
                     </td>
                  
                
                      <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="23" id="kp13" style="display:none;"/><label for='kp13' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">29</span></label>
                         </div>
                     </td>
                  
                 
                      <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="24" id="kp14" style="display:none;"/><label for='kp14' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">10</span></label>
                         </div>
                     </td>
                  
                
                     <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="25" id="kp15" style="display:none;"/><label for='kp15' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">10</span></label>
                         </div>
                     </td>
                  
                 
                      <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="26" id="kp16" style="display:none;"/><label for='kp16' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">16</span></label>
                         </div>
                     </td>
                  
                 
                     <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="27" id="kp17" style="display:none;"/><label for='kp17' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">10</span></label>
                         </div>
                     </td>
                  
                 
                      <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="28" id="kp18" style="display:none;"/><label for='kp18' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">23</span></label>
                         </div>
                     </td>
                  
                 
                      <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="29" id="kp19" style="display:none;"/><label for='kp19' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">25</span></label>
                         </div>
                     </td>
                  
                 
                      <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="30" id="kp20" style="display:none;"/><label for='kp20' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">26</span></label>
                         </div>
                     </td>
                  
                 </tr>
                 
                 <tr style="height:63px;">
                     <td>
                     </td>
                
                      <td>
                     </td>
                
                      <td>
                     </td>
                 
                      <td>
                     </td>
                
                     <td>
                     </td>
                 
                      <td>
                     </td>
                 
                     <td>
                     </td>
                 
                      <td>
                     </td>
                 
                      <td>
                     </td>
                 
                      <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="31" id="kp21" style="display:none;"/><label for='kp21' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">22</span></label>
                         </div>
                     </td>
                  
                 </tr>
                 
                 <tr style="height:27px;">
                     <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="32" id="kp22" style="display:none;"/><label for='kp22' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">10</span></label>
                         </div>
                     </td>
                  
                
                      <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="33" id="kp23" style="display:none;"/><label for='kp23' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">12</span></label>
                         </div>
                     </td>
                  
                
                      <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="36" id="kp24" style="display:none;"/><label for='kp24' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">15</span></label>
                         </div>
                     </td>
                  
                 
                      <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="37" id="kp25" style="display:none;"/><label for='kp25' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">30</span></label>
                         </div>
                     </td>
                  
                
                     <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="37" id="kp26" style="display:none;"/><label for='kp26' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">30</span></label>
                         </div>
                     </td>
                  
                 
                     <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="37" id="kp27" style="display:none;"/><label for='kp27' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">30</span></label>
                         </div>
                     </td>
                  
                 
                    <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="37" id="kp28" style="display:none;"/><label for='kp28' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">30</span></label>
                         </div>
                     </td>
                  
                 
                     <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="37" id="kp29" style="display:none;"/><label for='kp29' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">30</span></label>
                         </div>
                     </td>
                  
                 
                     <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="37" id="kp30" style="display:none;"/><label for='kp30' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">30</span></label>
                         </div>
                     </td>
                  
                 
                     <td><div style="border:1px solid #ccc;padding: 1px;margin-right: 2px;">
                         
                         <input type="checkbox" class="custom_image LCheckbox" value="37" id="kp31" style="display:none;"/><label for='kp31' class="img_change_demo2" style="padding-left: 17px;
    margin-top: 3px;"><span class="seat_name">30</span></label>
                         </div>
                     </td>
                  
                 </tr>
             </table>
             
              
             
         </div>
         
         <style>
             .seat_name
             {
                 font-size: 12px;
    font-weight: 600;
    margin-left: 8px;
             }
             
         </style>
         
          
         
         
         
        </div>
        </div>  
         </div>
              
        
      </div>
      
      <div class="row" style="padding:10px;">
         <div class="col-xs-4 col-sm-3">
             <label><img src="<?php echo Fimages; ?>/seat-black.png">&nbsp;&nbsp;Available Seats</label>
         </div> 
     
        <div class="col-xs-4 col-sm-3">
         <label><img src="<?php echo Fimages; ?>/seat-black-blue-1.png">&nbsp;&nbsp;Selected Seats</label>
        </div>
        
        <div class="col-xs-4 col-sm-3">
         <label><img src="<?php echo Fimages; ?>/seat-grey-filled.png">&nbsp;&nbsp;Occupied Seats</label>
        </div>
        
    </div>
     
     
     
    </div>
    
    
    <style>
    .seat_name
    {
      font-size: 12px;
      font-weight: 600;
    }
        .seat
        {
           border:1px solid #ccc;
           border-radius:6px;
           height:200px;
           margin-top:10px;
           margin-left:10px;
        }
        .seat1
        {
           border:1px solid #ccc;
           border-radius:6px;
           height:210px;
           margin-top:10px;
           margin-left:10px;
        }
        .sleeper_seat
        {
            border: 1px solid;
           
            height: 26px;
            border-radius:5px;
            padding:4px;
        }
        .sleeper_seat1
        {
            border: 1px solid;
           background:#9b9b9b;
           border-radius:3px;
            height: 15px;
         margin-left: -2px;
        }
        .heading
        {
            border: 1px solid #ccc;
    background: orange;
    padding: 2px;
    text-align: center;
    width: 26px;
    margin-top: 49px;
    margin-left: 20px;
        }
        .heading1
        {
            border: 1px solid #ccc;
    background: orange;
    padding: 2px;
    text-align: center;
    width: 26px;
    margin-top: 55px;
    margin-left: 20px;
        }
    </style>
    
    
   
    <script>
    
       
function img_change(id,class_nm)
{
   
  
   
     var image1 = $("."+id).attr('src');
    
      var image2 = $("."+class_nm).attr('alt');
      $("."+id).attr('src',image2);
      $("."+class_nm).attr('alt',image1);
        
}
    </script>
   
    
    
    
    
  </div>
  
  </div> 
   </td> 
 
   </tr>
     
     
      
      
    </tbody>
  </table>
  </div>
  
           </div>
           </div>
                                         
       </script>
                     
              <style>
              .scrollbar {
    float: left;
    width: 100%;
    overflow-y: scroll;
    /* overflow-x: scroll; */
    margin-bottom: 25px;
}
              .r11
              {
                  margin-left:0px;
                  margin-right:0px;
              }
              .img_flight
              {
                  margin-left:40px;
              }
              .height1
              {
                  height:150px;
              }
             .scrollbar
{
	
	float: left;
	
	width: 100%;
	
	overflow-y: scroll;

	margin-bottom: 25px;
}


/*
 *  STYLE 3
 */

#style-3::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}

#style-3::-webkit-scrollbar
{
	width: 6px;
	background-color: #F5F5F5;
}

#style-3::-webkit-scrollbar-thumb
{
	background-color: #00b9f5;
}
.th11
{
  background:#fff;
  color:black;
  font-weight:600;
}


               input[type="checkbox"]+label {
    display: inline-block;
    cursor: pointer;
    position: relative;
    padding-left: 33px;
    margin-top: 15px;
    margin-right: 15px;
    font-size: 14px;
    color:#000;
}
              .stops
              {
                  margin: 10px;
    font-size: 18px;
    margin-bottom:16px;
              }
              .sidebar-box-heading {
    color: #000;
    text-transform: uppercase;
    background: #fff;
    overflow: hidden;
    height: 50px;
    padding: 12px 20px 12px 40px;
    border-bottom: 1px solid #e3e6e6;
}
              .fliter_flight
              {
                  margin-top: -70px;
                 margin-left: 3px;
              }
              .width1
              {
                  width:110px;
              }
              .border123
              {
                  border-bottom:1px solid #ccc;
                  height:100px;
              }
              .table>thead>tr>th
              {
                  border:none;
              }
              .main-content table td
              {
                  border:none;
              }
              .first_title
              {
                font-size: 17px;
                font-weight: 600;  
              }
              .first_title2
              {
                  font-size: 12px;
                  font-weight: 600;
                  color: #9b9b9b;
                  margin-top:-6px;
              }
              .img123
              {
                  width: 68px;
                  border: 1px solid #DEEAEE;
                  margin-left: 24px;
              }
                  .re-title
                  {
                    padding:10px;
                    font-weight:600;
                  }
                  .rs
                  {
                      margin-left:224px;
                  }
                  .msg
                  {
                      margin-left: 140px;
                      color: #7ed321;
                  }
                  .payment_sum
                  {
                   font-size: 17px;
                   font-weight: 700;   
                  }
                  .date_time
                  {
                      margin-left:66px;
                  }
                  .order_no
                  {
                      margin-left:47px;
                  }
              </style>       
 <!--<img src="<?php echo THEME_URI;?>img/cash.jpg">-->             
              
             
            

<style>



.n123
{
    margin-left: 55px;
    margin-top: -42px;
}
.m123
{
    margin-left: 45px;
    margin-top: -7px;
}
.abc
{
    margin-top:0px;
}
.cashback
{
    margin-top:15px;
}
.tbl
{
    padding:10px;
    background-color:#a9a9a9;
    margin-right: 0px;
    margin-left: 0px;
}
.tblrow
{
    font-size:15px;
    font-weight:700;
}
.last
{
    margin-left:10px;
}
 .breadcrumbs 
 {
   
    margin-bottom: 1px;
    margin-top: -29px;
}
.first_part
{
    background:#012b72;
    height:210px;
    padding-top:4px;
    margin-bottom:25px;
}

   .second_part
{  background:#fff;
     height:98px;
     margin-left:30px;
      margin-right:30px;
     margin-top:30px;
     border:1px solid #fff;
     border-radius:4px;
     padding:22px;
}



.third_part
{  background:#fff;
     height:auto;
     margin-left:16px;
      margin-right:1px;
   
     border:1px solid #fff;
     border-radius:4px;
     margin-top:-72px;
     margin-bottom:20px;
}
input[type="text"]
{
   margin: 4px 0px; 
}

.wal1
{
    margin-top:0px;
}

._11kC
{
    width:100%;
}
._2qE6 
{
    font-size: 13px;
    
}


@media only screen and (min-width:300px) and (max-width: 320px)
{
    .height1
    {
      height:auto;
  }
     .wal1
   {
     margin-top: -34px;
     margin-left: 104px;
   }
   ._11kC
   {
    width:84%;
   }
   ._2qE6 
  {
    font-size: 13px;
    
  }
  .second_part
  {
      height:250px;
      margin-left: 13px;
    margin-right: 13px;
    margin-top: 16px;
  }
  .second_part1
  {
      
      margin-left: 13px;
    margin-right: 13px;
    margin-top: 16px;
  }
  .third_part
  {
      margin-left:0px;
      margin-right:0px;
      margin-top:19px;
  }
 .date_time
 {
    margin-left:0px;
    margin-top:-10px;
 }
 .order_no
 {
  margin-left:0px;
  margin-top:10px;
 }
 .first_part
{
    background:#012b72;
    height:400px;
    padding-top:4px;
    margin-bottom:25px;
}
.fliter_flight {
   margin-top: -128px;
    margin-left: -19px;
    height: auto;
    width: 315px;
}
.border123
{
    
    height: auto;
}
}

@media screen and (max-width: 1920px) {
body{

margin:0 auto;
}
 //some coding here
}
@media only screen and (min-width:321px) and (max-width: 360px)
{
     .height1
    {
      height:auto;
  }
     .wal1
   {
     margin-top: -34px;
     margin-left: 104px;
   }
   ._11kC
   {
    width:84%;
   }
   ._2qE6 
  {
    font-size: 13px;
    
  }
  .second_part1
  {
      
      margin-left: 13px;
    margin-right: 13px;
    margin-top: 16px;
  }
  .first_part
{
    background:#012b72;
    height:439px;
    padding-top:4px;
    margin-bottom:25px;
}
  .second_part
  {
      height:auto;
      margin-left: 13px;
    margin-right: 13px;
    margin-top: 16px;
  }
  
  
  .third_part
  {
      margin-left:0px;
      margin-right:0px;
      margin-top:19px;
  }
  .date_time
 {
    margin-left:0px;
    margin-top:-10px;
 }
 .order_no
 {
  margin-left:0px;
  margin-top:10px;
 }
.fliter_flight {
    margin-top: -174px;
    margin-left: -14px;
    height: auto;
    width: 343px;
}
.border123
{
    
    height: auto;
}
}
@media only screen and (min-width:361px) and (max-width: 414px)
{
      .height1
    {
      height:auto;
  }
      .wal1
   {
     margin-top: -34px;
     margin-left: 104px;
   }
   ._11kC
   {
    width:84%;
   }
   ._2qE6 
  {
    font-size: 13px;
    
  }
  .first_part
{
    background:#012b72;
    height:439px;
    padding-top:4px;
    margin-bottom:25px;
}
  .second_part1
  {
      
      margin-left: 13px;
    margin-right: 13px;
    margin-top: 16px;
  }
  .second_part
  {
      height:auto;
      margin-left: 13px;
    margin-right: 13px;
    margin-top: 16px;
  }
  .third_part
  {
      margin-left:0px;
      margin-right:0px;
      margin-top:19px;
  }
 .date_time
 {
    margin-left:0px;
    margin-top:-10px;
 }
 .order_no
 {
  margin-left:0px;
  margin-top:10px;
 }
.fliter_flight {
    
    height: auto;
    margin-top: -171px;
    margin-left: -15px;
    width: 108%;
   
}
.border123
{
    
    height: auto;
}

.main-content table td {
    padding: 10px;
    width: auto;
    display: contents;
}
}


@media only screen and (min-width:600px) and (max-width: 1024px)
{
 .first_part {
    background: #012b72;
   height: 331px;
    padding-top: 4px;
    margin-bottom: 25px;
}
.second_part {
    background: #fff;
    height: 229px;
}
.third_part {
    background: #fff;
    height: auto;
    margin-left: 16px;
    margin-right: 1px;
    border: 1px solid #fff;
    border-radius: 4px;
    margin-top: -11px;
    margin-bottom: 20px;
}
.main-content table td {
    padding: 10px;
    width: auto;
    display: contents;
}
}

@media only screen and (min-width:768px) and (max-width: 768px)
{
  .fliter_flight { 
   margin-top: -70px;
    margin-left: 4px;
    width: 182px;
    padding-left: 8px;
    padding-right: 0px;  
}
.main-content table td {
    padding: 10px;
    width: auto;
    display: contents;
}
}

@media only screen and (min-width: 769px) and (max-width: 960px)
{
      .height1
    {
      height:auto;
  }
      .wal1
   {
     margin-top: -34px;
     margin-left: 104px;
   }
   ._11kC
   {
    width:84%;
   }
   ._2qE6 
  {
    font-size: 13px;
    
  }
  .first_part
{
    background:#012b72;
    height:439px;
    padding-top:4px;
    margin-bottom:25px;
}
  .second_part1
  {
      
      margin-left: 13px;
    margin-right: 13px;
    margin-top: 16px;
  }
  .second_part
  {
      height:auto;
      margin-left: 13px;
    margin-right: 13px;
    margin-top: 16px;
  }
  .third_part
  {
      margin-left:0px;
      margin-right:0px;
      margin-top:19px;
  }
 .date_time
 {
    margin-left:0px;
    margin-top:-10px;
 }
 .order_no
 {
  margin-left:0px;
  margin-top:10px;
 }
.fliter_flight {
    margin-top: -101px;
    margin-left: -14px;
    height: auto;
    width: 343px;
}
.border123
{
    
    height: auto;
}
.main-content table td {
    padding: 10px;
    width: auto;
    display: contents;
}
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
      .wal1
   {
    
   }
   ._11kC
   {
    width:84%;
   }
   ._2qE6 
  {
    font-size: 13px;
    
  }
  .first_part
{
    background:#012b72;
    height:210px;
    padding-top:4px;
    margin-bottom:25px;
}
  .second_part
  {
     height: 107px;
    margin-left: 13px;
    margin-right: 13px;
    margin-top: 16px;
  }
  .third_part
  {
      margin-left: 11px;
    margin-right: 11px;
    margin-top: -93px;
  }
  .second_part1
  {
      
      margin-left: 13px;
    margin-right: 13px;
    margin-top: 16px;
  }
  
 .date_time
 {
    margin-left:0px;
    margin-top:-10px;
 }
 .order_no
 {
  margin-left:0px;
  margin-top:10px;
 }
 rs
                  {
                      margin-left:261px;
                  }
                  .msg
                  {
                      margin-left: 140px;
                      color: #7ed321;
                  }
}
</style>
                                            
                                       
                                        
                                       
                                         </fieldset>
                                  
                                    
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                           
                            


                    
                   
                            
                            
                            
                        </div>
                    </div>
                    
                    
                   



                    


                   


                  

