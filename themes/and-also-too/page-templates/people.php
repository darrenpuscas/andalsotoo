	<?php
/**
 * Template Name: People
 *
 * This is the template for the people page.
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

					<header class="people-intro">
							<div class="bg-people-intro">
								<div class="overlay-people-intro outer-content">
									<div class="people-intro-content">
										<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

										<?php

										// check if the repeater field has rows of data
										if( have_rows('people_landing') ):

										 	// loop through the rows of data
										    while ( have_rows('people_landing') ) : the_row();
										?>
											<div class="landing-person">
												<div class="landing-name landing-bold">
													<?php the_sub_field('people_name_landing'); ?>
												</div>
												<div class="landing-title landing-italic">
													<?php the_sub_field('people_title_landing'); ?>
												</div>
											</div>
										<?php
										    endwhile;
										else :
										    // no rows found
										endif;
										?>
									</div><!-- .people-intro-content-->
								</div><!-- .overlay-people-intro-->
							</div><!-- .bg-people-intro-->
					</header><!-- .front-content people-intro -->

					<?php if( have_rows('people_bios') ): ?>
						<?php while( have_rows('people_bios') ): the_row();
							$image = get_sub_field('poeple_bio_image');
						?>
							<div class="outer-content people-content row-top-pad">
								<div class="people-col1 left-content-full">
								<h3 class="people-name">
									<?php the_sub_field('people_name_bio'); ?>
								</h3>
								<div class="people-title">
									<?php the_sub_field('people_title_bio'); ?>
								</div>
								<div class="people-description">
									<?php the_sub_field('people_bio_text'); ?>
								</div>
							</div><!-- people-col1 -->
							<div class="people-col2 people-image right-content-smaller">
									<!-- <img src="/wp-content/uploads/2017/02/una.jpg"> -->
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
								</div>
							</div><!-- .outer-content-->
						<?php endwhile; ?>
					<?php endif; ?>

			</article><!-- #post-## -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
