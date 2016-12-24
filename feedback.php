<?php
ob_start();

session_start();

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



                    <h3>Welcome to User Feedback</h3>
                    <p class="text-success text-center">
                        <?php
                        if (isset($_GET['feedbackmessage'])) {
                            echo $_GET['feedbackmessage'];
                        }
                        ?>
                    </p>
                    <form action="feedback.php" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-3"> Full Name</label>
                            <div class="col-md-6">
                                <input  class="form-control" type="text" name="name" placeholder="Fullname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3"> Email</label>
                            <div class="col-md-6">
                                <input  class="form-control" type="email" name="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3"> Feedback Message</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="feedback"></textarea>
                            </div>
                        </div>


                        <div class="form-group">

                            <div class="col-md-offset-3 col-md-6">
                                <input type="submit" name="signup" class="btn btn-primary col-md-6" value="Send Feedback">
                            </div>
                        </div>

                    </form>

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