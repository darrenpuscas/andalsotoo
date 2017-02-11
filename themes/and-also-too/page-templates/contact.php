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

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<?php
					echo "test php";
					?>
					<div>
					<?php
					the_field('text_test');

					$test_text =  get_field('text_test');
					echo $test_text;

						echo '<pre>';
							var_dump( $test_text );
						echo '</pre>';



				?>
					</div>

				<div class="entry-content">
					<div class="contact-content">
						<section class="contact-col-left">
							<div class="contact-map">
								<!-- <img src="http://and-also-too.dev/wp-content/uploads/2017/02/map_filler.png" alt="" /> -->
							</div>
						</section><!-- contact-col-left -->

						<section class="contact-col-right">
							<h1>contact</h1>

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
						<p>
							Map Here????
						</p>
						<?php
						//google map:


//
// while ( have_posts() ) : the_post();





							the_field('text_test');



						$location = get_field('google_map');

						echo '<pre>';
							var_dump( $location );
						echo '</pre>';



						// if( !empty($location) ):
						?>
						<div class="acf-map">
							<p>ACF Map here!!!</p>
							 <div

							 class="marker"
							 data-lat="<?php echo $location['lat']; ?>"
							 data-lng="<?php echo $location['lng']; ?>">
							 </div>

						</div>
<?php					 //endif;

						// endwhile; // End of the loop.
?>








				</div><!-- .entry-content -->
			</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
