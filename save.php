<?php
  $name = $_POST["ztext2"];
  $page_id = $_POST["page_id"];
  $text_comment = $_POST["otext2"];
  $email = $_POST["ztext3"];
  
  
    
                                                                                         
  $name = htmlspecialchars($name);
  $text_comment = htmlspecialchars($text_comment);
  $email = htmlspecialchars($email);
  $today = date("y-m-d");
  $mysqli = new mysqli("localhost", "root", "", "b");
  $mysqli->query("INSERT INTO `suc` (`name`, `page_id`, `text_comment`, `date`,`email`) VALUES ('$name', '$page_id', '$text_comment','$today','$email')");
  echo '<script type="text/javascript"> window.open("index.php","_top");</script>';
?>
