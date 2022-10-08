<?php
/**
 * Post card template for loop.
 *
 * @package WP_Simple
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<article class="post-card">
	<div class="post-card-inner">
		<div class="post-card-image">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'thumbnail', [ 'class' => 'lazyload' ] ); ?>
			<?php else : ?>
				<img class="lazyload wp-post-image" src="<?php echo esc_url( cath_that_image( get_the_id() ) ); ?>" alt="<?php the_title(); ?>">
			<?php endif; ?>
			</a>
		</div>
		<div class="post-card-content">
			<h3 class="post-card-title">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>">
					<?php the_title( '<span>', '</span>' ); ?>
				</a>
			</h3>
			<div class="post-card-excerpt">
				<?php the_excerpt(); ?>
			</div>
			<div class="post-card-meta">
				<div class="post-card-meta-item">
					<small class="post-card-meta-item-label">
						<?php esc_html_e( 'Posted on', 'wp-simple' ); ?>
					</small>
					<small class="post-card-meta-item-content">
						<?php the_time( get_option( 'date_format' ) ); ?>
					</small>
				</div>
			</div>
		</div>
	</div>
</article>
