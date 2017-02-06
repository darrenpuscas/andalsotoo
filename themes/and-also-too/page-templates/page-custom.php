<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package And_Also_Too
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">

					<div class="outer-content">
								<div class="std-content-area">

								</div><!-- .std-content-area-->
					</div><!-- .outer-content-->

					<div class="outer-content">
								<div class="std-content-area">

								</div><!-- .std-content-area-->
					</div><!-- .outer-content-->

					<div class="outer-content">
								<div class="std-content-area">

								</div><!-- .std-content-area-->
					</div><!-- .outer-content-->

				</div><!-- .entry-content -->

			</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
