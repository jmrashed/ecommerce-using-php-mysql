<?php
    if(isset($_GET['status'])) {
        if($_GET['status'] == 'logout') {
            $obj_app->customer_logout();
        }
    }
?>
<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="index.php"><img src="logo.png" alt="" style=" height:40px" /></a>
                </div>
                <div class="btn-group pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                            BD
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">BD</a></li>
                            <li><a href="#">Canada</a></li>
                            <li><a href="#">UK</a></li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                            TAKA
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Canadian Dollar</a></li>
                            <li><a href="#">Pound</a></li>
                            <li><a href="#">Taka</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav"> 
                        <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                        <li><a href="deliverymethod.php"><i class="fa fa-tasks"></i> Delivery Method</a></li>
                        <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                        <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        <li><a href="feedback.php"><i class="fa fa-envelope"></i>Feedback</a></li>
                        <?php if(isset($_SESSION['customer_id'])) { ?>
                        <li><a href="?status=logout"><i class="fa fa-lock"></i> Logout</a></li>
                        <?php } else { ?>
                        <li><a href="checkout.php"><i class="fa fa-lock"></i> Login</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>