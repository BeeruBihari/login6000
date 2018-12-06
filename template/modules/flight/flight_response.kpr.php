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
                Flight Response<br>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li> Flight</li>
        <li><a href=""> Flight Response</a></li>
    </ul>
    <!-- END Validation Header -->

    <div class="row button_margin123">
        <div class="col-md-12">
            <!-- Form Validation Example Block -->
            <div class="">
                <!-- Form Validation Example Title -->
                <div class="block-title">
                    <h2><strong>Flight Response</strong></h2>
                </div>
                <!-- END Form Validation Example Title -->

                <!-- Form Validation Example Content -->
                <form method="post" action="index.php?action=flight_ticket">
                <fieldset>

                    <div class="first_part">

                        <div class="row">

                            <div class="col-xs-12 col-sm-9 col-md-9">
                                <div class="second_part">
                                    <div class="zoFw">
                                        <p>Review Flight</p>
                                    </div>
                                    <br>
                                    <?php
                                    if (!empty($_POST['book_flight'])):
                                       // print_r($_POST);
                                        $from_to= explode('_', $_POST['from_to']);
                                        $book_flight="";
                                        $key="";
                                        $person= explode('_', $_POST['person']);
                                        
                                         if($_POST['fl_type']=="O"){
                                        $querystring = "BookingType=" . $_POST['fl_type'] . "&Origin=" . $from_to[0] . "&Destination=" . $from_to[1] . "&TravelDate=" . $_POST['depart'] . "&ClassType=" . $_POST['seat'] . "&AirlineCode=".$_POST['airline_code']."&AdultCount=" . $person[0] . "&ChildCount=" . $person[1] . "&InfantCount=" . $person[2] . "&ResidentofIndia=1";
                                        $url = 'http://api.kandoipower.com/api/DomesticAir/GetAvailability?key=$2y$10$OcFBXT6El4nw2DYWbEDEU.7R9iZrjzIn0VXYtv8AWX./lneDiRl.C&mid=M67961851&' . $querystring;
                                         }
                                         if($_POST['fl_type']=="R"){
                                        $querystring = "BookingType=" . $_POST['fl_type'] . "&Origin=" . $from_to[0] . "&Destination=" . $from_to[1] . "&TravelDate=" . $_POST['depart'] . "&ClassType=" . $_POST['seat'] . "&AirlineCode=".$_POST['airline_code']."&AdultCount=" . $person[0] . "&ChildCount=" . $person[1] . "&InfantCount=" . $person[2] . "&ResidentofIndia=1&ReturnOrigin=".$from_to[1]."&ReturnDestination=".$from_to[0]."&ReturnTravelDate=".$_POST['return']."";
                                        
                                        $url='http://api.kandoipower.com/api/DomesticAir/GetAvailabilityRoundTrip?key=$2y$10$OcFBXT6El4nw2DYWbEDEU.7R9iZrjzIn0VXYtv8AWX./lneDiRl.C&mid=M67961851&'.$querystring;
                                         }
                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_URL, $url);
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                        $output = curl_exec($ch);
                                        curl_close($ch);
                                        $decode_output = json_decode($output);
                                        $ongoing = $decode_output->AvailabilityOutput->AvailableFlights->OngoingFlights;
                                        $USER_TRACK_ID = $decode_output->UserTrackId;
//                                        echo '<pre>';
//                                        print_r($ongoing);
//                                        echo '</pre>';
                                        $total_time = ''; $counter = 0; $dep = ""; $arr = ""; $avail=""; $avail_ss="";
                                        
                                        if(strpos($_POST['book_flight'], '_') !== false):
                                            
                                            //direct flight
                                            $book_flight= explode('_', $_POST['book_flight']);
                                            $key=$book_flight[0];
                                            $avail=$book_flight[1];
                                            $avail_ss=0;
                                            //echo $key;
                                        else:
                                            //connecting
                                            $key= $_POST['book_flight'];
                                        $avail=0;
                                        $avail_ss=1;
                                        endif;
                                        
                                        $avail_segments = $ongoing[$key]->AvailSegments;
                                        
                                        $dtym = explode(' ', $avail_segments[$key]->DepartureDateTime);
                                        $atym = explode(' ', $avail_segments[$key]->ArrivalDateTime);
                                        
                                        $aircode_flightno = $avail_segments[$avail_ss]->AirlineCode . ' - ' . $avail_segments[$avail_ss]->FlightNumber;
                                        $origin = $from_to[0];
                                        $destination = $from_to[1];
                                        $flight_image = $o__flight->getOneFlightImage($avail_segments[$avail_ss]->AirlineCode);
