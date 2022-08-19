<?php
/**
 * Theme tweak gose here.
 */

if ( ! function_exists( 'wpsp_excerpt_length' ) ) {
	/**
	 * Set excerpt length.
	 *
	 * @param int $length Length of the excerpt.
	 * @return int
	 */
	function wpsp_excerpt_length( $length ) {
		return 20;
	}
}

add_filter( 'excerpt_length', 'wpsp_excerpt_length' );

if ( ! function_exists( 'wpsp_replace_src_to_data_src' ) ) {
	/**
	 * Replace src to data-src.
	 *
	 * @param string $html Content.
	 * @return string
	 */
	function wpsp_replace_src_to_data_src( $html ) {
		$html = preg_replace( '/<img(.*?)src=/', '<img$1data-src=', $html );
		return $html;
	}
}

//add_filter( 'post_thumbnail_html', 'wpsp_replace_src_to_data_src', 10, 1 );


if ( ! function_exists( 'wpsp_disbale_emoij_scripts' ) ) {
	/**
	 * Disable emoij scripts.
	 */
	function wpsp_disbale_emoij_scripts() {
		wp_dequeue_script( 'wp-emoji-release' );
		wp_deregister_script( 'wp-emoji-release' );
	}
}

add_action( 'wp_print_scripts', 'wpsp_disbale_emoij_scripts', 100 );


if ( ! function_exists( 'wpsp_clean_wp_head' ) ) {
	/**
	 * Clean WordPress head.
	 */
	function wpsp_clean_wp_head() {
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'wp_shortlink_wp_head' );
		remove_action( 'wp_head', 'feed_links', 2 );
		remove_action( 'wp_head', 'feed_links_extra', 3 );
		remove_action( 'wp_head', 'index_rel_link' );
		remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
		remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
	}
}

add_action( 'init', 'wpsp_clean_wp_head' );
