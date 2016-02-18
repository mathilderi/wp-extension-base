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

//* Générateur en ligne pour les script et les css
// https://generatewp.com/register_script/

/**************************
* ENQUEUE POUR LE FRONT
**************************/

//* enqueue style front
add_action('wp_enqueue_scripts','gn_styles_front', 99);
function gn_styles_front() {
	wp_register_style('styles-projet-front', plugins_url( '/css/styles-projet-front.css', __FILE__), array(), '1.0', 'all' );
	wp_enqueue_style('styles-projet-front');
}

//* enqueue script front
add_action('wp_enqueue_scripts','gn_scripts_front');
function gn_scripts_front() {
	wp_register_script('scripts-projet-front',plugins_url( '/js/scripts-projet-front.js', __FILE__), array('jquery'),'1.0',true);
	wp_enqueue_script('scripts-projet-front');
}

/**************************
* ENQUEUE POUR LE BACK
**************************/

//* enqueue style back
add_action('admin_enqueue_scripts','gn_styles_back', 99);
function gn_styles_back() {
	wp_register_style('styles-projet-back', plugins_url( '/css/styles-projet-back.css', __FILE__), array(), '1.0', 'all' );
	wp_enqueue_style('styles-projet-back');
}

//* enqueue script back
add_action('admin_enqueue_scripts','gn_scripts_back');
function gn_scripts_back() {
	wp_register_script('scripts-projet-back',plugins_url( '/js/scripts-projet-back.js', __FILE__), array('jquery'),'1.0',true);
	wp_enqueue_script('scripts-projet-back');
}


/**************************
* LIENS FICHIER PHP
**************************/

//* Appel autres fichiers PHP
// Fichier de functions pour WordPress
require_once(plugin_dir_path( __FILE__ ) . '/lib/func.wordpress.php');
// Fichier de functions pour Genesis
require_once(plugin_dir_path( __FILE__ ) . '/lib/func.genesis.php');
