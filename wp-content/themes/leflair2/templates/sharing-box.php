<?php 
global $post;
$share_link=get_permalink($post->ID);
?>
<!--<div class="social_share_icon">
<span class="share_buttons_box" style="display: inline-block;">
  <img src="<?php echo get_template_directory_uri().'/assets/img/social-icons/share_icon.png'; ?>" />
  <a class="wc_tooltipster tooltipstered" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $share_link; ?>">
     <img src="http://etapa-1.canalpatitofeo.com/wp-content/plugins/wpdiscuz/assets/img/social-icons/fb-18x18.png" onmouseover="this.src='http://etapa-1.canalpatitofeo.com/wp-content/plugins/wpdiscuz/assets/img/social-icons/fb-18x18-orig.png'" onmouseout="this.src='http://etapa-1.canalpatitofeo.com/wp-content/plugins/wpdiscuz/assets/img/social-icons/fb-18x18.png'"></a>
  <a class="wc_tooltipster tooltipstered" target="_blank" href="https://twitter.com/home?status=<?php echo $share_link; ?>">
     <img src="http://etapa-1.canalpatitofeo.com/wp-content/plugins/wpdiscuz/assets/img/social-icons/twitter-18x18.png" onmouseover="this.src='http://etapa-1.canalpatitofeo.com/wp-content/plugins/wpdiscuz/assets/img/social-icons/twitter-18x18-orig.png'" onmouseout="this.src='http://etapa-1.canalpatitofeo.com/wp-content/plugins/wpdiscuz/assets/img/social-icons/twitter-18x18.png'"></a>
  <a class="wc_tooltipster tooltipstered" target="_blank" href="https://plus.google.com/share?url=<?php echo $share_link; ?>">
    <img src="http://etapa-1.canalpatitofeo.com/wp-content/plugins/wpdiscuz/assets/img/social-icons/google-18x18.png" onmouseover="this.src='http://etapa-1.canalpatitofeo.com/wp-content/plugins/wpdiscuz/assets/img/social-icons/google-18x18-orig.png'" onmouseout="this.src='http://etapa-1.canalpatitofeo.com/wp-content/plugins/wpdiscuz/assets/img/social-icons/google-18x18.png'"></a>
</span>
</div>
-->
 <span class="share_icon">
							<!--<i class="fa fa-share-alt" aria-hidden="true"> Share</i>-->
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/social-icons/sharing-icon.png" />
                            <span class="icon_tooltip">
                                    <a class="wc_tooltipster tooltipstered" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $share_link; ?>">
                                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/social-icons/fb-18x18-orig.png" /></a>
                                  <a class="wc_tooltipster tooltipstered" target="_blank" href="https://twitter.com/home?status=<?php echo $share_link; ?>">
                                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/social-icons/twitter-18x18-orig.png" /></a>
                                  <a class="wc_tooltipster tooltipstered" target="_blank" href="https://plus.google.com/share?url=<?php echo $share_link; ?>">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/social-icons/google-18x18-orig.png"  /></a>
                            </span>
                        </span>
                        <div class="clearfix"></div>