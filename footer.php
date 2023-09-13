<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="site-footer" role="contentinfo" class="header-footer-group">

	<div class="footer-container">
		<div class="footer-top">
			<?php twentytwenty_site_logo(); ?>
			<div class="footer-menu">
				<?php wp_nav_menu(); ?>
			</div>
			<div class="gen-info">
				<ul>
					<li>General Information</li>
					<li><a href="">Privacy Policy</a></li>
					<li><a href="">Terms & Conditions</a></li>
				</ul>
			</div>
			<div class="social">
				<ul>
					<li>Find us on</li>
					<li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
					<li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
					<li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
				</ul>
			</div>

		</div>
		<div class="copyright">2023 © - Walter White Laboratories | Powered by thefinalone</div>
	</div>

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

<!---------- SCRIPTS ---------->
<!-- JavaScript -->
<!-- <script src="js/scripts.js"></script> -->
</body>

</html>