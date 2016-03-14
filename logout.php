<?php
session_start();
$_SESSION = array(); // unset session variables
session_destroy(); // destroy session
header('location: tls-game.php');
?>
