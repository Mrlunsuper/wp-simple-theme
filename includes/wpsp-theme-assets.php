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
		wp_enqueue_style( 'wpsp-grid', WP_SIMPLE_CSS . '/grid.css', array(), WP_SIMPLE_VERSION, 'all' );
		wp_enqueue_style( 'wpsp-style', WP_SIMPLE_CSS . '/style.css', array(), WP_SIMPLE_VERSION, 'all' );
	}
}


if ( ! function_exists( 'wpsp_enqueue_script' ) ) {
	/**
	 * Enqueue scripts.
	 *
	 * @since 1.0.0
	 */
	function wpsp_enqueue_script() {
		wp_enqueue_script( 'wpsp-script', WP_SIMPLE_JS . '/main.js', array( 'jquery' ), WP_SIMPLE_VERSION, true );
		// Lazysizes.
		wp_enqueue_script( 'wpsp-lazysizes', WP_SIMPLE_JS . '/lazysizes.min.js', array( 'jquery' ), WP_SIMPLE_VERSION, true );
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


/**
 * Grid system columns width.
 */
if ( ! function_exists( 'wpsp_grid_columns' ) ) {
	/**
	 * Grid system columns width.
	 *
	 * @since 1.0.0
	 */
	function wpsp_grid_columns() {
		$mc = 12;
		$m  = 1;
		echo '<style>';
		for ( $i = 1; $i <= $mc; $i++ ) {
			$scw = 100 - ( $m * ( $mc - 1 ) ) / $mc;
			$cw  = ( $scw * $i ) + ( $m * ( $i - 1 ) );
			echo sprintf( '.col-%s { width: %s%%; }', $i, $cw );
		}
		echo '</style>';
	}
}

//add_action( 'wp_head', 'wpsp_grid_columns' );
