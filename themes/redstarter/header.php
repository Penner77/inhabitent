<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

		<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
	</div>
	<!--TEST TO REMOVE WP ADMIN BAR, DONE JUNE 3-->
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php echo get_home_url(); ?>">
				<img alt="tent-image-banner" class="banner-tent logo-white" src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-tent-white.svg' ?>">
				<img alt="tent-image-banner" class="banner-tent logo-green" src=" <?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-tent.svg' ?>">
			</a>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
		</nav><!-- #site-navigation -->

		<div class="header-search">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button>

			<?php get_search_form(); ?>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">