<?php
/**
 * Plugin Name: Custom Post Types and Taxonomies part 2
 * Plugin URI: http://yoursite.com
 * Description: raythompsonwebdev-com custom post types - folder
 * Version: 0.1
 * Author: Raymond Thompson
 * Author URI: http://yoursite.com
 * License: GPL2
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 */

/**
 *
 *  Creating a function to create our CPT.
 */
function raythompsonwebdev_com_register_post_type() {

	// Set UI labels for Custom Post Type.
	$labels = array(
		'name'                  => _x( 'Projects', 'Post type general name', RTWDDOMAIN ),
		'singular_name'         => _x( 'Project', 'Post type singular name', RTWDDOMAIN ),
		'menu_name'             => __( 'Projects', 'Admin Menu text', RTWDDOMAIN ),
		'name_admin_bar'        => __( 'Projects', 'Add New on Toolbar', RTWDDOMAIN ),
		'parent_item_colon'     => __( 'Parent Project', RTWDDOMAIN ),
		// 'menu_icon' => get_stylesheet_directory_uri() . '/images/portfolio-icon.png'.
		// 'menu_icon' => 'dashicons-download'.
		'all_items'             => __( 'All Projects', RTWDDOMAIN ),
		'view_item'             => __( 'View Projects', RTWDDOMAIN ),
		'add_new_item'          => __( 'Add New Project', RTWDDOMAIN ),
		'add_new'               => __( 'New Project', RTWDDOMAIN ),
		'edit_item'             => __( 'Edit Project', RTWDDOMAIN ),
		'update_item'           => __( 'Update Project', RTWDDOMAIN ),
		'search_items'          => __( 'Search Project', RTWDDOMAIN ),
		'not_found'             => __( 'Not Found', RTWDDOMAIN ),
		'not_found_in_trash'    => __( 'Not found in Trash', RTWDDOMAIN ),
		'featured_image'        => __( 'Featured Image', 'Project feature image.' ,  RTWDDOMAIN ),
		'set_featured_image'    => __( 'Set featured image', 'Set project featured image.' , RTWDDOMAIN ),
		'remove_featured_image' => __( 'Remove featured image', 'Remove project featured image.' , RTWDDOMAIN ),
		'use_featured_image'    => __( 'Use as featured image', 'Use project featured image.' , RTWDDOMAIN ),
	);

	// Set other options for Custom Post Type.
	$args = array(
		'label'               => __( 'Projects', RTWDDOMAIN ),
		'description'         => __( 'Web Development Projects', RTWDDOMAIN ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor.
		'supports'            => array( 'title', 'editor', 'post-formats', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'          => array( 'project-category', 'post_tag' ),

		// A hierarchical CPT is like Pages and can have Parent and child items. A non-hierarchical CPT is like Posts.
		// 'register_meta_box_cb' => 'raythompsonwebdev_com_register_metaboxes'.
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_graphql'     => true,
		'graphql_single_name' => 'project',
    'graphql_plural_name' => 'projects',
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		'menu_icon'           => 'dashicons-welcome-widgets-menus',
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'query_var'           => true,
		'rewrite'             => array( 'slug' => 'project' ),
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	// Registering your Custom Post Type.
	register_post_type( 'project', $args );

}

