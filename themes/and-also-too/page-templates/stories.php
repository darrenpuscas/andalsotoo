<?php
/**
 * Template Name: Stories
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
					<div id="stories" class="outer-content grid">

						<div class="first-story stories-summary grid-item">
							<img class="stories-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/photo1.png">
							<h4 class="stories-title">Name of the Project in One Line 1</h4>
							<h3 class="stories-italic">with Provincial Advocate for Children & Youth</h3>
						</div><!-- stories-summary -->

						<div class="stories-width stories-summary grid-item">
							<img class="stories-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/photo2.png" alt="" />
							<h4 class="stories-title">Name of the Project in One Line 2</h4>
							<h3 class="stories-italic">with Provincial Advocate for Children & Youth</h3>
						</div><!-- stories-summary -->

						<div class="stories-width stories-summary grid-item">
							<img class="stories-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/photo3.png" alt="" />
							<h4 class="stories-title">Name of the Project in One Line 3</h4>
							<h3 class="stories-italic">with Provincial Advocate for Children & Youth</h3>
						</div><!-- stories-summary -->
						<div class="stories-width stories-summary grid-item">
							<img class="stories-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/Photo4.png" alt="" />
							<h4 class="stories-title">Name of the Project in One Line 4</h4>
							<h3 class="stories-italic">with Provincial Advocate for Children & Youth</h3>
						</div><!-- stories-summary -->
						<div class="stories-width stories-summary grid-item">
							<img class="stories-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/Photo5.png" alt="" />
							<h4 class="stories-title">Name of the Project in One Line 5</h4>
							<h3 class="stories-italic">with Provincial Advocate for Children & Youth</h3>
						</div><!-- stories-summary -->
						<div class="stories-width stories-summary grid-item">
							<img class="stories-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/stories-photo1-1.png" alt="" />
							<h4 class="stories-title">Name of the Project in One Line 6</h4>
							<h3 class="stories-italic">with Provincial Advocate for Children & Youth</h3>
						</div><!-- stories-summary -->
						<div class="stories-width stories-summary grid-item">
							<img class="stories-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/stories-photo3.png" alt="" />
							<h4 class="stories-title">Name of the Project in One Line 7</h4>
							<h3 class="-italic">with Provincial Advocate for Children & Youth</h3>
						</div><!-- stories-summary -->
						<div class="stories-width stories-summary grid-item">
							<img class="stories-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/stories-photo2-1.png" alt="" />
							<h4 class="stories-title">Name of the Project in One Line 8</h4>
							<h3 class="stories-italic">with Provincial Advocate for Children & Youth</h3>
						</div><!-- stories-summary -->
						<div class="stories-width stories-summary grid-item">
							<img class="stories-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/stories-photo1-1.png" alt="" />
							<h4 class="stories-title">Name of the Project in One Line 9</h4>
							<h3 class="stories-italic">with Provincial Advocate for Children & Youth</h3>
						</div><!-- stories-summary -->
				</div><!-- .outer-content-->
			</div><!-- .entry-content -->

			</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
