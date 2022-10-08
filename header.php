<?php
/**
 * Theme header file.
 *
 * @package WP_Simple
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<title>
			<?php bloginfo( 'name' ); ?> | <?php is_front_page() ? bloginfo( 'description' ) : wp_title(); ?>
		</title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<nav class="site-nav">
				<div class="brand">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div>
				<input type="checkbox" name="toggle-btn" id="toggle-btn" class="hidden">
				<label for="toggle-btn" class="hide-on-desktop" id="bars">
					<span></span>
					<span></span>
					<span></span>
				</label>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'container'      => '',
					)
				);
				?>
		</nav>
		<main class="site-main">
