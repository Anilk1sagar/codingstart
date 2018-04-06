<?php
    session_start();

    if (isset($_SESSION['u_username'])) { 

        if ($_SESSION['u_username'] == "Anilk1sagar") { ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>CodingStart | Admin</title>
                <link rel="icon" type="image/png" href="../images/favicon.png" />
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta http-equiv="X-UA-Compatible" conent="IE=edge">
                <meta name="description" content="" />
                <!--Links for css -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                <link rel="stylesheet" type="text/css" href="../css/style.css">
                <link rel="stylesheet" type="text/css" href="../css/download.css">
                <link rel="stylesheet" type="text/css" href="../css/MediaQuery.css">
                <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
            </head>
            <body>
                <?php include_once 'header.php'; ?>
                <!--Start container-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3 class="text-center">Upload Image</h3>
                            <div class="plugin-box" style="padding: 30px;">
                                <form action="includes/upload_image.inc.php" method="POST" enctype="multipart/form-data">
                                    <input type="file" name="file" placeholder="Upload File"><br>
                                    <input type="submit" name="submit" value="Upload Image" class="submit_btn">
                                </form>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h3 class="text-center">Upload Post</h3>
                            <div class="plugin-box" style="padding: 30px;">
                                <form action="includes/upload_post.inc.php" method="POST">
                                    <div class="field">
                                        <input type="text" name="title" class="input_field" required>
                                        <span class="bar"></span>
                                        <span class="label">Title</span>
                                    </div><br><!-- End Form-group-->
                                    <div class="field">
                                        <input type="text" name="img_link" class="input_field" required>
                                        <span class="bar"></span>
                                        <span class="label">Image Link</span>
                                    </div><br><!-- End Form-group-->
                                    <div class="field">
                                        <textarea name="description" class="textarea_field" required></textarea>
                                        <span class="bar"></span>
                                        <span class="label">Description</span>
                                    </div><br><!-- End Form-group-->
                                    <div class="field">
                                        <input type="text" name="k_features" class="input_field" required>
                                        <span class="bar"></span>
                                        <span class="label">Key Features (Please use comma sepration)</span>
                                    </div><br><!-- End Form-group-->
                                    <div class="field">
                                        <input type="text" name="download_link" class="input_field" required>
                                        <span class="bar"></span>
                                        <span class="label">Download Link</span>
                                    </div><br><!-- End Form-group-->
                                    <div class="field">
                                        <input type="text" name="demo_link" class="input_field" required>
                                        <span class="bar"></span>
                                        <span class="label">Demo Link</span>
                                    </div><br><!-- End Form-group-->
                                    <input type="submit" name="submit" value="Upload Post" class="submit_btn">
                                </form>
                            </div>
                        </div>
                    </div>
                    <br><br>
                </div>
                <?php include_once 'footer.php'; ?>
            </body>
            </html>
         <?php } else {
            header("Location: ../index.php");
            exit();
        }
    } else {
        header("Location: login.php");
        exit();
    }
?>