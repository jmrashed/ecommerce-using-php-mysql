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
     
<?php

$product_id = $_GET['id'];
$query_result = $obj_app->select_product_info_by_id($product_id);
$product_info = mysqli_fetch_assoc($query_result);
?>
<section>
    <div class="container">
        <div class="row">
            <?php include 'leftmenubar.php'; ?>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="assets/<?php echo $product_info['product_image']; ?>" alt="" />
                            <h3><a href="assets/<?php echo $product_info['product_image']; ?>">ZOOM</a></h3>
                        </div>


                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->

                            <h2><?php echo $product_info['product_name']; ?></h2>
                            <p>Product ID: <?php echo $product_info['product_id']; ?></p>
                            <img src="images/product-details/rating.png" alt="" />
                            <span>
                                <span>BDT <?php echo $product_info['product_price']; ?></span>
                                <form action="" method="post">
                                    <label>Quantity:</label>
                                    <input type="text" name="product_quantity" value="1" />
                                    <input type="hidden" name="product_id" value="<?php echo $product_info['product_id']; ?>" />
                                    <button type="submit" name="btn" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                </form>
                            </span>
                            <p><b>Availability:</b> In Stock</p>
                            <p><b>Category:</b> <?php echo $product_info['category_name']; ?></p>
                            <p><b>Brand:</b> <?php echo $product_info['manufacturer_name']; ?></p>

                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->

                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li><a href="#details" data-toggle="tab">Details</a></li>
                            <li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
                            <li><a href="#tag" data-toggle="tab">Tag</a></li>
                            <li class="active"><a href="#reviews" data-toggle="tab">Reviews </a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="details" >
                            <h3>Product Short Description</h3>
                            <p><?php echo $product_info['product_short_description']; ?></p>
                            <h3>Product Long Description</h3>
                            <p><?php echo $product_info['product_long_description']; ?></p>
                        </div>



                        <div class="tab-pane fade active in" id="reviews" >
                            <div class="col-sm-12">
                                <?php
                                $query_result = $obj_app->select_review_by_id($product_id);
                                while ($review_info = mysqli_fetch_assoc($query_result)) {
                                    ?>
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i><?= $review_info['name']; ?></a></li>
                                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                        <li><a href=""><i class="fa fa-calendar-o"></i><?= $review_info['datetime']; ?></a></li>
                                    </ul>
                                    <p> <?= $review_info['message']; ?>
                                        <br> <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                                    </p>

                                <?php }
                                ?>
                                <br>
                                <hr>
                                <p><b>Write Your Review</b></p>

                                <form action="product_details.php" method="post">
                                    <span>
                                        <input type="text" name="name" placeholder="Your Name"/>
                                        <input type="email" name="email" placeholder="Email Address"/>
                                        <input type="hidden" name="product_id" value="<?=$product_id;?>"/>
                                    </span>
                                    <textarea name="message" ></textarea>
                                    <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                                    <input type="submit" name="saveReview" class="btn btn-default pull-right" value="Send Review">  
                                </form>
                            </div>
                        </div>

                    </div>
                </div><!--/category-tab-->


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