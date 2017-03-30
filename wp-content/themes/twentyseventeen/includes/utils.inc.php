<?
function get_cart_items() {
	global $woocommerce;
	$items = $woocommerce->cart->get_cart();
	return $items;
}
?>
