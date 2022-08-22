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
<div class="col-4">
	<div class="post-card">
		<div class="post-card-inner">
			<div class="post-card-image">
				<a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'thumbnail', [ 'class' => 'lazyload' ] ); ?>
				<?php else : ?>
					<img class="lazyload wp-post-image" src="<?php echo esc_url( cath_that_image( get_the_id() ) ); ?>" alt="<?php the_title(); ?>">
				<?php endif; ?>
				</a>
			</div>
			<div class="post-card-content">
				<h2 class="post-card-title">
					<a href="<?php the_permalink(); ?>">
						<?php the_title( '<h3>', '</h3>' ); ?>
					</a>
				</h2>
				<div class="post-card-excerpt">
					<?php the_excerpt(); ?>
				</div>
				<div class="post-card-meta">
					<div class="post-card-meta-item">
						<span class="post-card-meta-item-label">
							<?php _e( 'Posted on', 'wp-simple' ); ?>
						</span>
						<span class="post-card-meta-item-content">
							<?php the_time( get_option( 'date_format' ) ); ?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
