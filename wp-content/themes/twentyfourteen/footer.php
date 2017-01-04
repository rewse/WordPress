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
        <p><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>, <a href="http://httpd.apache.org/">Apache HTTP Server</a>, <a href="https://aws.amazon.com/jp/rds/aurora/">Amazon Aurora</a>, <a href="https://www.centos.org/">CentOS</a> and <a href="https://aws.amazon.com/jp/ec2/">Amazon EC2</a><br />
        The customized WordPress source code is published at <a href="https://github.com/rewse/WordPress">GitHub</a></p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
