<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package And_Also_Too
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'and-also-too' ) ); ?>"><?php //printf( esc_html__( 'Proudly powered by %s', 'and-also-too' ), 'WordPress' ); ?></a>
			<span class="sep"></span>
			<?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'and-also-too' ), 'and-also-too', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
