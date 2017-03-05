<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dopeman
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/flickity.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
	<?php wp_head(); ?>

<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="container grey_line">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dopeman' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding grey_line">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;
				?>
			</div>
			<?php


			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>


			<nav id="site-navigation" class="main-navigation grey_line" role="navigation">
				<div class="main-navigation_left">
					<?php echo get_search_form(); ?>
				</div>
				<div class="main-navigation_right">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'menu' ) ); ?>
					<div class="rsx_sociaux">
						<ul>
							<li><a href="<?php echo the_field('instagram_link', 'option'); ?>" target="_blank"><i class="icon-instgram"></i></a></li>
							<li><a href="<?php echo the_field('spotify_link', 'option'); ?>" target="_blank"><i class="icon-spotify"></i></a></li>
							<li><a href="<?php echo the_field('facebook_link', 'option'); ?>" target="_blank"><i class="icon-facebook"></i></a></li>
							<li><a href="<?php echo the_field('twitter_link', 'option'); ?>" target="_blank"><i class="icon-twitter"></i></a></li>
							<li><a href="<?php echo the_field('soundsgood_link', 'option'); ?>" target="_blank"><i class="icon-soundsgood-logo"></i></a></li>
						</ul>
					</div>
				</div>
				
				
			</nav><!-- #site-navigation -->
				
			</div>

		</header><!-- #masthead -->

		<div class="btn_menu">
			<span></span>
			<div class="close">
				
			</div>
		</div>
	</div>
	<div class="container layered_container grey_line"></div>
	<div class="clearfix"></div>



	<div id="content" class="site-content">
