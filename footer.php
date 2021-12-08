<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="wrapper-footer">

	<footer class="site-footer" id="colophon">

		<div class="footer-widgets">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="row">
							<div class="col-md-6">
								<h4 style="margin-bottom:3rem;">ASAP Pest Control Inc.</h4>
								<p>ASAP Pest Control, Inc are pest control specialists serving Southern Ontario. Keeping you comfortable in your environment.</p>
								<p>For Immediate Service:</p>
								<a href="tel:519-317-1170" class="btn btn-primary btn-large">Call Now</a>
							</div>
							<div class="col-md-6 text-center">
								<img class="p-5" src="/wp-content/themes/asappest/images/knights-logo.png" alt="Official Pest Control of the London Knights">
							</div>

							<div class="col-md-6 mb-3">
								<h4 style="margin-top:2rem;">Testimonials</h4>
								<p><i>“Jamie Drennan has been providing pest control service (at our store) location. The extent of infestation was significant and Jamie has made weekly visits to ensure the rodent population was brought down to a reasonable threshold. During this time, Jamie has been extremely helpful, and courteous while providing these services, knowledgeable and friendly.”</i></p>
								<a href="/testimonials/" class="btn btn-large btn-primary">Read More Testimonials</a>
							</div>

							<div class="col-md-6 text-center align-self-center">
								<img src="/wp-content/themes/asappest/images/LONDON_2021.png" alt="ASAP Pest Control Consumer Choice Award 2022" width="160" height="190">
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<h4>Quick Contact:</h4>
						<?php echo do_shortcode('[gravityform id="2" title="false"]'); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="site-info">

			<div class="<?php echo esc_attr( $container ); ?>">
		
				<div class="row">
		
					<div class="col-md-12">
		
								© <?php echo date('Y'); ?> ASAP Pest Control Inc. | All Rights Reserved | <a href="/privacy-policy/">Privacy Policy</a>
								<div class="footer-social">
									<a href="<?php the_field('facebook', 'option'); ?>" target="_blank" rel="noopener,noreferrer,nofollow"><i class="fa fa-facebook"></i></a>
									<a href="<?php the_field('houzz', 'option'); ?>" target="_blank" rel="noopener,noreferrer,nofollow"><i class="fa fa-houzz"></i></a>
								</div>
		
					</div><!--col end -->
		
				</div><!-- row end -->
		
			</div><!-- container end -->

		</div><!-- .site-info -->

	</footer><!-- #colophon -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

