<?php session_start(); ?>
<?php

    if (isset($_POST['passwordA1'])) { $password=$_POST['passwordA1']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    if (isset($_POST['passwordA2'])) { $password2 = $_POST['passwordA2']; if ($password2 == '') { unset($password2);} }

    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
 $password = stripslashes($password);
    $password = htmlspecialchars($password);
 $password2 = stripslashes($password2);
    $password2 = htmlspecialchars($password2);
    $password = trim($password);
    $$password2 = trim($password2);

 // подключаемся к базе
    include ("../bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
$us = $_SESSION['login_user'];
$result2 = mysql_query("SELECT password FROM users WHERE login='$us'");
while ($row = mysql_fetch_array($result2)){
    if ($row['password'] == $password)
    {
   $update_sql = "UPDATE users SET password='$password2' WHERE login='$us'";
    mysql_query($update_sql);
        echo '<script type="text/javascript"> window.open("../php/session_search_profile.php","_top");</script>';
    }
    if ($row['password'] !== $password)
    {
         echo "<script type='text/javascript'>alert('Неверно введёные данные!')"; 
         echo '<script type="text/javascript"> window.open("../auto.php","_top");</script>';  
    }
 
}
    ?>