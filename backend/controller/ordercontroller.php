<?php
    include_once("model/order.php");
    class OrderController extends Order{
        public function createOrder($item,$qty,$name,$pay,$voucher_id,$date){
            $this->add($item,$qty,$name,$pay,$voucher_id,$date);
        }
        public function showOrder()
        {
        	return $this->show();
        }
        public function viewOrder($orderid){
        	return $this->viewItem($orderid);
        }
        public function viewUser($orderid){
        	return $this->viewCustomer($orderid);
        }
        public function updateOrder($orderid,$item,$qty,$name,$pay,$voucher_id,$date){
        	$this->update($orderid,$item,$qty,$name,$pay,$voucher_id,$date);
        }
        public function deleteOrder($orderid){
        	$this->delete($orderid);
        }
        public function showCustomer(){
            return $this->Cus();
        }
        public function View($orderid){
            return $this->item($orderid);
        }
    }
?>