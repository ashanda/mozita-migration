<?php

/**
 * Template Name: About Page
 *
 * This is the custom template for your About page.
 */

get_header(); // Include the header

?>
   <!-- page-title -->
   <section class="page-title centred p_relative">
            <div class="bg-layer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/page-title.jpg);"></div>
            <div class="pattern-layer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-67.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1><?php the_title();?></h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li><?php the_title();?></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- contact-style-two -->
        <section class="contact-style-two p_relative">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title mb_30">
                                <span class="sub-title">Quick Contact</span>
                                <h2>Have Questions? <br />Don't Hesitate to Contact Us</h2>
                            </div>
                            <div class="text mb_30">
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet magna suscipit, fermentum mattis erat rutrum.Porta semper lacus cursus, feugiat primis ultrice and ligula risus auctor tempus feugiat dolor and lacinia</p>
                            </div>
                            <div class="location-box pb_40 mb_110">
                                <div class="icon-box"><i class="icon-61"></i></div>
                                <h3>Location</h3>
                                <p>141, First Floor, 12 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                            </div>
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="icon-62"></i></div>
                                            <h3>Quick Contact</h3>
                                            <ul class="info-list clearfix">
                                                <li>
                                                    <h5>Phone:</h5>
                                                    <p><a href="tel:18963648018">+1 89-636-48018</a></p>
                                                </li>
                                                <li>
                                                    <h5>Email:</h5>
                                                    <p><a href="mailto:yourmail@info.com">yourmail@info.com</a></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="icon-63"></i></div>
                                            <h3>Opening Hrs</h3>
                                            <ul class="info-list clearfix">
                                                <li>
                                                    <h5>Mon - Friday:</h5>
                                                    <p>09.00 am to 07.00 pm</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <div class="sec-title mb_40">
                                <span class="sub-title">Let’s Connect</span>
                                <h2>Send Your Message</h2>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet magna suscipit, fermentum mattis erat rutrum.Porta semper.</p>
                            </div>
                            <form method="post" action="sendemail.php" id="contact-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Your message here"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <div class="custom-controls-stacked pb_20">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Save my name, email, and website in this browser for the next time I comment.</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button type="submit" class="theme-btn btn-two" name="submit-form"><span>Message</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->


        <!-- google-map-section -->
        <section class="google-map-section p_relative">
            <div class="auto-container">
                <div class="map-inner p_relative d_block">
                    <div 
                        class="google-map" 
                        id="contact-google-map" 
                        data-map-lat="40.712776" 
                        data-map-lng="-74.005974"  
                        data-map-title="Brooklyn, New York, United Kingdom" 
                        data-map-zoom="12" 
                        data-markers='{
                            "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>"]
                        }'>

                    </div>
                </div>
            </div>
        </section>
        <!-- google-map-section end -->

<?php

get_footer(); // Include the footer