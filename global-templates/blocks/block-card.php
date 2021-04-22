<?php 
$htmltag = get_field('title_html_tag');
$htmltagopen = "<" . $htmltag . " class='card-title'>";
$htmltagclose = "</" . $htmltag . ">";
$image = get_field('image');
$content = get_field('content');
?>
<div class="shadowbox card <?php if(get_field('card_link')): ?>hover<?php endif; ?>">
	<?php if($image): echo wp_get_attachment_image( $image, 'blogcrop' ); endif; ?>
	<?php echo $htmltagopen; ?><?php if(get_field('card_link')): ?><a href="<?php the_field('card_link'); ?>" class="stretched-link"><?php endif; the_field('card_title'); if(get_field('card_link')): ?></a><?php endif; ?><?php echo $htmltagclose; ?>
	<?php if($content): ?>
		<hr class="divider blue">
		<p class="card-content"><?php echo $content; ?></p>
	<?php endif; ?>
</div>