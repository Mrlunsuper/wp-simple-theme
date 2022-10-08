<?php
/**
 * Home page file.
 *
 * @package WP_Simple
 */

get_header();
?>
<div class="flex flex-wrap">
	<?php
	$latest_post = wpsp_get_latest_posts( 10 );
	if ( $latest_post->have_posts() ) :
		while ( $latest_post->have_posts() ) :
			$latest_post->the_post();
			$index = $latest_post->current_post;
			get_template_part( 'templates/content', 'post' );
		endwhile;
		wp_reset_postdata();
	endif;
	?>
</div>
<?php
get_footer();
