<?php

/**
 * Template Name: About Page
 *
 */

get_header(); // Include the header

?>
<!-- page-title -->
<section class="page-title centred p_relative">
    <div class="bg-layer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/4.png);"></div>
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


<!-- about-style-three -->
<section class="about-style-three about-page p_relative">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-42.png);"></div>
        <div class="pattern-3" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-69.png);"></div>
        <div class="pattern-4" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-70.png);"></div>
    </div>
    <figure class="image-layer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/men-2.png" alt=""></figure>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 content-column offset-lg-3">
                <div class="content_block_six">
                    <div class="content-box mr_20">
                        <div class="sec-title mb_20">
                            <span class="sub-title">About Mozita Migration</span>
                            <h2>Leading firm for immigration services.</h2>
                        </div>
                        <div class="text mb_30">
                            <p>Welcome to Mozita Migration, a proud member of the Mozita Group of companies. With a steadfast commitment to excellence, we are a reliable and dynamic migration consultancy that facilitates a seamless pathway for individuals seeking to make New Zealand their new home.</p>
                        </div>
                        <!-- <div class="inner-box mb_40">
                            <div class="single-item">
                                <div class="icon-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-13.png" alt=""></div>
                                <h5>Overseas education and study visa consultants.</h5>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-14.png" alt=""></div>
                                <h5>Top-ranked universities guarantee admissions.</h5>
                            </div>
                        </div> -->
                        <!-- <div class="btn-box">
                            <a href="#" class="theme-btn btn-two"><span>More Details</span></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                <div class="image-inner clearfix">
                    <div class="image-shape" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-44.png);">
                    </div>
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/about-3.jpg" alt=""></figure>
                    </div>
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/about-4.jpg" alt=""></figure>
                        <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/about-5.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-three end -->

<div class="container-fluid p-5">
    <div class="title-inner mb_50">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="sec-title about-sec">
                    <span class="sub-title">Our Services</span>
                    <h2>Our comprehensive range of visa services caters to diverse needs</h2>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="text about-sec-section-text">
                    <p class="ab-des">including work visas, partner visas, dependent visitor visas, VOC work visas, student visas, and investor visas. With a team of experienced professionals and the support of skilled immigration lawyers, we pride ourselves on a fast and efficient visa process that ensures your migration journey is smooth and successful.</p>
                </div>
            </div> 
        </div>
    </div>
</div>

<!-- feature-section -->
<section class="feature-section about-page alternat-3 pb_150">
    <div class="auto-container">
        <div class="inner-container">
            <div class="shape-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-41.png);"></div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-17"></i></div>
                            <h3><a href="<?php echo home_url(); ?>">Visa</a></h3>
                            <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-18"></i></div>
                            <h3><a href="<?php echo home_url(); ?>">Passport</a></h3>
                            <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-19"></i></div>
                            <h3><a href="<?php echo home_url(); ?>">Immigration</a></h3>
                            <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-20"></i></div>
                            <h3><a href="<?php echo home_url(); ?>">Translation</a></h3>
                            <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-section end -->


