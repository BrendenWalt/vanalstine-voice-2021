<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VanalstineVoice21
 */

?>

	<footer class="site-footer">
		<div class="container">
			<div class="footer-info">
				<!-- Center -->
				<div class="site-branding">
					<?php if(!has_custom_logo()) { ?>
						<div class="logo-backup"><?php echo(get_bloginfo('name')); ?></div>
					<?php } else { 
						the_custom_logo();
					}?>
				</div><!-- .site-branding -->
				<div>
					<p>&copy; <?php echo(date('Y')); ?> VanAlstine Voice. All Rights Reserved</p>
				</div>
			</div>
			<div class="footer-social-menu">
			<?php
					wp_nav_menu( array(
						'theme_location'	=>	'social-menu',
						'container'				=>	'nav',
						'container_class'	=>	'navbar-social'
					))
				?>
			</div>
			
		</div><!-- .site-info -->
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
