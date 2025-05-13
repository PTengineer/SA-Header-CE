<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Header Exercise
 * @since 1.0.0
 */
/* POSSIBLY UNNECESSARY DELETE IF SO */
//if ( ! function_exists( 'headerexercise_setup' ) ) :
//
//	/**
//	 * Sets up theme defaults and registers support for various
//	 * WordPress features.
//	 *
//	 * Note that this function is hooked into the after_setup_theme
//	 * hook, which runs before the init hook. The init hook is too late
//	 * for some features, such as indicating support post thumbnails.
//	 */
//	function headerexercise_setup() {
//
//		/**
//		 * Make theme available for translation.
//		 * Translations can be placed in the /languages/ directory.
//		 */
//		load_theme_textdomain( 'headerexercise', get_template_directory() . '/languages' );
//
//		/**
//		 * Add default posts and comments RSS feed links to <head>.
//		 */
//		add_theme_support( 'automatic-feed-links' );
//
//		/**
//		 * Enable support for post thumbnails and featured images.
//		 */
//		add_theme_support( 'post-thumbnails' );
//
//		/**
//		 * Add support for two custom navigation menus.
//		 */
//		register_nav_menus( array(
//			'primary'   => __( 'Primary Menu', 'headerexercise' ),
//			'secondary' => __( 'Secondary Menu', 'headerexercise' ),
//		) );
//
//		/**
//		 * Enable support for the following post formats:
//		 * aside, gallery, quote, image, and video
//		 */
//		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
//	}
//endif; // headerexercise_setup
//add_action( 'after_setup_theme', 'headerexercise_setup' );

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function headerexercise_style() {
	wp_enqueue_style(
		'headerexercise-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'headerexercise_style' );