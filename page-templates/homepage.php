<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>
<style>
.home-header:before {background: linear-gradient(#33ff94,#2ef08a), url('/wp-content/themes/asappest/images/londonknights.jpg') no-repeat center center;background-color:white;background-size:cover;}
</style>
<header class="home-header">
	<div class="home-callout row justify-content-center align-items-center">
		<div class="col-md-6 align-self-center">
			<div class="home-heading"><?php the_field('top_heading'); ?></div>
			<div class="home-hero-text"><?php the_field('hero_text'); ?></div>
			<div class="home-ctas row">
				<div class="col-md-12 mb-4"><a href="<?php the_field('button_link'); ?>" class="btn btn-lg btn-white"><?php the_field('button_text'); ?></a></div>
			</div>
			
		</div>
		
		<div class="col-md-6 align-self-center">
			<div class="partnership-area">
				<div class="col-12">
					<img src="/wp-content/themes/asappest/images/knights-logo.png" alt="London Knights Logo">
				</div>
			</div>
		</div>
		
	</div>
</header>

<div class="wrapper" id="page-wrapper">

	<div class="container" id="content" tabindex="-1">

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );
				}
				?>

			</main><!-- #main -->


	</div>

	<div class="cta-divider">
		<span><?php the_field('cta_text'); ?></span> &nbsp; &nbsp; <a href="<?php the_field('cta_link'); ?>" class="btn btn-primary btn-large"><?php the_field('cta_button_text'); ?></a>
	</div>

	<div class="container">
		<div class="news-updates">
			<h2>ASAP Pest Control Blog</h2>
			<?php get_template_part('loop-templates/loop', 'news'); ?>
		</div>
	</div>

</div><!-- #page-wrapper -->

<?php
get_footer();
