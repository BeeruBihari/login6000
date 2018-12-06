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
        <li><a href="">Select Seat</a></li>
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
                                            <button type="submit" class="btn btn-sm btn-primary" style="margin-bottom:10px;" data-toggle="modal" data-target="#myModal">Modify Search</button>
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


                    <div class="col-xs-12 col-sm-9">
                        <div class="third_part">

                            <div class="table-responsive">          
                                <table class="table table-condensed ">
                                    <thead>
                                        <tr >
                                            <th></th>
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Airline</p></th>
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Departure</p></th>
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Duration</p></th>
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Arrival</p></th>
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Arrival</p></th>
                                            <th class="width1"><p class="first_title2" style="margin: 0;">Search</p></th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php
                                        $ongoing = $decode_output->AvailabilityOutput->AvailableFlights->OngoingFlights;
                                        $USER_TRACK_ID = $decode_output->UserTrackId;
                                     //   echo $USER_TRACK_ID;
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
                                                $total_hrs = $difference->format('%aD %hhr %imin');
                                            } else {
                                                $total_hrs = $difference->format('%hhr %imin');
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
                                                ?>
                                                <tr class="border123">
                                                    <td class="first_title"><img src="<?php echo Fimages; ?>/45x45/<?php echo $flight_image->airline_image; ?>" class="img_flight"></td>

                                                    <td>
                                                        <p class="first_title"><?php echo $flight_image->airline_name; ?></p>
                                                        <P class="first_title2"><?php echo $aircode_flightno; ?></P>
                                                    </td>
                                                    <td>
                                                        <p class="first_title"><?php echo $dtym[1]; ?></p>
                                                        <P class="first_title2"><?php echo $origin; ?></P>
                                                    </td>
                                                    <td> <P class="first_title2" style="margin-top:0px;"><?php echo $total_hrs; ?></P>

                                                        <P class="first_title2"><?php echo count($avail_segments) - 1; ?> Stop</P></td>
                                                    <td>
                                                        <p class="first_title"><?php echo $atym[1]; ?></p>
                                                        <P class="first_title2"><?php echo $destination; ?></P>    
                                                    </td>
                                                    <td>
                                                        <p class="first_title"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp; <?php echo $final_total; ?></p>
                                                        <P class="first_title2">Refundable</P>
                                                    </td>
                                    <form method="post" action="index.php?action=flight_response">
                                    <input type="hidden" name="from_to" value="<?php echo $_POST['from'].'_'.$_POST['to']; ?>">
                                    
                                    <input type="hidden" name="fl_type" value="<?php echo $_POST['flight_type']; ?>">
                                    <input type="hidden" name="depart" value="<?php echo $_POST['depart']; ?>">
                                    <input type="hidden" name="return" value="<?php echo $_POST['return']; ?>">
                                    <input type="hidden" name="seat" value="<?php echo $_POST['seat']; ?>">
                                    <input type="hidden" name="airline_code" value="<?php echo $avail_segments[0]->AirlineCode; ?>">
                                    <input type="hidden" name="person" value="<?php echo $_POST['adult'].'_'.$_POST['children'].'_'.$_POST['infant']; ?>">
                                                    <?php if(count($AvailPaxFareDetails) > 1): ?>
                                    <td><button type="submit" value="<?php echo $i.'_'.$j; ?>" name="book_flight" class="btn btn-sm btn-primary" style="margin-bottom:10px;"><i class="fa fa-arrow-right"></i>Book</button>
                                                        <br>
                                                        <a class="flight_detail" id="<?php echo $coun; ?>" style="color:#00b9f5;font-size:12px;cursor:pointer;">Flight Details</a>
                                                    </td>
                                                    <?php else: ?>
                                                    <td><button type="submit" value="<?php echo $i; ?>" class="btn btn-sm btn-primary" name="book_flight"  style="margin-bottom:10px;"><i class="fa fa-arrow-right"></i>Book</button>
                                                        <br>
                                                        <a class="flight_detail" id="<?php echo $coun; ?>" style="color:#00b9f5;font-size:12px;cursor:pointer;">Flight Details</a>
                                                    </td>
                                                    <?php endif; ?>
                                                    </form>
                                                </tr>
                                                
<!--                                                    <input type="hidden" name="id" value="<?php echo $i; ?>"/>
                                                    <input type="hidden" name="from_to<?php echo $i; ?>" value="<?php echo $_POST['from'].'_'.$_POST['to']; ?>"
                                                    <input type="hidden" name="flight_type<?php echo $i; ?>" value="<?php echo $_POST['flight_type'].'_'.$_POST['seat']; ?>"
                                                    <input type="hidden" name="person_count<?php echo $i; ?>" value="<?php echo $_POST['adult'].'_'.$_POST['child'].'_'.$_POST['infant']; ?>"
                                                    <input type="hidden" name="final_total<?php echo $i; ?>" value="<?php echo $final_total; ?>">
                                                    <input type="hidden" name="user_trackid<?php echo $i; ?>" value="<?php echo $USER_TRACK_ID; ?>">
                                                    <input type="hidden" name="airline_code<?php echo $i; ?>" value="<?php echo $avail_segments[0]->AirlineCode.'_'.$AvailPaxFareDetails[0]->ClassCode.'_'.$avail_segments[0]->FlightNumber.'_'.$avail_segments[0]->FlightId; ?>">-->
                                                                            
                                                <tr class="flight_detail1<?php echo $coun; ?>" style="display:none;">

                                                    <td colspan="7">
                                                        <div>
                                                            <ul class="nav nav-pills">

                                                                <li class="active"><a data-toggle="pill" href="#home<?php echo $coun; ?>">Itinerary</a></li>
                                                                <li><a data-toggle="pill" href="#menu1<?php echo $coun; ?>">Policies</a></li>
                                                                <li><a data-toggle="pill" href="#bag<?php echo $coun; ?>">Bagage Policy</a></li>


                                                            </ul>

                                                            <div class="tab-content">
                                                                <div id="home<?php echo $coun; ?>" class="tab-pane fade in active">
                                                                    <div class="table-responsive">          
                                                                        <table class="table ">
                                                                            <thead>
                                                                                <?php
                                                                                $dtym = "";
                                                                                $d1 = "";
                                                                                for ($l = 0; $l < count($avail_segments); $l++):

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
                                                                                        <td><img src="<?php echo Fimages; ?>/45x45/<?php echo $flight_image->airline_image; ?>"></td>
                                                                                        <td>
                                                                                            <p class="first_title"><?php echo $flight_image->airline_name; ?></p>
                                                                                            <p class="first_title2"><?php echo $aircode_flightno; ?></p>
                                                                                            <P class="first_title2"><?php echo $_POST['seat']; ?></P> 
                                                                                        </td>
                                                                                        <td>
                                                                                            <p class="first_title"><?php echo $avail_segments[$l]->Origin; ?>&nbsp;<span><?php echo $dtym[1]; ?></span></p>
                                                                                            <P class="first_title2"><?php echo $date_it[0]; ?></P>
                                                                                            <P class="first_title22"><?php echo airport_name($avail_segments[$l]->Origin); ?></P> 
                                                                                        </td>
                                                                                        <td>
                                                                                            <i class="fa fa-clock-o" aria-hidden="true"></i><br>
                                                                                            <P class="first_title2" style="margin-top:0px;"><?php echo $avail_segments[$l]->Duration; ?></P>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p class="first_title"><?php echo $avail_segments[$l]->Destination; ?>&nbsp;<span><?php echo $atym[1]; ?></span></p>
                                                                                            <P class="first_title2"><?php echo $arr_it[0]; ?></P> 
                                                                                            <p class="first_title22"><?php echo airport_name($avail_segments[$l]->Destination); ?></p>
                                                                                        </td>
                                                                                        <td>
                                                                                <lable style="border: 1px solid;
                                                                                       padding: 5px;
                                                                                       color: #20bf7a;">Refundable</lable>
                                                                                </td>
                                                                                </tr>
                                                                                <?php if ($l == (count($avail_segments) - 1)):
                                                                                else:
                                                                                    ?>
                                                                                <input type="hidden" name="layover_tym<?php echo $i; ?>" value="<?php echo $total_hrs; ?>"/>
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





                                                                            </thead>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div id="menu1<?php echo $coun; ?>" class="tab-pane fade">
                                                                    <div class="table-responsive">          
                                                                        <table class="table table-bordered">
                                                                            <thead>

        <?php
        for ($m = 0; $m < count($avail_segments); $m++):
            $querystring = "SupplierId=00&FlightId=" . $avail_segments[$m]->FlightId . "&UserTrackId=" . $USER_TRACK_ID . "&FlightId=" . $FlightId . "&ClassCode=" . $ClassCode . "&AirlineCode=" . $avail_segments[$m]->AirlineCode . "";
            $url = 'http://api.kandoipower.com/api/DomesticAir/GetFareRule?key=$2y$10$OcFBXT6El4nw2DYWbEDEU.7R9iZrjzIn0VXYtv8AWX./lneDiRl.C&mid=M67961851&' . $querystring;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);
            $get_fare_rule = json_decode($output);
            
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


                                                                <div id="bag<?php echo $coun; ?>" class="tab-pane fade">
                                                                    <div class="table-responsive">          
                                                                        <table class="table table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <td>Baggage Code</td>
                                                                                    <td>Baggage Description</td>
                                                                                    <td>Baggage Amount</td>
                                                                                </tr>
        <?php
        $baggage_details=$get_adult_tax->TaxOutput->Baggages;
                                                                                        if(!empty($baggage_details)):
                                                                                            for($p=0;$p<count($baggage_details);$p++):
                                                                                                
        ?>

                                                                                            <tr>
            <td style="width: 30%;">  <?php echo trim($baggage_details[$p]->BaggageCode,"BaggageCode:-"); ?></td>
            <td style="width: 30%;">  <?php echo trim($baggage_details[$p]->BaggageDescription,'BaggageDescription'); ?></td>
            <td style="width: 30%;"> <?php echo trim($baggage_details[$p]->BaggageAmount,'BaggageAmount:-'); ?></td>
        </tr>
        <?php
                                                                                      endfor;
                                                                                      else:
                                                                                          ?>
        <tr><td colspan="3"> <h4>No data Available</h4> </td></tr>        
        <?php
                                                                                        endif;
        ?>

                                                                            </thead>
                                                                        </table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div> 
                                                    </td> 

                                                </tr>  
        <?php
        $coun++;
    endfor;


