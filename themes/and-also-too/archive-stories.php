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
						get_template_part( 'template-parts/stories-content-from-static', get_post_format() );

					endwhile; ?>
					<div class="outer-content">
						<?php the_posts_pagination( $args );?>
					</div>

				<?php else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div><!-- .outer-content-->
		</div><!-- .entry-content -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
