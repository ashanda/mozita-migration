<?php

/**
 * Template Name: Testimonials Page
 *
 */

get_header(); // Include the header

?>

<!-- page-title -->
<section class="page-title centred p_relative">
    <div class="bg-layer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/page-title-3.jpg);"></div>
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

<!-- testimonial-section -->
<section class="testimonial-section coaching-page p_relative centred">
    <div class="thumb-box">
        <div class="thumb thumb-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/thumb-1.png" alt=""></div>
        <div class="thumb thumb-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/thumb-2.png" alt=""></div>
        <div class="thumb thumb-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/thumb-3.png" alt=""></div>
        <div class="thumb thumb-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/thumb-4.png" alt=""></div>
    </div>
    <div class="auto-container">
        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="testimonial-content">
                <div class="icon-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/quote-1.png" alt=""></div>
                <figure class="thumb-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/testimonial-1.jpg" alt=""></figure>
                <ul class="rating clearfix">
                    <li><i class="icon-15"></i></li>
                    <li><i class="icon-15"></i></li>
                    <li><i class="icon-15"></i></li>
                    <li><i class="icon-15"></i></li>
                    <li><i class="icon-15"></i></li>
                </ul>
                <h2>Thank you for immigr...</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et amet fringilla nulla in pulvinar orci sagittis est. Non a, convallis odio est, sollicitudin sagittis nullam sit. Sed id pellentesque viverra scelerisque id eu. Orci elementum amet.</p>
                <h5>Jemmy Catter / <span>CEO Founder</span></h5>
            </div>
            <div class="testimonial-content">
                <div class="icon-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/quote-1.png" alt=""></div>
                <figure class="thumb-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/testimonial-1.jpg" alt=""></figure>
                <ul class="rating clearfix">
                    <li><i class="icon-15"></i></li>
                    <li><i class="icon-15"></i></li>
                    <li><i class="icon-15"></i></li>
                    <li><i class="icon-15"></i></li>
                    <li><i class="icon-15"></i></li>
                </ul>
                <h2>Thank you for immigr...</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et amet fringilla nulla in pulvinar orci sagittis est. Non a, convallis odio est, sollicitudin sagittis nullam sit. Sed id pellentesque viverra scelerisque id eu. Orci elementum amet.</p>
                <h5>Jemmy Catter / <span>CEO Founder</span></h5>
            </div>
            <div class="testimonial-content">
                <div class="icon-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/quote-1.png" alt=""></div>
                <figure class="thumb-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/testimonial-1.jpg" alt=""></figure>
                <ul class="rating clearfix">
                    <li><i class="icon-15"></i></li>
                    <li><i class="icon-15"></i></li>
                    <li><i class="icon-15"></i></li>
                    <li><i class="icon-15"></i></li>
                    <li><i class="icon-15"></i></li>
                </ul>
                <h2>Thank you for immigr...</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et amet fringilla nulla in pulvinar orci sagittis est. Non a, convallis odio est, sollicitudin sagittis nullam sit. Sed id pellentesque viverra scelerisque id eu. Orci elementum amet.</p>
                <h5>Jemmy Catter / <span>CEO Founder</span></h5>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->
<?php

get_footer(); // Include the footer
