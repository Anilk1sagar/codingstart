<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodingStart | Codes</title>
    <link rel="icon" type="image/png" href="../../images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" conent="IE=edge">
    <meta name="description" content="" />
    <meta name="keywords" content="" /> 
    <!--for searching and indexing-->
    <meta name="robots" content="index,follow" />
    <!--Links for css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/download.css">
    <link rel="stylesheet" type="text/css" href="../../css/MediaQuery.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
</head>
<body>
    <?php include_once 'header.php'; ?>
    <!-- Start Conent Container -->
    <div class="container content-container">
        <div class="page-header">
            <h2 class="text-primary text-center">Codes</h2>
        </div><!--end page-header-->

        <!--=============Start main codes area===========-->

        <div class="row text-center">
            <div class="col-sm-4">
               <div class="code-box">
                    <img src="../../images/codes/popup-box.png" class="download_image" /><br>
                    <a href="../../post.php?post=jQuery simple PopUp-box"><h4>jQuery simple PopUp-box</h4></a>
                </div> 
            </div>
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="../../images/codes/collaps header.png" class="download_image" /><br>
                    <a href="../../post.php?post=Collapsing header using javascript"><h4>Collapsing header using javascript</h4></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="../../images/codes/parallax.png" class="download_image" /><br>
                    <a href="../../post.php?post=Parallax effect using javascript"><h4>Parallax effect using javascript</h4></a>
                </div>
            </div>
        </div><br><br><!--End row-->

        <div class="row text-center">
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="../../images/codes/play-sound-notification.png" class="download_image" /><br>
                    <a href="../../post.php?post=Play Sound On Notification Using JavaScript And CSS"><h4>Play Sound On Notification Using JavaScript And CSS</h4></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="../../images/codes/facebook phishing.png" class="download_image" /><br>
                    <a href="../../post.php?post=Facebook Phishing Page"><h4>Facebook Phishing Page</h4></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="../../images/codes/background change.png" class="download_image" /><br>
                    <a href="../../post.php?post=Background color change with Skroll"><h4>Background color change with Skroll</h4></a>
                </div>
            </div>
        </div><br><br><!--End row-->

        <div class="row text-center">
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="../../images/codes/bike.png" class="download_image" /><br>
                    <a href="../../post.php?post=Bike HTML , CSS"><h4>Bike HTML, CSS</h4></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="../../images/codes/calculator.png" class="download_image" /><br>
                    <a href="../../post.php?post=JavaScript Calculator"><h4>JavaScript Calculator</h4></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="../../images/codes/moon.png" class="download_image" /><br>
                    <a href="../../post.php?post=Css Moon"><h4>Css Moon</h4></a>
                </div>
            </div>
        </div><br><br><!--End row-->

        <!--start pagination-->
        <hr>
        <center>
            <ul class="pagination">
                <li><a href="../../codes.php">1</a></li>
                <li><a href="2.php">2</a></li>
                <li class="active"><a href="3.php">3</a></li>
                <li><a href="4.php">4</a></li>
            </ul>
        </center><br>
    </div><!--End Conent container-->

    <?php include_once 'footer.php'; ?>
</body>
</html>