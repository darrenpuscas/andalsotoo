<?php
/**
 * Template Name: slider test
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

				<div class="slider-pro" id="story-slider">
				    <div class="sp-slides">
				        <!-- Slide 1 -->
				        <div class="sp-slide">
				            <img class="sp-image" src="http://and-also-too.dev/wp-content/uploads/2017/02/Lupe.jpg"/>
				        </div>

				        <!-- Slide 2 -->
				        <div class="sp-slide">
				            <p>Lorem ipsum dolor sit amet</p>
				        </div>

				        <!-- Slide 3 -->
				        <div class="sp-slide">
				            <h3 class="sp-layer">Lorem ipsum dolor sit amet</h3>
				            <p class="sp-layer">consectetur adipisicing elit</p>
				        </div>
				    </div>
				</div>








			</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
