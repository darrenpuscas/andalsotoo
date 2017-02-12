<?php
/**
 * And Also Too functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package And_Also_Too
 */

if ( ! function_exists( 'and_also_too_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function and_also_too_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on And Also Too, use a find and replace
	 * to change 'and-also-too' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'and-also-too', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'and-also-too' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'and_also_too_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'and_also_too_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function and_also_too_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'and_also_too_content_width', 640 );
}
add_action( 'after_setup_theme', 'and_also_too_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function and_also_too_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'and-also-too' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'and-also-too' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'and_also_too_widgets_init' );


// function my_acf_init() {
//
// 	acf_update_setting('google_api_key', 'AIzaSyCJanOv-q2iQobdexmufcx2HsMTVYwryKg');
// 	}
//
// add_action('acf/init', 'my_acf_init');

/**
 * Enqueue scripts and styles.
 */

function and_also_too_scripts() {

	wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome-4.7.0/css/font-awesome.min.css' );

	wp_enqueue_style( 'font-awesome');

	wp_enqueue_style( 'and-also-too-style', get_stylesheet_uri() );

	if ( is_page( 'Stories' ) || is_post_type_archive('stories') ) {
	wp_enqueue_script( 'app-masonry', get_template_directory_uri() . '/js/app-masonry.js', array('masonry'), '', true );
	}

	if ( is_page( 'About' ) ) {
	  wp_enqueue_script( 'about-macy-lib', get_template_directory_uri() . '/js/macy-min.js', array(), '', true );
	}

	if ( is_page( 'About' ) ) {
	  wp_enqueue_script( 'about-macy', get_template_directory_uri() . '/js/about-macy.js', array(), '', true );
	}

	wp_enqueue_script( 'and-also-too-navigation', get_template_directory_uri() . '/js/navigation.js', array(), false, true );

	wp_enqueue_script( 'and-also-too-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'and_also_too_scripts' );





/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
