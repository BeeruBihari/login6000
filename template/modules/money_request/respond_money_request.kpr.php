<div id="page-content">
    <!-- Table Responsive Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>                View Money Request<br>            </h1> </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Money Request</li>
        <li><a href="">Respond Money Request</a></li>
    </ul>
    <div class="block">
        <?php        flash('add_money_request');        flash('active_deactive');        ?>
            <!-- Responsive Partial Title -->
            <div class="block-title">
                <h2><strong>Respond Money Request</strong> Table</h2> </div>
            <table class="table table-vcenter table-striped">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Amount</th>
                        <th>Details</th>
                        <th>Date</th>
                        <th>Update Date</th>
                        <th>Status Change</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($as_money_records as $o => $mon): ?>
                        <tr>
                            <?php $rer = $o__user->getOneuser($mon['user_id']); ?>
                                <td>
                                    <?php echo $rer->username; ?>
                                </td>
                                <td>
                                    <?php echo $mon['amount']; ?>
                                </td>
                                <td>
                                    <?php echo $mon['details']; ?>
                                </td>
                                <td>
                                    <?php echo $mon['date']; ?>
                                </td>
                                <td>
                                    <?php echo $mon['approve_date']; ?>
                                </td>
                                <td>
                                    <br>
                                    <br>
                                    <div class="btn-group btn-group-xs">
                                        <?php if ($mon['status'] == '1') { ?>
                                            <button name="accept" value="<?php echo $mon['id'] ?>" class="btn btn-warning " style="margin-left: 5px;height: 30px;margin-top: -6px;margin-right: 5px;border-radius:3px;">Accept</button>
                                            <br>
                                            <br>
                                            <?php }if ($mon['status'] == '2') { ?>
                                                <button name="decline" value="<?php echo $mon['id'] ?>" class="btn btn-danger " style="margin-left: 5px;height: 30px;margin-top: -6px;margin-right: 5px;border-radius:3px;">Decline</button>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <?php } ?>
                                    </div>
                                </td>
                                <td class="">
                                    <form method="post">
                                        <div class="btn-group btn-group-xs">
                                            <?php if ($mon['status'] == '2') { ?>
                                                <button type="submit" name="accept" value="<?php echo $mon['id'] ?>" class="btn btn-warning " style="margin-left: 5px;height: 30px;margin-top: -6px;margin-right: 5px;border-radius:3px;">Accept</button>
                                                <br>
                                                <br>
                                                <input type="hidden" name="amount" value="<?php echo $mon['amount'] . ',' . $mon['user_id'].','.$mon['transaction_id']; ?>">
                                                <?php }if ($mon['status'] == '1') { ?>
                                                    <button type="submit" name="decline" value="<?php echo $mon['id'] ?>" class="btn btn-danger " style="margin-left: 5px;height: 30px;margin-top: -6px;margin-right: 5px;border-radius:3px;">Decline</button>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <input type="hidden" name="amount" value="<?php echo $mon['amount'] . ',' . $mon['user_id'].','.$mon['transaction_id']. ',' . $mon['id']; ?>">
                                                    <?php } ?>
                                                        <?php if ($mon['status'] == '0') { ?>
                                                            <input type="hidden" name="amount" value="<?php echo $mon['amount'] . ',' . $mon['user_id'].','.$mon['transaction_id']; ?>">
                                                            <button type="submit" name="accept" value="<?php echo $mon['id'] ?>" class="btn btn-warning " style="margin-left: 5px;height: 30px;margin-top: -6px;margin-right: 5px;border-radius:3px;">Accept</button>
                                                            <br>
                                                            <br>
                                                            <button type="submit" name="decline" value="<?php echo $mon['id'] ?>" class="btn btn-danger " style="margin-left: 5px; height: 30px; margin-top: -6px; margin-right: 5px;border-radius:3px;">Decline</button>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <?php } ?>
                                        </div>
                                    </form>
                                </td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
            <style>
                    .table thead > tr > th {
                    font-size: 13px;
                    font-weight: 600;
                }
                
                .but_padding {
                    padding: 7px;
                }
                
                table {
                    overflow-x: auto;
                }
                
                @media only screen and (min-width:300px) and (max-width: 320px) {
                    table {
                        overflow-x: auto;
                        display: block;
                    }
                }
                
                @media only screen and (min-width:321px) and (max-width: 360px) {
                    table {
                        overflow-x: auto;
                        display: block;
                    }
                }
                
                @media only screen and (min-width:361px) and (max-width: 414px) {
                    table {
                        overflow-x: auto;
                        display: block;
                    }
                }
                
                @media only screen and (min-width:768px) and (max-width: 768px) {
                    table {
                        overflow-x: auto;
                        display: block;
                    }
                }
                
                @media only screen and (min-width: 769px) and (max-width: 960px) {
                    table {
                        overflow-x: auto;
                        display: block;
                    }
                }
                
                @media only screen and (min-width: 961px) and (max-width: 1024px) {
                    table {
                        overflow-x: auto;
                        display: block;
                    }
                }
                
                @media only screen and (min-width:1025px) and (max-width: 1280px) {
                    table {
                        overflow-x: auto;
                        display: block;
                    }
                }
                
                @media only screen and (min-width:1440px) and (max-width: 1440px) {
                    table {
                        overflow-x: auto;
                        display: block;
                    }
                    @media only screen and (min-width:1441px) and (max-width: 1920px) {}
            </style>
    </div>
    <!-- END Responsive Partial Block -->
</div>