<?php
// Connect to the database
include("util/database.php");

if (isset($_POST['key'])){
    $key = htmlspecialchars($_POST['key']);
    $serial_key = md5($logged_in.$buy_date);
    //print $serial_key;
    $query = "SELECT activated,serial_key FROM terrachi_db.game_status WHERE serial_key='".$key."';";
    //print $query;
    $res = $db->query($query) or die("Activation error ". $db->error);

    if ($res->num_rows == 0) {
      print '0';
    } else {
      $row = $res->fetch_assoc();

      if($row['activated'] == true){
        print '0';
      } else {
        $activated_date = time();
        $query = "UPDATE terrachi_db.game_status SET activated=TRUE,activation_date=".$activated_date." WHERE serial_key='".$key."';";
        $res = $db->query($query) or die("Activation error 2". $db->error);

        print '1';
      }
    }
} else {
  print '0';
}

?>
