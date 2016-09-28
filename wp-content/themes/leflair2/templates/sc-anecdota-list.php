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
    'post_type' => 'anecdotas',
    'posts_per_page' => $postsPerPage,
    'orderby'=>'id',
    'order'=>'desc',
	'post_status'=>'publish'
);
$loop = new WP_Query($args);
$posts = get_posts($args );

if($posts){
?>
<div id="anecdota_wrapper" class="parentID">
<input type="hidden" class="max_num_page" value="<?php echo $loop->max_num_pages; ?>" />
<input type="hidden" class="rpp" value="<?php echo $postsPerPage; ?>" />
<input type="hidden" class="template_loop" value="sc-anecdota-loop" />
<div class="ajaxloadmore_lists">
	<?php 
		   foreach ($posts as $key=>$post) {
			$pr_name=get_post_meta($post->ID,"post_anecdota_name",true);
			$pr_cancer_type=get_post_meta($post->ID,"post_anecdota_cancer_type",true);
			$pr_content=get_post_meta($post->ID,"post_anecdota_content",true);
			$pr_attachfiles=get_post_meta($post->ID,"post_anecdota_attachfiles",true);
			?>
			<div class="protocol_box loadmore_item">
				<p><span>Name:</span> <?php echo nl2br($pr_name); ?></p>
				<p><span>Cancer Type:</span> <?php echo nl2br($pr_cancer_type); ?></p>
				<p><span>Content:</span><br />
				<?php echo nl2br($pr_content); ?></p>
                <?php 
                    $attachs=unserialize($pr_attachfiles);
                    
                    if($attachs){ ?>
                    <div class="attach_files"><p><span>Attach Files:</span></p>
                    <?php foreach($attachs as $file){ ?>
                        <div class="file_attach">
                            <a rel="prettyPhoto[attach<?php echo $post->ID; ?>]" target="_blank"  href="<?php echo $file ?>"><img src="<?php echo $file ?>" /></a>
                        </div>
                    <?php } ?>  
                    </div> 
                    <?php 
                    }
                 ?>
                <div class="protocol_comment_box">
                    <?php echo do_shortcode('[custom_comment post_id="'.$post->ID.'"]') ?>
                </div>
                
			</div>
			
			<?php 
		}
	?>

</div>
<?php if($loop->max_num_pages > 1){ ?>
    <button onclick="loadmore_custompost(this,'<?php echo $button_text_loading; ?>')" name="submit"  class="bt_loadmore"><?php echo $button_text; ?></button>    
<?php } ?>
</div>
<?php } ?>