<?php
/**
 * Template Name: Front
 *
 * This is the template for the front (home) page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package And_Also_Too
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


			<div class="entry-content">

			  <header class="front-header entry-header">

						<div class="bg-front-header">
								 <div class="overlay-front-header std-content-area">
										<h1 class="front-content-heading front-content-heading1">A collaborative design studio for social justice visionaries</h1>
								 </div><!-- .front-content-inner-->
							</div><!-- .outer-content-->
					</header><!-- .entry-header -->


					<section class="front-content-area what-we-do row">
								<div class="front-no-overlay1">
									<div class="front-content-inner front-content-textonly std-content-area">
											<h1 class="front-content-heading front-content-heading2">What we do</h1>
											<div class="what-we-do-text front-content-text">We work with and within communities that are fighting back against injustice to co-design awesome new things in awesome new ways.
											</div>
											<button class="front-button1">Read Stories</button>
								  </div><!-- .outer-content-->
					</section><!-- .front-content what-we-do -->



					<section class="front-content-area how-we-do-it">
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
						</div><!-- .bg-announce-->
					</section><!-- .front-content announcements -->

				</div><!-- .entry-content -->

			</article><!-- #post-## -->


		</main><!-- #main -->
	</div><!-- #primary -->





<?php
get_footer();
