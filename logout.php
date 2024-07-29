<?php
   session_start();
   echo "Logging You out. Pleace wait....";
   session_destroy();
   header("Location: /shopping website/index.php");
?>