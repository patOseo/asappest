<?php  

$args = array(
	'posts_per_page' => 3,
);

$query = new WP_Query($args);

?>

<?php if($query->have_posts()): ?>
<div class="row" uk-scrollspy="target: .news-box; cls: uk-animation-slide-bottom-medium; repeat: false; delay: 100;">
	<?php while($query->have_posts()): $query->the_post(); ?>
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
	<?php endwhile; ?>
</div>
<?php endif; ?>