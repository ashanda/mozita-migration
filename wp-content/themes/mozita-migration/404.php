<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Mozita_Migration
 */

get_header();
?>

<!-- error-section -->
<section class="error-section centred">
	<div class="auto-container">
		<div class="content-box">
			<div class="title-box">
				<div class="error-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/error-1.png" alt=""></div>
				<span class="text-one">4</span>
				<span class="text-two">4</span>
				<h2>Not Found</h2>
			</div>
			<h1>Sorry, Something Went Wrong</h1>
			<p>Oops! The page you are looking for does not exist. Please return to the site’s homepage.</p>
			<div class="btn-box">
				<a href="<?php echo home_url(); ?>" class="theme-btn btn-two"><span>Back To Home</span></a>
			</div>
		</div>
	</div>
</section>
<!-- error-section end -->

<?php
get_footer();
