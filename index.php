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
        
     <!-- order success -->
      <?php
      if(isset($_GET['ordersuccess']) && $_GET['ordersuccess']=="true"){
            echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                <strong>Well done!</strong> You should Placead order successfuly.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
       }
      ?>
      <?php

      if(isset($_GET['cartsuccess']) && $_GET['cartsuccess']=="false"){
            echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                <strong>Login first</strong> No have any account pleace signup .
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
       }

       if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="true"){
        echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Welcome mera dost!!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>';
        }else if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="false"){
            echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Dost passward right baar!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>';
        }
        //right no yaa wrong hai
        if(isset($_GET['no']) && $_GET['no']=="false"){
            echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Dost Number right baar!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>';
        }
    //signup success
        if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
            echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                <strong>Signup success!</strong>  place login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            }

            //password are same
            if(isset($_GET['same']) && $_GET['same']=="false"){
                echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                    <strong>Password are not same!</strong>  place signup again!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                }

           //number already exits
          
               if(isset($_GET['noexits']) && $_GET['noexits']=="true"){
                     echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                          <strong>Mera dost Number already ragister hai!!</strong> 
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          </div>';
                      }
                    
      ?>

    <!-- small card start -->

    <!-- <div class="container">
        <div class="row">   
                
        <?php
            // $sql="SELECT * FROM `all items`";
            // $result=mysqli_query($conn,$sql);
            // while($row=mysqli_fetch_assoc($result)){
            //     $image=$row['item_image'];
            //     $name=$row['item_name'];
            //    echo ' 
            //     <div class="col-md-2 my-2">
            //     <div style="width: 5rem; height=5rem;">
            //         <img class="card-img-top" src="'.$image.'" height="70px" width="65px">
            //     <div>
            //         <p class="text-center my-3;" ><b>'.$name.'</b></p>
            //     </div>
            //     </div>
            //     </div>';
            // }
        ?>
        </div>
        </div> -->
     <!-- Slider start hai iss point saa-->
    <div id="carouselExampleIndicators" class="carousel slide mr-0" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="ALL Image/1ac.webp" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="ALL Image/1Bigsale.webp" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="ALL Image/1flight.webp" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="ALL Image/5g.webp" alt="Fourth slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
  <!-- ist phone page -->
   
<div class="container-fluid"> 
    <h4 class="my-2 pd-4">Best Deals for Smartphone <h4>
    <div class="row">

        <?php
            $sql="SELECT * FROM `phone`";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
                $image=$row['phone_image'];
                $name=$row['phone_name'];
                $price=$row['phone_price'];
                $id=$row['phone_id'];
                echo'<div class="col-md-2 my-2 ">
            <div class="card" style="width: 15rem; height=12rem;">
                <a href="product_page.php?product_id='.$id.'"><img class="card-img-top" src="'.$image.'" height="300px"> </a> 
                <div class="card-body">
                <p class="card-text"><a  href="product_page.php?product_id='.$id.'" class="text-dark">'.$name.'</a></p>
                 <p >from ₹'.$price.'.</p>
                </div>
            </div>
            </div>';
            }
        ?>
            
     </div>
 </div>


<div class="container-fluid"> 
    <h4 class="my-2 pd-4">Top Deals on Fashion<h4>
    <div class="row">
             
    <?php
            $sql="SELECT * FROM `fashion`";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
                $image=$row['fashion_image'];
                $name=$row['fashion_name'];
                $price=$row['fashion_price'];
                $id=$row['fashion_id'];
            echo'
            <div class="col-md-2 my-2 ">
            <div class="card" style="width: 14rem; height=12rem;">
               <a href="product_page.php?product_id='.$id.'"> <img class="card-img-top" src="'.$image.'" height="300px" ></a>
                <div class="card-body">
                <p class="card-text" > <a href="product_page.php?product_id='.$id.'" class="text-dark">'. $name.' </a></p>
                <p class="card-text">From ₹'. $price .'</p>
                </div>
            </div>
            </div>';
            }
    ?>
     </div>
 </div>


 <div class="container-fluid"> 
    <h4 class="my-2 pd-4">Top Brand Shoes!<h4>
    <div class="row">
    <?php
            $sql="SELECT * FROM `brand`";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
                $image=$row['brand_image'];
                $name=$row['brand_name'];
                $price=$row['brand_price'];
                $id=$row['brand_id'];
            echo '<div class="col-md-2 my-2 ">
            <div class="card" style="width: 14rem;height=12rem;">
                <a href="product_page.php?product_id='.$id.'"><img class="card-img-top" src="'.$image.'" height="300px"></a>
                <div class="card-body">
                <p class="card-text"><a href="product_page.php?product_id='.$id.'" class="text-dark">'. $name.'</a></p>
                <p class="card-text">From ₹'.$price.'</p>
                </div>
            </div>
            </div>';
            }
        ?>
     </div>
 </div>
 <br>
 <br>
 <br>
 <?php include "footer1.php"; ?>
 <?php include "footer.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>