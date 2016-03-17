<?php
	// First, make sure we are on HTTPS, if not, switch to that
	//if (!$_SERVER['HTTPS']) header('location: https://babbage.cs.missouri.edu/~cs3380f14grp10');

	// Second, make sure we are not already logged in, if so, redirect to home.php, if not, display the login form
	session_start();
	$logged_in = empty($_SESSION['login']) ? false : $_SESSION['login'];


  include_once("util/header.php");
?>

<div class="container">
  <div class="page-header">
    <h1>Buy the game! - <?php $logged_in ?></h1>
  </div>

  <?php if ($logged_in) { ?>
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

    <input type="submit" name="submit" class="btn btn-success" value="Buy now!" />
	</form>
  <?php } else { ?>

    <p>You need to be logged in to buy the game. Log in <a href="login.php">here</a>!</p>

  <?php } ?>

</div>

<?php
  include_once("util/footer.php");
 ?>
