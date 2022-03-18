<?php
/**
 * This file contains the class that defines user defined functions for PDO library.
 *
 * @package SQLite Integration
 * @author Kojima Toshiyasu
 *
 */

/* @ https://github.com/aaemnnosttv/wp-sqlite-db/issues */

// Rewrite「$ value = null;」to「$ value = 0;」
add_action( 'init', 'p_options_fix' );
function p_options_fix() {
        add_filter( 'pre_update_option', 'p_options_fix_not_null', 10, 3 );
        function p_options_fix_not_null( $value, $option, $old_value ) {
                // The fix: cast NULL values to 0
                $value = ( is_null($value) ) ? 0 : $value;
                return $value;
        }
}

// Remove Site Health Dashboard Widget
add_action('wp_dashboard_setup', 'themeprefix_remove_dashboard_widget' );
function themeprefix_remove_dashboard_widget() {
	remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' );
}

// Remove Site Health Sub Menu Item
add_action( 'admin_menu', 'remove_site_health_menu' );	
function remove_site_health_menu(){
	remove_submenu_page( 'tools.php','site-health.php' ); 
}

?>
