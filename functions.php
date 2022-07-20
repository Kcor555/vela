<?php
/**
 * Functions and definitions
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vela
 * @since   1.0.0
 */

/**
 * Enqueue the style.css file.
 *
 * @since Vela 1.0
 */
function vela_styles() {
	wp_enqueue_style(
		'vela-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}

add_action( 'wp_enqueue_scripts', 'vela_styles' );

if ( ! function_exists( 'vela_setup' ) ) {
	function vela_setup() {
		add_theme_support( 'wp-block-styles' );
	}
}
add_action( 'after_setup_theme', 'vela_setup' );