<?php
/**
 * Theme functions gose here.
 *
 * @package WP_Simple
 */

if ( ! function_exists( 'cath_that_image' ) ) {
	/**
	 * Get that image.
	 *
	 * @param int $post_id Post ID.
	 * @return string
	 */
	function cath_that_image( $post_id ) {
		$image_id  = get_post_thumbnail_id( $post_id );
		$image_url = wp_get_attachment_image_src( $image_id, 'thumbnail' );
		return $image_url[0];
	}
}

if ( ! function_exists( 'wpsp_log' ) ) {
	/**
	 * Log something.
	 *
	 * @param mixed $data Data to log.
	 */
	function wpsp_log( $data ) {
		if ( WP_DEBUG === true ) {
			if ( is_array( $data ) || is_object( $data ) ) {
				error_log( print_r( $data, true ) );
			} else {
				error_log( $data );
			}
		}
	}
}
