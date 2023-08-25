<?php

/**
 * Template Name: Know Country Page
 *
 */

get_header(); // Include the header

?>

<!-- page-title -->
<section class="page-title centred p_relative">
    <div class="bg-layer" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>');"></div>
    <div class="pattern-layer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-67.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1><?php the_title(); ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->


<!-- countries-details -->
<section class="countries-details p_relative">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="countries-sidebar default-sidebar">
                    <div class="sidebar-widget category-widget">
                        <ul class="category-list clearfix">
                            <?php
                            // Query pages with the "Visa Page" template
                            $args = array(
                                'post_type' => 'page',
                                'meta_key' => '_wp_page_template',
                                'meta_value' => 'page-know-country.php', // Replace with the actual template file name
                            );

                            $query = new WP_Query($args);

                            if ($query->have_posts()) :
                                while ($query->have_posts()) :
                                    $query->the_post();
                            ?>
                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php
                                endwhile;

                                wp_reset_postdata();

                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="countries-details-content">
                    <div class="tabs-box">
                    <?php echo (get_field('content')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- countries-details end -->

<?php

get_footer(); // Include the footer