<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/content', 'single'); ?>


			<div class="social-buttons-blog">
				<ul>
					<li><i class="fab fa-facebook-f"></i> Like</li>
					<li><i class="fab fa-twitter"></i> Tweet</li>
					<li><i class="fab fa-pinterest"></i>Pin</li>
			</div>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;
			?>

		<?php endwhile;
	?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>