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
                Select Seat<br>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li> Flight</li>
        <li><a href="">Select Seat for Round Way Trip</a></li>
    </ul>
    <!-- END Validation Header -->

    <div class="row button_margin123">
        <div class="col-md-12">
            <!-- Form Validation Example Block -->
            <div class="">
                <!-- Form Validation Example Title -->
                <div class="block-title">
                    <h2><strong>Select Seat</strong></h2>
                </div>
                <!-- END Form Validation Example Title -->



                <fieldset>

                    <div class="first_part">

                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="second_part">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4">
                                                     <p class="first_title"><?php echo $_POST['from']; ?></p>
                                                    <P class="first_title2"><?php
                                                        if ($_POST['from'] == "AMD") {
                                                            echo "Ahmedabad";
                                                        }
                                                        if ($_POST['from'] == "BLR") {
                                                            echo "Banglore";
                                                        }
                                                        if ($_POST['from'] == "BOM") {
                                                            echo "Mumbai";
                                                        }
                                                        ?></P> 
                                                </div>

                                                <div class="col-xs-4 col-sm-4">
                                                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true" style="font-size:25px;"></i>
                                                </div>

                                                <div class=" col-sm-4 col-xs-4">
                                                     <p class="first_title"><?php echo $_POST['to']; ?></p>
                                                    <P class="first_title2"><?php
                                                        if ($_POST['to'] == "AMD") {
                                                            echo "Ahmedabad";
                                                        }
                                                        if ($_POST['to'] == "BLR") {
                                                            echo "Banglore";
                                                        }
                                                        if ($_POST['to'] == "BOM") {
                                                            echo "Mumbai";
                                                        }
                                                        ?></P>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-2">
                                           <p class="first_title"><?php echo date("d", strtotime($_POST['depart']))." ". date("M", strtotime($_POST['depart'])); ?> </p>
                                            <P class="first_title2"><?php echo date('l', strtotime($_POST['depart'])); ?></P>
                                        </div>

                                        <div class="col-xs-6 col-sm-2">
                                           <p class="first_title"><?php echo $_POST['seat']; ?></p>
                                            <P class="first_title2">Class</P>
                                        </div>

                                        <div class="col-xs-6 col-sm-2">
                                           <p class="first_title">Traveller</p>
                                            <P class="first_title2"> <?php echo $_POST['adult']; ?> Adult, <?php echo $_POST['children']; ?> Child, <?php echo $_POST['infant']; ?> Infant</P>
                                        </div>

                                        <div class="col-xs-6 col-sm-2">
                                            <button type="submit" class="btn btn-sm btn-primary" style="margin-bottom:10px;">Modify Search</button>
                                        </div>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div> 



                    <div class="col-xs-12 col-sm-3 row fliter_flight">

                        <div class="col-lg-12 col-md-12 col-sm-12" style="background: #fff;">

                            <div class="sidebar-box-heading">
                                <i class="icons icon-filter"></i>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar" style="background:#000;"></span>
                                    <span class="icon-bar" style="background:#000;"></span>
                                    <span class="icon-bar" style="background:#000;"></span>                        
                                </button>
                                <h4>Filters</h4>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <div class="sidebar-box-content sidebar-padding-box">


                                            <p class="stops">Stops</p>
                                            <input type="checkbox" id="categorymanufacturer1"><label for="categorymanufacturer1">None-Stop</label><br>
                                            <input type="checkbox" id="categorymanufacturer2"><label for="categorymanufacturer2">1 Stop</label><br>
                                            <input type="checkbox" id="categorymanufacturer3"><label for="categorymanufacturer3">2+ Stops</label><br>

                                            <br>
                                            <div style="border-bottom: 1px solid #e3e6e6;"></div>
                                            <br>

                                            <p class="stops">Fare Type</p>
                                            <input type="checkbox" id="categorymanufacturer1"><label for="categorymanufacturer1">Refundable</label><br>
                                            <input type="checkbox" id="categorymanufacturer2"><label for="categorymanufacturer2">Non Refundable</label><br>

                                            <br>
                                            <div style="border-bottom: 1px solid #e3e6e6;"></div>
                                            <br>

                                            <p class="stops">Price</p>
                                            <P class="first_title2">Upto <i class="fa fa-inr" aria-hidden="true"></i>&nbsp;547896</P>
                                            <input type="text" id="example-slider-range1" name="example-slider-range1" class="form-control input-slider" data-slider-min="0" data-slider-max="1000" data-slider-step="1" data-slider-value="[400,600]" data-slider-orientation="horizontal" data-slider-tooltip="hide">


                                            <br><br>
                                            <div style="border-bottom: 1px solid #e3e6e6;"></div>
                                            <br>



                                            <p class="stops">Airlines</p>
                                            <div class="scrollbar" id="style-3">							
                                                <div class="board_point" style="height:100px;">

                                                    <input type="checkbox" id="categorymanufacturer1"><label for="categorymanufacturer1">SpiceJet</label><br>
                                                    <input type="checkbox" id="categorymanufacturer2"><label for="categorymanufacturer2">Air India</label><br>
                                                    <input type="checkbox" id="categorymanufacturer1"><label for="categorymanufacturer1">SpiceJet</label><br>
                                                    <input type="checkbox" id="categorymanufacturer2"><label for="categorymanufacturer2">Air India</label><br>
                                                    <input type="checkbox" id="categorymanufacturer1"><label for="categorymanufacturer1">SpiceJet</label><br>
                                                    <input type="checkbox" id="categorymanufacturer2"><label for="categorymanufacturer2">Air India</label><br>
                                                    <input type="checkbox" id="categorymanufacturer1"><label for="categorymanufacturer1">SpiceJet</label><br>
                                                    <input type="checkbox" id="categorymanufacturer2"><label for="categorymanufacturer2">Air India</label><br>
                                                </div>

                                            </div>
                                            <br>

                                            <br>


                                            <br><br>
                                            <br>
                                            <br>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>


                    <div class="col-sm-9 col-xs-12">
                        <div class="third_part">

                            <div class="table-responsive">          
                                <div class="row">
                                    <div class="col-sm-6">
                                        <table class="table table-condensed" style="border-right: 1px solid #ccc;">
                                    
                                    <thead>
                                        <tr>
                                           <th></th>
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Airline</p></th>
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Departure</p></th>
                                            
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Arrival</p></th>
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Duration</p></th>
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Price</p></th>
                                            
                                        </tr>

                                    </thead>
                                    <tbody>
                                       <?php 
                                          $ongoing = $decode_output->AvailabilityOutput->AvailableFlights->OngoingFlights;
                                        $USER_TRACK_ID = $decode_output->UserTrackId;
                                         $coun = 0;
                                        for ($i = 0; $i < count($ongoing); $i++):
                                            $total_time = '';
                                            $counter = 0;
                                            $dep = "";
                                            $arr = "";
                                            $avail_segments = $ongoing[$i]->AvailSegments;
                                            $dtym = explode(' ', $avail_segments[0]->DepartureDateTime);
                                            end($avail_segments);
                                            $key = key($avail_segments);
                                            $atym = explode(' ', $avail_segments[$key]->ArrivalDateTime);
