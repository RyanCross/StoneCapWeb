<?php
	// First, make sure we are on HTTPS, if not, switch to that
	//if (!$_SERVER['HTTPS']) header('location: https://babbage.cs.missouri.edu/~cs3380f14grp10');

	// Second, make sure we are not already logged in, if so, redirect to home.php, if not, display the login form
	session_start();
	// $logged_in = empty($_SESSION['login']) ? false : $_SESSION['login'];

  include_once("util/header.php");
  include("util/database.php");
?>

<h3>1. Total number of trees planted to date</h3>
<h4>
<?php
	$query1 = "SELECT COUNT(*) FROM game_status WHERE completion_date > donation_date;";
	$res1 = $db->query($query1) or die("Error ". $db->error);
	$array1 = $res1->fetch_assoc();
	// foreach($array1 as $key => $value)
// 		echo $value;
	echo array_shift(array_values($array1));
?>
</h4>

<h3>2. Total amount of money that has donated as of last donation date</h3>
<h4>
<?php
	$query2 = "SELECT COUNT(*) * 10 FROM game_status WHERE completion_date > donation_date;";
	$res2 = $db->query($query2) or die("Error ". $db->error);
	$array2 = $res2->fetch_assoc();
	echo array_shift(array_values($array2));
?>
</h4>

<h3>3. Total number of players who have beaten the game since last donation date</h3>
<h4>
<?php
	$query3 = "SELECT COUNT(*) FROM game_status WHERE completion_date > (SELECT MAX(donation_date) FROM game_status);";
	$res3 = $db->query($query3) or die("Error ". $db->error);
	$array3 = $res3->fetch_assoc();
	echo array_shift(array_values($array3));
?>
</h4>

<h3>4. Current amount of money to be donated to charity</h3>
<h4>
<?php
	$query4 = "SELECT COUNT(*) * 10 FROM game_status WHERE completion_date > (SELECT MAX(donation_date) FROM game_status);";
	$res4 = $db->query($query4) or die("Error ". $db->error);
	$array4 = $res4->fetch_assoc();
	echo array_shift(array_values($array4));
?>
</h4>

<h3>< a href=" ">Update Donation Statistics</ a><h3>
	
<?php
	$query = "SELECT game_owner, FROM_UNIXTIME(completion_date) completion_date  FROM terrachi_db.game_status where donated=0 and completed=1;";
	$res = $db->query($query) or die("Error ". $db->error);
	// $res = $res->fetch_assoc();
	// print_r($res);
	// foreach($res as $key => $value)
	// 	print_r($i);
	// 	echo $key;
	// 	print_r($value);
	// 	foreach($value as $subkey => $subvalue)
	// 		echo $subvalue;
// $game_owner = intval($res['game_owner']);
// $completion_date = intval($res['completion_date']);

?>

<?php
  include_once("util/footer.php");
?>