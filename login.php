<?php
	// First, make sure we are on HTTPS, if not, switch to that
	//if (!$_SERVER['HTTPS']) header('location: https://babbage.cs.missouri.edu/~cs3380f14grp10');

	// Second, make sure we are not already logged in, if so, redirect to home.php, if not, display the login form
	session_start();
	$logged_in = empty($_SESSION['login']) ? false : $_SESSION['login'];
	if ($logged_in) header('location: tls-game.php');

	// If the from was submitted, process information and log the user in if valid
	if (isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Prevent the addition of html special characters
		$email = htmlspecialchars($email);
		$password = htmlspecialchars($password);

		// Connect to the database
		include("util/database.php");
		//$conn = pg_connect(HOST." ".DBNAME." ".USERNAME." ".PASSWORD) or die("Failed to connect to the database");

		// First, try to find the authentication information for provided league.
    $query = "SELECT email,password_hash,salt FROM terrachi_db.authentication WHERE email = '".$email."';";
    $res = $db->query($query) or die("Email check error ". $db->error);
		if ($res->num_rows == 0) $email_error = true;

		if (!$email_error){
			// Do a local hash of the provided password and fetched salt and then check that hash against the password
			$res = $res->fetch_assoc();
			$salt = intval($res['salt']);
			$check_hash = sha1($salt . $password);

			if ($check_hash == $res['password_hash']){
				// Start session and redirect to home.php
				$_SESSION['login'] = $email;
				header('location: tls-game.php');
			} else {
				$password_error = true;
			}
		}
	}

	// Display the login form
	include_once('util/header.php');

?>
<div class="container">
	<div class="page-header">
		<h1>Login</h1>
	</div>
	<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" >
		<div class="form-group <?php if ($email && $email_error) echo 'has-error'; ?>">
			<label for="email" class="control-label">Email</label>
			<input id="email" type="text" name="email" class="form-control" value="<?php echo $email; ?>" required>
			<?php if ($email && $email_error) echo '<p class="help-block">Sorry, we have no record of this league in our database!</p>'; ?>
		</div>
		<div class="form-group <?php if ($password_error) echo 'has-error'; ?>">
			<label for="password" class="control-label">Password</label>
			<input id="password" type="password" name="password" class="form-control" required>
			<?php if ($password_error) echo '<p class="help-block">The password you provided was not correct!</p>'; ?>
		</div>

    <input type="submit" name="submit" class="btn btn-success" value="Login" />
		<a href="register.php" class="btn btn-default">Register</a>
	</form>
</div>
<?php
	include_once('util/footer.php');
?>