//                                        end($avail_segments);
//                                        $avail = key($avail_segments);
                                        //echo $key;
                                        $AvailPaxFareDetails = $avail_segments[$avail_ss]->AvailPaxFareDetails;
                                        //echo '<pre style="background:white;">'; print_r($AvailPaxFareDetails); echo '</pre>'; exit();
                                            $FlightId = $avail_segments[$avail_ss]->FlightId;
                                           // echo $FlightId;
                                        $ClassCode = $AvailPaxFareDetails[$avail]->ClassCode;
                                        $ClassCodeDesc = $AvailPaxFareDetails[$avail]->ClassCodeDesc;
                                        $CheckInBaggage = $AvailPaxFareDetails[$avail]->BaggageAllowed->CheckInBaggage;
                                        $HandBaggage = $AvailPaxFareDetails[$avail]->BaggageAllowed->HandBaggage;
                                        $adult_amt = $AvailPaxFareDetails[$avail]->Adult->GrossAmount;
                                        $AFareBasis = $AvailPaxFareDetails[$avail]->Adult->FareBasis;
                                        $AFareType = $AvailPaxFareDetails[$avail]->Adult->FareType;
                                        $ABasicAmount = $AvailPaxFareDetails[$avail]->Adult->BasicAmount;
                                        $ATaxDetails = $AvailPaxFareDetails[$avail]->Adult->TaxDetails;
                                        $ACommission = $AvailPaxFareDetails[$avail]->Adult->Commission;
                                        
                                        $querystring = "UserTrackId=" . $USER_TRACK_ID . "&FlightId=" . $FlightId . "&ClassCode=" . $ClassCode . "&AirlineCode=" . $avail_segments[0]->AirlineCode . "&ETicketFlag=1&BasicAmount=" . $adult_amt . "&SupplierId=1&GSTNumber=22AAAAA0000A1Z5&EMailId=test@test.com&CompanyName=xyz&Address=Rajkot&FirstName=Demo&LastName=Testing";
                                        $url = 'http://api.kandoipower.com/api/DomesticAir/GetTax?key=$2y$10$OcFBXT6El4nw2DYWbEDEU.7R9iZrjzIn0VXYtv8AWX./lneDiRl.C&mid=M67961851&' . $querystring;
                                       //  echo $url;
                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_URL, $url);
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                        $output = curl_exec($ch);
                                        curl_close($ch);
                                        $get_adult_tax = json_decode($output);
