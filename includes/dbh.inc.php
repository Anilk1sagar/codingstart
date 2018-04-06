<?php
	$dbServername = "localhost";
	$dbUsername = "id780623_code1shop";
	$dbPassword = "16161771";
	$dbName = "id780623_codingstart";

	//Create connection
	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

	//Check connection
	if (!$conn) {
		die("Connection failed! " . mysqli_connect_error());
	}
?>