<?php

ob_start();
error_reporting(0);
$hostname="localhost";
$username="root";	
$password="";
$dbname="lobaton";

$connect=mysql_connect("$hostname","$username","$password") or die("Unable to connect to Database server");

$dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password,array(PDO::ATTR_AUTOCOMMIT, FALSE)); 
$connect_db=mysql_select_db($dbname,$connect) or die("Unable to select database");
$mysqli = new mysqli("$hostname","$username","$password", $dbname);

?>