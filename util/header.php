<!DOCTYPE html>
<html>
<head>
	<title>Terrachi Game</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/style.css">
<head/>
<body>

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
