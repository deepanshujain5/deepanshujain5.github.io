﻿<?php
	if(isset($_POST['submit'])){
		if(isset($_POST['name'],$_POST['email'],$_POST['feedback'])){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$feedback = $_POST['feedback'];
				$content = "-------------------------------".PHP_EOL;
				$content .= "Name : ".$name.PHP_EOL;
				$content .= "Email : ".$email.PHP_EOL;
				$content .= "Feedback :".$feedback.PHP_EOL;
				$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/feedback.txt","a");
				fwrite($fp,$content);
				fclose($fp);
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We are a App making company creating Mobile application for Android, iOS Windows phone ,Windows 8 and BlackBerry 10.
We also specialize in web development and design services, making web sites and web apps, and also promoting and marketing them via SEO, SMO, SMM.">
    <meta name="author" content="Appwallaz">
    <title>Appwallaz- Total Mobile and Web Solutions</title>
    <link rel="icon" type="image/x-icon" href="./favicon.ico" />
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./device-mockups/device-mockups.css" />
    <link rel="stylesheet" type="text/css" href="./device-mockups/device-mockups2.css" />

    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    
    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            
            
            <li style="font-family:Roboto"><a href="#top ">Home</a>
            </li>
            <li style="font-family:Roboto">
                <a href="#about">About</a>
            </li>
            <li style="font-family:Roboto">
                <a href="#services">Services</a>
            </li>
            <li style="font-family:Roboto">
                <a href="#portfolio">Portfolio</a>
            </li>
            <li style="font-family:Roboto">
                <a href="#contact">Contact</a>
            </li>
            <li style="font-family:Roboto">
                <a href="#social">Social</a>
            </li>
        </ul>
    </div>
    <!-- /Side Menu -->

    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
        <div class="vert-text">
            <h1 style="font-family: 'Josefin Sans', sans-serif;font-weight:400;color:snow" >Appwallaz</h1>
            <h3 style="font-family:Roboto;color:snow;font-weight:100">
                Power in your Pocket</h3>
            
            <a href="#about" class="btn btn-default btn-lg" style="font-family:Roboto">What we Do!</a>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->

    <!-- Intro -->
    <div id="about" class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2 style="font-family: 'Josefin Sans', sans-serif;;font-size:3em">We elevate your ideas to reality<br /> You think-We deliver</h2>
                    <p style="font-family:Roboto;font-weight:100;font-size:medium" class="lead">We are a mobile and web solution provider enterprise. We build Android, Windows Phone BlackBerry and iOS Native apps. We provide Web design and development solutions, We also elevate your brand via Search Engine Optimization, Social Media Marketing and Social Media Management</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Intro -->

    <!-- Services -->
    <div id="services" style="font-family: 'Josefin Sans', sans-serif;" class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Our Services</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-html5"></i>
                        <h4>Web Development
                        </h4>
                        <br />
                        <p>We make websites and web apps. We also specialze in various CMS technologies like WordPress, Drupal, Joomla, Magento and OpenKart</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-android"></i>
                        <h4>App Development</h4>
                        <br />
                        <p>We are Mobile App Specialisits. Our developers have thousans of hours of developing expereince in Android, iOS, Windows Phone and BlackBerry Platforms.</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa  fa-facebook"></i>
                        <h4>Social Media Marketing</h4>
                        <p>Your brand needs to be public! We just bridge the gap. We elevate your branding and increase user engagement and belongingness with your Brand!</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-search"></i>
                        <h4>Search Engine Optimization</h4>
                        <p>We've been knowing those panda and penguines very well! With our expert Search Engine Optimization team, We work on gneric and specific keywordsm and avaiate a content driven approach to SEO.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Services -->

    <!-- Callout -->
    <div class="callout">
        <div class="vert-text">
            <h1 style="font-family: 'Josefin Sans', sans-serif;color:black;font-weight:100">Your Ideas- Our Passion</h1>


                <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST">
                    <p><label for="name">Name *</label>	<input type="text" id="name" name="name" required="required" /></p>
                    <p><label for="email">Email *</label><input type="email" required="required" id="email" name="email" /></p>
                    <p><label for="feedback">Feedback *</label><textarea name="feedback" required="required"></textarea></p>
                    <p><input type="submit" name="submit" value="Send Feedback" /></p>
                </form>
        </div>
    </div>
    <!-- /Callout -->

    <!-- Portfolio -->
    <div id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2 style="font-family: 'Josefin Sans', sans-serif;">Our Work</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2 text-center">
                    <div class="portfolio-item">
                        <a href="#">
                            <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                        </a>
                        <h4 style="font-family:Roboto;font-weight:100">Jainism</h4>
                        <h5 style="font-family:Roboto;font-weight:100">This is an application built on windows phone platform! The speciality of this app is user friend interface which resulted in thousands of downloads and great positive response in
                         terms of generous reviews and ratings by the users.</h5>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="portfolio-item">
                        <a href="#">
                            <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                        </a>
                        <h4 style="font-family:Roboto;font-weight:100">Shree Packers and Movers</h4>
                        <h5 style="font-family:Roboto;font-weight:100">The optimization of website load times and Search Engine optimization was done by us. The website was relatively new when it cam with us, We did aggresive content-keyword aware Search engine
                        Optimization and also created a brand value among the users via various Social Media Channels, The company got a lot of buisness with our help. </h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2 text-center">
                    <div class="portfolio-item">
                        <a href="#">
                            <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                        </a>
                        <h4 style="font-family:Roboto;font-weight:100">LifeGuard</h4>
                        <h5 style="font-family:Roboto;font-weight:100">This application was made on demand of BlackBerry India as it was a crowdd sourced idea from <a href="https://www.facebook.com/pages/BlackBerry/211563285530725?sk=app_184851818345492&app_data" target="_blank">BlackBerry Dream App Factory Contest</a> The app was made under association with <a href="http://www.skjapp.com/" target="_blank">SKJ Technologies Pvt. Ltd.</a>
                        The app also was featured via BlackBerry in Social Media channels and <a href="https://www.youtube.com/watch?v=WvfpKCdUoIU&feature=youtu.be" target="_blank">videos.</a></h5>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="portfolio-item">
                        <a href="#">
                            <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                        </a>
                        <h4 style="font-family:Roboto;font-weight:100">Toefl Words</h4>
                        <h5 style="font-family:Roboto;font-weight:100">This application is an in house e-learning project on BlackBerry 10 Platform. The application was targeted specialy for people looking to prepare for TOEFL examination.
                        The app complied highest certification levels of BlackBerry 10 Platform and was thus awarded<b> Built For BlackBerry status.</b> This application was ranked 109 among all Built For BlackBerry applications present in the store and was Featured in Education and Reference category.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Portfolio -->
   

    <!-- Map -->
    <div id="contact" class="map">
        
        <h1 style="font-family: 'Josefin Sans', sans-serif;text-align:center">Contact Us</h1>
        
        <hr style="width:20%;align-items:center">
        <div class="device-mockup" style="text-align:center;" data-device="ipad" data-orientation="landscape" data-color="white">
            <div class="device" style="max-height:50%;max-width:50%;margin-left:25%">
                <div class="screen">
                    <!-- PUT CONTENTS HERE -->
                    <iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Appwallaz%2C%20Tilak%20Nagar%2C%20Jaipur%2C%20Rajasthan%2C%20India&key=AIzaSyARNakUck_L5MwV8_EHUdYz0nxwPl1NMr8"></iframe>
                </div>
            </div>
        </div>


        </div>

</div>
    <!-- /Map -->

    <!-- Footer -->
    <footer >
        <div id="social" class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <ul class="list-inline">
                        <li><a href="mailto:info@appwallaz.com?Subject=Proposal%request%20and%20feedback" target="_blank"><i class="fa fa-inbox fa-3x"></i></a>
                        </li>
                        <li><a href="http://www.facebook.com/appwallaz" target="_blank"> <i class="fa fa-facebook fa-3x"></i></a>
                        </li>
                        <li><a href="https://plus.google.com/+AppwallazOriginal/" target="_blank"><i class="fa fa-google-plus fa-3x"></i></a>
                        </li>
                        <li><a href="http://www.linkedin.com/company/appwallaz/" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a>
                        </li>
                    </ul>
                    <div class="top-scroll">
                        <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
                    </div>
                    <hr>
                    <p style="font-family:Roboto;font-weight:100">Copyright &copy; Appwallaz 2014</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
