<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Header Exercise
 * @since 1.0.0
 */

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

/**
 * Enqueue theme js file
 * @return void
 */
function theme_scripts() {
	wp_enqueue_script( 'headerexercise-script', get_template_directory_uri() . '/assets/js/hd1-script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );