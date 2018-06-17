<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'Имя пользователя');
  define('DB_PASSWORD', 'пароль');
  define('DB_DATABASE', 'Имя базы');
  $connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
  $database = mysql_select_db(DB_DATABASE) or die(mysql_error());
  mysql_query("SET NAMES utf8");
?>