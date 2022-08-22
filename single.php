<?php
/**
 * Single post template file.
 *
 * @package WP_Simple
 */

get_header(); ?>

<div class="site-main">
	<div class="container">
		<div class="row">
			<div class="col-8">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						get_template_part( 'templates/content', 'single-post' );
					endwhile;
				endif;
				?>
			</div>
			<div class="col-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
