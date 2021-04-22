<?php if(have_rows('testimonials', 'option')): ?>

<div class="testimonials" uk-scrollspy="target: .card; cls: uk-animation-slide-bottom-medium; repeat: false; delay: 50;">
	<div class="card-columns">
		<?php while(have_rows('testimonials', 'option')): the_row(); ?>
			<div class="card">
				<div class="single-testimonial">
					<i class="fa fa-quote-left"></i>
					<p><i><?php the_sub_field('testimonial'); ?></i></p>
					<hr class="divider">
					– <?php the_sub_field('client_name'); ?>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</div>

<?php endif;