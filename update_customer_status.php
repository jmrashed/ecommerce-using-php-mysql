<?php
$en_customer_id=$_GET['id'];
$customer_id=base64_decode($en_customer_id);
require './classes/application.php';
$obj_app=new Application();

$obj_app->update_customer_status($customer_id);