endfor;
?>
                                    <script>
                                        $(document).ready(function () {
                                            $(".flight_detail").click(function () {
                                                var id = $(this).attr('id');

                                                $(".flight_detail1" + id).toggle(".flight_detail1" + id);
                                            });
                                        });
                                    </script>


                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </fieldset>


            </div>
            <!-- END Validation Block -->
        </div>
        
        
        
        
        
        <!------------------------- ------------------------------------Modal Box-------------------------------------------------------------------->
        
        
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
            
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        
           <form id="form-validation" autocomplete="off"  method="post" class="form-horizontal"> 
                                           <div class="form-group">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-6">
                                                <label class="radio-inline" for="flight_type">
                                                    <input type="radio" class="flight_radio" id="flight_type" name="flight_type" value="O" required="" <?php if($_POST['flight_type']=='O'){ echo 'checked';} ?>> One Way
                                                </label>
                                                <label class="radio-inline" for="flight_type">
                                                    <input type="radio" id="flight_type" class="flight_radio1" name="flight_type" value="R" required="" <?php if($_POST['flight_type']=='R'){ echo 'checked';} ?>> Round Trip
                                                </label>
                                               
                                            </div>
                                        </div>
                                        <script>
                                        $('#form-validation input').on('change', function() {
      alert($('input[name=flight_type]:checked', '#form-validation').val());                                      
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
                                        
                                            
                                           <hr style="border:1px dashed #eaedf1;width: 100%;">
                                           
                                           
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="from">From</label>
                                                <div class="col-md-8 col-xs-12">
                                                    <select id="from2" name="from" class="form-control">
                                                        <option value="">Please select</option>
                                                        
                                                        <option value="BLR" <?php if($_POST['from']=='BLR'){ echo 'selected';} ?>>Bangalore</option>
                                                        <option value="BOM" <?php if($_POST['from']=='BOM'){ echo 'selected';} ?>>Mumbai</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            
                                           <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="to">To</label>
                                                <div class="col-md-8 col-xs-12">
                                                    <select id="to" name="to" class="form-control">
                                                        <option value="">Please select</option>
                                                        <option value="AMD" <?php if($_POST['to']=='AMD'){ echo 'selected';} ?>>Ahmedabad</option>
                                                        <option value="BLR" <?php if($_POST['to']=='BLR'){ echo 'selected';} ?>>Bangalore</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                           
                                            
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">

                                       
                                            <div class=" one_way_flight form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 control-label" for="depart">Departure</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="depart" value="<?php echo $_POST['depart']; ?>" name="depart" class="form-control input-datepicker " data-date-format="mm/dd/yyyy" placeholder="mm/dd/yyyy">
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6 col-xs-12 round_flight" style="display:none;">
                                                <label class="col-md-4 control-label" for="example-datepicker">Return Date</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="val_date2" name="return" value="<?php echo $_POST['return']; ?>"  class="form-control input-datepicker" data-date-format="mm/dd/yyyy" placeholder="mm/dd/yyyy">
                                                </div>
                                            </div>

                                           
                                           
                                            
                                            <hr style="border:1px dashed #eaedf1;width: 100%;">
                                            	<div class="row">
                                            <div class="form-group col-md-10 col-xs-12">
                                             <label class="col-md-5 col-xs-5 control-label" for="example-datepicker">Adults (Above 12 Years)</label>
		<div class="col-xs-7 col-sm-7">
			<div class="input-group number-spinner">
				<span class="input-group-btn">
					<a class="btn btn-default spinner" data-dir="dwn"><i class="fa fa-minus" aria-hidden="true"></i></a>
				</span>
                            <input type="text" name="adult" class="form-control text-center" value="<?php echo $_POST['adult']; ?>">
				<span class="input-group-btn">
					<a class="btn btn-default spinner" data-dir="up"><i class="fa fa-plus" aria-hidden="true"></i></a>
				</span>
			</div>
		</div>
	</div>
</div>
	
	<div class="row">
	<div class="form-group col-md-10 col-xs-12">
                                             <label class="col-md-5 col-xs-5 control-label" for="example-datepicker">Children (2-12 Years)</label>
		<div class="col-xs-7 col-sm-7">
			<div class="input-group number-spinnerr">
				<span class="input-group-btn">
					<a class="btn btn-default spinner" data-dir="dwn"><i class="fa fa-minus" aria-hidden="true"></i></a>
				</span>
                            <input type="text" name="children" class="form-control text-center" value="<?php echo $_POST['children']; ?>">
				<span class="input-group-btn">
					<a class="btn btn-default spinner" data-dir="up"><i class="fa fa-plus" aria-hidden="true"></i></a>
				</span>
			</div>
		</div>
	</div>
	</div>

	<div class="row">
	<div class="form-group col-md-10 col-xs-12">
                                             <label class="col-md-5 col-xs-5 control-label" for="example-datepicker">Infants (Below 2 Years)</label>
		<div class="col-xs-7 col-sm-7">
			<div class="input-group number-spinnerr">
				<span class="input-group-btn">
					<a class="btn btn-default spinner" data-dir="dwn"><i class="fa fa-minus" aria-hidden="true"></i></a>
				</span>
                            <input type="text" name="infant" class="form-control text-center" value="<?php echo $_POST['infant']; ?>">
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
                            
                         </style>
                         
                            
                            
                              <hr style="border:1px dashed #eaedf1;width: 100%;">
                                         <div class="form-group col-md-6 col-xs-12">
                                                <label class="col-md-4 col-xs-12 control-label" for="seat">Class</label>
                                                <div class="col-md-8 col-xs-12">
                                                    <select id="seat" name="seat" class="form-control">
                                                        <option value="">Please select</option>
                                                        <option value="ECONOMY" <?php if($_POST['seat']=='ECONOMY'){ echo 'selected';} ?>>Economy</option>
                                                        <option value="PREMIUMECONOMY" <?php if($_POST['seat']=='PREMIUMECONOMY'){ echo 'selected';} ?>>Premium Economy</option>
                                                        <option value="BUSINESS" <?php if($_POST['seat']=='BUSINESS'){ echo 'selected';} ?>>Business Class</option>
                                                        <option value="FIRSTCLASS" <?php if($_POST['seat']=='FIRSTCLASS'){ echo 'selected';} ?>>First Class</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                           <hr style="border:1px dashed #eaedf1;width: 100%;">   
                                            
                                       
                                        
                                      
                                        <div class="form-group form-actions">
                                            <div class="col-md-12">
                                                
                                                <center><button type="submit" class="btn btn-sm btn-primary" style="margin-bottom:10px;"><i class="fa fa-arrow-right"></i> Submit</button></center>
                                               
                                            </div>
                                        </div>
                                       
                                        
                                   </form>
        </div>
       
      </div>
      
    </div>
  </div>
        
        
  <script>
      
      $(document).ready(function() { 
    $('#from').change(function() {
      $('#from2').val($('#from').val());
    });
});
      
  </script>
  
  
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

        <style>
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
</div>














