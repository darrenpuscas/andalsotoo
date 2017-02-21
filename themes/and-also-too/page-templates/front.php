<?php
/**
 * Template Name: Front
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
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat|Vollkorn|Roboto">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'and-also-too' ); ?></a>
	<div id="content" class="site-content-home">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
			  <header class="front-header entry-header">
					<div class="bg-front-header">
						<header id="masthead" class="site-header-home" role="banner">
							<div class="header-content">
								<div class="site-branding-medium">
									<img src="<?php echo content_url() .'/wp-content/uploads/2017/02/white-Logo.png'?>" alt="">
								</div><!-- .site-branding -->
								<nav id="site-navigation" class="main-navigation" role="navigation">
									<div class="site-branding">
										<img src="<?php echo content_url() .'/wp-content/uploads/2017/02/logo-vertical.png'?>" alt="">
									</div>
									<div class="mobile-nav-middle">
										<span>
											<a id="close-toggle" class="anchor-close" href="#">
												<i class="fa fa-times" aria-hidden="true"> </i>CLOSE
											</a>
										</span>
										<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'simple-toggle', 'container' => 'ul' ) ); ?>
										<div class="nav-social">
											<a href="https://twitter.com/and_also_too" target="_blank">
												<i class="fa fa-twitter-square" aria-hidden="true"></i>
											</a>
											<a href="https://www.facebook.com/andalsotoo/" target="_blank">
												<i class="fa fa-facebook-square" aria-hidden="true"></i>
											</a>
											<a href="https://www.instagram.com/andalsotoo/" target="_blank">
												<i class="fa fa-instagram" aria-hidden="true"></i>
											</a>
											<a href="https://www.linkedin.com/company/and-also-too target="_blank"">
												<i class="fa fa-linkedin-square" aria-hidden="true"></i>
											</a>
										</div>
									</div>
								</nav><!-- #site-navigation -->
								<span class="anchor-link">
									<a id="open-toggle">
										<i class="fa fa-bars" aria-hidden="true"></i>
										Menu
									</a>
								</span>
								<div class="nav-social-medium">
									<a href="https://twitter.com/and_also_too" target="_blank">
										<i class="fa fa-twitter-square" aria-hidden="true"></i>
									</a>
									<a href="https://www.facebook.com/andalsotoo/" target="_blank">
										<i class="fa fa-facebook-square" aria-hidden="true"></i>
									</a>
									<a href="https://www.instagram.com/andalsotoo/" target="_blank">
										<i class="fa fa-instagram" aria-hidden="true"></i>
									</a>
									<a href="https://www.linkedin.com/company/and-also-too target="_blank"">
										<i class="fa fa-linkedin-square" aria-hidden="true"></i>
									</a>
								</div>
								</span><!-- .site-header -->
							</header><!-- #masthead -->
								 <div class="overlay-front-header std-content-area">
										<h1 class="front-content-heading front-content-heading1">A collaborative design studio for social justice visionaries</h1>
								 </div><!-- .front-content-inner-->
							</div><!-- .outer-content-->
					</header><!-- .entry-header -->

<!-- Fixed Menu copied from header.php -->
					<header id="front-sticky-masthead" class="site-header front-fixed-menu" role="banner">
						<div class="header-content">

							<div class="site-branding-medium">
								<?php the_custom_logo(); ?>
							</div><!-- .site-branding -->

							<nav id="fixed-site-navigation" class="main-navigation" role="navigation">
								<div class="site-branding">
									<img src="<?php echo content_url() .'/wp-content/uploads/2017/02/logo-vertical.png'?>" alt="">
								</div>
								<div class="mobile-nav-middle">

									<span>
										<a id="close-toggle-fixed" class="anchor-close" href="#">
											<i class="fa fa-times" aria-hidden="true"> </i>CLOSE
										</a>
									</span>
									<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'simple-toggle', 'container' => 'ul' ) ); ?>

									<div class="nav-social">
										<a href="https://twitter.com/and_also_too" target="_blank">
											<i class="fa fa-twitter-square" aria-hidden="true"></i>
										</a>
										<a href="https://www.facebook.com/andalsotoo/" target="_blank">
											<i class="fa fa-facebook-square" aria-hidden="true"></i>
										</a>
										<a href="https://www.instagram.com/andalsotoo/" target="_blank">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
										<a href="https://www.linkedin.com/company/and-also-too target="_blank"">
											<i class="fa fa-linkedin-square" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</nav><!-- #site-navigation -->
							<span class="anchor-link">
								<a id="open-toggle-fixed" >
									<i class="fa fa-bars" aria-hidden="true"></i>
									Menu
								</a>
							</span>
							<div class="nav-social-medium">
								<a href="https://twitter.com/and_also_too" target="_blank">
									<i class="fa fa-twitter-square" aria-hidden="true"></i>
								</a>
								<a href="https://www.facebook.com/andalsotoo/" target="_blank">
									<i class="fa fa-facebook-square" aria-hidden="true"></i>
								</a>
								<a href="https://www.instagram.com/andalsotoo/" target="_blank">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
								<a href="https://www.linkedin.com/company/and-also-too target="_blank"">
									<i class="fa fa-linkedin-square" aria-hidden="true"></i>
								</a>
							</div>




						</span><!-- .site-header -->

					</header><!-- #masthead -->

					<section class="front-content-area what-we-do row">
						<div class="icon-home-1">
							<img src="<?php echo content_url() .'/wp-content/uploads/2017/02/icon1-3.png'?>" alt="" />
						</div>
								<div class="front-no-overlay1">
									<div class="front-content-inner front-content-textonly std-content-area">
											<h1 class="front-content-heading front-content-heading2">What we do</h1>
											<div class="what-we-do-text front-content-text">We work with and within communities that are fighting back against injustice to co-design awesome new things in awesome new ways.
											</div>
											<button class="front-button1">Read Stories</button>
								  </div><!-- .outer-content-->
					</section><!-- .front-content what-we-do -->
					<section class="front-content-area how-we-do-it">
						<div class="icon-home-1">
							<img src="<?php echo content_url() .'/wp-content/uploads/2017/02/icon2-1.png'?>" alt="" />
						</div>
							<div class="bg-how-we-do-it">
								<div class="overlay-how-we-do-it std-content-area">
										<h1 class="front-content-heading front-content-heading3">How we do it</h1>
										<div class="front-content-text front-content-text2">Our work is rooted in design justice, which informs our day-to-day practice. We document our learnings by sharing research; these learnings can support or transform our theory.
										</div>
										<button class="front-button2">About Us</button>
								</div><!-- .overlay-how-we-do-it-->
							</div><!-- .bg-how-we-do-it-->
					</section><!-- .front-content how-we-do-it -->
					<section class="front-content-area front-latest-posts row">
						<div class="icon-home-1">
							<img src="<?php echo content_url() .'/wp-content/uploads/2017/02/icon3-1.png'?>" alt="" />
						</div>
						<div class="front-no-overlay2">
							<div class="front-content-inner front-content-textonly std-content-area">
								<h1 class="latest-posts-title front-content-heading front-content-heading4">Latest Posts</h1>
								<?php // WP_Query arguments
								$args = array(
									'post_type'              => array( 'post' ),
									'posts_per_page'         => '2',
								);
								// The Query
								$query = new WP_Query( $args );
								// The Loop
								if ( $query->have_posts() ) :
									while ( $query->have_posts() ):
										$query->the_post();
								?>
								<div class="latest-post-indiv">
									<h2 class="latest-posts-date"><?php echo get_the_date();?></h2>
									<div class="latest-posts-text front-content-text">
										<a href="<?php echo esc_url( get_permalink() );?>">
											<?php the_title()?>
										</a>
									</div>
							  	</div>
								<?php endwhile;
								else :
									// no posts found
								// Restore original Post Data
								endif;
								wp_reset_postdata();
								?>
								<!-- Loop End -->
							</div><!-- .front-content-inner-->
						</div><!-- front-no-overlay2-->
					</section><!-- .front-content front-latest-posts -->
					<section class="front-content-area announcements">
						<div class="icon-home-1">
							<img src="<?php echo content_url() .'/wp-content/uploads/2017/02/icon4.png'?>" alt="" />
						</div>
						<div class="bg-announce">
						<div class="overlay-announce outer-content">
							<h1 class="announcements-heading front-content-heading">Announcements</h1>
							<div class="announcement-content">
								<?php
								// check if the repeater field has rows of data
								if( have_rows('annoucements') ):
								 	// loop through the rows of data
								    while ( have_rows('annoucements') ) : the_row();
								?>
									<div class="announcement-indiv announcement-1">
										<div class="announcement-date"><?php the_sub_field('announcement_date');?></div>
										<p class="announcement-text">
											<?php the_sub_field('announcement_text');?>
										</p>
									</div>
								<?php
								    endwhile;
								else :
								    // no rows found
								endif;
								?>
								</div><!-- .announcement-content-->
							</div><!-- .overlay-announce-->
							</div><!-- .overlay-announce-->
						</div><!-- .bg-announce-->
					</section><!-- .front-content announcements -->
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
