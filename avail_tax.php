<?php

 ini_set('max_execution_time', 300); 
$url = "http://115.248.39.80/HermesDomAir/DomesticAir.svc/JSONService/GetAvailability";
$mySOAP = <<<EOD
{
  "Authentication": {
    "LoginId": "piyush123",
    "Password": "piyush123123"
  },
  "AvailabilityInput": {
    "BookingType": "O",
    "JourneyDetails": [
      {
        "Origin": "BLR",
        "Destination": "AMD",
        "TravelDate": "11/21/2017"
      }
    ],
    "ClassType": "ECONOMY",
    "AirlineCode": "",
    "AdultCount": 1,
    "ChildCount": 0,
    "InfantCount": 0,
    "ResidentofIndia": 1,
    "Optional1": "0",
    "Optional2": "0",
    "Optional3": "0"
  }
}

EOD;

//print_r($mySOAP);
// The HTTP headers for the request (based on image above)
$headers = array(
'Content-Type: application/json',
);
// Build the cURL session
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $mySOAP);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
// Send the request and check the response
if (($result = curl_exec($ch)) === FALSE) {
die('cURL error: '.curl_error($ch)."<br />\n");
} else {
//print_r($result);
}
curl_close($ch);

         $decode_output=json_decode($result);
// echo '<p style="background:white;"><pre style="background:white;">';
                                              // print_r($decode_output);
                                             //  echo '</pre></p>';
    $ongoing = $decode_output->AvailabilityOutput->AvailableFlights->OngoingFlights;
                                         $USER_TRACK_ID = $decode_output->UserTrackId;
                                         for ($i = 0; $i < count($ongoing); $i++):

                                             $avail_segments = $ongoing[$i]->AvailSegments[0];

                                              $FlightId = $avail_segments->FlightId;
                                             $aircode_flightno = $avail_segments->AirlineCode . ' - ' . $avail_segments->FlightNumber;
                                             $dtym = explode(' ', $avail_segments->DepartureDateTime);
                                             $atym = explode(' ', $avail_segments->ArrivalDateTime);
                                             $origin = $avail_segments->Origin;
                                             $destination = $avail_segments->Destination;
                                             $duration = $avail_segments->Duration;
                                             $noofstop = $avail_segments->NumberofStops;

                                          
                                             $AvailPaxFareDetails = $avail_segments->AvailPaxFareDetails;

                                             for ($j = 0; $j < count($AvailPaxFareDetails); $j++):

                                                 //Get Tax code
                                                
                                              

                                                 $ClassCode = $AvailPaxFareDetails[$i]->ClassCode;
                                           
                                                 $ClassCodeDesc = $AvailPaxFareDetails[$i]->ClassCodeDesc;
                                                 $CheckInBaggage = $AvailPaxFareDetails[$i]->BaggageAllowed->CheckInBaggage;
                                                 $HandBaggage = $AvailPaxFareDetails[$i]->BaggageAllowed->HandBaggage;

                                                 $adult_amt = $AvailPaxFareDetails[$i]->Adult->GrossAmount;
                                                 $AFareBasis = $AvailPaxFareDetails[$i]->Adult->FareBasis;
                                                 $AFareType = $AvailPaxFareDetails[$i]->Adult->FareType;
                                                 $ABasicAmount = $AvailPaxFareDetails[$i]->Adult->BasicAmount;
                                                 $ATaxDetails = $AvailPaxFareDetails[$i]->Adult->TaxDetails;
                                                 $ACommission = $AvailPaxFareDetails[$i]->Adult->Commission;

                           $url = "http://115.248.39.80/HermesDomAir/DomesticAir.svc/JSONService/GetTax";
$mySOAP = <<<EOD
{
	"Authentication": {
    "LoginId": "piyush123",
    "Password": "piyush123123"
  },
  "UserTrackId": $USER_TRACK_ID,
  "TaxInput": {
    "TaxReqFlightSegments": [
      {
        "FlightId": $FlightId,
        "ClassCode": $ClassCode,
        "AirlineCode": $avail_segments->AirlineCode,
        "ETicketFlag": 1,
        "BasicAmount": $adult_amt,
        "SupplierId": "0"
      }
    ],
    "GSTDetails": {
      "GSTNumber": "22AAAAA0000A1Z5",
      "EMailId": "test@test.com",
      "CompanyName": "xyz",
      "ContactNumber": "8200759374",
      "Address": "Rajkot",
      "FirstName": "nik",
      "LastName": "chauhan"
    }
  }
}
EOD;

 //print_r($mySOAP);
 // The HTTP headers for the request (based on image above)
 $headers = array(
 'Content-Type: application/json',
 );
 // Build the cURL session
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_POST, TRUE);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $mySOAP);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

 if (($result = curl_exec($ch)) === FALSE) {
 die('cURL error: '.curl_error($ch)."<br />\n");
 } else {
 //print_r($result);
 }
 curl_close($ch);
                                                   $get_adult_tax = json_decode($result);
                                                     echo '<p style="background:white;"><pre style="background:white;">';
                                                print_r($get_adult_tax);
                                                echo '</pre></p>';
 endfor; endfor;

                                                ?>