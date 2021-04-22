<?php

// Testimonials Shortcode
function testimonials_shortcode() {
    ob_start();
    get_template_part('loop-templates/loop', 'testimonials');
    return ob_get_clean();
}
add_shortcode('testimonials', 'testimonials_shortcode');