<?php

require("header.php");
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
.contact{

    background: linear-gradient(45deg,#90257D 50%,#f090d9 50%);
}
</style>
</head>
<body>
    <div class="container contact mt-3">
        <div class="col-md-12">

            <h1 style="text-align:center;">Contact Us</h1>
        </div>
        <div class="row">

<div class="col-md-12">
    <div class="form-group">
    <label for="name">Your Name</label>
    <input type="text"  class="form-control" placeholder="Enter Your Name" id="input1">
    <span id="span1"></span>
</div>
</div>

        </div>
        <div class="row">
           
            <div class="col-md-12">
                <label for="emial">Your Email</label>
    <input type="text"  class="form-control" id="input2" placeholder="Enter Your Email">
    <span id="span2"></span>
            </div>
            
        </div>

        <div class="row">
            
            <div class="col-md-12">
                <label for="phone">Your Phone</label>
    <input type="text"  class="form-control" id="input3" placeholder="Enter Your Phone">
    <span id="span3"></span>
            </div>
           
        </div>


        <div class="row">
            
            <div class="col-md-12">
                <label for="Subject">Subject</label>
    <input type="text"  class="form-control" id="input4" placeholder="Enter Your Subject">
    <span id="span4"></span>
            </div>
           
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Your Message</label>
                    <textarea class="form-control" id="input5" rows="3"></textarea>
                    <span id="span5"></span>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="text-align:center;">
                <div class="btn btn-outline-dark" id="send" style="background-color:white;color:black;">Send</div>
            </div>
        </div>
    </div>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="contact.js">
       
    </script>
    
</body>
</html>


<?php

require("footer.php");
?>






