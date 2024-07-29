<?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="shopping";
 
   $conn=Mysqli_connect($servername,$username,$password,$database);
   if(!$conn){
      die("Error");
   }
?>