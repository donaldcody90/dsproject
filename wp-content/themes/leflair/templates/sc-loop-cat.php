<?php 

$args = array( 'taxonomy' => 'product_cat' );
$terms = get_terms('product_cat', $args);
//echo "<pre>"; print_r($terms);

$args_bs = array(
    'post_type' => 'product',
    'meta_key' => 'total_sales',
    'orderby' => 'meta_value_num',
    'posts_per_page' => 16,
);
$loop = new WP_Query( $args_bs );
	
?>


<section>
	
	<section>
	
		<div class="info-slider hidden-xs hidden-sm carousel">
			<div class="carousel-inner">
				<div class="item text-center">
					<a href=""><?php echo get_theme_option('home_text_slider1'); ?></a>
				</div>
				<div class="item text-center active">
					<a href="tel:<?php echo get_theme_option('phone_number');?>"><?php echo get_theme_option('home_text_slider2'); ?></a>
				</div>
			</div>
			<!--<a class="left carousel-control"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control"><span class="glyphicon glyphicon-chevron-right"></span></a>-->
		</div>
	
		<div class="container bump-container white"></div>
	</section>

	<section>

		<!-- TODAYS TOP SALES -->
		<div class="container bump-container-next white">
			<div class="border-left"></div>
			
			<div class="row section-header">
				<div class="col-lg-12 text-center">
					<h3>Ưu Đãi Đang Diễn Ra</h3>
				</div>
			</div>
			
			<div class="row">
			<?php  if($terms) 
				foreach($terms as $cat) {
					if($cat->parent == 0) {?>
						<div class="col-md-6 col-xs-12 section-item">
							<a href="<?php echo get_category_link($cat->term_id) ?>">
								<?php $thumbnail_id = get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true);
									// get the image URL for parent category
									$image = wp_get_attachment_url($thumbnail_id);
									// print the IMG HTML for parent category
									echo "<img class='fluid' src='{$image}' alt='' />";?>
								<div class="caption">
									<h3>
										<?php echo $cat->name; ?>
										<span class="glyphicon glyphicon-chevron-right small"></span>
									</h3>
									<p class="text-muted">Kết thúc trong 6 ngày
									</p>
								</div>
							</a>
						</div>
			<?php } } ?>
			</div>
		</div>
		
		<!-- TODAT BEST SELLER -->
		<div class="best-products">
		
			<div class="container">
				<div class="row section-header">
					<div class="col-lg-12 text-center">
						<h3>Bán chạy nhất trong ngày</h3>
					</div>
				</div>

				<div class="best-seller">
					<ul class="bxslider" style="width: 4560px;">
						<?php while ( $loop->have_posts() ) : $loop->the_post(); 
							global $product; ?>
						<li style="width: 285px;">
							<a href="<?php the_permalink(); ?>">
								<?php echo woocommerce_get_product_thumbnail(); ?>
								<div class="content">
									<p class="brand"><?php echo get_post_meta($product->id, 'product_trademark', true);?></p>
									<h3><?php the_title();?></h3>
									<?php if ( $price_html = $product->get_price_html() ){ ?>
										<p class="price">
											<?php echo $product->get_price_html();?>
										</p>
									<?php } ?>
								</div>
							</a>
						</li>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>	
					</ul>
				</div>
			</div>
		</div>
	
	</section>
	
</section>


