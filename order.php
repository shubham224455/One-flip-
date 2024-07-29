<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Online Shoping App (One Filp)</title>
   </head>
  <body>
     <?php include "head.php"; ?>
     <?php include "dbconnected.php"; ?>

    <?php
    if(isset($_GET['valuenull']) && $_GET['valuenull']=="true"){
      echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
      <strong>Number and Address are not null</strong> .
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
      </div>'; 
    }
    ?>
     <div class="container my-3">
<?php
    
     if(isset($_SESSION['logined']) && $_SESSION['logined']=="true"){
      $product_id=$_GET["product_id"];
      $user_id=$_SESSION["user_id"];  
      $sql="SELECT * FROM `user_table` WHERE user_id=$user_id";
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($result)){
           $phone=$row["user_no"];
           $name=$row["user_name"];
           $address=$row["user_location"];
        echo'<div class="progress">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">50%</div>
          </div>';
       echo '<h3>Order Summary</h3>
       
        <form action="/shopping website/orderhandle.php?product_id='.$product_id.'" method="post">
            <div class="form-group">
                    <div>
                        <label for="phone" >phone number:</label>
                        <a class="text" >'.$phone.'<a/>
                    </div>
                    <div class="form-group my-3">
                        <label for="name">Name:</label>
                          <a class="text">'.$name.'<a/>
                    </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                      <a class="text">'.$address.'<a/>
                </div>
                <button type="submit" class="btn btn-primary">Order place</button>
            </form>';
          }
        } 
        else {
          echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
          <strong>Login first</strong> No have any account pleace signup .
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>'; 
          
        }
        ?>
 </div>
     <div class="container-fluid bg-dark text-light fixed-bottom">

        <p class="text-center py-2 mb-0">
            Copyright One Flip Online Shopping 2024 | All rights
        </p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
 