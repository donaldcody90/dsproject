<?php
if(isset($atts['rpp'])){
    $postsPerPage = $atts['rpp'];    
}else{
    $postsPerPage=5;
}
if(isset($atts['text_loadmore']))
{
    $button_text=$atts['text_loadmore'];
}else{
    $button_text="Load More";
}

if(isset($atts['text_loading']))
{
    $button_text_loading=$atts['text_loading'];
}else{
    $button_text_loading="Loading...";
}

$args = array(
    'post_type' => 'estudios',
    'posts_per_page' => $postsPerPage,
    'orderby'=>'id',
    'order'=>'desc'
);
$loop = new WP_Query($args);
$posts = get_posts($args );

if($posts){
?>
<div id="estudios_wrapper" class="parentID">
<input type="hidden" class="max_num_page" value="<?php echo $loop->max_num_pages; ?>" />
<input type="hidden" class="rpp" value="<?php echo $postsPerPage; ?>" />
<input type="hidden" class="template_loop" value="sc-estudios-loop" />
<ul class="estudios_lists ajaxloadmore_lists">
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
                    <?php  
                        $content_arr = get_extended ( $post->post_content );
                        if($content_arr['extended'] !=""){ 
                    ?>
					   <div class="post_shortdesc">
                         <?php echo $content_arr['main']; ?> <a onclick=" return  show_estudio_read_more(this,<?php echo $post->ID ?>)" rel="<?php echo $post->ID ?>" class="read_more" href="#">Leer Mas</a>
                       </div>
                       <div id="full_post_<?php echo $post->ID; ?>" class="post_fulltext" style="display: none;"> 
                       <?php
                          
                            echo $content_arr['extended'];
                            //$post_content=str_repeat("<!--more-->",'<a onclick=" return  show_estudio_read_more(this,'.$post->ID.'" rel="'.$post->ID.'" class="read_more" href="#">Leer Mas</a>',$post->post_content);
                           //$content = apply_filters ("the_content",$post_content);
                           // echo $post_content; 
                           ?>
                        </div>
                        <?php }else{ ?>
                             <div class="post_shortdesc">
                                    <?php echo apply_filters ("the_content",$post->post_content); ?>
                             </div>
                        <?php } ?>
                       
				</div>
			</li>
			<?php 
		}
	?>

</ul>
<?php if($loop->max_num_pages > 1){ ?>
    <button onclick="loadmore_custompost(this,'<?php echo $button_text_loading; ?>')" name="submit" id="load_more_protocol" class="bt_loadmore"><?php echo $button_text; ?></button>    
<?php } ?>
</div>
<?php } ?>