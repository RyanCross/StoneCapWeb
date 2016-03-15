<!DOCTYPE html>
<html>
<head>
	<title>Terrachi Game</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<head/>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="home.php">Terrachi Game</a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="nav-collapse">
			<ul class="nav navbar-nav">
				<li><a href="tls-game.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<?php if ($logged_in) { ?><li><a href="logout.php">Logout</a></li><?php } ?>
				<?php if (!$logged_in) { ?>
					<li><a href="login.php">Login</a></li>
				<?php } ?>
			</ul>
        </div>
	</div>
</nav>
