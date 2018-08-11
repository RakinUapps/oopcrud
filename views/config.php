<?php
//Database credentails
$host='localhost';
$db='oopcrud';
$db_user='root';
$db_password='';

//db connection
mysql_connect($host,$db_user,$db_password) or die ("Connection Failed".mysql_error());
//db selection
mysql_select_db($db) or die("DB Selection Error:".mysql_error());
?>