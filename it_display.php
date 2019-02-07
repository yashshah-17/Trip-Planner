<?php
$conn = mysqli_connect("localhost","root","");
$db= mysqli_select_db($conn,"Trip_Planner");
$query=mysqli_query($conn,"(Select Username,Trip,Purpose,Period,Year,Weather,Rating from it_form where ID=55)");
$disp=mysqli_fetch_array($query);
?>
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Trip Planner-Itineraries</title>
        <link rel="icon" type="image/jpeg" href="old-retro-antique-vintage-163194.jpeg">
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon      yet to be added-->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            <div id="pre-header" class="container" style="height:340px">
            </div>
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="C:\xampp\htdocs\PHP\Website\Itinerary\Itinerary_edit.html" title="">
                                <img src="itineraries_final.png" alt="Logo" /><!--have to make a logo-->
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- Top Menu -->
            <div id="hornav" class="container no-padding">
                <div class="row">
                    <div class="col-md-12 no-padding">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                    <a href="C:\xampp\htdocs\PHP\Website\Home\Home.html" class="fa-home">Home</a>
                                </li>
                                <li>
                                    <a href="C:\xampp\htdocs\PHP\Website\About_us\About_us.html" class="fa-about-us">About Us</a>
                                </li>
                                <li>
                                    <a href="C:\xampp\htdocs\PHP\Website\Itinerary\Itinerary_edit.html" class="fa-profile">Itineraries</a>
                                </li>
                                <li>
                                    <a href="C:\xampp\htdocs\PHP\Website\Offers\Offers.html" class="fa-deal">Offers</a>
                                </li>
                                <li>
                                    <a href="C:\xampp\htdocs\PHP\Website\Agencies\Agencies.html" class="fa-agency">Agencies</a>
                                </li>
                                <li>
                                    <a href="#feed" class="fa-feed">Feedback</a>
                                </li>
                                <li>
                                    <a href="C:\xampp\htdocs\PHP\Website\Log_in\Sign_in.html" class="fa-sign-up">Sign up/Log in</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <div id="post_header" class="container" style="height:340px">
            </div>
            <div id="content-top-border" class="container">
            </div>
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Main Text -->
                        <div class="col-md-12">
                            <h2 class="text-center">Welcome to Trip Planner !</h2>
                            <br><p class="text-center">We at Trip Planner thought of easing out your work when you think of travelling. Its a general practice to visit many websites, read much of stuffs related to exclusive offers &amp; travel packages, before you plan your trip. So to make this process a little easier and more fruitful we have included - variety of itineraries, on going offers on hotel &amp; booking and also numerous travel packages, everthing on just one site.</p>
                            <p class="text-center">Let's view few of the uploaded itineraries...!</p>
                        </div>
                        <!-- End Main Text -->
                    </div>
                </div>
                <div class="container background-gray-lighter">
                    <p style="margin-top:50px;"></p>
                    <div class="row">
                        <div class="col-md-12 portfolio-group no-padding">
                            <!-- Portfolio Item -->
                            <!--<div class="col-md-4 portfolio-item margin-bottom-40 video">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image1.jpg" alt="image1">
                                            <figcaption>
                                                <h3 class="margin-top-20">Velit esse molestie</h3>
                                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <!--<div class="col-md-4 portfolio-item margin-bottom-40 design">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image2.jpg" alt="image2">
                                            <figcaption>
                                                <h3 class="margin-top-20">Quam nunc putamus</h3>
                                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <!--<div class="col-md-4 portfolio-item margin-bottom-40 video">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image3.jpg" alt="image3">
                                            <figcaption>
                                                <h3 class="margin-top-20">Placerat facer possim</h3>
                                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <!--<div class="col-md-4 portfolio-item margin-bottom-40 video">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image4.jpg" alt="image4">
                                            <figcaption>
                                                <h3 class="margin-top-20">Nam liber tempor</h3>
                                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <!--<div class="col-md-4 portfolio-item margin-bottom-40 audio">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image5.jpg" alt="image5">
                                            <figcaption>
                                                <h3 class="margin-top-20">Donec non urna</h3>
                                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 code">
                                <div>
                                    <a href="it.php">
                                        <figure>
                                            <img src="assets/img/portfolio/image6.jpg" alt="image6">
                                            <figcaption>
                                                <?php echo"<h3 class='margin-top-20'>".$disp['Trip']."</h3>"; ?>
                                                <span><ul><?php echo"<li>By- ".$disp['Username']."</li>"; ?><?php echo"<li>".$disp['Period'].", ".$disp['Year']."</li>"; ?><?php echo"<li>".$disp['Weather']."</li>"; ?><?php echo"<li>".$disp['Rating']." Stars</li>"; ?></ul></span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 code">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image7.jpg" alt="image7">
                                            <figcaption>
                                                <h3 class="margin-top-20">Singapore</h3>
                                                <span><ul><li>By- paaro375</li><li>March, 2008</li><li>Get your shorts</li><li>5 Stars</li></ul></span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 code">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image8.jpg" alt="image8">
                                            <figcaption>
                                                <h3 class="margin-top-20">USA</h3>
                                                <span><ul><li>By- sammy26</li><li>December, 2010</li><li>Chilled</li><li>4 Stars</li></ul></span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 audio">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/image9.jpg" alt="image9">
                                            <figcaption>
                                                <h3 class="margin-top-20">Delhi</h3>
                                                <span><ul><li>By- ktrocks97</li><li>August, 2006</li><li>Rains</li><li>4 Stars</li></ul></span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            
                    <!--<div class="row padding-vert-20">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-10">
                            <!-- Portfolio -->
                            <!--<ul class="portfolio-group">
                                <!-- Portfolio Item -->
                                <!--<li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                                    <a href="#">
                                        <figure class="animate fadeInLeft">
                                            <img alt="image1" src="assets/img/frontpage/image1.jpg">
                                            <figcaption>
                                                <h3>Placerat facer possim</h3>
                                                <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- //Portfolio Item// -->
                                <!-- Portfolio Item -->
                                <!--<li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                                    <a href="#">
                                        <figure class="animate fadeInRight">
                                            <img alt="image2" src="assets/img/frontpage/image2.jpg">
                                            <figcaption>
                                                <h3>Placerat facer possim</h3>
                                                <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- //Portfolio Item// -->
                                <!-- Portfolio Item -->
                                <!--<li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                                    <a href="#">
                                        <figure class="animate fadeInLeft">
                                            <img alt="image3" src="assets/img/frontpage/image3.jpg">
                                            <figcaption>
                                                <h3>Placerat facer possim</h3>
                                                <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- //Portfolio Item// -->
                                <!-- Portfolio Item -->
                                <!--<li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                                    <a href="#">
                                        <figure class="animate fadeInRight">
                                            <img alt="image4" src="assets/img/frontpage/image4.jpg">
                                            <figcaption>
                                                <h3>Placerat facer possim</h3>
                                                <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- //Portfolio Item// -->
                                <!-- Portfolio Item -->
                                <!--<li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                                    <a href="#">
                                        <figure class="animate fadeInLeft">
                                            <img alt="image5" src="assets/img/frontpage/image5.jpg">
                                            <figcaption>
                                                <h3>Placerat facer possim</h3>
                                                <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- //Portfolio Item// -->
                                <!-- Portfolio Item -->
                                <!--<li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                                    <a href="#">
                                        <figure class="animate fadeInRight">
                                            <img alt="image6" src="assets/img/frontpage/image6.jpg">
                                            <figcaption>
                                                <h3>Placerat facer possim</h3>
                                                <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>-->
                                <!-- //Portfolio Item// -->
                           <!-- </ul>-->
                            <!-- End Portfolio -->
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                </div>
                <div class="container background-white">
                    <div class="row padding-vert-40">
                        <div class="col-md-12">
                            <h2 class="animate fadeIn text-center">Explore more</h2>
                            <!--<p class="animate fadeIn text-center">If you like to work with a creative team in a lively and friendly enviroment then call us today!.</p>-->
                            <p class="animate fadeInUp text-center">
                                <button class="btn btn-primary btn-lg" type="button">Go Ahead</button>
                            </p>
                        </div>
                    </div>
                </div>
            
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="content-bottom-border" class="container">
            </div>
            <div id="base">
                <div class="container padding-vert-30 margin-top-60">
                    <div class="row">
                        <!-- Contact Details -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Contact Details</h3>
                            <p>
                                <span class="fa-phone">Telephone:</span>+91 9619865238
                                <br>
                                <span class="fa-phone">Telephone:</span>+91 9619245561
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:crazyloveyash@gmail.com">crazyloveyash@gmail.com</a>
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:yashketanshah29@gmail.com">yashketanshah29@gmail.com</a>
                            </p>
                            <br>
                            <p>D.J. Sanghvi, JVPD Scheme,
                                <br>Vile Parle (W),
                                <br>Mumbai,
                                <br>India.</p>
                        </div>
                        <!-- End Contact Details -->
                        <!-- Sample Menu -->
                        <div class="col-md-300 margin-bottom-20">
                            <h3 id="feed" class="margin-bottom-10">Feedback</h3>
                            <form action="/action_page.php">
                            Your Name:<br>
                            <input type="text" name="name">
                            <br><br>
                            Email-id:<br>
                            <input type="email" name="email">
                            <br><br>
                            </form> 

                            <!--<ul class="menu">
                                <li>
                                    <a class="fa-tasks" href="#">Placerat facer possim</a>
                                </li>
                                <li>
                                    <a class="fa-users" href="#">Quam nunc putamus</a>
                                </li>
                                <li>
                                    <a class="fa-signal" href="#">Velit esse molestie</a>
                                </li>
                                <li>
                                    <a class="fa-coffee" href="#">Nam liber tempor</a>
                                </li>
                            </ul>-->
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Sample Menu -->
                        <div class="col-md-1"></div>
                        <!-- Disclaimer -->
                        <div class="col-md-100 margin-bottom-20 padding-vert-10 text-center">
                            <h4 class="color-gray margin-bottom-10">Your comments</h4>
                            <form action="/action_page.php">
                            <textarea name="message" rows="6" cols="40"></textarea>
                            <br>
                            </form>
                            <br>
                            <button class="btn btn-primary btn-lg margin-top-20 tab" type="button">Submit</button>
                        </div>
                        <!-- End Disclaimer -->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- Footer Menu -->
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div id="footermenu" class="col-md-8">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <a href="http://orkni.com/" target="_blank">orkni</a>
                                </li>
                                <li>
                                    <a href="https://www.makemytrip.com/holidays-india" target="_blank">makemytrip</a>
                                </li>
                                <li>
                                    <a href="https://www.trivago.in/" target="_blank">trivago</a>
                                </li>
                            </ul>
                        </div>
                        <div id="copyright" class="col-md-4">
                            <p class="pull-right">Copyright (c) 2017 </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Menu -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
            </div>
    </body>
</html>
<!-- === END FOOTER === -->