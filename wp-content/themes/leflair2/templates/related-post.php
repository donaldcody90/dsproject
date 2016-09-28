<?php 
$orig_post = $post;
global $post;
$categories = get_the_category($post->ID);

if ($categories) {
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
$args=array(
'category__in' => $category_ids,
'post__not_in' => array($post->ID),
'posts_per_page'=>4, // Number of related posts that will be displayed.
'caller_get_posts'=>1,
'orderby'=>'rand' // Randomize the posts
);
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
echo '<div id="perfect-related_by-category" class="clear"><h3>Artículos relacionados</h3><div class="related_item">';
while( $my_query->have_posts() ) {
$my_query->the_post();

$thumb_url = wp_get_attachment_url(get_post_meta(get_the_ID(),"post_slider_thumb",true));
?>
<div class="col-md-3">
	
 <a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
	<img src="<?php echo $thumb_url; ?>" />
 </a>
 
 <h4><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
 
</div>
<? }
echo '</div></div>';
} }
$post = $orig_post;
wp_reset_query(); ?>
