<?php
/**
 * Custom post types for this theme.
 *
 * @package SMNTCS_Nautical_Narratives
 * @since 1.0.0
 */

/**
 * Register custom post types.
 *
 * @since 1.0.0
 */
function smntcs_nautical_narratives_cpt() {

	$labels = array(
		'name'                  => _x( 'Lighthouses', 'Post Type General Name', 'smntcs-nautical-narratives' ),
		'singular_name'         => _x( 'Lighthouse', 'Post Type Singular Name', 'smntcs-nautical-narratives' ),
		'menu_name'             => __( 'Lighthouses', 'smntcs-nautical-narratives' ),
		'name_admin_bar'        => __( 'Lighthouse', 'smntcs-nautical-narratives' ),
		'archives'              => __( 'Lighthouse Archives', 'smntcs-nautical-narratives' ),
		'attributes'            => __( 'Lighthouse Attributes', 'smntcs-nautical-narratives' ),
		'parent_item_colon'     => __( 'Parent Lighthouse:', 'smntcs-nautical-narratives' ),
		'all_items'             => __( 'All Items', 'smntcs-nautical-narratives' ),
		'add_new_item'          => __( 'Add New Lighthouse', 'smntcs-nautical-narratives' ),
		'add_new'               => __( 'Add New', 'smntcs-nautical-narratives' ),
		'new_item'              => __( 'New Lighthouse', 'smntcs-nautical-narratives' ),
		'edit_item'             => __( 'Edit Lighthouse', 'smntcs-nautical-narratives' ),
		'update_item'           => __( 'Update Lighthouse', 'smntcs-nautical-narratives' ),
		'view_item'             => __( 'View Lighthouse', 'smntcs-nautical-narratives' ),
		'view_items'            => __( 'View Items', 'smntcs-nautical-narratives' ),
		'search_items'          => __( 'Search Lighthouse', 'smntcs-nautical-narratives' ),
		'not_found'             => __( 'Not found', 'smntcs-nautical-narratives' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'smntcs-nautical-narratives' ),
		'featured_image'        => __( 'Featured Image', 'smntcs-nautical-narratives' ),
		'set_featured_image'    => __( 'Set featured image', 'smntcs-nautical-narratives' ),
		'remove_featured_image' => __( 'Remove featured image', 'smntcs-nautical-narratives' ),
		'use_featured_image'    => __( 'Use as featured image', 'smntcs-nautical-narratives' ),
		'insert_into_item'      => __( 'Insert into Lighthouse', 'smntcs-nautical-narratives' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Lighthouse', 'smntcs-nautical-narratives' ),
		'items_list'            => __( 'Items list', 'smntcs-nautical-narratives' ),
		'items_list_navigation' => __( 'Items list navigation', 'smntcs-nautical-narratives' ),
		'filter_items_list'     => __( 'Filter items list', 'smntcs-nautical-narratives' ),
	);
	$args   = array(
		'label'               => __( 'Lighthouse', 'smntcs-nautical-narratives' ),
		'description'         => __( 'Post Type Description', 'smntcs-nautical-narratives' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor' ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => get_template_directory_uri() . '/assets/icons/lighthouse.svg',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'lighthouse', $args );

}
add_action( 'init', 'smntcs_nautical_narratives_cpt', 0 );
