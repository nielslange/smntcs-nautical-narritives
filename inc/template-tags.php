<?php
/**
 * Custom template tags for this theme.
 *
 * @package SMNTCS_Nautical_Narratives
 * @since 1.0.0
 */

/**
 * Displays the site title.
 *
 * @since 1.0.0
 */
function smntcs_nautical_narratives_site_title() {

	$data = get_bloginfo();

	if ( empty( $data ) ) {
		return;
	}

	if ( is_single() ) {
		$wrapper = '<div id="site-title"><h2><a href="/">%s</a></h2></div><!-- #site-title -->';
	} else {
		$wrapper = '<div id="site-title"><h1><a href="/">%s</a></h1></div><!-- #site-title -->';
	}

	$html = sprintf( $wrapper, esc_html( $data ) );
	$html = apply_filters( 'smntcs_nautical_narratives_site_title', $html, $data, $wrapper );

	echo $html;

}

/**
 * Display the post title.
 *
 * @since 1.0.0
 */
function smntcs_nautical_narratives_post_title() {

	$data = get_the_title();

	if ( empty( $data ) ) {
		return;
	}

	if ( is_single() || is_page() ) {
		$wrapper = '<h1 class="post-title">%s</h1><!-- .site-title -->';
		$html    = sprintf( $wrapper, esc_html( $data ) );
	} else {
		$wrapper = '<h2 class="post-title"><a href="%1$s" title="%2$s">%2$s</a></h2><!-- .site-title -->';
		$html    = sprintf( $wrapper, get_permalink( get_the_ID() ), esc_html( $data ) );
	}

	$html = apply_filters( 'smntcs_nautical_narratives_post_title', $html, $data, $wrapper );

	echo $html;

}

/**
 * Display the menu.
 *
 * @since 1.0.0
 */
function smntcs_nautical_narratives_menu( $slug ) {

	if ( has_nav_menu( $slug ) ) {
		wp_nav_menu(
			array(
				'theme_location' => $slug,
				'container'      => '',
				'depth'          => 1,
			)
		);
	}

}
