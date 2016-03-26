<?php
	// First, make sure we are on HTTPS, if not, switch to that
	//if (!$_SERVER['HTTPS']) header('location: https://babbage.cs.missouri.edu/~cs3380f14grp10');

	// Second, make sure we are not already logged in, if so, redirect to home.php, if not, display the login form
	session_start();
	$logged_in = empty($_SESSION['login']) ? false : $_SESSION['login'];

  include_once("util/header.php");
?>

<div id="header">
<div id="gray-background">
  <!-- Navbar -->
  <div class="container-fluid">
  <div class="row" id="nav">
    <div class="col-xs-2">
      <a href="index.php" class="btn btn-header">Home</a>
    </div>
    <div class="col-xs-2 col-xs-offset-8">
      <?php if ($logged_in) { ?><a href="logout.php" class="btn btn-header">Logout</a><?php } ?>
      <?php if (!$logged_in) { ?>
        <a href="login.php" class="btn btn-header">Login</a>
      <?php } ?>
    </div>
  </div>
  </div>

  <h1>Terrachi</h1>
</div>
</div>

<div class="container">

  <!-- About the game -->
  <div class="row">
    <div class="col-xs-12 col-sm-6"><img src="img/kodama256.png" class="img-responsive pull-right"/></div>
    <div class="col-xs-12 col-sm-6">
      <h2>About Terrachi</h2>
      <p>
        On the first day of the Season of Growth, the kodama gather to send off their 
        finest warriors. As the ceremony is taking place, suddenly a darkness falls
        across the village. The Grey has found the kodama’s home and begin to harvest
        the last remains of the Green. As chaos erupts and the village falls, one young
        kodama deemed unfit for the expedition sees a vulnerable sapling on the ground
        and in a moment of panic, picks it up and flees the destruction.
      </p>
    </div>
  </div>

  <!-- Carousel -->

  <!-- About the team -->

</div>

<?php
  include_once("util/footer.php");
?>
