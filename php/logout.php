<?php
 session_start();

  echo "Logout Successfully ";
  session_destroy();   // function that Destroys Session 
  echo '<script type="text/javascript"> window.open("../index.php","_self");</script>' ;
?>