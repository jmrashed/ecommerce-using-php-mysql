<?php
if (isset($_POST['signup'])) {
    $obj_app->save_customer_info($_POST);
}
?>
<script>
    var xmlHttp=new XMLHttpRequest();
    function ajax_email_check(given_email, objID) {
        //alert(objID);
        var server_page='ajax_email_check.php?email='+given_email;
        xmlHttp.open('$_GET', server_page);
        xmlHttp.onreadystatechange=function () {
            if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                document.getElementById(objID).innerHTML=xmlHttp.responseText;
                if(xmlHttp.responseText == 'Email Already Exists') {
                    document.getElementById('signup').disabled=true;
                } else {
                    document.getElementById('signup').disabled=false;
                }
            }
        }
        xmlHttp.send(null);
    }
</script>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="text-center text-success">You have to login to complete your valuable order. If you are not registered then please register first.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Registration Point Here</h3>
                    <hr/>
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="name">First Name</label>  
                                <div class="col-md-8">
                                    <input id="name" name="first_name" type="text" placeholder="Enter your name" class="form-control input-md" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="name">Last Name</label>  
                                <div class="col-md-8">
                                    <input id="name" name="last_name" type="text" placeholder="Enter your name" class="form-control input-md" required="">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="email">Email</label>  
                                <div class="col-md-8">
                                    <input id="email" name="email_address" type="email" placeholder="Enter your email id" class="form-control input-md" required="" onblur="ajax_email_check(this.value, 'res'); ">
                                    <span id="res"></span>
                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="password">Password</label>
                                <div class="col-md-8">
                                    <input id="password" name="password" type="password" placeholder="Enter a password" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="contact">Phone Number</label>  
                                <div class="col-md-8">
                                    <input id="contact" name="phone_number" type="number" placeholder="Enter your contact no." class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="blood_group">Blood Group</label>
                                <div class="col-md-8">
                                    <select id="blood_group" name="blood_group" class="form-control">
                                        <option value="-1">Select</option>
                                        <option value="1">A+</option>
                                        <option value="2">B+</option>
                                        <option value="3">AB+</option>
                                        <option value="4">O+</option>
                                        <option value="5">A-</option>
                                        <option value="6">B-</option>
                                        <option value="7">AB-</option>
                                        <option value="8">O-</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="street">Address</label>  
                                <div class="col-md-8">
                                    <textarea class="form-control" name="address"></textarea>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="city">City</label>  
                                <div class="col-md-8">
                                    <input id="city" name="city" type="text" placeholder="Enter your city" class="form-control input-md" required="">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="dist">District</label>  
                                <div class="col-md-8">
                                    <input id="dist" name="district" type="text" placeholder="Enter your district" class="form-control input-md" required="">
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="signup"></label>
                                <div class="col-md-8">
                                    <button type="submit" id="signup" name="signup" class="btn btn-success btn-block">Sign Up</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Login Point Here</h3>
                    <hr/>
                    <form class="form-horizontal">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="email">Email</label>  
                                <div class="col-md-8">
                                    <input id="email" name="email" type="text" placeholder="Enter your email id" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="password">Password</label>
                                <div class="col-md-8">
                                    <input id="password" name="password" type="password" placeholder="Enter a password" class="form-control input-md" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="signup"></label>
                                <div class="col-md-8">
                                    <button id="signup" name="signup" class="btn btn-success btn-block">Login</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>