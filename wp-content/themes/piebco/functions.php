<?php
/**
 * piebco functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package piebco
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function my_excerpt_length( $length ){
	return 10;
}
add_filter('excerpt_length', 'my_excerpt_length', 999);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/template-parts/header/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function piebco_setup() {

	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on piebco, use a find and replace
		* to change 'piebco' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'piebco', get_template_directory() . '/languages' );

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

	if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'piebco' ),
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
			'piebco_custom_background_args',
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
add_action( 'after_setup_theme', 'piebco_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function piebco_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'piebco_content_width', 640 );
}
add_action( 'after_setup_theme', 'piebco_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function piebco_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'piebco' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'piebco' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'piebco_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function piebco_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri());

	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.css', '5.3.0' );

	wp_enqueue_style( 'bootstrap-icon', get_template_directory_uri() . '/plugins/bootstrap-icons/bootstrap-icons.css' );

	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/plugins/animate-css/animate.css' );

	wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/plugins/magnific-popup/dist/magnific-popup.css' );

	wp_enqueue_style( 'slick-carousel', get_template_directory_uri() . '/plugins/slick-carousel/slick.css' );
	
	wp_enqueue_style( 'slick-carousel-theme', get_template_directory_uri() . '/plugins/slick-carousel/slick-theme.css' );
	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.js', array( 'jquery' ), '3.3.2', true );

	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/plugins/magnific-popup/dist/jquery.magnific-popup.min.js', array( 'jquery' ), '6.1.1', true );

	wp_enqueue_script( 'slick', get_template_directory_uri() . '/plugins/slick-carousel/slick.min.js', array( 'jquery' ), '3.3.2', true );

	wp_enqueue_script( 'wow', get_template_directory_uri() . '/plugins/wow/wow.min.js', array( 'jquery' ), '3.3.2', true );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '3.3.2', true );

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'piebco_scripts' );

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

