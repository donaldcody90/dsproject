<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );

?>
<div class="apart-sm">
	<div class="ui relaxed product list">
		<div class="item">
			<i class="glyphicon glyphicon-ok-circle big icon"></i>
			<div class="content">
				Cam kết 100% chính hãng
			</div>
		</div>
		<?php if(get_post_meta($post->ID, 'product_shipment_quantity')==true){
				echo '<div class="item">'; }
			else{ 
				echo '<div class="item vf-hide">'; }?>
			<i class="glyphicon glyphicon-send big icon"></i>
			<div class="content">
				Giao hàng trong 2-7 ngày
			</div>
		</div>
		<div class="item">
			<i class="glyphicon glyphicon-repeat big icon"></i>
			<div class="content">
				<?php if(get_post_meta($post->ID, 'product_returnable')==true){
					echo 'Trả hàng trong 30 ngày'; }
				else{ 
					echo 'Sản phẩm này không được đổi trả.'; }?>
				
			</div>
		</div>
		<!--<div class="item">
			<i class="glyphicon glyphicon-repeat big icon"></i>
			<div class="content">
				Sản phẩm này không được đổi trả.
			</div>
		</div>-->
	</div>
</div>