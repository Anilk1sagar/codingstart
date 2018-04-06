<?php
    session_start();
    $err = "";
    //for login
    if (isset($_GET['error'])) {
        
        $usernameErr = $_GET['error'];
        $pwdErr = $_GET['error'];

        //for login errors
        if ($usernameErr == 'username') {
            $err = "Please check your admin username and try again.";
        }
        if ($pwdErr == 'password') {
            $err = "Please check your admin password and try again.";
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
            <title>CodingStart | Admin Login</title>
            <link rel="icon" type="image/png" href="../images/favicon.png" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="X-UA-Compatible" conent="IE=edge">
            <!--Links for css -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            
            <link rel="stylesheet" type="text/css" href="../css/style.css">
            <link rel="stylesheet" type="text/css" href="../css/download.css">
            <link rel="stylesheet" type="text/css" href="../css/MediaQuery.css">
            <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
        </head>
        <body>
            <!-- Main container-->
            <div class="container">
                <?php echo "<h5 class='text-center text-danger'>" .$err. "</h5>"; ?>
                <div class="row profile-box">
                    <h3 class="text-center">Admininstor Login</h3>
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
                    </div>
                </div>
            </div>
        </body>
        </html>
    <?php }
?>