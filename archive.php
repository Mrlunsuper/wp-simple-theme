<?php
get_header(); ?>

<header>
	<?php the_archive_title( '<h2 class="archive-title">', '</h2>' ); ?>
</header>
<div class="flex flex-wrap">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'templates/content', 'post' );
	endwhile;
	endif;
	?>
</div>
<?php
get_footer();
