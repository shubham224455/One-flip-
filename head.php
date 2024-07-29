
<?php
session_start();
include "dbconnected.php"; 


echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <a class="navbar-brand" href="index.php"> <img  src="ALL Image/one.png"  width="40px">Flip</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul> ';

    // if wali condition hmaa bta thi hai login hai account yaa nahi
     if(isset($_SESSION['logined']) && $_SESSION['logined']=="true"){

      //cart items count kar tha hai nicha wala code
      $user_id=$_SESSION["user_id"];

      $sql="SELECT COUNT(cart_no) AS counts FROM `cart` WHERE user_id=$user_id";
      $result=mysqli_query($conn,$sql);
      if($result){
        $row=mysqli_fetch_assoc($result);
        $counts=$row["counts"];
      }

      echo '<ul class="navbar-nav mr-3">
       <li class="nav-item active mr-3 my-1">
             <img class="" src="ALL Image/cart image.svg"  width="25px">
             
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger ">
                '.$counts.'
              </span>
       </li> 
         <li class="nav-item active top-0"> 
         <a class="nav-link" href="cartproduct.php" > CART PRODUCT</a>
         </li>
      </ul> 
      <ul class="navbar-nav pd-2 mr-5">
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle"   role="button"   data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
         <img class="mr-2" src="ALL Image/phone/profile-login.svg"  width="25px"> '.$_SESSION['user_name'].'
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item btn-Success"  data-target="#">Welcome '.$_SESSION['user_name'].'</a>
         <div class="dropdown-divider"></div>
             <a class="dropdown-item"><img class="mr-3" src="ALL Image/phone/profile-login.svg" alt=" " width="20px">Profile</a> 
          <a class="dropdown-item" href="orderstatus.php" ><img class="mr-3" src="ALL Image/phone/order.svg"  width="20px">Order</a>
      
          <a class="dropdown-item" ><img class="mr-3" src="ALL Image/phone/wishlist.svg"  width="20px">Wishlist</a>

           <a class="dropdown-item"  ><img class="mr-3" src="ALL Image/phone/reward.svg" alt=" " width="20px">Rewards</a>
        </div>
      </li>
     </ul>
     <div class="mx-2">
     <a href="logout.php"  type="button" class="btn btn-outline-success"  >Logout</a>
     </div>';

    
     }else{
      echo'<ul class="navbar-nav pd-2 mr-5">
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href=""  role="button"   data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
         <img class="mr-2" src="ALL Image/phone/profile-login.svg"  width="25px"> Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item btn-Success" data-toggle="modal" data-target="#signup">Firstly New user Sign up</a>
         <div class="dropdown-divider"></div>
            <a class="dropdown-item" data-toggle="modal" data-target="#login" ><img class="mr-3" src="ALL Image/phone/profile-login.svg" alt=" " width="20px">Login</a>
          <a class="dropdown-item"  ><img class="mr-3" src="ALL Image/phone/order.svg"  width="20px">Order</a>
      
          <a class="dropdown-item" ><img class="mr-3" src="ALL Image/phone/wishlist.svg"  width="20px">Wishlist</a>

           <a class="dropdown-item"  ><img class="mr-3" src="ALL Image/phone/reward.svg" alt=" " width="20px">Rewards</a>
        </div>
      </li>
     </ul>';


     }  
    echo '<form class="form-inline my-2 my-lg-0 mr-3">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>';

include 'signup.php';
include 'login.php';

?>


<!-- Icon -->
<!-- <a href="" class="text-body">
    <i class="fas fa-envelope fa-2x"></i>
    <span class="badge rounded-pill badge-notification bg-danger">9</span>
</a> -->
