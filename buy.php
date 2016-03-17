<?php
	// First, make sure we are on HTTPS, if not, switch to that
	//if (!$_SERVER['HTTPS']) header('location: https://babbage.cs.missouri.edu/~cs3380f14grp10');

	// Second, make sure we are not already logged in, if so, redirect to home.php, if not, display the login form
	session_start();
	$logged_in = empty($_SESSION['login']) ? false : $_SESSION['login'];


  include_once("util/header.php");
?>

<h1>Buy the game! - <?php $email ?></h1>

<button class="btn btn-success">Buy now!</button>

<?php
  include_once("util/footer.php");
 ?>
