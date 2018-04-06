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
                    <img src="../../images/codes/login with background animation.png" class="download_image" /><br>
                    <a href="../../post.php?post=Login With Background Animation"><h4>Login With Background Animation</h4></a>
                </div> 
            </div>
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="../../images/codes/contact form.png" class="download_image" /><br>
                    <a href="../../post.php?post=PHP Contact Form"><h4>PHP Contact Form</h4></a>
                </div> 
            </div>
            <div class="col-sm-4">
                <div class="code-box">
                    <img src="../../images/codes/sidebar navigation.png" class="download_image" /><br>
                    <a href="../../post.php?post=Simple Sidebar Navigation"><h4>Simple Sidebar Navigation</h4></a>
                </div>
            </div>
        </div><br><br><!--End row-->

        <!--start pagination-->
        <hr>
        <center>
            <ul class="pagination">
                <li><a href="../../codes.php">1</a></li>
                <li><a href="2.php">2</a></li>
                <li><a href="3.php">3</a></li>
                <li class="active"><a href="4.php">4</a></li>
            </ul>
        </center><br>
    </div><!--End Conent container-->

    <?php include_once 'footer.php'; ?>
</body>
</html>