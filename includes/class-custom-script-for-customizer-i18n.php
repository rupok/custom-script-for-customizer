<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.rupok.me
 * @since      1.0.0
 *
 * @package    Custom_Script_For_Customizer
 * @subpackage Custom_Script_For_Customizer/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Custom_Script_For_Customizer
 * @subpackage Custom_Script_For_Customizer/includes
 * @author     Nazmul H. Rupok <re.enter.rupok@gmail.com>
 */
class Custom_Script_For_Customizer_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'custom-script-for-customizer',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
