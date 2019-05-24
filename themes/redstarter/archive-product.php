<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		<!-- BEGINNING OF CODE SUGGESTED BY JIM ON SLACK MAY 23 -->
		<div class="shop-stuff-container">
            <h2>Shop Stuff</h2>

                <div class="shop-stuff-blocks">
                    <?php $terms = get_terms( 
                        array( 'taxonomy' => 'product-type', 
                        'hide_empty' => 0));?>

                            <!-- <div class="product-blocks-terms"> -->
                                <?php
                                foreach( $terms as $term ):?>
                            
                                <div class="product-block-term">
                                    <img class="block-img" src="<?php echo get_template_directory_uri() . 
                                    '/images/product-type-icons/' .
                                        $term->slug .
                                        '.svg' ?>"/>
                                        <p><?php echo $term->description; ?></p>
                                        <p class="stuff-button">
                                        <a href="<?php echo get_term_link( $term ); ?>">
                                        <?php echo $term->name; ?> Stuff
                                        </a>
                                        </p>
                                </div>
                        <?php endforeach; ?>
                    </div> 
                    <!-- end of .product_terms -->
                    </div>
                </div> 
        </div>           

							<!-- END OF CODE SUGGESTED BY JIM ON SLACK MAY23 -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
