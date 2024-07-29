<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- star link add  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Online Shoping App (One Filp)</title>
  </head>
  <body>
     <?php include "head.php"; ?>
     <?php include "dbconnected.php"; ?>


     
     <?php
       
      $id=$_GET['product_id'];
        if($id<100){
          $sql="SELECT * FROM `phone` WHERE phone_id=$id";
          $result=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($result)){
                $product_name=$row['phone_name'];
                // $product_dis=$row['category_description'];
                $product_image=$row['phone_image'];
                $product_price=$row['phone_price'];
                $phone_id=$row['phone_id'];
                echo'<div class="card mb-4 m-4" >
  <div class="row  no-gutters">
    <div class="col-md-4">
        <img src="'. $product_image .'" alt="..." style="width: 25rem; height=20rem;">
     </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">'. $product_name .'</h5>
        <p class="card-text" > <h3><b> ₹'. $product_price .'</b> </h3></p>
        <p class="card-text" ><h2>Rating & Reviews</h2>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
        </p>
        <p>     
            <div class="btn-group-lg" role="group" aria-label="Basic example">
             <h5 class="my-2"> Storage </h5>
                <button type="button" value="32 gp" class="btn btn-secondary" name="s" value="32 GB">32 GB</button>
                <button type="button" value="64 gp" class="btn btn-secondary " name="s" value="64 GB">64 GB</button>
                <button type="button" value="128 gp" class="btn btn-secondary" name="s" value="128 GB">128 GB</button>
                <button type="button" value="256 gp" class="btn btn-secondary" name="s" value="256 GB">256 GB</button>
           </div>

        </p>
        <p>
         <div class="btn-group-lg" role="group" aria-label="Basic example">
             <h5 class="my-2">Ram</h5>
                <button type="button" class="btn btn-secondary" name="s1" value="4 GB">4 GB</button>
                <button type="button" class="btn btn-secondary" name="s1" value="5 GB">6 GB</button>
                <button type="button" class="btn btn-secondary" name="s1" value="6 GB">8 GB</button>
                <button type="button" class="btn btn-secondary" name="s1" value="7 GB">12 GB</button>
           </div>
        </p>
        <p ><img src="ALL Image/offer tag.webp" alt="..." >
                Bank OfferGet ₹25 Instant Discount on first 1 Flip UPI transaction on order of ₹200 and aboveT&C </p>

              <p>  <img src="ALL Image/offer tag.webp" alt="..." >
                Bank Offer5% Cashback on 1 Flip Axis Bank CardT&C </p>

              <p> <img src="ALL Image/offer tag.webp" alt="...">
                 Bank Offer10% off up to ₹1,500 on HSBC Bank Credit Card EMI Transactions, on orders of ₹7,500 and aboveT&C</p>

              <p> <img src="ALL Image/offer tag.webp" alt="..." >
                 Special PriceGet extra 15% off (price inclusive of cashback/coupon)T&C</p>
   
              <div class="btn-group-lg" role="group" aria-label="Basic example">
                <a href="carthandle.php?pro_id='.$id.'" class="text-dark" ><button type="button" class="btn btn-info">ADD TO CART</button></a>
               <a href="order.php?product_id='.$phone_id.'" class="text-dark"> <button type="button" class="btn btn-warning "> BUY NOW </button></a>
           </div>
        </p>
            
      </div>
    </div>
  </div>
</div>';

          }
        } if($id<200){  
          // top fashion
       
          $sql="SELECT * FROM `fashion` WHERE fashion_id=$id";
          $result=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($result)){
                $product_name=$row['fashion_name'];
                // $product_dis=$row['category_description'];
                $product_image=$row['fashion_image'];
                $product_price=$row['fashion_price'];
                $fashion_id=$row['fashion_id'];
                echo'<div class="card mb-4 m-4" >
  <div class="row  no-gutters">
    <div class="col-md-4">
      <img src=" '.$product_image .'" alt="..." style="width: 25rem; height=20rem;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">'. $product_name .'</h5>
        <p class="card-text" > <h3><b> ₹'. $product_price .'</b> </h3></p>
        <p class="card-text" ><h2>Rating & Reviews</h2>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
        </p>
        <p>     
           <div class="btn-group-lg" role="group" aria-label="Basic example">
             <h5 class="my-2">Size    </h5>
                <button type="button" name="b" class="btn btn-secondary" name="s2" value="XS">XS</button>
                <button type="button" name="b" class="btn btn-secondary" name="s2" value="S">S</button>
                <button type="button" name="b" class="btn btn-secondary" name="s2" value="M">M</button>
                <button type="button" name="b" class="btn btn-secondary" name="s2" value="L">L</button>
                <button type="button" name="b" class="btn btn-secondary" name="s2" value="XL">XL</button>
                <button type="button" name="b" class="btn btn-secondary" name="s2" value="XXL">XXL</button>
                <button type="button" name="b" class="btn btn-secondary" name="s2" value="3XL">3XL</button>
                <button type="button" name="b" class="btn btn-secondary" name="s2" value="4XL">4XL</button>
           </div>
        </p>
        <p ><img src="ALL Image/offer tag.webp" alt="..." >
                Bank OfferGet ₹25 Instant Discount on first 1 Flip UPI transaction on order of ₹200 and aboveT&C </p>

              <p>  <img src="ALL Image/offer tag.webp" alt="..." >
                Bank Offer5% Cashback on 1 Flip Axis Bank CardT&C </p>

              <p> <img src="ALL Image/offer tag.webp" alt="...">
                 Bank Offer10% off up to ₹1,500 on HSBC Bank Credit Card EMI Transactions, on orders of ₹7,500 and aboveT&C</p>

              <p> <img src="ALL Image/offer tag.webp" alt="..." >
                 Special PriceGet extra 15% off (price inclusive of cashback/coupon)T&C</p>
   
              <div class="btn-group-lg" role="group" aria-label="Basic example">
               <a href="carthandle.php?pro_id='.$id.'" class="text-dark" ><button type="button" class="btn btn-info" >ADD TO CART</button></a>
                <a href="order.php?product_id='.$fashion_id.'" class="text-dark"> <button type="button" class="btn btn-warning "> BUY NOW</button></a>
           </div>
        </p>
            
      </div>
    </div>
  </div>
</div>';
          }
        } else {
          //  top brand

          $sql="SELECT * FROM `brand` WHERE brand_id=$id";
          $result=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($result)){
                $product_name=$row['brand_name'];
                // $product_dis=$row['category_description'];
                $product_image=$row['brand_image'];
                $product_price=$row['brand_price'];
                $brand_id=$row['brand_id'];
                echo'<div class="card mb-3 m-3">
  <div class="row  no-gutters">
    <div class="col-md-4">
      <img src="'. $product_image .'" alt="..." style="width: 25rem; height=20rem;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">'. $product_name.' </h5>
        <p class="card-text" > <h3><b> ₹'.$product_price .'</b> </h3></p>
        <p class="card-text" ><h2>Rating & Reviews</h2>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
        </p>
        <p>     
           <div class="btn-group-lg" role="group" aria-label="Basic example">
             <h5 class="my-2">Size-india   </h5>
                <button type="button" class="btn btn-light" name="s3" value="5">5</button>
                <button type="button" class="btn btn-light" name="s3" value="6" >6</button>
                <button type="button" class="btn btn-light" name="s3" value="7">7</button>
                <button type="button" class="btn btn-light" name="s3" value="8">8</button>
                <button type="button" class="btn btn-light" name="s3" value="9">9</button>
                <button type="button" class="btn btn-light" name="s3" value="10">10</button>
                <button type="button" class="btn btn-light" name="s3" value="11">11</button>
           </div>
        </p>
        <p ><img src="ALL Image/offer tag.webp" alt="..." >
                Bank OfferGet ₹25 Instant Discount on first 1 Flip UPI transaction on order of ₹200 and aboveT&C </p>

              <p>  <img src="ALL Image/offer tag.webp" alt="..." >
                Bank Offer5% Cashback on 1 Flip Axis Bank CardT&C </p>

              <p> <img src="ALL Image/offer tag.webp" alt="...">
                 Bank Offer10% off up to ₹1,500 on HSBC Bank Credit Card EMI Transactions, on orders of ₹7,500 and aboveT&C</p>

              <p> <img src="ALL Image/offer tag.webp" alt="..." >
                 Special PriceGet extra 15% off (price inclusive of cashback/coupon)T&C</p>
  
              <div class="btn-group-lg" role="group" aria-label="Basic example">
              <a href="carthandle.php?pro_id='.$id.'" class="text-dark"><button type="button" class="btn btn-info" >ADD TO CART</button></a>
               <a href="order.php?product_id='.$brand_id.'" class="text-dark">  <button type="button" class="btn btn-warning "> BUY NOW </button></a>
              
               </div>
        </p>
            
      </div>
    </div>
  </div>
</div>';

          }
        }
          ?>
     <!-- card start hai iss point saa-->
        <style>
           .checked {
            color: orange;
           }
        </style>

     <!-- yaa sa start hai comments -->
     <?php
       $method=$_SERVER['REQUEST_METHOD'];
       if($method=='POST'){
        //uplod photo by post
        // print_r($_FILES["photo"]);
         $filename=$_FILES["photo"]["name"];
         $tempname=$_FILES["photo"]["tmp_name"];
         $folder="ALL Image/".$filename;
         move_uploaded_file($tempname,$folder);

         $comment=$_POST['about'];
         $comment_by=$_SESSION['user_id'];
         $user_name=$_SESSION['user_name'];
        $sql="INSERT INTO `comments`(`comments_by`, `product_id`, `comments_image`, `comments_dis`,`user_name`, `tstamp`) 
        VALUES ('$comment_by','$id','$folder','$comment','$user_name',current_timestamp())";
        $result=mysqli_query($conn,$sql);
              
       }
     ?>
     <?php
 if(isset($_SESSION['logined']) && $_SESSION['logined']=="true"){
    echo '<div class="container">
      <form action="'.$_SERVER['REQUEST_URI'].'" method="post" enctype="multipart/form-data">
        <h2>Rating & Reviews</h2>
        <div class="form-group">
          <label for="photo">Photo</label>
          <input type="file" class="form-control-file" id="photo" name="photo">
        </div>
        <div class="form-group">
          <label for="about">Comment </label>
          <textarea class="form-control" id="about" name="about" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>';
  }else{
       echo' <div class="container">
            <p>Pleace login first</p>
        </div>';
  }
    ?>