//                                                   print_r($key); echo '<br/>';
//                                                   print_r($dtym); echo '<br/>';
//                                                   print_r($atym); echo '<br/>';

                                            $d1 = explode('/', $dtym[0]);
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
                                            if ($difference->format('%a') > 0) {
                                                $total_hrs = $difference->format('%ad %hh %im');
                                            } else {
                                                $total_hrs = $difference->format('%hh %im');
                                            }

                                            $FlightId = $avail_segments[$key]->FlightId;
                                            $aircode_flightno = $avail_segments[0]->AirlineCode . ' - ' . $avail_segments[0]->FlightNumber;

                                            $origin = $_POST['from'];
                                            $destination = $_POST['to'];

                                            $flight_image = $o__flight->getOneFlightImage($avail_segments[0]->AirlineCode);
                                            $AvailPaxFareDetails = $avail_segments[$key]->AvailPaxFareDetails;


//                                            for ($j = 0; $j < count($AvailPaxFareDetails); $j++):
//
//                                                //Get Tax code
//                                                
//                                              
//
                                        //    $baggage_details = array();
                                            for ($j = 0; $j < count($AvailPaxFareDetails); $j++):
                                                $ClassCode = $AvailPaxFareDetails[$j]->ClassCode;
                                                $ClassCodeDesc = $AvailPaxFareDetails[$j]->ClassCodeDesc;
                                                $CheckInBaggage = $AvailPaxFareDetails[$j]->BaggageAllowed->CheckInBaggage;
                                                $HandBaggage = $AvailPaxFareDetails[$j]->BaggageAllowed->HandBaggage;
                                                $adult_amt = $AvailPaxFareDetails[$j]->Adult->GrossAmount;
                                                $AFareBasis = $AvailPaxFareDetails[$j]->Adult->FareBasis;
                                                $AFareType = $AvailPaxFareDetails[$j]->Adult->FareType;
                                                $ABasicAmount = $AvailPaxFareDetails[$j]->Adult->BasicAmount;
                                                $ATaxDetails = $AvailPaxFareDetails[$j]->Adult->TaxDetails;
                                                $ACommission = $AvailPaxFareDetails[$j]->Adult->Commission;

                                                $querystring = "UserTrackId=" . $USER_TRACK_ID . "&FlightId=" . $FlightId . "&ClassCode=" . $ClassCode . "&AirlineCode=" . $avail_segments[$key]->AirlineCode . "&ETicketFlag=1&BasicAmount=" . $adult_amt . "&SupplierId=1&GSTNumber=22AAAAA0000A1Z5&EMailId=test@test.com&CompanyName=xyz&Address=Rajkot&FirstName=Demo&LastName=Testing";
                                                $url = 'http://api.kandoipower.com/api/DomesticAir/GetTax?key=$2y$10$OcFBXT6El4nw2DYWbEDEU.7R9iZrjzIn0VXYtv8AWX./lneDiRl.C&mid=M67961851&' . $querystring;
                                                // echo $url;
                                                $ch = curl_init();
                                                curl_setopt($ch, CURLOPT_URL, $url);
                                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                                $output = curl_exec($ch);
                                                curl_close($ch);
                                                $get_adult_tax = json_decode($output);
