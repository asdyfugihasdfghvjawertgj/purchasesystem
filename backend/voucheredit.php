<?php
$voucherid=$_GET['id'];
include_once("controller/ordercontroller.php");
$orderController=new OrderController();
$results=$orderController->showCustomer();
if (isset($_POST['submit'])) {
   $cus=$_POST['cus'];
   $iname=$_POST['iname'];
   $qty=$_POST['qty'];
   $price=$_POST['price'];
   $total=$_POST['total'];
   $pay=$_POST['pay'];
   $deli=$_POST['deli'];
   $commi=$_POST['commi'];
//echo $pay;
date_default_timezone_set('Asia/Yangon');
    $date=date('Y-m-d');
    $voucher_id=date('YmdHis');
include_once("controller/vouchercontroller.php");
$vouchercontrol=new VoucherController();
$vouchercontrol->updateVoucher($voucherid,$cus,$iname,$qty,$price,$total,$pay,$deli,$commi);
//$ordercontrol->showOrder();
//header('location:orderindex.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
<link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="create_cat.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="catindex.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Category</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="itemindex.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Items</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="customerindex.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Customer Information</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="orderindex.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Order</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="voucherindex.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Voucher</span></a>
            </li>
            <!-- Divider -->
            

            <!-- Divider -->
           

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
          

          

            <!-- Nav Item - Tables -->
         

            <!-- Divider -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="container">
                   
                   <div class="row my-2 ml-3">
                       <div class="col-md-12">
                           <div class='float-right' style="background-color: green;">
                               <a href='voucherindex.php' class='btn btn-primary pull-right'>View All</a>
                           </div>
                       </div>
                       <div class="col-md-12 my-2 " >
               
                                   
                         <form method="POST">
                           <div class="form-group pt-3">
                               <label style="font-size: 20px; color: black;">User Name</label>
                               <select style="width: 100%;" id="cus" name="cus">
                                   <option selected>...Please Select User Name...</option>

                                   <?php foreach ($results as $presult) {
                                 ?>
                                 <option value=<?php echo $presult['rid']; ?>><?php echo $presult['fname']; ?>&nbsp;<?php echo $presult['lname']; ?></option>
                             <?php } ?>
                               </select>
                           </div>
 
                           <div class="form-group pt-3">
                               <label style="font-size: 20px; color: black;">ItemName</label>
                              <select id="iname"  name="iname" class="form-control">
                        <?php

                        foreach($nresults as $result)
                        {

                        ?>
                        <option value="<?php echo $result['iname'];?>" selected="selected"><?php echo $result['iname'];?> </option>
                        <?php
                        }
                        ?>     
                      </select>
                           </div>

                           <div class="form-group pt-3">
                               <label style="font-size: 20px; color: black;">ItemQuantity</label>
                               <select id="qty" name="qty" class="form-control">
                        <?php

                        foreach($qresults as $result)
                        {

                        ?>
                        <option value="<?php echo $result['itemqty'];?>" selected="selected"><?php echo $result['itemqty'];?> </option>
                        <?php
                        }
                        ?>     
                      </select>
                           </div>

       
                           <div class="form-group pt-3">
                               <label style="font-size: 20px; color: black;">ItemPrice</label>
                               <select id="price" name="price" class="form-control">
                        <?php

                        foreach($ipresults as $result)
                        {

                        ?>
                        <option value="<?php echo $result['iprice'];?>" selected="selected"><?php echo $result['iprice'];?> </option>
                        <?php
                        }
                        ?>     
                      </select>
                           </div>

                           <div class="form-group pt-3">
                               <label style="font-size: 20px; color: black;">Total Price</label>
                               <select id="total" name="total" class="form-control">
                        <?php

                        foreach($tresults as $result)
                        {

                        ?>
                        <option value="<?php echo $result['iprice']*$result['itemqty'];?>" selected="selected"><?php echo $result['iprice']*$result['itemqty'];?> </option>
                        <?php
                        }
                        ?> 
                        </select>    
                           </div>
                           <div class="form-group pt-3">
                               <label style="font-size: 20px; color: black;">Payment</label>
                               <select id="pay" name="pay" class="form-control">
                        <?php

                        foreach($presults as $result)
                        {

                        ?>
                        <option value="<?php echo $result['payment'];?>" selected="selected"><?php echo $result['payment'];?> </option>
                        <?php
                        }
                        ?> 
                        </select>    
                           </div>
                           <div class="form-group pt-3">
                               <label style="font-size: 20px; color: black;">Delivery Fee</label>
                               <input type="text" name="deli" value="3000ks" style="width: 100%;">
                           </div>
                            <div class="form-group pt-3">
                               <label style="font-size: 20px; color: black;">Commission Fee</label>
                               <input type="text" name="commi" value="3000ks" style="width: 100%;">
                           </div>
                           <button type="submit" name="submit" class="btn btn-primary" style="margin-left: 400px;  margin-top: 20px;">Add</button>
                           </form>
       
                       </div>
       
                   </div>
               </div>
             
               
               </div>
       </div>    
              
            <!-- Footer -->
           
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
<script>
$(document).ready(function(){
    $("#cus").change(function()
    {
      $orderid=$(this).val();
      //console.log($orderid);
      $("#iname").empty();
        $.get("getiname.php",{orderid:$orderid},function(data){
        $("#iname").html(data);
       });
    });
    $("#cus").change(function()
    {
      $orderid=$(this).val();
      //console.log($orderid);
      $("#qty").empty();
        $.get("getqty.php",{orderid:$orderid},function(data){
        $("#qty").html(data);
       });
    });

    $("#cus").change(function()
    {
      $orderid=$(this).val();
      //console.log($orderid);
      $("#price").empty();
        $.get("getprice.php",{orderid:$orderid},function(data){
        $("#price").html(data);
       });
    });
    $("#cus").change(function()
    {
      $orderid=$(this).val();
      //console.log($orderid);
      $("#total").empty();
        $.get("gettotal.php",{orderid:$orderid},function(data){
        $("#total").html(data);
       });
    });
    $("#cus").change(function()
    {
      $orderid=$(this).val();
      //console.log($orderid);
      $("#pay").empty();
        $.get("getpay.php",{orderid:$orderid},function(data){
        $("#pay").html(data);
       });
    });
});
    
</script>
</body>

</html>
