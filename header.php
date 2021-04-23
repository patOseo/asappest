<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71526947-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-71526947-1');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KX56MF');</script>
<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KX56MF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<div class="top-bar">
		<div class="header-cart">
			<i class="fa fa-shopping-cart"></i> &nbsp; <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
		</div>
	</div>

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md" aria-labelledby="main-nav-label">

			<span id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</span>

					<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><img src="/wp-content/themes/asappest/images/asap-logo-new.jpg" alt="ASAP Pest Control"></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<i class="fa fa-bars"></i>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>


		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->

	<div class="top-header-bar">
		<div class="row align-items-center">
			<div class="top-bar-left col-md-4">
				<strong><i><?php the_field('tagline', 'option'); ?></i></strong>
			</div>
			<div class="top-bar-center col-md-4">
				<strong>For Immediate Service, Call or Text <a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></strong>
			</div>
			<div class="top-bar-right col-md-4">
				<?php if(have_rows('buttons', 'option')): ?>
					<?php while(have_rows('buttons', 'option')): the_row(); ?>
						<a href="<?php the_sub_field('button_link'); ?>" class="btn btn-sm btn-white"<?php if(get_sub_field('open_in_new_tab')): ?> rel="noopener,noreferrer" target="_blank"<?php endif; ?>><?php the_sub_field('button_text'); ?></a>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
