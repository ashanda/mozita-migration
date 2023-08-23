<?php

/**
 * Template Name: Visa Page
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
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- visa-details -->
<section class="visa-details p_relative">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="visa-sidebar default-sidebar">
                    <div class="sidebar-widget category-widget">
                        <ul class="category-list clearfix">


                            <?php
                            // Query pages with the "Visa Page" template
                            $args = array(
                                'post_type' => 'page',
                                'meta_key' => '_wp_page_template',
                                'meta_value' => 'page-visa.php', // Replace with the actual template file name
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
                    <div class="sidebar-widget travel-widget">
                        <div class="widget-content p_relative">
                            <figure class="image-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/travel-1.jpg" alt=""></figure>
                            <div class="content-box">
                                <h3>Travel Pass</h3>
                                <ul class="list-item clearfix">
                                    <li>Application Form</li>
                                    <li>Checklist</li>
                                    <li>Guidelines</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget download-widget">
                        <div class="widget-content">
                            <div class="icon-shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-15.png" alt=""></div>
                            <h3>Annual Report / <br />Online Appointment</h3>
                            <ul class="download-list clearfix">
                                <li>
                                    <a href="#">
                                        <i class="icon-50"></i>
                                        <p>Application Form</p>
                                        <span>450kb</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-50"></i>
                                        <p>Application Form</p>
                                        <span>450kb</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="visa-details-content">
                    <div class="content-one mb_60">
                        <div class="text mb_45">
                            <h2><?php echo esc_html(get_field('title')); ?></h2>
                            <p><?php echo esc_html(get_field('description')); ?></p>
                        </div>
                        <?php
                        // Get the custom image field value
                        $content_image = get_field('content_image');

                        // Check if the custom image has a value
                        if ($content_image) {
                            echo '<figure class="image-box">';
                            echo '<img src="' . esc_url($content_image['url']) . '" alt="' . esc_attr($content_image['alt']) . '">';
                            echo '</figure>';
                        }

                        ?>

                        <div class="lower-text">
                            <?php
                            $bottomImageText = get_field('bottom_image_text');
                            if ($bottomImageText) {
                                echo '<p>' . esc_html($bottomImageText) . '</p>';
                            }
                            ?>
                        </div>


                    </div>
                    <!-- middle sec -->
                    <?php
                    $middle_section = get_field('middle_section');
                    if ($middle_section) : ?>
                        <div class="content-two mb_35">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 left-column">
                                    <div class="left-content">
                                        <h3><?php echo ($middle_section['title']); ?></h3>
                                        <p><?php echo ($middle_section['description']); ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 right-column">
                                    <div class="right-content">
                                        <h3><?php echo ($middle_section['points_section_title']); ?></h3>

                                        <ul class="list-item clearfix">
                                            <?php
                                            $points = ($middle_section['points']);
                                            if ($points) :
                                                $counter = 1;
                                                foreach ($points as $point) : ?>
                                                    <li><a href="<?php echo esc_url($point['link']); ?>"><?php echo $counter . '. ' . esc_html($point['title']); ?> <i class="icon-9"></i></a></li>
                                            <?php
                                                    $counter++;
                                                endforeach;
                                            endif;
                                            ?>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endif;
                    ?>
                    <!-- middle sec -->
                    <?php
                    $bottom_section = get_field('bottom_section');
                    if ($bottom_section) : ?>
                        <div class="content-three">
                            <div class="row clearfix">
                                <?php
                                $cards = ($bottom_section['cards']);
                                if ($cards) :
                                    foreach ($cards as $card) :
                                ?>
                                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <figure class="image-box"><img src="<?php echo ($card['image']); ?>" alt=""></figure>
                                                <div class="lower-content">
                                                    <h3><?php echo ($card['title']); ?></h3>
                                                    <p><?php echo ($card['description']); ?></p>
                                                    <ul class="list-item clearfix">
                                                        <?php
                                                        $points = $card['points'];
                                                        if ($points) :
                                                            $point_number = 1; 
                                                            foreach ($points as $point) :
                                                        ?>
                                                                <li><a href="<?php echo esc_url($point['link']); ?>"><?php echo $point_number . '. ' . esc_html($point['title']); ?></a></li>
                                                        <?php
                                                                $point_number++;
                                                            endforeach;
                                                        endif;
                                                        ?>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    endforeach;
                                endif;
                                ?>

                            </div>
                        </div>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- visa-details end -->
<?php

get_footer(); // Include the footer