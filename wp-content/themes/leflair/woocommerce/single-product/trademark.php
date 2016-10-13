<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $product;
$id = $product->id;

?>
<div class="product-brand ng-binding"><?php echo get_post_meta($id, 'product_trademark', true);?></div>
