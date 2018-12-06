<?php
$o__flight = new flight();

if(TYPE == 'book_flight')
{
    
}

if(TYPE == 'flight_response')
{
    
}
if(TYPE == 'roundway_trip')
{
     if($_POST['flight_type']=="R"){
              $querystring="BookingType=".$_POST['flight_type']."&Origin=".$_POST['from']."&Destination=".$_POST['to']."&TravelDate=".$_POST['depart']."&ClassType=".$_POST['seat']."&AirlineCode=SG&AdultCount=".$_POST['adult']."&ChildCount=".$_POST['children']."&InfantCount=".$_POST['infant']."&ResidentofIndia=1&ReturnOrigin=".$_POST['to']."&ReturnDestination=".$_POST['from']."&ReturnTravelDate=".$_POST['return']."";
              $url='http://api.kandoipower.com/api/DomesticAir/GetAvailabilityRoundTrip?key=$2y$10$OcFBXT6El4nw2DYWbEDEU.7R9iZrjzIn0VXYtv8AWX./lneDiRl.C&mid=M67961851&'.$querystring;
          }
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          $output = curl_exec($ch);
          curl_close($ch);
          $decode_output=json_decode($output);
//        echo '<pre>';
//        print_r($decode_output); 
//        echo '</pre>';
//        exit();
          
}
if(TYPE == 'select_seat')
{
      if(!empty($_POST['to']) && !empty($_POST['from']))
    {
      // print_r($_POST); exit();
          if($_POST['flight_type']=="O"){
          $querystring="BookingType=".$_POST['flight_type']."&Origin=".$_POST['from']."&Destination=".$_POST['to']."&TravelDate=".$_POST['depart']."&ClassType=".$_POST['seat']."&AirlineCode=SG&AdultCount=".$_POST['adult']."&ChildCount=".$_POST['children']."&InfantCount=".$_POST['infant']."&ResidentofIndia=1";
          $url='http://api.kandoipower.com/api/DomesticAir/GetAvailability?key=$2y$10$OcFBXT6El4nw2DYWbEDEU.7R9iZrjzIn0VXYtv8AWX./lneDiRl.C&mid=M67961851&'.$querystring;
          }
         
          
          $ch = curl_init();
//echo $url; exit();
        // set url
        curl_setopt($ch, CURLOPT_URL, $url);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);
        // $result = curl_exec($ch);

       // print_r($output); exit();

        $decode_output=json_decode($output);
//echo '<pre>';
//        print_r($decode_output); exit();
//        echo '</pre>';
    }
}

