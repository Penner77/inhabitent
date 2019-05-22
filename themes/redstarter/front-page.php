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

                <div class="shop-stuff">
                    <h2>Shop Stuff</h2>
                    <div class="shop-stuff-boxes">
                        <p class="do-stuff">Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
                        <p class="eat-stuff">Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
                        <p class="sleep-stuff">Get a good night's rest in the wild in a home away from home that travels well.</p>
                        <p class="wear-stuff">From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
                    </div>    
                </div>

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
	</div><!-- #primary -->


<?php get_footer(); ?>
