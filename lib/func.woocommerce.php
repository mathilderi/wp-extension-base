<?php
// Pour changer le comportement de WooCommerce.

if ( class_exists( 'WooCommerce' ) ) {
	// code qui fonctionne avec WooCommerce

	//* FRONT
	// Ajout de texte avant les vignettes
	add_action( 'woocommerce_before_shop_loop', 'gnwooc2_contenu_avant_grille_produits', 10);
	function gnwooc2_contenu_avant_grille_produits() {
		echo '<h4 style="color:red;">Texte ajouté depuis le plugin Options pour WooCommerce</h4>';
	}

	//* EMAILS
	add_action( 'woocommerce_email_footer', 'gnwooc2_ajouter_remarque', 5 );
	function gnwooc2_ajouter_remarque() {
		$output = '<h2 id="h2thanks">Avant de partir</h2>';
		$output .= '<p id="pthanks">Merci de vous inscrire à la <a href="#">Newsletter</a> pour avoir plus d\'offres.</p>';
		echo $output;
	}

} else {
	// Notice dans le back-office au moment de la désactivation de WooCommerce
	add_action('admin_notices','gnwooc2_warning_woocommerce_missing');
	function gnwooc2_warning_woocommerce_missing() {
		$output = '<div id="my-custom-warning" class="error fade">';
		$output .= '<p><strong>Attention</strong>, ce site ne fonctionne pas sans l\'extension <strong>WooCommerce</strong>. Merci d\'activer cette extension</a>.</p>';
		$output .= '</div>';
		echo $output;
	 }
}