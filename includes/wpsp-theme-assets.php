<?php
/**
 * Theme assets management.
 *
 * @package WP_Simple
 */

if ( ! function_exists( 'wpsp_enqueue_style' ) ) {
	/**
	 * Enqueue styles.
	 *
	 * @since 1.0.0
	 */
	function wpsp_enqueue_style() {
		wp_enqueue_style( 'wpsp-milligram', WP_SIMPLE_CSS . '/milligram.css', [], WP_SIMPLE_VERSION, 'all' );
		wp_enqueue_style( 'wpsp-style', WP_SIMPLE_CSS . '/style.css', [], WP_SIMPLE_VERSION, 'all' );
	}
}


if ( ! function_exists( 'wpsp_enqueue_script' ) ) {
	/**
	 * Enqueue scripts.
	 *
	 * @since 1.0.0
	 */
	function wpsp_enqueue_script() {
		wp_enqueue_script( 'wpsp-script', WP_SIMPLE_JS . '/main.js', [ 'jquery' ], WP_SIMPLE_VERSION, true );
		// Lazysizes.
		wp_enqueue_script( 'wpsp-lazysizes', WP_SIMPLE_JS . '/lazysizes.min.js', [ 'jquery' ], WP_SIMPLE_VERSION, true );
	}
}

if ( ! function_exists( 'wpsp_load_assets' ) ) {
	/**
	 * Loads all the necessary files.
	 *
	 * @since 1.0.0
	 */
	function wpsp_load_assets() {
		wpsp_enqueue_style();
		wpsp_enqueue_script();
	}
}

add_action( 'wp_enqueue_scripts', 'wpsp_load_assets' );
