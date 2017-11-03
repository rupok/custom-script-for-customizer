<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.rupok.me
 * @since      1.0.0
 *
 * @package    Custom_Script_For_Customizer
 * @subpackage Custom_Script_For_Customizer/admin/partials
 */


// write header script

function csfc_add_custom_js_in_wp_head() {

	if ( ! empty( get_theme_mod('csfc_header_script'))) { ?>
	<script type="text/javascript">
		/* <![CDATA[ */
			<?php echo get_theme_mod('csfc_header_script'); ?>
		/* ]]> */
	</script>
	<?php }

}
add_action( 'wp_head', 'csfc_add_custom_js_in_wp_head' );


// write footer script

function csfc_add_custom_js_in_wp_footer() {

	if (! empty( get_theme_mod('csfc_footer_script'))) { ?>
	<script type="text/javascript">
		/* <![CDATA[ */
			<?php echo get_theme_mod('csfc_footer_script'); ?>
		/* ]]> */
	</script>
	<?php }

}
add_action( 'wp_footer', 'csfc_add_custom_js_in_wp_footer' );
