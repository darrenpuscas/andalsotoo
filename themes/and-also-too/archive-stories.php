<?php
/**
 * Archive Template for Stories CPT
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package And_Also_Too
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="page-title">
			<h2 class=""><?php post_type_archive_title(); ?></h2>
		</div>

		<div class="entry-content">
			<div id="stories" class="outer-content grid"><!-- Flex container: move to archive-stories.php -->
				<div class="gutter-sizer"></div>
				<div class="grid-sizer"></div>
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();
					//consider not loading template part--Uses unique content for archive

						// get_template_part( 'template-parts/stories-content-from-static', get_post_format() );
?>
					<div class="stories-width stories-summary grid-item">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<a href="<?php echo esc_url( get_permalink() );?>">
								<div class="story-img">
									<?php
										if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										}
									?>
								</div><!-- story-img -->
								<h5 class=""><?php the_title();?></h5>
								<h3 class="story-italic"><?php the_field('sub-heading_for_title')?></h3>
							</a>
						</article><!-- #post-## -->
					</div><!-- story-summary -->
					<?php endwhile; ?>
					<!-- <div class="outer-content">
						<?php the_posts_pagination( $args );?>
					</div> -->

				<?php else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div><!-- .outer-content-->
		</div><!-- .entry-content -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
