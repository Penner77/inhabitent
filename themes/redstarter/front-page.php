<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <div class="home-hero">
        <img class="logo-full" src="./images/inhabitent-logo-full.svg">
        <main id="main" class="site-main" role="main">        
    </div>
</div>
                 <!-- start of SHOP STUFF -->
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
                <!-- div end of SHOP STUFF -->

                <div class="front-page-journal">
                        <h2>Inhabitent Journal</h2>
                        <div class="journals-container">
    
                    <?php

                $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3);
                                // can maybe get rid of ORDER above
                $journal_posts = get_posts( $args ); 
                ?>
                        <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
                                <ul>
                                    <li>
                                        <!-- THUMBNAIL - in the pic on my phone, choose between the_post and/or get_the_post -->
                                    <div class="journal-thumbnail">
                                        <?php the_post_thumbnail('large');?>
                                    </div>
                                        <!-- META DATA -->
                                    <div class="journal-meta">
                                        <?php echo get_the_date();?> / 
                                        <?php echo get_comments_number(); ?> Comments
                                    </div> 
                                        <!-- TITLE -->
                                    <div class="journal-title">
                                        <!-- put html and permalink here -->
                                        <h2><?php the_title(); ?></h2>
                                    </div>
                               
                                </ul>
                            <?php endforeach; wp_reset_postdata(); 
                        ?>

                        </div>
                </div>

                <div class="latest-adventures">
                    <h2>Latest Adventures</h2>
                    <p></p>
                </div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	<!-- </div>#primary -->


<?php get_footer(); ?>
