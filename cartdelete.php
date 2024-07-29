<?php
  session_start();
  include "dbconnected.php";
  $user_id=$_SESSION["user_id"];
  $pro_id=$_GET["product_id"];

  $sql="DELETE FROM `cart` WHERE user_id=$user_id AND product_id=$pro_id";
        $result=mysqli_query($conn,$sql);
        
        if($result){
          header("location:/shopping website/cartproduct.php?deletesuccess=true");
        }

?>