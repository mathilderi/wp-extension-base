<?php

//* Personalisation des onglets de la fiche produit
function woocom2_personnalisation_onglets($tabs){
	// Retirer un onglet
	// les 3 onglets par défaut sont description, reviews, additionnal_information
	unset ($tabs ['reviews']);
	return $tabs;
}

add_filter('woocommerce_product_tabs', 'woocom2_personnalisation_onglets', 98);
