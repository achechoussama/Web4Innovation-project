<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" />
	<meta name="author" content="">
	<title>Master - 3la 3ajla</title>
	<link href="resources/css/bootstrap.min.css" rel="stylesheet">
	<link href="resources/css/prettyPhoto.css" rel="stylesheet">
	<link href="resources/css/font-awesome.min.css" rel="stylesheet">
	<link href="resources/css/animate.css" rel="stylesheet">
	<link href="resources/css/main.css" rel="stylesheet">
	<link href="resources/css/responsive.css" rel="stylesheet">
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script> <![endif]-->
	<link rel="shortcut icon" href="resources/images/ico/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="resources/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="resources/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="resources/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="resources/images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="stylesheet" href="resources/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="resources/css/style.css"> <!-- Gem style -->
	<script src="resources/js/modernizr.js"></script> <!-- Modernizr -->

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
</head><!--/head-->
<body>
	<header role="banner">
		<div id="cd-logo"><a href="#0"><img src="./resources/img/cd-logo.svg" alt="Logo"></a></div>

		<nav class="main-nav">
			<ul>
				<!-- inser more links here -->
				<li><a class="cd-signin" href="#0">Sign in</a></li>
				<li><a class="cd-signup" href="#0">Sign up</a></li>
			</ul>
		</nav>
	</header>

	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Login">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->

	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner">
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
			</div>
		</div>
	</div><!--/.preloader-->



	<section id="home">
		<div class="home-pattern"></div>
		<div id="main-carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class=""></li>
				<li data-target="#main-carousel" data-slide-to="1" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="2" class=""></li>
			</ol><!--/.carousel-indicators-->
			<div class="carousel-inner">
				<div class="item" style="height: 879px; background-image: url(&quot;resources/images/slider/slide3.jpg&quot;);">
					<div class="carousel-caption">
						<div>
							<h2 class="heading animated bounceInDown">SUCCESS IS IN THE DETAILS</h2>
							<p class="animated bounceInUp">And you are engineered for success</p>
							<a class="btn btn-default slider-btn animated fadeIn" href="#">log in</a>
						</div>
					</div>
				</div>
				<div class="item active" style="height: 879px; background-image: url(&quot;resources/images/slider/slide2.jpg&quot;);">
					<div class="carousel-caption"> <div>
						<h2 class="heading animated bounceInDown">DESIGNED FOR ACCOMPLISHEMENT</h2>
						<p class="animated bounceInUp">Since amators hope is professionals wrok </p> <a class="btn btn-default slider-btn animated fadeIn" href="#">LOG IN</a>
					</div>
				</div>
			</div>
			<div class="item" style="height: 879px; background-image: url(&quot;resources/images/slider/slide1.jpg&quot;);">
				<div class="carousel-caption">
					<div>
						<h2 class="heading animated bounceInRight">THINK OUTSIDE THE BOX</h2>
						<p class="animated bounceInLeft">Because it is kind of fun doing something IMPOSSIBLE</p>
						<a class="btn btn-default slider-btn animated bounceInUp" href="#">LOG IN</a>
					</div>
				</div>
			</div>
		</div><!--/.carousel-inner-->

		<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
	</div>

</section><!--/#home-->

<section id="about-us">
	<div class="container">
		<div class="text-center">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="title-one">ABOUT US </h2>
				<p>Masters is a group of Tunisian IT engineering students reunited from several states in order to enjoy coding web development </p>
			</div>
		</div>
		<div class="about-us">
			<div class="row">
				<div class="col-sm-8 col-md-offset-2">
					<h3>Our Mentor: TUNES</h3>
					<ul class="nav nav-tabs">
						<li class=""><a href="#about" data-toggle="tab"><i class="fa fa-chain-broken"></i> About</a></li>
						<li class=""><a href="#mission" data-toggle="tab"><i class="fa fa-th-large"></i> Mission</a></li>
						<li class="active"><a href="#community" data-toggle="tab"><i class="fa fa-users"></i> Community</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade" id="about">
							<div class="media">
								<img class="pull-left media-object" src="resources/images/about-us/tunesLogo.jpg" alt="about us">
								<div class="media-body">
									<p>
