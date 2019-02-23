<?php

//======================================================================
// HEADERS POST TYPE
//======================================================================

function create_headers() {

	$labels = array(
		'name'                  => _x( 'Create Headers', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Header', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Headers', 'text_domain' ),
		'name_admin_bar'        => __( 'Headers', 'text_domain' ),
		'archives'              => __( 'Header Archives', 'text_domain' ),
		'attributes'            => __( 'Header Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Header:', 'text_domain' ),
		'all_items'             => __( 'All Headers', 'text_domain' ),
		'add_new_item'          => __( 'Add New Header', 'text_domain' ),
		'add_new'               => __( 'Add Header', 'text_domain' ),
		'new_item'              => __( 'New Header', 'text_domain' ),
		'edit_item'             => __( 'Edit Header', 'text_domain' ),
		'update_item'           => __( 'Update Header', 'text_domain' ),
		'view_item'             => __( 'View Header', 'text_domain' ),
		'view_items'            => __( 'View Headers', 'text_domain' ),
		'search_items'          => __( 'Search Header', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Headers', 'text_domain' ),
		'description'           => __( 'Create Base Headers', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => false,
		'menu_position'         => 5,
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'headers', $args );

}
add_action( 'init', 'create_headers', 0 );

//======================================================================
// HEROES POST TYPE
//======================================================================

function create_heros() {

	$labels = array(
		'name'                  => _x( 'Create Heroes', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Hero', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Heroes', 'text_domain' ),
		'name_admin_bar'        => __( 'Heroes', 'text_domain' ),
		'archives'              => __( 'Hero Archives', 'text_domain' ),
		'attributes'            => __( 'Hero Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Hero:', 'text_domain' ),
		'all_items'             => __( 'All Heroes', 'text_domain' ),
		'add_new_item'          => __( 'Add New Hero', 'text_domain' ),
		'add_new'               => __( 'Add Hero', 'text_domain' ),
		'new_item'              => __( 'New Hero', 'text_domain' ),
		'edit_item'             => __( 'Edit Hero', 'text_domain' ),
		'update_item'           => __( 'Update Hero', 'text_domain' ),
		'view_item'             => __( 'View Hero', 'text_domain' ),
		'view_items'            => __( 'View Heroes', 'text_domain' ),
		'search_items'          => __( 'Search Hero', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Heroes', 'text_domain' ),
		'description'           => __( 'Create Base Heroes', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => false,
		'menu_position'         => 5,
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'heroes', $args );

}
add_action( 'init', 'create_heros', 0 );



//======================================================================
// REALTORS POST TYPES
//======================================================================

/* Google Maps API Key */
function afc_maps_key() {
	acf_update_setting('google_api_key', 'AIzaSyBUeHHiJuirgrgubX8ghvg4lhlVIayloDc');
}
add_action('acf/init', 'afc_maps_key');

/* Agent Post Type */
function agents() {

	$labels = array(
		'name'                  => _x( 'Agents', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Agent', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Agents', 'text_domain' ),
		'name_admin_bar'        => __( 'Agent', 'text_domain' ),
		'archives'              => __( 'Agent Archives', 'text_domain' ),
		'attributes'            => __( 'Agent Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Agent:', 'text_domain' ),
		'all_items'             => __( 'All Agents', 'text_domain' ),
		'add_new_item'          => __( 'Add New Agent', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Agent', 'text_domain' ),
		'edit_item'             => __( 'Edit Agent', 'text_domain' ),
		'update_item'           => __( 'Update Agent', 'text_domain' ),
		'view_item'             => __( 'View Agent', 'text_domain' ),
		'view_items'            => __( 'View Agents', 'text_domain' ),
		'search_items'          => __( 'Search Agent', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Agent Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set agent image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove agent image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as agent image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Agent', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Agent', 'text_domain' ),
		'description'           => __( 'Realty Agents', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'agent', $args );

}
add_action( 'init', 'agents', 0 );

function change_agent_title( $title ){
	$screen = get_current_screen();
	if( 'agent' == $screen->post_type ) {
    $title = 'Enter agent name';
	}
	return $title;
}
add_filter( 'enter_title_here', 'change_agent_title' );

/* Featured Listing Post Type */
function listing() {

	$labels = array(
		'name'                  => _x( 'Listings', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Listing', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Listings', 'text_domain' ),
		'name_admin_bar'        => __( 'Listing', 'text_domain' ),
		'archives'              => __( 'Listing Archives', 'text_domain' ),
		'attributes'            => __( 'Listing Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Listing:', 'text_domain' ),
		'all_items'             => __( 'All Listing', 'text_domain' ),
		'add_new_item'          => __( 'Add New Listing', 'text_domain' ),
		'add_new'               => __( 'Add Listing', 'text_domain' ),
		'new_item'              => __( 'New Listing', 'text_domain' ),
		'edit_item'             => __( 'Edit Listing', 'text_domain' ),
		'update_item'           => __( 'Update Listing', 'text_domain' ),
		'view_item'             => __( 'View Listing', 'text_domain' ),
		'view_items'            => __( 'View Listings', 'text_domain' ),
		'search_items'          => __( 'Search Listing', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Listing Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set listing image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove listing image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as listing image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into listing', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this listing', 'text_domain' ),
		'items_list'            => __( 'Listings list', 'text_domain' ),
		'items_list_navigation' => __( 'Listings list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter listings list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Listing', 'text_domain' ),
		'description'           => __( 'Featured Listing', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-home',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'listing', $args );

}
add_action( 'init', 'listing', 0 );

function change_listing_title( $title ){
	$screen = get_current_screen();
	if( 'listing' == $screen->post_type ) {
    $title = 'Enter listing name';
	}
	return $title;
}
add_filter( 'enter_title_here', 'change_listing_title' );