//                                                                                  echo '<pre style="background:white;">'; print_r($get_adult_tax->TaxOutput); echo '</pre>'; exit();
                                                $Adult_Gross_Amount = 0;
                                                $Child_Gross_Amount = 0;
                                                $Infant_Gross_Amount = 0;
                                                $final_total = "";
                                               // $baggage_details = $get_adult_tax->TaxOutput->Baggages;
                                                if ($get_adult_tax->ResponseStatus == "1") {
                                                    $Adult_Gross_Amount = $get_adult_tax->TaxOutput->TaxResFlightSegments[0]->AdultTax->FareBreakUpDetails->GrossAmount;

                                                    if (!empty($get_adult_tax->TaxOutput->TaxResFlightSegments[0]->ChildTax)) {
                                                        $Child_Gross_Amount = $get_adult_tax->TaxOutput->TaxResFlightSegments[0]->ChildTax->FareBreakUpDetails->GrossAmount;
                                                    }
                                                    if (!empty($get_adult_tax->TaxOutput->TaxResFlightSegments[0]->InfantTax)) {
                                                        $Infant_Gross_Amount = $get_adult_tax->TaxOutput->TaxResFlightSegments[0]->InfantTax->FareBreakUpDetails->GrossAmount;
                                                    }
                                                    $final_total = ($Adult_Gross_Amount * $_POST['adult']) + ($Child_Gross_Amount * $_POST['children']) + ($Infant_Gross_Amount * $_POST['infant']);
                                                }
//                                                echo '<p style="background:white;"><pre style="background:white;">';
//                                                print_r($get_adult_tax);
//                                                echo '</pre></p>';
//                                                exit();
                                                
                                        endfor;
                                       ?>
                                                <tr class="border123">
                                                    
                                                    <td><div class="radio">
                                                    <label for="example-radio1">
                                                        <input type="radio" id="example-radio2" name="example-radios" value="<?php echo $i.'-d'; ?>" class="radio1">
                                                    </label>
                                                </div></td>
                                                    <td class="first_title"><img src="<?php echo Fimages; ?>/45x45/<?php echo $flight_image->airline_image; ?>" id="l_img<?php echo $i; ?>">
                                                    <P class="first_title2" style="margin-top:0px;" id="l_airline<?php echo $i; ?>"><?php echo $flight_image->airline_name; ?></P></td>
                                                    <td>
                                                        <p class="first_title123" id="l_stime<?php echo $i; ?>"><?php echo $dtym[1]; ?></p>
                                                        <P class="first_title234" id="l_origin<?php echo $i; ?>"><?php echo $origin; ?></P>
                                                    </td>
                                                    <td>
                                                        <p class="first_title123" id="l_dtime<?php echo $i; ?>"><?php echo $atym[1]; ?></p>
                                                        <P class="first_title234" id="l_destination<?php echo $i; ?>"><?php echo $destination; ?></P>
                                                    </td>
                                                    <td> <P class="first_title234" id="l_total_time<?php echo $i; ?>" style="margin-top:0px;"><?php echo $total_hrs; ?></P>

                                                        <P class="first_title234" id="l_stop<?php echo $i; ?>"> Stop <?php echo count($avail_segments) - 1; ?></P></td>
                                                    <td>
                                                        <p class="first_title" id="">Rs.<span id="l_final_total<?php echo $i; ?>"><?php echo $final_total; ?></span></p>
                                                        <P class="first_title234"><?php echo $AvailPaxFareDetails[0]->Adult->FareType; ?></P>    
                                                    </td>
                                                </tr>
                                                <?php endfor; ?>

                                                
        

                                   


                                    </tbody>
                                   
                                </table>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        
                                        <table class="table table-condensed" style="border-right: 1px solid #ccc;">
                                    
                                    <thead>
                                        <tr>
                                           <th></th>
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Airline</p></th>
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Departure</p></th>
                                            
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Arrival</p></th>
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Duration</p></th>
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Price</p></th>
                                            
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php 
                                          $ongoing = $decode_output->AvailabilityOutput->AvailableFlights->ReturnFlights;
                                        $USER_TRACK_ID = $decode_output->UserTrackId;
                                         $coun = 0;
                                        for ($i = 0; $i < count($ongoing); $i++):
                                            $total_time = '';
                                            $counter = 0;
                                            $dep = "";
                                            $arr = "";
                                            $avail_segments = $ongoing[$i]->AvailSegments;
                                            $dtym = explode(' ', $avail_segments[0]->DepartureDateTime);
                                            end($avail_segments);
                                            $key = key($avail_segments);
                                            $atym = explode(' ', $avail_segments[$key]->ArrivalDateTime);
//                                                   print_r($key); echo '<br/>';
//                                                   print_r($dtym); echo '<br/>';
//                                                   print_r($atym); echo '<br/>';

                                            $d1 = explode('/', $dtym[0]);
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
                                            if ($difference->format('%a') > 0) {
                                                $total_hrs = $difference->format('%ad %hh %im');
                                            } else {
                                                $total_hrs = $difference->format('%hh %im');
                                            }

                                            $FlightId = $avail_segments[$key]->FlightId;
                                            $aircode_flightno = $avail_segments[0]->AirlineCode . ' - ' . $avail_segments[0]->FlightNumber;

                                            $origin = $_POST['from'];
                                            $destination = $_POST['to'];

                                            $flight_image = $o__flight->getOneFlightImage($avail_segments[0]->AirlineCode);
                                            $AvailPaxFareDetails = $avail_segments[$key]->AvailPaxFareDetails;


