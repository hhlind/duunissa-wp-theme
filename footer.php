<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Duunissa WP Theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			
			<p>Copyright 2015 Mihkel Lind<span class="sep"> | </span><?php printf( __( '%1$s by %2$s.', 'duunissa' ), 'Theme designed', '<a href="http://mihkellind.com" rel="designer">Mihkel Lind</a>' ); ?></p>
			
			
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
