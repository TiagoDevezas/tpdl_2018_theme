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
<html <?php language_attributes(); ?> class="h-100">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'montserrat h-100' ); ?>>
<div id="page" class="site relative">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tpdl2018' ); ?></a>

	<div class="parallax cover w-100 h-100 bg-top absolute bottom-0 left-0"></div>
		

	<header id="masthead" class="site-header z-999 relative">
		<div class="header-wrapper center mw9">

			<nav id="site-navigation" class="main-navigation fw8 ttu dark-gray pv3 ph3 mw9 f6 lh-copy">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'tpdl2018' ); ?></button>
				<?php
					if ( is_front_page() && is_home() ) :
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'	 => ''
						) );
					else :
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'	 => 'not-home'
						) );
				endif; ?>
			</nav><!-- #site-navigation -->
		
<!-- 			<div class="site-branding flex items-center-ns flex-wrap pv4-l pv2 ph3 mw9">
				<div class="logo w-100 w-10-l">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="flex justify-center justify-start-l">
						<img src="<?php echo get_template_directory_uri() . '/images/logo_v1.svg'; ?>" alt="TPDL 2018" title="TPDL 2018" class="mw3" />
					</a>
					
				</div>
				<div class="w-100 w-90-l flex justify-center justify-start-l">
					<p class="ml2 dib tr white fw2 lh-solid mb0">
						porto <br>
						portugal <br>
						sep. 18 - 21 2018
					</p>
					<p class="fw8 white dib ml1 lh-solid mb0">
						22<sup>nd</sup> international conference <br>
						on theory and practice <br>
						of digital libraries
					</p>
				</div> -->

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

	</header><!-- #masthead -->

	<?php 
		if ( is_front_page() && is_home() ) : ?>

		<div id="content" class="site-content center relative z-0 is-home">

	<?php
		else: ?>

		<div id="content" class="site-content center bg-tdpl-light-beige is-not-home">

	<?php 
		endif; ?>

