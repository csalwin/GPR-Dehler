<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slickSlider/slick.css">

	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slickSlider/slick-theme.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/styles/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>





<div id="nav-bar">






<!--	used for the half background image  -->
	<div class="backgroundImage"></div>
	<div class="container">
		<a href="<?php echo get_home_url(); ?>">
			<?php if ( get_theme_mod( 'logo' ) ) : ?>
				<img id="logo" src="<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>" title="Webpage Logo" alt="Logo image" />
			<?php else : ?>
				<img id="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" title="Webpage Logo" alt="Logo image"/>
			<?php endif; ?>
		</a>

		<div class="headerButtons">

			<i class="glyphicon glyphicon-menu-hamburger"></i>
			<i class="glyphicon glyphicon-search"></i>

		</div>

		<?php

		$menu = array(
			'menu' => 'HeaderMenu',
			'container' => 'div',
			'container_class' => 'home-nav-menu',
			'container_id' => 'navigation-menu'
		);

		wp_nav_menu( $menu ); ?>


		<div class="socialIcons">
			<ul>
				<li id="linkedIn"></li>
				<li id="facebook"></li>
				<li id="twitter"></li>
			</ul>
		</div>


		<?php get_search_form( ); ?>

	</div>
</div>
<div id="nav-menu-mobile">
	<div class="backgroundImage"></div>

	<div class="container">

		<?php

		$menu = array(
			'menu' => 'HeaderMenu',
			'container' => 'div',
			'container_class' => 'home-nav-menu',
			'container_id' => 'navigation-menu-mobile'
		);

		wp_nav_menu( $menu ); ?>


	</div>


</div>
<div id="search-mobile">
	<div class="backgroundImage"></div>

	<div class="container">
		<?php get_search_form( ); ?>
	</div>

</div>




