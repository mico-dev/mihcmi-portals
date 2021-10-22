<?php
if((isset($_SERVER['HTTP_HOST'])) AND $_SERVER['HTTP_HOST'] == 'localhost' OR $_SERVER['HTTP_HOST'] == '127.0.0.1' OR $_SERVER['HTTP_HOST'] == '10.100.22.105') {
	$user = 'root';
	$password = '2125';
	$host = 'localhost';
	$database  = 'db_md';
} else {
	$user = 'metro2013';
	$password = 'mihmci2013';
	$host = 'localhost';
	$database  = 'db_md';
}
	$con = new mysqli($host, $user, $password, $database) or die(mysqli_connect_error());
	$set = $con->query("SET NAMES utf8");	 
	if ($con -> connect_errno) {
	echo "Failed to connect to MySQL: " . $con -> connect_error;
	exit();
}
?>
