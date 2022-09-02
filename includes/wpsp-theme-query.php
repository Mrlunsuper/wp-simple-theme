<?php
/**
 * Post query file.
 */

if ( ! function_exists( 'wpsp_get_latest_posts' ) ) {
	/**
	 * Get latest posts.
	 *
	 * @param int $limit Number of posts to get.
	 * @return WP_Query
	 */
	function wpsp_get_latest_posts( $limit = 3 ) {
		$args = array(
			'post_type'      => 'post',
			'posts_per_page' => $limit,
			'orderby'        => 'date',
			'order'          => 'DESC',
		);
		return new WP_Query( $args );
	}
}
