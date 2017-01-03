<?php
$query_result = $obj_app->select_all_published_category();
?>
<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="index.php" class="active">Home</a></li>
                        <<<<<<< HEAD
                        <?php while ($category_info = mysqli_fetch_assoc($query_result)) { ?>


                            <li class="dropdown">
                                <a href="category.php?id=<?php echo $category_info['category_id']; ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $category_info['category_name']; ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">


                                    <?php
                                    $m = $obj_app->select_product_info_by_category_id($category_info['category_id']);
                                    while ($p = mysqli_fetch_assoc($m)) {
                                        ?>
                                        <li><a href="product_details.php?id=<?php echo $p['product_id']; ?>">
                                                <img src="assets/<?php echo $p['product_image']; ?> " style="width:100px; height: 70px;" class="img img-responsive">

                                                <?php echo $p['product_name']; ?> 
                                            </a></li>
                                    <?php } ?>

                                </ul>
                            </li>
                        <?php } ?>
                        =======
                        <?php while ($category_info = mysqli_fetch_assoc($query_result)) { ?>
                            <li><a href="category.php?id=<?php echo $category_info['category_id']; ?>"><?php echo $category_info['category_name']; ?></a>

                            </li>
                        <?php } ?>
                        >>>>>>> d25d7c251568f39732a667396666562b3ea40e34
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <form action="searchProduct.php" method="post">
                        <input type="text" name="search" placeholder="Search"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>