//                                                                                  echo '<pre style="background:white;">'; print_r($get_adult_tax); echo '</pre>'; exit();
                                        $Adult_Gross_Amount = 0;
                                        $Child_Gross_Amount = 0;
                                        $Infant_Gross_Amount = 0;
                                        $final_total = "";
                                        
                                        $Adult_Basic_Amount = 0;
                                        $Child_Basic_Amount = 0;
                                        $Infant_Basic_Amount = 0;
                                        $basic_final_total = "";
                                        
                                        $Adult_Tax_Amount = 0;
                                        $Child_Tax_Amount = 0;
                                        $Infant_Tax_Amount = 0;
                                        $tax_final_total = "";
                                        
                                               // $baggage_details = $get_adult_tax->TaxOutput->Baggages;
                                                if ($get_adult_tax->ResponseStatus == "1") {
                                                    $Adult_Gross_Amount = $get_adult_tax->TaxOutput->TaxResFlightSegments[0]->AdultTax->FareBreakUpDetails->GrossAmount;
                                                    $abamt=$get_adult_tax->TaxOutput->TaxResFlightSegments[0]->AdultTax->FareBreakUpDetails->BasicAmount;
                                                    $Adult_Basic_Amount= $abamt * $person[0];
                                                    $atamt=$get_adult_tax->TaxOutput->TaxResFlightSegments[0]->AdultTax->FareBreakUpDetails->TotalTaxAmount;
                                                    $Adult_Tax_Amount= $atamt * $person[0];
                                                    
                                                    if (!empty($get_adult_tax->TaxOutput->TaxResFlightSegments[0]->ChildTax)) {
                                                        $Child_Gross_Amount = $get_adult_tax->TaxOutput->TaxResFlightSegments[0]->ChildTax->FareBreakUpDetails->GrossAmount;
                                                        $cbamt=$get_adult_tax->TaxOutput->TaxResFlightSegments[0]->ChildTax->FareBreakUpDetails->BasicAmount;
                                                        $Child_Basic_Amount= $cbamt * $person[1];
                                                        $ctamt=$get_adult_tax->TaxOutput->TaxResFlightSegments[0]->ChildTax->FareBreakUpDetails->TotalTaxAmount;
                                                        $Child_Tax_Amount= $ctamt * $person[1];
                                                    }
                                                    if (!empty($get_adult_tax->TaxOutput->TaxResFlightSegments[0]->InfantTax)) {
                                                        $Infant_Gross_Amount = $get_adult_tax->TaxOutput->TaxResFlightSegments[0]->InfantTax->FareBreakUpDetails->GrossAmount;
                                                        $ibamt=$get_adult_tax->TaxOutput->TaxResFlightSegments[0]->InfantTax->FareBreakUpDetails->BasicAmount;
                                                        $Infant_Basic_Amount= $ibamt * $person[2];
                                                        $itamt=$get_adult_tax->TaxOutput->TaxResFlightSegments[0]->InfantTax->FareBreakUpDetails->TotalTaxAmount;
                                                        $Infant_Tax_Amount= $itamt * $person[2];
                                                    }
                                                    
                                                    $final_total = ($Adult_Gross_Amount * $person[0]) + ($Child_Gross_Amount * $person[1]) + ($Infant_Gross_Amount * $person[2]);
                                                    $basic_final_total=$Adult_Basic_Amount + $Child_Basic_Amount + $Infant_Basic_Amount;
                                                    $tax_final_total = $Adult_Tax_Amount + $Child_Tax_Amount + $Infant_Tax_Amount;
                                                        
                                                        
                                                    
                                                    
                                                    
                                                }

                                    endif;
                                    ?>     
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-9 col-lg-5">
                                            <div class="row">
                                                <div class="col-xs-3 col-sm-4 col-lg-4">
                                                    <p class="first_title" style="font-size:18px;">
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
                                                    </p>

                                                </div>

                                                <div class="col-xs-3 col-sm-1 col-lg-1" style="text-align:center;">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </div>

                                                <div class=" col-sm-4 col-xs-4 col-lg-4">
                                                    <p class="first_title" style="font-size:18px;">
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
                                                    </p>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3 col-lg-3">

                                            <P class="first_title4"><?php echo $_POST['depart']; ?></P>
                                        </div>
                                        

                                        <div class="col-xs-6 col-sm-6 col-lg-2">
                                            <lable style="border:1px solid #20bf7a;color:#20bf7a;padding:5px;border-radius:3px;">Refundable</lable>
                                        </div>
                                        

                                        <div class="col-xs-6 col-sm-6 col-lg-2">
                                            <a data-toggle="modal" data-target="#fare_rules" style="color:#00b9f5;cursor:pointer;">Fare Rules</a>
                                        </div>

                                        <div class="modal fade" id="fare_rules" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Fare Rules</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div ng-app="">
                                                            <div>
                                                                <form action="index.php?action=flight_ticket" method="post">

                                                                    <div class="flight_detail1">
                                                                        <ul class="nav nav-pills">


                                                                            <li class="active"><a data-toggle="pill" href="#menu1">Cancellation Policy</a></li>
                                                                            <li><a data-toggle="pill" href="#menu2">Baggage Policy</a></li>

                                                                        </ul>

                                                                        <div class="tab-content">

                                                                            <div id="menu1" class="tab-pane fade in active">
                                                                                <div class="table-responsive">          
                                                                                    <table class="table table-bordered">
                                                                                        <thead>
                                                                                            <?php 
                                                                                             $baggage_details='';
                                        for ($m = 0; $m < count($avail_segments); $m++):
                                         $querystring = "SupplierId=00&FlightId=" . $avail_segments[0]->FlightId . "&UserTrackId=" . $USER_TRACK_ID . "&FlightId=" . $FlightId . "&ClassCode=" . $ClassCode . "&AirlineCode=" . $avail_segments[0]->AirlineCode . "";
            $url = 'http://api.kandoipower.com/api/DomesticAir/GetFareRule?key=$2y$10$OcFBXT6El4nw2DYWbEDEU.7R9iZrjzIn0VXYtv8AWX./lneDiRl.C&mid=M67961851&' . $querystring;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);
            $get_fare_rule = json_decode($output);
            if($m==0):
                $baggage_details=$get_adult_tax->TaxOutput->Baggages;
            endif;
                                        ?>
                                                                                            <tr>
                                                                                        <td style="width: 20%;">Fare Rule ( <?php echo $avail_segments[$m]->Origin . ' to ' . $avail_segments[$m]->Destination; ?>)</td>
                                                                                        <td><?php echo $get_fare_rule->FareRuleOutput->FareRules; ?></td>
                                                                                    </tr>
                                                                                            <?php endfor; ?>
                                                                                        </thead>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div id="menu2" class="tab-pane fade">
                                                                                <div class="table-responsive">          
                                                                                    <table class="table table-bordered">
                                                                                        <thead>
                                                                                            <tr>
                                                                                    <td>Baggage Code</td>
                                                                                    <td>Baggage Description</td>
                                                                                    <td>Baggage Amount</td>
                                                                                </tr>
                                                                                 <?php
       
                                                                                        if(!empty($baggage_details)):
                                                                                            for($p=0;$p<count($baggage_details);$p++):
                                                                                                
        ?>
  <td style="width: 30%;"> <?php echo trim($baggage_details[$p]->BaggageCode,"BaggageCode:-"); ?></td>
            <td style="width: 30%;"><?php echo trim($baggage_details[$p]->BaggageDescription,'BaggageDescription'); ?></td>
            <td style="width: 30%;">  <?php echo trim($baggage_details[$p]->BaggageAmount,'BaggageAmount:-'); ?></td>
        </tr>
        <?php
                                                                                      endfor;
                                                                                      else:
                                                                                          ?>
        <tr><td colspan="3"> <h4>No data Available</h4> </td></tr>        
        <?php
                                                                                        endif;
        ?>                                                                                      </thead>
                                                                                    </table>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                    </div>



                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <div style="border-bottom: 1px dashed #e3e3e3;"></div>
                                    <br>


                                    <div class="table-responsive">          
                                        <table class="table ">
                                            <thead>
                                                <?php if (!empty($_POST['book_flight'])): 
                                                    
                                                      $dtym = "";
                                                                                $d1 = "";
                                                                                for ($l = 0; $l < count($avail_segments); $l++):
