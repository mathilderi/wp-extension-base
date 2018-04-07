<?php
/*
Plugin Name: Options pour WooCommerce
Plugin URI: https://wwww.gregoirenoyelle.com
Description: Changer des réglage de WooCommerce depuis une extension.
Version: 2.0
Author: Grégoire Noyelle
Author URI: http://wwww.gregoirenoyelle.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: wp-plugin-name
*/


//* If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die;
}


/**************************
* LIENS FICHIER PHP
**************************/

//* Appel autres fichiers PHP
// Fichier de functions pour WordPress
include_once(plugin_dir_path( __FILE__ ) . '/lib/func.wordpress.php');
// Fichier de functions pour Genesis
// include_once(plugin_dir_path( __FILE__ ) . '/lib/func.genesis.php');
// Fichier de functions pour intégrer des CSS et JS
include_once(plugin_dir_path( __FILE__ ) . '/lib/func.enqueue.php');
