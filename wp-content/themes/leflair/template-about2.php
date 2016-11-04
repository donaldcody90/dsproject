<?php
/*
Template Name: About
*/

$page_id= get_the_ID();
?>
<?php while (have_posts()) : the_post(); ?>
			
	<!-- uiView:  -->
	<section>
		<section class="section-info">
			<div class="hero about-hero aligner inverted" style="background-image: url(<?php echo wp_get_attachment_url(get_post_meta($page_id, 'page_header_image', true));?>);">
				<div class="container aligner-item">
					<div class="row">
						<div class="col-lg-12 text-center hero-center-callout">
							<h2><?php echo get_post_meta($page_id, 'page_title', true); ?></h2>
							<p class="lead"><?php echo get_post_meta($page_id, 'page_subtitle', true);?></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="container info static-container">
			<div class="row">
			
				<div class="col-lg-6 col-lg-offset-3">
					<div class="about-content">
						<?php the_content(); ?>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
<?php endwhile; ?>