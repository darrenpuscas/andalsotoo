<?php
/**
 * Template Name: About
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

				<div class="entry-content about-full-width">

						<img class="about-background" src="" alt="" />




						<section class="about-full-width">
								<div class="bg-about-1">
									<div class="overlay-about-1">
											<h1 class="about-title-main outer-content">About</h1>
									</div><!-- .overlay-about-1-->
								</div><!-- .bg-about-1-->
						</section><!-- .front-content about-full-width -->





					<div class="outer-content about-flex">


						<section class="about-blank1 about-grid-item">
								&nbsp;
						</section>

						<section class="about-group1 about-grid-item">
							<div class="shift-title-1">and also too </div>
							<div class="shift-text-1">is a collaborative design studio. We work with social justice visionaries and use community centered design processes to make beautiful, powerful things.</div>
							<div class="shift-image-1">
								<img src="http://and-also-too.dev/wp-content/uploads/2017/02/about-image-1.png" alt="" />
								<div class="shift-icon-1">
									<img src="http://and-also-too.dev/wp-content/uploads/2017/02/icon1-3.png" alt="" />
								</div>
							</div>
						</section>


						<section class="about-group-2 about-grid-item">
							<div class="shift-icon-1-medium">
								<img src="http://and-also-too.dev/wp-content/uploads/2017/02/icon1-3.png" alt="" />
							</div>

							<div class="shift-title-2">we work with social justice visionaries...</div>
							<div class="shift-text-2">We collaborate with people who are imaginging alternatives to unjust systems, who see a need to use new and unconventional strategies to tackle complex social problems, and who are ready to participate deepley in the design process.</div>
							<div class="shift-image-2">
								<img src="http://and-also-too.dev/wp-content/uploads/2017/02/about-image-2.png" alt="" />
						</div>
						</section>

						<section class="about-group3 about-grid-item">
							<div class="shift-icon-2-medium">
								<img src="http://and-also-too.dev/wp-content/uploads/2017/02/icon2-1.png" alt="" />
							</div>
							<div class="shift-title-3">...and use community centered design processess</div>
							<div class="shift-text-3">We facilitate groups of people connected by choice or circumstance to co-design the future. We belive that people are experts in their own experiences, that everyone has the ability to participate in creative processes, and so we design with and not for communities experiencing injustice.</div>
						</section>

						<section class="about-group4 about-grid-item">
							<div class="shift-icon-3-medium">
								<img src="http://and-also-too.dev/wp-content/uploads/2017/02/icon1-3.png" alt="" />
							</div>
							<div class="about-grid-item">
								<div class="shift-title-4">...to make beautiful, powerful things.</div>
								<div class="shift-text-4">Our task is to help shine light on the issues and uplift the answers that the community holds. We draw inspiration from the community's culture and history to co-create resources and tools that are unique, accessible, and delightful.
									<div class="shift-title-5">want to collaborate?</div>
									<div class="about-button">Get in touch</div>
							</div>




							</div>

						</section>

						<section class="about-group5 about-grid-item">
							<div class="shift-image-3 about-grid-item">
								<img src="http://and-also-too.dev/wp-content/uploads/2017/02/about-image-3.png" alt="" />
							</div>
						</section>



					</div><!-- .outer-content-->
					<div class="about-flex eee">
							<section class="about-full-width about-full-width2">
									<div class="bg-about-1">
										<div class="overlay-about-2">
										</div><!-- .overlay-about-1-->
									</div><!-- .bg-about-1-->
							</section><!-- .front-content about-full-width -->
					</div>
				</div><!-- .entry-content -->

			</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
