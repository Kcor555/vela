<?php
/**
 * Functions and definitions
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vela
 * @since   1.0.0
 */


if ( ! function_exists( 'vela_setup' ) )  :
/**
 * Theme defaults and support for WP features
 *
 * @return void
 *
 * @since Vela 1.0
 *
 */

	function vela_setup() {
		add_theme_support( 'wp-block-styles' );

		add_editor_style( 'style.css', );
	}

	endif;

	add_action( 'after_setup_theme', 'vela_setup' );

	if ( ! function_exists( 'vela_theme_styles' ) )  :
	/**
	 * Enqueue styles.
	 *
	 * @since Vela 1.0
	 *
	 * @return void
	 *
	 */

	function vela_theme_styles() {
		// Register theme stylesheet.
		$theme_version  = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : 'false';

		// Main stylesheet
		wp_register_style(
			'vela_theme_style',
			get_stylesheet_directory_uri() . '/style.css',
			[],
			$version_string
		);
		// Enqueue theme stylesheet.
		wp_enqueue_style( 'vela_theme_style' );


		//Inline styles
		wp_add_inline_style( 'vela_styles', 'vela_get_accent_colors()' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'vela_theme_styles' );

require get_template_directory() . '/inc/block-patterns.php';

