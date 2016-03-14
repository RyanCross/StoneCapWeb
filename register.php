<?php
	// First, make sure we are on HTTPS, if not, switch to that
	//if (!$_SERVER['HTTPS']) header('location: https://babbage.cs.missouri.edu/~cs3380f14grp10');

	// Second, make sure we are not already logged in, if so, redirect to home.php, if not, display the registration form
	session_start();
	$logged_in = empty($_SESSION['login']) ? false : $_SESSION['login'];
	if ($logged_in) header('location: tls-game.php');

	// Third, see if the form was already submitted, and if so, check information
	if (isset($_POST['submit'])){
    $email = $_POST['email'];
		$password = $_POST['password'];
		$c_password = $_POST['c_password'];
		// Prevent the addition of html special characters
		$email = htmlspecialchars($email);
		$password = htmlspecialchars($password);
		$c_password = htmlspecialchars($c_password);

		if ($password !== $c_password) $c_password_error = true; // Make sure password and confirm password are the same

		// Connect to the database
		include("util/database.php");

		// Make sure that the league is available (does not already exist)
    $query = "SELECT email FROM terrachi_db.authentication WHERE email=".$email;
		$res = $db->query($query) or die("Email check error");
    $res = $res->fetch_assoc();
		if (count($res) > 0) $email_error = true;

		if (!$c_password_error && !$email_error){
			mt_srand(); // Seed number generator
			$salt = mt_rand();
			$hash = sha1($salt . $password);

			// Insert appropriate data into authentication user info, this must be first as authentication depends on this!
      $query = "INSERT INTO terrachi_db.authentication VALUES (".$email.",".$hash.",".$salt.");";
      $res = $db->query($query) or die("User account creation error");

			// Start session and redirect to home.php
			session_start();
			$_SESSION['login'] = $email;
			header('location: tls-game.php');
		}

	}

	// Display the login form
	include_once('util/head.php');

?>
<div class="container">
	<div class="page-header">
		<h1>Register</h1>
	</div>
	<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" >
		<div class="form-group <?php if ($email_error) echo 'has-error'; ?>">
			<label for="email" class="control-label">Email</label>
			<input id="email" type="text" name="email" class="form-control" value="<?php echo $email; ?>" required>
			<?php if ($email_error) echo '<p class="help-block">There is already an account with this league!</p>'; ?>
		</div>
		<div class="form-group">
			<label for="password" class="control-label">Password</label>
			<input id="password" type="password" name="password" class="form-control" required>
		</div>
		<div class="form-group <?php if ($c_password_error) echo 'has-error'; ?>">
			<label for="c_password" class="control-label">Confirm Password</label>
			<input id="c_password" type="password" name="c_password" class="form-control" required>
			<?php if ($c_password_error) echo '<p class="help-block">This field did not match your password field!</p>'; ?>
		</div>
        <input type="submit" name="submit" class="btn btn-success" value="Register" />
		<a href="index.php" class="btn btn-default">Login</a>
	</form>
</div>
<?php
	include_once('util/footer.php');
?>
