<?php

/**
 * @link       https://www.rupok.me
 * @since      1.0.0
 *
 * @package    Custom_Script_For_Customizer
 * @subpackage Custom_Script_For_Customizer/admin
 */

/**
 * @package    Custom_Script_For_Customizer
 * @subpackage Custom_Script_For_Customizer/admin
 * @author     Nazmul H. Rupok <re.enter.rupok@gmail.com>
 */
class Custom_Script_For_Customizer_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/custom-script-for-customizer-admin.css', array(), $this->version, 'all' );

	}

}

function csfc_customize_register( $wp_customize ) {

  // Header Script section

	$wp_customize->add_section( 'csfc_header_script_section' , array(
	'title'      => __('Header Script','custom-script-for-customizer'), 
	'priority'   => 10    
	) );  


	$wp_customize->add_setting( 'csfc_header_script' );

    $control = new WP_Customize_Code_Editor_Control( $wp_customize, 'csfc_header_script', array(
            'label'          => __( 'Add your header script without script tag', 'custom-script-for-customizer' ),
            'section' => 'csfc_header_script_section',
            'code_type' => 'text/javascript',
            'settings'       => 'csfc_header_script',
    ) );
    $wp_customize->add_control( $control );

  // Footer Script section

	$wp_customize->add_section( 'csfc_footer_script_section' , array(
	'title'      => __('Footer Script','custom-script-for-customizer'), 
	'priority'   => 20    
	) );  

	$wp_customize->add_setting( 'csfc_footer_script' );
    $control = new WP_Customize_Code_Editor_Control( $wp_customize, 'csfc_footer_script', array(
            'label'          => __( 'Add your footer script without script tag', 'custom-script-for-customizer' ),
            'section' => 'csfc_footer_script_section',
            'code_type' => 'text/javascript',
            'settings'       => 'csfc_footer_script',
    ) );
    $wp_customize->add_control( $control );



  // Create custom panels
  $wp_customize->add_panel( 'csfc_custom_scripts', array(
      'priority' => 999,
      'theme_supports' => '',
      'title' => __( 'Custom Scripts', 'custom-script-for-customizer' ),
      'description' => __( 'Add csutom scripts to header or footer', 'custom-script-for-customizer' ),
  ) );


  // Assign sections to panels
  $wp_customize->get_section('csfc_header_script_section')->panel = 'csfc_custom_scripts';      
  $wp_customize->get_section('csfc_footer_script_section')->panel = 'csfc_custom_scripts';


}
add_action( 'customize_register', 'csfc_customize_register' );

require_once plugin_dir_path( dirname( __FILE__ ) ) . '/admin/partials/custom-script-for-customizer-admin-display.php';
