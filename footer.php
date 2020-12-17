<?php 
include_once('controller/catcontroller.php');
$catcontroller=new CatController();
$results=$catcontroller->showCate();
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <link rel="stylesheet" href="css/home.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script>

            function click(){

                window.location.href=("register.php");
            }
            </script>
        <style>

            .login{
           
            background-color:#FAB90C ;
            height: 40px;
        }
        .navbar-expand-sm{
    height: 30px;
}
#show{
            display: none;
        }
        </style>
        
    </head>
  
    <body style="font-family: 'Times New Roman', Times, serif;">

    <!--start first nav bar-->
    

      
      <div class="container my-5">
        
          
          <p style="font-size: 30px;text-align: center;"><strong>LOVELY CLIENTS COMMENTS</strong></p>
          
         
          <P style="text-align: center;">It is really awesome theme and specially mode for online shopping,<br>
             so this theme unique to create your drean website and help to promote.</P>
        
      </div>
    
       <!--start footer-->
       <div class="container-fluide" style="background-color:#f090d9">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-3">
                    <h2>Collection</h2>
                    <ul style="font-size: small; ">
                        <li>MEN COLLECTION</li>
                        <li>WOMEN COLLECTION</li>
                      </ul>
                </div>
                <div class="col-md-4 my-3">
                    <h2>Content Info</h2>
                    <ul style="font-size: small; ">
                        <li>Phone: +959-7865677578</li>
                        <li>Emial: rowshopping@gmial.com</li>
                </div>
                <div class="col-md-4 my-3">
                    <h2>Customer Service</h2>
                    <ul style="font-size: small; ">
                        <li>Help & Contact</li>
                        <li>Shipping& Taxes</li>
                        <li>Return Policy</li>
                        <li>Legal Notice</li>
                      </ul>
                </div>
            </div>
            <div class="container pb-4">
<div class="col-md-4">
  <div class="card" id="show">
    <div class="card-body">
<h6 id="poster"></h6>
<p id="showComments"></p>
</div>
<div class="card-footer" style="height: 50px;">
 <p id="date" style="float: right;"></p>
 </div>  
</div>
<input type="text" name="comment" id="comment" placeholder="Enter Comment" required/>
<input type="submit" name="submit" onclick="adds()" value="Post" />
</div>
  </div>
    </div>
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
  document.getElementById('poster').innerHTML="Posted by"+" "+"<?php echo $_SESSION['name']; ?>";
  document.getElementById('showComments').innerHTML=comment;
  document.getElementById('date').innerHTML="Posted at"+ today;
}
</script>
    <script src="js/home.js"></script>
    </body>
    </html>
    
              




   