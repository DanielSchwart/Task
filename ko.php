<?php
$conf = parse_ini_file('conf.ini');

mysql_connect($conf['mysql_host'],$conf['mysql_user'],$conf['mysql_password']) or die('Ошибка подключения к базе данных');
mysql_select_db($conf['mysql_database']) or die('Ошибка подключения к базе данных');

?>