<!-- countries-style-three -->
<section class="countries-style-three alternat-2 sec-pad">
    <div class="pattern-layer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-63.png);"></div>
    <div class="auto-container">
        <div class="sec-title mb_60 centred">
            <span class="sub-title">Countries We Offer</span>
            <h2>Immigration Officials approvals for foreign <br />citizens can vary by country.</h2>
        </div>
        <div class="tabs-box">
            <div class="tab-btn-box mb_50">
                <div class="tab-btns tab-buttons">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 btn-column">
                            <div class="tab-btn active-btn" data-tab="#tab-4">
                                <h3><i class="icon-33"></i>Education</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 btn-column">
                            <div class="tab-btn" data-tab="#tab-5">
                                <h3><i class="icon-34"></i>Immigration</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 btn-column">
                            <div class="tab-btn" data-tab="#tab-6">
                                <h3><i class="icon-14"></i>Business</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 btn-column">
                            <div class="tab-btn" data-tab="#tab-7">
                                <h3><i class="icon-17"></i>Tourist</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs-content">
                <div class="tab active-tab" id="tab-4">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-13.png" alt=""></div>
                                    <h3><a href="#">United Kingdom</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Working Visa, Job Visa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-14.png" alt=""></div>
                                    <h3><a href="#">Bahamas</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Eudcation Visa, Only System</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-15.png" alt=""></div>
                                    <h3><a href="#">Canada</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Resident Visa Job Visa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-16.png" alt=""></div>
                                    <h3><a href="#">Brazil</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Student Visa & Admission, Visitor Visa</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="tab-5">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-14.png" alt=""></div>
                                    <h3><a href="#">Bahamas</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Eudcation Visa, Only System</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-13.png" alt=""></div>
                                    <h3><a href="#">United Kingdom</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Working Visa, Job Visa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-15.png" alt=""></div>
                                    <h3><a href="#">Canada</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Resident Visa Job Visa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-16.png" alt=""></div>
                                    <h3><a href="#">Brazil</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Student Visa & Admission, Visitor Visa</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="tab-6">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-15.png" alt=""></div>
                                    <h3><a href="#">Canada</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Resident Visa Job Visa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-13.png" alt=""></div>
                                    <h3><a href="#">United Kingdom</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Working Visa, Job Visa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-14.png" alt=""></div>
                                    <h3><a href="#">Bahamas</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Eudcation Visa, Only System</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-16.png" alt=""></div>
                                    <h3><a href="#">Brazil</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Student Visa & Admission, Visitor Visa</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="tab-7">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-13.png" alt=""></div>
                                    <h3><a href="#">United Kingdom</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Working Visa, Job Visa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-16.png" alt=""></div>
                                    <h3><a href="#">Brazil</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Student Visa & Admission, Visitor Visa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-14.png" alt=""></div>
                                    <h3><a href="#">Bahamas</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Eudcation Visa, Only System</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                            <div class="countries-block-four">
                                <div class="inner-box">
                                    <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-15.png" alt=""></div>
                                    <h3><a href="#">Canada</a></h3>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam
                                        laoreet eget</p>
                                    <div class="text">Visa Type :</div>
                                    <span class="designation">Resident Visa Job Visa</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- countries-style-three end -->


<!-- countries-style-five -->
<section class="countries-style-five p_relative">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-61.png);"></div>
        <div class="pattern-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-62.png);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title mb_60 light">
            <span class="sub-title">Countries We Offer</span>
            <h2>Apply For Quick Visa</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                <div class="countries-block-five wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/countries-9.jpg" alt="">
                            </figure>
                            <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-3.png" alt=""></div>
                        </div>
                        <div class="lower-content">
                            <h5><a href="#">China <span>Visa</span></a></h5>
                            <span class="text">Avenue, Jersey</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                <div class="countries-block-five wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/countries-10.jpg" alt="">
                            </figure>
                            <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-5.png" alt=""></div>
                        </div>
                        <div class="lower-content">
                            <h5><a href="#">United Kingdom <span>Visa</span></a></h5>
                            <span class="text">Asheville</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                <div class="countries-block-five wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/countries-11.jpg" alt="">
                            </figure>
                            <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-8.png" alt=""></div>
                        </div>
                        <div class="lower-content">
                            <h5><a href="#">Brazil <span>Visa</span></a></h5>
                            <span class="text">Amsterdam</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                <div class="countries-block-five wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/countries-12.jpg" alt="">
                            </figure>
                            <div class="flag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-4.png" alt=""></div>
                        </div>
                        <div class="lower-content">
                            <h5><a href="#">Australia <span>Visa</span></a></h5>
                            <span class="text">Queensland</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- countries-style-five end -->


