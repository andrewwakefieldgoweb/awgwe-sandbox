<?php
/**
 * This file represents the code that is used to register the required plugins.
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_stylesheet_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'altitude_lite_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 */
function altitude_lite_register_required_plugins() {
	/*
	 * Array of plugin arrays.
	 */
	$plugins = array(
		// Elementor plugin.
		array(
			'name'     => 'Elementor',
			'slug'     => 'elementor',
			'required' => true,
		),

		// Slidedeck.
		array(
			'name'     => 'Slidedeck',
			'slug'     => 'slidedeck',
			'required' => false,
		),

		// WP Legal Pages.
		array(
			'name'     => 'WP Legal Pages',
			'slug'     => 'wplegalpages',
			'required' => false,
		),

		// Contact Form 7
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
	);

	/*
	 * Array of configuration settings.
	 */
	$config = array(
		'id'           => 'altitude-lite',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
