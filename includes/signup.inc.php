<?php
	if (isset($_POST['submit'])) {
		
		include_once 'dbh.inc.php';

		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		//Error Handlers
		//Check empty fields
		if (empty($name) || empty($email) || empty($username) || empty($pwd)) {
			echo "Field should not be empty";
			//header("Location: ../login.php?signup=empty");
			exit();
		} else {
			//Check if input characters are valid
			if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
				echo "Please enter a valid Name";
				header("Location: ../login.php?signup=invalid");
				exit();
			} else {
				//check if email is valid
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					//echo "Please enter a valid Email address";
					header("Location: ../login.php?signup=email");
					exit();
				} else {
					//Check username if already exist in database
					$sql = "SELECT * FROM users WHERE user_username='$username'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0) {
						//echo "Username already taken!";
						header("Location: ../login.php?signup=usernametaken");
						exit();
					} else {
						//hashing the password (hiding)
						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						//Insert the user in the database if everythings okay
						$sql = "INSERT INTO users (user_name, user_email, user_username, user_pwd) VALUES ('$name', '$email', '$username', '$hashedPwd');";
						mysqli_query($conn, $sql);
						//Signup complete redirecting to signiup page
						//echo "Registration Successfull! you can now login.";
						header("Location: ../login.php?signup=success");
						exit();
					}
				}
			}
		}

	} else {
		header("Location: ../login.php");
		exit();
	}
?>