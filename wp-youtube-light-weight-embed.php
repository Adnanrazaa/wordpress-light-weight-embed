<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.fiverr.com/wpguru92
 * @since             1.0.0
 * @package           Wp_Youtube_Light_Weight_Embed
 *
 * @wordpress-plugin
 * Plugin Name:       Wordpress Youtube Light Weight Embed
 * Plugin URI:        not-yet
 * Description:       Wordpress light weight youtube embed plugin
 * Version:           1.0.0
 * Author:            Adnan Soomro AKA( wpguru92 )
 * Author URI:        https://www.fiverr.com/wpguru92
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-youtube-light-weight-embed
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-youtube-light-weight-embed-activator.php
 */
function activate_wp_youtube_light_weight_embed() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-youtube-light-weight-embed-activator.php';
	Wp_Youtube_Light_Weight_Embed_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-youtube-light-weight-embed-deactivator.php
 */
function deactivate_wp_youtube_light_weight_embed() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-youtube-light-weight-embed-deactivator.php';
	Wp_Youtube_Light_Weight_Embed_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_youtube_light_weight_embed' );
register_deactivation_hook( __FILE__, 'deactivate_wp_youtube_light_weight_embed' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-youtube-light-weight-embed.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_youtube_light_weight_embed() {

	$plugin = new Wp_Youtube_Light_Weight_Embed();
	$plugin->run();

}
run_wp_youtube_light_weight_embed();
