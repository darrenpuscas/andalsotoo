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
						<div class="bg">
								<img src="/wp-content/uploads/2017/02/home-landing.png">
						</div>
								<div class="outer-content">
									<div class="front-content-inner">
											<h1 class="">A collaborative design studio for social justice visionaries</h1>

									</div><!-- .front-content-inner-->

								</div><!-- .outer-content-->

					</header><!-- .entry-header -->



					<div class="front-content what-we-do">

								<div class="outer-content">
									<div class="front-content-inner">
											<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

									</div><!-- .front-content-inner-->

								</div><!-- .outer-content-->

					</div><!-- .front-content what-we-do -->



					<div class="front-content-area how-we-do-it">
						<div class="bg">
								<img src="/wp-content/uploads/2017/02/how-do-it.png">
						</div>
								<div class="outer-content">
									<div class="front-content-inner">

									</div><!-- .front-content-inner-->

								</div><!-- .outer-content-->

					</div><!-- .front-content how-we-do-it -->


					<div class="front-content-area front-latest-posts">

								<div class="outer-content">
									<div class="front-content-inner">

									</div><!-- .front-content-inner-->

								</div><!-- .outer-content-->

					</div><!-- .front-content front-latest-posts -->

					<div class="front-content-area announcements">
						<div class="bg">
								<img src="/wp-content/uploads/2017/02/announcements.png">
						</div>
								<div class="outer-content">
									<div class="front-content-inner">

									</div><!-- .front-content-inner-->

								</div><!-- .outer-content-->

					</div><!-- .front-content announcements -->


				</div><!-- .entry-content -->

			</article><!-- #post-## -->


		</main><!-- #main -->
	</div><!-- #primary -->

---------------------------------------------------------------

	<div class="people-col1 left-content-full">
			<h2 class="people-name">
				Una Lee
			</h2>
			<div class="people-title">
				Creative Director
			</div>
		<div class="people-description">
			Una Lee is a graphic designer, facilitator, and design theorist working in social justice. She uses collaborative and community centered design processes to draw on the brilliance, wisdom, and creativity of communities affected by urgent social issues. The tools and images that have been cocreated through these processes have contributed to substantial changes in legislation and policy, rallied international support, received coverage from major media outlets in Canada, the US, and Mexico, as well as garnered numerous awards. Una resides in Toronto and collaborates internationally.
		</div>
	</div>
	<div class="people-col2 right-content-smaller">
		<img src="/wp-content/uploads/2017/01/una.png">
	</div>




<?php
get_footer();
