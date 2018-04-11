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

// condition pour que le champ ACF ne s'affiche que si il a un contenu
if(get_field('woocom2_detail_composition_onglet')){

	// Ajouter des onglets
	$tabs['composition_textile']= array(
		'title' => 'Composition Textile',
		'priority' => 40,
		'callback' => 'woocom2_onglet_produit_sur_mesure'

	);

	}
	// ne pas oublier le point (concaténation) sinon seul le dernier s'affiche
function woocom2_onglet_produit_sur_mesure(){
	// récup champ ACF
	$composition = get_field('woocom2_detail_composition_onglet');
	$html = '<h2>Titre de mon onglet</h2>';
	$html .= sprintf('<p>%s</p>',$composition);
	echo $html;
}

	return $tabs;
}

add_filter('woocommerce_product_tabs', 'woocom2_personnalisation_onglets', 98);

