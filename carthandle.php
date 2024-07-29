<?php
session_start();
include "dbconnected.php";
$cartlogin=false;


  if(isset($_SESSION['logined']) && $_SESSION['logined']=="true"){
    $user_id=$_SESSION["user_id"];
    $pro_id=$_GET["pro_id"];
    
   $sqlexit="SELECT * FROM `cart` WHERE user_id=$user_id AND product_id=$pro_id";
   $result1=mysqli_query($conn,$sqlexit);
   
   $row=mysqli_num_rows($result1);
    if($row>0){
      header("location:/shopping website/cartproduct.php?cartduplicate=false");
     
    }else{


    $sql="INSERT INTO `cart` ( `user_id`, `product_id`, `tstamp`) VALUES ('$user_id','$pro_id',current_timestamp())";
    $result=mysqli_query($conn,$sql);
            if($result){
               
                header("location:/shopping website/cartproduct.php?cartsuccess=true");
                
            }else{
            echo "Check kar sql";
            }
    }
}else{
header("location:/shopping website/index.php?cartsuccess=false");
  
}
?>