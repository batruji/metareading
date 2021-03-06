<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 *
 * WARNING: Please do not edit this file in any way
 *
 * load the theme function files
 */
require ( get_template_directory() . '/includes/functions.php' );
require ( get_template_directory() . '/includes/theme-options.php' );
require ( get_template_directory() . '/includes/hooks.php' );
require ( get_template_directory() . '/includes/version.php' );

function menu_set_dropdown( $sorted_menu_items, $args ) {
    $last_top = 0;
    foreach ( $sorted_menu_items as $key => $obj ) {
        // it is a top lv item?
        if ( 0 == $obj->menu_item_parent ) {
            // set the key of the parent
            $last_top = $key;
        } else {
            $sorted_menu_items[$last_top]->classes['dropdown'] = 'dropdown';
        }
    }
	if (function_exists('qtrans_generateLanguageSelectCode')) {
		ob_start();
		echo qtrans_generateLanguageSelectCode('image');
		$output = ob_get_contents();
		ob_end_clean();
		echo $output;
	}
    return $sorted_menu_items;
}
add_filter( 'wp_nav_menu_objects', 'menu_set_dropdown', 10, 2 );