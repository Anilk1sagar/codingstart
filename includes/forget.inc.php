<?php
	session_start();

	if (isset($_POST['submit'])) {
		
		include 'dbh.inc.php';
		require '../PHPMailer/PHPMailerAutoload.php';

		$to = mysqli_real_escape_string($conn, $_POST['email']);
		//Check if username exist
		$sql = "SELECT user_email, user_pwd FROM users WHERE user_email='$to'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck == 1) {
			//send email to user with password
			$row = mysqli_fetch_assoc($result);
			$email = $row['user_email'];
		    $pwd = $row['user_pwd'];

			$from = 'code1shop@gmail.com';
			$link="https://www.codingstart.in/changepassword.php?key=".$email."&reset=".$pwd;
			$body = 'Click On This Link to Reset Password '. $link;
			
			//send mail with password
			function sendmail($to, $from, $message) {
	            $mail = new PHPMailer();
	            $mail->setFrom($from);
	            $mail->addAddress($to);
	            $mail->Subject = 'CodingStart.in - Password Recovery';
	            $mail->Body = $message;
	            $mail->isHTML(false);

	            return $mail->send();
        	}
	        
	        if(sendmail($email, $from, $body)) { ?>
	            <script type="text/javascript">
	                alert('A password reset link is sent to your email successfull!');
	            </script>
	        <?php
	        } else { ?>
	            <script type="text/javascript">
	                alert('Email not sent. Please, try again');
	            </script>
	        <?php
	        }

		} else {
			echo "Email does not exist";
			exit();
		}
	}//main if
?>
