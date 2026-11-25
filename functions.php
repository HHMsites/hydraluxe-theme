<?php
/**
 * HydraLuxe theme setup.
 *
 * @package HydraLuxe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Pattern category for the HydraLuxe sections.
 */
function hydraluxe_register_pattern_category() {
	register_block_pattern_category(
		'hydraluxe',
		array( 'label' => __( 'HydraLuxe', 'hydraluxe' ) )
	);
}
add_action( 'init', 'hydraluxe_register_pattern_category' );

/**
 * Keep the editor and front end in sync and remove core patterns we don't use.
 */
function hydraluxe_setup() {
	add_theme_support( 'editor-styles' );
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'hydraluxe_setup' );

/** Match both portraits to the functional medicine introduction height. */
function hydraluxe_enqueue_profile_portraits() {
 wp_enqueue_script( 'hydraluxe-profile-portraits', get_theme_file_uri( 'assets/js/profile-portraits.js' ), array(), '0.1.2', true );
}
add_action( 'wp_enqueue_scripts', 'hydraluxe_enqueue_profile_portraits' );
