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
					<div class="comments-box mb_60">
						<div class="group-title pb_40">
							<h3><?php _e('Comments', 'your-theme-textdomain'); ?>(<?php echo get_comments_number(); ?>)</h3>
						</div>
						<div class="comment-inner">
							<?php
							$comments = get_comments(array(
								'post_id' => get_the_ID(),
								'status' => 'approve'
							));

							foreach ($comments as $comment) :
							?>
								<div class="comment">
									<figure class="comment-thumb">
										<?php echo get_avatar($comment, 80); ?>
									</figure>
									<h5><?php echo get_comment_author(); ?> <span><?php echo get_comment_date(); ?></span></h5>
									<p><?php echo get_comment_text(); ?></p>
									<a href="<?php echo get_comment_link($comment); ?>" class="reply-btn"><img src="assets/images/icons/icon-16.png" alt=""></a>
								</div>
							<?php endforeach; ?>
						</div>
					</div>

					<div class="comments-form-area">
						<div class="group-title pb_20">
							<h3><?php _e('Leave a Reply', 'your-theme-textdomain'); ?></h3>
						</div>
						<div class="form-inner">
							<?php
							$comment_form_args = array(
								'title_reply' => '',
								'comment_notes_before' => '',
								'comment_notes_after' => '',
								'fields' => array(
									'author' => '<div class="col-lg-6 col-md-6 col-sm-12 form-group"><input type="text" name="author" placeholder="' . __('Name', 'your-theme-textdomain') . '" required=""></div>',
									'email' => '<div class="col-lg-6 col-md-6 col-sm-12 form-group"><input type="email" name="email" placeholder="' . __('Email', 'your-theme-textdomain') . '" required=""></div>',
									'url' => '<div class="col-lg-12 col-md-12 col-sm-12 form-group"><input type="text" name="url" placeholder="' . __('Website', 'your-theme-textdomain') . '"></div>'
								),
								'comment_field' => '<div class="col-lg-12 col-md-12 col-sm-12 form-group"><textarea name="comment" placeholder="' . __('Your Text Here', 'your-theme-textdomain') . '"></textarea></div>',
								'class_submit' => 'theme-btn btn-two',
								'submit_button' => '<div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
			<button type="submit" class="theme-btn btn-two"><span>Post Comment</span></button>
		</div>
		',
							);

							comment_form($comment_form_args);
							?>
						</div>
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
