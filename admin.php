<?php
// First, make sure we are on HTTPS, if not, switch to that
//if (!$_SERVER['HTTPS']) header('location: https://babbage.cs.missouri.edu/~cs3380f14grp10');
// Second, make sure we are not already logged in, if so, redirect to home.php, if not, display the login form
//session_start();
//$logged_in = empty($_SESSION['login']) ? false : $_SESSION['login'];

include("util/database.php");

// -------------------- Start Qi's work -------------------
// First deal with the donation submission
//$query = "SELECT game_owner, FROM_UNIXTIME(completion_date) completion_date  FROM terrachi_db.game_status WHERE donated=0, completed=1;";
if (isset($_POST['submit'])){
  $donation_date = time();
  //print $buy_date;
  $serial_key = md5($logged_in.$buy_date);
  //print $serial_key;
  $query5 = "UPDATE game_status SET donated=1, donation_date=".$donation_date." WHERE donated=0 AND completed=1;";
  $res = $db->query($query5) or die("Error ". $db->error);
}
// Get number of registered game_status
$query0 = "SELECT COUNT(*) as count FROM game_status WHERE registered=1;";
$registers = $db->query($query0) or die("Error ". $db->error);
$registers = $registers->fetch_assoc();
$registers_num = intval($registers['count']);
// Number of donations so far:
$query1 = "SELECT COUNT(*) as count FROM game_status WHERE donated=1;";
$donations = $db->query($query1) or die("Error ". $db->error);
$donations = $donations->fetch_assoc();
$donations_num = intval($donations['count']);
// Wins that haven't been donated yet
$query3 = "SELECT COUNT(*) as count FROM game_status WHERE completed=1 AND donated=0;";
$wins = $db->query($query3) or die("Error ". $db->error);
$wins = $wins->fetch_assoc();
$wins_num = intval($wins['count']);
//echo array_shift(array_values($array3));

// Some progress bar calculations
// percentage of open games
$wins_percent = (double)$wins_num / (double)$registers_num;
// percentage of validated games
$donations_percent = (double)$donations_num / (double)$registers_num;

include_once("util/header.php");

include_once("util/nav.php");
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
			<h1>Admin Panel</h1>

      <div class="progress">
        <div class="progress-bar progress-bar-success" style="width: <?php print($donations_percent); ?>%;">
          <?php print(intval($donations_percent)); ?>
        </div>
        <div class="progress-bar progress-bar-info" style="width: <?php print($wins_percent); ?>%;">
          <?php print(intval($wins_percent)); ?>
        </div>
      </div>

      <div class="row">

        <div class="col-xs-12 col-sm-6 text-center">
          <small>Donations to Date</small>
          <br>
          <h1><?php print($donations_num); ?></h1>
        </div>

        <div class="col-xs-12 col-sm-6 text-center">
          <small>Non-donated Wins</small>
          <br>
          <h1><?php print($donations_num); ?></h1>
        </div>

      </div>
      <p>Donations: <?php print_r($donations); print(" "+$donations_num); ?></p>
      <p>Wins: <?php print_r($wins); print(" "+$wins_num); ?></p>

      <form method = "POST" action = "<?= $_SERVER[PHP_SELF] ?>">
    	   <input type = "submit" name = "submit" name = "submit" class = "btn btn-success"  value = "Donate"/>
    	</form>

		</div>
	</div>
</div>

<?php
include_once("util/footer.php");
 ?>
