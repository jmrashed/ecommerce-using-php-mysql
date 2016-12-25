<?php
ob_start();

session_start();

require './classes/application.php';
$obj_app = new Application();

if (isset($_POST['feedback'])) {
    $obj_app->save_feedback_info($_POST);
}
if(isset($_SESSION['product_id'])){
$session_id = $_SESSION['product_id'];

//echo $session_id;
$query_result = $obj_app->select_all_product_info($session_id);
}

if(isset($_GET['reset'])){
    unset($_SESSION['product_id']);
    unset($_SESSION['wishlist_num']);
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login | Do The Deals </title>
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
        <section>
            <div class="container">
                <div class="row">



                    <h3>Your Wishlist</h3>
               <?php  if(isset( $_SESSION['wishlist_num'])){  ?>
                    <div class="row">
                        <div class="table-responsive cart_info">
                            <table class="table table-condensed">
                             
                
                                    <?php
                                    $sum = 0;
                                    if($query_result){
                                    $info = $query_result->fetch_assoc();
                                             
                                     print_r($info);
                                        ?>
                                        <tr>
                                            <td class="cart_product">
                                                <a href=""><img src="assets/product_images/image_2.jpg" alt="" width="50" height="50">aaaaaaaaaaaaaaa</a>
                                            </td>
                                            <td class="cart_description">
                                                <h4><a href=""><?php echo $info['product_name']; ?></a></h4>
                                                <p>Product ID: <?php echo $info['product_id']; ?></p>
                                            </td>
                                            <td class="cart_price">
                                                <p>BDT <?php echo $info['product_price']; ?></p>
                                            </td>
                                           
                                            <td class="cart_total">
                                                <p class="cart_total_price">
                                                    <?php
                                                    $total = $info['product_price'] * $info['product_quantity'];
                                                    echo 'BDT ' . $total;
                                                    ?>
                                                </p>
                                            </td>
                                            <td class="cart_delete">
                                                <a class="cart_quantity_delete" href="?status=delete&&id=<?php echo $info['temp_cart_id']; ?>"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $sum = $sum + $total;
                                    }
                                    ?>
                    
                            </table>
                            <p class="text-right"> <a href="wishlist.php?reset=reset" class="btn">Reset</a></p>
                        </div>
                    </div>
               <?php } ?>
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