<?php
 
$dbhost="localhost";
$dbusuario="THE_USER";
$dbpassword="THE_PWD";
$db="THE_BD";
$conexion = mysql_connect($dbhost, $dbusuario, $dbpassword)or die('No se puede conectar a la base de datos!!');
mysql_select_db($db);
mysql_set_charset('utf8',$conexion);
//date_default_timezone_set("America/Mexico_City");
//SET GLOBAL time_zone = "America/Mexico_City";

?>