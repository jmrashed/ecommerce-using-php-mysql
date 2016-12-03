<?php
    if(isset($_POST['btn'])) {
        $obj_app->save_order_info($_POST);
    }
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="text-center text-success">You have to give us payment information to complete your valuable order.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Select Your Payment Mehod</h3>
                    <hr/>
                    <form class="" action="" method="post">
                        <table class="table table-bordered">
                            <tr>
                                <td>Cash on Delivery</td>
                                <td><input type="radio" name="payment_type" value="cash_on_delivery"></td>
                            </tr>
                            <tr>
                                <td>Paypal</td>
                                <td><input type="radio" name="payment_type" value="paypal"></td>
                            </tr>
                            <tr>
                                <td>BKash</td>
                                <td><input type="radio" name="payment_type" value="bkash"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="btn" value="Confirm Order" class="btn btn-primary"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>