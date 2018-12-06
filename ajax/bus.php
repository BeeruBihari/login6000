<?php

include'../include/base.php';
ini_set("allow_url_fopen", 1);
$key = '$2y$10$OcFBXT6El4nw2DYWbEDEU.7R9iZrjzIn0VXYtv8AWX./lneDiRl.C';
$mid = 'M67961851';

$url = 'http://api.kandoipower.com/api/bus/GetOrigin?key='.$key.'&mid='.$mid;
// create a new cURL resource
function curl_get($url, array $get = NULL, array $options = array()) 
{    
    $defaults = array( 
        CURLOPT_URL => $url. (strpos($url, '?') === FALSE ? '?' : ''). http_build_query($get), 
        CURLOPT_HEADER => 0, 
        CURLOPT_RETURNTRANSFER => TRUE, 
        CURLOPT_TIMEOUT => 4 
    ); 
    
    $ch = curl_init(); 
    curl_setopt_array($ch, ($options + $defaults)); 
    if( ! $result = curl_exec($ch)) 
    { 
        trigger_error(curl_error($ch)); 
    } 
    curl_close($ch); 
    return $result; 
} 


//print_r($a->OriginOutput->OriginCities[0]->OriginId);
//print_r($a);
if($_POST['type'] == 'getdis'){
	$origin = $_POST['orgid'];
	$url = 'http://api.kandoipower.com/api/bus/GetDestination?key='.$key.'&mid='.$mid;
	$url = $url.'&OriginId='.$origin;
	
$data  = json_decode(curl_get($url));
$city = $data->DestinationOutput->DestinationCities;
//print_r($data); exit;
foreach($city as $icn){
	//echo $icn->OriginId;
	
	echo '<option value="'.$icn->DestinationId.'-'.$icn->DestinationName.'">'.$icn->DestinationName.'</option>';
}
}
?>