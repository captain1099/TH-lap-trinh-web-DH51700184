<?php
$server_username 	= "root";
	$server_password 	= "";
	$server_host		= "localhost:3308";
	$database			= "linhkien";

	$conn = mysqli_connect($server_host, $server_username, $server_password, $database) or die ("Can't connect to database");
	mysqli_query($conn,"SET NAMES 'UTF8'");
?>