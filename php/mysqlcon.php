<?php
 
//Host IP
$hostip = "localhost";
//user
$user = "<dbuser>";
//password
$passwd = "<dbpasswd>";
//Database Name
$db = "<dbname>";
 
$mysqli = new mysqli($hostip,$user,$passwd,$db);

if (mysqli_connect_errno()) { 
	exit();
}
?>