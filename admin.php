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
	$query1 = "SELECT COUNT(*) FROM game_status WHERE donated=1;";
	$res1 = $db->query($query1) or die("Error ". $db->error);
	$array1 = $res1->fetch_assoc();
	// foreach($array1 as $key => $value)
	//         echo $value;
	echo array_shift(array_values($array1));
	?>
	</h4>

<h3>2. Total amount of money that has donated as of last donation date</h3>
	<h4>
	<?php
	$query2 = "SELECT COUNT(​*) *​ 10 FROM game_status WHERE donated=1;";
	$res2 = $db->query($query2) or die("Error ". $db->error);
	$array2 = $res2->fetch_assoc();
	echo array_shift(array_values($array2));
	?>
	</h4>

<h3>3. Total number of players who have beaten the game since last donation date</h3>
	<h4>
	<?php
	$query3 = "SELECT COUNT(*) FROM game_status WHERE completed=1 AND donated=0;";
	$res3 = $db->query($query3) or die("Error ". $db->error);
	$array3 = $res3->fetch_assoc();
	echo array_shift(array_values($array3));
	?>
	</h4>

<h3>4. Current amount of money to be donated to charity</h3>
	<h4>
	<?php
	$query4 = "SELECT COUNT(​*) *​ 10 FROM game_status WHERE completed=1 AND donated=0;";
	$res4 = $db->query($query4) or die("Error ". $db->error);
	$array4 = $res4->fetch_assoc();
	echo array_shift(array_values($array4));
	?>
	</h4>
	
<h3> <a href=" ">Update Donation Statistics</a> </h3>
	<form method = "POST" action = "<?= $_SERVER[PHP_SELF] ?>">
	<?php
	$query = "SELECT game_owner, FROM_UNIXTIME(completion_date) completion_date  FROM terrachi_db.game_status WHERE donated=0, completed=1;";
	if (isset($_POST['submit'])){
	if ($_POST['invite-code'] === "stonecap"){
	$invite_error = false;
	$donation_date = time();
	//print $buy_date;
	$serial_key = md5($logged_in.$buy_date);
	//print $serial_key;
	$query5 = "UPDATE game_status SET donated=1, donation_date=1".$donation_date." WHERE serial_key IN;";			  
	$res = $db->query($query) or die("Error ". $db->error);
		}													
	}
	
	?>
	<input type = "submit" name = "submit" name = "submit" class = "btn btn-success"  value = "Donate"/>
	</form>

