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
        <a href="buy.php" class="btn btn-header">Buy</a>
      </div>
      <div class="col-xs-2 col-xs-offset-8">
        <?php if ($logged_in) { ?><a href="logout.php" class="btn btn-header">Logout</a><?php } ?>
        <?php if (!$logged_in) { ?>
          <a href="login.php" class="btn btn-header">Login</a>
        <?php } ?>
      </div>
    </div>
    </div>

    <h1><img class="img-responsive" src="img/logodark.png" /></h1>
  </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2">

			<br>

		  <!-- About the game -->
		  <div class="row">
		    <div class="col-xs-12 col-sm-2"><img src="img/run1.png" class="img-responsive pull-right"/></div>
		    <div class="col-xs-12 col-sm-10">
		      <h2>About Terrachi</h2>
		      <p>
		        On the first day of the Season of Growth, the kodama gather to send off their
		        finest warriors. As the ceremony is taking place, suddenly a darkness falls
		        across the village. The Grey has found the kodama's home and begin to harvest
		        the last remains of the Green. As chaos erupts and the village falls, one young
		        kodama deemed unfit for the expedition sees a vulnerable sapling on the ground
		        and in a moment of panic, picks it up and flees the destruction.
		      </p>
		    </div>
		  </div>

			<br><br>

			<!-- Carousel -->
			<div id="screenshots" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#screenshots" data-slide-to="0" class="active"></li>
			    <li data-target="#screenshots" data-slide-to="1"></li>
					<li data-target="#screenshots" data-slide-to="2"></li>
			    <li data-target="#screenshots" data-slide-to="3"></li>
					<li data-target="#screenshots" data-slide-to="4"></li>
					<li data-target="#screenshots" data-slide-to="5"></li>
					<li data-target="#screenshots" data-slide-to="6"></li>
					<li data-target="#screenshots" data-slide-to="7"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="img/playing1.png">
			    </div>
					<div class="item">
			      <img src="img/introtext.png">
			    </div>
					<div class="item">
			      <img src="img/ghost.png">
			    </div>
					<div class="item">
			      <img src="img/grappling.png">
			    </div>
					<div class="item">
			      <img src="img/play2.png">
			    </div>
					<div class="item">
			      <img src="img/play3.png">
			    </div>
					<div class="item">
			      <img src="img/pause.png">
			    </div>
					<div class="item">
			      <img src="img/play4.png">
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#screenshots" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#screenshots" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

			<br>


		  <!-- About the team -->
			<h2>Meet the team</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="thumbnail" style="border: none">
							<img class="img-responsive img-circle" src="img/ryan.png" />
							<div class="caption text-center">
									<h3>Ryan Cross</h3>
									<p>Level Designer, Player Mechanics and Movement</p>
							</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="thumbnail" style="border: none">
							<img class="img-responsive img-circle" src="img/tama.jpg" />
							<div class="caption text-center">
									<h3>Tama Chakrabarty</h3>
									<p>Creative Director, Animator, Artist</p>
							</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="thumbnail" style="border: none">
							<img class="img-responsive img-circle" src="img/qi.jpg" />
							<div class="caption text-center">
									<h3>Qi Yu</h3>
									<p>Security Architect, Web Developer</p>
							</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="thumbnail" style="border: none">
							<img class="img-responsive img-circle" src="img/nick.jpg" />
							<div class="caption text-center">
									<h3>Nicholas Cappo</h3>
									<p>UX Director, API Developer</p>
							</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="thumbnail" style="border: none">
							<img class="img-responsive img-circle" src="img/mike.jpg" />
							<div class="caption text-center">
									<h3>Mike Henke</h3>
									<p>Lead AI Developer, Mechanic Implementation</p>
							</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="thumbnail" style="border: none">
							<img class="img-responsive img-circle" src="img/dillon.png" />
							<div class="caption text-center">
									<h3>Dillon Byrne</h3>
									<p>Composer, Sound Design, Mechanic Implementation</p>
							</div>
					</div>
				</div>
			</div>



		</div>
	</div>
</div>

<?php
  include_once("util/footer.php");
?>
