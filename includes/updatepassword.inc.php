<?php

	if (isset($_POST['submit'])) {
		
		include 'dbh.inc.php';

		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
		//hashing the password (hiding)
		$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
		
		$sql = "UPDATE users SET user_pwd='$hashedPwd' WHERE user_email='$email'";
		$result = mysqli_query($conn, $sql);
		if ($result == true) {
			echo "Your password change successfully!";
		}
	}
?>