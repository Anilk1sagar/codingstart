<div id="overlay" onclick="closeNav();"></div>
<!-- Header-->
<div class="header" id="header">
    <button class="openNav" onclick="openNav();"><i class="fa fa-bars" aria-hidden="true"></i></button>
    <a href="../index.php" class="brand ripple"> CodingStart</a>
    <div class="header_menu">
        <?php
            if (isset($_SESSION['u_id'])) {
                echo "<div class='nav-username' style='float:left;'>
                        <span style='float:left;margin-right:5px;'>Hello! <b>" . $_SESSION['u_name'] . "</b></span>
                        <form action='includes/logout.inc.php' method='POST'>
                                <input type='submit' name='submit' value='Logout' class='logout-btn'>
                        </form>
                    </div>";
             } else {
                echo "<a href='login.php'>Login</a>
                    <a href='login.php'>Register</a>";
             }
        ?>
        <a href="../search.php" class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></a>
    </div>
</div>
<!--End header-->
<nav class="navbar" id="my-navbar">
    <div class="navbar-header" id="navbar-header">
        <span class="close-nav" onclick="closeNav();">&times;</span>
        <div class="personal_info">
            <img src="../images/anil.jpg">
            <h4>Anil Kumar</h4>
            <span>Web Designer & Developer</span>
        </div>
    </div>
    <ul class="navbar-nav" id="navbar-nav">
        <li><a href="../index.php" class="active"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li><a href="../codes.php"><i class="fa fa-code" aria-hidden="true"></i> Codes</a></li>
        <li><a href="../plugins.php"><i class="fa fa-plug" aria-hidden="true"></i> Plugins</a></li>
        <li><a href="../ebooks.php"><i class="fa fa-book" aria-hidden="true"></i> Ebooks</a></li>
        <li><a href="../theams.php"><i class="fa fa-heart" aria-hidden="true"></i> Themes</a></li>
        <li><a href="../About us.php"><i class="fa fa-user" aria-hidden="true"></i> About</a></li>
        <?php
            if (isset($_SESSION['u_id'])) {
                echo "<li><form action='../includes/logout.inc.php' method='POST'>
                            <button type='submit' name='submit' class='menu-logout-btn'><i class='fa fa-sign-out' aria-hidden='true'></i> Logout</button>
                        </form>
                    </li>";
             } else {
                echo "<li><a href='../login.php'><i class='fa fa-sign-in' aria-hidden='true'></i> Login/Register</a></li>";
             }
        ?>  
    </ul>
</nav>
<!-- End Navigation Bar -->
