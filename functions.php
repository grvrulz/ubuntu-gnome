<?php
/**
 * This is child themes functions.php file. All modifications should be made in this file.
 *
 * All style changes should be in child themes style.css file.
 *
 * @package    Polymer
 * @version    0.1
 * @author     Gaurav Pareek <grv@magikpress.com>
 * @copyright  Copyright (c) 2014, Gaurav Pareek
 * @author     Ruairi Phelan <rory@cyberdesigncraft.com>
 * @copyright  Copyright (c) 2013, Ruairi Phelan
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2013, Justin Tadlock

 * @link       http://magikpress.com/themes/polymer
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Adds the child theme setup function to the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'polymer_theme_setup', 11 );

/**
 * Setup function.  All child themes should run their setup within this function.  The idea is to add/remove 
 * filters and actions after the parent theme has been set up.  This function provides you that opportunity.
 *
 * @since  1.0
 * @access public
 * @return void
 */
function polymer_theme_setup() {

	/* Change default background color. */
	add_theme_support(
	'custom-header',
	array(
		'default-image'      => '',
		'default-text-color' => '272727',
	));

	add_theme_support(
	'custom-background',
	array(
		'default-color' => 'eeeeee',
		'default-image' => '',
	));


	/**
	 * Un-Register default Parent Theme headers for the child theme.
	 * @since 0.1.1
	 */
unregister_default_headers(
	array( 'horizon', 'orange-burn', 'planets-blue', 'planet-burst', 'space-splatters' )
);

	/*
	 * Registers default headers for the child theme.
	 * @since 0.1.0
	 * @link http://codex.wordpress.org/Function_Reference/register_default_headers
	 */
	register_default_headers(
		array(
			'material1' => array(
				'url'           => '%2$s/images/headers/material1.jpg',
				'thumbnail_url' => '%2$s/images/headers/material1-thumb.jpg',
				/* Translators: Header image description. */
				'description'   => __( 'Material1', 'polymer' )
			),
			'material2' => array(
				'url'           => '%2$s/images/headers/material2.jpg',
				'thumbnail_url' => '%2$s/images/headers/material2-thumb.jpg',
				/* Translators: Header image description. */
				'description'   => __( 'Material2', 'polymer' )
			),
			'material3' => array(
				'url'           => '%2$s/images/headers/material3.jpg',
				'thumbnail_url' => '%2$s/images/headers/material3-thumb.jpg',
				/* Translators: Header image description. */
				'description'   => __( 'Material3', 'polymer' )
			)
		)
	);

	/* Change primary color. */
	add_filter( 'theme_mod_color_primary', 'polymer_primary_color' );
	
}

/**
 * Change primary color
 *
 * @since 1.0
 * @access public
 * @param  string  $hex
 * @return string
 */
function polymer_primary_color( $color ) {

	return $color ? $color : '349F8C';
	
}