<br>
    
    <?php
      
       $sql="SELECT * FROM `comments` WHERE product_id=$id";
       $result=mysqli_query($conn,$sql);
       while($row=mysqli_fetch_assoc($result)){
            $image=$row['comments_image'];
            $user=$row['comments_by'];
            $comment=$row['comments_dis'];
            $comments_id=$row['comments_id'];
            $user_name=$row['user_name'];
            // echo $comment." ";
            // <!-- Button trigger modal -->

    echo '<div class="container">
            <div class="media" >
              <img src="ALL Image/dimage1.jpg" class="mr-2" alt="..." width="45px">
              <div class="media-body" data-toggle="modal" data-target="#image"  >
                <h5 class="mt-0">'.$user_name.'</h5>
                <a > <img src="'. $image .'" class="mr-2" alt="..." width="100px" hight="100px"></a>
                <p>'.$comment .'.</p>
              </div>
      </div>
      </div>';
     }

    //  model
    //  echo'<div class="modal fade" id="image"   tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    //  <div class="modal-dialog">
    //    <div class="modal-content">
    //      <div class="modal-header">
    //        <h5 class="modal-title" id="image" >'.$user_name.'</h5>
    //        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    //          <span aria-hidden="true">&times;</span>
    //        </button>
    //      </div>
    //      <div class="modal-body">
    //         <p> <img src="'. $image .'" class="mr-2" alt="image" width="300px" hight="300px"></p>
    //         <p>'.$comment .'</p>
    //      </div>
    //      <div class="modal-footer">
    //        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    //      </div>
    //    </div>
    //  </div>
    // </div>';
     ?>
    

 <br>
 <br>
 <br>
 <br>
 <br>
 <?php include "footer.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
  </body>
</html>


