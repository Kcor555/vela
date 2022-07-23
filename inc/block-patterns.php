<?php
/**
 * Vela: Block Patterns
 *
 * @since Vela 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @return void
 * @since Vela 1.0
 *
 */
if ( ! function_exists( 'vela_register_block_patterns' ) ) :
	function vela_register_block_patterns() {
		$block_pattern_categories = array(
			'featured' => array( 'label' => __( 'Featured', 'vela' ) ),
			'footer'   => array( 'label' => __( 'Footers', 'vela' ) ),
			'header'   => array( 'label' => __( 'Headers', 'vela' ) ),
			'query'    => array( 'label' => __( 'Query', 'vela' ) ),
			'pages'    => array( 'label' => __( 'Pages', 'vela' ) ),
		);

		/**
		 * Filters the theme block pattern categories.
		 *
		 * @since Vela 1.0
		 *
		 * @param array[] $block_pattern_categories {
		 *     An associative array of block pattern categories, keyed by category name.
		 *
		 * @type array[] $properties {
		 *         An array of block category properties.
		 *
		 * @type string $label A human-readable label for the pattern category.
		 *     }
		 * }
		 */
		$block_pattern_categories = apply_filters( 'vela_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'header',
			'footer',
			'text-and-media-side-by-side',
		);

		/**
		 * Filters the theme block patterns.
		 *
		 * @since Vela 1.0
		 *
		 * @param array $block_patterns An array of block patterns, keyed by pattern name.
		 *
		 */

		$block_patterns = apply_filters( 'vela_block_patterns', $block_patterns );

		foreach ( $block_patterns as $block_pattern ) {
			$pattern_file = get_theme_file_path( 'inc/patterns/' . $block_pattern . '.php' );

			register_block_pattern(
				'vela/' . $block_pattern,
				require $pattern_file
			);
		}
	}
add_action( 'init', 'vela_register_block_patterns', 9 );
endif;
