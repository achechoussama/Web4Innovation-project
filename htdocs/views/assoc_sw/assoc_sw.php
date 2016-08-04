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
	<link rel="stylesheet" href="./resources/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="./resources/css/style.css"> <!-- Gem style -->
	<link href="./resources/css/freelancer.min.css" rel="stylesheet">
	<script src="./resources/js/modernizr.js"></script> <!-- Modernizr -->
</head><!--/head-->
<body>
	<header role="banner">
		<div id="cd-logo"><a href="index.php"><img src="./resources/img/cd-logo.svg" alt="Logo"></a></div>

		<nav class="main-nav">
			<ul>
				<!-- inser more links here -->
				<li><a  href="#dashboard">Dashboard</a></li>
				<li><a  href="#portfolio">Projects</a></li>
				<li><a  href="#our-team">Our Team</a></li>
				<li><a  href="#contact">Contact</a></li>
				<li><a class="cd-signin" href="#contact">Profile</a></li>


			</ul>
		</nav>
		<div class="container" id="dashboard">
				<div class="row">
						<div class="col-lg-12">
								<img class="img-responsive" src="$assoc_sw[0]->logo" alt="">
								<div class="intro-text">
										<span class="name" style="color: #666666;"><?php echo $assoc_sw[0]->name; ?></span>
										<hr class="star">
										<span class="skills" style="color: #666666;"><?php echo $assoc_sw[0]->description; ?></span>
								</div>
						</div>
				</div>
		</div>
	</header>

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
</div>

		<section id="portfolio" style="margin-top:800px" class="scroll">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="title-one">Projects</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
					</div>
				</div>
				<ul class="portfolio-filter text-center">
					<li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".html">In progress</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".wordpress">Pending</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".joomla">Draft</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".megento">Done</a></li>
				</ul><!--/#portfolio-filter-->
				<div class="portfolio-items">
					<div class="col-sm-3 col-xs-12 portfolio-item html">
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="resources/images/portfolio/1.jpg" alt=""></div>
								<div class="mask text-center">
									<h3>Novel</h3>
									<h4>Lorem ipsum dolor sit amet consectetur</h4>
									<a href="#"><i class="fa fa-link"></i></a>
									<a href="page.html" ><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12 portfolio-item jooma">
							<div class="view efffect" >
								<div class="portfolio-image">
									<img src="resources/images/portfolio/2.jpg" alt="">
								</div>
								<div class="mask text-center">
									<h3>Novel</h3>
									<h4>Lorem ipsum dolor sit amet consectetur</h4>
									<a href="#"><i class="fa fa-link"></i></a>
									<a href="resources/images/portfolio/big-item4.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12 portfolio-item wordpress">
							<div class="view efffect">
								<div class="portfolio-image">
									<img src="resources/images/portfolio/3.jpg" alt="">
								</div>
								<div class="mask text-center">
								<h3>Novel</h3>
								<h4>Lorem ipsum dolor sit amet consectetur</h4>
								<a href="#"><i class="fa fa-link"></i></a>
								<a href="resources/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-12 portfolio-item megento">
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="resources/images/portfolio/4.jpg" alt="">
							</div>
							<div class="mask text-center">
								<h3>Novel</h3>
								<h4>Lorem ipsum dolor sit amet consectetur</h4>
								<a href="#"><i class="fa fa-link"></i></a>
								<a href="resources/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-12 portfolio-item html">
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="resources/images/portfolio/5.jpg" alt="">
							</div> <div class="mask text-center">
							<h3>Novel</h3>
							<h4>Lorem ipsum dolor sit amet consectetur</h4>
							<a href="#"><i class="fa fa-link"></i></a>
							<a href="resources/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12 portfolio-item wordpress">
					<div class="view efffect">
						<div class="portfolio-image">
							<img src="resources/images/portfolio/6.jpg" alt="">
						</div>
						<div class="mask text-center">
							<h3>Novel</h3>
							<h4>Lorem ipsum dolor sit amet consectetur</h4>
							<a href="#"><i class="fa fa-link"></i></a>
							<a href="resources/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12 portfolio-item html">
					<div class="view efffect">
						<div class="portfolio-image">
							<img src="resources/images/portfolio/7.jpg" alt="">
						</div>
						<div class="mask text-center">
							<h3>Novel</h3>
							<h4>Lorem ipsum dolor sit amet consectetur</h4>
							<a href="#"><i class="fa fa-link"></i></a>
							<a href="resources/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12 portfolio-item joomla">
					<div class="view efffect">
						<div class="portfolio-image">
							<img src="resources/images/portfolio/8.jpg" alt=""></div>
							<div class="mask text-center">
								<h3>Novel</h3>
								<h4>Lorem ipsum dolor sit amet consectetur</h4>
								<a href="#"><i class="fa fa-link"></i></a>
								<a href="resources/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-12 portfolio-item html">
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="resources/images/portfolio/9.jpg" alt="">
							</div>
							<div class="mask text-center">
								<h3>Novel</h3>
								<h4>Lorem ipsum dolor sit amet consectetur</h4>
								<a href="#"><i class="fa fa-link"></i></a>
								<a href="resources/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-12 portfolio-item wordpress">
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="resources/images/portfolio/10.jpg" alt=""></div>
								<div class="mask text-center">
									<h3>Novel</h3>
									<h4>Lorem ipsum dolor sit amet consectetur</h4>
									<a href="#"><i class="fa fa-link"></i></a>
									<a href="resources/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12 portfolio-item joomla">
							<div class="view efffect">
								<div class="portfolio-image">
									<img src="resources/images/portfolio/11.jpg" alt=""></div>
									<div class="mask text-center">
										<h3>Novel</h3>
										<h4>Lorem ipsum dolor sit amet consectetur</h4>
										<a href="#"><i class="fa fa-link"></i></a>
										<a href="resources/images/portfolio/big-item3.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-xs-12 portfolio-item megento">
								<div class="view efffect">
									<div class="portfolio-image">
										<img src="resources/images/portfolio/12.jpg" alt=""></div>
										<div class="mask text-center">
											<h3>Novel</h3>
											<h4>Lorem ipsum dolor sit amet consectetur</h4>
											<a href="#"><i class="fa fa-link"></i></a>
											<a href="resources/images/portfolio/big-item4.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</section> <!--/#portfolio-->

					<section id="our-team">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="title-one">Meet The Team</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
					</div>
				</div>
				<div id="team-carousel" class="carousel slide" data-interval="false">
					<a class="member-left" href="#team-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="member-right" href="#team-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					<div class="carousel-inner team-members">
						<div class="row item active">
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="resources/images/our-team/member1.jpg" alt="team member" />
									<h4>William Hurt</h4>
									<h5>Sr. Web Developer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="resources/images/our-team/member2.jpg" alt="team member" />
									<h4>Alekjandra Jony</h4>
									<h5>Creative Designer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="resources/images/our-team/member3.jpg" alt="team member" />
									<h4>Paul Johnson</h4>
									<h5>Skilled Programmer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="resources/images/our-team/member4.jpg" alt="team member" />
									<h4>John Richerds</h4>
									<h5>Marketing Officer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="row item">
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="resources/images/our-team/member1.jpg" alt="team member" />
									<h4>William Hurt</h4>
									<h5>Sr. Web Developer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="resources/images/our-team/member3.jpg" alt="team member" />
									<h4>Paul Johnson</h4>
									<h5>Skilled Programmer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="resources/images/our-team/member2.jpg" alt="team member" />
									<h4>Alekjandra Jony</h4>
									<h5>Creative Designer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="resources/images/our-team/member4.jpg" alt="team member" />
									<h4>John Richerds</h4>
									<h5>Marketing Officer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#Our-Team-->

					<section id="clients" class="parallax-section">
						<div class="container">
							<div class="clients-wrapper">
								<div class="row text-center">
									<div class="col-sm-8 col-sm-offset-2">
										<h2 class="title-one">Clients Say About Us</h2>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
									</div>
								</div>
								<div id="clients-carousel" class="carousel slide" data-ride="carousel"> <!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#clients-carousel" data-slide-to="0" class="active"></li>
										<li data-target="#clients-carousel" data-slide-to="1"></li>
										<li data-target="#clients-carousel" data-slide-to="2"></li>
									</ol> <!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<div class="single-client">
												<div class="media">
													<img class="pull-left" src="resources/images/clients/client1.jpg" alt="">
													<div class="media-body">
														<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="single-client">
												<div class="media">
													<img class="pull-left" src="resources/images/clients/client3.jpg" alt="">
													<div class="media-body">
														<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="single-client">
												<div class="media">
													<img class="pull-left" src="resources/images/clients/client2.jpg" alt="">
													<div class="media-body">
														<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section><!--/#clients-->

						<section id="contact">
							<div class="container">
								<div class="row text-center clearfix">
									<div class="col-sm-8 col-sm-offset-2">
										<div class="contact-heading">
											<h2 class="title-one">Contact With Us</h2>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="contact-details">
									<div class="pattern"></div>
									<div class="row text-center clearfix">
										<div class="col-sm-6">
											<div class="contact-address"><address><p><span>Devs</span>Cluster</p><strong>36 North Kafrul<br>Dhaka Cantonment Area<br> Dhaka-1206, Bangladesh</strong><br><small>( Lorem ipsum dolor sit amet, consectetuer adipiscing elit )</small></address>
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
				<p>Copyright &copy; 2014 - <a href="http://mostafiz.me/">Mostafiz</a> | All Rights Reserved</p>
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
	<script src="./resources/js/main.js"></script> <!-- Gem jQuery -->
</body>
</html>
