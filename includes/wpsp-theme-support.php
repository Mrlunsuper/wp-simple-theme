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
		add_theme_support( 'widgets' );
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


/**
 * Register widget area.
 */
if ( ! function_exists( 'wpsp_register_widget_area' ) ) {
	/**
	 * Register widget area.
	 *
	 * @since 1.0.0
	 */
	function wpsp_register_widget_area() {
		register_sidebar(
			array(
				'name'          => __( 'Sidebar', 'wp-simple' ),
				'id'            => 'sidebar-1',
				'description'   => __( 'Add widgets here.', 'wp-simple' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
}

add_action( 'widgets_init', 'wpsp_register_widget_area' );
