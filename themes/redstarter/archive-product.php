<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<header class="page-header">

				<div class="shop-stuff-container">
					<h2>Shop Stuff</h2>

					<div class="shop-stuff-blocks">
						<?php $terms = get_terms(
							array(
								'taxonomy' => 'product-type',
								'hide_empty' => 0
							)
						); ?>

						<div class="product-top-menu">
							<?php
							foreach ($terms as $term) : ?>

								<div class="product-block-terms">
									<a href="<?php echo get_term_link($term); ?>">
										<?php echo $term->name; ?>
									</a>

								</div>
							<?php endforeach; ?>
						</div>
						<!-- end of .product_terms -->
					</div>
				</div>
	</div>

	<!-- END OF CODE SUGGESTED BY JIM ON SLACK MAY23 -->







	</header><!-- .page-header -->

	<div class="product-archive-container">
		<?php /* Start the Loop */ ?>
		<?php while (have_posts()) : the_post(); ?>

			<article class="product-grid-items" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header">
					<?php if (has_post_thumbnail()) : ?>
						<a class="thumbnail-post-link" href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail('large'); ?></a>
					<?php endif; ?>
					<div class="product-grid-item-name">
						<?php the_title(); ?>

						<p><span class="dots">...............</span></p>

						<p>
							<?php echo CFS()->get('product_price'); ?>
						</p>

					</div>

				</header><!-- .entry-header -->

			</article><!-- #post-## -->


		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('template-parts/content', 'none'); ?>

	<?php endif; ?>





	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>