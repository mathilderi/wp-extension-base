<?php
//* Fonction pour WordPress

//Enlever la barre Admin en front
// show_admin_bar( false );


// filter sur le titre
function woocom2_filtre_sur_titre ($titre) {
	$prefixe = get_field('woocom2_prefixe');
	$couleur = get_field('woocom2_couleur_du_prefixe');

	if (! is_singular('product')){
		return $titre;
	} else {	
	return sprintf('<span style="color:%s">%s</span> %s', $couleur, $prefixe, $titre);
	}
	
}
	add_filter('the_title', 'woocom2_filtre_sur_titre', 10, 2);