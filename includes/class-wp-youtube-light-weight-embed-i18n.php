<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.fiverr.com/wpguru92
 * @since      1.0.0
 *
 * @package    Wp_Youtube_Light_Weight_Embed
 * @subpackage Wp_Youtube_Light_Weight_Embed/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Youtube_Light_Weight_Embed
 * @subpackage Wp_Youtube_Light_Weight_Embed/includes
 * @author     Adnan Soomr AKA( wpguru92 ) <adnanraza2010@gmail.com>
 */
class Wp_Youtube_Light_Weight_Embed_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-youtube-light-weight-embed',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
