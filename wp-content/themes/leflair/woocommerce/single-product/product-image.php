<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
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
 * @version     2.6.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product;
?>
					<div class="col-sm-7">
						<div class="product-image-wrapper">
							
							<product-slide images="product.images[selectedVariation]" class="ng-isolate-scope">
							<div class="row">
								<div class="col-md-10 big-image" style="height: 673.75px;">
									<div class="ng-scope" ng-if="!interval">
										<div class="imageSlide ng-scope ng-hide" >
											<img-zooming url="slide.url" class="ng-isolate-scope" style="display: block; position: relative; overflow: hidden;">
												<img class="img-responsive product-displayed-image ng-isolate-scope" src="https://src0.responsive.io/webp/w=539/https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f25.jpg" >
											<img src="https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f25.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 1100px; height: 1375px; border: none; max-width: none; max-height: none;"></img-zooming>
										</div>
										<div class="imageSlide ng-scope" >
											<img-zooming url="slide.url" class="ng-isolate-scope" style="display: block; position: relative; overflow: hidden;">
												<img class="img-responsive product-displayed-image ng-isolate-scope" src="https://src1.responsive.io/webp/w=539/https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f24.jpg" >
											<img src="https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f24.jpg" class="zoomImg" style="position: absolute; top: -64.4837px; left: -0.780612px; opacity: 0; width: 1100px; height: 1375px; border: none; max-width: none; max-height: none;"></img-zooming>
										</div>
										<div class="imageSlide ng-scope ng-hide" >
											<img-zooming url="slide.url" class="ng-isolate-scope" style="display: block; position: relative; overflow: hidden;">
												<img class="img-responsive product-displayed-image ng-isolate-scope" src="https://src1.responsive.io/webp/w=539/https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f22.jpg" >
											<img src="https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f22.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 1100px; height: 1375px; border: none; max-width: none; max-height: none;"></img-zooming>
										</div>
										<div class="imageSlide ng-scope ng-hide" >
											<img-zooming url="slide.url" class="ng-isolate-scope" style="display: block; position: relative; overflow: hidden;">
												<img class="img-responsive product-displayed-image ng-isolate-scope" src="https://src1.responsive.io/webp/w=539/https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f23.jpg" >
											<img src="https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f23.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 1100px; height: 1375px; border: none; max-width: none; max-height: none;"></img-zooming>
										</div>
										<div class="imageSlide ng-scope ng-hide" >
											<img-zooming url="slide.url" class="ng-isolate-scope" style="display: block; position: relative; overflow: hidden;">
												<img class="img-responsive product-displayed-image ng-isolate-scope" src="https://src1.responsive.io/webp/w=539/https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f26.jpg" >
											<img src="https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f26.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 1100px; height: 1375px; border: none; max-width: none; max-height: none;"></img-zooming>
										</div>
										<div class="imageSlide ng-scope ng-hide" >
											<img-zooming url="slide.url" class="ng-isolate-scope" style="display: block; position: relative; overflow: hidden;">
												<img class="img-responsive product-displayed-image ng-isolate-scope" src="https://src2.responsive.io/webp/w=539/https://leflair-assets.storage.googleapis.com/57e24171eb696d0f00a72f27.jpg" >
											<img src="https://leflair-assets.storage.googleapis.com/57e24171eb696d0f00a72f27.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 1100px; height: 1375px; border: none; max-width: none; max-height: none;"></img-zooming>
										</div>
										<div class="imageSlide ng-scope ng-hide" >
											<img-zooming url="slide.url" class="ng-isolate-scope" style="display: block; position: relative; overflow: hidden;">
												<img class="img-responsive product-displayed-image ng-isolate-scope" src="https://src2.responsive.io/webp/w=539/https://leflair-assets.storage.googleapis.com/57e24171eb696d0f00a72f28.jpg" >
											<img src="https://leflair-assets.storage.googleapis.com/57e24171eb696d0f00a72f28.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 1100px; height: 1375px; border: none; max-width: none; max-height: none;"></img-zooming>
										</div>
									</div>
									<div class="backdrop"></div>
								</div>

							<!-- Thumbnail on big screen -->
							<product-vertical-slide class="col-md-2 thumbnail-container ng-isolate-scope" set-image-index="setImageIndex" slides="slides">
								<div class="outer-wrapper">
									<a href="" class="arrow-box top ng-scope" ng-click="reset(); moveUp()" >
										<span class="glyphicon glyphicon-chevron-up"></span>
									</a>
									<div class="content-wrapper active" >
										<div class="content" style="height: 620px; width: 100%;">
											<div class="inner-content" style="width: 100%;">
												<ul class="list-inline" style="width: 100%;">
													<li style="width: 100%;" class="ng-scope"><img class="thumbnail product-image-thumbnail ng-isolate-scope" ng-mouseenter="imageIndex($index)" src="https://src2.responsive.io/webp/w=74/https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f25.jpg" data-rio-width="74" data-rio-img="https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f25.jpg"></li>
													<li style="width: 100%;" class="ng-scope"><img class="thumbnail product-image-thumbnail ng-isolate-scope" ng-mouseenter="imageIndex($index)" src="https://src2.responsive.io/webp/w=74/https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f24.jpg" data-rio-width="74" data-rio-img="https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f24.jpg"></li>
													<li style="width: 100%;" class="ng-scope"><img class="thumbnail product-image-thumbnail ng-isolate-scope" ng-mouseenter="imageIndex($index)" src="https://src3.responsive.io/webp/w=74/https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f22.jpg" data-rio-width="74" data-rio-img="https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f22.jpg"></li>
													<li style="width: 100%;" class="ng-scope"><img class="thumbnail product-image-thumbnail ng-isolate-scope" ng-mouseenter="imageIndex($index)" src="https://src3.responsive.io/webp/w=74/https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f23.jpg" data-rio-width="74" data-rio-img="https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f23.jpg"></li>
													<li style="width: 100%;" class="ng-scope"><img class="thumbnail product-image-thumbnail ng-isolate-scope" ng-mouseenter="imageIndex($index)" src="https://src3.responsive.io/webp/w=74/https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f26.jpg" data-rio-width="74" data-rio-img="https://leflair-assets.storage.googleapis.com/57e24167eb696d0f00a72f26.jpg"></li>
													<li style="width: 100%;" class="ng-scope"><img class="thumbnail product-image-thumbnail ng-isolate-scope" ng-mouseenter="imageIndex($index)" src="https://src3.responsive.io/webp/w=74/https://leflair-assets.storage.googleapis.com/57e24171eb696d0f00a72f27.jpg" data-rio-width="74" data-rio-img="https://leflair-assets.storage.googleapis.com/57e24171eb696d0f00a72f27.jpg"></li>
													<li style="width: 100%;" class="ng-scope"><img class="thumbnail product-image-thumbnail ng-isolate-scope" ng-mouseenter="imageIndex($index)" src="https://src0.responsive.io/webp/w=74/https://leflair-assets.storage.googleapis.com/57e24171eb696d0f00a72f28.jpg" data-rio-width="74" data-rio-img="https://leflair-assets.storage.googleapis.com/57e24171eb696d0f00a72f28.jpg"></li>
												</ul>
											</div>
										</div>
									</div>

									<a href="" class="arrow-box bottom ng-scope" >
										<span class="glyphicon glyphicon-chevron-down"></span>
									</a>

								</div>
							</product-vertical-slide>
								
							</div>
							</product-slide>
						</div>

						<div class="apart-big apart-no-bottom hidden-xs">
							<img class="brand-logo ng-isolate-scope" src="https://src0.responsive.io/webp/w=653/https://leflair-assets.storage.googleapis.com/57e10ad752b3930f00aefe61.jpg" >

							<h5 class="ng-binding">"Dụng cụ trang điểm chuyên nghiệp"</h5>
							<p class="ng-binding">Ra đời vào năm 1988, KT Cosmetics là thương hiệu thuộc tập đoàn Kumtaek Brush MFG, chuyên sản xuất các loại cọ trang điểm với chất lượng tốt nhất. KT Cosmetics truyền tải vào từng sản phẩm tâm huyết của thương hiệu về chất lượng an toàn và công nghệ tiên tiến, hỗ trợ nhu cầu làm đẹp đang thịnh hành của người dùng tại Hàn Quốc và trên khắp thế giới.</p>
						</div>
					</div>
