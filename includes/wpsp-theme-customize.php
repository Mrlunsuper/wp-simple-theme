<?php
/**
 * Site customize
 *
 * @package WP_Simple
 */

/**
 * Add menu colors to the customizer.
 */
function wpsp_customize_register( $wp_customize ) {
	$wp_customize->add_setting(
		'wpsp_menu_items_color',
		array(
			'default'           => '#333',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'wpsp_menu_items_color',
			array(
				'label'    => __( 'Menu Items Color', 'wp-simple' ),
				'section'  => 'colors',
				'settings' => 'wpsp_menu_items_color',
			)
		)
	);

	$wp_customize->add_setting(
		'wpsp_menu_items_hover_color',
		array(
			'default'           => '#333',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'wpsp_menu_items_hover_color',
			array(
				'label'    => __( 'Menu Items Hover Color', 'wp-simple' ),
				'section'  => 'colors',
				'settings' => 'wpsp_menu_items_hover_color',
			)
		)
	);

	$wp_customize->add_setting(
		'wpsp_menu_background_color',
		array(
			'default'           => '#333',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'wpsp_menu_background_color',
			array(
				'label'    => __( 'Menu Background Color', 'wp-simple' ),
				'section'  => 'colors',
				'settings' => 'wpsp_menu_background_color',
			)
		)
	);

	$wp_customize->add_setting(
		'wpsp_header_background_color',
		array(
			'default'           => '#000000',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'wpsp_header_background_color',
			array(
				'label'    => __( 'Header Background Color', 'wp-simple' ),
				'section'  => 'colors',
				'settings' => 'wpsp_header_background_color',
			)
		)
	);
}
add_action( 'customize_register', 'wpsp_customize_register' );

if ( ! function_exists( 'wpsp_customize_css' ) ) {
	/**
	 * Print inline style.
	 */
	function wpsp_customize_css() {
		$menu_items_color        = get_theme_mod( 'wpsp_menu_items_color' );
		$menu_items_hover_color  = get_theme_mod( 'wpsp_menu_items_hover_color' );
		$menu_background_color   = get_theme_mod( 'wpsp_menu_background_color' );
		$header_background_color = get_theme_mod( 'wpsp_header_background_color' );
		$site_title_color        = get_header_textcolor();
		?>
	<style type="text/css">
		.menu-item a {
			color: <?php echo esc_attr( $menu_items_color ); ?>;
		}
		.menu-item a:hover {
			color: <?php echo esc_attr( $menu_items_hover_color ); ?>;
		}
		#site-main-header {
			background-color: <?php echo esc_attr( $header_background_color ); ?>;
		}
		.site-title a{
			color: <?php echo '#' . esc_attr( $site_title_color ); ?>;
		}
	</style>
		<?php
	}
}
add_action( 'wp_head', 'wpsp_customize_css' );
