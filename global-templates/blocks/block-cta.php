<?php
$cta = get_field('call-to-action');
$link = get_field('link');
$ctc = get_field('click-to-call');
$base_url = esc_url(home_url( '/' ));
$str_link = str_replace($base_url, '', $link);
$size = get_field('size');
$color = get_field('color');
$alignment = get_field('alignment');


?>

<div class="call-to-action <?php echo $alignment; ?>">
	<a class="btn btn-primary btn-<?php echo $size; ?> <?php if($color): ?>btn-<?php echo $color; endif; ?>" href="<?php if($ctc == 1): echo "tel:" . get_field('phone_number', 'option'); else: echo $link; endif; ?>"><?php echo $cta; ?></a>
</div>
