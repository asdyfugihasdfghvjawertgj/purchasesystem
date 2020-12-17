<?php
include_once('include/dbconn.php');
class Order{
    private $pdo;
    public function add($item,$qty,$name,$pay,$voucher_id,$date){
        $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //sql query
        $sql="insert into orders (itemname,itemqty,userid,payment,voucherid,orderdate) values (:a,:b,:c,:d,:e,:f)";
        //prepare sql statement
        $stmt=$this->pdo->prepare($sql);
        //bind parameter
        $stmt->bindParam(':a',$item);
        $stmt->bindParam(':b',$qty);
        $stmt->bindParam(':c',$name);
        $stmt->bindParam(':d',$pay);
        $stmt->bindParam(':e',$voucher_id);
        $stmt->bindParam(':f',$date);
        if ($stmt->execute())
         {
            return true;
        }
        else {
            return false;
        }
    }
    public function show(){
         $this->pdo = Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // sql query
        $sql="select * from orders";
        //prepare sql statement
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute();
        $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $results;
    }
    public function viewItem($orderid){
      $this->pdo = Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // sql query
        $sql="select orders.*,item.name as iname,item.id as iid,item.price as iprice from orders inner join item on orders.id=:id AND orders.itemname=item.id";
        //prepare sql statement
        $stmt=$this->pdo->prepare($sql);
         $stmt->bindParam(':id',$orderid);
        $stmt->execute();
        $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $results;  
    }
    public function viewCustomer($orderid){
     $this->pdo = Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // sql query
        $sql="select orders.*,register.firstname as fname,register.id as rid,register.lastname as lname from orders inner join register on orders.id=:id AND orders.userid=register.id";
        //prepare sql statement
        $stmt=$this->pdo->prepare($sql);
         $stmt->bindParam(':id',$orderid);
        $stmt->execute();
        $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $results;     
    }
    public function update($orderid,$item,$qty,$name,$pay,$voucher_id,$date){
        $this->pdo = Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="update orders set itemname=:a,itemqty=:b,userid=:c,payment=:d,voucherid=:e,orderdate=:f where id=:id";
    $stmt=$this->pdo->prepare($sql);
    //bind parameters
    $stmt->bindParam(':a',$item);
    $stmt->bindParam(':b',$qty);
    $stmt->bindParam(':c',$name);
    $stmt->bindParam(':d',$pay);
    $stmt->bindParam(':e',$voucher_id);
    $stmt->bindParam(':f',$date);
    $stmt->bindParam(':id',$orderid);
    //execute
    if($stmt->execute())
    {
        return true;
    }
    else
    {
        return false;
    }
    }
public function delete($orderid)
{
    $this->pdo=Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="delete from orders where id=:id";
    $stmt=$this->pdo->prepare($sql);
    $stmt->bindParam(':id',$orderid);
    $stmt->execute();

}
public function Cus(){
 $this->pdo = Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // sql query
        $sql="select orders.*,register.firstname as fname,register.id as rid,register.lastname as lname from orders inner join register where orders.userid=register.id";
        //prepare sql statement
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute();
        $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $results;    
}
public function item($orderid){
      $this->pdo = Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // sql query
        $sql="select orders.*,item.name as iname,item.id as iid,item.price as iprice from orders inner join item on orders.userid=:id AND orders.itemname=item.id";
        //prepare sql statement
        $stmt=$this->pdo->prepare($sql);
         $stmt->bindParam(':id',$orderid);
        $stmt->execute();
        $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $results;  
    }   
}
?>