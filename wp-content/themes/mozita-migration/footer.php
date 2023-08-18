<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mozita_Migration
 */

?>


<!-- main-footer -->
<footer class="main-footer">
	<div class="pattern-layer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-25.png);"></div>
	<div class="auto-container">
		<div class="widget-section">
			<div class="row clearfix">
				<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
					<div class="footer-widget logo-widget">
						<figure class="footer-logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt=""></a></figure>
						<div class="text mb_25">
							<p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi.</p>
						</div>
						<ul class="info clearfix mb_30">
							<li><i class="icon-29"></i><a href="tel:88123456987231">+88 12345 6987 231</a></li>
							<li><i class="icon-1"></i><a href="mailto:info@example.com">info@example.com</a></li>
							<li><i class="icon-2"></i>380 St Kilda Road, Melbourne</li>
						</ul>
						<ul class="social-links clearfix">
							<li><a href="index.html"><i class="icon-4"></i></a></li>
							<li><a href="index.html"><i class="icon-5"></i></a></li>
							<li><a href="index.html"><i class="icon-6"></i></a></li>
							<li><a href="index.html"><i class="icon-7"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
					<div class="footer-widget links-widget">
						<div class="widget-title">
							<h3>Explore</h3>
						</div>
						<div class="widget-content">
							<ul class="links-list clearfix">
								<li><a href="index.html">Employment & Jobs</a></li>
								<li><a href="index.html">Government & Elections</a></li>
								<li><a href="index.html">Real Estate & Buildings</a></li>
								<li><a href="index.html">Health & Medical</a></li>
								<li><a href="index.html">Trasport & Traffic</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
					<div class="footer-widget links-widget">
						<div class="widget-title">
							<h3>Useful Links</h3>
						</div>
						<div class="widget-content">
							<ul class="links-list clearfix">
								<li><a href="index.html">Administration</a></li>
								<li><a href="index.html">Fire Services</a></li>
								<li><a href="index.html">Business</a></li>
								<li><a href="index.html">Taxation</a></li>
								<li><a href="index.html">Circular’s And Go’s</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
					<div class="footer-widget gallery-widget">
						<div class="widget-title">
							<h3>Recent Projects</h3>
						</div>
						<div class="widget-content">
							<ul class="image-list clearfix">
								<li>
									<figure class="image-box">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-1.jpg" alt="">
										<a href="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-30"></i></a>
									</figure>
								</li>
								<li>
									<figure class="image-box">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-2.jpg" alt="">
										<a href="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-30"></i></a>
									</figure>
								</li>
								<li>
									<figure class="image-box">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-3.jpg" alt="">
										<a href="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-30"></i></a>
									</figure>
								</li>
								<li>
									<figure class="image-box">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-4.jpg" alt="">
										<a href="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-30"></i></a>
									</figure>
								</li>
								<li>
									<figure class="image-box">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-5.jpg" alt="">
										<a href="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-30"></i></a>
									</figure>
								</li>
								<li>
									<figure class="image-box">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-6.jpg" alt="">
										<a href="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-30"></i></a>
									</figure>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="copyright">
				<p>Copyright By &copy; <a href="index.html">immigratie</a> - 2023</p>
			</div>
		</div>
	</div>
</footer>
<!-- main-footer end -->



<!--Scroll to top-->
<div class="scroll-to-top">
	<div>
		<div class="scroll-top-inner">
			<div class="scroll-bar">
				<div class="bar-inner"></div>
			</div>
			<div class="scroll-bar-text">Go To Top</div>
		</div>
	</div>
</div>
<!-- Scroll to top end -->

</div><!-- #page -->

<?php wp_footer(); ?>
<!-- jequery plugins -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/validation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.fancybox.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/appear.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scrollbar.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.nice-select.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/parallax-scroll.js"></script>

<!-- main-js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
</body>

</html>