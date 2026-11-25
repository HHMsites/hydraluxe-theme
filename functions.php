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
