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
				'social-menu' => __('Social Menu'),
				'footer_menu' => __('Footer Menu')
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
	
	// UI Kit
	wp_enqueue_style( 'uikit', get_template_directory_uri() . '/assets/uikit/css/uikit.min.css' );
	wp_enqueue_script( 'uikit', get_template_directory_uri() . '/assets/uikit/js/uikit.min.js', array( 'jquery' ), '3.0.0.30', true );
	wp_enqueue_script( 'uikit-icons', get_template_directory_uri() . '/assets/uikit/js/uikit-icons.min.js', array( 'jquery' ), '3.0.0.30', true );

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

/**
 * Load CMB2
 */
require_once(dirname(__FILE__) . '/inc/cmb2-functions.php');

/*-------------------------------------
  Move Yoast to the Bottom
---------------------------------------*/
function yoasttobottom() {
  return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

// CPT functions
function cptui_register_my_cpts_testimonials() {

	/**
	 * Post Type: Testimonials.
	 */

	$labels = [
		"name" => __( "Testimonials", "vanalstine-voice" ),
		"singular_name" => __( "Testimonial", "vanalstine-voice" ),
		"menu_name" => __( "Testimonials", "vanalstine-voice" ),
		"all_items" => __( "All Testimonials", "vanalstine-voice" ),
		"add_new" => __( "Add new", "vanalstine-voice" ),
		"add_new_item" => __( "Add new Testimonial", "vanalstine-voice" ),
		"edit_item" => __( "Edit Testimonial", "vanalstine-voice" ),
		"new_item" => __( "New Testimonial", "vanalstine-voice" ),
		"view_item" => __( "View Testimonial", "vanalstine-voice" ),
		"view_items" => __( "View Testimonials", "vanalstine-voice" ),
		"search_items" => __( "Search Testimonials", "vanalstine-voice" ),
		"not_found" => __( "No Testimonials found", "vanalstine-voice" ),
		"not_found_in_trash" => __( "No Testimonials found in trash", "vanalstine-voice" ),
		"parent" => __( "Parent Testimonial:", "vanalstine-voice" ),
		"featured_image" => __( "Featured image for this Testimonial", "vanalstine-voice" ),
		"set_featured_image" => __( "Set featured image for this Testimonial", "vanalstine-voice" ),
		"remove_featured_image" => __( "Remove featured image for this Testimonial", "vanalstine-voice" ),
		"use_featured_image" => __( "Use as featured image for this Testimonial", "vanalstine-voice" ),
		"archives" => __( "Testimonial archives", "vanalstine-voice" ),
		"insert_into_item" => __( "Insert into Testimonial", "vanalstine-voice" ),
		"uploaded_to_this_item" => __( "Upload to this Testimonial", "vanalstine-voice" ),
		"filter_items_list" => __( "Filter Testimonials list", "vanalstine-voice" ),
		"items_list_navigation" => __( "Testimonials list navigation", "vanalstine-voice" ),
		"items_list" => __( "Testimonials list", "vanalstine-voice" ),
		"attributes" => __( "Testimonials attributes", "vanalstine-voice" ),
		"name_admin_bar" => __( "Testimonial", "vanalstine-voice" ),
		"item_published" => __( "Testimonial published", "vanalstine-voice" ),
		"item_published_privately" => __( "Testimonial published privately.", "vanalstine-voice" ),
		"item_reverted_to_draft" => __( "Testimonial reverted to draft.", "vanalstine-voice" ),
		"item_scheduled" => __( "Testimonial scheduled", "vanalstine-voice" ),
		"item_updated" => __( "Testimonial updated.", "vanalstine-voice" ),
		"parent_item_colon" => __( "Parent Testimonial:", "vanalstine-voice" ),
	];

	$args = [
		"label" => __( "Testimonials", "vanalstine-voice" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "testimonials", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-quote",
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "testimonials", $args );
}

add_action( 'init', 'cptui_register_my_cpts_testimonials' );

function cptui_register_faq_cpts() {

	/**
	 * Post Type: FAQs.
	 */

	$labels = [
		"name" => __( "FAQs", "vanalstine-voice" ),
		"singular_name" => __( "FAQ", "vanalstine-voice" ),
		"menu_name" => __( "My FAQs", "vanalstine-voice" ),
		"all_items" => __( "All FAQs", "vanalstine-voice" ),
		"add_new" => __( "Add new", "vanalstine-voice" ),
		"add_new_item" => __( "Add new FAQ", "vanalstine-voice" ),
		"edit_item" => __( "Edit FAQ", "vanalstine-voice" ),
		"new_item" => __( "New FAQ", "vanalstine-voice" ),
		"view_item" => __( "View FAQ", "vanalstine-voice" ),
		"view_items" => __( "View FAQs", "vanalstine-voice" ),
		"search_items" => __( "Search FAQs", "vanalstine-voice" ),
		"not_found" => __( "No FAQs found", "vanalstine-voice" ),
		"not_found_in_trash" => __( "No FAQs found in trash", "vanalstine-voice" ),
		"parent" => __( "Parent FAQ:", "vanalstine-voice" ),
		"featured_image" => __( "Featured image for this FAQ", "vanalstine-voice" ),
		"set_featured_image" => __( "Set featured image for this FAQ", "vanalstine-voice" ),
		"remove_featured_image" => __( "Remove featured image for this FAQ", "vanalstine-voice" ),
		"use_featured_image" => __( "Use as featured image for this FAQ", "vanalstine-voice" ),
		"archives" => __( "FAQ archives", "vanalstine-voice" ),
		"insert_into_item" => __( "Insert into FAQ", "vanalstine-voice" ),
		"uploaded_to_this_item" => __( "Upload to this FAQ", "vanalstine-voice" ),
		"filter_items_list" => __( "Filter FAQs list", "vanalstine-voice" ),
		"items_list_navigation" => __( "FAQs list navigation", "vanalstine-voice" ),
		"items_list" => __( "FAQs list", "vanalstine-voice" ),
		"attributes" => __( "FAQs attributes", "vanalstine-voice" ),
		"name_admin_bar" => __( "FAQ", "vanalstine-voice" ),
		"item_published" => __( "FAQ published", "vanalstine-voice" ),
		"item_published_privately" => __( "FAQ published privately.", "vanalstine-voice" ),
		"item_reverted_to_draft" => __( "FAQ reverted to draft.", "vanalstine-voice" ),
		"item_scheduled" => __( "FAQ scheduled", "vanalstine-voice" ),
		"item_updated" => __( "FAQ updated.", "vanalstine-voice" ),
		"parent_item_colon" => __( "Parent FAQ:", "vanalstine-voice" ),
	];

	$args = [
		"label" => __( "FAQs", "vanalstine-voice" ),
		"labels" => $labels,
		"description" => "Frequently Asked Questions",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "faq", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-editor-help",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "faq", $args );
}

add_action( 'init', 'cptui_register_faq_cpts' );


function cptui_register_my_cpts_programs() {

	/**
	 * Post Type: Programs.
	 */

	$labels = [
		"name" => __( "Programs", "vanalstine-voice" ),
		"singular_name" => __( "Program", "vanalstine-voice" ),
		"menu_name" => __( "Programs", "vanalstine-voice" ),
		"all_items" => __( "All programs", "vanalstine-voice" ),
		"add_new" => __( "Add new", "vanalstine-voice" ),
		"add_new_item" => __( "Add new programs", "vanalstine-voice" ),
		"edit_item" => __( "Edit programs", "vanalstine-voice" ),
		"new_item" => __( "New programs", "vanalstine-voice" ),
		"view_item" => __( "View programs", "vanalstine-voice" ),
		"view_items" => __( "View programs", "vanalstine-voice" ),
		"search_items" => __( "Search programs", "vanalstine-voice" ),
		"not_found" => __( "No programs found", "vanalstine-voice" ),
		"not_found_in_trash" => __( "No programs found in trash", "vanalstine-voice" ),
		"parent" => __( "Parent programs:", "vanalstine-voice" ),
		"featured_image" => __( "Featured image for this programs", "vanalstine-voice" ),
		"set_featured_image" => __( "Set featured image for this programs", "vanalstine-voice" ),
		"remove_featured_image" => __( "Remove featured image for this programs", "vanalstine-voice" ),
		"use_featured_image" => __( "Use as featured image for this programs", "vanalstine-voice" ),
		"archives" => __( "programs archives", "vanalstine-voice" ),
		"insert_into_item" => __( "Insert into programs", "vanalstine-voice" ),
		"uploaded_to_this_item" => __( "Upload to this programs", "vanalstine-voice" ),
		"filter_items_list" => __( "Filter programs list", "vanalstine-voice" ),
		"items_list_navigation" => __( "programs list navigation", "vanalstine-voice" ),
		"items_list" => __( "programs list", "vanalstine-voice" ),
		"attributes" => __( "programs attributes", "vanalstine-voice" ),
		"name_admin_bar" => __( "programs", "vanalstine-voice" ),
		"item_published" => __( "programs published", "vanalstine-voice" ),
		"item_published_privately" => __( "programs published privately.", "vanalstine-voice" ),
		"item_reverted_to_draft" => __( "programs reverted to draft.", "vanalstine-voice" ),
		"item_scheduled" => __( "programs scheduled", "vanalstine-voice" ),
		"item_updated" => __( "programs updated.", "vanalstine-voice" ),
		"parent_item_colon" => __( "Parent programs:", "vanalstine-voice" ),
	];

	$args = [
		"label" => __( "Programs", "vanalstine-voice" ),
		"labels" => $labels,
		"description" => "The different programs that are currently being offered. Used to populate the 'programs' section of the home page.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "programs", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-portfolio",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "programs", $args );
}

add_action( 'init', 'cptui_register_my_cpts_programs' );



