<?php
/**
 * Single post template file.
 *
 * @package WP_Simple
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-single-post' ); ?>>
	<header class="entry-header">
		<div class="entry-content-thumb">
			<?php
			if ( has_post_thumbnail() ) :
				the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
			endif;
			?>
		</div>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-header-meta">
			<small><?php the_date( get_option( 'date_format' ) ); ?> </small>
			<?php the_category(); ?>
		</div>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>
