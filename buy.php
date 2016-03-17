<?php
	// First, make sure we are on HTTPS, if not, switch to that
	//if (!$_SERVER['HTTPS']) header('location: https://babbage.cs.missouri.edu/~cs3380f14grp10');

	// Second, make sure we are not already logged in, if so, redirect to home.php, if not, display the login form
	session_start();
	$logged_in = empty($_SESSION['login']) ? false : $_SESSION['login'];

  // Connect to the database
  include("util/database.php");

  if (isset($_POST['submit'])){
    $buy_date = time();
    print $buy_date;
    $license_key = md5($logged_in.$buy_date);
    print $license_key;
    $query = "INSERT INTO terrachi_db.game_status (license_key, game_owner, buy_date) VALUES ('".$license_key."','".$logged_in."','".$buy_date."');";
    //print $query;
    $res = $db->query($query) or die("Game buy error ". $db->error);
  }

  include_once("util/header.php");
?>

<div class="container">
  <div class="page-header">
    <h1>Buy the game! - <?php print $logged_in; ?></h1>
  </div>

  <?php if ($logged_in) { ?>
  <p>All buys:</p>
  <?php
  $query = "SELECT license_key,buy_date FROM terrachi_db.game_status WHERE game_owner = '".$logged_in."';";
  $res = $db->query($query) or die("Previous purchase check error ". $db->error);
  if ($res->num_rows == 0) {
    print "<p>None!</p>";
  } else {
    $res = $res->fetch_assoc();
    foreach($res as $p){
      print "<p>".$p['license_key']." ".$p['buy_date']."</p>";
    }
  }
  ?>
  <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" >
    <input type="submit" name="submit" class="btn btn-success" value="Buy now!" />
	</form>
  <?php } else { ?>

    <p>You need to be logged in to buy the game. Log in <a href="login.php">here</a>!</p>

  <?php } ?>

</div>

<?php
  include_once("util/footer.php");
 ?>
