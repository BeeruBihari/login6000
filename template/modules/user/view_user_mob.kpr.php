<link rel="stylesheet" href="<?php echo Fcss;  ?>/plugins.css">
<div id="page-content">
    
    <!-- Table Responsive Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    View User<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>User</li>
                            <li><a href="">View User</a></li>
                        </ul>
                        <div class="block">
                            <div class="block-title">
                               
                                <div class="row">
                                    <div class="col-sm-11 col-xs-10">
                                        <h2><strong>User</strong> Enquiry</h2>
                                    </div>
                                    </div>
                                    </div>
                                    
                                    <table class="table table-vcenter table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>

                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Remark</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach($data as $r){
                                                
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $r['firstname']; ?></td>

                                                <td><?php echo $r['email']; ?></td>
                                                <td><?php echo $r['mobile']; ?></td>

                                                <td><?php echo $r['work_addr']; ?></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                        </div>
</div>