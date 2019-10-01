<?php

$dbhost 	= "localhost";
$dbname		= "dbmsproject";
$dbuser		= "user";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

?>
