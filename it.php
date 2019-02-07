<?php
$conn = mysqli_connect("localhost","root","");
$db= mysqli_select_db($conn,"Trip_Planner");
$query1=mysqli_query($conn,"(Select Day,Source,Destination,Comment,Rating,Stay from it_details where Day=1)");
$query2=mysqli_query($conn,"(Select Day,Source,Destination,Comment,Rating,Stay from it_details where Day=2)");
$query3=mysqli_query($conn,"(Select Day,Source,Destination,Comment,Rating,Stay from it_details where Day=3)");
$query=mysqli_query($conn,"(Select Username,Trip,Purpose,Period,Year,Weather,Rating from it_form where ID=55)");
$disp=mysqli_fetch_array($query);
$disp1=mysqli_fetch_array($query1);
$disp2=mysqli_fetch_array($query2);
$disp3=mysqli_fetch_array($query3);
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
            <!--<ul class="social-icons pull-right hidden-xs">
                <li class="social-rss">
                    <a href="#" target="_blank" title="RSS"></a>
                </li>
                <li class="social-twitter">
                    <a href="#" target="_blank" title="Twitter"></a>
                </li>
                <li class="social-facebook">
                    <a href="#" target="_blank" title="Facebook"></a>
                </li>
                <li class="social-googleplus">
                    <a href="#" target="_blank" title="GooglePlus"></a>
                </li>
            </ul>-->
            <div id="pre-header" class="container" style="height: 0px">
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
            <div id="post_header" class="container" style="height: 40px">
            </div>
            <div id="content-top-border" class="container">
            </div>
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Main Column -->
                        <div class="col-md-12">
                            <?php echo"<h2>By- ".$disp['Username']."</h2>"; ?>
                             <?php echo"<h3 class='margin-top-20'>".$disp['Trip']."</h3>"; ?><br><br><br><br>
                            <span><ul>
                            <?php echo"<li>".$disp1['Comment']."</li>"; ?>
                            <?php echo"<li>".$disp1['Rating']."</li>"; ?>
                            <?php echo"<li>".$disp1['Stay']."</li>"; ?>
                            </ul></span>
                            <br><br>
                            <span><ul>
                            <?php echo"<li>".$disp2['Comment']."</li>"; ?>
                            <?php echo"<li>".$disp2['Rating']."</li>"; ?>
                            <?php echo"<li>".$disp2['Stay']."</li>"; ?>
                            </ul></span>
                            <br><br>
                            <span><ul>
                            <?php echo"<li>".$disp3['Comment']."</li>"; ?>
                            <?php echo"<li>".$disp3['Rating']."</li>"; ?>
                            <?php echo"<li>".$disp3['Stay']."</li>"; ?>
                            </ul></span>
                            
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu. At vero eos et accusamus
                                et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                mollitia animi, id est laborum et dolorum fuga.</p>
                            <p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
                                Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa
                                qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                                non sit amet, consectetur adipiscing elit. Ut adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet.</p>
                            <p>Iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non sit amet, consectetur adipiscing elit. Ut adipiscing elit magna.
                                Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque lorem ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat consectetur adipiscing elit.</p>
                        </div>

                            <!-- End Portfolio -->
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                </div>
                <!--<div class="container background-white">
                    <div class="row padding-vert-40">
                        <div class="col-md-12">
                            <h2 class="animate fadeIn text-center">Explore more</h2>
                            <!--<p class="animate fadeIn text-center">If you like to work with a creative team in a lively and friendly enviroment then call us today!.</p>-->
                            <!--<p class="animate fadeInUp text-center">
                                <button class="btn btn-primary btn-lg" type="button">Go Ahead</button>
                            </p>
                        </div>
                    </div>
                </div>
            
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <!--<div id="content-bottom-border" class="container">
            </div>
            <div id="base">
                <div class="container padding-vert-30 margin-top-60">
                    <div class="row">
                        <!-- Contact Details -->
                        <!--<div class="col-md-4 margin-bottom-20">
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
                        <!--<div class="col-md-300 margin-bottom-20">
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
                            <!--<div class="clearfix"></div>
                        </div>
                        <!-- End Sample Menu -->
                        <div class="col-md-1"></div>
                        <!-- Disclaimer -->
                        <!--<div class="col-md-100 margin-bottom-20 padding-vert-10 text-center">
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
                    <!--</div>
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
        </div>
    </body>
</html>
<!-- === END FOOTER === -->