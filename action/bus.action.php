<?php

if(TYPE == 'bus_form')
{
	
    
}

if(TYPE == 'bus_book')
{
    
}
if(TYPE == 'bus_response')
{
	if($_POST){
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
		$ori = $_POST['from'];
		$ori_e = explode("-",$ori);
		$dis = $_POST['to'];
		$dis_e = explode("-",$dis);;
		$date = $_POST['date'];
		$url = 'http://api.kandoipower.com/api/bus/GetSearch?key=$2y$10$OcFBXT6El4nw2DYWbEDEU.7R9iZrjzIn0VXYtv8AWX./lneDiRl.C&mid=M67961851';
		$url = $url.'&OriginId='.$ori_e[0].'&DestinationId='.$dis_e[0].'&TravelDate='.$date;
		$data  = json_decode(curl_get($url));
		$tripdate = date("Y-m-d", strtotime($date));
		$dayOfWeek = date("l", strtotime($tripdate));
		$dateofmonth = date("d", strtotime($tripdate));
		$month = date("F", strtotime($tripdate));
		$buslist = $data->SearchOutput->AvailableBuses;
		$usertrckid = $data->UserTrackId;
		$Commission = $data->Commission;
		$TripId = $data->TripId;
		//$master->redirect('index.php?action=bus_response?from='.$ori_e[].'&to='.);
	}
    
}
if(TYPE == 'bus_ticket')
{
    
}
?>