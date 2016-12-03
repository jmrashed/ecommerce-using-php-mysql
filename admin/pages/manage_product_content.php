<?php
    
if(isset($_GET['status'])) {
    $product_id=$_GET['id'];
    if($_GET['status'] == 'unpublished') {
        $message=$ob_sup_admin->unpublished_product_by_id($product_id);
    } 
    else if($_GET['status'] == 'published') {
        $message=$ob_sup_admin->published_product_by_id($product_id);
    }
    else if($_GET['status'] == 'delete') {
        $message=$ob_sup_admin->delete_product_by_id($product_id);
    }
    
}
    




    $query_result=$ob_sup_admin->select_all_product_info();
    
//    while ($product_info=  mysqli_fetch_assoc($query_result)) {
//        echo '<pre>';
//        print_r($product_info);
//    }
//    exit();

    
    
    
    
    
?>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <h2><?php if(isset($message)) { echo $message; unset($message); } ?></h2>
            <h2>
                <?php 
                    if(isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); } 
                ?>
            </h2>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Book Name</th>
                        <th>Category Name</th>
                        <th>Stock Amount</th>
                        <th>Publication Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php while ($product_info=mysqli_fetch_assoc($query_result)) { ?>
                    <tr>
                        <td><?php echo $product_info['product_name']; ?></td>
                        <td class="center"><?php echo $product_info['category_name']; ?></td>
                        <td class="center"><?php echo $product_info['stock_amount']; ?></td>
                        <td class="center">
                            <?php  
                                if($product_info['publication_status'] == 1) {
                                    echo 'Published';
                                } else {
                                    echo 'Unpublished';
                                }
                            ?>
                        </td>
                        <td class="center">
                            <a class="btn btn-primary" href="view_product.php?id=<?php echo $product_info['product_id']; ?>" title="View">
                                <i class="halflings-icon white zoom-in"></i>  
                            </a>
                            
                            
                            <?php if ($product_info['publication_status'] == 1) { ?>
                            <a class="btn btn-success" href="?status=unpublished&&id=<?php echo $product_info['product_id']; ?>" title="Unpublished">
                                <i class="halflings-icon white arrow-down"></i>  
                            </a>
                            <?php } else { ?>
                            <a class="btn btn-danger" href="?status=published&&id=<?php echo $product_info['product_id']; ?>" title="Published">
                                <i class="halflings-icon white arrow-up"></i>  
                            </a>
                            <?php } ?>
                            
                            
                            <a class="btn btn-info" href="edit_product.php?id=<?php echo $product_info['product_id']; ?>" title="Edit">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="?status=delete&&id=<?php echo $product_info['product_id']; ?>" title="Delete" onclick="return check_delete(); ">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->
</div>