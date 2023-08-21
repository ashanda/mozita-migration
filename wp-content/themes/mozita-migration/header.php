<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mozita_Migration
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome-all.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/flaticon.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.fancybox.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/nice-select.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/elpath.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/elements-css/banner.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/elements-css/visa.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/elements-css/about.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/elements-css/feature.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/elements-css/dream.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/elements-css/countries.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/elements-css/coaching.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/elements-css/chooseus.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/elements-css/team.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/elements-css/education.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/elements-css/clients.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/elements-css/news.css" rel="stylesheet">
	<!-- other page cdns -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/elements-css/testimonial.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/elements-css/page-title.css" rel="stylesheet">
	<!-- other page cdns -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="boxed_wrapper home_one">

		<?php get_template_part('preloader'); ?>


		<!-- main header -->
		<header class="main-header">
			<!-- header-top -->
			<div class="header-top">
				<div class="outer-container">
					<div class="top-inner">
						<div class="top-left">
							<ul class="info clearfix">
								<li><i class="icon-1"></i><a href="mailto:info@yourmail.com">info@yourmail.com</a></li>
								<li><i class="icon-2"></i>101 Springs Rd,
									Hornby,
									Christchurch 8042.II</li>
								<li><i class="icon-3"></i>Mon _ Sat: 9.00 to 18.00</li>
							</ul>
						</div>
						<div class="top-right">
							<ul class="social-links clearfix">
								<li><a href="<?php echo home_url(); ?>"><i class="icon-4"></i></a></li>
								<li><a href="<?php echo home_url(); ?>"><i class="icon-5"></i></a></li>
								<li><a href="<?php echo home_url(); ?>"><i class="icon-6"></i></a></li>
								<li><a href="<?php echo home_url(); ?>"><i class="icon-7"></i></a></li>
							</ul>
							<div class="search-form">
								<form action="<?php echo home_url(); ?>" method="post">
									<div class="form-group">
										<input type="search" name="search-field" placeholder="Search ..." required>
										<button type="submit"><i class="icon-8"></i></button>
									</div>
								</form>
							</div>
							<div class="btn-box">
								<a href="<?php echo home_url(); ?>"><span>Appointment</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-lower -->
			<div class="header-lower">
				<div class="outer-box clearfix">
					<div class="logo-box">
						<figure class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a></figure>
					</div>
					<div class="nav-outer">
						<div class="menu-area clearfix">
							<!--Mobile Navigation Toggler-->
							<div class="mobile-nav-toggler">
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</div>
							<!-- <nav class="main-menu navbar-expand-md navbar-light">
								<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class="dropdown"><a href="<?php echo home_url(); ?>">Home</a>
											<ul>
												<li><a href="<?php echo home_url(); ?>">Home Page 01</a></li>
												<li><a href="index-2.html">Home Page 02</a></li>
												<li><a href="index-3.html">Home Page 03</a></li>
												<li><a href="index-4.html">Home Page 04</a></li>
												<li><a href="index-onepage.html">OnePage Home</a></li>
												<li><a href="index-rtl.html">RTL Home</a></li>
												<li class="dropdown"><a href="<?php echo home_url(); ?>">Header Style</a>
													<ul>
														<li><a href="<?php echo home_url(); ?>">Header Style 01</a></li>
														<li><a href="index-2.html">Header Style 02</a></li>
														<li><a href="index-3.html">Header Style 03</a></li>
														<li><a href="index-4.html">Header Style 04</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="dropdown"><a href="<?php echo home_url(); ?>">About</a>
											<ul>
												<li class="dropdown"><a href="<?php echo home_url(); ?>">Team</a>
													<ul>
														<li><a href="team.html">Our Team</a></li>
														<li><a href="team-details.html">Team Details</a></li>
													</ul>
												</li>
												<li><a href="about.html">About Us</a></li>
												<li><a href="faq.html">Faq’s</a></li>
												<li><a href="error.html">404</a></li>
											</ul>
										</li>
										<li><a href="contact.html">Contact Us</a></li>
									</ul>
								</div>
							</nav> -->

							<nav class="main-menu navbar-expand-md navbar-light">
								<?php
								wp_nav_menu(array(
									'theme_location' => 'primary-menu', // Replace 'primary-menu' with your menu location
									'container' => 'div',
									'container_class' => 'collapse navbar-collapse show clearfix',
									'container_id' => 'navbarSupportedContent',
									'menu_class' => 'navigation clearfix',
									'fallback_cb' => false,
								));
								?>
							</nav>
							<script>
								jQuery(document).ready(function($) {
									// Toggle sub-menus on click
									$('.navigation .menu-item-has-children').on('click', '.dropdown-btn', function(e) {
										e.preventDefault();
										$(this).siblings('.sub-menu').toggle();
										$(this).toggleClass('open');
									});
								});
							</script>

						</div>
						<div class="support-box">
							<figure class="image-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/support-1.jpg" alt=""></figure>
							<span>Enquiries</span>
							<a href="tel:0800820820">0800 820 820</a>
						</div>
					</div>
				</div>
			</div>

			<!--sticky Header-->
			<div class="sticky-header">
				<div class="auto-container">
					<div class="outer-box">
						<div class="logo-box">
							<figure class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a></figure>
						</div>
						<div class="menu-area clearfix">
							<nav class="main-menu clearfix">
								<!--Keep This Empty / Menu will come through Javascript-->
							</nav>
						</div>
						<div class="support-box">
							<figure class="image-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/support-1.jpg" alt=""></figure>
							<span>Enquiries</span>
							<a href="tel:0800820820">0800 820 820</a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- main-header end -->

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><i class="fas fa-times"></i></div>

			<nav class="menu-box">
				<div class="nav-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-2.png" alt="" title=""></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<div class="contact-info">
					<h4>Contact Info</h4>
					<ul>
						<li>Chicago 12, Melborne City, USA</li>
						<li><a href="tel:+8801682648101">+88 01682648101</a></li>
						<li><a href="mailto:info@example.com">info@example.com</a></li>
					</ul>
				</div>
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="<?php echo home_url(); ?>"><span class="fab fa-twitter"></span></a></li>
						<li><a href="<?php echo home_url(); ?>"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="<?php echo home_url(); ?>"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="<?php echo home_url(); ?>"><span class="fab fa-instagram"></span></a></li>
						<li><a href="<?php echo home_url(); ?>"><span class="fab fa-youtube"></span></a></li>
					</ul>
				</div>
			</nav>
		</div><!-- End Mobile Menu -->