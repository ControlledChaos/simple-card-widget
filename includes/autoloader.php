<?php
/**
 * Register plugin classes
 *
 * The autoloader registers plugin classes for later use.
 *
 * @package    Simple_Card_Widget
 * @subpackage Includes
 * @category   Classes
 * @since      1.0.0
 */

namespace Simple_Card_Widget;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Class files
 *
 * Defines the class directories and file prefixes.
 *
 * @since 1.0.0
 * @var   array Defines an array of class file paths.
 */
define( 'SCW_CLASS', [
	'core'     => SCW_PATH . 'includes/classes/core/class-',
	'settings' => SCW_PATH . 'includes/classes/settings/class-',
	'tools'    => SCW_PATH . 'includes/classes/tools/class-',
	'media'    => SCW_PATH . 'includes/classes/media/class-',
	'users'    => SCW_PATH . 'includes/classes/users/class-',
	'vendor'   => SCW_PATH . 'includes/classes/vendor/class-',
	'admin'    => SCW_PATH . 'includes/classes/backend/class-',
	'front'    => SCW_PATH . 'includes/classes/frontend/class-',
	'general'  => SCW_PATH . 'includes/classes/class-',
] );

/**
 * Array of classes to register
 *
 * When you add new classes to your version of this plugin you may
 * add them to the following array rather than requiring the file
 * elsewhere. Be sure to include the precise namespace.
 *
 * @since 1.0.0
 * @var   array Defines an array of class files to register.
 */
define( 'SCW_CLASSES', [

	// Base class.
	'Simple_Card_Widget\Classes\Base' => SCW_CLASS['general'] . 'base.php',

	// Core classes.
	// 'Simple_Card_Widget\Classes\Class' => SCW_CLASS['core'] . 'file.php',

	// Settings classes.
	// 'Simple_Card_Widget\Classes\Class' => SCW_CLASS['settings'] . 'file.php',

	// Tools classes.
	// 'Simple_Card_Widget\Classes\Class' => SCW_CLASS['tools'] . 'file.php',

	// Media classes.
	// 'Simple_Card_Widget\Classes\Class' => SCW_CLASS['media'] . 'file.php',

	// Users classes.
	// 'Simple_Card_Widget\Classes\Class' => SCW_CLASS['users'] . 'file.php',

	// Vendor classes.
	// 'Simple_Card_Widget\Classes\Class' => SCW_CLASS['vendor'] . 'file.php',

	// Backend/admin classes,
	// 'Simple_Card_Widget\Classes\Class' => SCW_CLASS['admin'] . 'file.php',

	// Frontend classes.
	// 'Simple_Card_Widget\Classes\Class' => SCW_CLASS['front'] . 'file.php',

	// General/miscellaneos classes.
	// 'Simple_Card_Widget\Classes\Class' => SCW_CLASS['general'] . 'file.php',

] );

/**
 * Autoload class files
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
spl_autoload_register(
	function ( string $class ) {
		if ( isset( SCW_CLASSES[ $class ] ) ) {
			require SCW_CLASSES[ $class ];
		}
	}
);