//                                            for ($j = 0; $j < count($AvailPaxFareDetails); $j++):
//
//                                                //Get Tax code
//                                                
//                                              
//
                                        //    $baggage_details = array();
                                            for ($j = 0; $j < count($AvailPaxFareDetails); $j++):
                                                $ClassCode = $AvailPaxFareDetails[$j]->ClassCode;
                                                $ClassCodeDesc = $AvailPaxFareDetails[$j]->ClassCodeDesc;
                                                $CheckInBaggage = $AvailPaxFareDetails[$j]->BaggageAllowed->CheckInBaggage;
                                                $HandBaggage = $AvailPaxFareDetails[$j]->BaggageAllowed->HandBaggage;
                                                $adult_amt = $AvailPaxFareDetails[$j]->Adult->GrossAmount;
                                                $AFareBasis = $AvailPaxFareDetails[$j]->Adult->FareBasis;
                                                $AFareType = $AvailPaxFareDetails[$j]->Adult->FareType;
                                                $ABasicAmount = $AvailPaxFareDetails[$j]->Adult->BasicAmount;
                                                $ATaxDetails = $AvailPaxFareDetails[$j]->Adult->TaxDetails;
                                                $ACommission = $AvailPaxFareDetails[$j]->Adult->Commission;

                                                $querystring = "UserTrackId=" . $USER_TRACK_ID . "&FlightId=" . $FlightId . "&ClassCode=" . $ClassCode . "&AirlineCode=" . $avail_segments[$key]->AirlineCode . "&ETicketFlag=1&BasicAmount=" . $adult_amt . "&SupplierId=1&GSTNumber=22AAAAA0000A1Z5&EMailId=test@test.com&CompanyName=xyz&Address=Rajkot&FirstName=Demo&LastName=Testing";
                                                $url = 'http://api.kandoipower.com/api/DomesticAir/GetTax?key=$2y$10$OcFBXT6El4nw2DYWbEDEU.7R9iZrjzIn0VXYtv8AWX./lneDiRl.C&mid=M67961851&' . $querystring;
                                                // echo $url;
                                                $ch = curl_init();
                                                curl_setopt($ch, CURLOPT_URL, $url);
                                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                                $output = curl_exec($ch);
                                                curl_close($ch);
                                                $get_adult_tax = json_decode($output);
//                                                                                  echo '<pre style="background:white;">'; print_r($get_adult_tax->TaxOutput); echo '</pre>'; exit();
                                                $Adult_Gross_Amount = 0;
                                                $Child_Gross_Amount = 0;
                                                $Infant_Gross_Amount = 0;
                                                $final_total = "";
                                               // $baggage_details = $get_adult_tax->TaxOutput->Baggages;
                                                if ($get_adult_tax->ResponseStatus == "1") {
                                                    $Adult_Gross_Amount = $get_adult_tax->TaxOutput->TaxResFlightSegments[0]->AdultTax->FareBreakUpDetails->GrossAmount;

                                                    if (!empty($get_adult_tax->TaxOutput->TaxResFlightSegments[0]->ChildTax)) {
                                                        $Child_Gross_Amount = $get_adult_tax->TaxOutput->TaxResFlightSegments[0]->ChildTax->FareBreakUpDetails->GrossAmount;
                                                    }
                                                    if (!empty($get_adult_tax->TaxOutput->TaxResFlightSegments[0]->InfantTax)) {
                                                        $Infant_Gross_Amount = $get_adult_tax->TaxOutput->TaxResFlightSegments[0]->InfantTax->FareBreakUpDetails->GrossAmount;
                                                    }
                                                    $final_total = ($Adult_Gross_Amount * $_POST['adult']) + ($Child_Gross_Amount * $_POST['children']) + ($Infant_Gross_Amount * $_POST['infant']);
                                                }