//echo $avail_segments[$l]->FlightId;
                                                                                    $flight_image = $o__flight->getOneFlightImage($avail_segments[$l]->AirlineCode);
                                                                                    $aircode_flightno = $avail_segments[$l]->AirlineCode . ' - ' . $avail_segments[$l]->FlightNumber;
                                                                                    if (!empty($avail_segments[$l + 1])) {
                                                                                        $dtym = explode(' ', $avail_segments[$l + 1]->DepartureDateTime);
                                                                                        $d1 = explode('/', $dtym[0]);
                                                                                    } else {
                                                                                        $dtym = explode(' ', $avail_segments[$l]->DepartureDateTime);
                                                                                        $d1 = explode('/', $dtym[0]);
                                                                                    }
                                                                                    //$dtym = explode(' ', $avail_segments[$fi]->DepartureDateTime);
                                                                                    $atym = explode(' ', $avail_segments[$l]->ArrivalDateTime);
                                                                                   
                                                                                    $date_it = explode(' ', $avail_segments[$l]->DepartureDateTime);
                                                                                    $arr_it = explode(' ', $avail_segments[$l]->ArrivalDateTime);

                                                                                    $d2 = explode('/', $atym[0]);
                                        //                                            print_r($d1); echo ' '.$dtym[1].' <br/>';
                                        //                                            print_r($d2); echo ' '.$atym[1].' <br/>';
                                        //                                            echo $nice_date . 'T' . $dtym[1].'<br/>';
                                        //                                            echo $nice_date2 . 'T' . $atym[1].'<br/><br/>';

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
                                                <tr>
                                                    <td style="width:10%;"><img src="<?php echo Fimages; ?>/45x45/<?php echo $flight_image->airline_image; ?>" class="img_flight"></td>
                                                    <td style="width:20%;">
                                                        <p class="first_title"><?php echo $flight_image->airline_name; ?></p>
                                                        <p class="first_title2"><?php echo $aircode_flightno; ?></p>
                                                        <P class="first_title2"><?php echo $_POST['seat']; ?></P> 
                                                    </td>
                                                    <td style="width:30%;">
                                                        <p class="first_title"><?php echo $from_to[0]; ?><span> <?php echo $dtym[1]; ?></span></p>
                                                        <P class="first_title2"><?php echo $dtym[0]; ?></P>
                                                        <P class="first_title22"><?php echo airport_name($avail_segments[0]->Origin); ?></P> 
                                                    </td>
                                                    <td style="width:10%;">
                                                        <i class="fa fa-clock-o" aria-hidden="true" style="margin-left: 10px;"></i><br>
                                                        <P class="first_title2" style="margin-top:0px;"><?php echo $avail_segments[0]->Duration; ?></P>
                                                    </td>
                                                    <td style="width:30%;">
                                                        <p class="first_title"><?php echo $from_to[1]; ?><span> <?php echo $atym[1]; ?></span></p>
                                                        <P class="first_title2"><?php echo $atym[0]; ?></P> 
                                                        <p class="first_title22"><?php echo airport_name($avail_segments[0]->Destination); ?></p>
                                                    </td>
                                                </tr>
                                               
                                                  <?php if ($l == (count($avail_segments) - 1)):
                                                                                else:
                                                                                    ?>
                                                <tr>
                                                    <td colspan="6">


                                            <center><div style="border: 1px solid;
                                                         padding: 9px;
                                                         border-radius: 14px;
                                                         background-color: lightgrey;margin-top:5px;margin-bottom:5px;">Layover Time:<?php echo $total_hrs; ?></div></center>


                                            </td>
                                            </tr>
                                            <?php endif; ?>

                                                                            <?php endfor; ?>
 <?php endif; ?>
                                          


                                            </thead>
                                        </table>
                                    </div>


                                </div>
                                <input type="hidden" name="persons" value="<?php echo $_POST['person']; ?>"/>
                                <input type="hidden" name="return" value="<?php echo $_POST['return']; ?>"/>
                                <input type="hidden" name="track_id" value="<?php echo $USER_TRACK_ID; ?>"/>
                                <input type="hidden" name="fl_type" value="<?php echo $_POST['fl_type']; ?>"/>
                                <input type="hidden" name="seat" value="<?php echo $_POST['seat']; ?>"/>
                                <input type="hidden" name="from_to" value="<?php echo $_POST['from_to']; ?>"/>
                                <input type="hidden" name="amount" value="<?php echo $final_total; ?>"/>
                                <input type="hidden" name="classcode" value="<?php echo $ClassCode; ?>"/>
                                <input type="hidden" name="airline_code" value="<?php echo $_POST['airline_code']; ?>"/>
                                <input type="hidden" name="flight_id" value="<?php echo $FlightId; ?>"/>
                               
                                

                                <div class="second_part123">
                                    <div class="zoFw">
                                        <p>Traveller Information</p>
                                    </div>
                                   
                                    <br>
                                   <?php if($person[0] >= 1):
                                       for($i=1;$i<=$person[0];$i++):
                                       ?>    
                                       
                                    <p style="font-weight:700;">Adult <?php echo $i; ?></p>
                                    
                                        <div class="row">


                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="title">Title </label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="text" id="title" name="adult_title<?php echo $i; ?>" required class="form-control forn_control12" placeholder="Title">

                                                </div>
                                            </div>

                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="firstname">First Name</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="text" id="firstname" name="adult_firstname<?php echo $i; ?>" required class="form-control forn_control12" placeholder="First & Middle Name">

                                                </div>
                                            </div>

                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="lastname">Last Name</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="text" id="lastname" name="adult_lastname<?php echo $i; ?>" required class="form-control forn_control12" placeholder="Last Name">

                                                </div>
                                            </div>

                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="passportnumber">Gender</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="radio" id="passportnumber" name="adult_gender<?php echo $i; ?>" required class=" " value="M">Male 
                                                    <input type="radio" id="passportnumber" name="adult_gender<?php echo $i; ?>" required class=" " value="F">Female 

                                                </div>
                                            </div>
                                            
                                            


                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 control-label" for="example-datepicker">Birthdate</label>
                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="text" id="adult_bday" alt="<?php echo $i; ?>" name="adult_bday<?php echo $i; ?>" required class="form-control forn_control12 input-datepicker adult_bday" data-date-format="mm/dd/yyyy" placeholder="mm/dd/yyyy" style="margin-left:0px;">
                                                </div>
                                            </div>
                                        
                                    <div class="form-group col-md-12 col-xs-12 age_define<?php echo $i; ?>" style="display:none;">
                                                <label class="col-md-4 col-xs-12 control-label" for="age">Age</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="" id="age<?php echo $i; ?>" name="adult_age<?php echo $i; ?>" class="form-control forn_control12" required placeholder="Age" style="margin-left:0px;">
                                                </div>
                                            </div>
                                    <?php if($i==1):
                                        ?>
                                    <div class="form-group col-md-12 col-xs-12 <?php echo $i; ?>" style="">
                                                <label class="col-md-4 col-xs-12 control-label" for="age">Mobile Number</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="" id="<?php echo $i; ?>" name="adult_mob<?php echo $i; ?>" class="form-control forn_control12" required placeholder="Mobile Number" style="margin-left:0px;">
                                                </div>
                                            </div>
                                    <div class="form-group col-md-12 col-xs-12 <?php echo $i; ?>" style="">
                                                <label class="col-md-4 col-xs-12 control-label" for="age">Email ID</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="" id="<?php echo $i; ?>" name="adult_email<?php echo $i; ?>" class="form-control forn_control12" required placeholder="Email ID" style="margin-left:0px;">
                                                </div>
                                            </div>
                                      <div class="form-group col-md-12 col-xs-12 age_define<?php echo $i; ?>" style="">
                                                <label class="col-md-4 col-xs-12 control-label" for="age">Address</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="" id="<?php echo $i; ?>" name="adult_address<?php echo $i; ?>" class="form-control forn_control12" required placeholder="Address" style="margin-left:0px;">
                                                </div>
                                            </div>
                                    <div class="form-group col-md-12 col-xs-12 age_define<?php echo $i; ?>" style="">
                                                <label class="col-md-4 col-xs-12 control-label" for="age">Pincode</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="" id="<?php echo $i; ?>" name="adult_pincode<?php echo $i; ?>" class="form-control forn_control12" required placeholder="Pincode" style="margin-left:0px;">
                                                </div>
                                            </div>
                                      <div class="form-group col-md-12 col-xs-12 age_define<?php echo $i; ?>" style="">
                                                <label class="col-md-4 col-xs-12 control-label" for="age">City</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="" id="<?php echo $i; ?>" name="adult_city<?php echo $i; ?>" class="form-control forn_control12" required placeholder="City" style="margin-left:0px;">
                                                </div>
                                            </div>
                                    </div>
                                    
                                    <?php
                                    endif; ?>
