<?php
ob_start();

session_start();
$sender_id = 2;
require './classes/application.php';
$obj_app = new Application();

if (isset($_POST['feedback'])) {
    $obj_app->save_feedback_info($_POST);
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
<?php     if(isset($_SESSION['customer_id'])){ ?>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Order Total</th>
                                <th>Order Status</th>
                                <th>Payment Type</th>
                                <th>Payment Status</th> 
                            </tr>
                        </thead>   
                        <tbody>
                            <?php 
                         
                            echo $_SESSION['customer_id'];
                                $query_result=$obj_app->select_my_order_info();
                            while ($order_info = mysqli_fetch_assoc($query_result)) { ?>
                                <tr>
                                    <td><?php echo $order_info['order_id']; ?></td>
                                    <td class="center"><?php echo $order_info['first_name'] . ' ' . $order_info['last_name']; ?></td>
                                    <td class="center"><?php echo $order_info['order_total']; ?></td>
                                    <td class="center"><?php echo $order_info['order_status']; ?></td>
                                    <td class="center"><?php echo $order_info['payment_type']; ?></td>
                                    <td class="center"><?php echo $order_info['payment_status']; ?></td>
                                   
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table> 
                            <?php }else { ?>
                    <h2>You are not login, please <a href="login.php">Login </a> Here. </h2>
                </div>
            </div>
        </section>
        <?php
//  include './pages/home_content.php';
        ?>






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