<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $product;
$id = $product->id;

?>
<div class="product-brand"><?php echo get_post_meta($id, 'product_trademark', true);?></div>
