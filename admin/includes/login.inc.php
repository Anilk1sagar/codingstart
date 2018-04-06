<?php
	session_start();

	if (isset($_POST['submit'])) {
		
		include_once 'dbh.inc.php';

		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		//Error Handlers
		//Check if inputs are empty
		if (empty($username) || empty($pwd)) {
			echo "Inputs should not be empty";
			exit();
		} else {
			//Check for username Admin
			if ($username == 'Anilk1sagar') {
				$sql = "SELECT * FROM users WHERE user_username='$username' OR user_email='$username'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				if ($resultCheck < 1) {
					//echo "Please check your username and try again.";
					header("Location: ../login.php?error=username");
					exit();
				} else {
					if ($row = mysqli_fetch_assoc($result)) {
						//De-hashing password or checking if same
						$hashPwdcheck = password_verify($pwd, $row['user_pwd']);
						if ($hashPwdcheck == false) {
							//echo "Please check your password and try again.";
							header("Location: ../login.php?error=password");
							exit();
						} else if($hashPwdcheck == true) {
							//Everything ok Login user here
							$_SESSION['u_id'] = $row['user_id'];
							$_SESSION['u_name'] = $row['user_name'];
							$_SESSION['u_email'] = $row['user_email'];
							$_SESSION['u_username'] = $row['user_username'];
							header("Location: ../index.php?login=success");
							exit();
						}
					}
				}
			} else {
				//echo "Please check your password and try again.";
				header("Location: ../login.php?error=username");
				exit();
			}
		}
	}