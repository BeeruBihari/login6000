<?php 

include 'include/base.php';

$o__index= new index();

$url_usd_bgp='https://api.coinmarketcap.com/v1/ticker/?convert=GBP';
$url_euro='https://api.coinmarketcap.com/v1/ticker/?convert=EUR';
$data_usd_bgp=file_get_contents($url_usd_bgp);
$data_euro=file_get_contents($url_euro);

$array_usd_gbp=json_decode($data_usd_bgp);
$array_euro=json_decode($data_euro);
for($i=0;$i<count($array_usd_gbp);$i++):
//echo $array_usd_gbp[$i]->symbol;

$records = array(
    
    'symbol'=>$array_usd_gbp[$i]->symbol,
    'cname'=>$array_usd_gbp[$i]->name,
    'price_usd'=>$array_usd_gbp[$i]->price_usd,
    'price_gbp'=>$array_usd_gbp[$i]->price_gbp,
    'price_euro'=>$array_euro[$i]->price_eur,
    'rank'=>$array_usd_gbp[$i]->rank,
    'price_btc'=>$array_usd_gbp[$i]->price_btc,
   // '24h_volume_usd' =>$array_usd_gbp[$i]->24h_volume_usd,
    'market_cap_usd	'=>$array_usd_gbp[$i]->market_cap_usd,
    'available_supply'=>$array_usd_gbp[$i]->available_supply,
    'change_1h'=>$array_usd_gbp[$i]->percent_change_1h,
    'change_24h'=>$array_usd_gbp[$i]->percent_change_1h,
    'change_7d'=>$array_usd_gbp[$i]->percent_change_1h,
    'last_updated'=>$array_usd_gbp[$i]->last_updated,
    'date'=>date('Y-m-d'),
    'time'=>date('h:i:s'),
    
    );
    
    $data_insert=$o__index->insertcurrency($records);
    if($data_insert > 0){
print_r($records);
echo '<br/><br/>';
}
endfor;
 
 
 ?>