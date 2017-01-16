<?php
ob_start();

session_start();

$admin_id = $_SESSION['admin_id'];
if ($admin_id == NULL) {
    header('Location: index.php');
}

require '../classes/super_admin.php';
$ob_sup_admin = new Super_admin();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'logout') {

        $ob_sup_admin->logout();
    }
    if ($_GET['status'] == 'delete') {

        $ob_sup_admin->user_feedback_delete($_GET);
    }
}

if (isset($_POST['adminfeedback'])) {
    $ob_sup_admin->send_admin_feedback($_POST);
}
if (isset($_GET['feedback'])) {
    unset($_SESSION['message']);
}
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Admin Panel</title>
        <meta name="description" content="Bootstrap Metro Dashboard">
        <meta name="author" content="Dennis Ji">
        <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link id="bootstrap-style" href="../assets/admin_asset/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/admin_asset/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="../assets/admin_asset/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="../assets/admin_asset/css/style-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="../assets/admin_asset/img/favicon.ico">
        <script>
            function check_delete() {
                var check = confirm('Are you sure to delete this');
                if (check) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <!-- start: Header -->
        <?php include './includes/header.php'; ?>
        <!-- end: Header -->

        <div class="container-fluid-full">
            <div class="row-fluid">

                <!-- start: Main Menu -->
                <?php include './includes/sidebar_menu.php'; ?>
                <!-- end: Main Menu -->

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>

                <!-- start: Content -->
                <div id="content" class="span10">

                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header" data-original-title>
                                <h2><i class="halflings-icon edit"></i><span class="break"></span>User Feedback</h2>
                                <div class="box-icon">
                                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                                </div>
                            </div>
                            <h2 style="color: green; "><?php
                                if (isset($_SESSION['message'])) {
                                    echo $_SESSION['message'];
                                }
                                ?></h2>
                            <div class="box-content">
                                <?php
                                if (isset($_GET['feedback'])) {
                                    ?>


                                    <form class="form-horizontal" action="userfeedback.php" method="post">
                                        <fieldset>
                                            <div class="control-group hidden-phone">
                                                <label class="control-label" for="textarea2">Customer Name</label>
                                                <div class="controls">
                                                    <input type="text" readonly="true" class="form-control" name="customer_name" value="<?php
                                                    if (isset($_GET['customer_name']))
                                                        echo $_GET['customer_name'];
                                                    ?>"></textarea>
                                                </div>
                                            </div>  
                                            <input type="hidden" name="id" value="<?= $_GET['id']; ?>">

                                            <div class="control-group hidden-phone">
                                                <label class="control-label" for="textarea2">Feedback Message</label>
                                                <div class="controls">
                                                    <textarea class="cleditor" name="admin_feedback" id="textarea2" rows="3"></textarea>
                                                </div>
                                            </div> 
                                            <div class="form-actions">
                                                <button type="submit" name="adminfeedback" class="btn btn-primary">Send Feedback</button>
                                                <button type="reset" class="btn">Reset</button>
                                            </div>
                                        </fieldset>
                                    </form>   
                                <?php }
                                ?>
                                <br>
                                <hr>

                                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                    <thead>
                                        <tr>
                                            <th>Feedback ID</th>
                                            <th> Name</th>
                                            <th>Email</th>
                                            <th>User feedback</th> 
                                            <th>Actions</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        <?php
                                        $r = $ob_sup_admin->select_all_user_feedback();
                                        while ($f = mysqli_fetch_assoc($r)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $f['id']; ?></td>
                                                <td class="center"><?php echo $f['name']; ?></td>
                                                <td class="center"><?php echo $f['email']; ?></td>
                                                <td class="center"><?php echo $f['feedback']; ?></td> 
                                                <td class="center">
                                                    <?php if (!empty($f['admin_feedback'])) { ?> 
                                                        <a class="btn btn-success" title="Update" href="userfeedback.php?feedback=yes&id=<?php echo $f['id']; ?>&customer_name=<?php echo $f['name']; ?>" title="View Order">
                                                            <i class="icon-undo"></i>  
                                                        </a> 
                                                    <?php } else { ?>
                                                        <a class="btn btn-primary" title="reply" href="userfeedback.php?feedback=yes&id=<?php echo $f['id']; ?>&customer_name=<?php echo $f['name']; ?>" title="View Order">
                                                            <i class="replay-box icon-reply"></i>  
                                                        </a> 
                                                    <?php } ?>
                                                    <a class="btn btn-danger" href="?status=delete&&id=<?php echo $f['id']; ?>" title="Delete Order" onclick="return check_delete();">
                                                        <i class="halflings-icon white trash"></i> 
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>   
                            </div>
                        </div><!--/span-->
                    </div><!--/row-->


                </div>
                <!--/.fluid-container-->

                <!-- end: Content -->
            </div><!--/#content.span10-->
        </div><!--/fluid-row-->

        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>

        <div class="clearfix"></div>
        <?php include './includes/footer.php'; ?>

        <script src="../assets/admin_asset/js/jquery-1.9.1.min.js"></script>
        <script src="../assets/admin_asset/js/jquery-migrate-1.0.0.min.js"></script>
        <script src="../assets/admin_asset/js/jquery-ui-1.10.0.custom.min.js"></script>
        <script src="../assets/admin_asset/js/jquery.ui.touch-punch.js"></script>
        <script src="../assets/admin_asset/js/modernizr.js"></script>
        <script src="../assets/admin_asset/js/bootstrap.min.js"></script>
        <script src="../assets/admin_asset/js/jquery.cookie.js"></script>
        <script src='../assets/admin_asset/js/fullcalendar.min.js'></script>
        <script src='../assets/admin_asset/js/jquery.dataTables.min.js'></script>
        <script src="../assets/admin_asset/js/excanvas.js"></script>
        <script src="../assets/admin_asset/js/jquery.flot.js"></script>
        <script src="../assets/admin_asset/js/jquery.flot.pie.js"></script>
        <script src="../assets/admin_asset/js/jquery.flot.stack.js"></script>
        <script src="../assets/admin_asset/js/jquery.flot.resize.min.js"></script>
        <script src="../assets/admin_asset/js/jquery.chosen.min.js"></script>
        <script src="../assets/admin_asset/js/jquery.uniform.min.js"></script>
        <script src="../assets/admin_asset/js/jquery.cleditor.min.js"></script>
        <script src="../assets/admin_asset/js/jquery.noty.js"></script>
        <script src="../assets/admin_asset/js/jquery.elfinder.min.js"></script>
        <script src="../assets/admin_asset/js/jquery.raty.min.js"></script>
        <script src="../assets/admin_asset/js/jquery.iphone.toggle.js"></script>
        <script src="../assets/admin_asset/js/jquery.uploadify-3.1.min.js"></script>
        <script src="../assets/admin_asset/js/jquery.gritter.min.js"></script>
        <script src="../assets/admin_asset/js/jquery.imagesloaded.js"></script>
        <script src="../assets/admin_asset/js/jquery.masonry.min.js"></script>
        <script src="../assets/admin_asset/js/jquery.knob.modified.js"></script>
        <script src="../assets/admin_asset/js/jquery.sparkline.min.js"></script>
        <script src="../assets/admin_asset/js/counter.js"></script>
        <script src="../assets/admin_asset/js/retina.js"></script>
        <script src="../assets/admin_asset/js/custom.js"></script>
        <!-- end: JavaScript-->
    </body>
</html>
