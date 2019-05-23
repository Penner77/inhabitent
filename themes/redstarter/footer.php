<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

	<div class="footer">
			<div class="footer-container">

				<div class="footer-info1">
					<h3 class="business-hours">Contact Info</h3>
					<p>info@inhabitent.com</p>
					<p>778-456-7891</p>
				</div>

				<div class="footer-info2">
					<h3 class="business-hours">Business Hours</h3>
					<p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
					<p><span class="day-of-week">Saturday:</span> 10am to 2pm</p>
					<p><span class="day-of-week">Sunday:</span> Closed</p>
				</div>

				<div class="logo-right">
					<p class="logo-size"><img src="wp-content/themes/redstarter/images/logos/inhabitent-logo-text.svg"></p>
				</div>

			</div>
	</div>



			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		<!-- </div>#page -->

		<?php wp_footer(); ?>

	</body>
</html>
