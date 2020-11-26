
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>E-Banking a Banking Category Bootstrap Bootstrap Responsive website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="E-Banking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/font-awesome.css" rel="stylesheet">   <!-- font-awesome icons --> 
<!-- //Custom Theme files -->  
<!-- js --> 
	<script src="js/jquery-2.2.3.min.js"></script>
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- //web-fonts --> 
</head>
<body> 
	<!-- header -->
	<div class="headerw3-agile"> 
		<div class="header-w3mdl"><!-- header-two --> 
			<div class="container"> 
				<div class="agileits-logo navbar-left">
					<h1><a href="index.html"><img src="images/e.png" alt="logo"/> !!!!!!!!!! Super Secure Banking !!!!!!!!!!!</a></h1>
				</div> 
				<div class="agileits-hdright nav navbar-nav">
					<div class="header-w3top"><!-- header-top --> 
						<ul class="w3l-nav-top">
							<li><i class="fa fa-phone"></i><span> +01 222 111 444 </span></li> 
							<li><a href="mailto:example@mail.com"><i class="fa fa-envelope-o"></i><span>SecurestBankingInTheWholeWideWorld@superBank.com</span></a></li>
						</ul>
						<div class="clearfix"> </div> 	 
					</div>
					<div class="agile_social_banner">
						<ul class="agileits_social_list">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						</ul>
					</div>  

				</div>
				<div class="clearfix"> </div> 
			</div>	
		</div>	
	</div>	
	<!-- //header -->  
	<!-- banner -->
	<div class="banner">
		<div class="header-nav"><!-- header-three --> 	
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						Menu 
					</button> 
				</div>
				<!-- top-nav -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index.html" class="active">Home</a></li>

						<li><a href="services.html" class="scroll">services</a></li>    

							<ul class="dropdown-menu">
								<li><a href="icons.html">Icons</a></li>
								<li><a href="typography.html">Typograpghy</a></li>
							</ul>
						</li>
					</ul>  
					<div class="clearfix"> </div>	
				</div>
			</nav>    
		</div>

		<div id='login_status_bar'>
			<?php
				if ($_SESSION['loggedIn']) {
					include_once('./templates/logout_menu.php');
				} else {
					include_once('./templates/login_menu.php');
				}
			?>
		</div>

		<!-- banner-text -->
		<!-- banner -->
		<div class="container">
			<div class="banner-text agileits-w3layouts">
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-textagileinfo">
								<h6>Die Sicherste Bank auf der ganzen weiten Welt</h6>
								<h3>Sicherer als die Polizei erlaubt</h3>
								<p>Vertrauen Sie auf uns. </p>
								<div class="agileits-banner-bot">
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>01</h5>
										<h4>praktisch</h4>
										<p> ist so.</p>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>02</h5>
										<h4>garantiert</h4>
										<p> versprochen!</p>
										
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>03</h5>
										<h4>vertrauenswürdig</h4>
										<p> Gauben Sie uns!</p>

										
									</div>
									<div class="clearfix"></div>
								</div>	
							</div>	
						</li>


					</ul>
				</div>
			</div>
		 </div>
	</div>
	<!-- about -->
	<div class="home-about w3ls-section">
		<div class="container">
			<!-- about top-->
			<!-- //about top-->


			<!-- //about-bottom-grid-->
	</div>
	<!-- //about -->
	<!--services-->

	<!--//services-->
	<!-- testimonials -->
<div class="testimonials w3ls-section" id="testimonials">
	<div class="container"> 
		<h3 class="h3-w3l">Testimonials</h3>
		<div class="agile_testimonials_grids">
			<div class="col-md-6 col-sm-6 agile_testimonials_grid">
				<div class="agile_testimonials_grid1">
					<div class="w3_agile_testimonials_grid_right test-tooltip">
					   <p>Sicher ist sicher</p>
					</div>
					<div class="w3_agile_testimonials_grid">
						<div class="w3_agile_testimonials_grid_left">
							<div class="col-md-3 col-sm-3 col-xs-3 w3l-testi-img">
								<img src="images/13.jpg" alt=" " class="img-responsive"/>
							</div>	
							<div class="col-md-9 col-sm-9 col-xs-9 w3l-testi-txt">
								<h4>Tyson</h4>
								<p></p>
							</div>	
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 agile_testimonials_grid">
				<div class="agile_testimonials_grid1">
					<div class="w3_agile_testimonials_grid_right test-tooltip">
						 <p>ich sach man so, bisher keene Probleme jehabt...</p>
					</div>
					<div class="w3_agile_testimonials_grid">
						<div class="w3_agile_testimonials_grid_left">
							<div class="col-md-3 col-sm-3 col-xs-3 w3l-testi-img">
								<img src="images/10.jpg" alt=" " class="img-responsive"/>
							</div>	
							<div class="col-md-9 col-sm-9 col-xs-9 w3l-testi-txt">
								<h4>Alejandra</h4>
								<p></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 agile_testimonials_grid">
				<div class="agile_testimonials_grid1">
					<div class="w3_agile_testimonials_grid_right test-tooltip">
					   <p>Erfüllt sein Zweck!</p>
					</div>
					<div class="w3_agile_testimonials_grid">
						<div class="w3_agile_testimonials_grid_left">
							<div class="col-md-3 col-sm-3 col-xs-3 w3l-testi-img">
								<img src="images/11.jpg" alt=" " class="img-responsive"/>
							</div>	
							<div class="col-md-9 col-sm-9 col-xs-9 w3l-testi-txt">
								<h4>Charles</h4>
								<p>/p>
							</div>	
							<div class="clearfix"> </div>
						</div>
					</div>					
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 agile_testimonials_grid">
				<div class="agile_testimonials_grid1">
					<div class="w3_agile_testimonials_grid_right test-tooltip">
					   <p>Shut up and take my money.</p>
					</div>
					<div class="w3_agile_testimonials_grid">
						<div class="w3_agile_testimonials_grid_left">
							<div class="col-md-3 col-sm-3 col-xs-3 w3l-testi-img">
								<img src="images/12.jpg" alt=" " class="img-responsive" />
							</div>
							<div class="col-md-9 col-sm-9 col-xs-9 w3l-testi-txt">
								<h4>Jessie</h4>
								<p></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //testimonials -->
<!--footer-->
<div class="agile-footer w3ls-section">
	<div class="container">
		<div class="col-md-7 list-footer">
		  <ul class="footer-nav">
				<li><a  href="index.html">Home</a></li>
				<li><a  href="services.html">Services</a></li>

		  </ul>
		</div>
		<div class="col-md-5 agileinfo-sub">
			<a href="#" data-toggle="modal" data-target="#myModal1">subscribe</a>
		</div>
		<div class="clearfix"></div>
     </div>
</div>	 
<div class="w3_agile-copyright text-center">
		<p>© 2017 Super Secure Banking. All rights reserved | Design by <a href="//w3layouts.com/">W3layouts</a></p>
	</div>
<!--//footer-->	



	<!-- //banner -->
		<!-- //banner-text -->  
	<!-- //banner -->

	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>

</body>
</html>