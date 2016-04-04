<?php
	// First, make sure we are on HTTPS, if not, switch to that
	//if (!$_SERVER['HTTPS']) header('location: https://babbage.cs.missouri.edu/~cs3380f14grp10');

	// Second, make sure we are not already logged in, if so, redirect to home.php, if not, display the login form
	session_start();
	$logged_in = empty($_SESSION['login']) ? false : $_SESSION['login'];

  // Connect to the database
  include("util/database.php");

  if (isset($_POST['submit'])){
		if ($_POST['invite-code'] === "stonecap"){
			$invite_error = false;
	    $buy_date = time();
	    //print $buy_date;
	    $serial_key = md5($logged_in.$buy_date);
	    //print $serial_key;
	    $query = "INSERT INTO terrachi_db.game_status (serial_key, game_owner, buy_date) VALUES ('".$serial_key."','".$logged_in."','".$buy_date."');";
	    //print $query;
	    $res = $db->query($query) or die("Game buy error ". $db->error);
		} else $invite_error = true;
  }

  include_once("util/header.php");

	include_once("util/nav.php");
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-offset-3">


		<h1>Buy the game! - <?php print $logged_in; ?></h1>

		  <?php if ($logged_in) { ?>
		  <p>All buys:</p>
		  <?php
		  $query = "SELECT serial_key,buy_date FROM terrachi_db.game_status WHERE game_owner = '".$logged_in."';";
		  $res = $db->query($query) or die("Previous purchase check error ". $db->error);
		  if ($res->num_rows == 0) {
		    print "<p class='alert alert-warning'>You have no serial keys!</p>";
		  } else {
				print '
				<table class="table">
					<tr>
						<th>Serial Key</th>
						<th>Purchase Date</th>
						<th>Registered</th>
					</tr>
				';
		    while($row = $res->fetch_assoc()) {
					print '
					<tr class="success">
		      	<td>'.$row['serial_key'].'</td>
						<td>'.$row['buy_date'].'</td>
						<td><span class="glyphicon glyphicon-search" aria-hidden="true"></span></td>
					<tr>
					';
		    }
				print '
				</table>
				';
		  }
		  ?>
		  <form class="form-inline" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" >
				<div class="form-group <?php if ($invite_error) echo 'has-error'; ?>">
					<?php if ($invite_error) echo '<p class="help-block">The invite code you provided was not correct!</p>'; ?>
					<input type="password" class="form-control" name="invite-code" id="invite-code" />
				</div>
		    <input type="submit" name="submit" class="btn btn-success" value="Buy now!" />
			</form>
		  <?php } else { ?>

		    <p>You need to be logged in to buy the game. Log in <a href="login.php">here</a>!</p>

		  <?php } ?>

		</div>
	</div>
</div>

<?php
  include_once("util/footer.php");
 ?>
