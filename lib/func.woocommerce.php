<?php

//* Personalisation des onglets de la fiche produit
function woocom2_personnalisation_onglets($tabs){
	// Retirer un onglet
	// les 3 onglets par défaut sont description, reviews, additionnal_information
	//unset ($tabs ['reviews']);

	// renommer un onglet
	$tabs['description']['title'] = 'zoom';

	// changer l'ordre
	$tabs['reviews']['priority'] = 1;
	$tabs['description']['priority'] = 5;

	

	return $tabs;
}

add_filter('woocommerce_product_tabs', 'woocom2_personnalisation_onglets', 98);

