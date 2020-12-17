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
    $output.= $result['itemqty'];
    $output.=">";
    $output.=$result['itemqty'];
    $output.="</option>";
}

echo $output;


?>