//                                                echo '<p style="background:white;"><pre style="background:white;">';
//                                                print_r($get_adult_tax);
//                                                echo '</pre></p>';
//                                                exit();
                                                
                                        endfor;
                                       ?>
                                                <tr class="border123">
                                                    
                                                    <td><div class="radio">
                                                    <label for="example-radio1">
                                                        <input type="radio" id="example-radio1" name="example-radios1" value="<?php echo $i.'-e'; ?>" class="radio2">
                                                    </label>
                                                </div></td>
                                                     <td class="first_title"><img src="<?php echo Fimages; ?>/45x45/<?php echo $flight_image->airline_image; ?>" id="r_img<?php echo $i; ?>">
                                                    <P class="first_title2" style="margin-top:0px;" id="r_airline<?php echo $i; ?>"><?php echo $flight_image->airline_name; ?></P></td>
                                                    <td>
                                                        <p class="first_title123" id="r_stime<?php echo $i; ?>"><?php echo $dtym[1]; ?></p>
                                                        <P class="first_title234" id="r_origin<?php echo $i; ?>"><?php echo $origin; ?></P>
                                                    </td>
                                                    <td>
                                                        <p class="first_title123" id="r_dtime<?php echo $i; ?>"><?php echo $atym[1]; ?></p>
                                                        <P class="first_title234" id="r_destination<?php echo $i; ?>"><?php echo $destination; ?></P>
                                                    </td>
                                                    <td> <P class="first_title234" id="r_total_time<?php echo $i; ?>" style="margin-top:0px;"><?php echo $total_hrs; ?></P>

                                                        <P class="first_title234" id="r_stop<?php echo $i; ?>"> Stop <?php echo count($avail_segments) - 1; ?></P></td>
                                                    <td>
                                                        <p class="first_title" id="">Rs.<span id="r_final_total<?php echo $i; ?>"><?php echo $final_total; ?></span></p>
                                                        <P class="first_title234"><?php echo $AvailPaxFareDetails[0]->Adult->FareType; ?></P>    
                                                    </td>
                                                </tr>
                                                
 <?php endfor; ?>
                                        
                                    </tbody>
                                   
                                </table>
                                   
                                    </div>
                            </div>

                        </div>
                    </div>
                   </div>
                
        
        <div class="fourth_part style_diff" style="display:none;">

                           
                                <div class="row">
                                    <div class="col-sm-4">
                                         <div class="">
                                        <table class="table table-condensed" style="border-right: 1px solid #ccc;margin-bottom:0px;">
                                    
                                    
                                    <tbody>
                                       
                                                <tr>
                                                    
                                                    
                                                    <td class="first_title" style="border-top:none;"><img src="<?php echo Fimages; ?>/6E.png" id="d_img"></td>
                                                    <td style="border-top:none;"><P class="first_title2" style="margin-top:0px;" id="d_airline">Indigo</P></td>
                                                    <td style="border-top:none;">
                                                        <p class="first_title123" id="d_stime">12:47</p>
                                                        <P class="first_title234" id="d_origin">BLR</P>
                                                    </td>
                                                    <td style="border-top:none;">
                                                        <p class="first_title123" id="d_dtime">12:47</p>
                                                        <P class="first_title234" id="d_destination">BLR</P>
                                                    </td>
                                                    <td style="border-top:none;"> <P id="d_total_time" class="first_title234" style="margin-top:0px;">7h 23m</P>

                                                        <P class="first_title234" id="d_stop"> Stop</P></td>
                                                    
                                                    
                                                   
                                                </tr>
                                                

                                             

                                    </tbody>
                                   
                                </table>
                                    </div>
                                    </div>
                                    
                                    <div class="col-sm-4">
                                         <div class="">
                                        <table class="table" style="border-right: 1px solid #ccc;">
                                    
                                    
                                    <tbody>
                                       
                                                <tr>
                                                    
                                                    
                                                    <td class="first_title" style="border-top:none;"><img id="e_img" src="<?php echo Fimages; ?>/6E.png"></td>
                                                    <td style="border-top:none;"><P class="first_title2" id="e_airline" style="margin-top:0px;">Indigo</P></td>
                                                    <td style="border-top:none;">
                                                        <p class="first_title123" id="e_stime">12:47</p>
                                                        <P class="first_title234" id="e_origin">BLR</P>
                                                    </td>
                                                    <td style="border-top:none;">
                                                        <p class="first_title123" id="e_dtime">12:47</p>
                                                        <P class="first_title234" id="e_destination">BLR</P>
                                                    </td>
                                                    <td style="border-top:none;"> <P class="first_title234" id="e_total_time" style="margin-top:0px;">7h 23m</P>

                                                        <P class="first_title234" id="e_stop"> Stop</P></td>
                                                    
                                                    
                                                   
                                                </tr>
                                                

                                             

                                    </tbody>
                                   
                                </table>
                                </div>
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6">
                                                <p style="    font-weight: 700;color: #4a4a4a;line-height: 1;font-size: 35px;" id="grand_total">7,079</p>
                                            </div>
                                            <div class="col-sm-6 col-xs-6">
                                             <button type="submit" class="btn btn-sm btn-primary" style="height: 50px;
    width: 130px;
    font-size: 19px;">Book Flight</button>
                                             </div>
                                        </div>
                                    </div>
                                    
                                    
                            </div>

                        
                    </div>
                    
                    </fieldset>


            </div>
            <!-- END Validation Block -->
        </div>
        
        </div>

         <script>
                                        $(document).ready(function () {
                                            $(".flight_detail").click(function () {
                                               
                                                
                                                $(".flight_detail1" + id).toggle(".flight_detail1" + id);
                                            });
                                        });
                                    </script>

                                    <input type="hidden" class="totalvalue0" value="0">
                                    <input type="hidden" class="totalvalue1" value="0">
                                    <input type="hidden" class="totalvalue2" value="0">
