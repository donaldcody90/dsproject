<?php 
global $post;
$images=wp_get_attachment_image(get_post_thumbnail_id($post->ID),'post-cat-size');
$share_link=get_permalink($post->ID);
?>
<?php if($images){ ?>
<div class="post_image">
<a href="<?php echo get_permalink($post->ID) ?>">
    <?php echo $images; ?>
 </a>
</div>
<?php } ?>
				<div class="post_info">
				    <h4><a href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title; ?></a></h4>
					<p class="post_date"><?php echo date("F j, Y",strtotime ($post->post_date)); ?></p>
                    <p class="post_share_meta">
                         <span>
                         <a href="<?php echo get_permalink($post->ID); ?>">
                        <?php 
                          $num_comment=get_comments_number( $post->ID );
                            if($num_comment==0){
                            echo 'Be the First!';
                        }else { 
                                echo get_comments_number( $post->ID ). ' Comentarios';
                            } 
                            ?></a>
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