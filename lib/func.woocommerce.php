<?php
// Pour changer le comportement de WooCommerce.

if ( class_exists( 'WooCommerce' ) ) {
	// code qui fonctionne avec WooCommerce

	//* FRONT
	// Ajout de texte avant les vignettes
	add_action( 'woocommerce_before_shop_loop', 'gnwooc2_contenu_avant_vignette_2', 10);
	function gnwooc2_contenu_avant_vignette_2() {
		echo '<h4 style="color:red;">Texte ajouté depuis le plugin Options pour WooCommerce</h4>';
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