<br>


<?php endfor;
                                   endif; ?>

    <script>
    function calculateAge(birthday) {
    var now = new Date();
    var past = new Date(birthday);
    var nowYear = now.getFullYear();
    var pastYear = past.getFullYear();
    var age = nowYear - pastYear;

    return age;
};

$('.adult_bday').change(function() {
   if($(this).val() !=""){
    var birthday = $(this).val();
    var id = $(this).attr('alt');
    var yrs=calculateAge(birthday);
    alert(' ');
    if(yrs!="NaN")
    {
        $('.age_define'+id).show();
        $('#age'+id).val(yrs);
        
    }
    }
    //alert('Your age is ' + calculateAge(birthday) + ' years');
});
    </script>
                                   <?php if($person[1] > 0):
                                       for($i=1;$i<=$person[1];$i++):
                                       ?>    
                                       
                                    <p style="font-weight:700;">Child <?php echo $i; ?></p>
                                    
                                        <div class="row">


                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="title">Title </label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="text" id="title" name="child_title<?php echo $i; ?>" required class="form-control forn_control12" placeholder="Title">

                                                </div>
                                            </div>

                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="firstname">First Name</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="text" id="firstname" name="child_firstname<?php echo $i; ?>" required class="form-control forn_control12" placeholder="First & Middle Name">

                                                </div>
                                            </div>

                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="lastname">Last Name</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="text" id="lastname" name="child_lastname<?php echo $i; ?>" required class="form-control forn_control12" placeholder="Last Name">

                                                </div>
                                            </div>

                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="passportnumber">Gender</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="radio" id="passportnumber" name="child_passportnumber<?php echo $i; ?>" class="" required>Male 
                                                    <input type="radio" id="passportnumber" name="chld_passportnumber<?php echo $i; ?>" class="" required>Female 

                                                </div>
                                            </div>
                                            
                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="age">Age</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="" id="age" name="child_age<?php echo $i; ?>" required class="form-control forn_control12" placeholder="Age" style="margin:0px;">
                                                </div>
                                            </div>


                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 control-label" for="example-datepicker">Birthdate</label>
                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="text" id="passport_expiry_date" required name="child_date<?php echo $i; ?>" class="form-control input-datepicker forn_control12" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" style="margin:0px;">
                                                </div>
                                            </div>
                                        </div>
                                        
