<div id="page-content">
                        <!-- Validation Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    SMS API Document<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li> API List</li>
                            <li><a href="">SMS API Document</a></li>
                        </ul>
                        <!-- END Validation Header -->

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Validation Example Block -->
                                <div class="block">
                                    <!-- Form Validation Example Title -->
                                    <div class="block-title">
                                        <h2><strong>SMS  REQUEST</strong></h2>
                                    </div>
                                    <div>HTTP Method : <span style="font-size:13px; font-weight:300">GET / POST</span></div>
                            <div>API URL</div>
                            <br>
                            <div>
                                http://api.kandoipower.com/api/kpsms/sendsms?key=xxxxxxxxxxxxxx&mid=xxxxxxxx&message=xxxxxx&mobile=xxxxxxxx
                               
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
                                        <td>mobile</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>mobile</td>
                                    </tr>
                                    <tr>
                                        <td>message</td>
                                        <td>String</td>
                                        <td>Required</td>
                                        <td>message</td>
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
                                    <div>JSON</div>
                            <div>
                               {"message":"Successfully Send SMS"}
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
                                        <h2><strong>DEFAULT PARAMETERS ON RETURN URL</strong></h2>
                                    </div>
                                    <div>JSON</div>
                            <div>
                                http://api.kandoipower.com/api/recharge/GetRechargeDoneRequest?rid={Recharge-Request-ID}&refno={Your-Reference- Number}&number={Mobile-Number}&amount={Amount}&status={Status-SUCCESS/FAILURE}&transid={Transaction-ID}&reason={Reason-If-Any}
                            </div>
                                </div>
                                <!-- END Validation Block -->
                            </div>
                            
                         
                            
                        </div>
                    </div>
                    
                    
                   



                    


                   


                  

