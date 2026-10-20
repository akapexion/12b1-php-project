<?php
	include("dashboard/config/db.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Purdue - Education HTML Template">
		<meta name="keywords" content="theme_ocean, college, course, e-learning, education, high school, kids, learning, online, online courses, school, student, teacher, tutor, university">
		<meta name="author" content="theme_ocean">
		<!-- SITE TITLE -->
		<title>Purdue - Education HTML Template</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/webfonts/themify-icons.css">
		<!-- All Min Css -->
		<link rel="stylesheet" href="assets/css/all.min.css">
		<link rel="stylesheet" href="assets/css/fontawesome.min.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">						
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<!--jquery-simple-mobilemenu Css-->
        <link rel="stylesheet" href="assets/css/jquery-simple-mobilemenu.css">			
		<!-- animate CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">			
		<!-- Style CSS -->					
		<link rel="stylesheet" href="assets/css/style.css">				
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body>
	
	<!-- START PRELOADER -->
	<div class="preloaders">
		<span class="loader">Loading</span>
	</div>
	<!-- END PRELOADER -->

	<!-- START TOP HEADER CLASS -->
	<div class="top_header_banner">
		<!-- START LOGO WITH CONTACT -->
		<section class="logo-contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="single-top-contact">
							<i class="ti-mobile"></i>
							<h4><a href="tel:+4857548854826">+ 485 7548 8546</a></h4>
						</div>
					</div><!--- END COL -->	
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="single-top-contact">							
							<i class="ti-email"></i>
							<h4><a href="mailto:example@gmail.com">example@mail.com</a></h4>	
						</div>
					</div><!--- END COL -->	
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="single-top-contact">
							<i class="ti-alarm-clock"></i>
							<h4>Mon to sat Open: 9am - 6pm</h4>
						</div>
					</div><!--- END COL -->	
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="top_social_profile">
							<ul>
								<li><a href="#" class="top_f_facebook"><i class="fa-brands fa-facebook"></i></a></li>
								<li><a href="#" class="top_f_twitter"><i class="fa-brands fa-x-twitter"></i></a></li>
								<li><a href="#" class="top_f_instagram"><i class="fa-brands fa-instagram"></i></a></li>
								<li><a href="#" class="top_f_linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div><!--- END COL -->						
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END LOGO WITH CONTACT -->
		
		<!-- START NAVBAR -->  
		<div id="navigation" class="navbar-light bg-faded site-navigation">
			<div class="container">
				<div class="row">
					<div class="col-20 align-self-center">
						<div class="site-logo">
							<a href="index.html"><img src="assets/images/all-img/logo.png" alt=""></a>          				
						</div>
					</div><!--- END Col -->
					
					<div class="col-60 d-flex">
						<nav id="main-menu">
							<ul>
								<li class="menu-item-has-children"><a href="#">Home</a>
									<ul>										
										<li><a href="index.html">Home One</a></li>
										<li><a href="index2.html">Home Two</a></li>
									</ul>
								</li>
								<li><a href="about.html">About</a></li>				  				  
								<li class="menu-item-has-children"><a href="course.html">Course</a>
									<ul>										
										<li><a href="course.html">Course One</a></li>
										<li><a href="course2.html">Course Two</a></li>
										<li><a href="course3.html">Course Three</a></li>
										<li><a href="single_course.html">Course Details</a></li>
									</ul>
								</li>								
								<li class="menu-item-has-children"><a href="#">Pages</a>
									<ul>										
										<li><a href="team.html">Instructor</a></li>
										<li><a href="team-details.html">Instructor Details</a></li>
										<li><a href="event.html">Event</a></li>
										<li><a href="event_single.html">Single Event</a></li>
										<li><a href="pricing.html">Pricing Plan</a></li>
										<li><a href="faq.html">Faq Page</a></li>			
										<li><a href="login.html">Login Page</a></li>				
										<li><a href="register.html">Register</a></li>				
										<li><a href="error.html">404</a></li>				
									</ul>
								</li>							
								<li class="menu-item-has-children"><a href="#">Shop</a>
									<ul>										
										<li><a href="shop.html">Shop</a></li>
										<li><a href="single_shop.html">Single Shop</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>			
									</ul>
								</li>							
								<li class="menu-item-has-children"><a href="blog.html">Blog</a>
									<ul>										
										<li><a href="blog.html">Blog</a></li>
										<li><a href="blog_single.html">Blog Details</a></li>
									</ul>
								</li>					
								
								<?php
									if(isset($_SESSION['role'])){
								?>
								<li><a href="dashboard/logout.php">Logout</a></li>
								<?php
								}
								else {
								?>
								<li><a href="dashboard/login.php">Login</a></li>
								<?php
								}
								?>

							</ul>
						</nav>
					</div><!--- END Col -->
					
					<div class="col-30 d-none d-xl-block text-end align-self-center">
						<div class="home_lc">
							<a href="#" class="hlc">
							  <i class="fa-regular fa-heart"></i>
							  <span class="gactive">0</span>
						   </a>
							<a href="#" class="hlc">
							  <i class="fa-solid fa-cart-shopping"></i>
							  <span class="gactive">2</span>
						   </a>
						</div>
						<div class="call_to_action">
							<a class="btn_two" href="register.html">Enroll Now <i class="fa-solid fa-arrow-right"></i></a>
						</div><!--- END SOCIAL PROFILE -->					
					</div><!--- END Col -->
					
					<ul class="mobile_menu">						
						<li><a href="#">Home</a>
							<ul class="sub-menu">										
								<li><a href="index.html">Home One</a></li>
								<li><a href="index2.html">Home Two</a></li>						
							</ul>
						</li>	
						<li><a href="about.html">About</a></li>						
						<li><a href="#">Course</a>
							<ul class="sub-menu">										
								<li><a href="course.html">Course One</a></li>
								<li><a href="course2.html">Course Two</a></li>
								<li><a href="course3.html">Course Three</a></li>
								<li><a href="single_course.html">Course Details</a></li>									
							</ul>
						</li>
						<li><a href="#">Pages</a>
							<ul class="sub-menu">									
								<li><a href="team.html">Instructor</a></li>
								<li><a href="team-details.html">Instructor Details</a></li>
								<li><a href="event.html">Event</a></li>
								<li><a href="event_single.html">Single Event</a></li>
								<li><a href="pricing.html">Pricing Plan</a></li>
								<li><a href="faq.html">Faq Page</a></li>			
								<li><a href="login.html">Login Page</a></li>				
								<li><a href="register.html">Register</a></li>				
								<li><a href="error.html">404</a></li>						
							</ul>
						</li>
						<li><a href="#">Shop</a>
							<ul class="sub-menu">									
								<li><a href="shop.html">Shop</a></li>
								<li><a href="single_shop.html">Single Shop</a></li>
								<li><a href="cart.html">Cart</a></li>
								<li><a href="checkout.html">Checkout</a></li>						
							</ul>
						</li>			
						<li><a href="blog.html">Blog</a>
							<ul class="sub-menu">										
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog_single.html">Blog Details</a></li>
							</ul>
						</li>
						
						
						<li><a href="contact.html">Contact</a></li>



					</ul>			
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</div> 	  
		<!-- END NAVBAR -->		