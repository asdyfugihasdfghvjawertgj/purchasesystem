<?php
session_start();
$cid=$_SESSION['cid'];
include_once("controller/menucontroller.php");
$menuController=new MenuController();
$results=$menuController->showMenu($cid);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
	<style>
	.login{
           
		   background-color:#90257D;
		   height: 40px;
	   }
	   .navbar-expand-sm{
   height: 30px;
}

	</style>
</head>

<body>
<div class="container-fluid login" style="background-color:#90257D;" >
<div class="row">
    <div class="col-md-3">
        <nav class="navbar navbar-expand-sm">
     
        
            <a class="nav-link" href="www.facebook.com"><i class="fab fa-facebook-f" style="color:white;"></i></a>
            <a class="nav-link" href="www.pinterest.com"><i class="fab fa-pinterest" style="color:white;"></i></a>
            <a class="nav-link" href="www.twitter.com"><i class="fab fa-twitter" style="color:white;"></i></a>
            <a class="nav-link" href="www.email.com"><i class="fas fa-envelope-square" style="color:white;"></i></a>
        
        
      
        </nav> 
        </div>
    <div class="col-md-3">
        <nav class="navbar navbar-expand-sm">
        </nav>
    </div>
    <div class="col-md-4">
        <nav class="navbar navbar-expand-sm"></nav>
    </div>
    <div class="col-md-2 ">
        <nav class="navbar navbar-expand-sm">
          <?php
           if(isset($_SESSION['cid'])){?>
          <div class="dropdown">
          <a class="btn text-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['name']; ?>
          </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="cart.php">Order List</a>
          <a class="dropdown-item" href="logout.php">Logout</a>   
        </div>
        </div>
      <?php } else{?>
        <a href="register.php"><div class=" ml-auto mt-2  mr-4 " style="height:33px;"><span style="color:white;">Register</span></div></a>
            <a href="login.php"><div class="mt-2" style="height:33px;"><span style="color:white;">Login</span></div></a>
            <?php }?>
          </nav> 
    
</div>
    </div>

</div>

    </div>
    <nav class="navbar navbar-expand-lg menu" style="background-color:#f090d9;">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php" style="color:#000000; font-size:22px;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php" style="color:#000000; font-size:22px;">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php" style="color:#000000; font-size:22px;">Contact</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php" style="color:#000000; font-size:22px;">About Us</a>
            </li>
          </ul>
          <div>
             <a href="home.php" class="img"><img src="images/imgs/rowbg.png" width="80px" height="70px"></a>
        </div>
        <form action="items.php" method="POST">
            <input class="search" name="sear" type="text" placeholder="Type here" style="height:35px;">
            <input name="submit" type="submit" value="Search">
        </form>
               <!-- <i class="fas fa-shopping-cart fa-1x"></i> -->   
        </div>
      </nav>
    
<div class="container">
 <table style="border: 1px solid black;" class="table">
<thead>
<tr>
<td >No</td>
<td>Name</td>
<td>Price</td>
<td>Photo</td>
<td>Quantity</td>
<td>Subtotal</td>
<td>Action</td>

</tr>
</thead>
<tbody>
	<div class="form-group">
	<form id="order">
<?php
$total=0;
$i=1;
$index=0;
foreach($results as $result)
{
  $items[$index]=$result['iname'];
  $itemqty[$index]=$result['itemqty'];
  $iname= $items[$index];
  $iqty=$itemqty[$index];
  //echo $iname;
   $index++;
//$name=$result['iname'];
  //$iname[]=$name;

$price = $result['iprice'];
$qty = $result['itemqty'];

$sum_total = $price * $qty;
$total+=$sum_total;
//echo $sum_total;
?>
<tr>
<td><?php echo $i++?> </td>
<td><?php echo $result['iname'];?> </td>
<td><?php echo $result['iprice'];?> </td>
<td><img src="backend/<?php echo $result['iphoto'];?>"> </td>
<td><?php echo $result['itemqty'];?> </td>
<td><?php echo $sum_total;?> </td>
<td><a class="btn btn-danger" onclick="return deleteuser(<?php echo $result['iid'];?>);">Cancel</a></td>
</tr>

<?php

}
?>
</div>
</tbody>
<tfoot>
	<tr>
		<td colspan="5">Total Amount:</td>
		<td colspan="1"><?php echo $total; ?></td>
		<td> <input type="button" id="submit" class="btn btn-info" value="Order" /></td>
	</tr>
</tfoot>
</form>
</table>
</div>
<script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
	function deleteuser(iid){
		$result=confirm("Are you sure to delete?");
		if ($result) {
			window.location.href="menudelete.php?id="+iid;
			return true;
		}
	}
  $('#submit').click(function(){    
    $.ajax({
      url:"order.php",
      method:"POST",
      data:{iname:<?php echo $iname; ?>,iqty:<?php echo $iqty; ?>},
      success:function(data)
      {
        alert("Successfully Added");
        //$('#add_schedule')[0].reset();
                //$('#add_schedule')[1].reset();
                //$('#add_schedule')[2].reset();
        
        
      }
    });
    });
</script>
</body>

</html>
<?php
require("footer.php");
?>