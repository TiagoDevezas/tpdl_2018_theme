<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TPDL2018
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'montserrat w-100' ); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tpdl2018' ); ?></a>

	<header id="masthead" class="site-header ph6-l ph3">
		<div class="site-branding flex items-center-ns flex-wrap pv4-l pv2">
			<div class="logo w-100 w-10-l">
				<img src="<?php echo get_template_directory_uri() . '/images/logo_v1.svg'; ?>" alt="TPDL 2018" title="TPDL 2018" class="mw4" />
			</div>
			<div class="w-100 w-90-l flex justify-center-s justify-center-m">
				<p class="ml2 dib tr tdpl-light-blue fw2 lh-solid">
					porto <br>
					portugal <br>
					sep. 18 - 21 2018
				</p>
				<p class="fw8 tdpl-blue dib ml1 lh-solid">
					22<sup>nd</sup> international conference <br>
					on theory and practice <br>
					of digital libraries
				</p>
			</div>
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tpdl2018' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content ph6-ns ph3 bg-tdpl-light-beige">
