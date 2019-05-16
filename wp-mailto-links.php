<?php
/**
 * Plugin Name:    WP Mailto Links - Manage & Protect Email Links
 * Version:        2.2.1
 * Plugin URI:     https://wordpress.org/plugins/wp-mailto-links/
 * Description:    Manage mailto links on your site and protect email addresses from spambots, set mail icon and more.
 * Author:         Ironikus
 * Author URI:     https://ironikus.com/
 * License:        Dual licensed under the MIT and GPLv2+ licenses
 * Text Domain:    wp-mailto-links
 */

// set constant
if (!defined('WP_MAILTO_LINKS_FILE')) {
  define('WP_MAILTO_LINKS_FILE', __FILE__);
}
if (!defined('WP_MAILTO_LINKS_DIR')) {
  define('WP_MAILTO_LINKS_DIR', __DIR__);
}

// set class auto-loader
if (!class_exists('WPRun_AutoLoader_0x5x0')) {
  require_once WP_MAILTO_LINKS_DIR . '/classes/WPRun/AutoLoader.php';
}
WPRun_AutoLoader_0x5x0::register();
WPRun_AutoLoader_0x5x0::addPath(WP_MAILTO_LINKS_DIR . '/classes');


/**
     * Create plugin components
     */

// create text domain
WPML_TextDomain::create();

// create option
$option = WPML_Option_Settings::create();

// create register hooks
WPML_RegisterHook_Activate::create(WP_MAILTO_LINKS_FILE, $option);
WPML_RegisterHook_Uninstall::create(WP_MAILTO_LINKS_FILE, $option);

if (is_admin()) {

  // create meta boxes
  $metaBoxes = WPML_AdminPage_Settings_MetaBoxes::create($option);

  // create help tabs
  $helpTabs = WPML_AdminPage_Settings_HelpTabs::create();

  // create admin settings page
  WPML_AdminPage_Settings::create($option, $metaBoxes, $helpTabs);
} else {

  // create custom filters final_output and widget_output
  WPRun_Filter_FinalOutput_0x5x0::create();
  WPRun_Filter_WidgetOutput_0x5x0::create();

  // create email encoder
  $emailEncoder = WPML_Front_Email::create($option);

  // create front site
  WPML_Front_Site::create($option, $emailEncoder);

  // create shortcode
  WPML_Shortcode_Mailto::create($option, $emailEncoder);

  // create template tags
  WPML_TemplateTag_Filter::create($option, $emailEncoder);
  WPML_TemplateTag_Mailto::create($emailEncoder);
}
