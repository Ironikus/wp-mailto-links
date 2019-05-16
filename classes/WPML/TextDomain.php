<?php
/**
 * Class WPML_TextDomain
 *
 * @package  WPML
 * @category WordPress Plugins
 * @version  2.1.7
 * @author   WebFactory Ltd
 * @link     https://www.webfactoryltd.com/
 * @link     https://wordpress.org/plugins/wp-mailto-links/
 * @license  Dual licensed under the MIT and GPLv2+ licenses
 */
final class WPML_TextDomain extends WPRun_BaseAbstract_0x5x0
{

    /**
     * Action for "plugins_loaded"
     */
    protected function actionPluginsLoaded()
    {
        load_plugin_textdomain('wp-mailto-links', false, WP_MAILTO_LINKS_DIR . '/languages/');
    }

}

/*?>*/
