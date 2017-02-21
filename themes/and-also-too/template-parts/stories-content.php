<?php
/**
 * Template part for displaying single story: loaded from single-stories.php
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
					<a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>"  onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
						<i class="fa fa-twitter-square" aria-hidden="true"></i>
					</a>

					<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="">


						<i class="fa fa-facebook-square" aria-hidden="true"></i>
					</a>

					<a data-pin-custom="true" href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
						<i class="fa fa-pinterest-square" aria-hidden="true"></i>
					</a>
					<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
					  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
					<i class="fa fa-google-plus-square" aria-hidden="true"></i>
					</a>
					<a href="mailto:&body=<?php the_permalink(); ?>">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</a>
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
						<?php the_terms( $post->ID, 'tax-service', '<ul class="story-tax"><li>', '</li><li>', '</li></ul>'); ?>
					</div>
					<div class="story-tags-section">
						<h5>credits</h5>

					<?php if( have_rows('story_credits') ):
						// check if the repeater field has rows of data
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

		<section class="story-flex-content">
		<?php

		// check if the flexible content field has rows of data
		if( have_rows('story_flex_content') ):
		     // loop through the rows of data
		    while ( have_rows('story_flex_content') ) : the_row();
			//to have inline image on right, need a standard flex container for all diff layouts. Question is: how will the slider react using a flex container?? Or should we have the slider a separate <section>?
				if( get_row_layout() == 'text_with_heading' ):?>
					<div class="secondary-text-flex">

					<?php if(get_sub_field('left_aligned_image')):?>
						<div class="left-aligned-image">
							<img src="<?php the_sub_field('left_aligned_image');?>" alt="" />
						</div>
					<?php endif;?>
					    <div class="secondary-text-area">
						<?php if(get_sub_field('heading')):?>
					        <div class="test-heading">
					            <?php the_sub_field('heading');?>
					        </div>
						<?php endif; ?>
					        <div class="secondary-text-area">
					            <?php the_sub_field('text_area');?>
					        </div>
					    </div>
						<?php if(get_sub_field('right_aligned_image')):?>
							<div class="right-aligned-image">
								<img src="<?php the_sub_field('right_aligned_image');?>" alt="" />
							</div>
						<?php endif;?>


					</div><!-- .story-secondary-flex -->

				<?php elseif( get_row_layout() == 'static_image_gallery_flex' ): ?>
					<div class="static-img-gallery-flex">
					    <?php
					        $images = get_sub_field('story_static_image_gallery');
					        if( $images ): ?>
					                <?php foreach( $images as $image ): ?>
					                    <div class="story-static-image">
					                        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
					                    </div>
					                <?php endforeach; ?>
					        <?php endif; ?>
					</div>
					<!-- Slider Gallery Here!! -->

					<?php elseif( get_row_layout() == 'story_slider' ):
						$sliderImages = get_sub_field('story_slider_images');
					?>
					<div class="slider-pro" id="story-slider">
						<div class="sp-slides">
						<?php if( $sliderImages ): ?>
								<?php foreach( $sliderImages as $image ): ?>
									<div class="sp-slide">
										<img class="sp-image" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
									</div>
								<?php endforeach; ?>
						<?php endif; ?>

					    </div><!-- .sp-slides -->
					</div><!-- #story-slider -->
		        <?php endif;//rows
		    endwhile;
		else :

		    // no layouts found

		endif;
		?>
	</section><!-- .story-flex-content -->
    </div><!-- .entry-content -->
</article><!-- #post-## -->