<br>
<?php endfor;
                                   endif; ?>



<?php if($person[2] > 0):
                                       for($i=1;$i<=$person[2];$i++):
                                       ?>    
                                       
                                    <p style="font-weight:700;">Infant <?php echo $i; ?></p>
                                    
                                        <div class="row">


                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="title">Title </label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="text" id="title" name="infant_title<?php echo $i; ?>" class="form-control forn_control12" placeholder="Title">

                                                </div>
                                            </div>

                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="firstname">First Name</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="text" id="firstname" name="infant_firstname<?php echo $i; ?>" class="form-control forn_control12" placeholder="First & Middle Name">

                                                </div>
                                            </div>

                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="lastname">Last Name</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="text" id="lastname" name="infant_lastname<?php echo $i; ?>" class="form-control forn_control12" placeholder="Last Name">

                                                </div>
                                            </div>

                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="passportnumber">Gender</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="radio" id="passportnumber" name="infant_passportnumber<?php echo $i; ?>" class=" " >Male 
                                                    <input type="radio" id="passportnumber" name="infant_passportnumber<?php echo $i; ?>" class=" " >Female 

                                                </div>
                                            </div>
                                            
                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="age">Age</label>

                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="" id="age" name="infant_age<?php echo $i; ?>" class="form-control forn_control12" placeholder="Age" style="margin:0px;">
                                                </div>
                                            </div>


                                            <div class="form-group col-md-12 col-xs-12">
                                                <label class="col-md-4 control-label" for="example-datepicker">Birthdate</label>
                                                <div class="col-md-7 col-xs-12 input-group">
                                                    <input type="text" id="passport_expiry_date" name="infant_child<?php echo $i; ?>" class="form-control input-datepicker forn_control12" data-date-format="mm/dd/yyyy" placeholder="mm/dd/yyyy" style="margin:0px;">
                                                </div>
                                            </div>
                                        </div>
                                        
<br>
<?php endfor;
                                   endif; ?>

                                  
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="second_part11" >
                                    <p class="first_title">Fare Backup</p>

                                    <div class="row">
                                        <div class="col-xs-7 col-sm-7">
                                            <p>Total Base Fare</p>
                                            <hr>
                                            <p>Total Taxes & Fees</p>
<!--                                            <hr>
                                            <b>Total Airfare</b>-->
                                             
                                       </div>

                                        <div class="col-xs-5 col-sm-5">
                                            <p><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $basic_final_total; ?></p>
                                            <hr>
                                            <p><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $tax_final_total; ?></p>
<!--                                            <hr>
                                            <b><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $final_total; ?></b>-->
                                            
                                        </div>
                                    </div><br>

                                    <div class="_3TV0">
                                        <div class="row">
                                            <div class="col-xs-7 col-sm-7">
                                                <p style="font-size: 16px;font-weight:600">Grand Total</p>

                                            </div>

                                            <div class="col-xs-5 col-sm-5">
                                                <p style="font-size: 16px;font-weight:600"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp; <?php echo $final_total; ?></p>
                                            </div>
                                        </div>
                                    </div><br>

