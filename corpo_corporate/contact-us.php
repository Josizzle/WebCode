<?php
if (isset($_POST["submit"])) {
	$name = $_POST['name'];
	$subject_client = $_POST['subject_client'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$human = intval($_POST['human']);
	$from = 'Demo Contact Form'; 
	$to = 'INFO@cronyweb.com'; 
	$subject = 'Message from Contact Crony mainwebsite ';
	$body ="From: $name\n E-Mail: $email\n Message:\n $message";
	// Check if name has been entered
	if (!$_POST['name']) {
		$errName = 'Please enter your name';
	}
	if (!$_POST['subject_client']) {
		$errSubject_client = 'Please enter your Subject';
	}
	// Check if email has been entered and is valid
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errEmail = 'Please enter a valid email address';
	}
	
	//Check if message has been entered
	if (!$_POST['message']) {
		$errMessage = 'Please enter your message';
	}
	//Check if simple anti-bot test is correct
	if ($human !== 5) {
		$errHuman = 'Your anti-spam is incorrect';
	}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Advoc - Conference & Event HTML5 Template | Contact Us</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header -->
    <header class="main-header">
    	<div class="auto-container clearfix">
        	<!--Logo-->
            <div class="logo"><a href="index-2.html"><img src="images/logo.jpg" alt="Advoc" title="Advoc"></a></div>
            
            <!--Main Menu-->
            <nav class="main-menu">
                <div class="navbar-header">
                    <!-- Toggle Button -->      
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="navbar-collapse collapse clearfix">                                                                                              
                    <ul class="navigation">
                        <li class="dropdown"><a href="index-2.html">Home</a>
                        	<ul class="submenu">
                                <li><a href="index-2.html">Home Style One</a></li>
                                <li><a href="index-3.html">Home Style Two</a></li>
                                <li><a href="index-4.html">Home Style Three</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="about.html">About</a>
                            <ul class="submenu">
                                <li><a href="services.html">Services</a></li>
                                <li><a href="speakers.html">Speakers</a></li>
                                <li class="dropdown"><a href="index-2.html">Home</a>
                                	<ul class="submenu">
                                        <li><a href="index-2.html">Home Style One</a></li>
                                        <li><a href="index-3.html">Home Style Two</a></li>
                                        <li><a href="index-4.html">Home Style Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Meetings</a></li>
                        <li class="dropdown"><a href="schedule.html">Schedule</a>
                        	<ul class="submenu">
                                <li><a href="schedule.html">Schedule Style One</a></li>
                                <li><a href="schedule-2.html">Schedule Style Two</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="blog.html">Blog</a>
                        	<ul class="submenu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-detail.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="current"><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <!--Main Menu End-->
            
        </div>
    </header>
    <!--End Main Header -->
    
    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(images/background/page-banner.jpg);">
    	<div class="auto-container">
        	<h1>Contact us</h1>
        </div>
    </section>
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	
            <div class="row clearfix">
            	
                <!--Map Area-->
            	<div class="col-md-9 col-sm-7 col-xs-12">
                	<div class="map-area" id="map-location"></div>
                </div>
                
                <!--Contact Info-->
                <div class="col-md-3 col-sm-5 col-xs-12">
                	<div class="contact-info">
                    	<h3>Contact</h3>
                    	<div class="text">If you are in the middle of something and you don’t want to miss that important call that could be the start of an exciting new business.</div>
                    	<ul class="info">
                            <li><strong>Email</strong> <a href="mailto:advoc@email.com">advoc@email.com</a></li>
                            <li><strong>Phone</strong> <a href="#">+91 123 456 789</a></li>
                            <li><strong>Fax</strong> +91 123 456 789</li>
                            <li><strong>Website</strong> <a href="http://www.webexample.co.in/">http://www.webexample.co.in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!--Contact Form Area-->
            <div class="row clearfix">
            	<div class="col-md-9 col-sm-12 col-xs-12 contact-form wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                		
                        <!--Contact Form-->
                        <form id="contact-form" method="post" action="contact-us.php">
                        	<div class="row clearfix">
                                
                                <div class="col-md-5 col-sm-6 col-xs-12">
                                    
                                    <div class="form-group">
                                    	<label class="form-label">Name</label>
                                        <input type="text" name="name" value="" placeholder="Enter Your Name">
                                    </div>
                                    
                                    <div class="form-group">
                                    	<label class="form-label">Email</label>
                                        <input type="email" name="email" value="" placeholder="Enter Your Email Address">
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <div class="form-group">
                                    	<label class="form-label">Subject</label>
                                        <input type="text" name="subject_client" value="" placeholder="Enter a Subject">
                                    </div>
                                    
                                </div>
                                
                                <div class="col-md-7 col-sm-6 col-xs-12">
                                    
                                    <div class="form-group">
                                    	<label class="form-label">Message</label>
                                        <textarea name="message" placeholder="Type Your Message Here"></textarea>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <div class="form-group text-right">
                                <button type="submit" name="submit-form" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-envelope"></span> Send Message</button>
                            </div>
                            
                        </form>
                        
                    </div>
                </div>
                
            </div>
        
    </section>
    
    
    <!--Intro Section-->
    <section class="intro-section" style="background-image:url(images/parallax/image-1.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
                <div class="col-md-8 col-sm-8 col-xs-12 text-content">
                	<h2>ARE YOU READY TO MANAGE YOUR OWN PROGRAMS?</h2>
                	<div class="text">All of our virtual professionals are highly experienced in the areas in which they work and have been through a thorough recruitment process.</div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                	<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>SIGN UP TODAY</a>
                </div>
            </div>
        </div>
    </section>
    
    
    <!--Main Footer-->
    <footer class="main-footer">
    	<!--Footer Upper-->
    	<div class="footer-upper">
        	<div class="auto-container">
            	<div class="row clearfix">
                	
                    <!--Footer Widget-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                    	<div class="footer-widget contact-widget">
                        	<h3>Contact Us</h3>
                        	<div class="text">If you are in the middle of something and you don’t want to miss that important call that could be the start of an exciting new business.</div>
                            <ul class="info">
                            	<li><strong>Email</strong> <a href="mailto:advoc@email.com">advoc@email.com</a></li>
                                <li><strong>Phone</strong> <a href="#">+91 123 456 789</a></li>
                                <li><strong>Fax</strong> +91 123 456 789</li>
                                <li><strong>Website</strong> <a href="http://www.webexample.co.in/">http://www.webexample.co.in</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <!--Footer Widget-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                    	<div class="footer-widget services-widget">
                        	<h3>Our Services</h3>
                        	<ul class="links">
                            	<li><a href="#">Startup Criminal chargess</a></li>
                                <li><a href="#">Learning courses for beginners</a></li>
                                <li><a href="#">Phone calling conferences</a></li>
                                <li><a href="#">Business speeches presentations</a></li>
                                <li><a href="#">Clients customer meetings</a></li>
                                <li><a href="#">Rent a business conference room</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <!--Footer Widget-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                    	<div class="footer-widget support-widget">
                        	<h3>Our Support</h3>
                        	<ul class="links">
                            	<li><a href="#">How to get started?</a></li>
                                <li><a href="#">Frequently asked questions</a></li>
                                <li><a href="#">Customer testimonials</a></li>
                                <li><a href="#">Create a personal account</a></li>
                                <li><a href="#">Create a company account</a></li>
                                <li><a href="#">Help Support Center</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <!--Footer Widget-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                    	<div class="footer-widget newsletter-widget">
                        	<h3>Newsletter</h3>
                        	<div class="text">We believe that analysis of your company and your customers is key in responding effectively.</div>
                            
                            <div class="form">
                            	<form method="post" action="#">
                                	<div class="form-group">
                                    	<input type="email" name="email" value="" placeholder="Enter your email address" required autocomplete="off">
                                        <button type="submit" name="submit" class="hvr-bounce-to-right"><span class="fa fa-paper-plane"></span></button>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="social-links">
                            	<a href="#"><span class="fa fa-facebook-f"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-google"></span></a>
                                <a href="#"><span class="fa fa-pinterest-p"></span></a>
                                <a href="#"><span class="fa fa-instagram"></span></a>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--Footer Lower-->
        <div class="footer-lower">
        	<div class="auto-container">
            	<div class="row clearfix">
                	
                    <!--Footer Logo-->
                    <div class="col-md-4 col-sm-4 col-xs-12 footer-logo">
                    	<a href="#"><img src="images/logo.jpg" alt=""></a>
                    </div>
                    
                    <!--Footer Nav-->
                    <div class="col-md-8 col-sm-8 col-xs-12 footer-nav">
                    	<ul>
                        	<li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Meetings</a></li>
                            <li><a href="#">Schedule</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="auto-container">
            	<div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12 footer-logo">Copryright 2016 by Advoc | All rights reserved</div>
                </div>
            </div>
        </div>
        
    </footer>
    
</div>
<!--End pagewrapper-->
<!--Scroll to top-->
<div class="scroll-to-top"></div>
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/wow.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/googlemaps.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>
</body>
</html>