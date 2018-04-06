<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodingStart | Plugins</title>
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
            <h2 class="text-primary text-center">Plugins</h2>
        </div><!--end page-header-->

        <!--=============Start main codes area===========-->

        <div class="row">
            <div class="col-sm-6">
                <div class="plugin-box">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/plugins/sweet-alert.png" class="download_image"/>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-primary">Sweet Alert</h3>
                            <p>Sweet alert is the modern alert which replace the default browser alert.</p>
                            <a href="http://sh.st/bJIP7" target="blank" class="btn btn-info">Demo / Download</a>
                        </div>
                    </div><!--Inner end row-->
                </div><!--end plugin-box-->
            </div>
            <div class="col-sm-6">
                <div class="plugin-box">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/plugins/ninja-slider.png" class="download_image"/>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-primary">Ninja Slider</h3>
                            <p>Ninja slider is responsive image, content , videos slider and it is very easy to use.</p>
                            <a href="http://sh.st/bJIAD" target="blank" class="btn btn-info">Demo / Download</a>
                        </div>
                    </div><!--Inner end row-->
                </div><!--end plugin-box-->
            </div>
        </div><br><br><!--End row-->

        <div class="row">
            <div class="col-sm-6">
                <div class="plugin-box">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/plugins/tooltip.png" class="download_image"/>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-primary">HTML 5 Tooltips</h3>
                            <p>html5tooltips.js is a light and clean tooltips written in pure javascript with CSS3 animation and no framework dependency.</p>
                            <a href="http://sh.st/bJIA2" target="blank" class="btn btn-info">Demo / Download</a>
                        </div>
                    </div><!--Inner end row-->
                </div><!--end plugin-box-->
            </div>
            <div class="col-sm-6">
                <div class="plugin-box">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/plugins/LoadGo.png" class="download_image"/>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-primary">LoadGo – jQuery Progress Bar with Your Images</h3>
                            <p>LoadGo is a jQuery plugin that allows you to create a progress bar by using your own images.</p>
                            <a href="http://sh.st/bJISW" target="blank" class="btn btn-info">Demo / Download</a>
                        </div>
                    </div><!--Inner end row-->
                </div><!--end plugin-box-->
            </div>
        </div><br><br><!--End row-->

        <div class="row">
            <div class="col-sm-6">
                <div class="plugin-box">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/plugins/Zenith.png" class="download_image"/>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-primary">Zenith – Responsive Slider jQuery Plugin</h3>
                            <p>Zenith is responsive slider jQuery plugin that has 4 basic layouts + 4-th layout has dozen variations of it’s own, giving 3 additional sub-layouts</p>
                            <a href="http://sh.st/bJIS3" target="blank" class="btn btn-info">Demo / Download</a>
                        </div>
                    </div><!--Inner end row-->
                </div><!--end plugin-box-->
            </div>
            <div class="col-sm-6">
                <div class="plugin-box">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/plugins/Ladda-UI-for-Bootstrap.png" class="download_image"/>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-primary">Ladda UI for Bootstrap</h3>
                            <p>Ladda buttons concept for Bootstrap. Buttons with built-in loading indicators, effectively bridging the gap between action and feedback.</p>
                            <a href="http://sh.st/bJIDn" target="blank" class="btn btn-info">Demo / Download</a>
                        </div>
                    </div><!--Inner end row-->
                </div><!--end plugin-box-->
            </div>
        </div><br><br><!--End row-->

        <!--start pagination-->
        <hr>
        <center>
            <ul class="pagination">
                <li class="active"><a href="plugins.php">1</a></li>
                <li><a href="pages/plugins/2.php">2</a></li>
                <li><a href="pages/plugins/3.php">3</a></li>
                <li><a href="pages/plugins/4.php">4</a></li>
            </ul>
        </center><br>
    </div><!--End Conent container-->

    <?php include_once 'footer.php'; ?>
</body>
</html>