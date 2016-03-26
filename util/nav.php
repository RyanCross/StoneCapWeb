<div id="header-secondary">
  <div id="gray-background">
    <!-- Navbar -->
    <div class="container-fluid">
    <div class="row" id="nav">
      <div class="col-xs-2">
        <a href="index.php" class="btn btn-header">Home</a>
      </div>
      <div class="col-xs-2">
        <a href="buy.php" class="btn btn-header">Buy</a>
      </div>
      <div class="col-xs-2 col-xs-offset-6">
        <?php if ($logged_in) { ?><a href="logout.php" class="btn btn-header">Logout</a><?php } ?>
        <?php if (!$logged_in) { ?>
          <a href="login.php" class="btn btn-header">Login</a>
        <?php } ?>
      </div>
    </div>
    </div>
  </div>
</div>
