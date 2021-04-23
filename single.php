<?php
/**
 * The template for displaying all single posts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) {
	the_post();
	$featuredimg = get_the_post_thumbnail_url();
	$posttitle = get_the_title();
	$date = get_the_date('F j, Y');
}


$container = get_theme_mod( 'understrap_container_type' );
$default_bg = get_field('default_header_background_image', 'option');
?>
<style>
.page-header:before {background: linear-gradient(#229a5b,#065029), url('<?php echo $featuredimg; ?>') no-repeat center center;background-color:white;background-size:cover;}
</style>
<div class="page-header">
	<h1><?php echo $posttitle; ?></h1>
	<div class="entry-meta">

		<?php // understrap_posted_on(); ?>
		<?php echo $date; ?> 

	</div><!-- .entry-meta -->
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
	  yoast_breadcrumb( '<small id="breadcrumbs">','</small>' );
	}
	?>
</div>
<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<?php if(!is_woocommerce()): ?><div class="row"><?php endif; ?>

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single' );
				}
				?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		<?php if(!is_woocommerce()): ?></div><!-- .row --><?php endif; ?>

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php if(get_field('json_schema')): ?>
	<?php the_field('json_schema'); ?>
<?php endif; ?>

<?php
get_footer();
