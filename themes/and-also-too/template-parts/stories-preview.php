<?php
/**
 * Template part for displaying a preview of stories(archive and tag archives)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package And_Also_Too
 */

?>

<div class="stories-width stories-summary grid-item">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <a href="<?php echo esc_url( get_permalink() );?>">
            <div class="story-img">
                <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }
                ?>
            </div><!-- story-img -->
            <h5 class=""><?php the_title();?></h5>
            <h3 class="story-italic"><?php the_field('sub-heading_for_title')?></h3>
        </a>
    </article><!-- #post-## -->
</div><!-- story-summary -->
