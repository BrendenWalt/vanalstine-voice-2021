<?php
/**
 * VanalstineVoice21 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package VanalstineVoice21
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'vanalstine_voice_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vanalstine_voice_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on VanalstineVoice21, use a find and replace
		 * to change 'vanalstine-voice' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'vanalstine-voice', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		add_filter('wp_nav_menu_objects','my_wp_nav_menu_objects', 10, 2);

		function my_wp_nav_menu_objects($items, $args) {
			foreach($items as &$item) {
				//vars 
				$icon = get_field('social_icon', $item);
				$icon = strtolower($icon);
				if($icon) {
					
					$item->title ='<i class="fab fa-'.$icon.'"></i>';
				}
			}
			return $items;
		}

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'header-menu-pages' => __( 'Main Header Menu'),
				'social-menu' => __('Social Menu')
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'vanalstine_voice_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'vanalstine_voice_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vanalstine_voice_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vanalstine_voice_content_width', 640 );
}
add_action( 'after_setup_theme', 'vanalstine_voice_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vanalstine_voice_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'vanalstine-voice' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'vanalstine-voice' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'vanalstine_voice_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vanalstine_voice_scripts() {
	wp_enqueue_style( 'vanalstine-voice-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'vanalstine-voice-style', 'rtl', 'replace' );

	wp_enqueue_script( 'vanalstine-voice-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Load swiper files
	wp_enqueue_style('swiper-bundle-styles', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.css', array(), true);
	wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.js', array(), true);

	wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), true);
}
add_action( 'wp_enqueue_scripts', 'vanalstine_voice_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
// ACF Groups
include_once(get_template_directory().'/inc/acf-groups.php');
