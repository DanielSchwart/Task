<?php
  $name = $_POST["name"];
  $page_id = $_POST["page_id"];
  $text_comment = $_POST["text_comment"];
  $email = $_POST["email"];
 
  
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Адрес указан корректно.";
              }else{
      echo "Адрес указан не правильно.";
                                                                                         }
  $name = htmlspecialchars($name);
  $text_comment = htmlspecialchars($text_comment);
  $email = htmlspecialchars($email);
  $today = date("y-m-d");
  $mysqli = new mysqli("localhost", "root", "", "b");
  $mysqli->query("INSERT INTO `comments` (`name`, `page_id`, `text_comment`, `date`,`email`) VALUES ('$name', '$page_id', '$text_comment','$today','$email') ");
  echo '<script type="text/javascript"> window.open("index.php","_top");</script>';
?>

