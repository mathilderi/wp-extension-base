<?php
// Pour changer le comportement de WooCommerce.

if ( class_exists( 'WooCommerce' ) ) {
  // code qui fonctionne avec WooCommerce

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