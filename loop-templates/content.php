<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-md-4">
	<a href="<?php the_permalink(); ?>">
		<div class="news-box">
			<div class="featured-img"><?php echo get_the_post_thumbnail( $post->ID, 'blogcrop' ); ?></div>
			<h3><?php the_title(); ?></h3>
			<div class="news-date"><?php the_date('F j, Y'); ?></div>
			<hr class="divider">
			<?php the_excerpt(); ?>
		</div>
	</a>
</div>