<?php

//* Générateur en ligne pour les script et les css
// https://generatewp.com/register_script/

/**************************
* ENQUEUE POUR LE FRONT
**************************/

//* enqueue style front
add_action('wp_enqueue_scripts','gnwooc2_styles_front', 999);
function gnwooc2_styles_front() {
	wp_register_style('gn-woocom-css', plugins_url( 'css/gn-woocom.css', dirname(__FILE__) ), array(), '1.0', 'all' );
	// Enqueue CSS si WooCommerce est actif
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style('gn-woocom-css');
	}
}

//* enqueue script front
// add_action('wp_enqueue_scripts','gnwooc2_scripts_front');
function gnwooc2_scripts_front() {
	wp_register_script('scripts-projet-front',plugins_url( 'js/scripts-projet-front.js', dirname(__FILE__) ), array('jquery'),'1.0',true);
	wp_enqueue_script('scripts-projet-front');
}

/**************************
* ENQUEUE POUR LE BACK
**************************/

//* enqueue style back
// add_action('admin_enqueue_scripts','gnwooc2_styles_back', 99);
function gnwooc2_styles_back() {
	wp_register_style('styles-projet-back', plugins_url( 'css/styles-projet-back.css', dirname(__FILE__) ), array(), '1.0', 'all' );
	wp_enqueue_style('styles-projet-back');
}

//* enqueue script back
// add_action('admin_enqueue_scripts','gnwooc2_scripts_back');
function gnwooc2_scripts_back() {
	wp_register_script('scripts-projet-back',plugins_url( 'js/scripts-projet-back.js', dirname(__FILE__) ), array('jquery'),'1.0',true);
	wp_enqueue_script('scripts-projet-back');
}
