<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package And_Also_Too
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat|Vollkorn">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'and-also-too' ); ?></a>

	<header id="masthead" class="site-header nav-content" role="banner">
		<div class="site-branding">
			<?php the_custom_logo(); ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'and-also-too' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
			<div class="nav-social">
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
				<i class="fa fa-facebook-square" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
				<i class="fa fa-linkedin-square" aria-hidden="true"></i>
			</div>

	</header><!-- #masthead -->



	<div id="content" class="site-content">
