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
$attachment_ids = $product->get_gallery_attachment_ids();
?>
					<div class="col-sm-7">
						<div class="product-image-wrapper">
							
							<product-slide images="product.images[selectedVariation]" class="ng-isolate-scope">
							<div class="row">
								<div class="col-md-10 big-image" style="height: 673.75px;">
									<div class="ng-scope" ng-if="!interval">
										<?php foreach($attachment_ids as $attachment_id) { ?>
										<div class="imageSlide ng-scope ng-hide leflair_zoom" >
											<img class="img-responsive product-displayed-image ng-isolate-scope" src="<?php echo wp_get_attachment_url($attachment_id); ?>" >
										</div>
										<?php } ?>
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
													<?php foreach( $attachment_ids as $attachment_id ) { ?>
														<li style="width: 100%;" class="ng-scope">
															<img class="thumbnail product-image-thumbnail ng-isolate-scope" src="<?php echo wp_get_attachment_url( $attachment_id ); ?>">
														</li>
													<?php } ?>
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
							<!--<img class="brand-logo ng-isolate-scope" src="-->
							<?php echo wp_get_attachment_image(get_post_meta( $product->id, 'product_trademark_logo', true )); ?>

							<h5 class="ng-binding"><?php echo get_post_meta($product->id, 'product_trademark_slogan', true);?></h5>
							<p class="ng-binding"><?php echo get_post_meta($product->id, 'product_trademark_description', true);?></p>
						</div>
					</div>
