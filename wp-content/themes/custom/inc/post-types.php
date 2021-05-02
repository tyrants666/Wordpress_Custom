<?php
// Product Custom Post Type
add_action('init', 'product_cpt');
function product_cpt()
{
	$labels = array(
		'name'                  => _x('Products', 'Post type general name', 'custom_site'),
		'singular_name'         => _x('Product', 'Post type singular name', 'custom_site'),
		'menu_name'             => _x('Products', 'Admin Menu text', 'custom_site'),
		'name_admin_bar'        => _x('Product Page', 'Add New on Toolbar', 'custom_site'),
		'add_new'               => __('Add New', 'custom_site'),
		'add_new_item'          => __('Add New Product Page', 'custom_site'),
		'new_item'              => __('New Product Page', 'custom_site'),
		'edit_item'             => __('Edit Product Page', 'custom_site'),
		'view_item'             => __('View Product Page', 'custom_site'),
		'all_items'             => __('All Products', 'custom_site'),
		'search_items'          => __('Search Product', 'custom_site'),
		'parent_item_colon'     => __('Parent Product:', 'custom_site'),
		'not_found'             => __('No Product found.', 'custom_site'),
		'not_found_in_trash'    => __('No Product found in Trash.', 'custom_site'),
		'featured_image'        => _x('Featured Image', 'custom_site'),
		'set_featured_image'    => _x('Add Featured image', 'custom_site'),
		'remove_featured_image' => _x('Remove Featured image', 'custom_site'),
		'use_featured_image'    => _x('Use as Featured image', 'custom_site'),
		'archives'              => _x('Product Page archives', 'custom_site'),
		'insert_into_item'      => _x('Insert into Product Page', 'custom_site'),
		'uploaded_to_this_item' => _x('Uploaded to this Product Page', 'custom_site'),
		'filter_items_list'     => _x('Filter Product list', 'custom_site'),
		'items_list_navigation' => _x('Product list navigation', 'custom_site'),
		'items_list'            => _x('Product list', 'custom_site'),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => false, //false as a post
		'has_archive' => false, // True if you want archive-products page // False for using Page Templates
		"description" => "",
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
        'capability_type' => 'post',
		'menu_icon' => 'dashicons-products', //https://developer.wordpress.org/resource/dashicons/#paperclip
        'menu_position' =>  24,
		'supports' => array('post','title','editor', 'excerpt', 'thumbnail','page-attributes'),
		// 'supports' => array('post','title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields','page-attributes'),
        // 'exclude_from_search' => false,
        // 'show_in_rest'       => true,             //Add Gutenberg text editor
        // 'rewrite' => true,               					//rewrite custom slug
		"rewrite" => [ "slug" => "products", "with_front" => true ],
	);
	register_post_type('products', $args);

	// Add new taxonomy, make it hierarchical (like categories)
	// $labels = array(
	// 	'name'              => _x('Mice Categories', 'taxonomy general name', 'dmcnordic'),
	// 	'singular_name'     => _x('Mice Category', 'taxonomy singular name', 'dmcnordic'),
	// 	'search_items'      => __('Search Mice Categories', 'dmcnordic'),
	// 	'all_items'         => __('All Mice Categories', 'dmcnordic'),
	// 	'parent_item'       => __('Parent Mice Category', 'dmcnordic'),
	// 	'parent_item_colon' => __('Parent Mice Category:', 'dmcnordic'),
	// 	'edit_item'         => __('Edit Mice Category', 'dmcnordic'),
	// 	'update_item'       => __('Update Mice Category', 'dmcnordic'),
	// 	'add_new_item'      => __('Add New Mice Category', 'dmcnordic'),
	// 	'new_item_name'     => __('New Mice Category Name', 'dmcnordic'),
	// 	'menu_name'         => __('Mice Categories', 'dmcnordic'),
	// );
	// $args = array(
	// 	'labels' => $labels,
	// 	'show_ui'           => true,
	// 	'show_admin_column' => true,
	// 	'query_var'         => true,
	// 	'public'            => true,
	// 	'hierarchical'      => true,
	// 	'has_archive'       => false,
	// );
	// register_taxonomy('mice-categories', array('mice'), $args);
}
