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

/*
CREATE TABLE posts (
	p_id int(11) not null PRIMARY KEY AUTO_INCREMENT,
	p_title varchar(256) not null,
	p_imgLink text not null,
	p_description text not null,
	p_keyFeatures varchar(256) not null,
	p_downloadLink text not null,
	p_demoLink text not null
);
*/