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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'vanalstine-voice' ); ?></a>

	<header class="vv-site-header">
		<div class="site-branding">
			<?php if(!has_custom_logo()) { ?>
				<div class="logo-backup"><?php echo(get_bloginfo('name')); ?></div>
			<?php } else { 
				the_custom_logo();
			}?>
		</div><!-- .site-branding -->

		<nav class="header-nav header-left-nav">
			
		</nav><!-- #site-navigation -->

		<nav clas="header-nav header-right-nav">
			<div class="header-login"></div>
			<div class="header-social"></div>
		</nav>
	</header><!-- #masthead -->
