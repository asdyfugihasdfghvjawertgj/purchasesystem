<?php
session_start();
	  		include_once('controller/registercontroller.php');
	  		$registerController=new RegisterController();
	  		$results=$registerController->get();
	  		foreach ($results as $result) {
        if (isset($_POST['log'])) {
        $email=$_POST['email'];
        $password=$_POST['password'];
	  		if ($email==$result['email'] && $password==$result['password']) {
          include_once('controller/registercontroller.php');
        $registerController=new RegisterController();
        $cresults=$registerController->getCustomer($email);
          foreach ($cresults as $cresult) {
            $_SESSION['cid']=$cresult['id'];//11
            $_SESSION['name']=$cresult['firstname'].$cresult['lastname'];

          }header('location:home.php');
	  			
	  		}
	  		
		}	
	  	}
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
              .login1{

                background: linear-gradient(45deg,#90257D 50%,#f090d9 50%);
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
                <?php echo $_SESSION['email']; ?>
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
          
    <div class="container mt-3 div login1">
    <h1 style="text-align:center;padding-top:80px">Login Form</h1>
    <form method="POST" >
      <div class="row pt-3">
      <div class="col-md-4">
      </div>
        <div class="col-md-4">
          <div class="form-group">
			<label>EMAIL</label>
			<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-envelope"></i></div>
        </div>
            <input type="text" name="email" id="input1" class="form-control" placeholder="Enter Your Email or Phone" style="width:70%;"  >
			<span style="color: red;" id="span1"></span>
	</div>
          </div>
        </div>
        <div class="col-md-4">
        </div>
      </div>
      <div class="row">
      <div class="col-md-4">
      </div>
        <div class="col-md-4">
          <div class="form-group"> 

			<label>PASSWORD</label>
			<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-lock"></i></div>
        </div>
            <input type="password" name="password" id="input2"class="form-control" placeholder="Enter Your Password" style="width:70%;"  >
			<span style="color: red;" id="span2"></span>
	</div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
	  
    

      

      <div style="text-align:center;" class="pt-4 pb-3">
		<button type="submit" id="login" name="log" class=" btn btn-outline-dark p-2" style="font-size:20px; color:black;background-color:white;">Login
      </button>
	</div>
   
  <div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
      <span style="color:white;">New User?</span><a href="register.php">Create New Account</a>
    </div>
    <div class="col-md-4">
      
    </div>
  </div>
  </form>
  </div>
  <script src="jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/login.js"></script>	
  
    </body>
</html>
<?php

require("footer.php")
?>