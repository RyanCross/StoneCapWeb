<?php
	// First, make sure we are on HTTPS, if not, switch to that
	//if (!$_SERVER['HTTPS']) header('location: https://babbage.cs.missouri.edu/~cs3380f14grp10');

	// Second, make sure we are not already logged in, if so, redirect to home.php, if not, display the login form
	session_start();
	$logged_in = empty($_SESSION['login']) ? false : $_SESSION['login'];

  include_once("util/header.php");
?>

<div id="header">

  <!-- Navbar -->
  <nav class="navbar navbar-terrachi" role="navigation">
  	<div class="container-fluid">
  		<div class="navbar-header">
  			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse">
  				<span class="sr-only">Toggle navigation</span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  			</button>
  		</div>
  		<div class="collapse navbar-collapse" id="nav-collapse">
  			<ul class="nav navbar-nav">
  				<li><a href="index.php">Home</a></li>
  			</ul>
  			<ul class="nav navbar-nav navbar-right">
  				<?php if ($logged_in) { ?><li><a href="logout.php">Logout</a></li><?php } ?>
  				<?php if (!$logged_in) { ?>
  					<li><a href="login.php">Login</a></li>
  				<?php } ?>
  			</ul>
      </div>
  	</div>
  </nav>

  <div class="jumbotron">
    <h1>Terrachi</h1>
  </div>
</div>

<div class="container">

  <!-- About the game -->
  <div class="row">
    <div class="col-xs-12 col-sm-5"><img src="" /></div>
    <div class="col-xs-12 col-sm-7">
      <h2>About Terrachi</h2>
      <p>Lorem ipsum</p>
    </div>
  </div>

  <!-- Carousel -->

  <!-- About the team -->

</div>

<?php
  include_once("util/footer.php");
?>
