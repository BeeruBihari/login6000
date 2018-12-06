<link rel="stylesheet" href="<?php echo Fcss;  ?>/plugins.css">

<div id="page-content">
    <!-- Table Responsive Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                Manage Product Order<br>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Sell Product</li>
        <li><a href=""> Manage Product Order</a></li>
    </ul>

    <div class="block">
<?php flash('update_order');
                           
                            ?>   
        <div class="block-title">


            <div class="row">
                <div class="col-sm-12 col-xs-10">

                    <h2><strong>Manage Product</strong> Order</h2>

                </div>
            </div>
        </div>





        <table class="table table-vcenter table-striped table-bordered">

            <thead>
            <tr>
                <th>Person Name</th>
                <th>Person Mobile</th>
                <th>User Type/th>
                <th>Product Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Image</th>
                <th>Address</th>
                <th>Status</th>
                <th>Action</th>


            </tr>
            </thead>
            <tbody>

            <?php
            $data = $o__sell_product->Getorder();
            foreach($data as $r) {
                $data_id = $o__sell_product->GetProductbyid($r['product_id']);
                $user = $o__user->getOneuser($r['user_id']);
                if($r['status'] == 0){
                    $sts = 'Pending';
                }elseif($r['status'] == 1){
                    $sts = 'Success';
                }
                else{
                    $sts = 'Fail';
                }
                
                if($user->user_type == 3){
                    $urtyp = 'Retailer';
                }
                if($user->user_type == 2){
                    $urtyp = 'Dist';
                }
                if($user->user_type == 1){
                    $urtyp = 'MD';
                }
                if($user->user_type == 4){
                    $urtyp = 'Admin';
                }
                ?>

                <tr>
                    <td><?php echo $user->firstname; ?></td>
                    <td><?php echo $user->mob_no; ?></td>
                    <td><?php echo $urtyp; ?></td>
                    <td><?php echo $data_id->product_name; ?></td>
                    <td><?php echo $r['qty']; ?></td>
                    <td><?php echo $r['total']; ?></td>
                    <td><img src="<?php echo $data_id->product_img; ?>" width="100" height="100" class="img-responsive"></td>
                    <td><?php echo $r['address']; ?></td>
                    <td><?php echo $sts; ?></td>
                    <td><a href="index.php?action=order_manage&oid=<?php echo $r['id'];?>" class="btn btn-success">Success</a></td>
                </tr>
                <?php
            }
            ?>




            </tbody>
        </table>





        <style>
            .table thead > tr > th
            {
                font-size: 13px;
                font-weight: 600;
            }
            .but_padding
            {
                padding:7px;
            }
            table {

                display: block;
            }
            @media only screen and (min-width:300px) and (max-width: 320px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }


            @media only screen and (min-width:321px) and (max-width: 360px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }
            @media only screen and (min-width:361px) and (max-width: 414px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }

            @media only screen and (min-width:768px) and (max-width: 768px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }

            @media only screen and (min-width: 769px) and (max-width: 960px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }
            @media only screen and (min-width: 961px) and (max-width: 1024px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }

            @media only screen and (min-width:1025px) and (max-width: 1280px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }
            }

            @media only screen and (min-width:1440px) and (max-width: 1440px)
            {
                table {
                    overflow-x: auto;
                    display: block;
                }

                @media only screen and (min-width:1441px) and (max-width: 1920px)
                {
                }
        </style>

    </div>
    <!-- END Responsive Partial Block -->
</div>

