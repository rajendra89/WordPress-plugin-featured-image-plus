<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://rajendrarijal.com.np/
 * @since             1.0.0
 * @package           Multiplefeaturedimage
 *
 * @wordpress-plugin
 * Plugin Name:       featured-image-plus
 * Plugin URI:        http://wordpress.org/plugins
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            rajendra89
 * Author URI:        http://rajendrarijal.com.np/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       multiplefeaturedimage
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-multiplefeaturedimage-activator.php
 */
function activate_multiplefeaturedimage() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-multiplefeaturedimage-activator.php';
	Multiplefeaturedimage_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-multiplefeaturedimage-deactivator.php
 */
function deactivate_multiplefeaturedimage() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-multiplefeaturedimage-deactivator.php';
	Multiplefeaturedimage_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_multiplefeaturedimage' );
register_deactivation_hook( __FILE__, 'deactivate_multiplefeaturedimage' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-multiplefeaturedimage.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_multiplefeaturedimage() {

	$plugin = new Multiplefeaturedimage();
	$plugin->run();

}
run_multiplefeaturedimage();
