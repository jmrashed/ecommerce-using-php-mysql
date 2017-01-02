<?php
ob_start();

session_start();

require './classes/application.php';
$obj_app = new Application();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home | Do The Deals </title>
        <link href="assets/front_end_assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/front_end_assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/front_end_assets/css/prettyPhoto.css" rel="stylesheet">
        <link href="assets/front_end_assets/css/price-range.css" rel="stylesheet">
        <link href="assets/front_end_assets/css/animate.css" rel="stylesheet">
        <link href="assets/front_end_assets/css/main.css" rel="stylesheet">
        <link href="assets/front_end_assets/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="assets/front_end_assets/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/front_end_assets/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/front_end_assets/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/front_end_assets/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/front_end_assets/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <?php include './includes/header_top.php'; ?>
            <!--/header_top-->
            <?php include './includes/header_middle.php'; ?>
            <!--/header-middle-->
            <?php include './includes/header_bottom.php'; ?>
            <!--/header-bottom-->
        </header><!--/header-->

        <?php
        if (isset($_POST['search'])) {
            $query_result = $obj_app->select_latest_Product($_POST['search']);
        } else if (isset($_POST['from'])) {
            $from = $_POST['from'];
            $to = $_POST['to'];
            $query_result = $obj_app->select_latest_between_Product($from, $to);
        } else {
            $from = 0;
            $to = 100000;
            $query_result = $obj_app->select_latest_between_Product($from, $to);
        }
        if (isset($_GET['product_id'])) {
            if (empty($_SESSION['wishlist_num'])) {
                $_SESSION['wishlist_num'] = 0;
            }
            $_SESSION['wishlist_num'] = $_SESSION['wishlist_num'] + 1;
            $_SESSION['product_id'] = $_GET['product_id'];
        }
        ?>


        <section>
            <div class="container">
                <div class="row">
                    <?php include 'leftmenubar.php'; ?>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Latest Items</h2>
                            <h3 class="title text-center text-success">
                                <?php if (empty($_POST['search'])) { ?>  Product Price Between BDT <?= $from; ?> and   <?= $to; ?> <?php } else { ?>
                                    Your Search title is "<?= $_POST['search']; ?>"  <?php
                                }
                                if ($query_result) {
                                    echo 'and You found <label class="label label-warning">' . mysqli_num_rows($query_result) . '</label> products.';
                                } else {
                                    echo ' and not Found ! ';
                                }
                                ?>
                            </h3>    
                            <?php
                            while ($product_info = mysqli_fetch_assoc($query_result)) {
                                ?>  
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="pages/<?php echo $product_info['product_image']; ?>" alt="" width="250" height="250" />
                                                <h2>BDT <?php echo $product_info['product_price']; ?></h2>
                                                <p><?php echo $product_info['product_name']; ?></p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <h2>BDT <?php echo $product_info['product_price']; ?></h2>
                                                    <p><?php echo $product_info['product_name']; ?></p>
                                                    <a href="product_details.php?id=<?php echo $product_info['product_id']; ?>" class="btn btn-default add-to-cart">Product Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="choose">
                                            <ul class="nav nav-pills nav-justified">
                                                <li><a href="?product_id=<?= $product_info['product_id']; ?>"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                                <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>

                        </div><!--features_items-->
 
 

                    </div>
                </div>
            </div>
        </section>





        <footer id="footer"><!--Footer-->
            <?php include './includes/footer_top.php'; ?>
            <?php include './includes/footer_widget.php'; ?>
            <?php include './includes/footer_bottom.php'; ?>
        </footer><!--/Footer-->


        <script src="assets/front_end_assets/js/jquery.js"></script>
        <script src="assets/front_end_assets/js/bootstrap.min.js"></script>
        <script src="assets/front_end_assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/front_end_assets/js/price-range.js"></script>
        <script src="assets/front_end_assets/js/jquery.prettyPhoto.js"></script>
        <script src="assets/front_end_assets/js/main.js"></script>
    </body>
</html>