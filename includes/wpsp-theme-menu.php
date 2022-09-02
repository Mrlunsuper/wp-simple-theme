<?php
/**
 * Theme menu manage.
 *
 * @package WP_Simple
 */

if ( ! function_exists( 'wpsp_register_menu_location' ) ) {
	/**
	 * Register menu location.
	 *
	 * @since 1.0.0
	 */
	function wpsp_register_menu_location() {
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'wp-simple' ),
			)
		);
	}
}

add_action( 'after_setup_theme', 'wpsp_register_menu_location' );