The Association of University Tunisians in Switzerland (TUNES) is a young association, founded in May 2011, officially recognized by the Ecole Polytechnique Fédérale de Lausanne (EPFL), to non-political, non-religious and non-profit.</p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="mission">
							<div class="media">
								<img class="pull-left media-object" src="resources/images/about-us/mission.jpg" alt="Mission">
								<div class="media-body">
									<p>Our association, which draws its grip in dexterity, competence and motivation of its young members from the high Swiss university's primary mission is to supervise the Tunisian students in Switzerland and to facilitate their integration into student life. We are also promoting the image of Tunisia and its development a major concern and a subject of labor and continuous mobilization.Within TUNES, we firmly believe that all Tunisians, whatever their origin, place of living and social membership is entitled to a dignified and respectable life where housing, food and access to education and that to information is a guaranteed minimum. Our association does not miss an event or cultural event, to shine the image of Tunisia, to ensure the promotion of its tourism and raise funds for the poorest regions. </p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade active in" id="community">
							<div class="media">
								<img class="pull-left media-object" src="resources/images/about-us/commity.jpg" alt="Community">
								<div class="media-body">
									<p>
President : Ali Fessi<br>
Vice President : Aymen Tiouri<br>
General Secretary: Mehdi Trabelsi<br>
Treasurer: Osama Zouaghia<br>
Social pole : Kheizurane El Mekki and Sami Ben Hassen<br>
Economic pole: Mehdi Hashish and Miriam Farhat<br>
University Centre : BEN HASSEN Mahdi and Meriam Neffati<br>
Communication pole: OmarBoujdaria and Omar Chabchoub
</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div></section><!--/#about-us-->

	<section id="services" class="parallax-section" style="background-position: 50% 479px;">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">Services</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="our-service">
						<div class="services row">
							<div class="col-sm-4">
								<div class="single-service">
									<i class="fa fa-th"></i>
									<h2>Modern Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-service">
									<i class="fa fa-html5"></i>
									<h2>Web Development</h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy </p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-service">
									<i class="fa fa-users"></i>
									<h2>Online Marketing</h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
								</div>
							</div></div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#service-->


						<section id="contact">
							<div class="container">
								<div class="row text-center clearfix">
									<div class="col-sm-8 col-sm-offset-2">
										<div class="contact-heading">
											<h2 class="title-one">Contact Us</h2>

										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="contact-details">
									<div class="pattern"></div>
									<div class="row text-center clearfix">
										<div class="col-sm-6">
											<div class="contact-address"><address><p><span>M</span>asters</p><strong>POULINA, siege annexe<br>EZZAHRA, BENAROUS<br>EZZAHRA-2034, TUNISIA</strong><br><small></small></address>
												<div class="social-icons">
													<a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a>
													<a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
													<a href="#"><i class="fa fa-linkedin"></i></a>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div id="contact-form-section">
												<div class="status alert alert-success" style="display: none"></div>
												<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
													<div class="form-group">
														<input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name"></div>
														<div class="form-group">
															<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
														</div>
														<div class="form-group">
															<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
														</div>
														<div class="form-group">
															<button type="submit" class="btn btn-primary">Send</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section> <!--/#contact-->

	<footer id="footer">
		<div class="container">
			<div class="text-center">
				<p>Copyright © 2014 - <a href="http://mostafiz.me/">Mostafiz</a> | All Rights Reserved</p>
			</div>
		</div>
	</footer> <!--/#footer-->

	<script type="text/javascript" src="libraries/js/jquery.js"></script>
	<script type="text/javascript" src="libraries/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="libraries/js/smoothscroll.js"></script>
	<script type="text/javascript" src="libraries/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="libraries/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="libraries/js/jquery.parallax.js"></script>
	<script type="text/javascript" src="libraries/js/main.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="resources/js/main.js"></script> <!-- Gem jQuery -->

</body></html>
