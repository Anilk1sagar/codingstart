<?php
    session_start();
    $msg = $err = "";
    //for login
    if (isset($_GET['error'])) {
        
        $usernameErr = $_GET['error'];
        $pwdErr = $_GET['error'];

        //for login errors
        if ($usernameErr == 'username') {
            $err = "Please check your username and try again.";
        }
        if ($pwdErr == 'password') {
            $err = "Please check your password and try again.";
        }
    }
    //for Signup
    if (isset($_GET['signup'])) {
        $nameErr = $_GET['signup'];
        $emailErr = $_GET['signup'];
        $usernameErr = $_GET['signup'];
        $signupSuccess = $_GET['signup'];

        //for Sign up errors
        if ($nameErr == 'invalid') {
            $err = "Please enter a valid name";
        }
        if ($emailErr == 'email') {
            $err = "Please enter a valid Email address";
        }
        if ($usernameErr == 'usernametaken') {
            $err = "Username already taken!";
        }
        if ($emailErr == 'success') {
            $msg = "Registration Successfull! you can now login.";
        }
    }
    
    if (isset($_SESSION['u_id'])) {
        header("Location: index.php");
        exit();
    } else { ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>CodingStart | Login & Register</title>
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
            <div class="container">
                <?php echo "<h5 class='text-center' style='color: green;'>" .$msg. "</h5>"; ?>
                <?php echo "<h5 class='text-center text-danger'>" .$err. "</h5>"; ?>
                <div class="row">
                    <div class="col-lg-5 col-sm-5">
                        <h3 class="text-center">Login</h3>
                        <div class="plugin-box" style="padding: 20px;">
                            <form action="includes/login.inc.php" method="POST">
                                <div class="field">
                                    <input type="text" name="username" class="input_field" required>
                                    <span class="bar"></span>
                                    <span class="label">Username/E-mail</span>
                                </div><br><!-- End Form-group-->
                                <div class="field">
                                    <input type="password" name="pwd" class="input_field" required>
                                    <span class="bar"></span>
                                    <span class="label">Password</span>
                                </div><br><!-- End Form-group-->
                                <input type="submit" name="submit" value="Login" class="submit_btn">
                            </form>
                        </div><br>
                        <!--Forget Password form-->
                        <div class="plugin-box" style="padding: 20px;">
                            <h5 style="color: #333;margin-bottom: 20px;">Forget Password</h5>
                            <form action="includes/forget.inc.php" method="POST">
                                <div class="field">
                                    <input type="email" name="email" class="input_field" required>
                                    <span class="bar"></span>
                                    <span class="label">Email</span>
                                </div><br><!-- End Form-group-->
                                <input type="submit" name="submit" value="Recover Password" class="submit_btn">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-5">
                        <h3 class="text-center">Register</h3>
                        <div class="plugin-box" style="padding: 20px;">
                            <form action="includes/signup.inc.php" method="POST">
                                <div class="field">
                                    <input type="text" name="name" class="input_field" required>
                                    <span class="bar"></span>
                                    <span class="label">Name</span>
                                </div><br><!-- End Form-group-->
                                <div class="field">
                                    <input type="email" name="email" class="input_field" required>
                                    <span class="bar"></span>
                                    <span class="label">Email</span>
                                </div><br><!-- End Form-group-->
                                <div class="field">
                                    <input type="text" name="username" class="input_field" required>
                                    <span class="bar"></span>
                                    <span class="label">Username</span>
                                </div><br><!-- End Form-group-->
                                <div class="field">
                                    <input type="password" name="pwd" class="input_field" required>
                                    <span class="bar"></span>
                                    <span class="label">Password</span>
                                </div><br><!-- End Form-group-->
                                <input type="submit" name="submit" value="Register" class="submit_btn">
                            </form>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 15%;"></div>
            </div>

            <?php include_once 'footer.php'; ?>
        </body>
        </html>
    <?php }
?>