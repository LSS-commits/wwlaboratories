<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php
	wp_body_open();
	?>

	<header id="site-header" class="header-footer-group" role="banner">

		<div class="announcement">Free shipping on all orders</div>
		<div class="header-container">

			<?php
			// Site logo
			twentytwenty_site_logo();

			// Site slogan
			twentytwenty_site_description(); ?>

			<div class="shop-nav">
				<ul>
					<li><i class="fas fa-search"></i></li>
					<li><a href="">Account</a></li>
					<li><a href="">Cart</a></li>
				</ul>
			</div>

			<?php wp_nav_menu(); ?>

		</div>

	</header><!-- #site-header -->

	<?php
	// Output the menu modal.
	get_template_part('template-parts/modal-menu');
