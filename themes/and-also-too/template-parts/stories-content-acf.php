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
			if ( has_post_thumbnail() ) {
			    the_post_thumbnail();
			}
			?>
		</div><!-- .featured-image -->

		<?php
			if( has_post_thumbnail() ):
		?>
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
			<!-- catie, The Teresa Group, Womens College Hospital -->
		</div>
	<?php endif;?>

	</header><!-- .outer-content -->

	<div class="entry-content outer-content story-main-content">
		<!-- NOTE to Darren - I don't think we sketched out this page, so I wasn't sure what width percentages are used here. I left the header to go full width and used outer-content here. -->
		<section class="story-2col-flex">
			<div class="story-left-col">
				<h1 class=""><?php the_title( '<h1 class="entry-title">', '</h1>' );?></h1>

				<h6 class="">the need</h6>
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
						<ul>
							<li>HIV/AIDS</li>
							<li>Montreal</li>
							<li>Regina</li>
							<li>Toronto</li>
						</ul>
					</div>
					<div class="story-tags-section">
						<h5>services</h5>
						<ul>
							<li>Art Design</li>
							<li>Co-design</li>
							<li>Layout</li>
						</ul>
					</div>
					<div class="story-tags-section">
						<h5>credits</h5>
						<h6>Art Direction</h6>
						<ul>
							<li>Una Lee</li>
						</ul>
						<h6>Design Interns</h6>
						<ul>
							<li>Faduma Gure</li>
							<li>Lara Stefanovich-Thomson</li>
						</ul>
						<h6>Illustration</h6>
						<ul>
							<li>Joanna Lawniczak</li>
						</ul>
						<h6>Community Partners</h6>
						<ul>
							<li>CATIE</li>
							<li>The Teresa Group</li>
							<li>Womens College Hospital</li>
						</ul>
						</div>
				</div><!-- .story-tags -->
			</aside><!-- story-right-col -->
		</section><!-- story-2col-flex- -->
	    <section class="story-image-gallery">
			<!-- Note: I used .alignleft and .alignright on the images because that's what WP uses automatically if you align images in the editor in the admin area. But it doesn't work on mobile because the two images don't re-align one ontop of each other. I guess we'll have to use an ACF gallery and not allow such an image layout in the admin editor -->
				<?php

					$images = get_field('story_image_gallery');
					if( $images ): ?>
					        <?php foreach( $images as $image ): ?>
					            <div class="story-gallery-image">
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
