<?php
/**
 * Simple Card Widget
 *
 * A basic starter plugin for ClassicPress, WordPress, and the antibrand system.
 *
 * @package     Simple_Card_Widget
 * @version     1.0.0
 * @link        https://github.com/ControlledChaos/simple-card-widget
 *
 * Plugin Name:  Simple Card Widget
 * Plugin URI:   https://github.com/ControlledChaos/simple-card-widget
 * Description:  A basic starter plugin for ClassicPress, WordPress, and the antibrand system.
 * Version:      1.0.0
 * Author:       Controlled Chaos Design
 * Author URI:   http://ccdzine.com/
 * Text Domain:  simple-card-widget
 * Domain Path:  /languages
 * Requires PHP: 5.3
 * Requires at least: 3.8
 * Tested up to: 5.7.1
 */

namespace Simple_Card_Widget;

// Alias namespaces.
use Simple_Card_Widget\Classes\Activate as Activate;

 /**
 * License & Warranty
 *
 * Simple Card Widget is free software.
 * It can be redistributed and/or modified ad libidum.
 *
 * Simple Card Widget is distributed WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Constant: Plugin base name
 *
 * @since 1.0.0
 * @var   string The base name of this plugin file.
 */
define( 'SCW_BASENAME', plugin_basename( __FILE__ ) );

// Get the PHP version class.
require_once plugin_dir_path( __FILE__ ) . 'includes/classes/class-php-version.php';

// Get plugin configuration file.
require plugin_dir_path( __FILE__ ) . 'config.php';

/**
 * Activation & deactivation
 *
 * The activation & deactivation methods run here before the check
 * for PHP version which otherwise disables the functionality of
 * the plugin.
 */

// Get the plugin activation class.
include_once SCW_PATH . 'activate/classes/class-activate.php';

// Get the plugin deactivation class.
include_once SCW_PATH . 'activate/classes/class-deactivate.php';

/**
 * Register the activation & deactivation hooks
 *
 * The namspace of this file must remain escaped by use of the
 * backslash (`\`) prepending the activation hooks and corresponding
 * functions.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
\register_activation_hook( __FILE__, __NAMESPACE__ . '\activate_plugin' );
\register_deactivation_hook( __FILE__, __NAMESPACE__ . '\deactivate_plugin' );

/**
 * Activation callback
 *
 * The code that runs during plugin activation.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function activate_plugin() {

	// Instantiate the Activate class.
	$activate = new Activate\Activate;

	/**
	 * Run methods from the Activate class.
	 * For instance, the sample options method…
	 */

	// Add & update options.
	$activate->options();
}

/**
 * Deactivation callback
 *
 * The code that runs during plugin deactivation.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function deactivate_plugin() {

	// Instantiate the Activate class.
	$activate = new Activate\Deactivate;

	// Run methods from the Deactivate class.
}

/**
 * Disable plugin for PHP version
 *
 * Stop here if the minimum PHP version is not met.
 * Prevents breaking sites running older PHP versions.
 *
 * @since  1.0.0
 * @return void
 */
if ( ! Classes\scw_php()->version() ) {
	return;
}

// Get the plugin initialization file.
require_once SCW_PATH . 'init.php';
