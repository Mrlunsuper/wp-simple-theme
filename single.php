<?php
/**
 * Single post template file.
 *
 * @package WP_Simple
 */

get_header(); ?>
<div class="single-post">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'templates/content', 'single-post' );
		endwhile;
	endif;
	?>
</div>
<?php get_footer(); ?>
