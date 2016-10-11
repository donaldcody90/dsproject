<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<?php if ( $price_html = $product->sale_price ){ ?>
<div class="product-price">
	<span class="product-price-discount ng-binding"><?php echo $product->regular_price . '₫';?></span> 
	<span class="product-price-total ng-binding"><?php echo $product->sale_price?$product->sale_price.'₫':'';?></span>
</div>
<?php } else{ ?>
<div class="product-price">
	<span class="product-price-total ng-binding"><?php echo $product->regular_price . '₫';?></span>
</div>
<?php } ?>