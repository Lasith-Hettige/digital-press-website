<?php

require_once('auth.php');


?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Meghna One page parallax responsive HTML Template ">
        
        <meta name="author" content="Muhammad Morshed">
		
        <title>Meghna | Responsive Multipurpose Parallax HTML5 Template</title>
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
		<!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" /> -->
		
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="plugins/themefisher-font/style.css">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
		<!-- Animate.css -->
        <link rel="stylesheet" href="plugins/animate-css/animate.css">
        <!-- Magnific popup css -->
        <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
		<!-- Slick Carousel -->
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/style.css">


			
    </head>
	
    <body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	    <!--
	    Start Preloader
	    ==================================== -->
		<div id="preloader">
			<div class="preloader">
				<div class="sk-cube-grid">
				  <div class="sk-cube sk-cube1"></div>
				  <div class="sk-cube sk-cube2"></div>
				  <div class="sk-cube sk-cube3"></div>
				  <div class="sk-cube sk-cube4"></div>
				  <div class="sk-cube sk-cube5"></div>
				  <div class="sk-cube sk-cube6"></div>
				  <div class="sk-cube sk-cube7"></div>
				  <div class="sk-cube sk-cube8"></div>
				  <div class="sk-cube sk-cube9"></div>
				</div>
			</div>
		</div>
        <!--
        End Preloader
        ==================================== -->

 <!--
Welcome Slider
==================================== -->


 <!-- 
  Fixed Navigation
  ==================================== -->
    <header id="navigation" class="navbar navigation">
        <div class="container">
            <div class="navbar-header">
              <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->
    
                <!-- logo -->
                <a class="navbar-brand logo" href="#body">
                    <!-- <img src="images/logo.png" alt="Website Logo" /> -->
                    <svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC" stroke-width="3">
                                <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
                                <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
                                <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
							</g>

                        </g>
                    </svg>

                </a>

            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="Navigation">
            <ul id="nav" class="nav navbar-nav navigation-menu">

                <li><a data-scroll href="#body">Home</a></li>

                <li><a data-scroll href="#services">Services</a></li>



                <li><a data-scroll href="#contact-us">Contact</a></li>
				<li><a data-scroll href="index.php">LogOut</a></li>
				<li><a style="color:yellow;margin-left:30px;"><?php   $a = $_SESSION['SESS_EMAIL'];
						echo $a; ?></a></li>
            </ul>
        </nav>
        <!-- /main nav -->
  
      </div>
  </header>
  <!--
  End Fixed Navigation
  ==================================== -->

<!--

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section-sm bg-1 overly">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Great Design & Incredible Features</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tenetur odio impedit incidunt? <br> Omnis accusantium ea reiciendis, fugit commodi nostrum.</p>
				<a href="#" class="btn btn-main">Start a project with us</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!-- Start Services Section
==================================== -->

<section id="services" class="bg-one section">
	<div class="container">
		<div class="row">
			
			<!-- section title -->
			<div class="title text-center wow fadeIn" data-wow-duration="500ms">
				<h2>Our <span class="color">Services</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->
			
            <!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<img src="icon/4colour.png" height="92" width="102">
					</div>
					<h3><a href="colourPrinting.php"> 4 Colour Digital Printing</a></h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</article>
            <!-- End Single Service Item -->
            
            <!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<img src="icon/BnW.png" height="92" width="102">
					</div>
					<h3><a href="blackPrinting.php">Black &amp; White Printing</a></h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</article>
            <!-- End Single Service Item -->
            
            <!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<img src="icon/bCard.jpg" height="92" width="102">
					</div>
					<h3><a href="cardPrinting.php">Business Card</a></h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</article>
			<!-- End Single Service Item -->

			<!-- Single Service Item
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-dial"></i>
					</div>
					<h3>Graphic Design</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</article>
			 End Single Service Item -->
			
			<!-- Single Service
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-target3"></i>
					</div>
					<h3>Apps Development</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</article>
			 End Single Service Item -->
			
			<!-- Single Service Item
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
				<div class="service-block text-center kill-margin-bottom">
					<div class="service-icon text-center">
						<i class="tf-lifesaver"></i>
					</div>
					<h3>Networking</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</article>
			End Single Service Item -->
				
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->
	







		





