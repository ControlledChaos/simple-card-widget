<?php
/**
 * Plugin configuration
 *
 * The constants defined here do not override any default behavior
 * or default user interfaces. However, the corresponding behavior
 * can be overridden in the system config file (e.g. `wp-config`,
 * `app-config` ).
 *
 * The reason for using constants in the config file rather than
 * in a settings file is to prevent site administrators wrongly
 * or incorrectly configuring the site built by developers.
 *
 * @package    Simple_Card_Widget
 * @subpackage Configuration
 * @category   Core
 * @since      1.0.0
 */

namespace Simple_Card_Widget;

// Alias namespaces.
use Simple_Card_Widget\Classes as Classes;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Constant: Plugin version
 *
 * @since 1.0.0
 * @var   string The latest plugin version.
 */
define( 'SCW_VERSION', '1.0.0' );

/**
 * Plugin name
 *
 * @since 1.0.0
 * @var   string The name of the plugin.
 */
if ( ! defined( 'SCW_NAME' ) ) {
	define( 'SCW_NAME', __( 'Simple Card Widget', 'simple-card-widget' ) );
}

/**
 * Constant: Plugin folder path
 *
 * @since 1.0.0
 * @var   string The filesystem directory path (with trailing slash)
 *               for the plugin __FILE__ passed in.
 */
define( 'SCW_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Constant: Plugin folder URL
 *
 * @since 1.0.0
 * @var   string The URL directory path (with trailing slash)
 *               for the plugin __FILE__ passed in.
 */
define( 'SCW_URL', plugin_dir_url(__FILE__ ) );

/**
 * PHP version check
 *
 * Stop here if the minimum PHP version is not met.
 * The following array definitions wi break sites
 * running older PHP versions.
 *
 * @since  1.0.0
 * @return void
 */
if ( ! Classes\scw_php()->version() ) {
	return;
}

/**
 * Constant: Plugin configuration.
 *
 * @since 1.0.0
 * @var   array Plugin identification, support, settings.
 */
if ( ! defined( 'SCW_CONFIG' ) ) {

	define( 'SCW_CONFIG', [

		/**
		 * Plugin version
		 *
		 * @since 1.0.0
		 * @var   string The latest plugin version.
		 */
		'version' => SCW_VERSION,

		/**
		 * Required PHP version
		 *
		 * @since 1.0.0
		 * @var   string The minimum required PHP version.
		 */
		'php_version' => Classes\scw_php()->minimum(),

		/**
		 * Plugin name
		 *
		 * Remember to replace in the plugin header.
		 *
		 * @since 1.0.0
		 * @var   string The name of the plugin.
		 */
		'name' => SCW_NAME,

		/**
		 * Developer name
		 *
		 * @since 1.0.0
		 * @var   string The name of the developer/agency.
		 */
		'dev_name' => __( 'Controlled Chaos', 'simple-card-widget' ),

		/**
		 * Developer URL
		 *
		 * @since 1.0.0
		 * @var   string The URL of the developer/agency.
		 */
		'dev_url' => esc_url( 'https://ccdzine.com/' ),

		/**
		 * Developer email
		 *
		 * @since 1.0.0
		 * @var   string The URL of the developer/agency.
		 */
		'dev_email' => sanitize_email( 'greg@ccdzine.com' ),

		/**
		 * Plugin URL
		 *
		 * @since 1.0.0
		 * @var   string The URL of the plugin.
		 */
		'plugin_url' => esc_url( 'https://github.com/ControlledChaos/Simple_Card_Widget' ),

		/**
		 * Universal slug
		 *
		 * This URL slug is used for various plugin admin & settings pages.
		 *
		 * The prefix will change in your search & replace in renaming the plugin.
		 * Change the second part of the define(), here as 'simple-card-widget',
		 * to your preferred page slug.
		 *
		 * @since 1.0.0
		 * @var   string The URL slug of the admin pages.
		 */
		'admin_slug' => 'simple-card-widget',

		/**
		 * Allow Site Health
		 *
		 * @since 1.0.0
		 * @var   boolean Whether to allow the Site Health feature.
		 */
		'site_health' => false,

		/**
		 * Allow links manager
		 *
		 * @since 1.0.0
		 * @var   boolean Whether to allow the links manager feature.
		 */
		'links_manager' => false,

		/**
		 * Allow Customizer
		 *
		 * @since 1.0.0
		 * @var   boolean Whether to allow the Customizer.
		 */
		'customizer' => true,

		/**
		 * User admin color picker
		 *
		 * @since 1.0.0
		 * @var   boolean Whether to allow admin color pickers.
		 */
		'color_picker' => true
	] );
}

/**
 * Developer name
 *
 * @since 1.0.0
 * @var   string The name of the developer/agency.
 */
if ( ! defined( 'SCW_DEV_NAME' ) ) {
	define( 'SCW_DEV_NAME', SCW_CONFIG['dev_name'] );
}

/**
 * Developer URL
 *
 * @since 1.0.0
 * @var   string The URL of the developer/agency.
 */
if ( ! defined( 'SCW_DEV_URL' ) ) {
	define( 'SCW_DEV_URL', SCW_CONFIG['dev_url'] );
}

/**
 * Developer email
 *
 * @since 1.0.0
 * @var   string The URL of the developer/agency.
 */
if ( ! defined( 'SCW_DEV_EMAIL' ) ) {
	define( 'SCW_DEV_EMAIL', SCW_CONFIG['dev_email'] );
}

/**
 * Plugin URL
 *
 * @since 1.0.0
 * @var   string The URL of the plugin.
 */
if ( ! defined( 'SCW_PLUGIN_URL' ) ) {
	define( 'SCW_PLUGIN_URL', SCW_CONFIG['plugin_url'] );
}

/**
 * Allow Site Health
 *
 * @since 1.0.0
 * @var   boolean Whether to allow the Site Health feature.
 */
if ( ! defined( 'SCW_ALLOW_SITE_HEALTH' ) ) {
	define( 'SCW_ALLOW_SITE_HEALTH', SCW_CONFIG['site_health'] );
}

/**
 * Allow links manager
 *
 * @since 1.0.0
 * @var   boolean Whether to allow the links manager feature.
 */
if ( ! defined( 'SCW_ALLOW_LINKS_MANAGER' ) ) {
	define( 'SCW_ALLOW_LINKS_MANAGER', SCW_CONFIG['links_manager'] );
}

/**
 * Allow Customizer
 *
 * @since 1.0.0
 * @var   boolean Whether to allow the Customizer.
 */
if ( ! defined( 'SCW_ALLOW_CUSTOMIZER' ) ) {
	define( 'SCW_ALLOW_CUSTOMIZER', SCW_CONFIG['customizer'] );
}

/**
 * User admin color picker
 *
 * @since 1.0.0
 * @var   boolean Whether to allow admin color pickers.
 */
if ( ! defined( 'SCW_ALLOW_ADMIN_COLOR_PICKER' ) ) {
	define( 'SCW_ALLOW_ADMIN_COLOR_PICKER', SCW_CONFIG['color_picker'] );
}
