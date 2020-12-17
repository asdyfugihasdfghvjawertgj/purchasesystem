<?php
$voucherid=$_GET["id"];
include_once("controller/vouchercontroller.php");
$ordercontrol=new VoucherController();
$ordercontrol->deleteVoucher($voucherid);
header('location:voucherindex.php');
?>