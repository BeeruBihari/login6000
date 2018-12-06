<?php 
function airport_name($nm) {
    if ($nm == "BLR") {
        return 'Bengaluru International Airport Devanahalli Airport';
    }
    if ($nm == "AMD") {
        return 'Sardar Vallabhbhai Patel International Airport';
    }
    if ($nm == "BOM") {
        return 'Chhatrapati Shivaji International Airport Mumbai Airport / Bombay Airport';
    }
    if ($nm == "MAA") {
        return 'Chennai International Airport Meenambakkam Airport';
    }
}
?>
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
                                    <?php if(!isset($book_detail->FailureRemarks)): ?>
                                        <fieldset>
                                          
                                          <div class="row">
             
             <div class="col-xs-12 first_part">
                  <div id="printableArea"> 
                 <div class="font1">
                     <b>Flight Ticket- <span>&nbsp;
                          <?php
                                                        if ($from_to[0] == "AMD") {
                                                            echo "Ahmedabad";
                                                        }
                                                        if ($from_to[0] == "BLR") {
                                                            echo "Banglore";
                                                        }
                                                        if ($from_to[0] == "BOM") {
                                                            echo "Mumbai";
                                                        }
                                                        ?>
                         </span><span>&nbsp;To</span><span>&nbsp;
                         <?php
                                                        if ($from_to[1] == "AMD") {
                                                            echo "Ahmedabad";
                                                        }
                                                        if ($from_to[1] == "BLR") {
                                                            echo "Banglore";
                                                        }
                                                        if ($from_to[1] == "BOM") {
                                                            echo "Mumbai";
                                                        }
                                                        ?>
                         </span></b>
                 </div><br>
                 
                 <div class="table-responsive">          
  <table class="table table-vcenter table-striped">
    <thead style="border-bottom:2px solid #ccc;">
        <th><b>Passenger's Name</b></th>
        <th><b>Passenger Type</b></th>
        <th><b>Seat No.</b></th>
        <th><b>Ticket No.</b></th>
    </thead>
    <tbody>
        <?php $counts=count($book_detail->BookOutput->FlightTicketDetails[0]->PassengerDetails);
        $pdetails=$book_detail->BookOutput->FlightTicketDetails[0]->PassengerDetails;
       
        ?>
        <tr>
       <td>
            <p><?php echo $pdetails[0]->FirstName.' '.$pdetails[0]->LastName; ?></p>
        </td>
        <td>
            <p ><?php echo $pdetails[0]->PassengerType; ?></p>
        </td>
      
        <td>
            <p ><?php  ?></p>
        </td>
        
        <td>
            <p ><?php echo $pdetails[0]->TicketNumber; ?></p>
        </td>
       
       </tr>
    <tbody>
  </table>
</div>
    <?php   
         $dtym = explode(' ', $pdetails[0]->BookedSegments[0]->DepartureDateTime);
         $d1 = explode('/', $dtym[0]);
         $atym = explode(' ', $pdetails[0]->BookedSegments[0]->Arrivaldatetime);
         $d2 = explode('/', $atym[0]);
         $datetime1 = new DateTime();
                                                                                    $datetime2 = new DateTime();
                                                                                    $datetime1 = new DateTime($d1[2] . '-' . $d1[1] . '-' . $d1[0] . $dtym[1]);
                                                                                    $datetime2 = new DateTime($d2[2] . '-' . $d2[1] . '-' . $d2[0] . $atym[1]);
                                                                                    $difference = $datetime1->diff($datetime2);
                                                                                    $total_hrs = "";
                                                                                    if ($difference->format('%a') > 0) {
                                                                                        $total_hrs = $difference->format('%aD %hhr %imin');
                                                                                    } else {
                                                                                        $total_hrs = $difference->format('%hhr %imin');
                                                                                    }
        ?>
  <i class="fa fa-fighter-jet" aria-hidden="true"></i>&nbsp;&nbsp;<span>Going | </span><span><?php echo $total_hrs; ?></span>
  
  <br><br>
  <div class="table-responsive">          
  <table class="table table-vcenter table-striped">
    <thead style="border-bottom:2px solid #ccc;">
        <th><b>Date</b></th>
        <th><b>Time</b></th>
        <th><b>From</b></th>
        <th><b>To</b></th>
        <th><b>Flight No.</b></th>
        <th><b>Terminal</b></th>
        <th><b>Airline</b></th>
        <th><b>PNR No.</b></th>
    </thead>
    <tbody>
       <tr>
       
        <td>
            <p ><?php echo $dtym[0]; ?></p>
        </td>
        <td>
            <p ><?php echo $dtym[1]; ?></p>
        </td>
        
        <td>
            <p > <?php
                                                        if ($from_to[0] == "AMD") {
                                                            echo "Ahmedabad";
                                                        }
                                                        if ($from_to[0] == "BLR") {
                                                            echo "Banglore";
                                                        }
                                                        if ($from_to[0] == "BOM") {
                                                            echo "Mumbai";
                                                        }
                                                        ?></p>
        </td>
        
        <td>
            <p > <?php
                                                        if ($from_to[1] == "AMD") {
                                                            echo "Ahmedabad";
                                                        }
                                                        if ($from_to[1] == "BLR") {
                                                            echo "Banglore";
                                                        }
                                                        if ($from_to[1] == "BOM") {
                                                            echo "Mumbai";
                                                        }
                                                        ?></p>
        </td>
         <td>
            <p ><?php echo $_POST['flight_id']; ?></p>
        </td>
         <td>
            <p ></p>
        </td>
         <td>
            <p ><?php echo $book_detail->BookOutput->FlightTicketDetails[0]->AirlineDetails[0]->AirlineName; ?></p>
        </td>
         <td>
            <p ><?php echo $book_detail->BookOutput->FlightTicketDetails[0]->HermesPNR; ?></p>
        </td>
       </tr>
    <tbody>
  </table>
