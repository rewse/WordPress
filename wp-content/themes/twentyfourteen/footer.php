<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
        <p><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>, <a href="http://httpd.apache.org/">The Apache HTTP Server</a>, <a href="http://www.mysql.com/">MySQL</a>, <a href="http://www.oracle.com/jp/technologies/linux/overview/">Oracle Linux</a> and <a href="http://www.supermicro.com/products/motherboard/xeon/qm77/x9spv-f-3217ue.cfm">Supermicro X9SPV-F-3217UE</a><br />
        The customized WordPress source code is published at <a href="https://github.com/rewse/WordPress">GitHub</a></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
