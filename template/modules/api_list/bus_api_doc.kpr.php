<div id="page-content">
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Bus API Document<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> API List</li>
                            <li><a href="">Bus API Document</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Bus Request</strong></h2>
                                    </div>
                                    
                                     <div>HTTP Method : <span style="font-size:13px; font-weight:300">GET / POST</span></div>
                            <div>API URL</div>
                            <div>1) GetOrigin</div>
                            <div>
                                http://api.kandoipower.com/api/bus/GetOrigin?key=xxxxxxxxxxxxxxxxxxxxx&mid=xxxxxx
                               
                            </div>
                            <br>
                            <div>2) GetDestination</div>
                            <div>
                                http://api.kandoipower.com/api/bus/GetDestination?OriginId=170&key=xxxxxxxxxxx&mid=xxxxxx
                               
                            </div>
                            <br>
                            <div>3) GetSearch</div>
                            <div>
                                http://api.kandoipower.com/api/bus/GetSearch?key=xxxxxxxxx&mid=xxxxxx&OriginId=170&DestinationId=21&TravelDate=10/10/2017
                               
                            </div>
                            <br>
                            <div>4) GetSeatBlock</div>
                            <div>
                               http://api.kandoipower.com/api/bus/GetSeatBlock?UserTrackId=xxxxxxxxxxxxxxxxxxxxx&Title=Mr.&Name=Test&Address=Rajkot&ContactNumber=9944100866&City=Rajkot&CountryId=91&
                               EmailId=nikchauhan1206@gmail.com&IdProofId=3&IdProofNumber=2335656556&TotalTickets=1&TotalAmount=475&TransportId=24&
                               ScheduleId=348146&StationId=2254&TravelDate=21/9/2017&PassengerName=Test&Gender=M&Age=23&SeatNo=20&SeatTypeId=22&
                               Fare=475&BoardingId=221&DroppingId=41&key=xxxxxxxxxx&mid=xxxxxxxx
                               
                            </div>
                            <br>
                            <div>5) GetSeatMap</div>
                            <div>
                                http://api.kandoipower.com/api/bus/GetSeatMap?ScheduleId=221&StationId=55&TransportId=222&TravelDate=9/22/2017&key=xxxxxxxxx&mid=xxxxxxxx&UserTrackId=xxxxxxxxxxxxx
                               
                            </div>
                            <br>
                            <div>6) GetBook</div>
                            <div>
                                http://api.kandoipower.com/api/bus/GetBook?UserTrackId=xxxxxxxxxxxxxxxxxxxxx&Title=Mr.&Name=Test&Address=Rajkot&ContactNumber=9944100866&City=Rajkot&CountryId=91&
                                EmailId=nikchauhan1206@gmail.com&IdProofId=3&IdProofNumber=2335656556&TotalTickets=1&TotalAmount=475&TransportId=24&ScheduleId=348146
                                &StationId=2254&TravelDate=21/9/2017&PassengerName=Test&Gender=M&Age=23&
                                SeatNo=20&SeatTypeId=22&Fare=475&BoardingId=221&DroppingId=41&key=xxxxxxxxxxxx&mid=xxxxxxx
                               
                            </div>
                            <br>
                            <div>7) GetTransactionStatus</div>
                            <div>
                                http://api.kandoipower.com/api/bus/GetTransactionStatus?UserTrackId=xxxxxxxxxxxxxxxxxx&key=xxxxxxxxx&mid=xxxxxx
                               
                            </div>
                            <br>
                            <div>8) GetReprint</div>
                            <div>
                                http://api.kandoipower.com/api/bus/GetReprint?key=xxxxxxx&mid=xxxxxxxx&TransactionId=125566

                               
                            </div>
                            <br>
                            <div>9) GetCancellationPolicy</div>
                            <div>
                               http://api.kandoipower.com/api/bus/GetCancellationPolicy?key=xxxxxxx&mid=xxxxxx&TransportId=1223
                               
                            </div>
                            <div>10) GetCancellationPenalty</div>
                            <div>
                               http://api.kandoipower.com/api/bus/GetCancellationPenalty?key=xxxxxxxxxx&mid=xxxxxxx&TransactionId=125566
                               
                            </div>
                             <br>
                            <div>11) GetCancellation</div>
                            <div>
                                http://api.kandoipower.com/api/bus/GetCancellation?TransactionId=221&TotalTicketsToCancel=1&PenaltyAmount=47&TicketNumbers=E65565&TransportId=21&key=xxxxxxxx&mid=xxxxxxx
                               
                            </div>
                             <br>
                            <div>12) GetBookedHistory</div>
                            <div>
                                http://api.kandoipower.com/api/bus/GetBookedHistory?key=xxxxxxx&mid=xxxxxxxx&FromDate=10/10/2017&ToDate=10/10/2017&RecordsBy=m
                               
                            </div>
                            <br>
                            <div>13) GetAccountStatement</div>
                            <div>
                                http://api.kandoipower.com/api/bus/GetAccountStatement?key=xxxxxxxxxx&mid=xxxxxxxxx&FromDate=10/10/2017&ToDate=10/10/2017
                               
                            </div>
                            <br>
                            <div>14) GetAgentCreditBalance</div>
                            <div>
                                http://api.kandoipower.com/api/bus/GetAgentCreditBalance?key=xxxxxxxxx&mid=xxxxxxx
                               
                            </div>

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                           
                           
                            
                            
                            
                        </div>
                        
                        
                        
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                   
                                    
                                     <table class="table table-vcenter table-striped">
                                <tbody>
                                    <tr>
                                        <th>Parameters
                                        </th><th>Data TypeData Type
                                        </th><th>Required / Optional
                                        </th><th>Description
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>mid</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>Merchant ID</td>
                                    </tr>
                                    <tr>
                                        <td>key</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>Key</td>
                                    </tr>
                                    <tr>
                                        <td>OriginId</td>
                                        <td>Double</td>
                                        <td>Required</td>
                                        <td>OriginId</td>
                                    </tr>
                                    <tr>
                                        <td>TravelDate</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>TravelDate</td>
                                    </tr>
                                    <tr>
                                        <td>Title</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>Title</td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>Name</td>
                                    </tr>
                                    <tr>
                                        <td>ContactNumber</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>ContactNumber</td>
                                    </tr>
                                    <tr>
                                        <td>City</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>City</td>
                                    </tr>
                                    <tr>
                                        <td>CountryId</td>
                                        <td>Double</td>
                                        <td>Required</td>
                                        <td>CountryId</td>
                                    </tr>
                                    <tr>
                                        <td>EmailId</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>EmailId</td>
                                    </tr>
                                    <tr>
                                        <td>IdProofId</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>IdProofId</td>
                                    </tr>
                                    <tr>
                                        <td>IdProofNumber</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>IdProofNumber</td>
                                    </tr>
                                    <tr>
                                        <td>TransportId</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>TransportId</td>
                                    </tr>
                                    <tr>
                                        <td>TotalTickets</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>TotalTickets</td>
                                    </tr>
                                    <tr>
                                        <td>TotalAmount</td>
                                        <td>Double</td>
                                        <td>Required</td>
                                        <td>TotalAmount</td>
                                    </tr>
                                    <tr>
                                        <td>ScheduleId</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>ScheduleId</td>
                                    </tr>
                                    <tr>
                                        <td>StationId</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>StationId</td>
                                    </tr>
                                    <tr>
                                        <td>PassengerName</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>PassengerName</td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>Gender</td>
                                    </tr>
                                    <tr>
                                        <td>Age</td>
                                        <td>Double</td>
                                        <td>Required</td>
                                        <td>Age</td>
                                    </tr>
                                    <tr>
                                        <td>SeatNo</td>
                                        <td>Double</td>
                                        <td>Required</td>
                                        <td>SeatNo</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>SeatTypeId</td>
                                        <td>Double</td>
                                        <td>Required</td>
                                        <td>SeatTypeId</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>Fare</td>
                                        <td>Double</td>
                                        <td>Required</td>
                                        <td>Fare</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>BoardingId</td>
                                        <td>Double</td>
                                        <td>Required</td>
                                        <td>BoardingId</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>DroppingId</td>
                                        <td>Double</td>
                                        <td>Required</td>
                                        <td>DroppingId</td>
                                    </tr>
                                   
                                   
                                </tbody></table>

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                           
                           
                            
                            
                            
                        </div>
                        
                        
                        
                        
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Output Example</strong></h2>
                                    </div>
                                    
                                     <div>1) GetOrigin JSON</div>
                            <div>
                                {
                                "ResponseStatus": 1,
                                "OriginOutput": {
                                "OriginCities": [
                                {
                                "OriginId": 187,
                                "OriginName": "Madurai"
                                },
                                {
                                "OriginId": 170,
                                "OriginName": "Chennai"
                                },
                                {
                                "OriginId": 198,
                                "OriginName": "Salem"
                                },
                                {
                                "OriginId": 71,
                                "OriginName": "Bangalore"
                                }
                                ]
                                }
                                }
                            </div>

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                           
                           
                            
                            
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Output Example</strong></h2>
                                    </div>
                                    
                                     <div>2) GetDestination JSON</div>
                            <div>
                                    {
"ResponseStatus": 1,
"DestinationOutput": {
"DestinationCities": [
{
"DestinationId": 71,
"DestinationName": "Bangalore"
}
]
}
}
                            </div>

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                           
                           
                            
                            
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Output Example</strong></h2>
                                    </div>
                                    
                                     <div>3) GetSearch JSON</div>
                            <div>
                                    {
"ResponseStatus": 1,
"UserTrackId": "RMNZZ97799999981907984888698875",
"SearchOutput": {
"AvailableBuses": [
{
"ScheduleId": "348117",
"StationId": "2254",
"BusType": "",
"BusName": "Chennai-Bangalore 10:00 PM 1 SEATER",
"TransportId": 24,
"TransportName": "Sharma Transports",
"Fares": [
{
"SeatTypeId": 22,
"SeatType": "2+2 Hi- tech Non AC Semi Sleeper",
"Fare": 475,
"ServiceTax": 23
}
],
"DepartureTime": "10:00 PM",
"ArrivalTime": "",
"AvailableSeatCount": "30",
"BoardingPoints": [
{
"BoardingId": "5057",
"Place": "Central",
"Time": "10:00 PM",
"Address": "2/1 E.V.R. Road",
"LandMark": "Opp.Central Rly Station",
"ContactNumber": "044 25380754"
}
],
"DroppingPoints": [
{
"DroppingId": "5059",
"Place": "Kalasipalaya",
"Time": "05:00 AM",
"Address": "Tippu Sulthan Road",
"LandMark": "",
"ContactNumber": ""
}
],
"Commission": "16.02"
}
]
}
}
                            </div>

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                           
                           
                            
                            
                            
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Output Example</strong></h2>
                                    </div>
                                    <div>4) GetSeatBlock JSON</div>
                            <div>
                                {
"ResponseStatus": 1,
"UserTrackId": "RMNZZ97799999989907984974966182",
"BlockingOutput":
{
"BlockingStatus": 1,
"Remarks": "SUCCESSFULLLY BLOCKED"
}
}
                            </div>
                                     

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Output Example</strong></h2>
                                    </div>
                                    
                                     <div>5) GetSeatMap JSON</div>
                            <div>
{
"ResponseStatus": 1,
"UserTrackId": "RMYLN9708608999797798287966172279554525",
"SeatMapOutput": {
"BoardingPoints": [
{
"BoardingId": "18480",
"Place": "Central(periamet)",
"Time": "10:05 PM",
"Address": "No.23 poonamalle high road Rd,everest building between central and egmore railway
station,periamet,c",
"LandMark": ".",
"ContactNumber": "04465154666"
},
{
"BoardingId": "18481",
"Place": "T.NAGAR",
"Time": "10:50 PM",
"Address": "no.91burkit road t.nagar chennai-17 09840263131",
"LandMark": "opp.indian coffee house",
"ContactNumber": "04424357940"
}
],
"DroppingPoints": [
{
"DroppingId": "6046",
"Place": "madiwala",
"Time": "06:45 AM",
"Address": "",
"LandMark": "",
"ContactNumber": ""
},
{
"DroppingId": "6436",
"Place": "kalasipalyam",
"Time": "07:08 AM",
"Address": "",
"LandMark": "",
"ContactNumber": ""
}
],
"Fares": [
{
"SeatTypeId": 78,
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": 650,
"ServiceTax": 0,
"ConvenienceFee": 0
}
],
"SeatLayoutDetails": {
"LayoutFlag": 1,
"SeatLayout": {
"SeatColumns": [
{
"Seats": [
{
"SeatNo": "1",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "2",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
null,
{
"SeatNo": "3",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "4",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
}
]
},
{
"Seats": [
{
"SeatNo": "8",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "7",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
null,
{
"SeatNo": "6",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "5",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
}
]
},
{
"Seats": [
{
"SeatNo": "9",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "10",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
null,
{
"SeatNo": "11",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "12",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
}
]
},
{
"Seats": [
{
"SeatNo": "16",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "15",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
null,
{
"SeatNo": "14",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "13",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
}
]
},
{
"Seats": [
{
"SeatNo": "17",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "18",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
null,
{
"SeatNo": "19",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "20",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
}
]
},
{
"Seats": [
{
"SeatNo": "24",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "23",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
null,
{
"SeatNo": "22",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "21",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
}
]
},
{
"Seats": [
{
"SeatNo": "25",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "26",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
null,
{
"SeatNo": "27",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "28",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
}
]
},
{
"Seats": [
{
"SeatNo": "32",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "31",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
null,
{
"SeatNo": "30",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "29",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
}
]
},
{
"Seats": [
{
"SeatNo": "33",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "34",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
null,
{
"SeatNo": "35",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "36",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
}
]
},
{
"Seats": [
{
"SeatNo": "A",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "B",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "C",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "D",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
},
{
"SeatNo": "E",
"SeatTypeId": 78,
"BerthType": "",
"SeatType": "2+2 Hi-Tech Non AC Seater",
"Fare": "650.00",
"ServiceTax": "0",
"ConvenienceFee": "0"
}
]
}
]
},
"BookedSeats": [
{
"SeatNo": "C",
"Gender": "M"
},
{
"SeatNo": "D",
"Gender": "M"
},
{
"SeatNo": "E",
"Gender": "M"
},
{
"SeatNo": "1",
"Gender": "L"
},
{
"SeatNo": "2",
"Gender": "M"
},
{
"SeatNo": "3",
"Gender": "L"
},
{
"SeatNo": "4",
"Gender": "L"
},
{
"SeatNo": "5",
"Gender": "M"
},
{
"SeatNo": "6",
"Gender": "M"
},
{
"SeatNo": "7",
"Gender": "M"
},
{
"SeatNo": "8",
"Gender": "M"
},
{
"SeatNo": "9",
"Gender": "M"
},
{
"SeatNo": "11",
"Gender": "L"
},
{
"SeatNo": "12",
"Gender": "M"
},
{
"SeatNo": "13",
"Gender": "M"
},
{
"SeatNo": "14",
"Gender": "L"
},
{
"SeatNo": "19",
"Gender": "M"
},
{
"SeatNo": "20",
"Gender": "M"
},
{
"SeatNo": "21",
"Gender": "M"
},
{
"SeatNo": "22",
"Gender": "M"
},
{
"SeatNo": "27",
"Gender": "L"
},
{
"SeatNo": "28",
"Gender": "L"
},
{
"SeatNo": "29",
"Gender": "M"
},
{
"SeatNo": "30",
"Gender": "L"
},
{
"SeatNo": "35",
"Gender": "M"
},
{
"SeatNo": "36",
"Gender": "M"
}
],
"AvailableSeats": [
{
"SeatNo": "10"
},
{
"SeatNo": "15"
},
{
"SeatNo": "16"
},
{
"SeatNo": "17"
},
{
"SeatNo": "18"
},
{
"SeatNo": "23"
},
{
"SeatNo": "24"
},
{
"SeatNo": "25"
},
{
"SeatNo": "26"
},
{
"SeatNo": "31"
},
{
"SeatNo": "32"
},
{
"SeatNo": "33"
},
{
"SeatNo": "34"
},
{
"SeatNo": "A"
},
{
"SeatNo": "B"
}
]
},
"BusNumber": ""
}
}
                            </div>

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Output Example</strong></h2>
                                    </div>
                                    
                                     <div>6) GetBook JSON</div>
                            <div>
{
"ResponseStatus": 1,
"UserTrackId": "RMNZZ97799999989907984974966182",
"BookingOutput": {
"TicketDetails": {
"BookingCustomerDetails": {
"Title": null,
"Name": "Test",
"Address": "Guindy",
"ContactNumber": "9944100866",
"City": null,
"CountryId": null,
"EmailId": "velmurugan@hermes-it.in",
"IdProofId": "0",
"IdProofNumber": "",
"BookedDate": "25/08/2015 17:30:18"
},
"PNRDetails": {
"TransactionId": "EB7NQDU",
"TransportPNR": "EB7NQDU",
"TotalAmount": 475,
"TotalTickets": 1,
"BusName": "Chennai-Bangalore 10:00 PM 1 SEATER ",
"Origin": "Chennai",
"Destination": "Bangalore",
"TravelDate": "17/10/2015",
"DepartureTime": "10:00 PM",
"PaxList": [{
"TicketNumber": "EB7NQDU0",
"SeatNo": "20",
"SeatType": "22",
"PassengerName": "Test",
"Gender": "M",
"Age": 36,
"Fare": 475,
"BoardingPoints": {
"BoardingId": null,
"Place": "Central",
"Time": "21:30:00",
"Address": "2/1, E.V.R. Road",
"LandMark": "Opp.Central Rly Station",
"ContactNumber": "044 25380754"
},
"DroppingPoints": {
"DroppingId": null,
"Place": "Kalasipalaya",
"Time": "05:00 AM",
"Address": "Tippu Sulthan Road",
"LandMark": "Near Bangalore Medical College",
"ContactNumber": "080 26701028"
},
"ReportingTime": "21:30:00",
"ServiceCharges": ""
}],
"TransportDetails": {
"TransportName": "Sharma Transports",
"Address1": "H.O.: Sangeetha Bhawan",
"Address2": "328, Tippu Sultan Palace Road",
"Address3": "Near Bangalore Medical College, Kalasipalayam",
"CityNamePinCode": "Bangalore-560002",
"ContactNumber": "26702426, 26708791",
"Fax": "+91-80-26703331",
"Website": "www.sharmatransports.com",
"EmailId": "busport@hotmail.com"
}},
"ServiceTax": "23.00",
"Commission": "19.22",
"CancellationPolicy": ""
}
}
}
                            </div>

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Output Example</strong></h2>
                                    </div>
                                    
                                     <div>7) GetTransactionStatus JSON</div>
                            <div>
{
"ResponseStatus": 1,
"TransactionStatusOutput": {
"TransactionStatus": 1,
"BookingOutput": {
"TicketDetails": {
"BookingCustomerDetails": {
"Title": null,
"Name": "Test",
"Address": "Guindy",
"ContactNumber": "9944100866",
"City": null,
"CountryId": null,
"EmailId": "velmurugan@hermes-it.in",
"IdProofId": "0",
"IdProofNumber": "",
"BookedDate": "25/08/2015 17:30:18"
},
"PNRDetails": {
"TransactionId": "EB7NQDU",
"TransportPNR": "EB7NQDU",
"TotalAmount": 475,
"TotalTickets": 1,
"BusName": "Chennai-Bangalore 10:00 PM 1 SEATER ",
"Origin": "Chennai",
"Destination": "Bangalore",
"TravelDate": "17/10/2015",
"DepartureTime": "10:00 PM",
"PaxList": [{
"TicketNumber": "EB7NQDU0",
"SeatNo": "20",
"SeatType": "22",
"PassengerName": "Test",
"Gender": "M",
"Age": 36,
"Fare": 475,
"BoardingPoints": {
"BoardingId": null,
"Place": "Central",
"Time": "21:30:00",
"Address": "2/1, E.V.R. Road",
"LandMark": "Opp.Central Rly Station",
"ContactNumber": "044 25380754"
},
"DroppingPoints": {
"DroppingId": null,
"Place": "Kalasipalaya",
"Time": "05:00 AM",
"Address": "Tippu Sulthan Road",
"LandMark": "Near Bangalore Medical College",
"ContactNumber": "080 26701028"
},
"ReportingTime": "21:30:00",
"ServiceCharges": ""
}
],
"TransportDetails": {
"TransportName": "Sharma Transports",
"Address1": "H.O.: Sangeetha Bhawan",
"Address2": "328, Tippu Sultan Palace Road",
"Address3": "Near Bangalore Medical College, Kalasipalayam",
"CityNamePinCode": "Bangalore-560002",
"ContactNumber": "26702426, 26708791",
"Fax": "+91-80-26703331",
"Website": "www.sharmatransports.com",
"EmailId": "busport@hotmail.com"
}
},
"ServiceTax": "23.00",
"Commission": "19.22",
"CancellationPolicy": ""
}
},
"Remarks": "TRANSACTION GOT SUCCESS"
}
}
                            </div>

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Output Example</strong></h2>
                                    </div>
                                    
                                     <div>8) GetReprint JSON</div>
                            <div>
{
"ResponseStatus": 1,
"UserTrackId": "RMNZZ97799999989907984974966182",
"ReprintOutput": {
"ReprintTicketDetails": {
"BookingCustomerDetails": {
"Title": null,
"Name": "Test",
"Address": "Guindy",
"ContactNumber": "9944100866",
"City": null,
"CountryId": null,
"EmailId": "velmurugan@hermes-it.in",
"IdProofId": "0",
"IdProofNumber": "",
"BookedDate": "10/09/2015 2:55PM"
},
"ReprintPNRDetails": {
"TransactionId": "EB7NQDU",
"TransportPNR": "EB7NQDU",
"TotalAmount": 475,
"TotalTickets": 1,
"BusName": "Chennai-Bangalore 10:00 PM 1 SEATER",
"Origin": "Chennai",
"Destination": "Bangalore",
"TravelDate": "17/10/2015",
"DepartureTime": "10:00 PM",
"ReprintPaxList": [
{
"TicketNumber": "EB7NQDU0",
"TicketStatus": "",
"SeatNo": "17",
"SeatType": "2",
"PassengerName": "Test",
"Gender": "M",
"Age": 26,
"Fare": 475,
"BoardingPoints": {
"BoardingId": null,
"Place": "Central",
"Time": "21:30:00",
"Address": "2/1, E.V.R. Road",
"LandMark": "Opp.Central Rly Station",
"ContactNumber": "044 25380754"
},
"DroppingPoints": {
"DroppingId": null,
"Place": "Kalasipalaya",
"Time": "05:00 AM",
"Address": "Tippu Sulthan Road",
"LandMark": "Near Bangalore Medical College",
"ContactNumber": "080 26701028"
},
"ReportingTime": "21:30:00",
"ServiceCharges": "0.00"
}
],
"TransportDetails": {
"TransportName": "Sharma Transports",
"Address1": "H.O.: Sangeetha Bhawan",
"Address2": "328, Tippu Sultan Palace Road",
"Address3": "Near Bangalore Medical College, Kalasipalayam",
"CityNamePinCode": "Bangalore-560002",
"ContactNumber": "26702426, 26708791",
"Fax": "+91-80-26703331",
"Website": "www.sharmatransports.com",
"EmailId": "busport@hotmail.com"
}
},
"ServiceTax": "24",
"Commission": "0.00",
"CancellationPolicy": ""
}
}
}
                            </div>

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Output Example</strong></h2>
                                    </div>
                                    
                                     <div>9) GetCancellationPolicy JSON</div>
                            <div>
{
"ResponseStatus": 1,
"CancellationPolicyOutput": {
"CancelPolicyDetails": "{a}RULES AND REGULATIONS{/a}
1. Only permissible goods of the passengers will be permitted to be carried
in the vehicle, Maximum 20 kgs.
2. Children above three years will be charged and no single half ticket will
be entertained.
3. Neither refundable nor transferable.
4. Smoking is prohibited, and carring of alcohol and contraband items is
prohibited and is an offense.
5. For postponement and preponement the extra charges will be taken and
variation ticket will be given to that effect.
6. Once the variation ticket is taken, company will not entertain any
cancellation, preponement or postponement.
7. For cancellation of tickets irrespective of the duration of the journey.
25 percent of the ticket amount will be deducted.(Before 4 hours of the
departure time.)
8. For Postponement or preponement the extra charge will be taken.
9. Cancellation of tickets can be done only upto 4 hours before the departure
time with 25 percent of the fare deduction,
No cancellation after that.No cancellaion of postponed/preponed tickets."
}
}
                            </div>

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Output Example</strong></h2>
                                    </div>
                                    
                                     <div>10) GetCancellationPenalty JSON</div>
                            <div>
{
"ResponseStatus": 1,
"CancellationPenaltyOutput": {
"ToCancelPNRDetails": {
"TransportName": "Sharma Transports",
"Origin": "Chennai",
"Destination": "Bangalore",
"BookedDate": "10/09/2015",
"TravelDate": "17/10/2015",
"DepatureTime": "10:00 PM",
"PNRStatus": "LIVE",
"ToCancelPaxList": [{
"TicketNumber": "EB7NQDU0",
"PassengerName": "Test",
"Gender": "M ",
"Age": 29,
"SeatNo": "1",
"Fare": 475,
"PenatlyAmount": "47.50"
}]
}
}}
                            </div>

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                        </div>
                        
                         <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Output Example</strong></h2>
                                    </div>
                                    
                                     <div>11) GetCancellation JSON</div>
                            <div>
{
"ResponseStatus": 1,
"CancellationOutput": {
"CanceledTicketDetails": {
"BookingCustomerDetails": {
"Title": null,
"Name": "Test",
"Address": "Guindy",
"ContactNumber": "9944100866",
"City": null,
"CountryId": null,
"EmailId": "velmurugan@hermes-it.in",
"IdProofId": "0",
"IdProofNumber": "",
"BookedDate": "10/09/2015 14:55:50"
},
"CanceledPNRDetails": {
"TransactionId": "EB7NQDU",
"TransportPNR": "EB7NQDU",
"TotalAmount": 475,
"TotalTickets": 1,
"BusName": "Chennai-Bangalore 10:00 PM 1 SEATER",
"Origin": "Chennai",
"Destination": "Bangalore",
"TravelDate": "17/10/2015",
"DepartureTime": "10:00 PM",
"CancellationPenalty": "10",
"CancellationNumber": "",
"CancelledDateTime": "23/07/2015 13:02:14",
"CancelPaxList": [{
"TicketNumber": "EB7NQDU0",
"TicketStatus": "",
"SeatNo": "17",
"SeatType": "2",
"PassengerName": "Test",
"Gender": "M",
"Age": 26,
"Fare": 475,
"BoardingPoints": {
"BoardingId": null,
"Place": "Central",
"Time": "21:30:00",
"Address": "2/1, E.V.R. Road",
"LandMark": "Opp.Central Rly Station",
"ContactNumber": "044 25380754"
},
"DroppingPoints": {
"DroppingId": null,
"Place": "Kalasipalaya",
"Time": "05:00 AM",
"Address": "Tippu Sulthan Road",
"LandMark": "Near Bangalore Medical College",
"ContactNumber": "080 26701028"
},
"ReportingTime": "",
"ServiceCharges": ""
}
],
"TransportDetails": {
"TransportName": "Sharma Transports",
"Address1": "H.O.: Sangeetha Bhawan",
"Address2": "328, Tippu Sultan Palace Road",
"Address3": "Near Bangalore Medical College, Kalasipalayam",
"CityNamePinCode": "Bangalore-560002",
"ContactNumber": "26702426, 26708791",
"Fax": "+91-80-26703331",
"Website": "www.sharmatransports.com",
"EmailId": "busport@hotmail.com"
}
}
}
}
}
                            </div>

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                        </div>
                        
                         <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Output Example</strong></h2>
                                    </div>
                                    
                                     <div>12) GetBookedHistory JSON</div>
                            <div>
{
"ResponseStatus": 1,
"BookedHistoryOutput": {
"BookedTickets": [
{
"TransportId": 24,
"TransportName": "Sharma Transports",
"TransactionId": "EB7NQCX",
"BookedDateTime": "10/09/2015 00:04:57",
"Origin": "Bangalore",
"Destination": "Chennai",
"TravelDate": "10/09/2015",
"TotalTickets": "1/0",
"Amount": "475.00 (WC:0.00)",
"PenaltyAmount": "CASH - 475.00",
"TicketStatus": "LIVE"
},
{
"TransportId": 24,
"TransportName": "Sharma Transports",
"TransactionId": "EG7NLCX",
"BookedDateTime": "12/09/2015 00:04:57",
"Origin": "Bangalore",
"Destination": "Chennai",
"TravelDate": "15/09/2015",
"TotalTickets": "1/1",
"Amount": "475.00 (WC:0.00)",
"PenaltyAmount": "CASH - 475.00",
"TicketStatus": "FULLY CANCELLED"
},
]
}
}
                            </div>

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                        </div>
                        
                         <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Output Example</strong></h2>
                                    </div>
                                    
                                     <div>13) GetAccountStatement JSON</div>
                            <div>
{
"ResponseStatus": 1,
"AccountStatementOutput": {
"TravelAgentId": "INMAA0220000",
"TravelAgentName": "testhermestest",
"TotalRemainingAmount": "184388.05",
"Transactions": [
{
"DateTime": "20/09/2015 22:39:39",
"Description": "Sharma Transport Chennai-Bangalore 10:00 PM 1 SEATER",
"TransactionId": "B642BU",
"CreditAmount": 22.43,
"DebitAmount": 0,
"RemainingAmount": "184599.62",
"Remarks": "Bus Sales Commission",
"TerminalName": "INMAA022000000",
"ProductDescription": "Bus"
},
{
"DateTime": "20/09/2015 22:46:34",
"Description": "Sharma Transport Chennai-Bangalore 10:00 PM 1 SEATER",
"TransactionId": "B541BR",
"CreditAmount": 0,
"DebitAmount": 475,
"RemainingAmount": "184622.05",
"Remarks": "Bus Sales",
"TerminalName": "INMAA022000000",
"ProductDescription": "Bus"
}
]
}
}
                            </div>

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                        </div>
                        
                         <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>Output Example</strong></h2>
                                    </div>
                                    
                                     <div>14) GetAgentCreditBalance JSON</div>
                            <div>
                                    {
"ResponseStatus": 1,
"AgentCreditBalanceOutput": {
"RemainingAmount": "184609.62"
}
}
                            </div>

                                   
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                        </div>
                        
                        
                        
                    </div>
                    
                    
                   



                    


                   


                  

