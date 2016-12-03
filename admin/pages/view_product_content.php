<?php
    $product_id=$_GET['id'];
    
    $query_result=$ob_sup_admin->select_product_info_by_id($product_id);
    $product_info=mysqli_fetch_assoc($query_result);
    
?>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>View Product</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <tr>
                    <td>Book ID</td>
                    <td><?php echo $product_info['product_id']; ?></td>
                </tr>
                <tr>
                    <td>Book Name</td>
                    <td><?php echo $product_info['product_name']; ?></td>
                </tr>
                <tr>
                    <td>Category Name</td>
                    <td><?php echo $product_info['category_name']; ?></td>
                </tr>
                <tr>
                    <td>Stock Amount</td>
                    <td><?php echo $product_info['stock_amount']; ?></td>
                </tr>
                <tr>
                    <td>Product Short Description</td>
                    <td><?php echo $product_info['product_short_description']; ?></td>
                </tr>
                <tr>
                    <td>Product Image</td>
                    <td>
                        <img src="<?php echo $product_info['product_image']; ?>" alt="<?php echo $product_info['product_name']; ?>" width="150" height="150">
                    </td>
                </tr>
                <tr>
                    <td>Publication Status</td>
                    <td>
                        <?php
                            if($product_info['publication_status'] == 1) {
                                echo 'Published';
                            } else {
                                echo 'Unpublished';
                            }
                        ?>
                    </td>
                </tr>
            </table>            
        </div>
    </div><!--/span-->
</div>