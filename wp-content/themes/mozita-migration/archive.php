<?php

/**
 * Template Name: News Page
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
                    <h1><?php the_title();?></h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li><?php the_title();?></li>
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
						
						// checks if there are any posts that match the query
						if (have_posts()) :
						
						// If there are posts matching the query then start the loop
						while ( have_posts() ) : the_post();
						
							// the code between the while loop will be repeated for each post
							?>
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-7.jpg" alt=""></a></figure>
                                    <div class="lower-content">
                                        <ul class="post-info clearfix">
                                            <li><i class="icon-27"></i><a href="blog-details.html"><?php the_author(); ?></a></li>
                                            <li><i class="icon-56"></i><?php the_date(); ?> </li>
                                        </ul>
                                        <h3><a href="blog-details.html"><?php the_title(); ?></a></h3>
                                        <p><?php the_excerpt();?></p>
                                        <div class="link-btn">
                                            <a href="<?php the_permalink() ?>"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

							<?php
								
									// Stop the loop when all posts are displayed
								endwhile;
								
								// If no posts were found
								else :
								?>
								<p>Sorry no posts matched your criteria.</p>
								<?php
								endif;
								?>
                            <div class="pagination-wrapper pt_40">
                                <ul class="pagination">
                                    <li><a href="blog.html" class="current">1</a></li>
                                    <li><a href="blog.html">2</a></li>
                                    <li><a href="blog.html">3</a></li>
                                    <li><a href="blog.html"><i class="icon-58"></i></a></li>
                                    <li><a href="blog.html">5</a></li>
                                    <li><a href="blog.html"><i class="icon-59"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar blog-sidebar ml_10">
                            <div class="sidebar-widget search-widget">
                                <div class="widget-title">
                                    <h3>Search</h3>
                                </div>
                                <div class="search-form">
                                    <form action="blog.html" method="post">
                                        <div class="form-group">
                                            <input type="search" name="search-field" placeholder="Keyword ..." required>
                                            <button type="submit"><i class="icon-8"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h3>Search</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list-two clearfix">
                                        <li><a href="blog-details.html">Immigration</a></li>
                                        <li><a href="blog-details.html">Application</a></li>
                                        <li><a href="blog-details.html">Business Visa</a></li>
                                        <li><a href="blog-details.html">Spouse/Family Visas</a></li>
                                        <li><a href="blog-details.html">Working Visas</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h3>Popular Post</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">Kickstart Your Visa ApprovalWith 4 Easy Steps</a></h5>
                                        <span class="post-date">December 30, 2020</span>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">Customers Applying for Priority Visas.</a></h5>
                                        <span class="post-date">December 25, 2020</span>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">Travelling to Australia for Tourism or Business?</a></h5>
                                        <span class="post-date">December 22, 2020</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget gallery-widget">
                                <div class="widget-title">
                                    <h3>Our Gallery</h3>
                                </div>
                                <div class="widget-content p_relative">
                                    <ul class="image-list clearfix">
                                        <li>
                                            <figure class="image-box"><a href="assets/images/news/gallery-1.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/news/gallery-1.jpg" alt=""></a></figure>
                                        </li>
                                        <li>
                                            <figure class="image-box"><a href="assets/images/news/gallery-2.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/news/gallery-2.jpg" alt=""></a></figure>
                                        </li>
                                        <li>
                                            <figure class="image-box"><a href="assets/images/news/gallery-3.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/news/gallery-3.jpg" alt=""></a></figure>
                                        </li>
                                        <li>
                                            <figure class="image-box"><a href="assets/images/news/gallery-4.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/news/gallery-4.jpg" alt=""></a></figure>
                                        </li>
                                        <li>
                                            <figure class="image-box"><a href="assets/images/news/gallery-5.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/news/gallery-5.jpg" alt=""></a></figure>
                                        </li>
                                        <li>
                                            <figure class="image-box"><a href="assets/images/news/gallery-6.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/news/gallery-6.jpg" alt=""></a></figure>
                                        </li>
                                        <li>
                                            <figure class="image-box"><a href="assets/images/news/gallery-7.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/news/gallery-7.jpg" alt=""></a></figure>
                                        </li>
                                        <li>
                                            <figure class="image-box"><a href="assets/images/news/gallery-8.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/news/gallery-8.jpg" alt=""></a></figure>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget travel-widget">
                                <div class="widget-content p_relative">
                                    <figure class="image-box"><img src="assets/images/resource/travel-1.jpg" alt=""></figure>
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
                            <div class="sidebar-widget tags-widget">
                                <div class="widget-title">
                                    <h3>Popular Tags</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="tags-list clearfix">
                                        <li><a href="blog-details.html"># Agents</a></li>
                                        <li><a href="blog-details.html"># Business</a></li>
                                        <li><a href="blog-details.html"># Career</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container end -->
<?php

get_footer(); // Include the footer