<!--                                    <p style="font-size: 18px;">Promocode</p>    -->
<!---->
<!--                                    <div class="form-group col-md-12 col-xs-12">-->
<!---->
<!---->
<!--                                        <div class="col-md-12 col-xs-12 input-group">-->
<!--                                            <input type="text" id="promocode" name="promocode" class="form-control" placeholder="Enter Promocode">-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                    <button type="submit" class="btn btn-sm btn-primary" style="margin-bottom:10px;width:100%;"> Apply</button>-->
<!---->
<!--                                    <br>-->
<!---->
<!--                                    <div class="scrollbar" id="style-3">							-->
<!--                                        <div  style="height:170px;">-->
<!--                                            <label class="radio-inline" for="example-inline-radio1">-->
<!--                                                <input type="radio" class="flight_radio" id="example-inline-radio1" name="example-inline-radios" value="option1"><b>FLYWINTER</b>-->
<!--                                            </label>-->
<!--                                            <p>FLYWINTER - Get up to ₹5,000 Cashback on flight ticket booking. No minimum order value.</p>-->
<!---->
<!---->
<!--                                            <label class="radio-inline" for="example-inline-radio1">-->
<!--                                                <input type="radio" class="flight_radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> <b>FLY</b>-->
<!--                                            </label>-->
<!--                                            <p>FLY- Get 3% cashback upto ₹1,000 on flight ticket bookings. No minimum order value</p>-->
<!---->
<!--                                            <label class="radio-inline" for="example-inline-radio1">-->
<!--                                                <input type="radio" class="flight_radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> <b>FLYPASSONE</b>-->
<!--                                            </label>-->
<!--                                            <p>FLYPASSONE- Flat ₹222 Cashback on flight ticket booking. Minimum order value is ₹5,000.</p>-->
<!---->
<!---->
<!--                                            <label class="radio-inline" for="example-inline-radio1">-->
<!--                                                <input type="radio" class="flight_radio" id="example-inline-radio1" name="example-inline-radios" value="option1"><b>YESFLY</b>-->
<!--                                            </label>-->
<!--                                            <p>YESFLY- User gets 10% cashback up to ₹1,500 on flight ticket booking. Valid only for Yes Bank credit card holders.</p>-->
<!---->
<!--                                            <label class="radio-inline" for="example-inline-radio1">-->
<!--                                                <input type="radio" class="flight_radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> <b>FLYPIZZA</b>-->
<!--                                            </label>-->
<!--                                            <p> FLYPIZZA- Use promocode FLYPIZZA & get a Domino's pizza free. T&Cs Apply.</p>-->
<!---->
<!--                                            <label class="radio-inline" for="example-inline-radio1">-->
<!--                                                <input type="radio" class="flight_radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> <b>FLYHTL35</b>-->
<!--                                            </label>-->
<!--                                            <p>FLYHTL35- ​Book flight tickets and ​get 35% cashback* up to ₹3,500 on ​your next ​hotel booking​ on Paytm app. No minimum order value for flight ticket booking.</p>-->
<!---->
<!--                                            <label class="radio-inline" for="example-inline-radio1">-->
<!--                                                <input type="radio" class="flight_radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> <b>FLYDEAL</b>-->
<!--                                            </label>-->
<!--                                            <p>FLYDEAL- Exclusive year-long offer: Now, book flight tickets & pay zero convenience fee for a year. </p>-->
<!---->
<!--                                            <label class="radio-inline" for="example-inline-radio1">-->
<!--                                                <input type="radio" class="flight_radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> <b>GOLDFLIGHT</b>-->
<!--                                            </label>-->
<!--                                            <p>GOLDFLIGHT - Book flight tickets and win Paytm Gold up to ₹3,000 every day. </p>-->
<!---->
<!--                                            <label class="radio-inline" for="example-inline-radio1">-->
<!--                                                <input type="radio" class="flight_radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> <b>FREEFLY</b>-->
<!--                                            </label>-->
<!--                                            <p>FREEFLY - Every 25th customer will win 100% cashback on flight ticket bookings.</p>-->
<!---->
<!--                                            <label class="radio-inline" for="example-inline-radio1">-->
<!--                                                <input type="radio" class="flight_radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> <b>FLYINTLSPL</b>-->
<!--                                            </label>-->
<!--                                            <p>FLYINTLSPL - Get 10% cashback* up to ₹2,500 on flight ticket booking. No minimum order value. Offer is applicable on selected routes only. </p>-->
<!---->
<!---->
<!--                                            <label class="radio-inline" for="example-inline-radio1">-->
<!--                                                <input type="radio" class="flight_radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> <b>FLIGHTMOVIE</b>-->
<!--                                            </label>-->
<!--                                            <p>Use promocode FLIGHTMOVIE and enjoy flat Rs.125 cashback on movie ticket booking. No minimum order value.</p>-->
<!---->
<!---->
<!--                                            <label class="radio-inline" for="example-inline-radio1">-->
<!--                                                <input type="radio" class="flight_radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> <b>FLYBACK</b>-->
<!--                                            </label>-->
<!--                                            <p>FLYBACK - Every 10th customer will win 100% cashback on flight ticket bookings. Maximum cashback is ₹2,000.</p>-->
<!---->
<!---->
<!--                                            <label class="radio-inline" for="example-inline-radio1">-->
<!--                                                <input type="radio" class="flight_radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> <b>FLYFREE</b>-->
<!--                                            </label>-->
<!--                                            <p>FLYFREE - Every 100th customer will win 100% cashback on flight ticket bookings. </p>-->
<!---->
<!---->
<!--                                            <label class="radio-inline" for="example-inline-radio1">-->
<!--                                                <input type="radio" class="flight_radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> <b>GOLDENFLY</b>-->
<!--                                            </label>-->
<!--                                            <p>GOLDENFLY- Use promocode GOLDENFLY & enjoy flat ₹500 Paytm Gold money on flight ticket booking.</p>-->
<!---->
<!---->
<!--                                            <label class="radio-inline" for="example-inline-radio1">-->
<!--                                                <input type="radio" class="flight_radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> <b>FLYPREMIUM</b>-->
<!--                                            </label>-->
<!--                                            <p>FLYPREMIUM - User gets 10% cashback* up to ₹5,000 on flight ticket booking. Offer is valid only on Business class and Premium Economy class bookings.</p>-->
<!---->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <br>
                                    <button type="submit" name="procced_pay" class="btn btn-sm btn-primary" style="margin-bottom:10px;width:100%;"> Processed To Pay</button>
                                    <br>

                                </div>  
                            </div>

                        </div>
                    </div>  


                    <style>
                    .forn_control11
                    {
                        margin-left:0px;
                    }
                        .modal-dialog
                        {
                            width:80%;
                        }

                        @media only screen and (min-width:300px) and (max-width: 320px)
                        {
                            .modal-dialog
                            {
                                width:95%;
                            }
                        }


                        @media only screen and (min-width:321px) and (max-width: 360px)
                        {
                            .modal-dialog
                            {
                                width:95%;
                            }
                        }
                        @media only screen and (min-width:361px) and (max-width: 414px)
                        {
                            .modal-dialog
                            {
                                width:95%;
                            }
                        }

                        @media only screen and (min-width:768px) and (max-width: 768px)
                        {
                            .modal-dialog
                            {
                                width:95%;
                            }
                        }

                        @media only screen and (min-width: 769px) and (max-width: 960px)
                        {
                            .modal-dialog
                            {
                                width:95%;
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
                        }
                    </style>  


                </fieldset>
                    </form>

                <!-- END Form Validation Example Content -->

                <!-- Terms Modal -->

                <!-- END Terms Modal -->
            </div>
            <!-- END Validation Block -->
        </div>








        <style>
            .zoFw {
                font-size: 16px;
                font-size: 1.6rem;
                font-weight: 600;
                color: #4a4a4a;
                padding: 10px;
                background: #e9edee;
                position: relative;
                -webkit-transition: all .3s;
                transition: all .3s;
                border-bottom: 1px solid #fff;
                margin-top: -22px;
                margin-left: -22px;
                margin-right: -22px;
            }
           
           .forn_control12
    {
      margin-left: 16px;
      width: 92%; 
    }
    .button_margin123
    {
      margin-bottom:65px;
     }
     input[type="text"] {
    margin: 0px 0px;
}
     @media only screen and (min-width:768px) and (max-width: 768px)
{
     .forn_control12
    {
      margin-left: 10px;
      width: 96%; 
    }
}
            .mobile_number
            {
                margin:18px;
            }
            ._3TV0 {
                background-color: #ebebeb;
                margin-top: 0px;
                margin-left: -10px;
                margin-right: -10px;
                padding-top: 16px;
    padding-left: 10px;
            }
            .change1
            {
                color: #00b9f5;
                text-decoration: none;
            }
            .change:hover
            {
                color: #00b9f5;
                text-decoration: none;
            }
            .padding_for_table
            {
                padding-right:0px;  
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
                font-size: 14px;
                font-weight: 600;
                color: #9b9b9b;
                margin-top:-19px;
            }
            .first_title22
            {
                font-size: 12px;
                font-weight: 600;
                color: #9b9b9b;
                margin-top:-19px;
            }
            .first_title4
            {
                font-size: 12px;
                font-weight: 600;
                color: #9b9b9b;

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

        </style>       


        <style>


            .Seats
            {
                font-size:10px;
            }

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
                height:200px;
                padding-top:4px;
                margin-bottom:25px;
            }

            .second_part
            {  background:#fff;
               height:auto;
               margin-left:30px;
               margin-right:30px;
               margin-top:30px;
               border:1px solid #fff;
               border-radius:4px;
               padding:22px;
            }

            .second_part123
            {  background:#fff;
               height:auto;
               margin-left:30px;
               margin-right:30px;
               margin-top:20px;
               border:1px solid #fff;
               border-radius:4px;
               padding:22px;
            }
            .second_part11
            {  background:#fff;
               height: auto;
               margin-left: -41px;;
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
                    height:auto;
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

                .first_part
                {
                    background:#012b72;
                    height:439px;
                    padding-top:4px;
                    margin-bottom:25px;
                }

                .border123
                {

                    height: auto;
                }
                .second_part11
                {  
                    margin-left: 10px;;
                    margin-right:10px;

                }
                .second_part123 {

                    margin-left: 10px;
                    margin-right: 10px;
                    margin-top: 26px;
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
                .second_part11
                {  
                    margin-left: 10px;;
                    margin-right:10px;

                }
                .second_part123 {

                    margin-left: 10px;
                    margin-right: 10px;
                    margin-top: 26px;
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
                .second_part11
                {  
                    margin-left: 10px;;
                    margin-right:10px;

                }
                .border123
                {

                    height: auto;
                }
                .second_part123 {

                    margin-left: 10px;
                    margin-right: 10px;
                    margin-top: 26px;
                }
            }

            @media only screen and (min-width:768px) and (max-width: 768px)
            {

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
                .second_part11
                {  
                    margin-left: 10px;;
                    margin-right:10px;

                }
                .second_part123 {

                    margin-left: 10px;
                    margin-right: 10px;
                    margin-top: 26px;
                }
                .border123
                {

                    height: auto;
                }
            }
            @media only screen and (min-width: 961px) and (max-width: 1024px)
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
                .second_part
                {
                    height:auto;
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
                .second_part11
                {  
                    margin-left: 10px;;
                    margin-right:10px;

                }
                .first_part
                {
                    background:#012b72;
                    height:439px;
                    padding-top:4px;
                    margin-bottom:25px;
                }

                .border123
                {

                    height: auto;
                }
                .second_part123 {

                    margin-left: 10px;
                    margin-right: 10px;
                    margin-top: 26px;
                }
            }

            @media only screen and (min-width:1025px) and (max-width: 1280px)
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
                .second_part11
                {  
                    margin-left: 10px;;
                    margin-right:10px;

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
                .second_part1
                {

                    margin-left: 13px;
                    margin-right: 13px;
                    margin-top: 16px;
                }
                .second_part123 {

                    margin-left: 10px;
                    margin-right: 10px;
                    margin-top: 26px;
                }
                .border123
                {

                    height: auto;
                }
            }

            @media only screen and (min-width:1440px) and (max-width: 1440px)
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
                .second_part11
                {  
                    margin-left: 10px;;
                    margin-right:10px;

                }
                .second_part123 {

                    margin-left: 10px;
                    margin-right: 10px;
                    margin-top: 26px;
                }
                .border123
                {

                    height: auto;
                }
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
            </style>  


        </div>
    </div>









