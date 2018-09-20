<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SWDV-210 - Project 5</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">

    <!-- Load JavaScripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="imgs/logo.png" alt="logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?php if(strpos($_SERVER['REQUEST_URI'], 'index.php') == true) echo 'class="active"'?>><a href="index.php">About Us<span class="sr-only">(current)</span></a></li>
                <li <?php if(strpos($_SERVER['REQUEST_URI'], 'showtimes.php') == true) echo 'class="active"'?>><a href="showtimes.php">Showtimes</a></li>
                <li <?php if(strpos($_SERVER['REQUEST_URI'], 'upcoming.php') == true) echo 'class="active"'?>><a href="upcoming.php">Upcoming</a></li>
				<li <?php if(strpos($_SERVER['REQUEST_URI'], 'faqs.php') == true) echo 'class="active"'?>><a href="faqs.php">FAQs</a></li>
				<li <?php if(strpos($_SERVER['REQUEST_URI'], 'newsletter.php') == true) echo 'class="active"'?>><a href="newsletter.php">Newsletter</a></li>
                <li <?php if(strpos($_SERVER['REQUEST_URI'], 'contact.php') == true) echo 'class="active"'?>><a href="contact.php">Contact</a></li>
				<li <?php if(strpos($_SERVER['REQUEST_URI'], 'login.php') == true) echo 'class="active"'?>><a href="login.php">Admin</a></li>
            </ul>
        </div><!-- navbar-collapse -->
    </div><!-- container-fluid -->
</nav>
