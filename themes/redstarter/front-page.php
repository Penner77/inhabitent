<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="home-hero">
            <div class=“logo-full”>
                <a href="<?php echo get_home_url(); ?>"> <img alt="mainlogo" src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg' ?>"></a>

            </div>
        </div>
        <!-- </div> -->
        <!-- start of SHOP STUFF -->

        <div class="site-max-width">

            <div class="shop-stuff-container">
                <h2>Shop Stuff</h2>

                <div class="shop-stuff-blocks">
                    <?php $terms = get_terms(
                        array(
                            'taxonomy' => 'product-type',
                            'hide_empty' => 0
                        )
                    ); ?>

                    <!-- <div class="product-blocks-terms"> -->
                    <?php
                    foreach ($terms as $term) : ?>

                        <div class="product-block-term">
                            <img alt="image-icon" class="block-img" src="<?php echo get_template_directory_uri() .
                                                                                '/images/product-type-icons/' .
                                                                                $term->slug .
                                                                                '.svg' ?>" />
                            <p><?php echo $term->description; ?></p>
                            <p class="stuff-button">
                                <a href="<?php echo get_term_link($term); ?>">
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

        $args = array('post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3);
        // can maybe get rid of ORDER above
        $journal_posts = get_posts($args);
        ?>
        <ul>
            <?php foreach ($journal_posts as $post) : setup_postdata($post); ?>

                <li>

                    <div class="journal-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>

                    <!-- META DATA -->
                    <div class="fp-post-meta">
                        <?php echo get_the_date(); ?> /
                        <?php echo get_comments_number(); ?> Comments
                    </div>

                    <!-- TITLE -->
                    <div class="journal-title">
                        <a href="<?php get_the_permalink(); ?> ">
                            <h4><?php the_title(); ?></h4>
                        </a>
                        <a class="read-more-button" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
                    </div>
                </li>

            <?php endforeach;
        wp_reset_postdata();
        ?>
        </ul>

    </div>
</div>

<div class="latest-adventures">
    <h2>Latest Adventures</h2>
    <div class="adventure-grid">
        <ul class="adventure-grid-ul">
            <li class="canoe">
                <h3>Getting Back to Nature in a Canoe</h3>
                <p class="adventure-buttons">Read More</p>
            </li>
            <li class="beach">
                <h3>A Night with Friends at the Beach</h3>
                <p class="adventure-buttons">Read More</p>
            </li>
            <li class="mountain">
                <h3>Take in the Mountain View</h3>
                <p class="adventure-buttons">Read More</p>
            </li>
            <li class="sky">
                <h3>Star-Gazing at the Night Sky</h3>
                <p class="adventure-buttons">Read More</p>
            </li>
        </ul>
    </div>
</div>

<div class="more-adventures-button">
    More Aventures
</div>
</div>
<!--end of max-site-width-1120px-->

</main><!-- #main -->
</div>
<!--#primary-->


<?php get_footer(); ?>