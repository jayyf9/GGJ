<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaia Gemstone Jewelery</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
    <?php include "header.php"; ?>    
</head>

<?php
    // standard PHP to MySQL database select script
    $dbhost = '160.153.146.154';
    $dbuser = 'GGJewellery';
    $dbpass = 'Phenom955!';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die         ('Error connecting to mysql');

    $dbname = 'GGJewellery'; // this is the schema name in MySQL Workbench or DB name in PHPmyadmin
    mysql_select_db($dbname);
?>
    
<body>
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="jumbotron hero-nature carousel-hero">
                <h1 class="hero-title">Hand Crafted</h1>
                <p class="hero-subtitle">We believe that creating every piece should be unique, so all of our jewelery is crafted by hand.</p>
                <p><a class="btn btn-primary btn-lg hero-button" role="button" href="gemstones.php">Learn more</a></p>
            </div>
        </div>
        <div class="item">
            <div class="jumbotron hero-photography carousel-hero">
                <h1 class="hero-title">Yours to design</h1>
                <p class="hero-subtitle">We want to give you full control over the design decisions and process to make jewelery that is uniquely personal to you.</p>
                <p><a class="btn btn-primary btn-lg hero-button" role="button" href="designyourown.php">Learn more</a></p>
            </div>
        </div>
        <div class="item">
            <div class="jumbotron hero-technology carousel-hero">
                <h1 class="hero-title">Natural Gemstones</h1>
                <p class="hero-subtitle">All of our genuine gemstones come from natural sources, this is reflected in the quality.</p>
                <p><a class="btn btn-primary btn-lg hero-button" role="button" href="gemstones.php">Learn More</a></p>
            </div>
        </div>
    </div>
    <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
        <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
    </div>
    <ol class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
        <li data-target="#carousel-1" data-slide-to="2"></li>
    </ol>
</div>
    <div class="testimonials-clean">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">What people are saying about us!</h2>
            <p class="text-center">Our customers love us! <br>Read what they have to say about us below.</p>
        </div>
        <div class="row people">
            <div class="col-md-4 col-sm-6 item">
                <div class="box">
                    <p class="description">I have been coming here for a few weeks buying various bits and pieces, this website is the perfect place to complete your outfits with the vivid colors in your jewlery to match your favourite outfits.</p>
                </div>
                <div class="author"><img class="img-circle" src="/GGJ/assets/img/1.jpg" />
                    <h5 class="name">Gloria Johnson</h5>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 item">
                <div class="box">
                    <p class="description">I stumbled upon this site looking for a present for my grandaughter, and queried about getting a bespoke necklace made, the final piece was outstanding! My grandaughter is very pleased and I will be sure to reccomend them to others. </p>
                </div>
                <div class="author"><img class="img-circle" src="/GGJ/assets/img/3.jpg" />
                    <h5 class="name">Carl Kent</h5>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 item">
                <div class="box">
                    <p class="description">Bought myself a pair of gourgous earings here and so glad I did, the gemstones and build quality is immediately apparent and even the uniqueness that comes with handmade jewelery makes them that much more special.</p>
                </div>
                <div class="author"><img class="img-circle" src="/GGJ/assets/img/2.jpg" />
                    <h5 class="name">Emily Clark</h5>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
    
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <?php
    mysql_close($conn);
    ?>
    <?php include "footer.php"; ?>
</body>

</html>