<?php
   /*
                       //////// NOTICE /////////
   These variables are used for development in the cloud9 dev. environment only,
   and must be changed once hosting has moved locations.
   */

   $host = "ryancross-nomil-1571803";
   $user = "ryancross";
   $pass = ""; //no pass
   $db = "nomil";
   $port = 3306;

   //Connect to the database:
   $db = mysqli_connect($host, $user, $pass, $db, $port) or die(mysql_error()); //connect to database, else generate error onto screen.
   //$db is now an object of the class mysqli, which represents a connection between PHP and a database.


  // if ($db != null)
   //echo "<br><br><h1> Connected to Database. </h1> ";

?>
