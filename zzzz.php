<?php
$a = 'https://www.theservicesonline.in/Admin/RechargeAPI.aspx?UserID=9304928316&Password=70126682&MobileNo=9304928316&Message=B$9427666688$10$4708$0$3333351492';
// $b = file_get_contents($a);

//                         print_r($b);
                        
                        ini_set("allow_url_fopen", 1);
                                                $ch = curl_init();
                                            curl_setopt($ch, CURLOPT_URL, $a);
                                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                            $Get_Response = curl_exec($ch);
                                            curl_close($ch);
                                            
                                            print_r($Get_Response);
?>