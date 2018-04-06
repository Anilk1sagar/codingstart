<?php
    session_start();
    if (isset($_GET['post'])) {
        include 'admin/includes/dbh.inc.php';

        $title = $_GET['post'];
        $sql = "SELECT * FROM posts WHERE p_title='$title';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        //Check if title matchs post title
        if ($resultCheck == 1) {
            $row = mysqli_fetch_assoc($result);
            //fetch data from database
            $p_title = $row['p_title'];
            $p_imgLink = $row['p_imgLink'];
            $p_description = $row['p_description'];
            $p_keyFeatures = $row['p_keyFeatures'];
            $p_downloadLink = $row['p_downloadLink'];
            $p_demoLink = $row['p_demoLink']; ?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title><?php echo $p_title; ?></title>
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
                <div class="container content-container"><br>
                    <!--=============Start main codes area===========-->
                    <div class="row">
                        <div class="col-sm-8" style="margin-bottom: 10px;">
                            <div class="plugin-box">
                                <h2 class="text-info"><?php echo $p_title; ?></h2><hr>
                                <img src="images/codes/<?php echo $p_imgLink; ?>" class="download_image"><hr>
                                <h4><b>Introduction</b></h4>
                                <p><?php echo $p_description; ?></p><br>
                                <h4><b>Key Feature</b></h4>
                                <ul>
                                    <?php
                                        $arr = explode(",",$p_keyFeatures);
                                        foreach ($arr as $values) {
                                            echo "<li>$values</li>";
                                        }
                                    ?>
                                </ul><br>
                                <h4><b>Download and Demo</b></h4>
                                <?php
                                    if (isset($_SESSION['u_id'])) { ?>
                                        <a href="<?php echo $p_downloadLink; ?>" class="btn btn-info">Download</a>
                                    <?php } else { ?>
                                        <a href="login.php" class="btn btn-info" onclick="alert('Please Login or Register to Download');">Download</a>
                                    <?php }
                                ?>
                                <a href="<?php echo $p_demoLink; ?>" class="btn btn-success" target="blank">Demo</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fb-page" data-href="https://www.facebook.com/CodingStart/" data-tabs="timeline" data-width="300" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CodingStart/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CodingStart/">CodingStart</a></blockquote></div>
                            <br>
                            <!--Add Hosting Advertise -->
                            <a href="https://www.000webhost.com/943124.html" target="_blank"><img src="https://www.000webhost.com/images/banners/300x250/2.jpg" alt="Web hosting" width="100%" height="250" border="0" /></a>
                        </div>
                    </div>
                    <br>
                    <!--Comments section-->
                        <div id="disqus_thread"></div>
                        <script>
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = '//codingstart.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    <!--End Comments section-->
                    <br><br>
                </div><!-- End Conent Container -->
                <!--end container-->

                <?php include_once 'footer.php'; ?>
            </body>
            </html>
        <?php } else {
            echo "Post does not found!";
        }
    } else {
        header("Location: index.php");
        exit();
    }
?>


