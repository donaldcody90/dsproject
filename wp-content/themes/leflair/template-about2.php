<?php
/*
Template Name: About 2
*/
?>
<?php while (have_posts()) : the_post(); ?>
			
	<!-- uiView:  -->
	<section>
		<section class="section-info">
			<div class="hero about-hero aligner inverted" style="background-image: url(<?php echo site_url('wp-content/themes/leflair/assets/img/hero-careers.png');?>); background-position: 50% 50%; background-repeat: no-repeat; background-size: 1350px;">
				<div class="container aligner-item">
					<div class="row">
						<div class="col-lg-12 text-center hero-center-callout">
							<h2><?php echo roots_title(); ?></h2>
							<p class="lead">Vì sao bạn nên gia nhập Leflair thay vì một trong hàng triệu công ty khác?</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="container info static-container">
			<div class="row">
			
				<div class="col-lg-6 col-lg-offset-3">
					<h2 class="section-header"><span>Title</span></h2>
					<p>
						<?php the_content(); ?>
					</p>
				</div>
				
			</div>
		</div>
	</section>
	
<?php endwhile; ?>