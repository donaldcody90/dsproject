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
global $post, $product;
$args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => 'dong-ho' );
$loop = new WP_Query( $args );
$current_product= $product->id;
echo $current_product;


?>
<section class="recommendations-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h5 class="recommended-products visible-xs">Sản phẩm bạn có thể thích:</h5>
				<h2 class="recommended-products hidden-xs">Sản phẩm bạn có thể thích:</h2>
			</div>
		</div>
		
		<div class="row recommendation">
			<?php while ( $loop->have_posts() ) : $loop->the_post();
					$id= get_the_id();
				if($id != $current_product){ ?>
			<div class="product-grid-item">
				<a href="<?php echo get_permalink();?>" class="thumbnail">
					<?php echo woocommerce_get_product_thumbnail();?>
				</a>
				<div class="product-info">
					<div class="product-brand">
						<?php echo get_post_meta($id, 'product_trademark', true); ?>
					</div>
					<div class="product-title">
						<?php echo get_the_title();?>
					</div>
				</div>
			</div>
			<?php } endwhile; 
				wp_reset_query();  ?>
			
		</div>
	</div>
</section>