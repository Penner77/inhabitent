<?php
/**
 * The main template file for single posts of products.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

            <?php if (is_home() && !is_front_page()) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>


                <!-- start of template parts change: -->

                <div class="product-group">

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php endif; ?>
                        <div class="product-info">
                            <header class="entry-header">
                                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <div class="price"> <?php echo CFS()->get('product_price'); ?></div>
                                <?php the_content(); ?>

                            </div><!-- .entry-content -->
                        </div>
                    </article><!-- #post-## -->
                </div>



            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>