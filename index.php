<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodingStart | Home</title>
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
    <!--Start container-->
    <div class="container" id="main-container">

        <div class="slider" id="home"><!--start slider-->
            <div class="welcome-box">
                <h1>Welcome! To CodingStart</h1>
                <p class="banner-p">Codes that can make your web-development easy</p>
                <a href="About us.php" class="btn btn-success ripple banner-btn">Read More</a>
            </div>
            <div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-speed="1000">
                <span class="cycle-prev"><img class="prev_img" src="images/previous.png"></span>
                <span class="cycle-next"><img class="next_img" src="images/next.png"></span>
                <span class="cycle-pager"></span>
                <img class="banner_image" src="images/slide2.jpg" alt="slide2" />
                <img class="banner_image" src="images/slide1.jpg" alt="slide2" />
                <img class="banner_image" src="images/slide3.jpg" alt="slide2" />
            </div>
        </div><!--end slider-->


    </div>
    <!--End container-->

    <div class="container content-container">
        <div class="feature"><!--start feature-->
            <div class="row text-center">
                <div class="col-lg-3 col-sm-3">
                    <div class="feature-box">
                        <i class="fa fa-code fa-4x" aria-hidden="true"></i>
                        <h4>Codes</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="feature-box">
                        <i class="fa fa-plug fa-4x" aria-hidden="true"></i>
                        <h4>Plugins</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="feature-box">
                        <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                        <h4>Ebooks</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="feature-box">
                        <i class="fa fa-heart fa-4x" aria-hidden="true"></i>
                        <h4>Themes</h4>
                    </div>
                </div>
            </div>
        </div>
        <!--end feature-->

        <div class="page-header text-center">
            <h2 class="text-primary">About Us</h2>
        </div>
        <p>CodingStart provide you to search and download the source codes of html, css, and javascript, php, 
            jQuery. CodingStart provide you to a collections of source codes, videos, plugins, ebooks for begnners. Here you can search your 
            problems and get solutions by going to the Fourm. CodingStart usefull for those users 
            who decide to learning web designing/web development.
        </p>

        <!--==================================start content=================================-->
        <div class="page-header">
            <h2 class="text-primary text-center">Codes</h2>
        </div><!--end page-header-->
            <p>Learn to code html , css & javascript has one goal to teach people how to build beautiful and 
            intuitive websites by way of clear and organized lessons. The guide covers a variety of 
            web design and development topics, ranging from beginner to advanced skill levels.</p>
            <p>So here codingstart help peoples to make our website intractive. CodingStart provide peoples 
            a large collections of downloadable Html codes.</p>
        <div class="row text-center">
            <div class="col-lg-4 col-sm-4">
                <div class="code-box">
                    <center><img src="images/codes/login.png" class="download_image" /></center><br>
                    <a href="post.php?post=HTML and CSS Login box"><h4 class="text-primary">HTML and CSS Login box</h4></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="code-box">
                    <center><img src="images/codes/calculator.png" class="download_image" /></center><br>
                    <a href="post.php?post=JavaScript Calculator"><h4>JavaScript Calculator</h4></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="code-box">
                    <center><img src="images/codes/slider.png" class="download_image" /></center><br>
                    <a href="post.php?post=jQuery Image Slider"><h4 class="text-primary">jQuery Image Slider</h4></a>
                </div>
            </div>
        </div><br><!--end row-->
        <center><a href="codes.php" class="text-primary">Go To Codes <i class="fa fa-arrow-right" aria-hidden="true"></i></a></center>

        <!--======For plugins box=====-->
        <div class="page-header">
            <h2 class="text-primary text-center">Plugins</h2>
        </div><!--end page-header-->
            <p>A plug-in is piece of code written in a standard JavaScript file. These files provide useful jQuery methods which can be used along with jQuery library methods.
                There are plenty of jQuery plug-in available on the internet.</p>
            <p>Here you can find some most usable and downloaded plugins which help user to make a user-friendly and intrected websites.</p>
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
                            <a href="http://jqueryplugin.net/sweet-alert-awesome-replacement-javascripts-alert/" target="blank" class="btn btn-info">Demo / Download</a>
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
                            <a href="http://www.menucool.com/responsive-slider" target="blank" class="btn btn-info">Demo / Download</a>
                        </div>
                    </div><!--Inner end row-->
                </div><!--end plugin-box-->
            </div>
        </div><br><br><!--End row-->
        <center><a href="plugins.php" class="text-primary">Go To Plugins <i class="fa fa-arrow-right" aria-hidden="true"></i></a></center>

        <!--======For Ebooks box=====-->
        <div class="page-header">
            <h2 class="text-primary text-center">Ebooks/Pdf's</h2>
            <p>Ebooks are help to learn fast and easy way. Ebooks are the source of learning without spending
            any money. if you are intrested to learn web-development fast and easy way so you are in right place.</p>
            <p>CodingStart provide user to collection of free downlodable ebooks/pdf's which can help user to learn web-development in easy way.</p>
        </div><!--end page-header-->
        <div class="row text-center">
            <div class="col-lg-3 col-sm-3">
                <div class="plugin-box">
                    <img src="images/pdf-logo.png"><br><br>
                    <p>Html & Css</p>
                    <a href="http://wtf.tw/ref/duckett.pdf" class="btn btn-info ripple">Download</a> 
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="plugin-box">
                    <img src="images/pdf-logo.png"><br><br>
                    <p>Css Tutorial</p>
                    <a href="http://www.tutorialspoint.com/css/css_tutorial.pdf" class="btn btn-info ripple">Download</a> 
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="plugin-box">
                    <img src="images/pdf-logo.png"><br><br>
                    <p>Css3 cheat sheet</p>
                    <a href="http://www.smashingmagazine.com/wp-content/uploads/images/css3-cheat-sheet/css3-cheat-sheet.pdf" class="btn btn-info ripple">Download</a> 
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="plugin-box">
                    <img src="images/pdf-logo.png"><br><br>
                    <p>HTML & css complete refrence</p>
                    <a href="http://pdfiles.com/pdf/files/download.php?id=322.pdf" class="btn btn-info ripple">Download</a> 
                </div>
            </div>
        </div><br><br><!--end row-->
        <center><a href="ebooks.php" class="text-primary">Go To Ebooks <i class="fa fa-arrow-right" aria-hidden="true"></i></a></center><br><br>
    </div><!--end container-->

    <?php include_once 'footer.php'; ?>
</body>
</html>