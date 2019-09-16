<?php
/**
 *
 * Load our custom marketing integrations
 *
 */

 // Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) exit;

$plugins = array(
	'mailoptin' => 'mailoptin.php',
);

foreach ( $plugins as $plugin_id => $plugin_file ) :

    $plugin_file = 'classes/' . $plugin_file;
    $full_path = WPMT_PLUGIN_DIR . 'core/includes/integrations/' . $plugin_file;

	if ( TRUE === apply_filters( 'wpmt/integrations/' . $plugin_id, TRUE ) ){
        if( file_exists( $full_path ) ){
            include( $plugin_file );
        }
    }

endforeach;
