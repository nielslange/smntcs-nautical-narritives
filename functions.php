<?php
/**
 * SMNTCS Nautical Narratives functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SMNTCS_Nautical_Narratives
 * @since 1.0.0
 */

/**
 * Include required files.
 */
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/custom-post-type.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since 1.0.0
 */
function smntcs_nautical_narratives_theme_support() {
	/**
	 * Set content-width.
	 *
	 * @link https://codex.wordpress.org/Content_Width
	 */
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 600;
	}
}
add_action( 'after_setup_theme', 'smntcs_nautical_narratives_theme_support' );

/**
 * Register navigation menu.
 *
 * @since 1.0.0
 */
function smntcs_nautical_narratives_menus() {

	$locations = array(
		'primary' => __( 'Primary Menu', 'smntcs-nautical-narratives' ),
		'footer'  => __( 'Footer Menu', 'smntcs-nautical-narratives' ),
	);

	register_nav_menus( $locations );
}
add_action( 'init', 'smntcs_nautical_narratives_menus' );

/**
 * Register and enqueue styles.
 *
 * @since 1.0.0
 */
function smntcs_nautical_narratives_register_styles() {
	wp_enqueue_style( 'smntcs-nautical-narratives-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'smntcs_nautical_narratives_register_styles' );

