<?php 
$args=array(
	'orderby'=>'rand',
	'post_type'=>'testimonial',
	'post_status' => 'publish',
	'posts_per_page' => -1,
);
$posts = get_posts($args);
if($posts){
?>
<div id="testimonial_binding">
	<div class="testimonial_content" >
		<img class="left_quote" src="<?php echo get_template_directory_uri().'/assets/img/left_quote.jpg'; ?>" />
			<?php echo $posts[0]->post_content; ?>
		<img class="right_quote" src="<?php echo get_template_directory_uri().'/assets/img/right_quote.jpg'; ?>" />
	</div>
	<div class="testimonial_name">
		<?php echo $posts[0]->post_title ?>
	</div>
</div>
<ul class="testimonial_sliders">
	<?php 
		foreach ($posts as $key=>$post) {
			    $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'testimonial-slider-size' );
			?>
			<li>	
				<div class="person_image">
					<a id="binding_click_<?php echo $post->ID;?>"  onClick="testimonial_content('<?php echo $post->ID ?>')">
					   <div class="overlay <?php if($key==0){ echo ' active';} ?>"><img src="<?php echo $thumb_url[0]; ?>" /></div>
					</a>
					<div id="testimonial_info_<?php echo $post->ID ?>" style="display:none;">
						<div class="testimonial_content" >
							<img class="left_quote" src="<?php echo get_template_directory_uri().'/assets/img/left_quote.jpg'; ?>" />
								<?php echo $post->post_content; ?>
							<img class="right_quote" src="<?php echo get_template_directory_uri().'/assets/img/right_quote.jpg'; ?>" />
						</div>
						<div class="testimonial_name">
							<?php echo $post->post_title ?>
						</div>
					</div>
				</div>
			</li>	
			<?php 
			
		}
	?>
<?php } ?>
</ul>
<script>
	jQuery(document).ready(function(){
		jQuery('.testimonial_sliders').bxSlider({
			minSlides:7,
			maxSlides:7,
			slideMargin:20,
			slideWidth: 1180,
			pager:false
		  });
		
		
	});
function testimonial_content(ID)
{
	jQuery(".testimonial_sliders .overlay").removeClass('active');
	
	jQuery("#testimonial_binding").html(jQuery("#testimonial_info_"+ID).html());
	jQuery("#binding_click_"+ID+" .overlay").addClass('active');
}
</script>