<?php
/*
Plugin Name: gnoyelle : Options du thème par Grégoire
Plugin URI: http://wwww.gregoirenoyelle.com
Description: Toutes les options suplémentaires pour le thème
Version: 1.0
Author: Grégoire Noyelle
Author URI: http://wwww.gregoirenoyelle.com
License: GPL2
*/


//* If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die;
}

/**************************
* VARIABLES GLOBALES
**************************/
$my_plugin_name = 'WP Plugin Name';



/**************************
* LIENS FICHIER PHP
**************************/

//* Appel autres fichiers PHP
// Fichier de functions pour WordPress
require_once(plugin_dir_path( __FILE__ ) . '/lib/func.wordpress.php');
// Fichier de functions pour Genesis
require_once(plugin_dir_path( __FILE__ ) . '/lib/func.genesis.php');
// Fichier de functions pour intégrer des CSS et JS
require_once(plugin_dir_path( __FILE__ ) . '/lib/func.enqueue.php');
