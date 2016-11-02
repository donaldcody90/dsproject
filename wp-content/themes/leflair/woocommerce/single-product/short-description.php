<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
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

$product_trademark_logo= get_post_meta( $product->id, 'product_trademark_logo', true );
$product_trademark_slogan= get_post_meta($product->id, 'product_trademark_slogan', true);
$product_trademark_description= get_post_meta($product->id, 'product_trademark_description', true);
?>
<div class="product apart">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a href="javascript:void(0)">
						<span class="product-property">
							<i class="glyphicon glyphicon-plus pull-right"></i>
							Thông tin sản phẩm
						</span>
					</a>
				</h4>
			</div>
			<div class="panel-collapse collapse">
				<div class="panel-body">
					<div class="ui bulleted list">
						<?php echo get_post_meta($product->id, 'product_product_information', true);?>
					</div>		
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a href="javascript:void(0)">
						<span class="product-property">
							<i class="glyphicon glyphicon-plus pull-right" ></i>
							Chất liệu &amp; Cách bảo quản
						</span>
					</a>
				</h4>
			</div>
			<div class="panel-collapse collapse">
				<div class="panel-body">
					<div class="ui bulleted list">
						<?php echo get_post_meta($product->id, 'product_material_guide', true); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a href="javascript:void(0)">
						<span class="product-property">
							<i class="glyphicon glyphicon-plus pull-right"></i>
							Chi Tiết Kích Cỡ
						</span>
					</a>
				</h4>
			</div>
			<div class="panel-collapse collapse">
				<div class="panel-body">
					<div class="ui bulleted list">
						<?php echo get_post_meta($product->id, 'product_detailed_size', true); ?>
					</div>
					<div class="size-chart vf-hide" id="sizeTable">
						<table class="table">
							<thead>
								<tr>
									<!-- ngRepeat: name in sizeTitle -->
								</tr>
							</thead>

							<tbody>
								<!-- ngRepeat: sizeValue in availSizes -->
							</tbody>
							
						</table>
					</div>
				</div>
			</div>
		</div>				

		<div class="visible-xs panel panel-default">
			<div class="panel-heading">
			<h4 class="panel-title">
				<a href="javascript:void(0)" class="accordion-toggle">
					<span class="product-property">
						<i class="glyphicon glyphicon-plus pull-right"></i>
						<span>Thông tin thương hiệu</span>
						<img class="brand-logo vf-hide" src="<?php echo wp_get_attachment_url($product_trademark_logo); ?>">
					</span>		
				</a>
			</h4>
			</div>
			<div class="panel-collapse collapse">
				<div class="panel-body">
					<h5><?php if($product_trademark_slogan!= ''){ echo '"'.$product_trademark_slogan.'"'; }?></h5>
					<p><?php if($product_trademark_description!= ''){ echo $product_trademark_description; }?></p>
				</div>
			</div>
		</div>
	</div>
</div>
