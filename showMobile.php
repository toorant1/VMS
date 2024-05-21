<?php
 include("connection.php");
 echo "connection done ";
?>

<?php

   $k = $_POST['name'];
   echo ("dsfsf");
   $sql = "Select * from master_client";
   $res = mysqli_query($conn, $sql);
   while ($row = mysqli_fetch_array($res)) {

    echo $sql;
    ?>

    <label >dfgdfgdfgfggf </label>

    
    <?php
    echo $sql;
   }
   
   
   
   
   
   
   
?>
