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
 * Theme defaults and support for WP features
 *
 * @return void
 * @since Vela 1.0
 *
 */

//
//function vela_styles() {
//	wp_enqueue_style(
//		'vela-style',
//		get_stylesheet_uri(),
//		array(),
//		wp_get_theme()->get( 'Version' )
//	);
//}
//add_action( 'wp_enqueue_scripts', 'vela_styles' );

if ( ! function_exists( 'vela_setup' ) )  :
	function vela_setup() {

		add_theme_support( 'wp-block-styles' );

		add_editor_style(
			[
				'css/editor-style.css',
				'vela-style'
			]
		);
	}

	add_action( 'after_setup_theme', 'vela_setup' );

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 * @since Vela 1.0
	 *
	 */

	function vela_theme_style() {
		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : 'false';

		// Main stylesheet.
		wp_register_style(
			'vela_styles',
			get_stylesheet_directory_uri() . '/style.css' ),
		array(),
		$version_string
		);
		wp_enqueue_style( 'vela_styles' );

		//Theme stylesheet

		wp_register_style(
	'vela-theme-style',
	get_stylesheet_directory_uri() . '/assets/css/style.css',
		array(),
		$version_string
		);

		//Enqueue theme stylesheet
		wp_enqueue_style( 'vela-theme-style' );

		//Inline styles
		wp_add_inline_style( 'vela_styles', 'vela_get_accent_colors()' );
		wp_add_inline_style( 'vela-styles', vela_get_font_face_styles() );

	}
endif;
add_action( 'wp_enqueue_scripts', 'vela_theme_style' );

