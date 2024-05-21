<?php
   error_reporting(0);
   $servername = "127.0.0.1:3300";
   $username = "root";
   $password = "";
   $dbase = "vms";

   $conn = mysqli_connect($servername, $username, $password, $dbase);
   if ($conn) {
   //echo "Connection Successful ";
   }
   else 
   {
       
       echo "Connection Failed ".mysqli_connect_errno();
   }
?>
