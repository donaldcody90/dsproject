<?php 
$posts = get_posts('orderby=rand&numberposts=4');
//var_dump($posts);

if($posts){
?>
<!--
<script>
	jQuery(document).ready(function(){
	   var width=jQuery( window ).width();
       var minSlides=4;
       var maxSlides=4;
       var slideMargin=30;
       if( width <= 679 ){
            minSlides=1;
            maxSlides=1;
            slideMargin=0;
       }
	  jQuery('.all_post_slider .post_sliders').bxSlider({
			minSlides: minSlides,
			maxSlides: maxSlides,
			slideMargin: maxSlides,
			slideWidth: 1180,
			pager:false
		  });
	});
</script> -->
<div class="all_post_slider">
<ul class="post_sliders">
	<?php 
		foreach ($posts as $key=>$post) {
			$thumb_url = wp_get_attachment_url(get_post_meta($post->ID,"post_slider_thumb",true));
			
			?>
			<li class="col-md-3 col-sm-6 col-xs-12">	
				<div class="post_image">
					<a href="<?php echo get_permalink($post->ID) ?>"><img src="<?php echo $thumb_url; ?>" /></a>
				</div>
				<div class="post_info">
				    <h4><a href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title; ?></a></h4>
					<p class="post_date"><?php echo date("F j, Y",strtotime ($post->post_date)); ?></p>
					<p class="post_shortdesc"><?php echo $post->post_excerpt; ?></p>
				</div>
				</li>
			<?php 
			
		}
	?>
 </ul>
 </div>
<?php } ?>

