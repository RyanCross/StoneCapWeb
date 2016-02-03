<?php
if( isset($_POST['logout']) )
    {
        session_destroy();
        header("Location: /views/login.php");
    }

?>