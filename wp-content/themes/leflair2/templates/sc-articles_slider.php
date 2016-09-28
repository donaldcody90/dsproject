<?php 

$title="ARTICULOS";
if(isset($atts['title'])){
$title=$atts['title'];
}
$catid=$atts['cat_id'];

$border_color="#57a92f";
if(isset($atts['border_color'])){
    $border_color=$atts['border_color'];
}
$per_page=12;
if(isset($atts['per_page']))
{
 $per_page=$atts['per_page'];
}
$posts = get_posts('orderby=date&order=DESC&posts_per_page='.$per_page.'&category='.$catid);

if($posts){
$link_category=get_category_link($catid);
?>
<!--
<script>
	jQuery(document).ready(function(){
	  jQuery('.post_sliders').bxSlider({
			minSlides: 3,
			maxSlides: 3,
			slideMargin: 30,
			slideWidth: 1180,
			pager:false
		  });
	});
</script>
<style>
.slider_cat<?php echo $catid ?> .bx-wrapper .bx-prev{
	background: url('<?php echo get_template_directory_uri() ?>/assets/img/arrow_prev_white.png') no-repeat center center  <?php echo $border_color ?> !important;
   
}
.slider_cat<?php echo $catid ?> .bx-wrapper .bx-next{
	background: url('<?php echo get_template_directory_uri() ?>/assets/img/arrow_next_white.png') no-repeat center center  <?php echo $border_color ?> !important;   
}
</style>-->
<div class="category_article_slider slider_cat<?php echo $catid; ?>">
<h1 class="title" style="border-color:<?php echo $border_color; ?> ;">
    <a href="<?php echo $link_category; ?>"><?php echo $title; ?></a>
</h1>
 <div class="row">
<ul class="post_sliders ">
	<?php 
		foreach ($posts as $key=>$post) {
			//$thumb_url = wp_get_attachment_url(get_post_meta($post->ID,"post_slider_thumb",true));
			$images=wp_get_attachment_image(get_post_thumbnail_id($post->ID),'post-cat-size');
           $share_link=get_permalink($post->ID);
           $num_comment=get_comments_number( $post->ID );
			?>
           
			<li class="col-md-4 col-sm-4 col-xs-12">	
				<div class="post_image">
					<a href="<?php echo get_permalink($post->ID) ?>">
                        <!--<img src="<?php echo $thumb_url; ?>" />-->
                        <?php echo $images; ?>
                    </a>
				</div>
				<div class="post_info">
				    <h4><a href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title; ?></a></h4>
					<p class="post_date"><?php echo date("F j, Y",strtotime ($post->post_date)); ?></p>
                    <p class="post_share_meta">
                        <span>
                        <a href="<?php echo get_permalink($post->ID); ?>">
                        <?php 
                            if($num_comment==0){
                            echo 'Be the First!';
                        }else { 
                                echo get_comments_number( $post->ID ). ' Comentarios';
                            } 
                            ?>
                            </a>
                        </span>
                        <span class="share_icon">
							<i class="fa fa-share-alt" aria-hidden="true"> Share</i>
                            <!--<img src="<?php echo get_template_directory_uri() ?>/assets/img/social-icons/share_icon.png" />-->
                            <span class="icon_tooltip">
                                    <a class="wc_tooltipster tooltipstered" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $share_link; ?>">
                                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/social-icons/fb-18x18-orig.png" /></a>
                                  <a class="wc_tooltipster tooltipstered" target="_blank" href="https://twitter.com/home?status=<?php echo $share_link; ?>">
                                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/social-icons/twitter-18x18-orig.png" /></a>
                                  <a class="wc_tooltipster tooltipstered" target="_blank" href="https://plus.google.com/share?url=<?php echo $share_link; ?>">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/social-icons/google-18x18-orig.png"  /></a>
                            </span>
                        </span>
                    </p>
				</div>
			</li>
            
			<?php 
			
		}
	?>

</ul>
</div>
</div>
<?php } ?>