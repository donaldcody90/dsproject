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

if ( ! $post->post_excerpt ) {
	return;
}

?>
<accordion class="product apart" accordion-scroll="accordionList">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a>
						<span>
							<i class="leflair pull-right i-leflair-plus"></i>
							Thông tin sản phẩm
						</span>
					</a>
				</h4>
			</div>
			<div class="panel-collapse collapse">
				<div class="panel-body">
					<accordion-heading></accordion-heading>
					<description-display contents="product.description.secondary">
					<div class="ui bulleted list">
						<?php echo get_post_meta($product->id, 'product_product_information', true);?>
					</div>
					</description-display>		
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a>
						<span>
							<i class="leflair pull-right i-leflair-plus" ></i>
							Chất liệu &amp; Cách bảo quản
						</span>
					</a>
				</h4>
			</div>
			<div class="panel-collapse collapse">
				<div class="panel-body">
					<accordion-heading></accordion-heading>
					<description-display contents="product.materialCare">
						<div class="ui bulleted list">
							<?php echo get_post_meta($product->id, 'product_material_guide', true); ?>
						</div>
					</description-display>
				</div>
			</div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
			<h4 class="panel-title">
				<a>
					<span>
						<i class="leflair pull-right i-leflair-plus"></i>
						Chi Tiết Kích Cỡ
					</span>
				</a>
			</h4>
		  </div>
			<div class="panel-collapse collapse">
				<div class="panel-body">
					<accordion-heading></accordion-heading>
					<description-display contents="product.sizeFit" class="vf-hide">
						<div class="ui bulleted list">
							<?php echo get_post_meta($product->id, 'product_detailed_size', true); ?>
						</div>
					</description-display>
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
				<a href="" class="accordion-toggle">
					<span>
						<i class="leflair pull-right i-leflair-plus"></i>
						<span>Thông tin thương hiệu</span>
						<img class="brand-logo vf-hide" src="https://src0.responsive.io/webp/w=398/https://leflair-assets.storage.googleapis.com/57e10ad752b3930f00aefe61.jpg">
					</span>		
				</a>
			</h4>
			</div>
			<div class="panel-collapse collapse">
				<div class="panel-body">
					<accordion-heading></accordion-heading>
					<h5>"Dụng cụ trang điểm chuyên nghiệp"</h5>
					<p>Ra đời vào năm 1988, KT Cosmetics là thương hiệu thuộc tập đoàn Kumtaek Brush MFG, chuyên sản xuất các loại cọ trang điểm với chất lượng tốt nhất. KT Cosmetics truyền tải vào từng sản phẩm tâm huyết của thương hiệu về chất lượng an toàn và công nghệ tiên tiến, hỗ trợ nhu cầu làm đẹp đang thịnh hành của người dùng tại Hàn Quốc và trên khắp thế giới.</p>
				</div>
			</div>
		</div>
	</div>
</accordion>
