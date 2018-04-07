<?php
// Pour changer le comportement de WooCommerce.

if ( class_exists( 'WooCommerce' ) ) {
	// code qui fonctionne avec WooCommerce

	//* FRONT
	// Ajout de texte avant les vignettes
	add_action( 'woocommerce_before_shop_loop_item_title', 'gn_contenu_avant_vignette_2', 10);
	function gn_contenu_avant_vignette_2() {
		echo '<div>Avant les vignettes depuis le plugin</div>';
	}

} else {
	// Notice dans le back-office au moment de la désactivation de WooCommerce
	add_action('admin_notices','gnwoo_warning_woocommerce_missing');
	function gnwoo_warning_woocommerce_missing() {
		$output = '<div id="my-custom-warning" class="error fade">';
		$output .= '<p><strong>Attention</strong>, ce site ne fonctionne pas sans l\'extension <strong>WooCommerce</strong>. Merci d\'activer cette extension</a>.</p>';
		$output .= '</div>';
		echo $output;
	 }
}