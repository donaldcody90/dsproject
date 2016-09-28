<?php 

$title="";
if(isset($atts['title'])){
$title=$atts['title'];
}

$border_color="#57a92f";
if(isset($atts['border_color'])){
    $border_color=$atts['border_color'];
}

$posts = get_posts('orderby=rand&post_type=suplementos&numberposts=4');
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
	  jQuery('.suplementos_wrapper .suplementos_sliders').bxSlider({
			minSlides:minSlides,
			maxSlides: maxSlides,
			slideMargin: slideMargin,
			slideWidth: 1180,
			pager:false
		  });
	});
</script>-->
<div class="suplementos_wrapper">
<?php if($title){ ?>
<h1 class="title" style="border-color:<?php echo $border_color; ?> ;">
<?php echo $title; ?>
</h1>
<?php } ?>
<ul class="suplementos_sliders">
	<?php 
		foreach ($posts as $key=>$post) {
			$thumb_url = wp_get_attachment_url(get_post_meta($post->ID,"post_suplemento_image",true));
            $link_detail=get_post_meta($post->ID,"post_suplemento_link",true);
			?>
			<li class="col-md-3 col-sm-6 col-xs-12">	
                <div class="article_box">
				<div class="post_image">
					<a target="_blank" href="<?php echo $link_detail; ?>">
                    <img src="<?php echo $thumb_url; ?>" /></a>
				</div>
				<div class="post_info">
				    <h4><a target="_blank" href="<?php echo $link_detail; ?>"><?php echo $post->post_title; ?></a></h4>
					<p class="post_price"><?php echo get_post_meta($post->ID,"post_suplemento_price",true); ?></p>
					
				</div>
                </div>
				</li>
			<?php 
			
		}
	?>
 </ul>
 </div>
<?php } ?>

