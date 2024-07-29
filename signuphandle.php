<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
   include "dbconnected.php";
   $name=$_POST["name"];
   $number=$_POST["phone"];
   $pass=$_POST["Password"];
   $cpass=$_POST["cpassword"];
   $addres=$_POST["loc"];

   $sqlexits="SELECT * FROM `user_table` WHERE user_no='$number'";
   $result=mysqli_query($conn,$sqlexits);
   $row=mysqli_num_rows($result);

   if($row>0){
    header("location:/shopping website/index.php?noexits=true");
   }else{
        if($pass==$cpass){
            $hash=password_hash($pass,PASSWORD_DEFAULT);
            $sql="INSERT INTO `user_table` (`user_no`,`user_name`,`user_location`,`user_pass`, `tstamp`) 
            VALUE('$number','$name','$addres','$hash',current_timestamp())";
            
            $result=mysqli_query($conn,$sql);
                          
                if($result){
                    $showAlert=true;
                    header("location:/shopping website/index.php?signupsuccess=true");
                    exit();
                }

            }else{
              header("location:/shopping website/index.php?same=false");
            } 
    }
     
  }
  ?>