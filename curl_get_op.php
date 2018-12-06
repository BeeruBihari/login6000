<?php

 $url='http://api.kandoipower.com/api/DomesticAir/GetAvailability?key=$2y$10$OcFBXT6El4nw2DYWbEDEU.7R9iZrjzIn0VXYtv8AWX./lneDiRl.C&mid=M67961851&BookingType=O&Origin=BOM&Destination=BLR&TravelDate=12/26/2017&ClassType=ECONOMY&AirlineCode=&AdultCount=1&ChildCount=0&InfantCount=0&ResidentofIndia=1';
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
echo '<pre>';
        print_r($decode_output); 
        echo '</pre>';


?>