<?php
/**
 * Home page file.
 *
 * @package WP_Simple
 */

get_header();
?>
<div class="container">
	<div class="row">
		<?php
		$latest_post = wpsp_get_latest_posts( 10 );
		if ( $latest_post->have_posts() ) :
			while ( $latest_post->have_posts() ) :
				$latest_post->the_post();
				get_template_part( 'templates/content', 'post' );
			endwhile;
			wp_reset_postdata();
		endif;
		?>
	</div>
</div>
<?php
get_footer();
