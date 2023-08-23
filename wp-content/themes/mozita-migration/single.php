<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mozita_Migration
 */

get_header();
?>

<!-- page-title -->
<section class="page-title centred p_relative">
	<div class="bg-layer" style="background-image: url(assets/images/background/page-title-3.jpg);"></div>
	<div class="pattern-layer" style="background-image: url(assets/images/shape/shape-67.png);"></div>
	<div class="auto-container">
		<div class="content-box">
			<h1><?php the_title();?></h1>
		</div>
	</div>
</section>
<!-- page-title end -->


<!-- sidebar-page-container -->
<section class="sidebar-page-container blog-standard p_relative">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="col-lg-8 col-md-12 col-sm-12 content-side">
				<div class="blog-details-content">
					<div class="content-one mb_40">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<figure class="image-box"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></figure>
								<ul class="post-info clearfix">
									<li><i class="icon-27"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></li>
									<li><i class="icon-56"></i><?php echo get_the_date('M j, Y'); ?> </li>
									<li><i class="icon-57"></i><a href="<?php comments_link(); ?>"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a></li>
								</ul>
								<div class="text">
									<?php the_content(); ?>
								</div>
						<?php endwhile;
						endif; ?>
					</div>

					<div class="post-share-option mb_65">
						<ul class="post-tags clearfix">
							<li>
								<h5><?php _e('Tags :', 'your-theme-textdomain'); ?></h5>
							</li>
							<?php
							$post_tags = get_the_tags();
							if ($post_tags) {
								foreach ($post_tags as $tag) {
									echo '<li><a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a>,</li>';
								}
							}
							?>
						</ul>
						<ul class="share-links clearfix">
							<li><a href="#"><i class="icon-4"></i></a></li>
							<li><a href="#"><i class="icon-5"></i></a></li>
							<li><a href="#"><i class="icon-6"></i></a></li>
							<li><a href="#"><i class="icon-7"></i></a></li>
						</ul>
					</div>

				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
				<?php get_sidebar() ?>
			</div>
		</div>
	</div>
</section>
<!-- sidebar-page-container end -->
<?php
get_footer();
