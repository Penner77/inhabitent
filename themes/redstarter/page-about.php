<?php
/**
 * The template for displaying all pages.
 *
 *
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="about-entry-content">

					<?php the_content(); ?>

				</div><!-- .about-entry-content -->
			</article><!-- #post-## -->

		<?php endwhile;
	?>
</div>
<!--end of max-site-width-1120px-->
</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>