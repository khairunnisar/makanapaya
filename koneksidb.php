<?php

$dbserver="localhost";
$dbusername="root";
$dbpassword="";
$dbname="makanapaya";
$conn = mysql_connect($dbserver,$dbusername,$dbpassword);
mysql_select_db($dbname,$conn);
if ($conn) {
} else {
 die ("Koneksi Bermasalah");
}

mysql_connect($dbserver,$dbusername,$dbpassword) or die (mysql_error());
mysql_select_db($dbname) or die (mysql_error());
?>