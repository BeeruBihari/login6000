<link rel="stylesheet" href="<?php echo Fcss;  ?>/plugins.css">
<script src="ajax/commission.js"></script>
<div id="page-content">
                        <!-- Table Responsive Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    Manage Product<br>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Sell Product</li>
                            <li><a href=""> Manage Product</a></li>
                        </ul>
                        
                        <div class="block">
                            
                            <div class="block-title">
                               
                              
                                <div class="row">
                                    <div class="col-sm-12 col-xs-10">
                                        
                                        <h2><strong>Manage Product</strong> Table</h2>
                                        
                                    </div>
                          </div>          
                    </div>
                     
                              <?php flash('update_product');
                           
                            ?>     
                               
                           
                          
                            <table class="table table-vcenter table-striped table-bordered">
                                
                                <thead>
                                    <tr>
                                        <th>SKU</th>
                                        <th>Product Name</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Commission</th>
                                        <th>Action</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $data = $o__sell_product->GetallProduct();
                                    foreach($data as $r) {
                                        ?>

                                    <tr class="gradeA">
                                            <td><?php echo $r['sku']; ?></td>
                                            <td><?php echo $r['product_name']; ?></td>
                                            <td><?php echo $r['qty']; ?></td>
                                            <td><?php echo $r['amount_with_tax']; ?></td>
                                            <td><img src="<?php echo $r['product_img']; ?>" width="100" height="100" class="img-responsive"></td>
                                            <td><?php echo $r['commission_group']; ?></td>
                                            <td>
                                                <button data-toggle="tooltip" title="" type="button" onclick="document.location.href='index.php?action=add_product&pid=<?php echo $r['id']; ?>';" name="active" value="130" class="btn btn-warning " style="width: 39px;background-color:#f0c129;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);" data-original-title="Edit"><i class="fa fa-pencil"></i></button>
                                                <button data-toggle="tooltip" onclick="document.location.href='index.php?action=delete_product&prdid=<?php echo $r['id']; ?>';"   title="" type="submit" name="delete" value="130" class="btn btn-danger delete" style="width: 39px;border-radius:3px;color:#fff;    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);" data-original-title="Delete"><i class="fa fa-times"></i></button>
                                            </td>

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
}
@media only screen and (min-width:1441px) and (max-width: 1920px)
{
}

                    </style>
                    
                    
<!--                    <script type="text/javascript">

    $(function() {
        $(".delete").click(function(){
            //alert();
            var element = $(this);
            var del_id = element.attr("id");
           // alert(del_id);
            //var info = 'c_id=' + del_id;
            if(confirm("Are you sure you want to delete this?"))
            {
                $.ajax({
                    type: "POST",
                    url: "ajax/delete.php",
                    data: {prd:del_id},
                    success: function(data){
                        alert(data);
                         $(this).parents(".gradeA").animate({ backgroundColor: "#fff" }, "slow")
                    .animate({ opacity: "hide" }, "slow");
                    }
                });
               
            }
            return false;
        });
    });
</script>-->
                    
                        </div>
                        <!-- END Responsive Partial Block -->
                    </div>
                   
                    