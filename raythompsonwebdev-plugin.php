<?php
/**
 * Plugin Name: Raythompsonwebdev Plugin
 * Plugin URI: https://raythompsonwebdev.co.uk
 * Description: raythompsonwebdev-com custom post types plugin
 * Version: 0.1
 * Author: Raymond Thompson
 * Author URI: https://raythompsonwebdev.co.uk
 * License: GPL2
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 */

 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'RTWD_VERSION', '1.0.0' );
define( 'RTWDPATH', plugin_dir_path( __FILE__ ) );

require_once (RTWDPATH . '/post-types/register.php');
// Custom Post.
add_action( 'init', 'raythompsonwebdev_com_register_post_type', 0 );

require_once (RTWDPATH . '/taxonomies/register.php');
// Taxonomy.
add_action( 'init', 'raythompsonwebdev_com_register_taxonomies', 0 );

/**
 *  Flush rewrite rules to add "project" as a permalink slug.
 */
function raythompsonwebdev_com_rewrite_flush() {
	raythompsonwebdev_com_register_post_type();
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'raythompsonwebdev_com_rewrite_flush' );


function raythompsonwebdev_com_project_enqueue_style() {	
	wp_enqueue_style( 'raythompsonwebdev_com_project_style', plugins_url('/css/style.css',__FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_project_enqueue_style' );

// include plugin dependencies: admin and public
require_once plugin_dir_path( __FILE__ ) . '/includes/responsive-barchart.php';

require_once plugin_dir_path( __FILE__ ) . '/includes/slider-panel.php';

require_once plugin_dir_path( __FILE__ ) . '/includes/block-pattern.php';
