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

			<!-- Center -->
			<div class="footer-site-branding">
				<div class="logo">
					<?php if(!has_custom_logo()) { ?>
						<div class="logo-backup"><?php echo(get_bloginfo('name')); ?></div>
					<?php } else { 
						the_custom_logo();
					}?>
				</div>
				<h4><?php echo(get_bloginfo('name')); ?></h4>
			</div>

			<!-- Footer Menu -->
			<div class="footer-site-nav">
				<?php
					wp_nav_menu( array(
						'theme_location'	=>	'footer-menu-pages',
						'container' 			=>	'nav',
						'container_class'	=>	'navbar-footer-links',
						'menu_class'			=>	''
						))
				?>
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
			
		</div><!-- .container -->
		<div class="footer-copyright">
			<p>&copy; <?php echo(date('Y')); ?> <?php echo(get_bloginfo('name')); ?>. All Rights Reserved</p>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
