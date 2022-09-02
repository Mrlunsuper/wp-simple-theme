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
		<div class="site-main">
			<header id="site-main-header">
				<div class="container">
					<div class="row align-items-center">
						<?php if ( ! display_header_text() ) : ?>
						<div class="site-main-header-logo col-4 col-sm-6">
							<?php the_custom_logo(); ?>
						</div>
						<?php else : ?>
						<div class="site-main-header-title col-4 col-sm-6">
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						</div>
						<?php endif; ?>
						<div class="site-main-header-menu col-8 col-sm-6">
							<label for="menu-toggle" id="menu-toggle-buton" style="display:none">
								<span class="menu-toggle-icon">
									<span class="menu-icon"></span>
									<span class="menu-icon"></span>
									<span class="menu-icon"></span>
								</span>

							</label>
							<input type="checkbox" name="menu-toggle" id="menu-toggle" style="display:none">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'menu_id'        => 'primary-menu',
									'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'container'      => 'nav',
								)
							);
							?>
						</div>
					</div>
				</div>
			</header>

