<?php
/**
 * Class WPSP_Nav_Walker - Custom walker for the primary menu.
 *
 * @since 1.0.0
 * @package WP_Simple
 */


class WPSP_Nav_Walker extends Walker_Nav_Menu {

	/**
	 * Add inline style to the menu item anchor.
	 *
	 * @param string $output The menu item anchor HTML.
	 * @param object $item The menu item object.
	 * @param int    $depth The depth of the menu item.
	 * @param array  $args The arguments for the menu.
	 * @param int    $id The ID of the current menu item.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = \null, $id = 0 ) {
		// Add inline style for the menu item.
		$menu_item_color = get_theme_mod( 'wpsp_menu_items_color', '#ffffff' );
		$output         .= '<li class="menu-item menu-item-' . $item->ID . '">';
		$output         .= '<a href="' . $item->url . '" class="menu-link" style="color: ' . $menu_item_color . '">';
		$output         .= $item->title;
		$output         .= '</a>';
	}
}
