<?php
   $connection_mysql = mysqli_connect("localhost","root","password","crime_portal");
   
   if (mysqli_connect_errno($connection_mysql)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   mysqli_select_db($connection_mysql,"test");
   mysqli_close($connection_mysql);
?>