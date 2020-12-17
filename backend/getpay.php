<?php
include_once("controller/ordercontroller.php");
$orderid=$_GET['orderid'];
//echo $orderid;
$orderController=new OrderController();
$results=$orderController->View($orderid);
$output=null;

foreach($results as $result)
{
   
    $output.="<option value=";
    $output.= $result['payment'];
    $output.=">";
    $output.=$result['payment'];
    $output.="</option>";
}

echo $output;


?>