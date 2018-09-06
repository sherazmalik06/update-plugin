<?php
/*
 Plugin Name: Plugin Auto Update
 Plugin URI: http://bitbytes.io
 Description: Plugin with auto-updates from external URL/Repository using Github
 Author: BitBytes
 Version: 1.3
 */

// Load the auto-update class
add_action( 'init', 'activate' );
function activate()
{
	require_once ( 'wp_autoupdate.php' );
	$plugin_current_version = '1.3';
	$plugin_remote_path = 'https://raw.githubusercontent.com/sherazmalik06/update-plugin/master/plugin.json';
	$plugin_slug = plugin_basename( __FILE__ );
	$license_user = 'user';
	$license_key = 'abcd';
	new WP_AutoUpdate ( $plugin_current_version, $plugin_remote_path, $plugin_slug, $license_user, $license_key );
}