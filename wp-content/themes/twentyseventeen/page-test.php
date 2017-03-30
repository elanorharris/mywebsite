<?
if (!function_exists("echoc")) {
	function echoc($data) {
		echo "\n<pre>\n";
		print_r($data);
		echo "</pre>\n";
	}
}

$cart_items = $woocommerce->cart->get_cart();
echoc($cart_items);
	
$shipping_total = $woocommerce->cart->get_cart_shipping_total();
echoc("Shipping total: ".$shipping_total);

?>
