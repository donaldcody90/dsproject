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

// global $post;

// if ( ! $post->post_excerpt ) {
	// return;
// }

?>
<accordion class="product apart ng-isolate-scope" accordion-scroll="accordionList">
	<div class="panel-group">
		<div class="panel panel-default ng-isolate-scope">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a>
						<span class="ng-scope">
							<i class="leflair pull-right i-leflair-plus"></i>
							Thông tin sản phẩm
						</span>
					</a>
				</h4>
			</div>
			<div class="panel-collapse collapse">
				<div class="panel-body">
					<accordion-heading class="ng-scope"></accordion-heading>
					<description-display contents="product.description.secondary" class="ng-scope ng-isolate-scope">
					<div class="ui bulleted list">
					
						<div class="item ng-scope">
							<div class="ng-binding ng-scope">
								Bộ sản phẩn gồm:
								<div class="ui bulleted dashed list">
									<div class="item ng-binding ng-scope">1 cọ mút</div>
									<div class="item ng-binding ng-scope">1 cọ eyeliner</div>
									<div class="item ng-binding ng-scope">1 cọ kẻ chân mày</div>
									<div class="item ng-binding ng-scope">1 cọ kem che khuyết điểm</div>
									<div class="item ng-binding ng-scope">1 cọ phấn nền</div>
									<div class="item ng-binding ng-scope">1 cọ môi</div>
								</div>
							</div>
						</div>
						<div class="item ng-scope">
							
							<div class="ng-binding ng-scope"> Xuất xứ: Hàn Quốc</div>
						</div>
						<div class="item ng-scope">
							
							<div class="ng-binding ng-scope"> Nơi sản xuất: Hàn Quốc</div>
						</div>
					</div>
					</description-display>		
				</div>
			</div>
		</div>

		<div class="panel panel-default ng-isolate-scope">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a>
						<span class="ng-scope">
							<i class="leflair pull-right i-leflair-plus" ></i>
							Chất liệu &amp; Cách bảo quản
						</span>
					</a>
				</h4>
			</div>
			<div class="panel-collapse collapse">
				<div class="panel-body">
					<accordion-heading class="ng-scope"></accordion-heading>
					<description-display contents="product.materialCare" class="ng-scope ng-isolate-scope">
						<div class="ui bulleted list">
							<div class="item ng-scope">
								<div class="ng-binding ng-scope">Chất liệu: Sợi tự nhiên</div>
							</div>
							<div class="item ng-scope">
								
								<div class="ng-binding ng-scope">Bảo quản: Xem hướng dẫn trên tag sản phẩm.</div>
							</div>
						</div>
					</description-display>
				</div>
			</div>
		</div>

		<div class="panel panel-default ng-isolate-scope ng-hide">
		  <div class="panel-heading">
			<h4 class="panel-title">
				<a>
					<span class="ng-scope">
						<i class="leflair pull-right i-leflair-plus"></i>
						Chi Tiết Kích Cỡ
					</span>
				</a>
			</h4>
		  </div>
			<div class="panel-collapse collapse">
				<div class="panel-body">
					<accordion-heading class="ng-scope"></accordion-heading>
					<description-display contents="product.sizeFit" class="ng-scope ng-isolate-scope ng-hide">
						<div class="ui bulleted list">
							<!-- ngRepeat: content in formattedContents -->
						</div>
					</description-display>
					<div class="size-chart ng-scope ng-hide" id="sizeTable">
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

		<div class="visible-xs panel panel-default ng-isolate-scope">
			<div class="panel-heading">
			<h4 class="panel-title">
				<a href="" class="accordion-toggle">
					<span class="ng-scope">
						<i class="leflair pull-right i-leflair-plus"></i>
						<span>Thông tin thương hiệu</span>
						<img class="brand-logo ng-isolate-scope ng-hide" src="https://src0.responsive.io/webp/w=398/https://leflair-assets.storage.googleapis.com/57e10ad752b3930f00aefe61.jpg">
					</span>		
				</a>
			</h4>
			</div>
			<div class="panel-collapse collapse">
				<div class="panel-body">
					<accordion-heading class="ng-scope"></accordion-heading>
					<h5 class="ng-binding ng-scope">"Dụng cụ trang điểm chuyên nghiệp"</h5>
					<p class="ng-binding ng-scope">Ra đời vào năm 1988, KT Cosmetics là thương hiệu thuộc tập đoàn Kumtaek Brush MFG, chuyên sản xuất các loại cọ trang điểm với chất lượng tốt nhất. KT Cosmetics truyền tải vào từng sản phẩm tâm huyết của thương hiệu về chất lượng an toàn và công nghệ tiên tiến, hỗ trợ nhu cầu làm đẹp đang thịnh hành của người dùng tại Hàn Quốc và trên khắp thế giới.</p>
				</div>
			</div>
		</div>
	</div>
</accordion>
