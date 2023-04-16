<?php
/**
 * Project Taxonomies
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 */

/**
 * Project
 */
function raythompsonwebdev_plugin_register_taxonomies() {

	$labels = array(
		'name'                       => _x( 'Project Categories', 'raythompsonwebdev-com' ),
		'singular_name'              => _x( 'Project Category', 'raythompsonwebdev-com' ),
		'search_items'               => __( 'Search Project Categories', 'raythompsonwebdev-com' ),
		'all_items'                  => __( 'All Project Categories', 'raythompsonwebdev-com' ),
		'parent_item'                => __( 'Parent Project Category', 'raythompsonwebdev-com' ),
		'parent_item_colon'          => __( 'Parent Project Category', 'raythompsonwebdev-com' ),
		'edit_item'                  => __( 'Edit Project Category', 'raythompsonwebdev-com' ),
		'update_item'                => __( 'Update Project Category', 'raythompsonwebdev-com' ),
		'add_new_item'               => __( 'Add New Project Category', 'raythompsonwebdev-com' ),
		'new_item_name'              => __( 'New Project Category', 'raythompsonwebdev-com' ),
		'separate_items_with_commas' => __('Separate topics with commas', 'raythompsonwebdev-com'),
		'add_or_remove_items'        => __('Add or remove topics', 'raythompsonwebdev-com'),
		'choose_from_most_used'      => __('Choose from common topics', 'raythompsonwebdev-com'),
		'menu_name'                  => __( 'Project Categories', 'raythompsonwebdev-com' ),
	);
	$args   = array(
		'labels'                => $labels,
		'hierarchical'          => true,
		'public'                => true,
		'show_admin_column'     => true,
		'show_in_quick_edit'    => true,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array(
			'slug'         => 'project-category', // This controls the base slug that will display before each term.
			'hierarchical' => true,
			'has_front'    => true, // Don't display the category base before.
		),
	);

	$post_types = array( 'project' );

	register_taxonomy( 'project-category', 'project', $args );
}
