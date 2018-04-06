<?php
    if(isset($_POST['submit'])) {
        require 'PHPMailer/PHPMailerAutoload.php';

        function sendmail($to, $from, $fromName, $message) {
            $mail = new PHPMailer();
            $mail->setFrom($from, $fromName);
            $mail->addAddress($to);
            $mail->Subject = 'CodingStart.in - Contact Form';
            $mail->Body = $message;
            $mail->isHTML(false);

            return $mail->send();
        }

        $to = 'code1shop@gmail.com';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $body = $_POST['message'];

        if(sendmail($to, $email, $name, $body)) { ?>
            <script type="text/javascript">
                alert('Thank you for the Feedback Message. We will contact you shortly.');
            </script>
        <?php
        } else { ?>
            <script type="text/javascript">
                alert('Message not sent. Please, try again');
            </script>
        <?php
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Contact Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <center><h2>PHP Contact Form</h2></center>
    <div class="container">
        <h5>Contact us</h5><br>
        <form action="index.php" method="POST">
            <div class="field">
                <input type="text" name="name" class="input_field" required>
                <span class="bar"></span>
                <span class="label">Name</span>
            </div><br>
            <div class="field">
                <input type="email" name="email" class="input_field" required>
                <span class="bar"></span>
                <span class="label">Email</span>
            </div><br>
            <div class="field">
                <textarea name="message" class="textarea_field" required></textarea>
                <span class="bar"></span>
                <span class="label">Message</span>
            </div>
            <div>
                <span style='margin-top: 9%; float: left; font-size: 12px; color: #444;'>(Will connect back soon.)</span>
                <input type="submit" name="submit" value="Send" class="submit_btn">
            </div>
        </form>
    </div>
</body>
</html>