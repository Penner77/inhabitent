<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
    <div class="home-hero">

    <img src="http://localhost:8888/inhabitent/wp-content/uploads/2019/05/home-hero-2.jpg">
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

                <div class="main-page-journal">
                        <h2>Inhabitent Journal</h2>
                        <div class="journal-boxes">
                            <p></p>
                            <p></p>
                            <p></p>
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>
