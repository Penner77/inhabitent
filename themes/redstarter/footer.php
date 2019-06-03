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

			<div class="email-icon">
				<p><i class="far fa-envelope"></i></p>
				<p>info@inhabitent.com</p>
			</div>
			<div class="phone-icon">
				<p><i class="fas fa-phone"></i></p>
				<p>778-456-7891</p>
			</div>
		</div>

		<div class="footer-info2">
			<h3 class="business-hours">Business Hours</h3>
			<p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
			<p><span class="day-of-week">Saturday:</span> 10am to 2pm</p>
			<p><span class="day-of-week">Sunday:</span> Closed</p>
		</div>


		<div class="logo-right">
			<a href="<?php echo get_home_url(); ?>"><img class=“logo-size” src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-text.svg' ?>"></a>
		</div>

	</div>
</div>




<!-- </div>#page -->

<?php wp_footer(); ?>

</body>

</html>