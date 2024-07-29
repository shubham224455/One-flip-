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
    
     
     
     <!-- cart items show -->
     <div class="container-fluid"> 
     <h4 class="my-2 pd-4">Order items! <h4>
     <div class="row">
     <?php
    
        $userid=$_SESSION["user_id"];
        
        $sql="SELECT * FROM `order_table` WHERE user_id=$user_id";
        $result=mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_assoc($result)){
             
           $pro_id=$row["product_id"];
           $user_id=$row["user_id"];
          
           if($pro_id<100 && $user_id==$userid){
            
                $sql1="SELECT * FROM `phone` WHERE phone_id=$pro_id";
                $result1=mysqli_query($conn,$sql1);
                $row1=mysqli_fetch_assoc($result1);

                
                    $image=$row1['phone_image'];
                    $name=$row1['phone_name'];
                    $price=$row1['phone_price'];
                    $id=$row1['phone_id'];
                echo'
                <div class="col-md-2 my-2 ">
                <div class="card" style="width: 15rem; height=12rem;">
                  <a href="product_page.php?product_id='.$id.'"> <img class="card-img-top" src="'.$image.'" height="300px" ></a>
                    <div class="card-body">
                    <p class="card-text" > <a href="product_page.php?product_id='.$id.'" class="text-dark">'. $name.' </a></p>
                    <p class="card-text">From ₹'. $price .'</p>
                     <div class="btn-group-lg" role="group" aria-label="Basic example">
                    <a href="ordertrack.php?product_id='.$pro_id.'" class="text-dark"> 
                     <button type="button" class="btn btn-warning ">Order status</button></a>
                     <a href="order_cancel.php?product_id='.$pro_id.'" class="text-dark"><button type="button" class="btn btn-success ">Delete</button></a>
                    
                    </div>
                    </div>
                </div>
                </div>';
                
           }

          else if($pro_id<200 && $user_id==$userid){
           

            $sql1="SELECT * FROM `fashion` WHERE fashion_id=$pro_id";
            $result1=mysqli_query($conn,$sql1);
             $row1=mysqli_fetch_assoc($result1);
                $image=$row1['fashion_image'];
                $name=$row1['fashion_name'];
                $price=$row1['fashion_price'];
                $id=$row1['fashion_id'];
            echo'
            <div class="col-md-2 my-2 ">
            <div class="card" style="width: 15rem; height=12rem;">
              <a href="product_page.php?product_id='.$id.'"> <img class="card-img-top" src="'.$image.'" height="300px" ></a>
                <div class="card-body">
                <p class="card-text" > <a href="product_page.php?product_id='.$id.'" class="text-dark">'. $name.' </a></p>
                <p class="card-text">From ₹'. $price .'</p>
                <div class="btn-group-lg" role="group" aria-label="Basic example">
                 <a href="ordertrack.php?product_id='.$pro_id.'" class="text-dark">  
                <button type="button" class="btn btn-warning ">Order status</button></a>
                <a href="order_cancel.php?product_id='.$pro_id.'" class="text-dark"><button type="button" class="btn btn-success "> Delete</button></a>
                </div>
                </div>
            </div>
            </div>';
            
            
           }

         else if($pro_id>200 && $user_id==$userid){
            
                    $sql1="SELECT * FROM `brand` WHERE brand_id=$pro_id";
                    $result1=mysqli_query($conn,$sql1);
                    $row1=mysqli_fetch_assoc($result1);
                        $image=$row1['brand_image'];
                        $name=$row1['brand_name'];
                        $price=$row1['brand_price'];
                        $id=$row1['brand_id'];
                    echo '<div class="col-md-2 my-2 ">
                    <div class="card" style="width: 15rem;height=12rem;">
                        <a href="product_page.php?product_id='.$id.'"><img class="card-img-top" src="'.$image.'" height="300px"></a>
                        <div class="card-body">
                        <p class="card-text"><a href="product_page.php?product_id='.$id.'" class="text-dark">'. $name.'</a></p>
                        <p class="card-text">From ₹'.$price.'</p>
                        <div class="btn-group-lg" role="group" aria-label="Basic example">
                         <a class="card-text"><a href="ordertrack.php?product_id='.$pro_id.'" class="text-dark">  
                          <button type="button" class="btn btn-warning ">Order status</button></a>
                          <a href="order_cancel.php?product_id='.$pro_id.'" class="text-dark"><button type="button" class="btn btn-success "> Delete</button></a>
                          </div>
                          
                        </div>
                    </div>
                    </div>';
                    
             
           }
           
        } 
  ?>
  
  </div>
    </div>
    <br>
    <br>
    <br>
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