<!-- Srart Contact Us
=========================================== -->		
<section id="contact-us" class="contact-us section-bg">
	<div class="container">
		<div class="row">
			
			<!-- section title -->
			<div class="title text-center wow fadeIn" data-wow-duration="500ms">
				<h2>Get In <span class="color">Touch</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->
			
			<!-- Contact Details -->
			<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
				<h3>Contact Details</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
				<div class="contact-details">
					<div class="con-info clearfix">
						<i class="tf-map-pin"></i>
						<span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
					</div>
					
					<div class="con-info clearfix">
						<i class="tf-ion-ios-telephone-outline"></i>
						<span>Phone: +880-31-000-000</span>
					</div>
					
					<div class="con-info clearfix">
						<i class="tf-ion-iphone"></i>
						<span>Fax: +880-31-000-000</span>
					</div>
					
					<div class="con-info clearfix">
						<i class="tf-ion-ios-email-outline"></i>
						<span>Email: hello@meghna.com</span>
					</div>
				</div>
			</div>
			<!-- / End Contact Details -->

			<!-- Contact Form -->
			<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
				<form id="contact-form" method="post" action="contactMail.php" role="form">

					<?php

					if( isset($_SESSION['ERRMSG_ARRAY']) && is_array($_SESSION['ERRMSG_ARRAY']) && count($_SESSION['ERRMSG_ARRAY']) >0 ) {

						foreach($_SESSION['ERRMSG_ARRAY'] as $msg) {

							echo "<div class='alert alert-warning alert-dismissable fade in'>";
							echo "<strong>$msg</strong> ";
							echo " </div>";
						}

						unset($_SESSION['ERRMSG_ARRAY']);
					}

					if( isset($_SESSION['SUCCMSG_ARRAY']) && is_array($_SESSION['SUCCMSG_ARRAY']) && count($_SESSION['SUCCMSG_ARRAY']) >0 ) {

						foreach($_SESSION['SUCCMSG_ARRAY'] as $msg) {

							echo "<div class='alert alert-success alert-dismissable'>";
							echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>x</a>";
							echo "<strong>$msg</strong> ";
							echo " </div>";
						}

						unset($_SESSION['SUCCMSG_ARRAY']);
					}
					?>
					<div class="form-group">
						<input type="text" placeholder="Your Name" class="form-control" name="name" id="namess">
					</div>

					<div class="form-group">
						<input type="email" placeholder="Your Email" class="form-control" name="email" id="emailss">
					</div>

					<div class="form-group">
						<input type="text" placeholder="Subject" class="form-control" name="subject" id="subjectss">
					</div>

					<div class="form-group">
						<textarea rows="6" placeholder="Message" class="form-control" name="message" id="messagess"></textarea>
					</div>

					<div id="cf-submit">
						<button type="submit" class="btn btn-info btn-lg btn-block">Submit</button>
					</div>


				</form>
			</div>
			<!-- ./End Contact Form -->
		
		</div> <!-- end row -->
	</div> <!-- end container -->
	

	
</section> <!-- end section -->
	


		
		
		<!-- end Contact Area
		========================================== -->
		
		<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">
						
						<!-- Footer Social Links -->
						<div class="social-icon">
							<ul class="list-inline">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-youtube"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-pinterest-outline"></i></a></li>
							</ul>
						</div>
						<!--/. End Footer Social Links -->

						<!-- copyright -->
						<div class="copyright text-center">
							<a href="index.html">
								<!-- <img src="images/logo-meghna.png" alt="Meghna" />  -->
								<svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		                            <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC" stroke-width="3">
		                                <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
		                                <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
		                                <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
		                            </g>
		                        </g>
		                    </svg>
							</a>
							<br />
							
							<p>Design And Developed by <a href="http://www.themefisher.com"> Themefisher Team</a>. Copyright &copy; <script>document.write(new Date().getFullYear())</script>. All Rights Reserved.</p>
						</div>
						<!-- /copyright -->
						
					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer -->

		<div id="scroll-up">
			up
		</div>
		
	    
		
		
		
		
		
		
		


		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- Slick Carousel -->
		<script type="text/javascript" src="plugins/slick-carousel/slick/slick.min.js"></script>
		<!-- Portfolio Filtering -->
		<script type="text/javascript" src="plugins/mixitup/dist/mixitup.min.js"></script>
		<!-- Smooth Scroll -->
		<script type="text/javascript" src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
		<!-- Magnific popup -->
		<script type="text/javascript" src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<!-- Google Map API -->
		<script type="text/javascript"  src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Sticky Nav -->
		<script type="text/javascript" src="plugins/Sticky/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script type="text/javascript" src="plugins/count-to/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script type="text/javascript" src="plugins/wow/dist/wow.min.js"></script>
		<!-- Custom js -->
		<script type="text/javascript" src="js/script.js"></script>
		
    </body>
</html>