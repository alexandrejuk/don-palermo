<?php
$host = "localhost";
$db   = "db_pizza";
$user = "root";
$pass = "";
 
$conecta = mysql_connect("$host", "$user", "$pass")or print (mysql_error());
mysql_select_db($db);
?>