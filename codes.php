<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodingStart | Codes</title>
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
    <!-- Start Conent Container -->
    <div class="container content-container">
        <div class="page-header">
            <h2 class="text-primary text-center">Codes</h2>
        </div><!--end page-header-->

        <!--=============Start main codes area===========-->

        <div class="row text-center">
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="images/codes/menu.png" data-action="zoom" class="download_image" /><br>
                    <a href="post.php?post=Responsive navigation bar"><h4>Responsive navigation bar</h4></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="images/codes/simple drop down menu.png" class="download_image" /><br>
                    <a href="post.php?post=Simple Drop Down menu"><h4 class="text-primary">Simple Drop Down menu</h4></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="images/codes/menu using js.png" class="download_image" /><br>
                    <a href="post.php?post=Responsive menu bar using css and js"><h4 class="text-primary">Responsive menu bar using css3 and js</h4></a>
                </div>
            </div>
        </div><br><br><!--End row-->

        <div class="row text-center">
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="images/codes/responsive-slider.png" data-action="zoom" class="download_image" /><br>
                    <a href="post.php?post=Responsive jQuery Image Slider"><h4 class="text-primary">Responsive jQuery Image Slider</h4></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="images/codes/slider.png" class="download_image" /><br>
                    <a href="post.php?post=jQuery Image Slider"><h4 class="text-primary">jQuery Image Slider</h4></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="images/codes/jquery-slider-no-plugin.png" class="download_image" /><br>
                    <a href="post.php?post=jQuery image Slider (No-Plugin)"><h4 class="text-primary">jQuery image Slider (No-Plugin)</h4></a>
                </div>
            </div>
        </div><br><br><!--End row-->

        <div class="row text-center">
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="images/codes/progressbar.png" class="download_image" /><br>
                    <a href="post.php?post=Bootstrap Progress Bars"><h4 class="text-primary">Bootstrap Progress Bars</h4></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="images/codes/piano.png" class="download_image" /><br>
                    <a href="post.php?post=HTML, CSS, AND jQuery audio Piano"><h4 class="text-primary">HTML, CSS, AND jQuery audio Piano</h4></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="images/codes/electricbox.png" class="download_image" /><br>
                    <a href="post.php?post=CSS and jQuery control Electric box"><h4 class="text-primary">CSS and jQuery control Electric box</h4></a>
                </div>
            </div>
        </div><br><!--End row-->

        <!--start pagination-->
        <hr>
        <center>
            <ul class="pagination">
                <li class="active"><a href="codes.php">1</a></li>
                <li><a href="pages/codes/2.php">2</a></li>
                <li><a href="pages/codes/3.php">3</a></li>
                <li><a href="pages/codes/4.php">4</a></li>
            </ul>
        </center><br>
    </div><!--End Conent container-->

    <?php include_once 'footer.php'; ?>
</body>
</html>