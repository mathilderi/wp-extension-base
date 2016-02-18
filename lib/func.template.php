<?php

//* Fonction PHP du thème
// Hook pour lancer les actions une fois que le thème est chargé
add_action( 'after_setup_theme', 'gn_function_theme', 15 );
function gn_function_theme() {

	// Attention HOOK Genesis !
	/** Supprimer la description du site (pour test) */
	remove_action( 'genesis_site_description', 'genesis_seo_site_description' );

} // add_action( 'after_setup_theme', 'gn_function_theme', 15 );
