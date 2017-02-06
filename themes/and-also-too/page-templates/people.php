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

					<header class="people-header entry-header">
						<div class="bg">
								<img src="/wp-content/uploads/2017/02/people-landing2.png">
						</div>
								<div class="outer-content">
									<div class="people-intro-content">
											<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
											<div class="landing-person">
													<div class="landing-name landing-bold">
														Una Lee
													</div>
													<div class="landing-title landing-italic">
														Creative Director
													</div>
											</div>
											<div class="landing-person">
													<div class="landing-name landing-bold">
														Lara Stefanovich-Thomson
													</div>
													<div class="landing-title landing-italic">
														Designer
													</div>
											</div>
											<div class="landing-person">
													<div class="landing-name landing-bold">
														Lupe Pérez
													</div>
													<div class="landing-title landing-italic">
														Designer
													</div>
											</div>
											<div class="landing-person">
													<div class="landing-name landing-bold">
														Shameela Lazan
													</div>
													<div class="landing-title landing-italic">
														Studio Coordinator
													</div>
											</div>
									</div><!-- .people-content-->

								</div><!-- .outer-content-->


					</header><!-- .entry-header -->

					<div class="outer-content people-content row-top-pad">
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
							<div class="people-col2 people-image right-content-smaller">
								<img src="/wp-content/uploads/2017/01/una.png">
							</div>
					</div><!-- .outer-content-->

					<div class="outer-content people-content row-top-pad">
						<div class="people-col1 left-content-full">
							<h2 class="people-name">
								Lara Stefanovich-Thomson
							</h2>
							<div class="people-title">
								Designer
							</div>
							<div class="people-description">
								Lara is interested in how graphic design can have a social impact and support positive change in the world and is happy to be part of the collaborative, inventive work of And Also Too. Her previous work experience at a community art organization, literacy programs, women's shelters and organic farming informs her design practice. Lara is a graduate of the St. Lawrence College Graphic Design Program and has a BFA in Visual Art from York University.
							</div>
						</div>
						<div class="people-col2 people-image right-content-smaller">
							<img src="/wp-content/uploads/2017/01/lara.png">
						</div>
					</div><!-- .outer-content-->

					<div class="outer-content people-content row-top-pad">
						<div class="people-col1 left-content-full">
							<h2 class="people-name">
								Lupe Pérez
							</h2>
							<div class="people-title">
								Designer
							</div>
							<div class="people-description">
								Lupe is an Argentinean graphic designer, researcher and design thinker at the service of social justice initiatives. Interested in questions of power, identity and politics, she is an advocate for collaborative, mindful design as an avenue for social change. Lupe holds a BFA from Concordia University (Double Major in Design and Philosophy), and has recently completed a Permaculture Design Certificate at P3 Permaculture. Residing in Montreal, Quebec, she loves filling notebooks with poems and rubbing cats’ bellies during alleyway walks.
							</div>
						</div>
						<div class="people-col2 people-image right-content-smaller">
							<img src="/wp-content/uploads/2017/01/lupe.png">
						</div>
					</div><!-- .outer-content-->

					<div class="outer-content people-content row-top-pad">
						<div class="people-col1 left-content-full">
							<h2 class="people-name">
								Shameela Zaman
							</h2>
							<div class="people-title">
								Studio Coordinator
							</div>
							<div class="people-description">
								Shameela Zaman is an artist, community organizer and a consultant. She is the studio coordinator forAnd Also Too, where her passion for social justice intersects with design. Her other areas of interest include research and social policy, looking into issues of safety and violence in the lives of Muslim women in Canada. Currently, she is pursuing a Masters in Social Work from the University of Windsor. Shameela is an avid consumer of gelatos, watching the Mindy Project and doodling inside circles.
							</div>
						</div>
						<div class="people-col2 people-image right-content-smaller">
							<img src="/wp-content/uploads/2017/01/shameela.png">
						</div>
					</div><!-- .outer-content-->

				</div><!-- .entry-content -->

			</article><!-- #post-## -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
