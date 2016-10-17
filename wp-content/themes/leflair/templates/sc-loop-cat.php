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
				
	<section autoscroll="false" le-scroll="" offset="400" class="ng-scope">
		<section class="ng-scope">
		<promotion-carousel>
		<div class="info-slider hidden-xs hidden-sm carousel ng-isolate-scope">
			<div class="carousel-inner">
				<div class="item text-center ng-isolate-scope">
					<a href="" class="ng-binding ng-scope"><?php echo get_theme_option('home_text_slider1'); ?></a>
				</div>
				<div class="item text-center ng-isolate-scope active">
					<a href="tel:<?php echo get_theme_option('phone_number');?>" class="ng-binding ng-scope"><?php echo get_theme_option('home_text_slider2'); ?></a>
				</div>
			</div>
			<a class="left carousel-control"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
		</promotion-carousel>
		<?php  if($terms) 
				foreach($terms as $cat) {
					if($cat->parent == 0 and $cat->description != "Mục ưu đãi sắp diễn ra phải có dòng này") {?>
						<a class="image-link" href="<?php echo get_category_link($cat->term_id) ?>">
							<img class='fluid category-hero ng-scope ng-isolate-scope' src="<?php echo get_theme_option('home_banner', 'url');?>" alt='' />
						</a>
				<?php break; } } ?>
			<div class="container bump-container white ng-scope" ng-if="$breakpoint.availFrom('md')"></div>
		</section>

		<section class="ng-scope">

		<!-- TODAYS TOP SALES -->
		<div class="container bump-container-next white">
			<div class="border-left"></div>
			<div class="row section-header ng-scope" ng-if="$breakpoint.availFrom('md')">
				<div class="col-lg-12 text-center">
					<h3>Ưu Đãi Đang Diễn Ra</h3>
				</div>
			</div><!-- end ngIf: $breakpoint.availFrom('md') -->
			<sales-list sales="sales" banner="sales.banner" banner-position="5" featured-avail="sm" class="ng-isolate-scope">
			<div class="row">
			<?php  if($terms) 
				foreach($terms as $cat) {
					if($cat->parent == 0 and $cat->description != "Mục ưu đãi sắp diễn ra phải có dòng này") {?>
						<item class="col-md-6 col-xs-12 section-item ng-scope" ng-repeat="sale in salesList" ng-show="($index !== 0) || ($index === 0 &amp;&amp; $breakpoint.availUntil(featuredAvailAt))">
							<a href="<?php echo get_category_link($cat->term_id) ?>">
								<?php $thumbnail_id = get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true);
									// get the image URL for parent category
									$image = wp_get_attachment_url($thumbnail_id);
									// print the IMG HTML for parent category
									echo "<img class='fluid ng-isolate-scope' src='{$image}' alt='' />";?>
								<div class="caption">
									<h3 class="ng-binding">
										<?php echo $cat->name; ?>
										<span class="glyphicon glyphicon-chevron-right small"></span>
									</h3>
									<p class="text-muted ng-binding">Kết thúc trong 6 ngày
									</p>
								</div>
							</a>
						</item>
			<?php } } ?>
			</div></sales-list>		
		</div>
		
		<!-- TODAT BEST SELLER -->
		<div class="best-products">
		
			<div class="container">
				<div class="row section-header">
					<div class="col-lg-12 text-center">
						<h3>Bán chạy nhất trong ngày</h3>
					</div>
				</div>

				<best-seller products="bestSeller" class="clearfix ng-isolate-scope">
					<!--<arrow class="left" ng-click="moveLeft()">
						<div class="controller">
							<span class="glyphicon glyphicon-menu-left"></span>
						</div>
					</arrow>-->
					<outerbox>
						<ul class="bxslider" style="width: 4560px;">
							<?php while ( $loop->have_posts() ) : $loop->the_post(); 
								global $product; ?>
							<li class="ng-scope" style="width: 285px;">
								<a href="<?php the_permalink(); ?>">
									<?php echo woocommerce_get_product_thumbnail(); ?>
									<div class="content">
										<p class="brand ng-binding">Lolita Lempicka</p>
										<h3 class="ng-binding"><?php the_title(); ?></h3>
										<?php if ( $price_html = $product->get_price_html() ){ ?>
											<p class="price ng-binding">
												<?php echo $product->get_price_html();?>
											</p>
										<?php } ?>
									</div>
								</a>
							</li>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>	
						</ul>
					</outerbox>
					<!--<arrow class="right">
						<div class="controller">
							<span class="glyphicon glyphicon-menu-right"></span>
						</div>
					</arrow>-->
				</best-seller> 
			</div>
			
		</div>
		
		<?php //echo do_shortcode('[best_selling_products per_page="5"]'); ?>
			
		<!-- UPCOMING SALES -->
		<div class="container upcoming white">
			<div class="row section-header">
				<div class="col-lg-12 text-center">
					<h3>Ưu Đãi Sắp Diễn Ra</h3>
				</div>
			</div>
			<div class="row">
			<?php if($terms)
				foreach($terms as $cat) { 
				if($cat->parent != 0) { ?>
				<div class="col-lg-4 col-xs-6 ng-scope">
					<a href="<?php echo get_category_link($cat->term_id); ?>">
						<div class="row section-card">
							<a href="<?php echo get_category_link($cat->term_id) ?>">
								<?php $thumbnail_id = get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true);
									// get the image URL for parent category
									$image = wp_get_attachment_url($thumbnail_id);
									// print the IMG HTML for parent category
									echo "<div class='col-sm-5 col-xs-12 section-card-img upcoming-img ng-isolate-scope'>
											<img src='".$image."' />
											</div>";?>
							<div class="col-sm-7 hidden-xs">
								<h5 class="sale-time ng-binding"><?php echo $cat->name ;?></h5>
								<h5 style="display: inline-block">Bắt đầu vào</h5> <span class="text-muted ng-binding">Ngày mai 8:00am</span>
							</div>
						</div>
					</a>
				</div>
				<?php } } ?>
				
			</div>
		</div>
		</section>
		
	</section>
</section>

<?php


/*
	var_dump($atts);
	$parentid = get_queried_object_id();
	$args = array(
		'parent' => $parentid
	);
	$terms = get_terms( 'product_cat', $args );
	 
	if ( $terms ) {
			 
		echo '<ul class="product-cats">';
		 
			foreach ( $terms as $term ) {
							 
				echo '<li class="category">';                 
						 
					woocommerce_subcategory_thumbnail( $term );
					 
					echo '<h2>';
						echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">';
							echo $term->name;
						echo '</a>';
					echo '</h2>';
																		 
				echo '</li>';
																		 
	 
		}
		 
		echo '</ul>';
	 
	}
*/
?>
