<?php
/*
Plugin Name: phpinfo-print
Plugin URI: http://programming-review.com/
Description: Displays phpinfo() in a traditional style
Author: Dejan Batanjac
Version: 1.2.0
Author URI: http://programming-review.com/
TODO: add multilanguage support
*/

define( 'PHPINFO_VERSION', '1.1' );

// Make sure we don't expose any info if called directly
if ( ! function_exists( 'add_action' ) ) {
	echo "Hi there!  I'm just a plugin, not much I can do when called directly.";
	exit;
}

// exploit the idea that we use class organization
require_once( 'lib/phpinfo-class.php' );

Db_PHP_Info::install_actions();
Db_PHP_Info::install_plugin();
