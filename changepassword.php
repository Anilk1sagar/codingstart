<?php
    if(isset($_GET['key']) && isset($_GET['reset'])) {

        include 'includes/dbh.inc.php';

        $email=$_GET['key'];
        $pwd=$_GET['reset'];
        //Check if right user enter
        $sql = "SELECT user_email, user_pwd FROM users WHERE user_email='$email' AND user_pwd='$pwd'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck == 1) { ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>CodingStart | Change Password</title>
                <link rel="icon" type="image/png" href="images/favicon.png" />
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta http-equiv="X-UA-Compatible" conent="IE=edge">
                <meta name="description" content="" />
                <!--for searching and indexing-->
                <meta name="robots" content="index,follow" />
                <!--Links for css -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                <link rel="stylesheet" type="text/css" href="css/animate.css">
                <link rel="stylesheet" type="text/css" href="css/style.css">
                <link rel="stylesheet" type="text/css" href="css/download.css">
                <link rel="stylesheet" type="text/css" href="css/MediaQuery.css">
                <link rel="stylesheet" href="css/jquery.materialripple.css">
                <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
            </head>
            <body>
                <?php include_once 'header.php'; ?>
                <!-- Main container-->
                <div class="container" style="background-color: #ebebeb";>
                    <div class="changepwd_wrapper">
                        <div class="plugin-box" style="padding: 20px;">
                            <h5 style="color: #333;margin-bottom: 20px;">Change Password</h5>
                            <form action="includes/updatepassword.inc.php" method="POST">
                                <div class="field">
                                    <input type="hidden" name="email" value="<?php echo $email;?>">
                                    <input type="password" name="pwd" class="input_field" required>
                                    <span class="bar"></span>
                                    <span class="label">New Password</span>
                                </div><br><!-- End Form-group-->
                                <input type="submit" name="submit" value="Change Password" class="submit_btn">
                            </form>
                        </div>
                    </div>
                </div>
            </body>
            </html>
        <?php }
    } else {
        header("Location: login.php");
        exit();
    }
?>




<a href="http://localhost:4200/password_reset?key=${email}&reset=${user.password}">Click here to reset your password</a>