<!-- chooseus-section -->
<section class="chooseus-section p_relative">
    <div class="pattern-layer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-71.png);"></div>
    <div class="auto-container">
        <div class="sec-title centred mb_60">
            <span class="sub-title">Why Choose Us</span>
            <h2>Offer custom-made services that <br />our customer needs.</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                <div class="chooseus-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-1.png" alt=""></div>
                        <h3><a href="<?php echo home_url(); ?>">Direct Interviews</a></h3>
                        <p>Where did this incorrect belief that everyone dislikes praising happiness come from?
                        </p>
                        <div class="link-btn">
                            <a href="<?php echo home_url(); ?>"><span>Read More</span><i class="icon-9"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                <div class="chooseus-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-2.png" alt=""></div>
                        <h3><a href="<?php echo home_url(); ?>">Faster Processing</a></h3>
                        <p>Where did this incorrect belief that everyone dislikes praising happiness come from?
                        </p>
                        <div class="link-btn">
                            <a href="<?php echo home_url(); ?>"><span>Read More</span><i class="icon-9"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                <div class="chooseus-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-3.png" alt=""></div>
                        <h3><a href="<?php echo home_url(); ?>">Visa Assistance</a></h3>
                        <p>Where did this incorrect belief that everyone dislikes praising happiness come from?
                        </p>
                        <div class="link-btn">
                            <a href="<?php echo home_url(); ?>"><span>Read More</span><i class="icon-9"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                <div class="chooseus-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-4.png" alt=""></div>
                        <h3><a href="<?php echo home_url(); ?>">Cost-Effective</a></h3>
                        <p>Where did this incorrect belief that everyone dislikes praising happiness come from?
                        </p>
                        <div class="link-btn">
                            <a href="<?php echo home_url(); ?>"><span>Read More</span><i class="icon-9"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- chooseus-section end -->


<!-- clients-section -->
<section class="clients-section about-page alternat-2 p_relative">
    <div class="auto-container">
        <div class="inner-box p_relative pt_90">
            <ul class="clients-list">
                <li class="clients-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/clients-1.png" alt=""></a></li>
                <li class="clients-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/clients-2.png" alt=""></a></li>
                <li class="clients-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/clients-3.png" alt=""></a></li>
                <li class="clients-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/clients-4.png" alt=""></a></li>
                <li class="clients-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/clients-5.png" alt=""></a></li>
            </ul>
        </div>
    </div>
</section>
<!-- clients-section end -->


<!-- team-section -->
<section class="team-section alternat-2 p_relative centred">
    <div class="pattern-layer">
        <div class="pattern-4" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-30.png);"></div>
        <div class="pattern-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-31.png);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title mb_50 centred">
            <span class="sub-title">Expert Team Members</span>
            <h2>Our Team at Your Service</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-1.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="share-box">
                                <div class="share-icon"><i class="icon-26"></i></div>
                                <ul class="social-links clearfix">
                                    <li><a href="<?php echo home_url(); ?>"><i class="icon-7"></i></a></li>
                                    <li><a href="<?php echo home_url(); ?>"><i class="icon-6"></i></a></li>
                                    <li><a href="<?php echo home_url(); ?>"><i class="icon-4"></i></a></li>
                                </ul>
                            </div>
                            <h3><a href="#">Roman Frederick</a></h3>
                            <span class="designation">Regional Manager</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-2.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="share-box">
                                <div class="share-icon"><i class="icon-26"></i></div>
                                <ul class="social-links clearfix">
                                    <li><a href="<?php echo home_url(); ?>"><i class="icon-7"></i></a></li>
                                    <li><a href="<?php echo home_url(); ?>"><i class="icon-6"></i></a></li>
                                    <li><a href="<?php echo home_url(); ?>"><i class="icon-4"></i></a></li>
                                </ul>
                            </div>
                            <h3><a href="#">Jane Cooper</a></h3>
                            <span class="designation">Medical Assistant</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-3.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="share-box">
                                <div class="share-icon"><i class="icon-26"></i></div>
                                <ul class="social-links clearfix">
                                    <li><a href="<?php echo home_url(); ?>"><i class="icon-7"></i></a></li>
                                    <li><a href="<?php echo home_url(); ?>"><i class="icon-6"></i></a></li>
                                    <li><a href="<?php echo home_url(); ?>"><i class="icon-4"></i></a></li>
                                </ul>
                            </div>
                            <h3><a href="#">Esther Howard</a></h3>
                            <span class="designation">President of Sales</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-4.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="share-box">
                                <div class="share-icon"><i class="icon-26"></i></div>
                                <ul class="social-links clearfix">
                                    <li><a href="<?php echo home_url(); ?>"><i class="icon-7"></i></a></li>
                                    <li><a href="<?php echo home_url(); ?>"><i class="icon-6"></i></a></li>
                                    <li><a href="<?php echo home_url(); ?>"><i class="icon-4"></i></a></li>
                                </ul>
                            </div>
                            <h3><a href="#">Jenny Wilson</a></h3>
                            <span class="designation">Marketing Coordinator</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-section end -->

<?php

get_footer(); // Include the footer