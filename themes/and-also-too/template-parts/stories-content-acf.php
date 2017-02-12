<?php
/**
 * Template part for displaying stories
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package And_Also_Too
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="">
		<div class="story-featured-image">
			<?php
			if ( has_post_thumbnail() ) :
			    the_post_thumbnail();?>

				<div class="story-title">
					<?php
					if ( is_single() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;
						?>
						<h6 class="">with</h6>
						<h6 class=""><?php the_field('sub-heading_for_title')?></h6>
						<!-- catie, The Teresa Group, Womens College Hospital -->
					</div><!-- .story-title -->
		</div><!-- .featured-image -->

	<?php else: ?>

		<div class="story-title-basic">
			<!-- need a class that doesn't absolutely position title Or have default background image that loads with no featured image -->
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
			<h6 class="">with</h6>
			<h6 class=""><?php the_field('sub-heading_for_title')?></h6>
			<!--  -->
		</div>
	<?php endif;?>

	</header><!-- .outer-content -->

	<div class="entry-content outer-content story-main-content">
		<!-- NOTE to Darren - I don't think we sketched out this page, so I wasn't sure what width percentages are used here. I left the header to go full width and used outer-content here. -->
		<section class="story-2col-flex">
			<div class="story-left-col">
				<h1 class=""><?php the_title( '<h1 class="entry-title">', '</h1>' );?></h1>

				<?php the_field('story_main_text_section')?>
			</div><!-- .story-left-col -->
			<aside class="story-right-col">
				<div class="story-social">
					<i class="fa fa-twitter-square" aria-hidden="true"></i>
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
					<i class="fa fa-instagram" aria-hidden="true"></i>
					<i class="fa fa-linkedin-square" aria-hidden="true"></i>
					<i class="fa fa-pinterest-square" aria-hidden="true"></i>
					<i class="fa fa-google-plus-square" aria-hidden="true"></i>
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
				</div>
				<div class="story-tags">
					<h4>
						<i class="fa fa-tag" aria-hidden="true"></i>
						tags
					</h4>
					<div class="story-tags-section">
						<h5>communities</h5>
						<?php the_terms( $post->ID, 'tax-community', '<ul class="story-tax"><li>', '</li><li>', '</li></ul>'); ?>

					</div>
					<div class="story-tags-section">
						<h5>services</h5>
						<?php the_terms( $post->ID, 'tax-service', '<ul class="story-tax"><li>', '                        </li><li>', '</li></ul>'); ?>
					</div>
					<div class="story-tags-section">
						<h5>credits</h5>
					<?php

						// check if the repeater field has rows of data
						if( have_rows('story_credits') ):
							// loop through the rows of data
							while ( have_rows('story_credits') ) : the_row();
							    // display a sub field value
								$terms = get_sub_field('name_or_partner');
					?>
								<h6><?php the_sub_field('story_credit_title');?></h6>
								<?php
									if( $terms ): ?>
										<ul>
											<?php foreach( $terms as $term ): ?>
												<li><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>
							<?php endwhile;

						else :
						    // no rows found
						endif;
								?>
					</div><!-- story-tags-section -->
				</div><!-- .story-tags -->
			</aside><!-- story-right-col -->
		</section><!-- story-2col-flex- -->
	    <section class="story-image-gallery">
			<?php

				$images = get_field('story_image_gallery');
				if( $images ): ?>
				        <?php foreach( $images as $image ): ?>
				            <div class="story-image-in-gallery">
				                <a href="<?php echo $image['url']; ?>">
				                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				            </div>
				        <?php endforeach; ?>
				<?php endif; ?>
	    </section>
	    <section class="story-secondary-content">
		    <p>
		   		Out of my sight! Thou dost infect my eyes. Thou fobbing unchin-snouted devil-mon! Thou cullionly spur-galled puttock! Thou pribbling rough-hewn horn-beast! Thou dankish onion-eyed clotpole! Thou dankish onion-eyed clotpole! Thou paunchy dread-bolted giglet! Thou currish common-kissing boar-pig! Thou churlish flap-mouthed fustilarian!
		    </p>
		    <p>
			   Thou dankish onion-eyed clotpole! Thou paunchy dread-bolted giglet! Thou currish common-kissing boar-pig! Thou churlish flap-mouthed fustilarian!
		   </p>
	    </section>





    </div><!-- .entry-content -->
</article><!-- #post-## -->
