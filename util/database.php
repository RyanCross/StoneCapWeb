<?php
   /*
                       //////// NOTICE /////////
   These variables are used for development in the cloud9 dev. environment only,
   and must be changed once hosting has moved locations.
   */

   $host = "us-cdbr-azure-east-a.cloudapp.net";
   $user = "b0300454e18c04";
   $pass = "8102aa3d";
   $db = "terrachi_db";
   $port = 3306;

   //Connect to the database:
   $db = mysqli_connect($host, $user, $pass, $db, $port) or die("Database error " . mysql_error()); //connect to database, else generate error onto screen.
   //$db is now an object of the class mysqli, which represents a connection between PHP and a database.


  // if ($db != null)
   //echo "<br><br><h1> Connected to Database. </h1> ";

?>
