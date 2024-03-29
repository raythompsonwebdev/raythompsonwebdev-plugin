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
 * @subpackage Raythompsonwebdev-plugin
 */

 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'RTWD_VERSION', '1.0.0' );
define( 'RTWDPATH', plugin_dir_path( __FILE__ ) );

// remove version from head.
remove_action( 'wp_head', 'wp_generator' );


require_once (RTWDPATH . '/post-types/register.php');
// Custom Post.
add_action( 'init', 'raythompsonwebdev_plugin_register_post_type', 0 );

require_once (RTWDPATH . '/taxonomies/register.php');
// Taxonomy.
add_action( 'init', 'raythompsonwebdev_plugin_register_taxonomies', 0 );

/**
 *  Flush rewrite rules to add "project" as a permalink slug.
 */
function raythompsonwebdev_plugin_rewrite_flush() {
	raythompsonwebdev_plugin_register_post_type();
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'raythompsonwebdev_plugin_rewrite_flush' );

/**
 * Registers an editor stylesheet for the theme.
 */


// include plugin dependencies: admin and public
require_once plugin_dir_path( __FILE__ ) . 'responsive-barchart.php';

require_once plugin_dir_path( __FILE__ ) . 'slider-panel.php';

require_once plugin_dir_path( __FILE__ ) . 'block-pattern.php';
