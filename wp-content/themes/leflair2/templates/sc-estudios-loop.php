<?php
$postsPerPage = 3;
$args = array(
    'post_type' => 'estudios',
    'posts_per_page' => $rpp,
    'orderby'=>'id',
    'order'=>'desc',
    'offset'=>$offset
);
$loop = new WP_Query($args);
$posts = get_posts($args );

if($posts){
?>
	<?php 
		   foreach ($posts as $key=>$post) {
			$thumb_url = wp_get_attachment_url(get_post_meta($post->ID,"post_estudios_thumb",true));
			?>
			<li class="loadmore_item">	
				<div class="post_image">
					<img src="<?php echo $thumb_url; ?>" />
				</div>
				<div class="post_info">
				    <h4><?php echo $post->post_title; ?></h4>
					<p class="post_meta">
                        <span>Auores:</span>
                        <?php echo get_post_meta($post->ID,"post_estudios_author",true); ?>
                        <span>, Publicado en</span>
                        <?php echo get_post_meta($post->ID,"post_estudios_publish_date",true); ?>
                    </p>
					   <div class="post_shortdesc">
                         <?php echo $post->post_excerpt; ?> <a onclick="return show_estudio_read_more(this,<?php echo $post->ID ?>)" rel="<?php echo $post->ID ?>" class="read_more" href="#">Leer Mas</a>
                       </div>
                       <div id="full_post_<?php echo $post->ID; ?>" class="post_fulltext" style="display: none;"> 
                       <?php
                           $content = apply_filters ("the_content", $post->post_content);
                            echo $content; ?>
                        </div>
                       
				</div>
			</li>
			<?php 
		}
	?>
<?php } ?>
