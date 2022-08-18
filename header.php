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
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="site-main">
			<header id="site-main-header">
				<div class="container">
					<div class="row align-items-center">
						<div class="site-main-header-logo column column-25">
							<?php the_custom_logo(); ?>
						</div>
						<div class="site-main-header-menu column column-75">
							<?php wp_nav_menu( [ 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ] ); ?>
						</div>
					</div>
				</div>
			</header>

