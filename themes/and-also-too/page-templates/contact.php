<?php
/**
 * Template Name: Contact
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
			<?php while ( have_posts() ) : the_post();?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<div class="contact-content">
						<section class="contact-col-left">


						<div class="wrapper">
							<div class="map-aspect">
								<div class="contact-map">
									<?php //google map
									the_content();
									?>
								</div>
							</div>
						</div>

						</section><!-- contact-col-left -->

						<section class="contact-col-right">
							<div class="page-title">contact</div>

							<div class="contact-address">
								<span class="contact-address-text">192 Spadina Avenue, Suite 314,</span>
								<span class="contact-address-text">Toronto, Ontario M5T 2C2</span>
								<span class="contact-address-text">collaborate@andalsotoo.net</span>
							</div>

							<div class="contact-form">
								<div class="contact-form-section">
									<label for="name">your name</label>
									<input type="text" id="name" name="user_name"  />
								</div>
								<div class="contact-form-section">
									<label for="name">your email (required)</label>
									<input type="email" id="email" name="user_email" required />
								</div>
								<div class="contact-form-section">
									<label for="name">your message</label>
									<textarea name="user_message" id="message" rows="8" cols="40"></textarea>
								</div>
								<div class="contact-form-section">
									<button type="button" name="contact_submit">submit</button>
								</div>
							</div>

						</section><!-- contact-col-right -->

					</div><!-- .contact-content-->








				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		<?php endwhile; // End of the loop.?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
