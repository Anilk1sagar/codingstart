<?php
    session_start();
    include 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodingStart | Search</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" conent="IE=edge">
    <meta name="description" content="" />
    <!--for searching and indexing-->
    <meta name="robots" content="index,follow" />
    <!--Links for css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/download.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/MediaQuery.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
</head>
<body>
    <?php include_once 'header.php'; ?>
    <!--Start container-->
    <div class="container">
        <div id=" row profile-box">
            <div class="plugin-box search_field">
                <form action="search.php" method="POST">
                    <div class="field">
                        <input type="search" name="search" class="input_field" required>
                        <span class="bar"></span>
                        <span class="label">Search The Site</span>
                    </div>
                    <input type="hidden" name="submit">
                </form>
            </div>
        </div>
    	<div class="page-header">
    		<h2>Search Results:</h2>
    	</div>
    	<div class="row">
    		<div class="col-md-8">
    			<?php
					if (isset($_POST['submit'])) {
						$search = mysqli_real_escape_string($conn, $_POST['search']);
						$sql = "SELECT * FROM posts WHERE p_title LIKE '%$search%' OR p_description LIKE '%search%';";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);

						if ($resultCheck > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<div class='plugin-box' style='margin-bottom: 10px;'>
                                        <div class='row'>
                                            <div class='col-md-8'>
        										<a href='post.php?post=".$row['p_title']."' class='text-info'><h3>".$row['p_title']."</h3></a>
        										<p>".$row['p_description']."</p>
        										<p>".$row['p_keyFeatures']."</p>
                                            </div>
                                            <div class='col-md-4'>
                                                <img src='images/codes/".$row['p_imgLink']."' width='100%' /> 
                                            </div>
                                        </div>
									</div>";
							}
						} else {
							echo "<h4>There are no results matching your search!</h4><br>";
						}
					}
				?>
    		</div>
    		<div class="col-md-4">
    			
    		</div>
    	</div>
    </div>

    <!--scroll to top button-->
    <a href="#" class="scrollToTop"><img src="images/uparrow.png" class="scroll-top-img" /></a>

    <!--=================Scripts==============================-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="js/jquery.materialripple.js"></script>
    <script type="text/javascript" src="js/Myjavascript.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-89221612-1', 'auto');
      ga('send', 'pageview');
    </script>
</body>
</html>