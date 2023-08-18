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
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="boxed_wrapper home_one">

	<?php get_template_part('preloader'); ?>
