<?php get_header(); ?>
<div class="container">
	
	<?php for ( $i = 1; $i <= 12; $i++ ) : ?>
		<div class="row">
			<div class="col-<?php echo esc_attr( $i ); ?>" >
				<div style="background:red"><?php echo esc_html( $i ); ?></div>
			</div>
			<div class="col-<?php echo esc_attr( 12 - $i ); ?>">
				<div style="background:blue"><?php echo esc_html( 12 - $i ); ?></div>
			</div>
		</div>
	<?php endfor; ?>

</div>
<?php
get_footer();
