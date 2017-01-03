<?php
if (isset($_POST['btn'])) {
    $obj_app->add_to_cart($_POST);
}

if (isset($_POST['saveReview'])) {
    $obj_app->Save_Review($_POST);
}

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