</div>

<p><span><?php $total_hrs; ?> | </span><span> <?php echo airport_name($from_to[0]); ?> </span><span>&nbsp;</span><span>&nbsp;<?php echo airport_name($from_to[1]); ?></span></p>


<div class="table-responsive">          
  <table class="table table-vcenter table-striped">
    <thead style="border-bottom:2px solid #ccc;">
        <th><b>E-Ticket Number</b></th>
        <th><b>Booking Reference</b></th>
        <th><b>Price Summary</b></th>
        
    </thead>
    <tbody>
       <tr>
       
        <td>
            <p ></p>
        </td>
        <td>
<p><span>AIRLINE:</span>&nbsp;<span><b><?php echo $book_detail->BookOutput->FlightTicketDetails[0]->AirlineDetails[0]->AirlinePNR; ?></b></span></p>
        </td>
        
        <td>
            <p ><?php echo $book_detail->BookOutput->FlightTicketDetails[0]->PaymentDetails->Amount; ?></p>
        </td>
        
        
       </tr>
    <tbody>
  </table>
</div>
<br>

<b>Web Checkin</b>
<ul style="list-style-type: circle;padding: 15px;">
    <li><span><b>KP:&nbsp;</b><span><a href="http://kpagent.kandoipower.com">http://kpagent.kandoipower.com</a></span></span></li>
</ul>

<b>Important Information</b>
<ul style="list-style-type: circle;padding: 15px;">
    <li>Please confirm the terminal with the airline as the same can be changed anytime before departure</li>
    <li><b>For any cancellation of your booking, please contact KP and not the Airlines directly. This enable us to expedite your refund.</b></li>
    <li>Lead charges includes Conv.fee, insurance charges (if selected), Visa Campaign (if applicable)</li>
    <li>Use PNR for all communication you have directly with the airline about this booking</li>
    <li>Your Ticket Number serves as confirmation of your ticket status</li>
    <li>Carry a print out of this e-ticket and present it to the airline counter at time of check-in</li>
    <li>Carry photo indentification, you will need it as proof of identity while checking in</li>
    <li>As per the airlines rules, the standard check-in time begins 2 hours before departure for domestice flights.</li>
    <li>In case of cancellation of a ticket, Company at its sole discretion and without notice to the user. Please note these charges shall be over and above the airline cancellation charges.</li>
    <li>The detailed terms and conditions set out at http:______________________ are incorporated hearein by reference and shall accordingly apply to the booking.</li>
    <li>In addition to the aforesaid terms and conditions, the terms and conditions of the respective airlines shall also be applicable to the booking. In case of any inconsistency or conflict between the terms and conditions herein visa the terms and conditions of the airlines the terms and conditions of the airlines shall supersede.</li>
</ul>

<p style="font-size:18px;">Fare Rules & Baggage : </p>
<hr style="border:1px solid #000;">
<table>
    <tr>
        <td><img src="http://kandoipower.com/template/sections/img/flight.png" class="img_flight"></td>
        <td>HYD-AMD (566789789)</td>
        <td>REFUNDABLE</td>
    </tr>
</table>

<div class="row">
    <div class="col-xs-12 col-sm-6">
        <p>Cancellation Charge</p>
        <table class="table table-bordered">
    
    <tbody>
        <tr>
            <td>KP Fee</td>
            <td>300</td>
            
        </tr>
        <tr>
            <td>0-2 hours</td>
            <td>Not Allowed</td>
            
        </tr>
        <tr>
            <td>>2 hours</td>
            <td>3000</td>
            
        </tr>
    </tbody>
</table>
    </div>
    
    <div class="col-xs-12 col-sm-5">
        <p>Baggage</p>
        <table class="table table-bordered">
    
    <tbody>
        <tr>
            <td>Baggage Type</td>
            <td>Check-in Baggage</td>
            <td>Hand Baggage</td>
            
        </tr>
        <tr>
            <td>Adult</td>
            <td>15 Kgs</td>
            <td>7 Kgs</td>
        </tr>
        
    </tbody>
</table>
    </div>
  </div>
  
<div class="row">    
    <div class="col-xs-12 col-sm-5">
        <p>Rescheduling Charges</p>
        <table class="table table-bordered">
    
    <tbody>
        <tr>
             <td>KP Fee</td>
            <td>Airline Fee</td>
            
            
        </tr>
        <tr>
            <td>300</td>
            <td>895896</td>
            
        </tr>
        
    </tbody>
</table>
    </div>
    
</div>

<p>*Above details are per passenger per sector</p>
            </div>
            <button  type="submit" class="btn btn-sm btn-primary" style="margin-top:5px;" onClick="printDiv('printableArea')"> Print this page</button>
          
            </div>
         </div> 
                                       
                                         </fieldset>
                                  <?php 
                                  else:
                                      ?>
                                    <h3 style="margin-top: 5%;"><?php echo $book_detail->FailureRemarks; ?></h3>
                                    <?php
                                      
                                  endif; ?>
                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                           
                            


	<script>
		    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
		</script>	 
                    <style>

   .img_flight
   {
       height:30px;
   }
    .first_part
    {
        background-color:#fff;
        
        padding:10px;
    }
    .font1
    {
        font-size:16px;
    }
    .main-content table td 
    {
      border:none;
    }
</style>
                   
                            
                            
                            
                        </div>
                    </div>
                    
                    
                   



                    


                   


                  

