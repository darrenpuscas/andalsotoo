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
									<?php the_title()?>
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






								<div class="announcement-indiv announcement-1">
									<div class="announcement-date">Nov 1, 2016</div>
									<p class="announcement-text">
										We’re so excited to be presenting in Malmö, Sweden alongside Feathers of Hope at the Decolonising Design Symposium: Intersectional Perspectives on Design, Politics and Power. Una will be presenting about Design Justice.
									</p>
								</div>


									<div class="announcement-indiv announcement-2">
										<div class="announcement-date">Oct 26, 2016</div>
										<p class="announcement-text">
											Una will join a panel of brilliant thinkers and builders in the platform co-operative space at Building the Co-operative Internet, Nov. 11–13.
										</p>
									</div>

									<div class="announcement-indiv announcement-3">
										<div class="announcement-date">Sep 22, 2016</div>
										<p class="announcement-text">
											We’re pleased to announce a new team member, Lupe Pérez! Lupe is a talented Montréal based designer. Read more about her on our People page.
										</p>
									</div>

									<div class="announcement-indiv announcement-4">
										<div class="announcement-date">Sep 1, 2016</div>
										<p class="announcement-text">
											Join us at MozFest, Oct. 28-30 in London UK! We’re hoping to connect with others who are centering people and communities who are often marginalized by technology.
										</p>
									</div>





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
