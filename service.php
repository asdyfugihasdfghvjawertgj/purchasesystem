<?php 
session_start();
//echo $_SESSION['cid'];
include_once('controller/catcontroller.php');
$catcontroller=new CatController();
$results=$catcontroller->showCate();
if (isset($_GET['comment'])) {
 if (isset($_SESSION['cid'])) {
  $uid=$_SESSION['cid'];
    include_once('controller/menucontroller.php');
    $menucontroller=new MenuController();
    $menucontroller->create($itemid,$qty,$uid);
}
else{

    header('location:login.php');
}
}
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css ">
<link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <!-- fontlink end -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="css/home.css">
<link href="css/bootstrap.css" rel="stylesheet">
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<style>
    .service{

        -webkit-box-shadow: -1px 0px 11px 0px rgba(50, 50, 50, 0.75);
-moz-box-shadow:    -1px 0px 11px 0px rgba(50, 50, 50, 0.75);
box-shadow:         -1px 0px 11px 0px rgba(50, 50, 50, 0.75);
    }
</style>
</head>
<body>
<?php 
//session_start();
//echo $_SESSION['cid'];
include_once('controller/catcontroller.php');
$catcontroller=new CatController();
$results=$catcontroller->showCate();
if (isset($_GET['comment'])) {
 if (isset($_SESSION['cid'])) {
  $uid=$_SESSION['cid'];
    include_once('controller/menucontroller.php');
    $menucontroller=new MenuController();
    $menucontroller->create($itemid,$qty,$uid);
}
else{

    header('location:login.php');
}
}
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page</title>
<meta charset="utf-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css ">
<link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <!-- fontlink end -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="css/home.css">
<link href="css/bootstrap.css" rel="stylesheet">
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

<script>

            function click(){

                window.location.href=("register.php");
            }
            </script>
        <style>
body{

    font-family: 'Times New Roman', sans-serif;
}
            .login{
           
            
            height: 40px;
        }
        .navbar-expand-sm{
    height: 30px;
}
.menu{
    background-color:#f090d9;
}
.search{

   
    
}
.ml2 {
  font-weight: 900;
  font-size: 3.5em;
}

.ml2 .letter {
  display: inline-block;
  line-height: 1em;
}
#show{
            display: none;
        }
        </style>
        
    </head>
  
    <body>

    <!--start first nav bar-->
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
    <nav class="navbar navbar-expand-lg menu">
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
    
   <div class="container bg-light service mt-3">
       <div class="col-md-12">
           <h1 style="text-align: center;">Our Services</h1>
       </div>
       <div class="row mt-5">
           <div class="col-md-2">

           </div>
           <div class="col-md-4">
<img src="images/imgs/promotion-removebg-preview (1).png" style="width: 300px;">
           </div>
           <div class="col-md-6">
               <h1>Promotion</h1>
               <p style="font-size: 22px;">Our Ends-of-season sale starts Now. Stop by the shop this week for 45% off summer apparel and select accessories.Stock is Limited!</p>
        </div>
       </div>
<hr>
       <div class="row mt-5">
        <div class="col-md-6" >
            <h1>Special Order</h1>
            <p style="font-size: 22px;">Find product info, access special online, track shipments and reorder favourite items or orders with one click..</p>
        </div>
        <div class="col-md-6">
            <img src="images/imgs/special-order-removebg-preview (2).png" width="300px;">
     </div>
    </div>
<hr>
    <div class="row mt-5">
        <div class="col-md-2">

        </div>
        <div class="col-md-4">
            <img src="images/imgs/Delivery-service-removebg-preview.png" width="300px;" >
        </div>
        <div class="col-md-6 mb-4">
            <h1>Delivery</h1>
            <p style="font-size: 22px;">We are adjusting our rates for postal package deliveries and Speedpost services widthin Myanmar,to offer better value and service quality for our customers.</p>
     </div>
    </div>
   </div>
</body>
</html>

<script>
function adds(){
  
  document.getElementById("show").style.display ='block';
  var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;
  //var name=document.getElementById('name').value;
   var comment=document.getElementById('comment').value;
  document.getElementById('poster').innerHTML="Posted by"+" "+"<?php echo $_SESSION['email']; ?>";
  document.getElementById('showComments').innerHTML=comment;
  document.getElementById('date').innerHTML="Posted at"+ today;
}
</script>

<?php
require("footer.php");
?>





