<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mozita_Migration
 */

?>

<div class="default-sidebar blog-sidebar ml_10">

	<div class="sidebar-widget search-widget">
		<div class="widget-title">
			<h3><?php _e('Search', 'your-theme-textdomain'); ?></h3>
		</div>
		<div class="search-form">
			<?php get_search_form(); ?>
		</div>
	</div>

	<div class="sidebar-widget category-widget">
		<div class="widget-title">
			<h3><?php _e('Categories', 'your-theme-textdomain'); ?></h3>
		</div>
		<div class="widget-content">
			<ul class="category-list-two clearfix">
				<?php
				$categories = get_categories();
				foreach ($categories as $category) {
					echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
				}
				?>
			</ul>
		</div>
	</div>

	<div class="sidebar-widget post-widget">
		<div class="widget-title">
			<h3><?php _e('Popular Posts', 'your-theme-textdomain'); ?></h3>
		</div>
		<div class="post-inner">
			<?php
			$popular_posts = new WP_Query(array(
				'posts_per_page' => 3,
				'orderby' => 'comment_count',
				'order' => 'DESC'
			));
			while ($popular_posts->have_posts()) : $popular_posts->the_post();
			?>
				<div class="post">
					<figure class="post-thumb"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a></figure>
					<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					<span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
				</div>
			<?php
			endwhile;
			wp_reset_postdata();
			?>
		</div>
	</div>

	<!-- Other widgets go here -->

</div>