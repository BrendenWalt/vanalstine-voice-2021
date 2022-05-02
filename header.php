<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VanalstineVoice21
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/fonts/css/all.min.css">
	<!-- Javascript -->
	<script src="<?php bloginfo('stylesheet_directory')?>/assets/js/scripts.js" defer></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'vanalstine-voice' ); ?></a>

	<header class="vv-site-header">
		<div class="content">
			<div class="site-branding">
				<?php if(!has_custom_logo()) { ?>
					<div class="logo-backup"><?php echo(get_bloginfo('name')); ?></div>
				<?php } else { 
					the_custom_logo();
				}?>
			</div><!-- .site-branding -->

			<nav class="header-nav header-left-nav">
				<?php
					wp_nav_menu( array(
						'theme_location'	=>	'header-menu-pages',
						'container' 			=>	'nav',
						'container_class'	=>	'navbar-header-links',
						'menu_class'			=>	''
					))
				?>
				<div class="header-hamburger">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
				</div>
			</nav><!-- #site-navigation -->

			<nav class="header-nav header-right-nav">
				<div class="header-login">
						<a class=cta-primary>Login</a>
				</div>
				<div class="header-social">
						<?php
							wp_nav_menu( array(
								'theme_location'	=>	'social-menu',
								'container'				=>	'nav',
								'container_class'	=>	'navbar-social'
							))
						?>
				</div>
			</nav>
		</div>
		
	</header><!-- #masthead -->

	<div class="uk-position-bottom-right uk-position-fixed" style="z-index: 300">
		<a href=".vv-site-header" uk-scroll>
			<span class="uk-text-center" uk-icon="icon: chevron-up; ratio: 1.75"></span>
		</a>
	</div>
