<?php

/**
 * Template Name: News Page
 *
 */

get_header(); // Include the header

?>

<!-- page-title -->
<section class="page-title centred p_relative">
    <div class="bg-layer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/16.png);"></div>
    <div class="pattern-layer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-67.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1><?php the_title(); ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->


<!-- sidebar-page-container -->
<section class="sidebar-page-container blog-standard p_relative">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-standard-content">

                    <?php
                    // Custom WP Query to fetch blog posts for the loop
                    $args = array(
                        'post_type' => 'post', // You can change this to a custom post type if needed
                        'posts_per_page' => 5, // Number of posts to display
                    );

                    $query = new WP_Query($args);

                    while ($query->have_posts()) :
                        $query->the_post();
                    ?>

                        <div class="news-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a></figure>
                                <div class="lower-content">
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-27"></i><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></li>
                                        <li><i class="icon-56"></i><?php the_date('M j, Y'); ?> </li>
                                        <li><i class="icon-57"></i><a href="<?php the_permalink(); ?>"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a></li>
                                    </ul>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="link-btn">
                                        <a href="<?php the_permalink(); ?>"><span><?php _e('Read More', 'your-theme-textdomain'); ?></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    endwhile;
                    wp_reset_postdata(); // Reset the query to prevent conflicts
                    ?>

                    <div class="pagination-wrapper pt_40">
                        <?php
                        // Pagination links
                        the_posts_pagination(array(
                            'prev_text' => '<i class="icon-58"></i>',
                            'next_text' => '<i class="icon-59"></i>',
                        ));
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <?php get_sidebar() ?>
            </div>

        </div>
    </div>
</section>
<?php

get_footer(); // Include the footer