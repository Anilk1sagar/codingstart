<?php
include 'dbh.inc.php';

if (isset($_POST['submit'])) {

	$title =  mysqli_real_escape_string($conn, $_POST['title']);
	$img_link =  mysqli_real_escape_string($conn, $_POST['img_link']);
	$description =  mysqli_real_escape_string($conn, $_POST['description']);
	$k_features =  mysqli_real_escape_string($conn, $_POST['k_features']);
	$download_link =  mysqli_real_escape_string($conn, $_POST['download_link']);
	$demo_link =  mysqli_real_escape_string($conn, $_POST['demo_link']);

	$sql = "SELECT * FROM posts WHERE p_title='$title' OR p_description='$description' OR p_downloadLink='$download_link' OR p_demoLink='$demo_link';";
	$result = mysqli_query($conn, $sql);
	$resultcheck = mysqli_num_rows($result);

	if ($resultcheck > 0) {
		echo "Post is already exist.";
		exit();
	} else {
		$sql = "INSERT INTO posts (p_title,  p_imgLink, p_description, p_keyFeatures, p_downloadLink, p_demoLink)
			VALUES ('$title',  '$img_link', '$description', '$k_features', '$download_link', '$demo_link');";
		if (mysqli_query($conn, $sql)) {
			header("Location: ../index.php?post=success");
		}
	}
}