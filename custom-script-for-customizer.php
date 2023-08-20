<?php

/**
 * @link              https://www.rupok.me
 * @since             1.1.1
 * @package           Custom_Script_For_Customizer
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Scripts for Customizer
 * Plugin URI:        https://wordpress.org/plugins/custom-script-for-customizer
 * Description:       Add custom scripts through WordPress Customizer and edit with CodeMirror editor.
 * Version:           1.1.1
 * Author:            Nazmul H. Rupok
 * Author URI:        https://www.rupok.me
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       custom-script-for-customizer
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'CUSTOM_SCRIPT_CUSTOMIZER_VERSION', '1.1.0' );

function activate_custom_script_for_customizer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-script-for-customizer-activator.php';
	Custom_Script_For_Customizer_Activator::activate();
}

function deactivate_custom_script_for_customizer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-script-for-customizer-deactivator.php';
	Custom_Script_For_Customizer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_custom_script_for_customizer' );
register_deactivation_hook( __FILE__, 'deactivate_custom_script_for_customizer' );

// Action menus

function csfc_add_settings_link( $links ) {
    $add_scripts_link = sprintf( '<a href="customize.php">' . __( 'Add Scripts' ) . '</a>' );
    array_push( $links, $add_scripts_link);
   return $links;
}
$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$plugin", 'csfc_add_settings_link' );

require plugin_dir_path( __FILE__ ) . 'includes/class-custom-script-for-customizer.php';

function run_custom_script_for_customizer() {

	$plugin = new Custom_Script_For_Customizer();
	$plugin->run();

}
run_custom_script_for_customizer();