<script>
    
    $(function() {
      $('input[type=radio]').on('change',function() {
          
           var r1=$(this).val();
                //alert(r1);
                var rn = r1.split("-");
                var total = $(".totalvalue").val();
            if(rn[1] == 'd'){
                 $('#d_img').attr('src', $('#l_img'+rn[0]).attr('src'));
                 $('#d_airline').text($('#l_airline'+rn[0]).text());
                 $('#d_stime').text($('#l_stime'+rn[0]).text());
                 $('#d_origin').text($('#l_origin'+rn[0]).text());
                 $('#d_dtime').text($('#l_dtime'+rn[0]).text());
                 $('#d_destination').text($('#l_destination'+rn[0]).text());
                 $('#d_total_time').text($('#l_total_time'+rn[0]).text());
                 $('#d_stop').text($('#l_stop'+rn[0]).text());
                   var total=$('#l_final_total'+rn[0]).text();
                  
                 $(".totalvalue1").val(total);
                 
             }
            if(rn[1] == 'e'){
                var r2=$('.radio2').val();
                 $('#e_img').attr('src', $('#r_img'+rn[0]).attr('src'));
                 $('#e_airline').text($('#r_airline'+rn[0]).text());
                 $('#e_stime').text($('#r_stime'+rn[0]).text());
                 $('#e_origin').text($('#r_origin'+rn[0]).text());
                 $('#e_dtime').text($('#r_dtime'+rn[0]).text());
                 $('#e_destination').text($('#r_destination'+rn[0]).text());
                 $('#e_total_time').text($('#r_total_time'+rn[0]).text());
                 $('#e_stop').text($('#r_stop'+rn[0]).text());

                var total=$('#r_final_total'+rn[0]).text();
                 $(".totalvalue2").val(total);
                 
             }
          
            if( $('.radio2').is(':checked') &&  $('.radio1').is(':checked')) 
            {
                var finaltotal = parseInt($(".totalvalue1").val()) + parseInt($(".totalvalue2").val());
                $('#grand_total').text('Rs. '+ finaltotal);
                 $('.fourth_part').show(); 
            }
            else{
                $('.fourth_part').hide();
            }
               
                
            
      });
});
</script>



        <style>
        .style_diff
        {
           position: fixed;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 100;
    padding: 10px 4%;
    background: #fff;
    box-shadow: 0 -3px 6px 0 hsla(0,0%,77%,.25);
}
        .first_title123
        {
            font-size:13px;
            text-align:center;
            font-weight:600;
        }
            .navbar-toggle {
                position: relative;
                float: right;
                margin-right: 15px;
                padding: 9px 10px;
                margin-top: -2px; 
                margin-bottom: 8px;
                /* background-color: transparent; */
                background-image: none;
                border: 1px solid #000;
                border-radius: 4px;
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
            .button_margin123
            {
                margin-bottom:65px;
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
                margin-top:-17px;
            }
            .first_title234
            {
                font-size: 12px;
                font-weight: 600;
                color: #9b9b9b;
                margin-top:-17px;
                text-align:center;
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
            
             .fourth_part
            {  background:#fff;
               height:80px;
              

               border:1px solid #fff;
               border-radius:4px;
              
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
                .fourth_part
            {  background:#fff;
              height:auto;

               border:1px solid #fff;
               border-radius:4px;
              
            }
            .style_diff
        {
           position: fixed;
           left: 0;
           bottom: 6em;
           right: 0;
           z-index: 100;
           padding: 10px 4%;
           background: #fff;
           box-shadow: 0 -3px 6px 0 hsla(0,0%,77%,.25);
           
        }
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
                    height:254px;
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
                    margin-bottom:18em;
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
                    height:350px;
                    padding-top:4px;
                    margin-bottom:25px;
                }
                .fliter_flight {
                    margin-top: -58px;

                    height: auto;

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
                  .fourth_part
            {  background:#fff;
              height:auto;

               border:1px solid #fff;
               border-radius:4px;
              
            }
            .style_diff
        {
           position: fixed;
           left: 0;
           bottom: 6em;
           right: 0;
           z-index: 100;
           padding: 10px 4%;
           background: #fff;
           box-shadow: 0 -3px 6px 0 hsla(0,0%,77%,.25);
           
        }
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
                    height:350px;
                    padding-top:4px;
                    margin-bottom:25px;
                }
                .second_part
                {
                    height:254px;
                    margin-left: 13px;
                    margin-right: 13px;
                    margin-top: 16px;
                }


                .third_part
                {
                    margin-left:0px;
                    margin-right:0px;
                    margin-top:19px;
                     margin-bottom:18em;
                    
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
                    margin-top: -58px;

                    height: auto;

                }
                .border123
                {

                    height: auto;
                }
            }
            @media only screen and (min-width:361px) and (max-width: 414px)
            {
                   .fourth_part
            {  background:#fff;
              height:auto;

               border:1px solid #fff;
               border-radius:4px;
              
            }
            .style_diff
        {
           position: fixed;
           left: 0;
           bottom: 6em;
           right: 0;
           z-index: 100;
           padding: 10px 4%;
           background: #fff;
           box-shadow: 0 -3px 6px 0 hsla(0,0%,77%,.25);
           
        }
        
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
                    height:350px;
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
                    height:254px;
                    margin-left: 13px;
                    margin-right: 13px;
                    margin-top: 16px;
                }
                .third_part
                {
                    margin-left:0px;
                    margin-right:0px;
                    margin-top:19px;
                    margin-bottom:18em;
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
                    margin-top: -58px;

                    height: auto;

                }
                .border123
                {

                    height: auto;
                }
            }

            @media only screen and (min-width:768px) and (max-width: 768px)
            {
                  .fourth_part
            {  background:#fff;
              height:auto;

               border:1px solid #fff;
               border-radius:4px;
              
            }
            .style_diff
        {
           position: fixed;
           left: 0;
           bottom: 6em;
           right: 0;
           z-index: 100;
           padding: 10px 4%;
           background: #fff;
           box-shadow: 0 -3px 6px 0 hsla(0,0%,77%,.25);
           
        }
        
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
                    height:200px;
                    padding-top:4px;
                    margin-bottom:25px;
                }
                .second_part
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
                .fliter_flight {


                    margin-top: -70px;
                    margin-left: -6px;

                    width: 203px;

                }
                .border123
                {

                    height: auto;
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
                    height:254px;
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
                    margin-top: -159px;

                    height: auto;

                }
                .border123
                {

                    height: auto;
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




    
</div>













