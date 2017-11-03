<?php

/**
 * @link              https://www.rupok.me
 * @since             1.0.0
 * @package           Custom_Script_For_Customizer
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Script for Customizer
 * Plugin URI:        https://codetic.net/custom-script-for-customizer
 * Description:       Add custom script through WordPress Customizer.
 * Version:           1.0.0
 * Author:            Nazmul H. Rupok
 * Author URI:        https://www.rupok.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       custom-script-for-customizer
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'CUSTOM_SCRIPT_CUSTOMIZER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-custom-script-for-customizer-activator.php
 */
function activate_custom_script_for_customizer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-script-for-customizer-activator.php';
	Custom_Script_For_Customizer_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-custom-script-for-customizer-deactivator.php
 */
function deactivate_custom_script_for_customizer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-script-for-customizer-deactivator.php';
	Custom_Script_For_Customizer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_custom_script_for_customizer' );
register_deactivation_hook( __FILE__, 'deactivate_custom_script_for_customizer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-custom-script-for-customizer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_custom_script_for_customizer() {

	$plugin = new Custom_Script_For_Customizer();
	$plugin->run();

}
run_custom_script_for_customizer();
