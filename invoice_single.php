<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

include 'includes/fun.php';
require 'vendor/autoload.php';
include 'includes/autoload.inc.php';
include 'includes/connect.php';
// This will output the barcode as HTML output to display in the browser
// $redColor = [255, 0, 0];
$redColor = [0, 0, 0];
$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
// $tp_array = [];
$user = $_SESSION["username"];
$current_date = date("Y-m-d H:i:s");
$mobile= $_SESSION['PHONE'];
$email= $_SESSION['EMAIL_ID'];
$COMPANY_NAME = $_SESSION['COMPANY_NAME'];
$COMPANY_ADDRESS = $_SESSION['ADDRESS'];
$GST_NUMBER = $_SESSION['GST_NUMBER'];
$WARD_NAME = $_SESSION['WARD_NAME'];
$WARD_NO = $_SESSION['WARD_NUM'];
$C_Pan = $_SESSION['PAN'];
$C_CIN = $_SESSION['CIN'];
$C_EMAIL = $_SESSION['EMAIL'];
$C_pin = $_SESSION['PIN_CODE'];
$C_TIN = $_SESSION['TIN'];
$C_PHONE = $_SESSION['PHONE'];
$C_Zone= $_SESSION['ZONE'];
$inv = $_SESSION['CINV'];
$logo = "images/$inv.jpg";
extract($_POST);
$invoice_arr = explode('#',$invoice_list);

// var_dump($invoice_arr);
if(date('m')<4){
  $finyear = (date('y')-1).'-'.date('y');
}
else{
 $finyear = date('y').'-'.(date('y')+1);
}

$html_all='';
echo $len = count($invoice_arr);
$xyz=0;