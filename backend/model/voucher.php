<?php
include_once('include/dbconn.php');
class Voucher{
    private $pdo;
    public function add($cus,$iname,$qty,$price,$total,$pay,$deli,$commi){
        $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //sql query
        $sql="insert into voucher (userid,itemid,itemqty,itemprice,total,payment,deli,commission) values (:a,:b,:c,:d,:e,:f,:g,:h)";
        //prepare sql statement
        $stmt=$this->pdo->prepare($sql);
        //bind parameter
        $stmt->bindParam(':a',$cus);
        $stmt->bindParam(':b',$iname);
        $stmt->bindParam(':c',$qty);
        $stmt->bindParam(':d',$price);
        $stmt->bindParam(':e',$total);
        $stmt->bindParam(':f',$pay);
        $stmt->bindParam(':g',$deli);
        $stmt->bindParam(':h',$commi);
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
        $sql="select voucher.*,register.firstname as fname,register.id as rid,register.lastname as lname from voucher inner join register where voucher.userid=register.id";
        //prepare sql statement
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute();
        $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $results;    
}
public function view($voucherid){
     $this->pdo = Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // sql query
        $sql="select voucher.*,register.firstname as fname,register.id as rid,register.lastname as lname from voucher inner join register on voucher.id=:id AND voucher.userid=register.id";
        //prepare sql statement
        $stmt=$this->pdo->prepare($sql);
         $stmt->bindParam(':id',$voucherid);
        $stmt->execute();
        $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $results;     
}
public function update($voucherid,$cus,$iname,$qty,$price,$total,$pay,$deli,$commi){
     $this->pdo = Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="update voucher set userid=:a,itemid=:b,itemqty=:c,itemprice=:d,total=:e,payment=:f,deli=:g,commission=:h where id=:id";
    $stmt=$this->pdo->prepare($sql);
    //bind parameters
    $stmt->bindParam(':a',$cus);
    $stmt->bindParam(':b',$iname);
    $stmt->bindParam(':c',$qty);
    $stmt->bindParam(':d',$price);
    $stmt->bindParam(':e',$total);
    $stmt->bindParam(':f',$pay);
    $stmt->bindParam(':g',$deli);
    $stmt->bindParam(':h',$commi);
    $stmt->bindParam(':id',$voucherid);
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
public function delete($voucherid){
   $this->pdo=Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="delete from voucher where id=:id";
    $stmt=$this->pdo->prepare($sql);
    $stmt->bindParam(':id',$voucherid);
    $stmt->execute(); 
}
}
?>