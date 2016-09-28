<?php
$args = array(
    'post_type' => 'protocols',
    'posts_per_page' => $rpp,
    'orderby'=>'id',
    'order'=>'desc',
    'offset'=>$offset
);
$posts = get_posts($args );

if($posts){
?>
	<?php 
		   foreach ($posts as $key=>$post) {
			$pr_name=get_post_meta($post->ID,"post_protocol_name",true);
			$pr_edad=get_post_meta($post->ID,"post_protocol_edad",true);
			$pr_cancer_type=get_post_meta($post->ID,"post_protocol_cancer_type",true);
			$pr_diet=get_post_meta($post->ID,"post_protocol_diet",true);
			$pr_exercise=get_post_meta($post->ID,"post_protocol_exercise",true);
			$pr_spiritual=get_post_meta($post->ID,"post_protocol_spiritual",true);
			$pr_frankincense=get_post_meta($post->ID,"post_protocol_frankincense",true);
            $pr_attachfiles=get_post_meta($post->ID,"post_protocol_attachfiles",true);
			?>
			<div class="protocol_box loadmore_item">
				<p><span>Name:</span> <?php echo nl2br($pr_name); ?></p>
				<p><span>Edad:</span> <?php echo nl2br($pr_edad); ?></p>
				<p><span>Razon:</span><br />
				<?php echo nl2br($pr_cancer_type); ?></p>
				<p><span>Diet:</span><br />
				<?php echo nl2br($pr_diet); ?></p>
				<p><span>Exercise:</span><br />
				<?php echo nl2br($pr_exercise); ?></p>
				<p><span>Spiritual:</span><br />
				<?php echo nl2br($pr_spiritual); ?></p>
				<p><span>Como uso el incienso:</span><br />
				<?php echo nl2br($pr_frankincense); ?></p>
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
<?php } ?>
<script>
jQuery(document).ready(function($){
    $(".attach_files a[rel^='prettyPhoto']").prettyPhoto({
		hook: 'rel',
		social_tools: false,
		theme: 'pp_woocommerce',
		horizontal_padding: 20,
		opacity: 0.8,
		deeplinking: false
	});
});
</script>