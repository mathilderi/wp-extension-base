<?php
/*
Plugin Name: Personalisation de woocommerce Mathilde
Plugin URI: https://wwww.mathilderivoire.fr
Description: Réglages pour mon client X
Version: 1.0
Author: Mathilde Rivoire
Author URI: https://wwww.mathilderivoire.fr
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
// Fichier de functions pour woocommerce
include_once(plugin_dir_path( __FILE__ ) . '/lib/func.woocommerce.php');
