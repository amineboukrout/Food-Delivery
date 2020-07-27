<?php
use PayPal\Api\Payer;
require 'start.php';
//$userid= $_GET['fosuid'];
$payer = new \PayPal\Api\Payer();
$payer->setPaymentMethod('paypal');


//if (!isset($_POST['grandtotal'])){die();}
$grandtotal = $_GET['grandtotal'];

echo $grandtotal;