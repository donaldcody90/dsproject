<?php

get_template_part('templates/category', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php
$count=0;


 while (have_posts()) : the_post(); ?>
    <?php if($count%3==0){ echo '<div class="article_row"><div class="row">'; } ?>
    <div class="article_box"><div class="col-md-4 col-sm-6 col-xs-12">
     <?php get_template_part('templates/content','category-item'); ?>
   </div></div>
    <?php
    $count=$count+1; 
    if($count%3==0){ echo '</div></div>'; } ?>
<?php endwhile;
if($count%3 !=0){
    echo '</div></div>'; 
}
 ?>

<?php if ($wp_query->max_num_pages > 1) : 

?>

<?php if(function_exists('wp_pagenavi')) { ?>
<div class="custom_pagination"> 
    <?php wp_pagenavi(); ?> 
</div>
<?php }else{ ?>
<nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php } ?>
<?php endif;
wp_reset_query();
 ?>
