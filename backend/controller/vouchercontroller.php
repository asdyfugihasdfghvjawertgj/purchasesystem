<?php
    include_once("model/voucher.php");
    class VoucherController extends Voucher{
        public function createVoucher($cus,$iname,$qty,$price,$total,$pay,$deli,$commi){
            $this->add($cus,$iname,$qty,$price,$total,$pay,$deli,$commi);
        }
        public function showVoucher(){
        	return $this->show();
        }
        public function viewVoucher($voucherid){
        	return $this->view($voucherid);
        }
        public function updateVoucher($voucherid,$cus,$iname,$qty,$price,$total,$pay,$deli,$commi){
        	$this->update($voucherid,$cus,$iname,$qty,$price,$total,$pay,$deli,$commi);
        }
        public function deleteVoucher($voucherid){
        	$this->delete($voucherid);
        }
    }
?>