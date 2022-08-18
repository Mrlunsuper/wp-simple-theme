<?php
/**
 * Main theme functions file.
 *
 * @package WP_Simple
 */

define( 'WP_SIMPLE_VERSION', '1.0.0' );
define( 'WP_SIMPLE_URL', get_template_directory_uri() );
define( 'WP_SIMPLE_PATH', get_template_directory() );
define( 'WP_SIMPLE_INC', WP_SIMPLE_PATH . '/includes' );
define( 'WP_SIMPLE_ASSETS', WP_SIMPLE_URL . '/assets' );
define( 'WP_SIMPLE_IMG', WP_SIMPLE_ASSETS . '/images' );
define( 'WP_SIMPLE_JS', WP_SIMPLE_ASSETS . '/js' );
define( 'WP_SIMPLE_CSS', WP_SIMPLE_ASSETS . '/css' );

if ( ! function_exists( 'wp_simple_load_include' ) ) {
	/**
	 * Loads all the necessary files.
	 *
	 * @since 1.0.0
	 */
	function wp_simple_load_include() {
		$prefix        = 'wpsp-';
		$theme_include = [ 'theme-menu', 'theme-assets', 'theme-support', 'theme-tweak' ];
		$theme_path    = WP_SIMPLE_INC . '/' . $prefix;
		foreach ( $theme_include as $include ) {
			$path = $theme_path . $include . '.php';
			if ( file_exists( $path ) ) {
				require_once $path;
			}
		}
	}
}
wp_simple_load_include();
