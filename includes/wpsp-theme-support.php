<?php
/**
 * All theme support functions are defined here.
 *
 * @package WP_Simple
 */

// phpcs:ignore Generic.Arrays.DisallowShortArraySyntax.Found

if ( ! function_exists( 'wpsp_add_theme_support' ) ) {
	/**
	 * Add theme support for various features.
	 *
	 * @since 1.0.0
	 */
	function wpsp_add_theme_support() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 100,
				'width'       => 400,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);
		add_theme_support(
			'custom-background',
			array(
				'default-color' => '#f1f1f1',
				'default-image' => '',
			)
		);
		add_theme_support(
			'custom-header',
			array(
				'default-image' => '',
				'width'         => 0,
				'height'        => 0,
				'flex-height'   => true,
				'flex-width'    => true,
				'uploads'       => true,
			)
		);

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'wp-simple' ),
					'slug'  => 'primary',
					'color' => '#0073aa',
				),
				array(
					'name'  => __( 'Secondary', 'wp-simple' ),
					'slug'  => 'secondary',
					'color' => '#00a0d2',
				),
				array(
					'name'  => __( 'Dark Gray', 'wp-simple' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'wp-simple' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'wp-simple' ),
					'slug'  => 'white',
					'color' => '#fff',
				),
			)
		);
	}
}

add_action( 'after_setup_theme', 'wpsp_add_theme_support' );
