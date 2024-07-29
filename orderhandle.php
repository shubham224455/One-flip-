<?php
session_start();
  include "dbconnected.php";


 if($_SERVER["REQUEST_METHOD"]=="POST"){
     $p_id=$_GET["product_id"]; 
      $user_id=$_SESSION["user_id"];

    $sql="SELECT * FROM `user_table` WHERE user_id=$user_id";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
           $phone=$row["user_no"];
           $name=$row["user_name"];
           $address=$row["user_location"];

       if($address==NULL || $phone==NULL){
          header("location:/shopping website/order.php?valuenull=true");  
          exit();
       }
       
       $sql1="INSERT INTO `order_table`(`user_id`, `product_id`, `phone_no`,`order_address`, `tstamp`) 
              VALUES ('$user_id','$p_id','$phone','$address',current_timestamp())";
       $result1=mysqli_query($conn,$sql1);
       if($result1){

         header("location:/shopping website/index.php?ordersuccess=true");
        //  echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        //  <strong>Well done!</strong> You should Placead order successfuly.
        //  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //      <span aria-hidden="true">&times;</span>
        //  </button>
        //  </div>';
       }
    }

 }

?>