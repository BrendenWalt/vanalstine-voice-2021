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
	<!-- Font imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200;400;600&family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300&display=swap" rel="stylesheet">
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
			<div class="site-branding top">
				<?php if(!has_custom_logo()) { ?>
					<div class="logo-backup"><?php echo(get_bloginfo('name')); ?></div>
				<?php } else { 
					the_custom_logo();
				}?>
				<h2>
					<?php echo str_replace(' ', '</span><br/><span>', get_bloginfo('name')); ?>
				</h2>
			</div><!-- .site-branding -->

			<div class="header-nav header-right-nav">
				<div class="header-menu-desktop">
					<?php
						wp_nav_menu( array(
							'theme_location'	=>	'header-menu-pages',
							'container' 			=>	'nav',
							'container_class'	=>	'navbar-header-links',
							'menu_class'			=>	''
						))
					?>
					<div class="header-login">
						<a class=cta-primary>Login</a>
					</div>
				</div>
			

				<div class="header-mobile-menu uk-navbar-transparent uk-navbar-container">
					<a href="#offcanvas-slide" class="uk-navbar-toggle uk-icon-link" uk-icon="icon: menu; ratio: 1.5;" uk-toggle></a>

					<div id="offcanvas-slide" uk-offcanvas="flip:true; overlay: true;">
						<div class="uk-offcanvas-bar">
							<button class="uk-offcanvas-close" type="button" uk-close="ratio: 1.5" ></button>
							<?php
								wp_nav_menu( array(
									'theme_location'	=>	'header-menu-pages',
									'container' 			=>	'nav',
									'container_class'	=>	'navbar-header-links',
									'menu_class'			=>	''
								))
							?>
							<div class="header-login">
								<a class=cta-primary>Login</a>
							</div>
						</div>
					</div>
					
				</div>

			</div><!-- #site-navigation -->

			
		</div>
		
	</header><!-- #masthead -->

	<div class="uk-position-bottom-right uk-position-fixed" style="z-index: 300">
		<a href=".vv-site-header" uk-scroll>
			<span class="uk-text-center" uk-icon="icon: chevron-up; ratio: 1.75"></span>
		</a>
	</div>
