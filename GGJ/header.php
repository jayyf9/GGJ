<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaia Gemstone Jewelery</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="assets/css/styles.css"> 
</head>

<?php
    // standard PHP to MySQL database select script
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die         ('Error connecting to mysql');

    $dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
    mysqli_select_db($conn, $dbname);
?> 

<body>
    <div>
        <nav class="navbar navbar-default navigation-clean-button">
            <div class="container">
                <div class="navbar-header" style="margin-top: -10px;">
                    <a class="navbar-brand navbar-link" style="font-size:28px;" href="index.php" data-aos="fade-right"><img src="assets/img/logo.png" style="position:relative; width: 40px; height:40px;">Gaia Gemstone Jewellery</a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1" style="margin-left:45%;">
                    <ul class="nav navbar-nav">
                        <li role="presentation"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home </a></li>
                        <li role="presentation"><a href="jewelery.php"><i class="glyphicon glyphicon-gift"></i> Jewelery </a></li>
                        <li role="presentation"><a href="gemstones.php"><i class="glyphicon glyphicon-heart"></i> Gemstones </a></li>
                        <li role="presentation"><a href="contactUs.php"><i class="glyphicon glyphicon-bullhorn"></i> Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>