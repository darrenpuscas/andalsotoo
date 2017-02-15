<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package And_Also_Too
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="outer-content blog-flex">
					<?php
					if ( 'post' === get_post_type() ) : ?>
					<div class="blog-entry-meta-medium">
						<div class="date-container">
							<?php
							// and_also_too_posted_on(); ?>
							<span class="blog-date-num">30</span>
							<span class="blog-date-month">nov</span>
							<span class="blog-date-year">2016</span>
						</div>
						<div class="blog-category">
							<?php the_category( ' ' ); ?>

							<!-- debrief -->
						</div>
					</div><!-- .entry-meta -->
					<?php endif; ?>
					<div class="blog-content std-content-area">
						<!--  -->
						<div class="featured-image">
							<?php
							if ( has_post_thumbnail() ) {
							    the_post_thumbnail();
							}
							?>
						</div><!-- .featured-image -->
						<div class="blog-entry-meta">
							<div class="date-container">
								<?php
								// and_also_too_posted_on(); ?>
								<span class="blog-date-num">30</span>
								<span class="blog-date-month">nov</span>
								<span class="blog-date-year">2016</span>
							</div>
							<div class="blog-category">debrief</div>
						</div><!-- .entry-meta -->

						<div class="blog-title">
							<?php
							if ( is_single() ) :
								the_title( '<h3 class="entry-title">', '</h3>' );
							else :
								the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
							endif;
							?>
						</div><!-- .blog-title -->

						<div class="entry-content">
							<?php

								if ( is_single() ) :
								the_content( sprintf(
									/* translators: %s: Name of current post. */
									wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'and-also-too' ), array( 'span' => array( 'class' => array() ) ) ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								) );

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'and-also-too' ),
									'after'  => '</div>',
								) );

								?>
								<div class="blog-footer-flex">


									<div class="blog-next-post">

										<?php
										$next_post = get_next_post();
										if ( $next_post ): ?>
										  <a href="<?php echo get_permalink( $next_post->ID ); ?>">
											  <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
											  <?php echo $next_post->post_title; ?>
										  </a>
									  	<?php else: ?>
											&nbsp;
										<?php endif; ?>
									</div>
									<div class="blog-social-links">
										<i class="fa fa-twitter-square" aria-hidden="true"></i>
										<i class="fa fa-facebook-square" aria-hidden="true"></i>
										<i class="fa fa-instagram" aria-hidden="true"></i>
										<i class="fa fa-pinterest-square" aria-hidden="true"></i>
										<i class="fa fa-google-plus-square" aria-hidden="true"></i>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
									<div class="blog-previous-post">
										<?php
										$prev_post = get_previous_post();
										if ( $prev_post ): ?>
											<a href="<?php echo $prev_post->guid ?>">
												<?php echo $prev_post->post_title ?>
												<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
											</a>
										<?php else: ?>
											&nbsp;
									<?php endif ?>
									</div>

								</div>
						<?php
								else :
									the_excerpt();?>
									<div class="align-right">
									<a class="read-link" href="<?php echo get_permalink(); ?>">read
									 <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
								<?php endif; ?>
							</div><!-- .entry-content -->
						</div><!-- .blog-content -->

					<div class="bempty">
					&nbsp;
					</div><!-- .bempty -->

		<!-- .flex-col2  -->
	</div><!-- .outer-content -->
</article><!-- #post-## -->
