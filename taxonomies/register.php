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
function raythompsonwebdev_com_register_taxonomies() {

	$labels = array(
		'name'                       => _x( 'Project Categories', RTWDDOMAIN ),
		'singular_name'              => _x( 'Project Category', RTWDDOMAIN ),
		'search_items'               => __( 'Search Project Categories', RTWDDOMAIN ),
		'all_items'                  => __( 'All Project Categories', RTWDDOMAIN ),
		'parent_item'                => __( 'Parent Project Category', RTWDDOMAIN ),
		'parent_item_colon'          => __( 'Parent Project Category', RTWDDOMAIN ),
		'edit_item'                  => __( 'Edit Project Category', RTWDDOMAIN ),
		'update_item'                => __( 'Update Project Category', RTWDDOMAIN ),
		'add_new_item'               => __( 'Add New Project Category', RTWDDOMAIN ),
		'new_item_name'              => __( 'New Project Category', RTWDDOMAIN ),
		'separate_items_with_commas' => __('Separate topics with commas', RTWDDOMAIN),
		'add_or_remove_items'        => __('Add or remove topics', RTWDDOMAIN),
		'choose_from_most_used'      => __('Choose from common topics', RTWDDOMAIN),
		'menu_name'                  => __( 'Project Categories', RTWDDOMAIN ),
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
