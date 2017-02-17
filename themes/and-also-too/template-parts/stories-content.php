<?php
/**
 * Template part for static Story Page: to use change archive-stories to load this template.
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
		<div class="story-title">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
			<h6 class="">with</h6>
			<h6 class="">catie, The Teresa Group, Womens College Hospital</h6>
		</div><!-- .blog-title -->
	</header><!-- .outer-content -->

	<div class="entry-content outer-content story-main-content">
		<!-- NOTE to Darren - I don't think we sketched out this page, so I wasn't sure what width percentages are used here. I left the header to go full width and used outer-content here. -->
		<section class="story-2col-flex">
			<div class="story-left-col">
				<h1 class="">co-designing with hiv positive mothers</h1>
				<h6 class="">the need</h6>
				<p>
					Thine face is not worth sunburning. You are as a candle, the better burnt out.Thou misbegotten milk-livered bladder! You are as rheumatic as two dry toasts. Out of my sight! Thou dost infect my eyes. Thou fobbing unchin-snouted devil-mon! Thou cullionly spur-galled puttock! Thou pribbling rough-hewn horn-beast! Thou dankish onion-eyed clotpole! Thou dankish onion-eyed clotpole! Thou paunchy dread-bolted giglet! Thou currish common-kissing boar-pig! Thou churlish flap-mouthed fustilarian!
				</p>
				<h6 class="">storytelling</h6>
				<p>
					Thou dankish onion-eyed clotpole! Thou dankish onion-eyed clotpole! Thou paunchy dread-bolted giglet! Thou currish common-kissing boar-pig! Thou churlish flap-mouthed fustilarian!
				</p>
				<blockquote>
					Thou dankish onion-eyed clotpole! Thou dankish onion-eyed clotpole! Thou paunchy dread-bolted giglet!
				</blockquote>
				<p>
					Out of my sight! Thou dost infect my eyes. Thou fobbing unchin-snouted devil-mon! Thou cullionly spur-galled puttock! Thou pribbling rough-hewn horn-beast! Thou dankish onion-eyed clotpole! Thou dankish onion-eyed clotpole! Thou paunchy dread-bolted giglet! Thou currish common-kissing boar-pig! Thou churlish flap-mouthed fustilarian!
				</p>
				<blockquote>
					Thou dankish onion-eyed clotpole! Thou dankish onion-eyed clotpole! Thou paunchy dread-bolted giglet!
				</blockquote>
				<p>
					Thou pribbling rough-hewn horn-beast! Thou dankish onion-eyed clotpole! Thou dankish onion-eyed clotpole! Thou paunchy dread-bolted giglet! Thou currish common-kissing boar-pig! Thou churlish flap-mouthed fustilarian!
				</p>
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
	   		<div class="story-image alignleft">
				<!-- Note: I used .alignleft and .alignright on the images because that's what WP uses automatically if you align images in the editor in the admin area. But it doesn't work on mobile because the two images don't re-align one ontop of each other. I guess we'll have to use an ACF gallery and not allow such an image layout in the admin editor -->
				<img src="http://and-also-too.dev/wp-content/uploads/2017/02/photo3.png" alt="">
			</div>
			<div class="story-image alignright">
				<img src="http://and-also-too.dev/wp-content/uploads/2017/02/photo3.png" alt="">
			</div>
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
