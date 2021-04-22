<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

// Remove WooCommerce Stylesheet
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
    unset( $enqueue_styles['woocommerce-smallscreen'] );    // Remove the smallscreen optimisation
    return $enqueue_styles;
}


function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );


// Limit the_excerpt()
function custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Remove read more
function understrap_all_excerpts_get_more_link( $post_excerpt ) {
    return $post_excerpt . ' [...]';
}
add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );



function my_mtsnb_force_bar_post_types() {
  if( is_admin() ) {
    return array();
  }
  return array( 'post', 'page' );
}
add_filter( 'mtsnb_force_bar_post_types', 'my_mtsnb_force_bar_post_types', 10, 3 );


// Add full-width Gutenberg
add_theme_support( 'align-wide' );

// inc overwrites
require_once('inc/woocommerce.php');

// Custom functions
require_once('functions/gforms.php');
require_once('functions/colors.php');
require_once('functions/acf.php');
require_once('functions/acf-blocks.php');
require_once('functions/testimonials.php');
require_once('functions/image-sizes.php');