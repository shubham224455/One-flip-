<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "dbconnected.php";
    $user_no=$_POST["phone"];
    $pass=$_POST['Password'];
            
    $sql="SELECT * FROM `user_table` WHERE user_no='$user_no'";

        $result=mysqli_query($conn,$sql);
        $numRows=mysqli_num_rows($result);
            if($numRows==1){
                $row=mysqli_fetch_assoc($result);
                if(password_verify($pass,$row['user_pass'])){
                    session_start();
                    $_SESSION['logined']=true;
                    $_SESSION['user_id']=$row['user_id'];
                    $_SESSION['user_name']=$row['user_name'];
                    
                    header("Location:/shopping website/index.php?loginsuccess=true");

                }else{
                    header("Location:/shopping website/index.php?loginsuccess=false");
                }
            }else{
                header("Location:/shopping website/index.php?no=false");
            }
        
    }

?>