if(TYPE == 'flight_ticket')
{
    error_reporting(E_ALL);
    
      if(isset($_POST['procced_pay']))
    {
        ini_set('max_execution_time', '999999999');
        //print_r($_POST); exit();
        $explode= explode('_', $_POST['persons']);
        $from_to= explode('_', $_POST['from_to']);
        $adult=$explode[0];
        $child=$explode[1];
        $infant=$explode[2];
        $track_id=$_POST['track_id'];
        $fl_type=$_POST['fl_type'];
        $from=$from_to[0];
        $to=$from_to[1];
        $amount=$_POST['amount'];
        $classcode=$_POST['classcode'];
        $airline_code=$_POST['airline_code'];
        $flight_id=$_POST['flight_id'];
        
        $adult_passengers="";
        $child_passengers="";
        $infant_passengers="";
        
        
           $params='{
	"Authentication": {
		"LoginId": "piyush123",
		"Password": "piyush123123"
	},
	"UserTrackId": "'.$track_id.'",
	"BookInput": {
		"CustomerDetails": {
			"Title": "'.$_POST['adult_title1'].'",
			"Name": "'.$_POST['adult_firstname1'].' '.$_POST['adult_lastname1'].'",
			"Address": "'.$_POST['adult_address1'].'",
			"City": "'.$_POST['adult_city1'].'",
			"CountryId": "91",
			"ContactNumber": "'.$_POST['adult_mob1'].'",
			"EmailId": "'.$_POST['adult_email1'].'",
			"PinCode": "'.$_POST['adult_pincode1'].'"
		},
		"SpecialRemarks": "",
		"NotifyByMail": 0,
		"NotifyBySMS": 0,
		"AdultCount": '.$explode[0].',
		"ChildCount": '.$explode[1].',
		"InfantCount": '.$explode[2].',
		"BookingType": "'.$fl_type.'",
		"TotalAmount": '.$amount.',
		"FrequentFlyerRequest": null,
		"SpecialServiceRequest": null,
		"FSCMealsRequest": null,
		"FlightBookingDetails": [
			{
				"AirlineCode": "'.$airline_code.'",
				"PaymentDetails": {
					"CurrencyCode": "INR",
					"Amount": '.$amount.'
				},
				"TourCode": "",
                                "PassengerDetails": [';
        
        
        //ADULT
           
        if($explode[0] > 0)
        {
            for($i=1;$i<=$explode[0];$i++):
                $adult_title=$_POST['adult_title'.$i];
                $adult_firstname=$_POST['adult_firstname'.$i];
                $adult_lastname=$_POST['adult_lastname'.$i];
                $adult_gender=$_POST['adult_gender'.$i];
                $adult_age=$_POST['adult_age'.$i];
                $adult_bday=$_POST['adult_bday'.$i];
                
               $adult_passengers.='{
						"PassengerType": "ADULT",
						"Title": "'.$adult_title.'",
						"FirstName": "'.$adult_firstname.'",
						"LastName": "'.$adult_lastname.'",
						"Gender": "'.$adult_gender.'",
						"Age": '.$adult_age.',
						"DateofBirth": "'.$adult_bday.'",
						"IdentityProofId": "",
						"IdentityProofNumber": "",
						"BookingSegments": [
							{
								"FlightId": "'.$flight_id.'",
								"ClassCode": "'.$classcode.'",
								"SpecialServiceCode": "",
								"FrequentFlyerId": "",
								"FrequentFlyerNumber": "",
								"MealCode": "",
								"SeatPreferId": "",
								"SupplierId": "0"
							}
						],
						"LCCBaggageRequest": null,
						"LCCMealsRequest": null,
						"OtherSSRRequest": null,
						"SeatRequest": null
					}';
               if($i<$explode[0]) { $adult_passengers.=','; }
            endfor;
        }
        
        
        //CHILD COUNT
        if($explode[1] > 0)
        {
            for($i=1;$i<=$explode[1];$i++):
                $child_title=$_POST['child_title'.$i];
                $child_firstname=$_POST['child_firstname'.$i];
                $child_lastname=$_POST['child_lastname'.$i];
                $child_gender=$_POST['child_gender'.$i];
                $child_age=$_POST['child_age'.$i];
                $child_bday=$_POST['child_bday'.$i];
                if($i<=$explode[0]) { $child_passengers.=','; }
               $child_passengers.='{
						"PassengerType": "CHILD",
						"Title": "'.$child_title.'",
						"FirstName": "'.$child_firstname.'",
						"LastName": "'.$child_lastname.'",
						"Gender": "'.$child_gender.'",
						"Age": '.$child_age.',
						"DateofBirth": "'.$child_bday.'",
						"IdentityProofId": "",
						"IdentityProofNumber": "",
						"BookingSegments": [
							{
								"FlightId": "'.$flight_id.'",
								"ClassCode": "'.$classcode.'",
								"SpecialServiceCode": "",
								"FrequentFlyerId": "",
								"FrequentFlyerNumber": "",
								"MealCode": "",
								"SeatPreferId": "",
								"SupplierId": "0"
							}
						],
						"LCCBaggageRequest": null,
						"LCCMealsRequest": null,
						"OtherSSRRequest": null,
						"SeatRequest": null
					}';
               
            endfor;
        }
        
        
        //INFANT COUNT
        
            if($explode[2] > 0)
        {
            for($i=1;$i<=$explode[2];$i++):
                $infant_title=$_POST['infant_title'.$i];
                $infant_firstname=$_POST['infant_firstname'.$i];
                $infant_lastname=$_POST['infant_lastname'.$i];
                $infant_gender=$_POST['infant_gender'.$i];
                $infant_age=$_POST['infant_age'.$i];
                $infant_bday=$_POST['infant_bday'.$i];
                   if($i<=$explode[0]) { $infant_passengers.=','; }
               $infant_passengers.='{
						"PassengerType": "infant",
						"Title": "'.$infant_title.'",
						"FirstName": "'.$infant_firstname.'",
						"LastName": "'.$infant_lastname.'",
						"Gender": "'.$infant_gender.'",
						"Age": '.$infant_age.',
						"DateofBirth": "'.$infant_bday.'",
						"IdentityProofId": "",
						"IdentityProofNumber": "",
						"BookingSegments": [
							{
								"FlightId": "'.$flight_id.'",
								"ClassCode": "'.$classcode.'",
								"SpecialServiceCode": "",
								"FrequentFlyerId": "",
								"FrequentFlyerNumber": "",
								"MealCode": "",
								"SeatPreferId": "",
								"SupplierId": "0"
							}
						],
						"LCCBaggageRequest": null,
						"LCCMealsRequest": null,
						"OtherSSRRequest": null,
						"SeatRequest": null
					}';
            
            endfor;
        }
        
     $last_param=']
			}
		],
		"BlockingFlag": false
	}
}';
     $key='$2y$10$OcFBXT6El4nw2DYWbEDEU.7R9iZrjzIn0VXYtv8AWX./lneDiRl.C';
     $mid='M67961851';

     $bookdata=$params.$adult_passengers.$child_passengers.$infant_passengers.$last_param;
  //  echo '<pre>'.$bookdata.'</pre>';
//     
   //   exit();
      $url='http://api.kandoipower.com/api/DomesticAir/GetBook';
     // echo $url; 
      
//             $final= file_get_contents($url); 
//             print_r($final);
//             exit();
      
       $values = array(
    'mid' => $mid,
    'bookdata' => $bookdata,
    'key' => $key,
    'amount' => $amount,
    
  );

$paramms = http_build_query($values);
      
      $mid = "mid=". $mid ;
      $bookdata= "bookdata=". $bookdata ;
      $key= "key=". $key ;
//             $headers = array(
//'Content-Type: application/json',
//);
   $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $paramms);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $bookdata);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
// Send the request and check the response
if (($result = curl_exec($ch)) === FALSE) {
die('cURL error: '.curl_error($ch)."<br />\n");
} else {
//print_r($result);
}
curl_close($ch);
//exit();
        // $result = curl_exec($ch);

       // print_r($output); exit();

          $book_detail=json_decode($output);
//echo '<pre>';
//        print_r($decode_output); 
//        echo '</pre>';
//        exit();
    }
    
    
}


?>